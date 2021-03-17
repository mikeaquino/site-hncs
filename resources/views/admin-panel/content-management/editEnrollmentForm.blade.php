@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Content Management - News & Events > Edit') }}</div>
                <div class="card-body">
                    <div class="float-right">
                        <a href="/content-management/EfList">
                            <button type="button" class="btn btn-primary btn-sm">Go Back</button>
                        </a>
                        @if ($efList->status == 1)
                            <a href="/content-management/efStatus/{{ $efList->id }}/{{ $efList->status }}">
                                <button type="button" class="btn btn-success btn-sm">Publish</button>
                            </a>
                        @elseif ($efList->status == 2)
                            <a href="/content-management/efStatus/{{ $efList->id }}/{{ $efList->status }}">
                                <button type="button" class="btn btn-success btn-sm">Switch to Draft</button>
                            </a>
                        @endif
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                    <div class="float-left">
                        @if ($efList->status == 1)
                            <p>Status: Draft</p>
                        @elseif ($efList->status == 2)
                            <p>Status: Active</p>
                        @endif
                    </div>
                    <br>
                    <br>

                    @foreach ($errors->all() as $error)
                        <div class="alert alert-warning">
                            <strong>{{ $error }}<br></strong>
                        </div>
                    @endforeach

                    @if (session()->has('success'))
                        <div class="alert alert-warning">
                            <strong>{{ session()->get('success') }}</strong>
                        </div>
                    @endif

                    <form class="admin-panel-form" action="/content-management/updateEF/{{ $efList->id }}" method="POST">
                        @csrf
                        <div class="row">
                          <div class="col-md-4">
                            <div class="radio">
                              <label><input type="radio" name="stud_stat" value="1" <?php echo $stud_stat_old = ($efList->stud_status == 1) ? 'checked' : ''; ?>>Old Student</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="radio">
                              <label><input type="radio" name="stud_stat" value="2" <?php echo $stud_stat_new = ($efList->stud_status == 2) ? 'checked' : ''; ?>>New Student</label>
                            </div>
                          </div>
                        </div>  

                        <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Lastname</label>
                                <input type="text" class="form-control" placeholder="Lastname" name="lastname" value="{{ $efList->lastname }}" required>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Fistname</label>
                                <input type="text" class="form-control" placeholder="Fistname" name="firstname" value="{{ $efList->firstname }}" required>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" class="form-control" placeholder="Middle Name" name="middlename" value="{{ $efList->middlename }}" required>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Grade</label>
                                <select name="trgtGrade" class="form-control">
                                  <option>Grade 7</option>
                                  <option>Grade 8</option>
                                  <option>Grade 9</option>
                                  <option>Grade 10</option>
                                  <option>Grade 11</option>
                                  <option>Grade 12</option>
                                </select>
                              </div>
                            </div>

                          </div>

                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <div class="form-group">
                                  <label>Date of Birth</label>
                                  <input type="date" class="form-control" name="bday" value="{{ $efList->birthday }}" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Age</label>
                                <input type="number" class="form-control" name="age" value="{{ $efList->age }}" required>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Place of Birth</label>
                                <input type="text" class="form-control" placeholder="Place of Birth" name="placeBirth" value="{{ $efList->placeOfBirth }}" required>
                              </div>
                            </div>
                          </div>
                          <h4>Address: </h4>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <div class="form-group">
                                  <label>Unit/Block/No.</label>
                                  <input type="text" class="form-control" name="block" placeholder="Unit/Block/No." value="{{ $efList->address_block }}" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Subdivision/street</label>
                                <input type="text" class="form-control" placeholder="Subdivision/street" name="street" value="{{ $efList->address_street }}" required>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Barangay</label>
                                <input type="text" class="form-control" placeholder="Barangay" name="brgy" value="{{ $efList->address_brgy }}" required>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <div class="form-group">
                                  <label>City/Municipality</label>
                                  <input type="text" class="form-control" name="city" placeholder="City/Municipality." value="{{ $efList->address_city }}" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Province</label>
                                <input type="text" class="form-control" placeholder="Province" name="province" value="{{ $efList->address_province }}" required>
                              </div>
                            </div>
                          </div>

                          <h4>Father's Name: </h4>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <div class="form-group">
                                  <label>Last Name</label>
                                  <input type="text" class="form-control" name="f_lname" placeholder="Last Name" value="{{ $efList->father_lName }}" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" name="f_lname" value="{{ $efList->father_fName }}" required>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" class="form-control" placeholder="Middle Name" name="f_mname" value="{{ $efList->father_mName }}" required>
                              </div>
                            </div>
                          </div>

                          <h4>Mother's Name: </h4>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <div class="form-group">
                                  <label>Last Name</label>
                                  <input type="text" class="form-control" name="m_lname" placeholder="Last Name" value="{{ $efList->mother_lName }}" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" name="m_lname" value="{{ $efList->mother_fName }}" required>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" class="form-control" placeholder="Middle Name" name="m_mname" required value="{{ $efList->mother_mname }}" required>
                              </div>
                            </div>
                          </div>

                          <h4>DESIRED MODE OF PAYMENT</h4>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="radio">
                                <label><input type="radio" name="mop" value="Cash" <?php echo $stud_stat_old = ($efList->modeOfPayment == 'Cash') ? 'checked' : ''; ?>>Cash</label>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="radio">
                                <label><input type="radio" name="mop" value="Semestral" <?php echo $stud_stat_old = ($efList->modeOfPayment == 'Semestral') ? 'checked' : ''; ?>>Semestral</label>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="radio">
                                <label><input type="radio" name="mop" value="Quarterly" <?php echo $stud_stat_old = ($efList->modeOfPayment == 'Quarterly') ? 'checked' : ''; ?>>Quarterly</label>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="radio">
                                <label><input type="radio" name="mop" value="Monthly" <?php echo $stud_stat_old = ($efList->modeOfPayment == 'Monthly') ? 'checked' : ''; ?>>Monthly</label>
                              </div>
                            </div>
                          </div> 

                          <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-secondary btn-sm">Update</button>
                            </div>
                          </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js-asset')
@endsection