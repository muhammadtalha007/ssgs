<?php

namespace App\Http\Controllers;

use App\family;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FamilyController extends Controller
{
    public function getFamilyProfileView()
    {
        $user = User::where('id', Session::get('userId'))->first();
        if (family::where('user_id', $user->id)->exists()) {
            $familyData = family::where('user_id', $user->id)->first();
            $user['familyData'] = $familyData;
        }
        return view('family-profile')->with(['user' => $user]);
    }

    public function saveFamilyProfile(Request $request)
    {
        try {
            if (family::where('user_id', $request->userId)->exists()) {
                $families = family::where('user_id', $request->userId)->first();
                $families->familysurname = $request->familySurname;
                $families->city = $request->city;
                $families->address = $request->address;
                $families->postalcode = $request->postalCode;
                $families->phone = $request->phone;
                $families->pets = $request->pets;
                $families->pets_desc = $request->petsKind;
                $families->student_gender_preference = $request->studentPreference;
                $families->student_number = $request->noStudentHost;
                $families->student_beds = $request->bedsStudentsRoom;
                $families->student_room = $request->studentsRoom;
                $families->student_wardrobe = $request->studentWardrobe;
                $families->house_bathrooms = $request->noBathroomInHouse;
                $families->student_coeliac = $request->studentCoeliac;
                $families->student_foodintolerance = $request->studentFoodintolerance;
                $families->student_allergy = $request->studentAllergy;
                $families->adult1_name = $request->adult1Name;
                $families->adult1_surname = $request->adult1Surname;
                $families->adult1_occupation = $request->adult1Occupation;
                $families->adult2_name = $request->adult2Name;
                $families->adult2_surname = $request->adult2Surname;
                $families->adult2_occupation = $request->adult2Occupation;
                $families->house_children = $request->childLiveInHouse;
                $families->house_child1_name = $request->child1Name;
                $families->house_child1_birthdate = $request->child1Birthdate;
                $families->house_child1_gender = $request->child1Gender;
                $families->house_child2_name = $request->child2Name;
                $families->house_child2_birthdate = $request->child2Birthdate;
                $families->house_child2_gender = $request->child2Gender;
                $families->house_child3_name = $request->child3Name;
                $families->house_child3_birthdate = $request->child3Birthdate;
                $families->house_child3_gender = $request->child3Gender;
                $families->house_people = $request->otherPeopleInHouse;
                $families->other_information = $request->otherInformation;
                $families->family_desc = $request->descriptionAboutFamilyAndHome;
                $families->bankdetails_IBAN = $request->internationalBankDetailsIBAN;
                $families->bankdetails_SWIFT_BIC = $request->bankDetailsSwiftBIC;
                $families->bankdetails_sortcode = $request->bankDetailsSortCode;
                $families->bankdetails_account_number = $request->bankDetailsAccountNumber;
                $families->datetime_register = date('Y-m-d H:i:s');
                $families->datetime_updated_bankdetails = date('Y-m-d H:i:s');
                $families->update();
            } else {
                $families = new family();
                $families->user_id = $request->userId;
                $families->familysurname = $request->familySurname;
                $families->city = $request->city;
                $families->address = $request->address;
                $families->postalcode = $request->postalCode;
                $families->phone = $request->phone;
                $families->pets = $request->pets;
                $families->pets_desc = $request->petsKind;
                $families->student_gender_preference = $request->studentPreference;
                $families->student_number = $request->noStudentHost;
                $families->student_beds = $request->bedsStudentsRoom;
                $families->student_room = $request->studentsRoom;
                $families->student_wardrobe = $request->studentWardrobe;
                $families->house_bathrooms = $request->noBathroomInHouse;
                $families->student_coeliac = $request->studentCoeliac;
                $families->student_foodintolerance = $request->studentFoodintolerance;
                $families->student_allergy = $request->studentAllergy;
                $families->adult1_name = $request->adult1Name;
                $families->adult1_surname = $request->adult1Surname;
                $families->adult1_occupation = $request->adult1Occupation;
                $families->adult2_name = $request->adult2Name;
                $families->adult2_surname = $request->adult2Surname;
                $families->adult2_occupation = $request->adult2Occupation;
                $families->house_children = $request->childLiveInHouse;
                $families->house_child1_name = $request->child1Name;
                $families->house_child1_birthdate = $request->child1Birthdate;
                $families->house_child1_gender = $request->child1Gender;
                $families->house_child2_name = $request->child2Name;
                $families->house_child2_birthdate = $request->child2Birthdate;
                $families->house_child2_gender = $request->child2Gender;
                $families->house_child3_name = $request->child3Name;
                $families->house_child3_birthdate = $request->child3Birthdate;
                $families->house_child3_gender = $request->child3Gender;
                $families->house_people = $request->otherPeopleInHouse;
                $families->other_information = $request->otherInformation;
                $families->family_desc = $request->descriptionAboutFamilyAndHome;
                $families->bankdetails_IBAN = $request->internationalBankDetailsIBAN;
                $families->bankdetails_SWIFT_BIC = $request->bankDetailsSwiftBIC;
                $families->bankdetails_sortcode = $request->bankDetailsSortCode;
                $families->bankdetails_account_number = $request->bankDetailsAccountNumber;
                $families->datetime_register = date('Y-m-d H:i:s');
                $families->datetime_updated_bankdetails = date('Y-m-d H:i:s');
                $families->save();
            }
            session()->flash('msg', 'Updated Successfully!');
            return redirect()->back();
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

    public function getFamilyListView()
    {
        $users = User::where('type', 'family')->get();
        foreach ($users as $item) {
            $item['family'] = family::where('user_id', $item->id)->first();
        }
        return view('families')->with(['users' => $users]);
    }

    public function getAddFamilyView()
    {
        return view('add-family');
    }

    public function saveFamilyByAdmin(Request $request)
    {
        try {
            if (User::where('email', $request->email)->exists()) {
                return redirect()->back()->withErrors(['Email Already Exists!']);
            } else {
                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = md5($request->password);
                $user->type = 'family';
                $user->save();
            }

            $families = new family();
            $families->user_id = $user->id;
            $families->familysurname = $request->familySurname;
            $families->city = $request->city;
            $families->address = $request->address;
            $families->postalcode = $request->postalCode;
            $families->phone = $request->phone;
            $families->pets = $request->pets;
            $families->pets_desc = $request->petsKind;
            $families->student_gender_preference = $request->studentPreference;
            $families->student_number = $request->noStudentHost;
            $families->student_beds = $request->bedsStudentsRoom;
            $families->student_room = $request->studentsRoom;
            $families->student_wardrobe = $request->studentWardrobe;
            $families->house_bathrooms = $request->noBathroomInHouse;
            $families->student_coeliac = $request->studentCoeliac;
            $families->student_foodintolerance = $request->studentFoodintolerance;
            $families->student_allergy = $request->studentAllergy;
            $families->adult1_name = $request->adult1Name;
            $families->adult1_surname = $request->adult1Surname;
            $families->adult1_occupation = $request->adult1Occupation;
            $families->adult2_name = $request->adult2Name;
            $families->adult2_surname = $request->adult2Surname;
            $families->adult2_occupation = $request->adult2Occupation;
            $families->house_children = $request->childLiveInHouse;
            $families->house_child1_name = $request->child1Name;
            $families->house_child1_birthdate = $request->child1Birthdate;
            $families->house_child1_gender = $request->child1Gender;
            $families->house_child2_name = $request->child2Name;
            $families->house_child2_birthdate = $request->child2Birthdate;
            $families->house_child2_gender = $request->child2Gender;
            $families->house_child3_name = $request->child3Name;
            $families->house_child3_birthdate = $request->child3Birthdate;
            $families->house_child3_gender = $request->child3Gender;
            $families->house_people = $request->otherPeopleInHouse;
            $families->other_information = $request->otherInformation;
            $families->family_desc = $request->descriptionAboutFamilyAndHome;
            $families->bankdetails_IBAN = $request->internationalBankDetailsIBAN;
            $families->bankdetails_SWIFT_BIC = $request->bankDetailsSwiftBIC;
            $families->bankdetails_sortcode = $request->bankDetailsSortCode;
            $families->bankdetails_account_number = $request->bankDetailsAccountNumber;
            $families->datetime_register = date('Y-m-d H:i:s');
            $families->datetime_updated_bankdetails = date('Y-m-d H:i:s');;
            $families->save();
            $users = User::where('type', 'family')->get();
            foreach ($users as $item) {
                $item['family'] = family::where('user_id', $item->id)->first();
            }
            return view('families')->with(['users' => $users]);
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

    public function getEditFamilyView($familyId)
    {
        $user = User::where('id', $familyId)->first();
        if (family::where('user_id', $user->id)->exists()) {
            $familyData = family::where('user_id', $user->id)->first();
            $user['familyData'] = $familyData;
        }
        return view('edit-family')->with(['user' => $user]);
    }

    public function saveFamilyEditedDetails(Request $request)
    {
        try {
            if (User::where('id', $request->userId)->exists()) {
                $user = User::where('id', $request->userId)->first();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = md5($request->password);
                $user->update();
            } else {
                return redirect()->back()->withErrors(['Email Already Exists!']);
            }

            $families = family::where('user_id', $request->userId)->first();
            $families->familysurname = $request->familySurname;
            $families->city = $request->city;
            $families->address = $request->address;
            $families->postalcode = $request->postalCode;
            $families->phone = $request->phone;
            $families->pets = $request->pets;
            $families->pets_desc = $request->petsKind;
            $families->student_gender_preference = $request->studentPreference;
            $families->student_number = $request->noStudentHost;
            $families->student_beds = $request->bedsStudentsRoom;
            $families->student_room = $request->studentsRoom;
            $families->student_wardrobe = $request->studentWardrobe;
            $families->house_bathrooms = $request->noBathroomInHouse;
            $families->student_coeliac = $request->studentCoeliac;
            $families->student_foodintolerance = $request->studentFoodintolerance;
            $families->student_allergy = $request->studentAllergy;
            $families->adult1_name = $request->adult1Name;
            $families->adult1_surname = $request->adult1Surname;
            $families->adult1_occupation = $request->adult1Occupation;
            $families->adult2_name = $request->adult2Name;
            $families->adult2_surname = $request->adult2Surname;
            $families->adult2_occupation = $request->adult2Occupation;
            $families->house_children = $request->childLiveInHouse;
            $families->house_child1_name = $request->child1Name;
            $families->house_child1_birthdate = $request->child1Birthdate;
            $families->house_child1_gender = $request->child1Gender;
            $families->house_child2_name = $request->child2Name;
            $families->house_child2_birthdate = $request->child2Birthdate;
            $families->house_child2_gender = $request->child2Gender;
            $families->house_child3_name = $request->child3Name;
            $families->house_child3_birthdate = $request->child3Birthdate;
            $families->house_child3_gender = $request->child3Gender;
            $families->house_people = $request->otherPeopleInHouse;
            $families->other_information = $request->otherInformation;
            $families->family_desc = $request->descriptionAboutFamilyAndHome;
            $families->bankdetails_IBAN = $request->internationalBankDetailsIBAN;
            $families->bankdetails_SWIFT_BIC = $request->bankDetailsSwiftBIC;
            $families->bankdetails_sortcode = $request->bankDetailsSortCode;
            $families->bankdetails_account_number = $request->bankDetailsAccountNumber;
            $families->datetime_register = date('Y-m-d H:i:s');
            $families->datetime_updated_bankdetails = date('Y-m-d H:i:s');
            $families->update();
            $users = User::where('type', 'family')->get();
            foreach ($users as $item) {
                $item['family'] = family::where('user_id', $item->id)->first();
            }
            return view('families')->with(['users' => $users]);
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

}
