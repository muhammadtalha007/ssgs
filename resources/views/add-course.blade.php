@extends('newlayout.layout')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row no-gutters">
                    <div class="col-6">
                        <h4 class="m-t-5">
                            <i class="fa fa-book"></i>
                            Add Course
                        </h4>
                    </div>
                </div>
            </div>
        </header>

        <div class="outer">
            <div class="inner bg-container">
                <div class="px-5">
                    <div class="container">
                        <h1 class="mt-4 mb-3">Add Course</h1>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <h4>{{$errors->first()}}</h4>
                            </div>
                        @endif
                        <form method="post" action="{{url("/save-course")}}" style="width: 400px">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Year:<span style="color: red"> *</span></label>
                                <input type="text" class="form-control" placeholder="Enter Year" name="year" id="year" required>
                            </div>
                            <div class="form-group">
                                <label>Course Name:<span style="color: red"> *</span></label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group">
                                <label>City:<span style="color: red"> *</span></label>
                                <select class="form-control" name="city" id="city" required>
                                    <option value="Winchester">Winchester</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Start Date:<span style="color: red"> *</span></label>
                                <input type="date" class="form-control" name="startDate" id="startDate"
                                       placeholder="Enter Start Date" required>
                            </div>
                            <div class="form-group">
                                <label>End Date:<span style="color: red"> *</span></label>
                                <input type="date" class="form-control" name="endDate" id="endDate" placeholder="Enter End Date" required>
                            </div>
                            <div class="form-group">
                                <label>Maximum places of the course:<span style="color: red"> *</span></label>
                                <input type="text" class="form-control" name="places" id="places" placeholder="Enter Places" required>
                            </div>
                            <div class="form-group">
                                <label>Places Left:</label>
                                <input type="text" class="form-control" name="placesLeft" id="placesLeft" placeholder="Enter Places Left">
                            </div>
                            <div class="form-group">
                                <label>Public course on the web: <span style="color: red"> *</span></label>
                                <input style="width: 20px;height: 20px;" type="checkbox" name="enable" id="enable" required>
                            </div>
                            <div class="form-group">
                                <label>Description:</label>
                                <textarea class="form-control" cols="2" rows="3" name="description" id="description"
                                          placeholder="Enter Description"></textarea>
                            </div>
                            <button type="submit" id="btnFetch" class="btn btn-primary spinner-border">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $(document).ready(function () {
// Prepare the preview for profile picture
            $("#photo").change(function () {
                readURL(this);
            });
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#photopreview').attr('src', e.target.result).fadeIn('slow');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
