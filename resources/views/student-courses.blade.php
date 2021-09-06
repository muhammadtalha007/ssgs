@extends('layouts.app')
@section('content')
    <div class="p-4 ml-3" style="margin-left: 20px">
        <div class="row">
            <div class="col-md-8 mt-2">
                <h2>Courses List Of Student </h2>
                @if($errors->any())
                    <div class="alert alert-success">
                        <h4>{{$errors->first()}}</h4>
                    </div>
                @endif
            </div>
{{--            <div class="col-md-3 text-right mt-2 ml-5">--}}
{{--                <a class="btn btn-primary float-right" href="{{url('/add-course')}}">+ Add Course</a>--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="px-5" style="margin-left: 20px">
        <table class="table table-bordered">
            <thead style="background: #05728f;color: white">
            <tr>
                <th>#</th>
                <th class="text-center">Year</th>
                <th class="text-center">City</th>
                <th class="text-center">Start Date</th>
                <th class="text-center">Finish Date</th>
                <th class="text-center">Name</th>
                <th class="text-center">Places</th>
                <th class="text-center">Places Left</th>
                <th class="text-center">Enable</th>
                <th class="text-center">Description</th>
{{--                <th class="text-center">Options</th>--}}
            </tr>
            </thead>
            <tbody>
            @if(count($studentInThisCourse) != 0)
                @foreach($studentInThisCourse as $key => $item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td class="text-center">{{$item->courses->year}}</td>
                        <td class="text-center">{{$item->courses->city}}</td>
                        <td class="text-center">{{$item->courses->start_date}}</td>
                        <td class="text-center">{{$item->courses->finish_date}}</td>
                        <td class="text-center">{{$item->courses->name}}</td>
                        <td class="text-center">{{$item->courses->places}}</td>
                        <td class="text-center">{{$item->courses->places_left}}</td>
                        <td class="text-center">{{$item->courses->enable}}</td>
                        <td class="text-center">{{$item->courses->description}}</td>
{{--                        <td class="text-center">--}}
{{--                            <a href="{{url('/edit-course/'.$item->id)}}">--}}
{{--                                <button class="btn btn-secondary">Edit</button>--}}
{{--                            </a>--}}
{{--                            <a href="{{url('/view-student-of-course/'.$item->id)}}">--}}
{{--                                <button class="btn btn-primary">View Students</button>--}}
{{--                            </a>--}}
{{--                        </td>--}}
                    </tr>
                @endforeach
            @else
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>No Course Found Yet!</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection
