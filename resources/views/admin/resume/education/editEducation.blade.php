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
            <h1>Update Specialty</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.education') }}">Education</a></li>
              <li class="breadcrumb-item active">Update Specialty</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" >

      <div class="container-fluid col-md-9">
        <div class="col-md-9">
          <div class="card card-secondary">
            <div class="card-header">


              <h3 class="card-title">Update Specialty</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>


            <div class="card-body">

                <form class ="form" action="{{ route('admin.education.update',$educations->id )}}" method="POST" >
                    @csrf

                    @include('includes.alerts.alert')


                    <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="name_of_specialty">Name Of Specialty:</label>
                            <input type="text" id="name_of_specialty" value="{{ $educations->name_of_specialty }}" name="name_of_specialty" class="form-control" placeholder="Example:Software and databases">
                              @error('name_of_specialty')

                                 <span class="text-danger">{{ $message }}</span>

                              @enderror
                       </div>
                       </div>

                       <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="degree_of_specialty">Degree Of Specialization:</label>
                            <input type="text" id="degree_of_specialty" value="{{ $educations->degree_of_specialty }}" name="degree_of_specialty" class="form-control" placeholder="Example:Master">
                              @error('degree_of_specialty')

                                 <span class="text-danger">{{ $message }}</span>

                              @enderror
                       </div>
                       </div>

                       <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="study_period">Study Period:</label>
                            <input type="text" id="study_period" value="{{ $educations->study_period }}" name="study_period" class="form-control">
                              @error('study_period')

                                 <span class="text-danger">{{ $message }}</span>

                              @enderror
                       </div>
                       </div>

                       <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="place_of_study">  Place Of Study:</label>
                            <input type="text" id="place_of_study" value="{{ $educations->place_of_study }}" name="place_of_study" class="form-control"  placeholder="Example:2016-2020">
                              @error('place_of_study')

                                 <span class="text-danger">{{ $message }}</span>

                              @enderror
                       </div>
                       </div>
                    </div>



                    <div class="form-group">
                        <label for="about_of_specialty"> About Of Specialty:</label>
                        <textarea id="about_of_specialty" name="about_of_specialty" class="form-control" rows="3" >{{ old('about_of_specialty',$educations->about_of_specialty) }}</textarea>
                       @error('about_of_specialty')

                         <span class="text-danger">{{ $message }}</span>

                       @enderror
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
