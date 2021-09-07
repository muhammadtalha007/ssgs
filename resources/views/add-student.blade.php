@extends('newlayout.layout')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row no-gutters">
                    <div class="col-6">
                        <h4 class="m-t-5">
                            <i class="fa fa-user"></i>
                            Add Student
                        </h4>
                    </div>
                </div>
            </div>
        </header>

        <div class="outer">
            <div class="inner bg-container">
                <div class="px-5">
                    <div class="container">
                        <h1 class="mt-4 mb-3">Add Student</h1>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <h4>{{$errors->first()}}</h4>
                            </div>
                        @endif
                        <form method="post" action="{{url("/save-student-by-admin")}}" style="width: 800px">
                            {{csrf_field()}}
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Name:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Name" name="name"
                                               id="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Surname:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Surname 1" name="surname1"
                                               id="surname1" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Second Surname:</label>
                                        <input type="text" class="form-control" placeholder="Enter Surname 2" name="surname2"
                                               id="surname2">
                                    </div>
                                    <div class="form-group">
                                        <label>Days:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="days" id="days" placeholder="Enter Days"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <label>Address:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="address" id="address"
                                               placeholder="Enter Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Center where you study:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="school" id="school"
                                               placeholder="Enter Center where you study" required>
                                    </div>
                                    <div class="form-group">
                                        <label>What grade are you in:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="course" id="course"
                                               placeholder="Enter Center where you study" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Last English Notes:</label>
                                        <input type="text" class="form-control" name="englishCourse" id="englishCourse"
                                               placeholder="Enter Last English Notes">
                                    </div>
                                    <div class="form-group">
                                        <label>You need special medication:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="medication" id="medication"
                                               placeholder="Enter Medication" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Describe the medication you need:</label>
                                        <textarea class="form-control" name="describeMedicationYouNeed" rows="3"
                                                  id="describeMedicationYouNeed"
                                                  placeholder="Enter Describe the medication you need"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Some food intolerance:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="foodIntolerances" id="foodIntolerances"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <label>Describe your food intolerances:</label>
                                        <textarea class="form-control" name="describeYourFoodIntolerance" rows="3"
                                                  id="describeYourFoodIntolerance"
                                                  placeholder="Enter Describe your food intolerance"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Other information:</label>
                                        <textarea class="form-control" name="otherInformation" rows="3" id="otherInformation"
                                                  placeholder="Enter Other Information"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Email:<span style="color: red"> *</span></label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password:<span style="color: red"> *</span></label>
                                        <input type="password" class="form-control" name="password" id="pasword"
                                               placeholder="Enter Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Date of birth:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="dob" id="dob"
                                               placeholder="Enter Date of Birth" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile phone?</label>
                                        <input type="text" class="form-control" name="mobilePhone" id="mobilePhone"
                                               placeholder="Enter Mobile Phone">
                                    </div>
                                    <div class="form-group">
                                        <label>Postal Code:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="postalCode" id="postalCode"
                                               placeholder="Enter Postal Code" required>
                                    </div>
                                    <div class="form-group">
                                        <label>City:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter City"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <label>Province:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="province" id="province"
                                               placeholder="Enter Province" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Years of English academies:</label>
                                        <input type="number" class="form-control" name="yearsOfEnglishAcademies"
                                               id="yearsOfEnglishAcademies" placeholder="Enter Years of English Academies">
                                    </div>
                                    <div class="form-group">
                                        <label>Teacher of the previous year:</label>
                                        <input type="number" class="form-control" name="teacherOfPreviousYear"
                                               id="teacherOfPreviousYear" placeholder="Enter Teacher of the previous year">
                                    </div>
                                    <div class="form-group">
                                        <label>Other courses abroad:</label>
                                        <input type="number" class="form-control" name="otherCoursesAbroad" id="otherCoursesAbroad"
                                               placeholder="Enter Other courses abroad">
                                    </div>
                                    <div class="form-group">
                                        <label>Any allergies:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="allergies" id="allergies" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Describe your allergies:</label>
                                        <textarea class="form-control" name="describeYourAllergies" rows="3"
                                                  id="describeYourAllergies" placeholder="Enter Describe your allergies"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="btnFetch" class="btn btn-primary spinner-border">Add Student</button>
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
