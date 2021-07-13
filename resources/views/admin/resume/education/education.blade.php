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
            <h1>Education</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Education</li>
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
          <h3 class="card-title">Education</h3>



          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool " data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>


            <a class="btn btn-success btn-sm float-sm-right mr-2"  href=" {{ route('admin.education.create') }}">
                <i class="fas fa-plus ">
                </i>
                 Add Specialty
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
                      <th style="width: 16%">
                        Name Of Specialty:
                      </th>
                      <th style="width: 16%">
                          Degree Of Specialization:
                      </th>
                      <th style="width: 16%">
                        Study Period:
                    </th>

                    <th style="width: 16%">
                        Place Of Study:
                    </th>

                    <th style="width: 16%">
                        About Of Specialty:
                     </th>


                      <th style="width: 16%">
                          Action:
                      </th>




                  </tr>
              </thead>
              <tbody>



                @foreach ($educations as $education)

                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                        {{ $education->name_of_specialty }}
                        </a>
                        <br/>
                        <small>
                          Created:{{ $education->created_at }}
                        </small>
                    </td>

                    <td class="project_progress">
                        {{ $education->degree_of_specialty }}
                    </td>

                    <td class="project_progress">

                        {{ $education->study_period }}
                    </td>

                    <td class="project_progress">

                        {{ $education->place_of_study }}
                    </td>

                    <td class="project_progress">

                        {{ $education->about_of_specialty }}
                    </td>


                    <td class="project-actions  ">

                        <a class="btn btn-info btn-sm" href="{{route('admin.education.edit', $education->id) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="{{ route('admin.education.delete', $education->id) }}">
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


