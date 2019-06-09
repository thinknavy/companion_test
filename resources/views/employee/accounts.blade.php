@extends('layouts.emp')
@section('title','Account')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Accounts#</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Start User Rigster -->
  <div class="row">

    <div class="col-xl-12 col-lg-11">
      <div class="user-rig">
          <!-- Card body -->
          <div class="card shadow mb-4">
              <div class="row card-body">
                  <div class="col-8 border-right border-dark">
                    <form>
                      <div class="form-row align-items-center">
                        <div class="col-6">
                          <label class="sr-only" for="inlineFormInputGroup">Username</label>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">@</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                            <label class="form-check-label" for="autoSizingCheck">
                              Status
                            </label>
                          </div>
                        </div>
                        <div class="col-auto">
                          <button type="submit" class="btn sreach-in mb-2">Search</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="col-3">
                    <a href="{{ route('register_user') }}">
                      <button type="button" name="button" class="btn btn-warning ml-5">Add User</button>
                    </a>
                  </div>
                  <div>
                </div>
              <!-- /Card body -->
            </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End User Rigster -->

  <!-- Start User result -->
  <div class="row">
    <div class="col-xl-12 col-lg-11">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <div class="col-5">
              <h4>Users</h4>
            </div>
            <div class="col-5">
              <h4>Status</h4>
            </div>
        </div>
        <!-- Card Body -->
        @for($i=1;$i<=8;$i++)
        <div class="card-body d-flex flex-row align-items-center justify-content-between">
          <div class="col-5">
            <a href="#">Users{{$i}}</a>
          </div>
          <div class="col-5">
            <i class="fas fa-check"></i>
          </div>
        </div>
      @endfor

      </div>
    </div>
    <!-- End User result -->
  </div>
</div>
<!-- /.container-fluid -->
@endsection
