@extends('layouts.admin')

@section('title','Dashboard | Resume')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Sumary</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Sumary</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid col-md-9">
                <div class="col-md-9">
                    <div class="card card-secondary">
                        <div class="card-header">


                            <h3 class="card-title">Update Sumary</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>


                        <div class="card-body">

                            <form class="form" action="{{ route('admin.summary.update',$sumary->id) }}" method="POST">
                                @csrf

                                @include('includes.alerts.alert')


                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name"
                                               value="{{ $sumary->name }}">
                                        @error('name')

                                        <span class="text-danger">{{ $message }}</span>

                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="t_a_y_s">Talk About Your Self:</label>
                                    <textarea id="t_a_y_s" name="t_a_y_s" class="form-control" placeholder="Talk About Your Self..."
                                              rows="3">{{ old('t_a_y_s', $sumary->t_a_y_s) }}</textarea>
                                    @error('t_a_y_s')

                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror
                                </div>


                                <div class="row">
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="address">Address:</label>
                                            <input type="text" id="address" name="address" class="form-control" placeholder="Example:Portland par 127,Orlando, FL"
                                                   value="{{ $sumary->address }}">
                                            @error('address')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="phone">Phone:</label>
                                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Example:(123) 456-7891 "
                                                   value="{{ $sumary->phone }}">
                                            @error('phone')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" id="email" name="email" class="form-control" placeholder="Example:example@mail.com "
                                                   value="{{ $sumary->email }}">
                                            @error('email')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>

                                    </div>


                                </div>


                                <div class="row">
                                    <div class="col-12">
                                        <a href="#" class="btn btn-danger mr-2" onclick="history.go();">Cancel</a>
                                        <input type="submit" value="Save Changes" class="btn btn-primary ">
                                    </div>
                                </div>

                            </form>

                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
