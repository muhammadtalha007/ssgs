<?php

namespace App\Http\Controllers;

use App\Course;
use App\student;
use App\StudentsAddedInCourse;
use App\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getCourseListView()
    {
        $courses = Course::all();
        return view('courses')->with(['courses' => $courses]);
    }

    public function getAddCourseView()
    {
        return view('add-course');
    }

    public function saveCourse(Request $request)
    {
        try {
            $course = new Course();
            $course->year = $request->year;
            $course->city = $request->city;
            $course->start_date = $request->startDate;
            $course->finish_date = $request->endDate;
            $course->name = $request->name;
            $course->places = $request->places;
            $course->places_left = $request->placesLeft;
            $course->enable = $request->enable;
            $course->description = $request->description;
            $course->save();
            return redirect('courses')->withErrors(['Course Added Successfully!']);
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

    public function saveEditedCourse(Request $request)
    {
        try {
            $course = Course::where('id', $request->courseId)->first();
            $course->year = $request->year;
            $course->city = $request->city;
            $course->start_date = $request->startDate;
            $course->finish_date = $request->endDate;
            $course->name = $request->name;
            $course->places = $request->places;
            $course->places_left = $request->placesLeft;
            $course->enable = $request->enable;
            $course->description = $request->description;
            $course->update();
            return redirect()->back()->withErrors(['Course Updated Successfully!']);
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

    public function editCourseView($courseId)
    {
        $course = Course::where('id', $courseId)->first();
        return view('edit-course')->with(['course' => $course]);
    }

    public function studentsOfCourseView($courseId)
    {
        $students = StudentsAddedInCourse::where('course_id', $courseId)->get();
        foreach ($students as $stud) {
            $stud['student'] = User::where('id', $stud->student_id)->first();
            if (student::where('user_id', $stud->student_id)->exists()) {
                $stud['details'] = student::where('user_id', $stud->student_id)->first();
            } else {
                $stud['details'] = [];
            }
        }
        return view('view-student-course')->with(['student' => $students, 'courseId' => $courseId]);
    }

    public function getStudentsOfCourse($studentId)
    {
        $courses = StudentsAddedInCourse::where('student_id', $studentId)->get();
//        return json_encode($courses);
        foreach ($courses as $stud) {
            $stud['course'] = Course::where('id', $stud->course_id)->first();
        }
        return view('view-course-of-students')->with(['courses' => $courses, 'student' => User::where('id', $studentId)->first()]);
    }

    public function saveStudentAddedInCourse(Request $request)
    {
        if (StudentsAddedInCourse::where(['course_id' => $request->courseId, 'student_id' => $request->selectedStudents])->exists()) {
            return redirect()->back()->withErrors(['This student already exists in this Course.']);
        } else {
            $studentsAddedInCourse = new StudentsAddedInCourse();
            $studentsAddedInCourse->course_id = $request->courseId;
            $studentsAddedInCourse->student_id = $request->selectedStudent;
            $studentsAddedInCourse->save();
            session()->flash('msg', 'Student Added In This Course Successfully!');
            return redirect()->back();
//            return redirect()->back()->withErrors(['']);
        }
    }

    public function removeStudent($studentId, $courseId)
    {
        try {
            StudentsAddedInCourse::where(['course_id' => $courseId, 'student_id' => $studentId])->delete();
            session()->flash('msg', 'Student Deleted From This Course Successfully!');
            return redirect()->back();
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

}
