@extends('layouts.app')
@section('content')
    <div class="p-4 ml-3" style="margin-left: 20px">
        <div class="row">
            <div class="col-md-8 mt-2">
                <h2>Students</h2>
                @if($errors->any())
                    <div class="alert alert-success">
                        <h4>{{$errors->first()}}</h4>
                    </div>
                @endif
            </div>
            <div class="col-md-3 text-right mt-2 ml-5">
                <a class="btn btn-primary float-right" href="{{url('/add-student-view')}}">+ Add a Student</a>
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
                <th class="text-center">DNI</th>
                <th class="text-center">Allergies</th>
                <th class="text-center">Food Intolerances</th>
                <th class="text-center">Special Medication</th>
                <th class="text-center">Last time updated</th>
                <th class="text-center">Options</th>
            </tr>
            </thead>
            <tbody>
            @if(count($users) != 0)
                @foreach($users as $key => $item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td class="text-center">{{$item->student->surname1 ?? ''}} {{$item->student->surname2 ?? ''}},{{$item->name}}</td>
                        <td class="text-center">{{$item->student->birthdate ?? ''}}</td>
                        <td class="text-center">{{$item->student->dni ?? ''}}</td>
                        <td class="text-center">{{$item->student->allergies ?? ''}}</td>
                        <td class="text-center">{{$item->student->foodintolerances ?? ''}}</td>
                        <td class="text-center">{{$item->student->medication ?? ''}}</td>
                        <td class="text-center">{{$item->student->updated_at ?? ''}}</td>
                        <td class="text-center">
                            <a href="{{url('/edit-student/'.$item->id)}}">
                                <button class="btn btn-secondary">Edit</button>
                            </a>
                            <a href="{{url('/view-student-of-course/'.$item->id)}}">
                                <button class="btn btn-primary">Courses Records</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>No Student Found Yet!</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection
