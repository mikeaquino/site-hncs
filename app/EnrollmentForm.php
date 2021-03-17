<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnrollmentForm extends Model
{
	protected $table = 'enrollmentform';

	protected $fillable = [

        'stud_status', 'lastname', 'firstname', 'middlename', 'grade', 'birthday', 'age', 'placeOfBirth', 'address_block', 'address_street', 'address_brgy', 'address_city', 'address_province', 'father_lName', 'father_fName', 'father_mName', 'mother_lName', 'mother_fName', 'mother_mname', 'modeOfPayment', 'status'

    ];

}
