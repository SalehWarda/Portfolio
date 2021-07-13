@extends('layouts.admin')

@section('title','Dashboard | Portfolio')

@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Portfolio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Portfolio</li>
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
          <h3 class="card-title">Portfolio </h3>



          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool " data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>


            <a class="btn btn-success btn-sm float-sm-right mr-2"  href="{{ route('admin.portfolio.create') }}">
                <i class="fas fa-plus ">
                </i>
                 Add To Portfolio
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
                           Name:
                      </th>

                      <th style="width: 20%">
                        Category:
                     </th>

                   <th style="width: 20%">
                    Photo:
                   </th>

                      <th style="width: 20%">
                        Action:
                    </th>
                  </tr>
              </thead>
              <tbody>

                @foreach ($portfolios as $portfolio)


               <tr>
                <td>
                   #
                </td>
                <td>
                    <a>
                    {{ $portfolio->name }}
                    </a>
                    <br/>
                    <small>
                      Created:{{ $portfolio->created_at }}


                    </small>
                </td>

                <td>
                    {{ $portfolio->category->name ?? ''}}

                </td>

                <td>
                    <img  height="100" width="100" src="{{url($portfolio->images[0]->photo ?? '')}}" alt="">

                </td>


                <td class="project-actions ">


{{--                    <a class="btn btn-info btn-sm" href="{{ route('admin.portfolio.edit', $portfolio->id) }}">--}}
{{--                        <i class="fas fa-pencil-alt">--}}
{{--                        </i>--}}
{{--                        Edit--}}
{{--                    </a>--}}
                    <a class="btn btn-danger btn-sm" href="{{ route('admin.portfolio.delete', $portfolio->id) }}">
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


