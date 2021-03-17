@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Content Management - News & Events > Preview') }}</div>
                <div class="card-body">
                  <div class="preview-content">
                    <p>Student Status: <span> <?php echo $stud_stat_old = ($efList->stud_status == 1) ? 'Old Student' : 'New Student'; ?></span></p>
                    <p>Student Name: <span>{{ $efList->lastname }}, {{ $efList->firstname }} {{ $efList->middlename }}</span></p>
                    <p>Year Level: <span>World</span></p>
                    <p>Date of Birth: <span><?php echo date('F m, Y', strtotime($efList->birthday)) ?></span></p>
                    <p>Age: <span>{{ $efList->age }}</span></p>
                    <p>Place of Birth: <span>{{ $efList->placeOfBirth }}</span></p>
                    <p>Address: <span>{{ $efList->address_block }}, {{ $efList->address_street }}, {{ $efList->address_brgy }} {{ $efList->address_city }} {{ $efList->address_province }}</span></p>
                    <p>Father's Name: <span>{{ $efList->father_lName }}, {{ $efList->father_fName }} {{ $efList->father_mName }}</span></p>
                    <p>Mother's Name: <span>{{ $efList->mother_lName }}, {{ $efList->mother_fName }} {{ $efList->mother_mname }}</span></p>
                    <p>Desired Mode of Payment: <span>{{ $efList->modeOfPayment }}</span></p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js-asset')
@endsection