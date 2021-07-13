@extends('layouts.admin')

@section('title','Dashboard | Facts')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Fact</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Fact</li>
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


                            <h3 class="card-title">Update Facts</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>


                        <div class="card-body">

                            <form class="form" action="{{ route('admin.facts.update',$fact->id) }}" method="POST">
                                @csrf

                                @include('includes.alerts.alert')


                                <div class="form-group">
                                    <label for="facts">Facts Info:</label>
                                    <textarea id="facts" name="facts" class="form-control" placeholder="Facts Info..."
                                              rows="3">{{ old('facts',$fact->facts) }}</textarea>
                                    @error('facts')

                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror
                                </div>


                                <div class="row">
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="clients">Clients:</label>
                                            <input type="text" id="clients" name="clients" class="form-control" placeholder="Example: 20"
                                                   value="{{ $fact->clients }}">
                                            @error('clients')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="projects">Projects:</label>
                                            <input type="text" id="projects" name="projects" class="form-control" placeholder="Example: 21"
                                                   value="{{ $fact->projects }}">
                                            @error('projects')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="h_o_s">Hours Of Support:</label>
                                            <input type="text" id="h_o_s" name="h_o_s" class="form-control" placeholder="Example: 22"
                                                   value="{{ $fact->h_o_s }}">
                                            @error('h_o_s')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>

                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="y_o_e">Years Of Experience:</label>
                                            <input type="text" id="y_o_e" name="y_o_e" class="form-control" placeholder="Example: 5"
                                                   value="{{ $fact->y_o_e }}">
                                            @error('y_o_e')

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
