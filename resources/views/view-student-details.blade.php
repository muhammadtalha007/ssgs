@extends('newlayout.layout')
@section('content')
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row no-gutters">
                    <div class="col-6">
                        <h4 class="m-t-5">
                            <i class="fa fa-users"></i>
                            Student Details
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
                            <h2>Student Details</h2>
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
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <label style="font-weight: bold">Name</label>
                                <p>{{$user->name ?? ''}}</p>
                            </div>
                            <div style="margin-top: 10px">
                                <label style="font-weight: bold">Email</label>
                                <p>{{$user->email ?? ''}}</p>
                            </div>
                            <div style="margin-top: 10px">
                                <label style="font-weight: bold">Phone</label>
                                <p>{{$user->student->phone ?? ''}}</p>
                            </div>
                            <div style="margin-top: 10px">
                                <label style="font-weight: bold">BirthDate</label>
                                <p>{{$user->student->birthdate ?? ''}}</p>
                            </div>
                            <div style="margin-top: 10px">
                                <label style="font-weight: bold">DNI</label>
                                <p>{{$user->student->dni ?? ''}}</p>
                            </div>
                            <div style="margin-top: 10px">
                                <label style="font-weight: bold">Allergies</label>
                                <p>{{$user->student->allergies ?? ''}}</p>
                            </div>
                            <div style="margin-top: 10px">
                                <label style="font-weight: bold">Allergies Description</label>
                                <p>{{$user->student->allergies_desc ?? ''}}</p>
                            </div>
                            <div style="margin-top: 10px">
                                <label style="font-weight: bold">Other Information</label>
                                <p>{{$user->student->other_information ?? ''}}</p>
                            </div>
                            <div style="margin-top: 10px">
                                <label style="font-weight: bold">School</label>
                                <p>{{$user->student->school ?? ''}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label style="font-weight: bold">Address</label>
                                <p>{{$user->student->address ?? ''}}</p>
                            </div>
                            <div style="margin-top: 10px">
                                <label style="font-weight: bold">Postal Code</label>
                                <p>{{$user->student->postalcode ?? ''}}</p>
                            </div>
                            <div style="margin-top: 10px">
                                <label style="font-weight: bold">City, Province</label>
                                <p>{{$user->student->city ?? ''}}, {{$user->student->province ?? ''}}</p>
                            </div>
                            <div style="margin-top: 10px">
                                <label style="font-weight: bold">Medication</label>
                                <p>{{$user->student->medication ?? ''}}</p>
                            </div>
                            <div style="margin-top: 10px">
                                <label style="font-weight: bold">Medication Description</label>
                                <p>{{$user->student->medication_desc ?? ''}}</p>
                            </div>
                            <div style="margin-top: 10px">
                                <label style="font-weight: bold">Course</label>
                                <p>{{$user->student->course ?? ''}}</p>
                            </div>
                            <div style="margin-top: 10px">
                                <label style="font-weight: bold">English Score</label>
                                <p>{{$user->student->english_score ?? ''}}</p>
                            </div>
                            <div style="margin-top: 10px">
                                <label style="font-weight: bold">English Academy years</label>
                                <p>{{$user->student->english_academy_years ?? ''}}</p>
                            </div>
                            <div style="margin-top: 10px">
                                <label style="font-weight: bold">English Academy teachers</label>
                                <p>{{$user->student->english_academy_teachers ?? ''}}</p>
                            </div>
                            <div style="margin-top: 10px">
                                <label style="font-weight: bold">Other Courses abroad</label>
                                <p>{{$user->student->other_courses_abroad ?? ''}}</p>
                            </div>
                        </div>
                    </div>
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
