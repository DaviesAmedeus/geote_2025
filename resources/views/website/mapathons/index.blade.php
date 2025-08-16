<x-layout>

    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page
            style="background-image: url('{{ asset('assets/img/landingpages_pics/slide_pics/slide5.jpg') }}');">
            Mapathons New
        </x-landing-pages.landing-page>
    </x-slot:landing_section>


    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row position-relative">
                <div class="col-lg-7">
                    <h2></h2>
                    <div class="our-story">
                        <h3>Mapathons</h3>
                        <p>We have been working with YouthMappers and other OpenStreetMap communities around the world
                            to host mapping parties (“mapathons”) that contribute to open data. This initiative has been
                            a great platform for inspiring young minds in the GIS field. </p>

                        <p> Looking ahead, we plan to bring together mapathons, boot camps, and inclusive events in
                            collaboration with various chapters and organizations. Participation will depend on the
                            partnerships in place and the type of event being organized. Stay tuned, more mapping
                            parties are on the way!</p>
                        {{--
                        <div class="d-flex align-items-center position-relative">
                            <div class="watch-video d-flex align-items-center position-relative  me-3">
                                <i class="bi bi-play-circle"></i>
                                <a href="https://www.youtube.com/watch?v=dAEz64z175A" class="glightbox stretched-link">Online Courses</a>
                            </div>

                            <div class="watch-video d-flex align-items-center position-relative">
                                <i class="bi bi-list"></i>
                                <a href="#" class="glightbox stretched-link">In person/Physical courses</a>
                              </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-7 about-img"
                    style="background-image: url({{ asset('assets/img/website/mapathons.webp') }});"></div>
            </div>
        </div>
    </section>

    <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>From Our Latest Mapathons</h2>
                <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis
                    dolorem dolore earum</p>
            </div>

            <div class="row gy-4 pb-3">

                @foreach ($mapathons as $mapathon)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url({{ asset('storage/' . $mapathon->image) ?? asset('assets/img/contours.jpg') }});">
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $mapathon->title }}</h4>
                                        <p> @truncate($mapathon->description, 200) </p>
                                        <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->
                @endforeach



            </div>

            {{ $mapathons->links() }}

        </div>
    </section><!-- End Constructions Section -->







</x-layout>
