@extends('layouts.admin')
@section('title','tickets')
@section('content')
<!-- Begin Page Content -->

<div id="dev">
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div id='app'>
      <h1 class="h3 mb-0 text-gray-800">Tickets</h1>
    </div>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <div class="row">

    <div class="col-xl-12 col-lg-11">
      <div class="tickets">
          <div class="card shadow mb-4">
            <!-- Card body -->
              <div class="card-body">
                <form @submit.prevent="submit()">
                   {{ csrf_field() }}
                  <div class="form-row">
                    <div class="form-group col-md-3">
                      <label for="type">Type</label>
                      <select class="custom-select mr-sm-2">
                        <option selected>Choose...</option>
                        @foreach ($tickets_type as $type)
                          <option >{{$type->ticket_type}}</option>
                        @endforeach

                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="status">Status</label>
                      <select class="custom-select mr-sm-2">
                        <option selected>Choose...</option>
                        <option value="1">Solived</option>
                        <option value="2">Unsolived</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="date">Date</label>
                      <select v-model="selected" class="custom-select mr-sm-2">
                        <option selected>Choose...</option>
                        @foreach ($tickets_data as $data)
                          <option datatick='{{$data->created_at}}'>{{$data->created_at}}</option>
                        @endforeach

                      </select>
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

        <ticketresult-component></ticketresult-component>
    <!-- End User result -->
  </div>
</div>
</div>
</div>
<!-- /.container-fluid -->


@endsection
