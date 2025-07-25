@props(['home' => false, 'geospark' => false])

@if ($home)
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="info d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <h2 data-aos="fade-down"><strong>GEOSPATIAL TECHNOLOGY & ENVRIONMENT</strong></h2>
          <h4 data-aos="fade-up" class="text-warning">“Map, Innovate, Impact”</h4>
        </div>
      </div>
    </div>
  </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-item active"
                style="background-image: url({{ asset('assets/img/landingpages_pics/slide_pics/slide0.jpg') }})">
            </div>

            <div class="carousel-item"
                style="background-image: url({{ asset('assets/img/landingpages_pics/slide_pics/slide5.jpg') }})"></div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets/img/landingpages_pics/slide_pics/slide1.JPG') }})"></div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets/img/landingpages_pics/slide_pics/slide2.jpg') }})"></div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets/img/landingpages_pics/slide_pics/slide3.jpg') }})"></div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets/img/landingpages_pics/slide_pics/slide4.jpg') }})"></div>


            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section>


    <!-- End Hero Section -->
@elseif ($geospark)
    <section id="hero" class="hero">
        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2 data-aos="fade-down">Geospatial Technology and Environment</h2>
                        <h4 data-aos="fade-up" class="text-warning">“Map, Innovate, Impact”</h4>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-item active"
                style="background-image: url({{ asset('assets/img/landingpages_pics/slide_pics/slide0.jpg') }})"></div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets/img/landingpages_pics/slide_pics/slide5.jpg') }})"></div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets/img/landingpages_pics/slide_pics/slide1.JPG') }})"></div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets/img/landingpages_pics/slide_pics/slide2.jpg') }})"></div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets/img/landingpages_pics/slide_pics/slide3.jpg') }})"></div>
            <div class="carousel-item"
                style="background-image: url({{ asset('assets/img/landingpages_pics/slide_pics/slide4.jpg') }})"></div>


            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->
@elseif ($geospark)
    <div {{ $attributes->merge(['class' => 'breadcrumbs d-flex align-items-center']) }}>
        <div class="container position-relative d-flex flex-column align-items-center " data-aos="fade">

            {{ $slot }}
        </div>
    </div>
@else
    <div {{ $attributes->merge(['class' => 'breadcrumbs d-flex align-items-center']) }}>
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>{{ $slot }}</h2>
        </div>
    </div>
@endif
