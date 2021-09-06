@extends('layouts.app')
@section('content')
    <div class="p-4 ml-3" style="margin-left: 20px">
        <div class="row">
            <div class="col-md-8 mt-2">
                <h2>Active Courses</h2>
                <p>You can add yourself to any active course</p>
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
                <th class="text-center">Options</th>
            </tr>
            </thead>
            <tbody>
            @if(count($courses) != 0)
                @foreach($courses as $key => $item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td class="text-center">{{$item->year}}</td>
                        <td class="text-center">{{$item->city}}</td>
                        <td class="text-center">{{$item->start_date}}</td>
                        <td class="text-center">{{$item->finish_date}}</td>
                        <td class="text-center">{{$item->name}}</td>
                        <td class="text-center">{{$item->places}}</td>
                        <td class="text-center">{{$item->places_left}}</td>
                        <td class="text-center">{{$item->enable}}</td>
                        {{--                        <td class="text-center">{{$item->description}}</td>--}}
                        <td class="text-center">
                            <a href="{{url('/add-me/'.$item->id)}}">
                                <button class="btn btn-success">Register</button>
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
