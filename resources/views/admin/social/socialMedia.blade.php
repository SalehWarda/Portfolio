@extends('layouts.admin')

@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Social Media</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Social Media</li>
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
                    <h3 class="card-title">Social Media</h3>



                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool " data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>


                        <a class="btn btn-success btn-sm float-sm-right mr-2"  href="{{route('admin.createSocialMedia')}}">
                            <i class="fas fa-plus ">
                            </i>
                            Add Social Media
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
                                Social Media Name
                            </th>
                            <th style="width: 20%">
                                Link
                            </th>

                            <th style="width: 20%">
                                Icon
                            </th>

                            <th >
                                Action
                            </th>




                        </tr>
                        </thead>
                        <tbody>

                        @foreach($socials as $social )

                            <tr>
                                <td>
                                    #
                                </td>

                                <td>
                                    <a>
                                        {{ $social->name }}
                                    </a>
                                    <br/>
                                    <small>
                                        Created: {{ $social->created_at }}
                                    </small>
                                </td>

                                <td>
                                    {{ $social->link }}
                                </td>

                                <td >

                                    <span class="badge badge-dark">{{ $social->icon }} </span>

                                </td>

                                <td class="project-actions ">

                                    <a class="btn btn-info btn-sm" href="{{ route('admin.socialmedia.edit', $social->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{ route('admin.socialmedia.delete', $social->id) }}">
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


