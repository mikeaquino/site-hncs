@extends('layout')

@section('content')

<div class="ipsechero-full-bar">
    <div class="container">
        <div class="row center-align space-between wrap-flex mobile-center">
            <div class="col-md-8">
                <h3>Holy Nazarene Christian School</h3>
            </div>
            <div class="col-md-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb n-flex flex-end">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Enrollment Form</li>
                    </ol>
                  </nav> 
            </div>
        </div>
    </div>
</div>
<section id="ipAboutSect1" class="xm-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <h2 class="aligncenter">Enrollment Form</h2>
              <p class="aligncenter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam</p>
              <div class="ef-form-area xm-padding">

                <form action="/saveEnrollmentForm" method="POST">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-md-4">
                      <div class="radio">
                        <label><input type="radio" name="stud_stat" value="1">Old Student</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="radio">
                        <label><input type="radio" name="stud_stat" value="2">New Student</label>
                      </div>
                    </div>
                  </div>      
                  <div class="row mtop-20">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Lastname</label>
                        <input type="text" class="form-control" placeholder="Lastname" name="lastname" required>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Fistname</label>
                        <input type="text" class="form-control" placeholder="Fistname" name="firstname" required>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" placeholder="Middle Name" name="middlename" required>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Year/Level</label>
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
                          <input type="date" class="form-control" name="bday" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Age</label>
                        <input type="number" class="form-control" placeholder="Age" name="age" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Place of Birth</label>
                        <input type="text" class="form-control" placeholder="Place of Birth" name="placeBirth" required>
                      </div>
                    </div>
                  </div>
                  <h4>Address: </h4>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <div class="form-group">
                          <label>Unit/Block/No.</label>
                          <input type="text" class="form-control" name="block" placeholder="Unit/Block/No.">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Subdivision/street</label>
                        <input type="text" class="form-control" placeholder="Subdivision/street" name="street">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Barangay</label>
                        <input type="text" class="form-control" placeholder="Barangay" name="brgy" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-group">
                          <label>City/Municipality</label>
                          <input type="text" class="form-control" name="city" placeholder="City/Municipality." required>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Province</label>
                        <input type="text" class="form-control" placeholder="Province" name="province" required>
                      </div>
                    </div>
                  </div>

                  <h4>Father's Name: </h4>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" class="form-control" name="f_lname" placeholder="Last Name" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="f_lname" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" placeholder="Middle Name" name="f_mname" required>
                      </div>
                    </div>
                  </div>

                  <h4>Mother's Name: </h4>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" class="form-control" name="m_lname" placeholder="Last Name" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="m_lname" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" placeholder="Middle Name" name="m_mname" required>
                      </div>
                    </div>
                  </div>

                  <h4>DESIRED MODE OF PAYMENT</h4>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="radio">
                        <label><input type="radio" name="mop" value="Cash">Cash</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="radio">
                        <label><input type="radio" name="mop" value="Semestral">Semestral</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="radio">
                        <label><input type="radio" name="mop" value="Quarterly">Quarterly</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="radio">
                        <label><input type="radio" name="mop" value="Monthly">Monthly</label>
                      </div>
                    </div>
                  </div> 

                  <div class="row">
                    <div class="col-md-12 text-right">
                      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                  </div>

                </form>

              </div>
            </div>
        </div>
    </div>
</section>
@endsection