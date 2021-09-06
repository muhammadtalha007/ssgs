@extends('layouts.app')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <div class="px-5">
        <div class="container">
            <h1 class="mt-4 mb-3">Student Details</h1>
            @if($errors->any())
                <div class="alert alert-danger">
                    <h4>{{$errors->first()}}</h4>
                </div>
            @endif
            <form method="post" action="{{url("/save-student-profile")}}" style="width: 800px">
                {{csrf_field()}}
                <div class="row">

                    <input type="hidden" name="userId" id="userId" value="{{$user->id}}">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Surname:<span style="color: red"> *</span></label>
                            <input type="text" class="form-control" placeholder="Enter Surname 1" name="surname1" id="surname1"
                                   value="{{$user->studentData->surname1 ?? ''}}" required>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email"
                                   value="{{$user->email}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Days:<span style="color: red"> *</span></label>
                            <input type="text" class="form-control" name="days" id="days" placeholder="Enter Days"
                                   value="{{$user->studentData->dni ?? ''}}" required>
                        </div>
                        <div class="form-group">
                            <label>Address:<span style="color: red"> *</span></label>
                            <input type="text" class="form-control" name="address" id="address"
                                   placeholder="Enter Address"
                                   value="{{$user->studentData->address ?? ''}}" required>
                        </div>
                        <div class="form-group">
                            <label>Center where you study:<span style="color: red"> *</span></label>
                            <input type="text" class="form-control" name="school" id="school"
                                   placeholder="Enter Center where you study"
                                   value="{{$user->studentData->school ?? ''}}" required>
                        </div>
                        <div class="form-group">
                            <label>What grade are you in:<span style="color: red"> *</span></label>
                            <input type="text" class="form-control" name="course" id="course"
                                   placeholder="Enter Center where you study"
                                   value="{{$user->studentData->course ?? ''}}" required>
                        </div>
                        <div class="form-group">
                            <label>Last English Notes:</label>
                            <input type="text" class="form-control" name="englishCourse" id="englishCourse"
                                   placeholder="Enter Last English Notes"
                                   value="{{$user->studentData->english_score ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label>You need special medication:<span style="color: red"> *</span></label>
                            <input type="text" class="form-control" name="medication" id="medication"
                                   placeholder="Enter Medication"
                                   value="{{$user->studentData->medication ?? ''}}" required>
                        </div>
                        <div class="form-group">
                            <label>Describe the medication you need:</label>
                            <textarea class="form-control" name="describeMedicationYouNeed" rows="3"
                                      id="describeMedicationYouNeed"
                                      placeholder="Enter Describe the medication you need">
                                        {{$user->studentData->medication_desc ?? ''}}
                                    </textarea>
                        </div>
                        <div class="form-group">
                            <label>Some food intolerance:<span style="color: red"> *</span></label>
                            <input type="text" class="form-control" name="foodIntolerances" id="foodIntolerances"
                                   value="{{$user->studentData->foodintolerances ?? ''}}" required>
                        </div>
                        <div class="form-group">
                            <label>Describe your food intolerances:</label>
                            <textarea class="form-control" name="describeYourFoodIntolerance" rows="3"
                                      id="describeYourFoodIntolerance"
                                      placeholder="Enter Describe your food intolerance">
                                        {{$user->studentData->foodintolerances_desc ?? ''}}
                                    </textarea>
                        </div>
                        <div class="form-group">
                            <label>Other information:</label>
                            <textarea class="form-control" name="otherInformation" rows="3"
                                      id="otherInformation"
                                      placeholder="Enter Other Information">
                                        {{$user->studentData->other_information ?? ''}}
                                    </textarea>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Second Surname:</label>
                            <input type="text" class="form-control" placeholder="Enter Surname 2" name="surname2" id="surname2"
                                   value="{{$user->studentData->surname2 ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label>Date of birth:<span style="color: red"> *</span></label>
                            <input type="text" class="form-control" name="dob" id="dob" placeholder="Enter Date of Birth"
                                   value="{{$user->studentData->birthdate ?? ''}}" required>
                        </div>
                        <div class="form-group">
                            <label>Mobile phone?</label>
                            <input type="text" class="form-control" name="mobilePhone" id="mobilePhone"
                                   placeholder="Enter Mobile Phone"
                                   value="{{$user->studentData->phone ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label>Postal Code:<span style="color: red"> *</span></label>
                            <input type="text" class="form-control" name="postalCode" id="postalCode"
                                   placeholder="Enter Postal Code"
                                   value="{{$user->studentData->postalcode ?? ''}}" required>
                        </div>
                        <div class="form-group">
                            <label>City:<span style="color: red"> *</span></label>
                            <input type="text" class="form-control" name="city" id="city"
                                   placeholder="Enter City"
                                   value="{{$user->studentData->city ?? ''}}" required>
                        </div>
                        <div class="form-group">
                            <label>Province:<span style="color: red"> *</span></label>
                            <input type="text" class="form-control" name="province" id="province"
                                   placeholder="Enter Province"
                                   value="{{$user->studentData->province ?? ''}}" required>
                        </div>
                        <div class="form-group">
                            <label>Years of English academies:</label>
                            <input type="number" class="form-control" name="yearsOfEnglishAcademies" id="yearsOfEnglishAcademies"
                                   placeholder="Enter Years of English Academies"
                                   value="{{$user->studentData->english_academy_years ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label>Teacher of the previous year:</label>
                            <input type="number" class="form-control" name="teacherOfPreviousYear" id="teacherOfPreviousYear"
                                   placeholder="Enter Teacher of the previous year"
                                   value="{{$user->studentData->english_latest_teacher ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label>Other courses abroad:</label>
                            <input type="number" class="form-control" name="otherCoursesAbroad" id="otherCoursesAbroad"
                                   placeholder="Enter Other courses abroad"
                                   value="{{$user->studentData->other_courses_abroad ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label>Any allergies:<span style="color: red"> *</span></label>
                            <input type="text" class="form-control" name="allergies" id="allergies"
                                   value="{{$user->studentData->allergies ?? ''}}" required>
                        </div>
                        <div class="form-group">
                            <label>Describe your allergies:</label>
                            <textarea class="form-control" name="describeYourAllergies" rows="3"
                                      id="describeYourAllergies"
                                      placeholder="Enter Describe your allergies">
                                        {{$user->studentData->allergies_desc ?? ''}}
                                    </textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" id="btnFetch" class="btn btn-primary spinner-border">Update</button>
            </form>
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
