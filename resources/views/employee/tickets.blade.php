@extends('layouts.emp')
@section('title','Account')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tickets#</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <div class="row">

    <div class="col-xl-12 col-lg-11">
      <div class="tickets">
          <div class="card shadow mb-4">
            <!-- Card body -->
              <div class="card-body">
                <form class="" action="index.html" method="post">
                  <div class="form-row">
                    <div class="form-group col-md-3">
                      <label for="type">Type</label>
                      <select class="custom-select mr-sm-2" id="type">
                        <option selected>Choose...</option>
                        <option value="1">Eelectric</option>
                        <option value="2">Water</option>
                        <option value="3">Gaz</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="status">Status</label>
                      <select class="custom-select mr-sm-2" id="status">
                        <option selected>Choose...</option>
                        <option value="1">Solived</option>
                        <option value="2">Unsolived</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="date">Date</label>
                      <input type="date" class="form-control" id="date">
                    </div>
                    <div class="form-group col-md-3 mt-3">
                      <input type="submit" class="form-control btn btn-primary ticket-search" value="search">
                    </div>
                  </div>
                  <!-- /Card body -->
              </form>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Start User result -->
  <div class="row">
    <div class="col-xl-12 col-lg-11">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <p class="col-3">Ticket</p>
              <p class="col-2">Type</p>
              <p class="col-3">Description</p>
              <p class="col-1">Status</p>
              <p class="col-3">Date</p>
        </div>
        <!-- Card Body -->
        @for($i=1;$i<=8;$i++)
        <div class="card-body d-flex flex-row align-items-center justify-content-between">
          <div class="col-3">
            <a href="#">Ticket#{{$i}}</a>
          </div>
          <div class="col-2">
            <span href="#">Type</span>
          </div>
          <div class="col-3">
            <span href="#">Description</span>
          </div>
          <div class="col-1">
            <i class="fas fa-check"></i>
          </div>
          <div class="col-3">
            <span href="#">2019/6/{{$i}}</span>
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
