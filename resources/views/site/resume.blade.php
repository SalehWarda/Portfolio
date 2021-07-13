@extends('layouts.site')

@section('title','Portfolio | Resume')
@section('content')

    <main id="main">

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Resume</h2>

                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Sumary</h3>
                        <div class="resume-item pb-0">
                            <h4>{{ $summary->name }}</h4>
                            <p><em>{{ $summary->t_a_y_s }}</em></p>

                            <ul>
                                <li>{{ $summary->address }}</li>
                                <li>{{ $summary->phone }}</li>
                                <li>{{ $summary->email }}</li>
                            </ul>

                        </div>

                        <h3 class="resume-title">Education</h3>
                        @foreach ($educations as $education)

                            <div class="resume-item">
                                <h4>{{ $education->degree_of_specialty }} of {{ $education->name_of_specialty }}</h4>
                                <h5>{{ $education->study_period }}</h5>
                                <p><em>{{ $education->place_of_study }}</em></p>
                                <p>{{ $education->about_of_specialty }}</p>
                            </div>


                        @endforeach


                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Professional Experience</h3>

                        @foreach ($experiences as $experience)

                            <div class="resume-item">
                                <h4>{{ $experience->name_of_experience }}</h4>
                                <h5>{{ $experience->experience_period }}</h5>
                                <p><em>{{ $experience->experience_place }}</em></p>
                                <p>
                                <ul>
                                    <li>{{ $experience->task1 }}</li>
                                    <li>{{ $experience->task2 }} </li>
                                    <li>{{ $experience->task3 }}</li>
                                    <li>{{ $experience->task4 }}</li>
                                </ul>
                                </p>
                            </div>

                        @endforeach

                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

    </main><!-- End #main -->

@endsection


