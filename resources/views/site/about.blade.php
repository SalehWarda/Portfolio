@extends('layouts.site')

@section('title','Portfolio | About')


@section('content')




    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                    <h4>Personal Info:</h4>
                    <p>{{ $about->personalInfo }}</p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <img style="height: 50vh" src="{{ url($about->photo) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>{{ $about->field_or_specialty }}</h3>
                        <p class="font-italic">
                            {{$about->about_the_specialty}}
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Name:</strong> {{$about->name}}
                                    </li>
                                    <li><i class="icofont-rounded-right"></i>
                                        <strong>Birthday:</strong> {{$about->birthday}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Call:</strong> {{$about->phone}}
                                    </li>
                                    <li><i class="icofont-rounded-right"></i>
                                        <strong>Nationality:</strong> {{$about->nationality}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>City:</strong> Address
                                        : {{$about->address}}</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{$about->age}}</li>
                                    <li><i class="icofont-rounded-right"></i>
                                        <strong>Degree:</strong> {{$about->degree}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> {{$about->email}}
                                    </li>
                                    <li><i class="icofont-rounded-right"></i>
                                        <strong>Spoken:</strong> {{$about->spoken}}</li>
                                    <li><i class="icofont-rounded-right"></i>
                                        <strong>Freelance:</strong> {{$about->freelance}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Skills</h2>
                    <p>You can see here some of the skills I have mastered in my work while designing client sites.</p>
                </div>

                <div class="row skills-content">

                    @foreach ($skill as $skills)

                        <div class="col-lg-6">

                            <div class="progress">
                                <span class="skill">{{ $skills->n_o_s }} <i class="val">{{ $skills->l_o_e }}%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skills->l_o_e }}"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </section> <!-- End Skills Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Facts</h2>
                    <p>{{ $fact->facts }}</p>
                </div>

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">{{ $fact->clients }}</span>
                        <p>Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">{{ $fact->projects }}</span>
                        <p>Projects</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">{{ $fact->h_o_s }}</span>
                        <p>Hours Of Support</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">{{ $fact->y_o_e }}</span>
                        <p>Years Of Experience</p>
                    </div>

                </div>

            </div>
        </section><!-- End Facts Section -->


    </main><!-- End #main -->


@endsection
