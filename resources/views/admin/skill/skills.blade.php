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
                        <h1>Skills</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Skills</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

        @include('includes.alerts.alert')

        <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Skills</h3>


                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool " data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>


                        <a class="btn btn-success btn-sm float-sm-right mr-2"
                           href=" {{ route('admin.skills.create') }}">
                            <i class="fas fa-plus ">
                            </i>
                            Add Skills
                        </a>

                    </div>
                </div>
                <div class="card-body p-0 ">
                    <table class="table table-striped projects ">
                        <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 20%">
                                Skill Name
                            </th>
                            <th style="width: 20%">
                                Level Of Skill
                            </th>
                            <th>
                                Action
                            </th>


                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($skill as $skills)

                            <tr>
                                <td>
                                    #
                                </td>
                                <td>
                                    <a>
                                        {{ $skills->n_o_s }}
                                    </a>
                                    <br/>
                                    <small>
                                        Created: {{ $skills->created_at }}
                                    </small>
                                </td>

                                <td class="project_progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-green" role="progressbar"
                                             aria-valuenow="{{ $skills->l_o_e }}" aria-valuemin="0" aria-valuemax="100"
                                             style="width: {{ $skills->l_o_e }}%">
                                        </div>
                                    </div>
                                    <small>
                                        {{ $skills->l_o_e }}%
                                    </small>
                                </td>

                                <td class="project-actions ">

                                    <a class="btn btn-info btn-sm" href="{{ route('admin.skills.edit',$skills->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm"
                                       href="{{ route('admin.skills.delete',$skills->id) }}">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>


                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



@endsection


