@extends('layouts.site')

@section('title','Portfolio | Home')

@section('content')


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="background-image: url({{$home->photo}})">
        <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
            <h1>{{ $home->name }}</h1>
            <p>I'm <span class="typed" data-typed-items="{{ $home->jobs }}"></span>

            </p>

            <a href="{{ route('site.about') }}" class="btn-about">About Me</a>
        </div>
    </section><!-- End Hero -->



@endsection


