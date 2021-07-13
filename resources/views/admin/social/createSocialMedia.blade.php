@extends('layouts.admin')

@section('title','Dashboard | Social Media')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Social Media</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.socialmedia') }}">Social Media</a></li>
                            <li class="breadcrumb-item active">Create Social Media</li>
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


                            <h3 class="card-title">Create Social Media</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>


                        <div class="card-body">

                            <form class="form" action="{{ route('admin.socialmedia.store') }}" method="POST">
                                @csrf

                                @include('includes.alerts.alert')


                                <div class="row">
                                    <div class="col-md-4 ">
                                        <div class="form-group">
                                            <label for="name">Name Of Social Media:</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Example:Facebook,Instagram,Twitter">
                                            @error('name')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4 ">
                                        <div class="form-group">
                                            <label for="link">Link Your Page:</label>
                                            <input type="text" id="link" name="link" class="form-control" placeholder="Example:Link Your Page">
                                            @error('link')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4 ">
                                        <div class="form-group">
                                            <label for="icon">Icon:</label>
                                            <input type="text" id="icon" name="icon" class="form-control" placeholder="Example:Facebook,Instagram,Twitter">
                                            @error('icon')

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
