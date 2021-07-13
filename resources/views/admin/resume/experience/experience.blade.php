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
            <h1>Professional Experience</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Professional Experience</li>
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
          <h3 class="card-title">Professional Experience</h3>



          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool " data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>


            <a class="btn btn-success btn-sm float-sm-right mr-2"  href=" {{ route('admin.experience.create') }}">
                <i class="fas fa-plus ">
                </i>
                 Add Experience
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
                      <th style="width: 15%">
                         Name Of Experience :
                      </th>

                      <th style="width: 8%">
                        Experience Period:
                    </th>

                    <th style="width: 8%">
                        Place Of Experience:
                    </th>



                     <th style="width: 15%">
                        Task 1:
                     </th>
                     <th style="width: 15%">
                        Task 2:
                     </th>
                     <th style="width: 15%">
                        Task 3:
                     </th>
                     <th style="width: 15%">
                        Task 4:
                     </th>


                      <th style="width: 15%">
                          Action:
                      </th>




                  </tr>
              </thead>
              <tbody>

               @foreach ($experiences as $experience)

               <tr>
                <td>
                    #
                </td>
                <td>
                    <a>
                      {{ $experience->name_of_experience }}
                    </a>
                    <br/>
                    <small>
                      Created:{{ $experience->created_at }}

                    </small>
                </td>



                <td class="project_progress">

                    {{ $experience->experience_period }}

                </td>

                <td class="project_progress">

                    {{ $experience->experience_place }}

                </td>


                <td class="project_progress">

                    {{ $experience->task1 }}

                </td>
                <td class="project_progress">

                    {{ $experience->task2 }}
                </td>
                <td class="project_progress">

                    {{ $experience->task3 }}
                </td>
                <td class="project_progress">
                    {{ $experience->task4 }}

                </td>


                <td class="project-actions d-flex  ">

                    <a class="btn btn-info btn-sm " href="{{ route('admin.experience.edit',$experience->id)  }}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm ml-1" href="{{ route('admin.experience.delete',$experience->id)  }}">
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


