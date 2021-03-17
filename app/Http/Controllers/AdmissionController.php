<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
	public function displayAdmissionPage()
	{
		return view('admission');
	}
}
