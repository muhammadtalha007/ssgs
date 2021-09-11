@extends('newlayout.layout')
@section('content')
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row no-gutters">
                    <div class="col-6">
                        <h4 class="m-t-5">
                            <i class="fa fa-users"></i>
                            Assigned Students
                        </h4>
                    </div>
                </div>
            </div>
        </header>

        <div class="outer">
            <div class="inner bg-container">
                <div class="p-4 ml-3" style="margin-left: 20px">
                    <div class="row">
                        <div class="col-md-8 mt-2">
                            <h2>Assigned Students</h2>
                            @if($errors->any())
                                <div class="alert alert-success">
                                    <h4>{{$errors->first()}}</h4>
                                </div>
                            @endif
                        </div>
{{--                        <div class="col-md-3 text-right mt-2 ml-5">--}}
{{--                            <a class="btn btn-primary float-right" href="{{url('/add-student-view')}}">+ Add a Student</a>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="px-5" style="margin-left: 20px">
                    <table class="table table-bordered" id="table_id1">
                        <thead style="background: #05728f;color: white">
                        <tr>
                            <th>#</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Birthdate</th>
                            <th class="text-center">DNI</th>
                            <th class="text-center">Allergies</th>
                            <th class="text-center">Food Intolerances</th>
                            <th class="text-center">Special Medication</th>
                            <th class="text-center">Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($students) != 0)
                            @foreach($students as $key => $item)
                                <tr>
                                    <td>{{$key + 1}} </td>
                                    <td class="text-center">{{$item->user->student->surname1 ?? ''}} {{$item->student->surname2 ?? ''}},{{$item->name}}</td>
                                    <td class="text-center">{{$item->user->student->birthdate ?? ''}}</td>
                                    <td class="text-center">{{$item->user->student->dni ?? ''}}</td>
                                    <td class="text-center">{{$item->user->student->allergies ?? ''}}</td>
                                    <td class="text-center">{{$item->user->student->foodintolerances ?? ''}}</td>
                                    <td class="text-center">{{$item->user->student->medication ?? ''}}</td>
                                    <td class="text-center">
                                        <a href="{{url('/view-details-of-students/'.$item->user->id)}}">
                                            <button class="btn btn-primary" >View Details</button>
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
            </div>
        </div>
    </div>

    <div class="modal" id="myModal325">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Modal body..
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#table_id1').DataTable();
        });
    </script>
@endsection
