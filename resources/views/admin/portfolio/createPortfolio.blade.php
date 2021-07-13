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
                        <h1>Create Portfolio</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.portfolio') }}">Portfolio</a></li>
                            <li class="breadcrumb-item active">Create Portfolio</li>
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

                            <form class="form" action="{{ route('admin.portfolio.store') }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf

                                @include('includes.alerts.alert')

                                <div class="row">
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="name">Name:</label>
                                            <input type="text" id="name" name="name" value="" class="form-control">
                                            @error('name')

                                            <span class="text-danger">{{ $message }}</span>

                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="profession">Category:</label>
                                        <br>
                                        <select class="form-control" id="category_id" name="category_id">


                                            @foreach ($categories as $category)

                                                <option value="{{ $category->id }}">{{ $category->name }}</option>


                                            @endforeach


                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label for="description"> Description:</label>
                                        <textarea id="summernote" name="description"
                                                  class="form-control">{{ old('description') }}</textarea>
                                        @error('description')

                                        <span class="text-danger">{{ $message }}</span>

                                        @enderror
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-default">
                                            <div class="card-header">
                                                <h3 class="card-title">Dropzone.js <small><em>jQuery File Upload</em>
                                                        like look</small></h3>
                                            </div>
                                            <div class="card-body">
                                                <div id="actions" class="row">
                                                    <div class="col-lg-6">
                                                        <div class="btn-group w-100">
                      <span class="btn btn-success col fileinput-button">
                        <i class="fas fa-plus"></i>
                        <span>Add files</span>
                      </span>
                                                            <button type="submit" class="btn btn-primary col start">
                                                                <i class="fas fa-upload"></i>
                                                                <span>Start upload</span>
                                                            </button>
                                                            <button type="reset" class="btn btn-warning col cancel">
                                                                <i class="fas fa-times-circle"></i>
                                                                <span>Cancel upload</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 d-flex align-items-center">
                                                        <div class="fileupload-process w-100">
                                                            <div id="total-progress"
                                                                 class="progress progress-striped active"
                                                                 role="progressbar" aria-valuemin="0"
                                                                 aria-valuemax="100" aria-valuenow="0">
                                                                <div class="progress-bar progress-bar-success"
                                                                     style="width:0%;" data-dz-uploadprogress></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table table-striped files" id="previews">
                                                    <div id="template" class="row mt-2">
                                                        <div class="col-auto">
                                                            <span class="preview"><img src="data:," alt=""
                                                                                       data-dz-thumbnail/></span>
                                                        </div>
                                                        <div class="col d-flex align-items-center">
                                                            <p class="mb-0">
                                                                <span class="lead" data-dz-name></span>
                                                                (<span data-dz-size></span>)
                                                            </p>
                                                            <strong class="error text-danger"
                                                                    data-dz-errormessage></strong>
                                                        </div>
                                                        <div class="col-4 d-flex align-items-center">
                                                            <div class="progress progress-striped active w-100"
                                                                 role="progressbar" aria-valuemin="0"
                                                                 aria-valuemax="100" aria-valuenow="0">
                                                                <div class="progress-bar progress-bar-success"
                                                                     style="width:0%;" data-dz-uploadprogress></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto d-flex align-items-center">
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary start">
                                                                    <i class="fas fa-upload"></i>
                                                                    <span>Start</span>
                                                                </button>
                                                                <button data-dz-remove class="btn btn-warning cancel">
                                                                    <i class="fas fa-times-circle"></i>
                                                                    <span>Cancel</span>
                                                                </button>
                                                                <button data-dz-remove class="btn btn-danger delete">
                                                                    <i class="fas fa-trash"></i>
                                                                    <span>Delete</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>


                                <!-- /.card -->


                                <div class="row">
                                    <div class="col-12">
                                        <a href="#" class="btn btn-danger mr-2">Cancel</a>
                                        <input type="submit" value="Save" class="btn btn-primary ">
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


@section('script')


    <script>


        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false;

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template");
        previewNode.id = "";
        var previewTemplate = previewNode.parentNode.innerHTML;
        previewNode.parentNode.removeChild(previewNode);

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            paramName: "dzfile",


            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            maxFilesize: 10,
            acceptedFiles: 'image/*',
            dictInvalidFileType: "This type of file cannot be uploaded",
            dicMaxFilesExceeded: "You have exceeded your upload limit",
            previewTemplate: previewTemplate,
            autoQueue: true, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button", // Define the element that should be used as click trigger to select files.
            headers: {

                'X-CSRF-TOKEN': "{{ csrf_token() }}"

            },

            url: "{{route('admin.portfolio.images.store')}}", // Set the url
            success:
                function (file, response) {

                    $('form').append('<input type="hidden" name="photo[]" value = "' + response.name + '">')
                    myDropzone[file.name] = response.name
                }
        });

        myDropzone.on("addedfile", function (file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function () {
                myDropzone.enqueueFile(file);
            };
        });

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function (progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
        });

        myDropzone.on("sending", function (file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1";
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
        });

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function (progress) {
            document.querySelector("#total-progress").style.opacity = "0";
        });

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function () {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
        };
        document.querySelector("#actions .cancel").onclick = function () {
            myDropzone.removeAllFiles(true);
        };
        // DropzoneJS Demo Code End


        // Summernote for products
        $('#summernote').summernote()
    </script>
@stop





