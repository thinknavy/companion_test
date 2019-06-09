@extends('layouts.emp')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">New User#</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="user-rig">
          <div class="card shadow mb-4">
            <!-- Card Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Create User :</h6>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputname4">Full Name</label>
                    <input type="text" class="form-control" id="inputname4" placeholder="Full Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="Confirm Password">Confirm Password</label>
                    <input type="password" class="form-control" id="Confirm Password" placeholder="Confirm Password">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="building-number">building Num</label>
                    <input type="text" class="form-control" id="building-number" placeholder="building number">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="Floor-number">Floor Num</label>
                    <input type="text" class="form-control" id="Floor-number" placeholder="Floor number">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="Apartment-number">Apartment Num</label>
                    <input type="text" class="form-control" id="Apartment-number" placeholder="Apartment number">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputname4">Birthday</label>
                    <input type="date" class="form-control" id="inputname4" placeholder="Full Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mobile-number">Mobile Number</label>
                      <input type="text" class="form-control" id="mobile-number" placeholder="Mobile Number">
                  </div>
                </div>


                <button type="submit" class="btn btn-primary">Add User</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>
<!-- /.container-fluid -->
@endsection
