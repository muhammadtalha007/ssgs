@extends('layouts.app')
@section('content')
    <div class="p-4 ml-3" style="margin-left: 20px">
        <div class="row">
            <div class="col-md-8 mt-2">
                <h2>Students Of Course <span
                        style="text-decoration: underline;color: blue"> {{\App\Course::where('id', $courseId)->first()['name']}}</span>
                </h2>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <h4>{{$errors->first()}}</h4>
                    </div>
                @endif
                @if(\Illuminate\Support\Facades\Session::has('msg'))
                    <div class="alert alert-success" style="margin-bottom: 0px!important;">
                        <h4 style="color: black">{{\Illuminate\Support\Facades\Session::get("msg")}}</h4>
                    </div>
                @endif
            </div>
            <div class="col-md-3 text-right mt-2 ml-5">
                <a class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal111">+ Add Student
                    To This List</a>
            </div>
        </div>
    </div>
    <div class="px-5" style="margin-left: 20px">
        <table class="table table-bordered">
            <thead style="background: #05728f;color: white">
            <tr>
                <th>#</th>
                <th class="text-center">Name</th>
                <th class="text-center">Birthdate</th>
                <th class="text-center">Family</th>
                <th class="text-center">Options</th>
            </tr>
            </thead>
            <tbody>
            @if(count($student) != 0)
                @foreach($student as $key => $item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td class="text-center">{{$item->details->surname1 ?? ''}} {{$item->details->surname2 ?? ''}}, {{$item->student->name}}</td>
                        <td class="text-center">{{$item->details->birthdate ?? ''}}</td>
                        <td class="text-center">Not Assigned Yet</td>
                        <td class="text-center">
                            <a href="{{url('/edit-course/'.$item->id)}}">
                                <button class="btn btn-secondary">Edit Student</button>
                            </a>
                            <a href="{{url('/remove-student/'.$item->student->id.'/course/'. $courseId)}}">
                                <button class="btn btn-danger">Remove Student</button>
                            </a>
                            <a href="{{url('/view-student-of-course/'.$item->id)}}">
                                <button class="btn btn-primary">Assign Family</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td></td>
                    <td></td>
                    <td style="text-align: center">No Student Found Yet In This Course!</td>
                    <td></td>
                    <td></td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="exampleModal111" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Add Student To This Course</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{url("/save-student-added-in-course")}}">
                        @csrf
                        <input type="hidden" name="courseId" id="courseId" value="{{$courseId}}">
                        <div class="form-group" id="message-template-div">
                            <label>Student to be added in this course:</label>
                            <select class="form-control" name="selectedStudent" id="selectedStudent" required>
                                <option>Select Student</option>
                                @foreach(\App\User::where('type' , 'student')->get() as $template)
                                    <option
                                        value="{{$template->id}}">{{$template->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-secondary">Add Student</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
