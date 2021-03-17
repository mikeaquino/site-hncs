<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EnrollmentForm;

class EnrollmentFormController extends Controller
{
	public function DisplayEnrollmentForm()
	{
		return view('enrollmentForm');
	}

	public function StoreEnrollmentForm()
	{
		request()->validate([
		'stud_stat' 	=> 'required',
		'lastname' 		=> 'required',
		'firstname' 	=> 'required',
		'middlename' 	=> 'required',
		'trgtGrade' 	=> 'required',
		'bday' 			=> 'required',
		'age' 			=> 'required',
		'placeBirth' 	=> 'required',
		'block' 		=> 'required',
		'street' 		=> 'required',
		'brgy' 			=> 'required',
		'city' 			=> 'required',
		'province' 		=> 'required',
		'f_lname' 		=> 'required',
		'f_lname' 		=> 'required',
		'f_mname' 		=> 'required',
		'm_lname' 		=> 'required',
		'm_lname' 		=> 'required',
		'm_mname' 		=> 'required',
		'mop' 			=> 'required'
		]);

		EnrollmentForm::create([
			'stud_status' 		=> request()->stud_stat,
			'lastname'		 	=> request()->lastname,
			'firstname' 		=> request()->firstname,
			'middlename' 		=> request()->middlename,
			'grade' 			=> request()->trgtGrade,
			'birthday' 			=> request()->bday,
			'age' 				=> request()->age,
			'placeOfBirth' 		=> request()->placeBirth,
			'address_block' 	=> request()->block,
			'address_street' 	=> request()->street,
			'address_brgy' 		=> request()->brgy,
			'address_city' 		=> request()->city,
			'address_province' 	=> request()->province,
			'father_lName' 		=> request()->f_lname,
			'father_fName' 		=> request()->f_lname,
			'father_mName' 		=> request()->f_mname,
			'mother_lName' 		=> request()->m_lname,
			'mother_fName' 		=> request()->m_lname,
			'mother_mname' 		=> request()->m_mname,
			'modeOfPayment' 	=> request()->mop,
			'status' 			=> 1
		]);

		return back()->with('success', 'Successfully Submitted Enrollment Queries');
	}

	public function DisplayEfList()
	{
		$efList = EnrollmentForm::latest()->get();
		return view('admin-panel.content-management.enrollmentFormList', [
			'efList' => $efList
		]);
	}

	public function PreviewEF($id)
	{
		$efList = EnrollmentForm::findOrFail($id);
		return view('admin-panel.content-management.previewEF', [
			'efList' => $efList
		]);
	}

	public function EditEF($id)
	{
		$efList = EnrollmentForm::findOrFail($id);
		return view('admin-panel.content-management.editEnrollmentForm', [
			'efList' => $efList
		]);
	}

	public function UpdateEF($id)
	{
		request()->validate([
			'stud_stat' 	=> 'required',
			'lastname' 		=> 'required',
			'firstname' 	=> 'required',
			'middlename' 	=> 'required',
			'trgtGrade' 	=> 'required',
			'bday' 			=> 'required',
			'age' 			=> 'required',
			'placeBirth' 	=> 'required',
			'block' 		=> 'required',
			'street' 		=> 'required',
			'brgy' 			=> 'required',
			'city' 			=> 'required',
			'province' 		=> 'required',
			'f_lname' 		=> 'required',
			'f_lname' 		=> 'required',
			'f_mname' 		=> 'required',
			'm_lname' 		=> 'required',
			'm_lname' 		=> 'required',
			'm_mname' 		=> 'required',
			'mop' 			=> 'required'
		]);

		$efList = EnrollmentForm::findOrFail($id);

			$efList->update([
				'stud_status' 		=> request()->stud_stat,
				'lastname'		 	=> request()->lastname,
				'firstname' 		=> request()->firstname,
				'middlename' 		=> request()->middlename,
				'grade' 			=> request()->trgtGrade,
				'birthday' 			=> request()->bday,
				'age' 				=> request()->age,
				'placeOfBirth' 		=> request()->placeBirth,
				'address_block' 	=> request()->block,
				'address_street' 	=> request()->street,
				'address_brgy' 		=> request()->brgy,
				'address_city' 		=> request()->city,
				'address_province' 	=> request()->province,
				'father_lName' 		=> request()->f_lname,
				'father_fName' 		=> request()->f_lname,
				'father_mName' 		=> request()->f_mname,
				'mother_lName' 		=> request()->m_lname,
				'mother_fName' 		=> request()->m_lname,
				'mother_mname' 		=> request()->m_mname,
				'modeOfPayment' 	=> request()->mop,
			]);

		return back()->with('success', 'Successfully Updated!');
	}
	
	public function EfStatus($id, $statVal)
	{
		if ($statVal == 1) {
			$status = 2;
			$message = 'The blog is now published and live!';
		} elseif ($statVal == 2) {
			$status = 1;
			$message = 'The blog is now in draft mode.';
		}
		
		$efList = EnrollmentForm::findOrFail($id);
		$efList->update([
			'status' => $status
		]);

		return back()->with('success', $message);
		
	}

	public function EfExport()
	{
		$efList = EnrollmentForm::latest()->get();

		$filename = 'Enrollment-Form-List.xls';

		header("Content-Disposition: application/vnd.ms-excel");
		header("Content-Disposition: attachment; filename=Enrollment-Form-List.xls");

		$array[] = array(
			'Student Status'			=> 'Student Status', 
			'Last Name' 				=> 'Last Name ', 
			'First Name' 				=> 'First Name', 
			'Middle Name' 				=> 'Middle Name', 
			'Grade' 					=> 'Grade', 
			'Birthday' 					=> 'Birthday', 
			'Age' 						=> 'Age', 
			'Place Of Birth' 			=> 'Place Of Birth', 
			'Unit/Block/No.' 			=> 'Unit/Block/No.', 
			'Subdivision/street' 		=> 'Subdivision/street', 
			'Barangay' 					=> 'Barangay', 
			'City/Municipality' 		=> 'City/Municipality', 
			'Province' 					=> 'Province', 
			'Father Last Name' 			=> 'Father Last Name', 
			'Father First Name' 		=> 'Father First Name', 
			'Father Middle Name' 		=> 'Father Middle Name', 
			'Mother Last Name' 			=> 'Mother Last Name', 
			'Mother First Name' 		=> 'Mother First Name', 
			'Mother Middle Name' 		=> 'Mother Middle Name', 
			'Desired Mode Of Payment' 	=> 'Desired Mode Of Payment'
		); 

	    foreach ($array as $head) {
	     echo implode("\t", array_keys($head)) . "\n";
		 }

	    foreach ($efList as $row) {
	    	$stud_stat = ($row['stud_status'] == 1) ? 'Old Student' : 'New Student';
	    	$array1[] = array(
	    		$stud_stat					=> 'Student Status', 
				$row['lastname'] 			=> 'Last Name ', 
				$row['firstname'] 			=> 'First Name', 
				$row['middlename'] 			=> 'Middle Name', 
				$row['grade'] 				=> 'Grade', 
				$row['birthday'] 			=> 'Birthday', 
				$row['age'] 				=> 'Age', 
				$row['placeOfBirth'] 		=> 'Place Of Birth', 
				$row['address_block'] 		=> 'Unit/Block/No.', 
				$row['address_street'] 		=> 'Subdivision/street', 
				$row['address_brgy'] 		=> 'Barangay', 
				$row['address_city'] 		=> 'City/Municipality', 
				$row['address_province'] 	=> 'Province', 
				$row['father_lName'] 		=> 'Father Last Name', 
				$row['father_fName'] 		=> 'Father First Name', 
				$row['father_mName'] 		=> 'Father Middle Name', 
				$row['mother_lName'] 		=> 'Mother Last Name', 
				$row['mother_fName'] 		=> 'Mother First Name', 
				$row['mother_mname'] 		=> 'Mother Middle Name', 
				$row['modeOfPayment'] 		=> 'Desired Mode Of Payment'
	    	); 
	     }
	    foreach ($array1 as $cont) {
	    	echo implode("\t", array_keys($cont)) . "\n";
	    }
		exit();
	}

}
