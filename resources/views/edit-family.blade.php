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
                            Edit Profile
                        </h4>
                    </div>
                </div>
            </div>
        </header>

        <div class="outer">
            <div class="inner bg-container">
                <div class="px-5">
                    <div class="container">
                        <h1 class="mt-4 mb-3">Edit Profile Details</h1>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <h4>{{$errors->first()}}</h4>
                            </div>
                        @endif
                        <form method="post" action="{{url("/save-family-edited-details")}}" style="width: 800px">
                            {{csrf_field()}}
                            <div class="row">

                                <input type="hidden" name="userId" id="userId" value="{{$user->id}}">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Name:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name"
                                               value="{{$user->name}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email:<span style="color: red"> *</span></label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email"
                                               value="{{$user->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Password:<span style="color: red"> *</span></label>
                                        <input type="password" class="form-control" name="password" id="password"
                                               placeholder="Enter Password"
                                               value="{{$user->password}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Contact phone number:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone"
                                               value="{{$user->familyData->phone ?? ''}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Any pets in the house:<span style="color: red"> *</span></label>
                                        <input type="number" class="form-control" name="pets" id="pets" placeholder="Enter Pets"
                                               value="{{$user->familyData->pets ?? ''}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>What kind?</label>
                                        <input type="text" class="form-control" name="petsKind" id="petsKind"
                                               placeholder="Enter Pets Kind"
                                               value="{{$user->familyData->pets_desc ?? ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Beds in students room:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="bedsStudentsRoom" id="bedsStudentsRoom"
                                               placeholder="Enter No.of beds in Students Room"
                                               value="{{$user->familyData->student_beds ?? ''}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Room exclusively for our students?<span style="color: red"> *</span></label>
                                        <select class="form-control" name="studentsRoom" id="studentsRoom" required>
                                            <option value="">Select Option</option>
                                            <option {{$user->familyData->student_room ?? '' == 'Yes' ? 'selected': ''}} value="Yes">
                                                Yes
                                            </option>
                                            <option {{$user->familyData->student_room ?? '' == 'No' ? 'selected': ''}} value="No">
                                                No
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Are you happy to host a student who is coeliac?<span
                                                style="color: red"> *</span></label>
                                        <select class="form-control" name="studentCoeliac" id="studentCoeliac" required>
                                            <option value="">Select Option</option>
                                            <option
                                                {{$user->familyData->student_coeliac ?? '' == 'Yes' ? 'selected': ''}} value="Yes">
                                                Yes
                                            </option>
                                            <option
                                                {{$user->familyData->student_coeliac ?? '' == 'No' ? 'selected': ''}} value="No">No
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Are you happy to host a student who is lactose intolerant? <span style="color: red"> *</span></label>
                                        <select class="form-control" name="studentFoodintolerance" id="studentFoodintolerance"
                                                required>
                                            <option value="">Select Option</option>
                                            <option
                                                {{$user->familyData->student_foodintolerance ?? '' == 'Yes' ? 'selected': ''}} value="Yes">
                                                Yes
                                            </option>
                                            <option
                                                {{$user->familyData->student_foodintolerance ?? '' == 'No' ? 'selected': ''}} value="No">
                                                No
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Adult 1 Name:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="adult1Name" id="adult1Name"
                                               placeholder="Enter Adult 1 name"
                                               value="{{$user->familyData->adult1_name ?? ''}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Adult 1 Surname:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="adult1Surname" id="adult1Surname"
                                               placeholder="Enter Adult 1 Surname"
                                               value="{{$user->familyData->adult1_surname ?? ''}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Adult 1 Occupation:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="adult1Occupation" id="adult1Occupation"
                                               placeholder="Enter Adult 1 Occupation"
                                               value="{{$user->familyData->adult1_occupation ?? ''}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Are you happy to host a student with any other alimentary allergy /
                                            restriction?<span style="color: red"> *</span></label>
                                        <select class="form-control" name="studentAllergy" id="studentAllergy" required>
                                            <option value="">Select Option</option>
                                            <option
                                                {{$user->familyData->student_allergy ?? '' == 'Yes' ? 'selected': ''}} value="Yes">
                                                Yes
                                            </option>
                                            <option
                                                {{$user->familyData->student_allergy ?? '' == 'No' ? 'selected': ''}} value="No">No
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>How many children live in the house?<span style="color: red"> *</span></label>
                                        <input type="number" class="form-control" name="childLiveInHouse" id="childLiveInHouse"
                                               placeholder="Enter No.of Children Live in House"
                                               value="{{$user->familyData->house_children ?? ''}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Child 1 Name:</label>
                                        <input type="text" class="form-control" name="child1Name" id="child1Name"
                                               placeholder="Enter Child 1 Name"
                                               value="{{$user->familyData->house_child1_name ?? ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label>International Bank Details IBAN:</label>
                                        <textarea class="form-control" name="internationalBankDetailsIBAN"
                                                  id="internationalBankDetailsIBAN" rows="3"
                                                  placeholder="Enter International Bank Details IBAN">
                                        {{$user->familyData->bankdetails_IBAN ?? ''}}
                                    </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>International Bank Details SWIFT/BIC:<span style="color: red"> *</span></label>
                                        <textarea class="form-control" name="bankDetailsSwiftBIC" id="bankDetailsSwiftBIC" rows="3"
                                                  placeholder="Enter International Bank Details SWIFT/BIC" required>
                                        {{$user->familyData->bankdetails_SWIFT_BIC ?? ''}}
                                    </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>National Bank Details Sort code:<span style="color: red"> *</span></label>
                                        <textarea class="form-control" name="bankDetailsSortCode" id="bankDetailsSortCode" rows="3"
                                                  placeholder="Enter National Bank Details Sort code" required>
                                        {{$user->familyData->bankdetails_sortcode ?? ''}}
                                    </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>National Bank Details Account number:<span style="color: red"> *</span></label>
                                        <textarea class="form-control" name="bankDetailsAccountNumber" id="bankDetailsAccountNumber"
                                                  rows="3"
                                                  placeholder="Enter National Bank Details Account number" required>
                                        {{$user->familyData->bankdetails_account_number ?? ''}}
                                    </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Description about your family and home:</label>
                                        <textarea class="form-control" name="descriptionAboutFamilyAndHome" rows="3"
                                                  id="descriptionAboutFamilyAndHome"
                                                  placeholder="Enter Description about your family and home">
                                        {{$user->familyData->family_desc ?? ''}}
                                    </textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Family Surname:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Family Surname"
                                               name="familySurname"
                                               id="familySurname" value="{{$user->familyData->familysurname ?? ''}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>City:<span style="color: red"> *</span></label>
                                        <select class="form-control" name="city" id="city" required>
                                            <option value="">Select City</option>
                                            <option value="Winchester" {{$user->familyData->city ?? '' == 'Winchester' ? 'selected' : ''}}>Winchester</option>
                                        </select>
{{--                                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter City"--}}
{{--                                               value="{{$user->familyData->city ?? ''}}" required>--}}
                                    </div>
                                    <div class="form-group">
                                        <label>Address:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="address" id="address"
                                               placeholder="Enter Address"
                                               value="{{$user->familyData->address ?? ''}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Postal Code:<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="postalCode" id="postalCode"
                                               placeholder="Enter Postal Code" value="{{$user->familyData->postalcode ?? ''}}"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <label>Prefer Boys, girls or any<span style="color: red"> *</span></label>
                                        <input type="text" class="form-control" name="studentPreference" id="studentPreference"
                                               placeholder="Enter Student Preference"
                                               value="{{$user->familyData->student_gender_preference ?? ''}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Number of students to host<span style="color: red"> *</span></label>
                                        <input type="number" class="form-control" name="noStudentHost" id="noStudentHost"
                                               placeholder="Enter No.of Students to Host"
                                               value="{{$user->familyData->student_number ?? ''}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Wardrobe only for our students?<span style="color: red"> *</span></label>
                                        <select class="form-control" name="studentWardrobe" id="studentWardrobe" required>
                                            <option value="">Select Option</option>
                                            <option
                                                {{$user->familyData->student_wardrobe ?? '' == 'Yes' ? 'selected': ''}} value="Yes">
                                                Yes
                                            </option>
                                            <option
                                                {{$user->familyData->student_wardrobe ?? '' == 'No' ? 'selected': ''}} value="No">No
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Number of bathrooms in the house?</label>
                                        <input type="number" class="form-control" name="noBathroomInHouse" id="noBathroomInHouse"
                                               placeholder="Enter No.of Bathrooms in House"
                                               value="{{$user->familyData->house_bathrooms ?? ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Adult 2 Name:</label>
                                        <input type="text" class="form-control" name="adult2Name" id="adult2Name"
                                               placeholder="Enter Adult 1 name"
                                               value="{{$user->familyData->adult2_name ?? ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Adult 2 Surname:</label>
                                        <input type="text" class="form-control" name="adult2Surname" id="adult2Surname"
                                               placeholder="Enter Adult 2 Surname"
                                               value="{{$user->familyData->adult2_surname ?? ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Adult 2 Occupation:</label>
                                        <input type="text" class="form-control" name="adult2Occupation" id="adult2Occupation"
                                               placeholder="Enter Adult 2 Occupation"
                                               value="{{$user->familyData->adult2_occupation ?? ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Child 2 Name:</label>
                                        <input type="text" class="form-control" name="child2Name" id="child2Name"
                                               placeholder="Enter Child 2 Name"
                                               value="{{$user->familyData->house_child2_name ?? ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Child 2 Date of birth:</label>
                                        <input type="text" class="form-control" name="child2Birthdate" id="child2Birthdate"
                                               placeholder="Enter Child 2 Birthdate"
                                               value="{{$user->familyData->house_child2_birthdate ?? ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Child 2 Gender:</label>
                                        <input type="text" class="form-control" name="child2Gender" id="child2Gender"
                                               placeholder="Enter Child 2 Gender"
                                               value="{{$user->familyData->house_child2_gender ?? ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Child 1 Date of birth:</label>
                                        <input type="text" class="form-control" name="child1Birthdate" id="child1Birthdate"
                                               placeholder="Enter Child 1 Birthdate"
                                               value="{{$user->familyData->house_child1_birthdate ?? ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Child 1 Gender:</label>
                                        <input type="text" class="form-control" name="child1Gender" id="child1Gender"
                                               placeholder="Enter Child 1 Gender"
                                               value="{{$user->familyData->house_child1_gender ?? ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Child 3 Name:</label>
                                        <input type="text" class="form-control" name="child3Name" id="child3Name"
                                               placeholder="Enter Child 3 Name"
                                               value="{{$user->familyData->house_child3_name ?? ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Child 3 Date of birth:</label>
                                        <input type="text" class="form-control" name="child3Birthdate" id="child3Birthdate"
                                               placeholder="Enter Child 3 Birthdate"
                                               value="{{$user->familyData->house_child3_birthdate ?? ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Child 3 Gender:</label>
                                        <input type="text" class="form-control" name="child3Gender" id="child3Gender"
                                               placeholder="Enter Child 3 Gender"
                                               value="{{$user->familyData->house_child3_gender ?? ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Other people living in the house:</label>
                                        <textarea class="form-control" name="otherPeopleInHouse" id="otherPeopleInHouse" rows="3"
                                                  placeholder="Enter Other people living in the house">
                                        {{$user->familyData->house_people ?? ''}}
                                    </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Other information:</label>
                                        <textarea class="form-control" name="otherInformation" id="otherInformation" rows="3"
                                                  placeholder="Enter Other information">
                                        {{$user->familyData->other_information ?? ''}}
                                    </textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="btnFetch" class="btn btn-primary spinner-border">Update</button>
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
