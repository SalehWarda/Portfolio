@extends('layouts.admin')

@section('title','Dashboard | Home')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Home</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid col-md-6">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">


                        <form class="form" action="{{ route('admin.home.update',$home->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf

                            <div class="form-body">


                                @include('includes.alerts.alert')


                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" value="{{ $home->name }}" id="name" class="form-control round"
                                           placeholder=" Name "
                                           name="name">

                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="jobs">Multi Jobs:</label>
                                    <input type="text" value="{{ $home->jobs }}" id="jobs" class="form-control round"
                                           placeholder="Example: FreeLancer,WebDeveloper,WebDesiner,Programming"
                                           name="jobs">

                                    @error('jobs')
                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror
                                </div>


                                <div class="form-group col-md-3 mt-3">
                                    <h5>Background Image:</h5>
                                    <img style="height: 30vh " src="{{ url($home->photo) }}" alt="Backgroud Image">
                                    <input class="mt-3" type="file" id="photo" name="photo">

                                    @error('photo')
                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror
                                </div>


                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn btn-danger mr-1" onclick="history.go();">
                                    <i class="ft-x"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Save Changes
                                </button>
                            </div>
                        </form>
                        <!-- /.card-body -->

                    </div>
                </div>
            </div>
        </section>    <!-- /.card -->


        <!-- /.content-wrapper -->

@endsection
