@extends('layouts.print')

@section('title','Dashboard | MailBox')

@section('content')




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <!-- /.col -->
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">

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

@section('script')

    <script>
        window.print();
    </script>
@endsection
