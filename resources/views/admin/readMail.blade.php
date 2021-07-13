@extends('layouts.admin')

@section('title','Dashboard | MailBox')

@section('content')




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ReadMail</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.contact')}}">Inbox</a></li>
                            <li class="breadcrumb-item active">ReadMail</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{route('admin.contact')}}" class="btn btn-primary btn-block mb-3">Back to Inbox</a>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Folders</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item active">
                                        <a href="{{route('admin.contact')}}" class="nav-link">
                                            <i class="fas fa-inbox"></i> Inbox
                                            <span class="badge bg-primary float-right">{{App\Models\front\ContactUs::count()}}</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Read Mail</h3>

                                <div class="card-tools">
                                    <a href="#" class="btn btn-tool" title="Previous"><i
                                            class="fas fa-chevron-left"></i></a>
                                    <a href="#" class="btn btn-tool" title="Next"><i
                                            class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="mailbox-read-info">
                                    <h5>{!! \Illuminate\Support\Str::limit( $mail->subject , 50, '...') !!}</h5>
                                    <h6><strong> From:</strong> {{$mail->email}}<span
                                            class="mailbox-read-time float-right">{{ $mail->created_at->format('g:ia, \o\n l, jS F Y') }}</span>
                                    </h6>
                                </div>

                                <div class="mailbox-read-message">
                                    <p>{!! $mail->message !!}</p>


                                </div>
                                <!-- /.mailbox-read-message -->
                            </div>

                            <div class="card-footer">

                                <a href="{{route('admin.Mail.delete',$mail->id)}}" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete
                                </a>
                                <a href="{{route('admin.Mail.print',$mail->id)}}"  class="btn btn-default"><i class="fas fa-print"></i> Print
                                </a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

