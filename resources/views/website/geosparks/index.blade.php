<x-layout>
    <!-- Landing section -->
    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page
            style="background-image: url('{{ asset('assets/img/landingpages_pics/geosparklanding.png') }}');"
            :geospark="request()->is('/geospark')">
            <h2> <strong>GEO<span class="text-warning">_</span>SPARK</strong></h2>
            <h5 class="text-warning">Let's Map, Innovate & Impact</h5>
        </x-landing-pages.landing-page>
    </x-slot:landing_section>

    <!-- ======= About Section ======= -->
    <section id="about" class="about pb-0">
        <div class="container" data-aos="fade-up">

            <div class="row position-relative">

                <div class="col-lg-7 about-img"
                    style="background-image: url({{ asset('assets/img/website/geosparkpanel.webp') }});"></div>

                <div class="col-lg-7">
                    <h2>Our year to Map, Innovate & Impact</h2>
                    <div class="our-story">
                        <h3>Here we go...</h3>
                        <p class="fst-italic">
                            GeoTE Tanzania in collaboration with YouthMappers, is thrilled to present GeoSpark 2025, a
                            one-day event designed to connect YouthMappers students with alumni, faculty, and industry
                            experts.</p>
                        <p>This event is a key highlight of a five-week Field Practical Training (FPT) program that aims
                            to integrate open geospatial technologies into university curricula, equipping students with
                            valuable geospatial data analysis, mapping, and visualization skills.</p>


                        <div class="watch-video d-flex align-items-center position-relative">
                            <i class="bi bi-play-circle"></i>
                            <a href="https://youtu.be/G9qyGXHA8HU?si=Yx-f1RsGyA1Kdim7"
                                class="glightbox stretched-link">Watch Video</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <!-- ======= Alt Services Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg"
                        style="background-image: url({{ asset('assets/img/website/simonGeospark.webp') }});"
                        data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">

                        <p><b>Celebrated on Open data Month, GeoSpark 2025 aims to:</b></p>

                        <ul>
                            <li><i class="bi bi-check-circle"></i>Inspire students to harness open geospatial data for
                                impactful solutions.</li>
                            <li><i class="bi bi-check-circle"></i>Connect YouthMappers students with alumni, faculty,
                                and industry mentors.</li>
                            <li><i class="bi bi-check-circle"></i>Promote career exploration within the geospatial
                                field.</li>
                            <li><i class="bi bi-check-circle"></i>Provide a space for recognition of achievements and
                                ongoing learning.</li>

                        </ul>

                        <p>
                            Join us at <b>GeoSpark 2025</b> and be part of a community that maps with purpose, innovates
                            for progress, and impacts the world for a sustainable future.
                        </p>




                    </div>
                </div>

            </div>
        </section><!-- End Alt Services Section -->



    </section>



    <section id="constructions" class="constructions p-0">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>From Our Latest GeoSparks</h2>
                <p>Check out events connecting students, alumni, and experts. Participate, support, or get inspired by geospatial technology in action!</p>
            </div>

             {{ $geosparks->links() }}

            <div class="row gy-4 pb-3">

                @forelse ($geosparks as $geospark)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url({{ asset('storage/' . $geospark->image) ?? asset('assets/img/contours.jpg') }});">
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $geospark->title }}</h4>
                                        <p> @truncate($geospark->description, 200) </p>
                                        <a href="{{ route('geosparks.show', $geospark->id) }}" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    @empty
                    <div>
                        <p class="text-center">(Nothing for now! GeoTE Team is working on something cool for you. Please be patient!)</p>
                    </div>

                @endforelse


            </div>



        </div>
    </section><!-- End Constructions Section -->




    <!-- Our Partners -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Partners</h2>
            </div>

            <x-fptpartners />

        </div>
    </section> <!-- End Our Partners -->


    <!-- End About Section -->




</x-layout>
