@extends('layouts.admin')

@section('title','Dashboard | Skills')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Skills</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.skills') }}">Skills</a></li>
                            <li class="breadcrumb-item active">Create Skills</li>
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


                            <h3 class="card-title">Create Skills</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>


                        <div class="card-body">

                            <form class="form" action="{{ route('admin.skills.store') }}" method="POST">
                                @csrf

                                @include('includes.alerts.alert')


                                <div class="row">
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="n_o_s">Name Of Skill:</label>
                                            <input type="text" id="n_o_s" name="n_o_s" class="form-control" placeholder="Name">
                                            @error('n_o_s')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="l_o_e">Level Of Experience:</label>
                                            <input type="text" id="l_o_e" name="l_o_e" class="form-control" placeholder="Level">
                                            @error('l_o_e')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12">
                                        <a href="#" class="btn btn-danger mr-2" onclick="history.go();">Cancel</a>
                                        <button type="submit" class="btn btn-primary  ">Add</button>
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
