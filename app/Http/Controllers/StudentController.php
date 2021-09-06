<?php

namespace App\Http\Controllers;

use App\Course;
use App\student;
use App\StudentsAddedInCourse;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function getStudentProfileView()
    {
        $user = User::where('id', Session::get('userId'))->first();
        if (student::where('user_id', $user->id)->exists()) {
            $familyData = student::where('user_id', $user->id)->first();
            $user['studentData'] = $familyData;
        }
        return view('student-profile')->with(['user' => $user]);
    }

    public function saveStudentProfile(Request $request)
    {
        try {
            if (student::where('user_id', $request->userId)->exists()) {
                $student = student::where('user_id', $request->userId)->first();
                $student->surname1 = $request->surname1;
                $student->surname2 = $request->surname2;
                $student->birthdate = $request->dob;
                $student->dni = $request->days;
                $student->phone = $request->mobilePhone;
                $student->address = $request->address;
                $student->postalcode = $request->postalCode;
                $student->city = $request->city;
                $student->province = $request->province;
                $student->medication = $request->medication;
                $student->medication_desc = $request->describeMedicationYouNeed;
                $student->allergies = $request->allergies;
                $student->allergies_desc = $request->describeYourAllergies;
                $student->foodintolerances = $request->foodIntolerances;
                $student->foodintolerances_desc = $request->describeYourFoodIntolerance;
                $student->other_information = $request->otherInformation;
                $student->school = $request->school;
                $student->course = $request->course;
                $student->english_score = $request->englishCourse;
                $student->english_academy_years = $request->yearsOfEnglishAcademies;
                $student->english_latest_teacher = $request->teacherOfPreviousYear;
                $student->other_courses_abroad = $request->otherCoursesAbroad;
                $student->datetime_register = date('Y-m-d H:i:s');
                $student->update();
            } else {
                $student = new student();
                $student->user_id = $request->userId;
                $student->surname1 = $request->surname1;
                $student->surname2 = $request->surname2;
                $student->birthdate = $request->dob;
                $student->dni = $request->days;
                $student->phone = $request->mobilePhone;
                $student->address = $request->address;
                $student->postalcode = $request->postalCode;
                $student->city = $request->city;
                $student->province = $request->province;
                $student->medication = $request->medication;
                $student->medication_desc = $request->describeMedicationYouNeed;
                $student->allergies = $request->allergies;
                $student->allergies_desc = $request->describeYourAllergies;
                $student->foodintolerances = $request->foodIntolerances;
                $student->foodintolerances_desc = $request->describeYourFoodIntolerance;
                $student->other_information = $request->otherInformation;
                $student->school = $request->school;
                $student->course = $request->course;
                $student->english_score = $request->englishCourse;
                $student->english_academy_years = $request->yearsOfEnglishAcademies;
                $student->english_latest_teacher = $request->teacherOfPreviousYear;
                $student->other_courses_abroad = $request->otherCoursesAbroad;
                $student->datetime_register = date('Y-m-d H:i:s');
                $student->save();
            }
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

    public function getStudentListView()
    {
        $users = User::where('type', 'student')->get();
        foreach ($users as $item) {
            $item['student'] = student::where('user_id', $item->id)->first();
        }
        return view('students')->with(['users' => $users]);
    }

    public function getAddStudentView()
    {
        return view('add-student');
    }

    public function saveStudentByAdmin(Request $request)
    {
        try {
            if (User::where('email', $request->email)->exists()) {
                return redirect()->back()->withErrors(['Email Already Exists!']);
            } else {
                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = md5($request->password);
                $user->type = 'student';
                $user->save();
            }

            $student = new student();
            $student->user_id = $user->id;
            $student->surname1 = $request->surname1;
            $student->surname2 = $request->surname2;
            $student->birthdate = $request->dob;
            $student->dni = $request->days;
            $student->phone = $request->mobilePhone;
            $student->address = $request->address;
            $student->postalcode = $request->postalCode;
            $student->city = $request->city;
            $student->province = $request->province;
            $student->medication = $request->medication;
            $student->medication_desc = $request->describeMedicationYouNeed;
            $student->allergies = $request->allergies;
            $student->allergies_desc = $request->describeYourAllergies;
            $student->foodintolerances = $request->foodIntolerances;
            $student->foodintolerances_desc = $request->describeYourFoodIntolerance;
            $student->other_information = $request->otherInformation;
            $student->school = $request->school;
            $student->course = $request->course;
            $student->english_score = $request->englishCourse;
            $student->english_academy_years = $request->yearsOfEnglishAcademies;
            $student->english_latest_teacher = $request->teacherOfPreviousYear;
            $student->other_courses_abroad = $request->otherCoursesAbroad;
            $student->datetime_register = date('Y-m-d H:i:s');
            $student->save();
            $users = User::where('type', 'student')->get();
            foreach ($users as $item) {
                $item['student'] = student::where('user_id', $item->id)->first();
            }
            return view('students')->with(['users' => $users]);
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

    public function getEditStudentView($studentId)
    {
        $user = User::where('id', $studentId)->first();
        if (student::where('user_id', $user->id)->exists()) {
            $familyData = student::where('user_id', $user->id)->first();
            $user['studentData'] = $familyData;
        }
        return view('edit-student')->with(['user' => $user]);
    }

    public function saveStudentEditedDetails(Request $request)
    {
        try {
            if (User::where('id', $request->userId)->exists()) {
                $user = User::where('id', $request->userId)->first();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = md5($request->password);
                $user->update();
            } else {
                return redirect()->back()->withErrors(['Email Already Exists!']);
            }

            $student = student::where('user_id', $request->userId)->first();
            $student->surname1 = $request->surname1;
            $student->surname2 = $request->surname2;
            $student->birthdate = $request->dob;
            $student->dni = $request->days;
            $student->phone = $request->mobilePhone;
            $student->address = $request->address;
            $student->postalcode = $request->postalCode;
            $student->city = $request->city;
            $student->province = $request->province;
            $student->medication = $request->medication;
            $student->medication_desc = $request->describeMedicationYouNeed;
            $student->allergies = $request->allergies;
            $student->allergies_desc = $request->describeYourAllergies;
            $student->foodintolerances = $request->foodIntolerances;
            $student->foodintolerances_desc = $request->describeYourFoodIntolerance;
            $student->other_information = $request->otherInformation;
            $student->school = $request->school;
            $student->course = $request->course;
            $student->english_score = $request->englishCourse;
            $student->english_academy_years = $request->yearsOfEnglishAcademies;
            $student->english_latest_teacher = $request->teacherOfPreviousYear;
            $student->other_courses_abroad = $request->otherCoursesAbroad;
            $student->datetime_register = date('Y-m-d H:i:s');
            $student->update();
            $users = User::where('type', 'student')->get();
            foreach ($users as $item) {
                $item['student'] = student::where('user_id', $item->id)->first();
            }
            return view('students')->with(['users' => $users]);
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

    public function getStudentCourseListView()
    {
        $studentInThisCourse = StudentsAddedInCourse::where('student_id', Session::get('userId'))->get();
        foreach ($studentInThisCourse as $item) {
            $item['courses'] = Course::where('id', $item->course_id)->first();
        }
        return view('student-courses')->with(['studentInThisCourse' => $studentInThisCourse]);
    }

}