@extends('layouts.emp')
@section('title','setting')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Setings</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">

        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col-5 mr-4">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Site Title</div>
              <input type="text" class="form-control" placeholder="Site Name">
            </div>
            <div class="col-5">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Site Logo</div>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
          </div>
        </div>
      </div>

    </div>
</div>
<!-- /.container-fluid -->
@endsection
