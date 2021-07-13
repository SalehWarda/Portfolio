@extends('layouts.admin')

@section('title','Dashboard | About')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>About</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">About</li>
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


                            <h3 class="card-title">Update About</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>


                        <div class="card-body">

                            <form class="form" action="{{ route('admin.about.update',$about->id) }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf

                                @include('includes.alerts.alert')

                                <div class="form-group">
                                    <label for="personalInfo">Personal Info:</label>
                                    <textarea id="personalInfo" name="personalInfo" class="form-control"
                                              placeholder="Personal Info..."
                                              rows="3">{{ old('personalInfo',$about->personalInfo) }}</textarea>
                                    @error('personalInfo')

                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="field_or_specialty">Field or Specialty:</label>
                                    <input type="text" id="field_or_specialty" name="field_or_specialty"
                                           placeholder="Field or Specialty..."
                                           class="form-control" value="{{ $about->field_or_specialty }}">
                                    @error('field_or_specialty')

                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="about_the_specialty">About The Spesialty:</label>
                                    <textarea id="about_the_specialty" name="about_the_specialty" class="form-control"
                                              placeholder="About The Spesialty..."
                                              rows="3">{{ $about->about_the_specialty }}</textarea>
                                    @error('about_the_specialty')

                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="name">Name:</label>
                                            <input type="text" id="name" name="name" value="{{ $about->name }}"
                                                   placeholder="Name"
                                                   class="form-control">
                                            @error('name')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" id="email" name="email" class="form-control"
                                                   placeholder="example@mail.com"
                                                   value="{{ $about->email }}">
                                            @error('email')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="age">Age:</label>
                                            <input type="text" id="age" name="age" class="form-control"
                                                   placeholder="Age"
                                                   value="{{ $about->age }}">
                                            @error('age')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="birthday">Birth Day:</label>
                                            <input type="date" id="birthday" name="birthday" class="form-control"
                                                   value="{{ $about->birthday }}">
                                            @error('birthday')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="nationality">Nationality:</label>
                                            <input type="text" id="nationality" name="nationality" class="form-control"
                                                   placeholder="Example: Palestinian"
                                                   value="{{ $about->nationality }}">
                                            @error('nationality')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="address">Address:</label>
                                            <input type="text" id="address" name="address" class="form-control"
                                                   placeholder="Example: Palestinian,Gaza"
                                                   value="{{ $about->address }}">
                                            @error('address')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="degree">Degree:</label>
                                            <input type="text" id="degree" name="degree" class="form-control"
                                                   placeholder="Example: Senior"
                                                   value="{{ $about->degree }}">
                                            @error('degree')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="phone">Phone:</label>
                                            <input type="text" id="phone" name="phone" class="form-control"
                                                   placeholder="Example: (+972) 0599000111"
                                                   value="{{ $about->phone }}">
                                            @error('phone')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="spoken">Spoken:</label>
                                            <input type="text" id="spoken" name="spoken" class="form-control"
                                                   placeholder="Example:English-Arabic"
                                                   value="{{ $about->spoken }}">
                                            @error('spoken')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="freelance">FreeLance:</label>
                                            <input type="text" id="freelance" name="freelance" class="form-control"
                                                   placeholder="Example: Available,UnAvailable"
                                                   value="{{ $about->freelance }}">
                                            @error('freelance')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group col-md-3 mt-3">
                                    <h5>Image:</h5>
                                    <img style="height: 30vh " src="{{ url($about->photo)}}" alt="Image">
                                    <input class="mt-3" value="" type="file" id="photo" name="photo">

                                    @error('photo')
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
