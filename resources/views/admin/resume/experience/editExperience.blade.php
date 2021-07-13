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
            <h1>Add Experience</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.experience') }}">Professional Experience</a></li>
              <li class="breadcrumb-item active">Add Experience</li>
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


              <h3 class="card-title">Add Experience</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>


            <div class="card-body">

                <form class ="form" action="{{ route('admin.experience.update',$experiences->id ) }}" method="POST" >
                    @csrf

                    @include('includes.alerts.alert')


                    <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="name_of_experience">Name Of Experience :</label>
                            <input type="text" id="name_of_experience" value="{{ $experiences->name_of_experience }}" name="name_of_experience" class="form-control">
                              @error('name_of_experience')

                                 <span class="text-danger">{{ $message }}</span>

                              @enderror
                       </div>
                       </div>

                       <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="experience_period">Experience Period:</label>
                            <input type="text" id="experience_period" value="{{ $experiences->experience_period }}" name="experience_period" class="form-control">
                              @error('experience_period')

                                 <span class="text-danger">{{ $message }}</span>

                              @enderror
                       </div>
                       </div>

                       <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="experience_place">Place Of Experience:</label>
                            <input type="text" id="experience_place" value="{{ $experiences->experience_place }}" name="experience_place" class="form-control">
                              @error('experience_place')

                                 <span class="text-danger">{{ $message }}</span>

                              @enderror
                       </div>
                       </div>


                    </div>

                    <div class="form-group">
                        <label for="task1"> Task 1:</label>
                        <textarea id="task1" name="task1" class="form-control" rows="3">{{ old('task1', $experiences->task1 ) }}</textarea>
                       @error('task1')

                         <span class="text-danger">{{ $message }}</span>

                       @enderror
                   </div>

                   <div class="form-group">
                    <label for="task2"> Task 2:</label>
                    <textarea id="task2" name="task2" class="form-control" rows="3">{{ old('task2', $experiences->task2 ) }}</textarea>
                   @error('task2')

                     <span class="text-danger">{{ $message }}</span>

                   @enderror
               </div>

               <div class="form-group">
                <label for="task3"> Task 3:</label>
                <textarea id="task3" name="task3" class="form-control" rows="3">{{ old('task3', $experiences->task3 ) }}</textarea>
               @error('task3')

                 <span class="text-danger">{{ $message }}</span>

               @enderror
           </div>

           <div class="form-group">
            <label for="task4"> Task 4:</label>
            <textarea id="task4" name="task4" class="form-control" rows="3">{{ old('task4', $experiences->task4 ) }}</textarea>
           @error('task4')

             <span class="text-danger">{{ $message }}</span>

           @enderror
       </div>
















                   <div class="row">
                        <div class="col-12">
                           <a href="#" class="btn btn-danger mr-2" onclick="history.go();">Cancel</a>
                          <input type="submit" value="Save Changes " class="btn btn-primary ">
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
