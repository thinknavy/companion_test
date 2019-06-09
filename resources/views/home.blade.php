@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- Start User Rigster -->
                    <div class="col-xl-5">
                      <div class="user-rig">
                        <div class="card shadow mb-4">
                          <!-- Card Header -->
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Create User :</h6>
                          </div>
                          <!-- Card body -->
                          <div class="card-body">
                            <form class="" action="index.html" method="post">
                              <div class="row no-gutters align-items-center">
                                <div class="col-1">
                                  <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                                <div class="col ml-2">
                                  <input type="email" class="form-control" placeholder="Email">
                                </div>
                              </div>

                              <div class="row no-gutters align-items-center mt-4">
                                <div class="col-1">
                                  <i class="fas fa-key fa-2x text-gray-300"></i>
                                </div>
                                <div class="col ml-2">
                                  <input type="password" class="form-control" placeholder="password">
                                </div>
                              </div>

                              <div class="row no-gutters align-items-center mt-4">
                                <div class="form-group form-check mt-3 ml-5">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Active this account</label>
                                </div>
                              </div>

                              <button type="submit" class="col-5 btn btn-primary ml-5">Add User</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
