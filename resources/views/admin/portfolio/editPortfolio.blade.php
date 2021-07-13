{{--@extends('layouts.admin')--}}

{{--@section('content')--}}


{{--    <!-- Content Wrapper. Contains page content -->--}}
{{--    <div class="content-wrapper">--}}
{{--        <!-- Content Header (Page header) -->--}}
{{--        <section class="content-header">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row mb-2">--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <h1>Update Portfolio</h1>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <ol class="breadcrumb float-sm-right">--}}
{{--                            <li class="breadcrumb-item"><a href="{{ route('admin.portfolio') }}">Portfolio</a></li>--}}
{{--                            <li class="breadcrumb-item active">Update Portfolio</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!-- /.container-fluid -->--}}
{{--        </section>--}}

{{--        <!-- Main content -->--}}
{{--        <section class="content">--}}

{{--            <div class="container-fluid col-md-9">--}}
{{--                <div class="col-md-9">--}}
{{--                    <div class="card card-secondary">--}}
{{--                        <div class="card-header">--}}


{{--                            <h3 class="card-title">Update Portfolio</h3>--}}

{{--                            <div class="card-tools">--}}
{{--                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">--}}
{{--                                    <i class="fas fa-minus"></i>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="card-body">--}}

{{--                            <form class="form" action="{{ route('admin.portfolio.update',$portfolios->id) }}"--}}
{{--                                  method="POST" enctype="multipart/form-data">--}}
{{--                                @csrf--}}

{{--                                <input type="hidden" name="id" value="{{$portfolios->id}}">--}}
{{--                                @include('includes.alerts.alert')--}}

{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6 ">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="name">Name:</label>--}}
{{--                                            <input type="text" id="name" name="name" value="{{ $portfolios->name }}"--}}
{{--                                                   class="form-control">--}}
{{--                                            @error('name')--}}

{{--                                            <span class="text-danger">{{ $message }}</span>--}}

{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group ">--}}
{{--                                        <label for="profession">Category:</label>--}}
{{--                                        <br>--}}
{{--                                        <select class="form-control" id="category_id" name="category_id">--}}


{{--                                            @foreach ($categories as $category)--}}

{{--                                                <option value="{{ $category->id }}"--}}
{{--                                                        @if ( $portfolios->category_id == $category->id ) selected @endif > {{ $category->name }}</option>--}}


{{--                                            @endforeach--}}


{{--                                        </select>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-md-12 ">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="description"> Description:</label>--}}
{{--                                            <textarea id="summernote" name="description"  class="form-control" >{{ old('description',$portfolios->description) }}</textarea>--}}
{{--                                            @error('description')--}}

{{--                                            <span class="text-danger">{{ $message }}</span>--}}

{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                                --}}{{--                      <div class="form-group col-md-3 mt-3">--}}
{{--                                --}}{{--                        <h5>Photo:</h5>--}}
{{--                                --}}{{--                    <img style="height: 30vh " src="{{ url($portfolios->photo)}}" >--}}
{{--                                --}}{{--                    <input class="mt-3" type="file" id="photo" name="photo">--}}

{{--                                --}}{{--                    @error('photo')--}}
{{--                                --}}{{--                    <span class="text-danger">{{ $message }}</span>--}}

{{--                                --}}{{--                    @enderror--}}
{{--                                --}}{{--                    </div>--}}


{{--                                <div class="row">--}}
{{--                                    <div class="col-12">--}}
{{--                                        <a href="#" class="btn btn-danger mr-2">Cancel</a>--}}
{{--                                        <input type="submit" value="Save Changes" class="btn btn-primary ">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </form>--}}

{{--                        </div>--}}

{{--                        <!-- /.card-body -->--}}
{{--                    </div>--}}
{{--                    <!-- /.card -->--}}
{{--                </div>--}}

{{--            </div>--}}


{{--        </section>--}}
{{--        <!-- /.content -->--}}
{{--    </div>--}}
{{--    <!-- /.content-wrapper -->--}}

{{--@endsection--}}


{{--@section('script')--}}

{{--    <script>--}}

{{--        // Summernote for products--}}
{{--        $('#summernote').summernote()--}}
{{--    </script>--}}

{{--@endsection--}}



