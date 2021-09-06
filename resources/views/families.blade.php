@extends('layouts.app')
@section('content')
    <div class="p-4 ml-3" style="margin-left: 20px">
        <div class="row">
            <div class="col-md-8 mt-2">
                <h2>Families</h2>
                @if($errors->any())
                    <div class="alert alert-success">
                        <h4>{{$errors->first()}}</h4>
                    </div>
                @endif
            </div>
            <div class="col-md-3 text-right mt-2 ml-5">
                <a class="btn btn-primary float-right" href="{{url('/add-family-view')}}">+ Add a Family</a>
            </div>
        </div>
    </div>
    <div class="px-5" style="margin-left: 20px">
        <table class="table table-bordered">
            <thead style="background: #05728f;color: white">
            <tr>
                <th>#</th>
                <th class="text-center">City</th>
                <th class="text-center">Family Surname</th>
                <th class="text-center">Email</th>
                <th class="text-center">Postal Code</th>
                <th class="text-center">Phone</th>
                <th class="text-center">Last time updated</th>
                <th class="text-center">Options</th>
            </tr>
            </thead>
            <tbody>
            @if(count($users) != 0)
                @foreach($users as $key => $item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td class="text-center">{{$item->family->city ?? ''}}</td>
                        <td class="text-center">{{$item->family->familysurname ?? ''}}</td>
                        <td class="text-center">{{$item->email ?? ''}}</td>
                        <td class="text-center">{{$item->family->postalcode ?? ''}}</td>
                        <td class="text-center">{{$item->family->phone ?? ''}}</td>
                        <td class="text-center">{{$item->family->updated_at ?? ''}}</td>
                        <td class="text-center">
                            <a href="{{url('/edit-family/'.$item->id)}}">
                                <button class="btn btn-secondary">Edit</button>
                            </a>
                            <a href="{{url('/view-student-of-course/'.$item->id)}}">
                                <button class="btn btn-primary">Courses Records Of Student</button>
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
                    <td>No Family Found Yet!</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection
