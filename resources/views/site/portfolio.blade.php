@extends('layouts.site')

@section('title','Portfolio | Portfolio')

@section('content')

    <main id="main">

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>


                            @foreach ($categories as $category)

                                <li data-filter=".filter-{{ $category->name }}">{{ $category->name }}</li>


                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    @foreach ($portfolios as $portfolio)

                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $portfolio->category->name }}">
                            <div class="portfolio-wrap">
                                <img src="{{$portfolio->images[0]->photo ?? ''}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $portfolio->name }}</h4>
                                    <p>{{ $portfolio->category->name }}</p>
                                    <div class="portfolio-links">
                                        <a href="{{$portfolio->images[1]->photo ?? ''}}" data-gall="portfolioGallery"
                                           class="venobox" title="{{ $portfolio->name }}"><i class="bx bx-plus"></i></a>
                                        <a href="{{route('portfolio.details',$portfolio->id)}}"
                                           data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox"
                                           title="Portfolio Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    @endforeach


                </div>


            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->


@endsection

