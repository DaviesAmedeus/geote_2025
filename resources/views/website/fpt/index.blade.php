<x-layout>

    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page
            style="background-image: url('{{ asset('assets/img/landingpages_pics/fptpage.jpg') }}');">
            Field Practical Trainings
        </x-landing-pages.landing-page>
    </x-slot:landing_section>




    <section id="service-details" class="service-details px-4">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4">

                    <h3>About FPT's</h3>
                    <h5 class="text-body text-opacity-50">Since 2023</h5>
                    <p>This is a hands-on, five-week program that integrates open geospatial technology training into
                        academic curricula to equip university students with practical skills to map, innovate and
                        impact their communities</p>

                    <p>GeoTE Tanzania in collaboration with YouthMappers, is spearheading a geospatial training program
                        that integrates open geospatial technologies into university curricula. This initiative includes
                        a five-week Field Practical Training (FPT) at Sokoine University of Agriculture, engaging over
                        60 students and with plans to expand to other academic institutions. Midway through the FPT, a
                        one-day event “GeoSpark” connects YouthMappers students with YouthMappers alumni, faculty and
                        industry experts for skill- building, inspiration, recognition and networking, offering students
                        insights into career opportunities</p>
                    <ul>
                        <li><i class="bi bi-play-circle"></i> <span><a href="https://www.youtube.com/watch?v=dAEz64z175A" target="_blank">
                                    Intro Video (Click here)</a></span></li>

                    </ul>

                </div>

                <div class="col-lg-8">
                    <div class="text-center">
                        <h3 class="pb-2"><span class="bg-danger px-2 rounded me-2 text-light">NEW!!</span>Field
                            Practical Training <span
                                class="bg-success px-2  py-2 rounded me-2 text-light">4<sup>th</sup> Cohort</span> -
                            2026 <span class="bg-danger px-2 rounded me-2 text-light">NEW!!</span></h3>
                    </div>

                    <img src="{{ asset('assets/img/landingpages_pics/other_pics/fpt2026.png') }}" alt=""
                        class="img-fluid services-img">
                    <h4>#FPT2026-“Data to Action”</h4>
                    <p>GeoTE Tanzania, in collaboration with YouthMappers and partner
                        universities, presents the 4th Cohort of the Field Practical Training (FPT)
                        2026. A transformative geospatial learning program focused on open
                        mapping for community development.</p>

                    <p>Building on the success of
                        previous cohorts that trained over 170 students at Sokoine University of
                        Agriculture, FPT 2026 aims to engage over 1,700 YouthMappers in
                        Tanzania. Under the theme “Data to Action,” the program focuses on
                        producing quality, actionable field and remote mapping data enriched
                        with local knowledge and community voices. Running from March to
                        April 2026, after pre-activities from November to February 2025, it will
                        conclude with a closing ceremony celebrating
                        innovation and
                        collaboration of our students and partners.</p>




                            <ul>
                        <li><i class="bi bi-file-pdf"></i> <span><a href="https://heyzine.com/flip-book/2d1764e95a.html" target="_blank">
                                    More on this PDF (Click here)</a></span></li>

                    </ul>


                </div>

            </div>

        </div>
    </section>


    <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>From Our Recent Field Practical Trainings</h2>
                <p>The Impact we have on students is invaluable. See from our recent posts how we have inspired young
                    minds through GIS hands on activities.</p>
            </div>

            {{ $fpts->links() }}

            <div class="row gy-4 pb-3">

                @forelse ($fpts as $fpt)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"
                                        style="background-image: url({{ asset('storage/' . $fpt->cover_image) ?? asset('assets/img/contours.jpg') }});">
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $fpt->title }}</h4>
                                        <p> @truncate($fpt->excerpt, 100) </p>
                                        <a href="{{ route('fpt.show', $fpt->slug) }}"
                                            class="readmore stretched-link">Read more <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->


                @empty
                    <div>
                        <p class="text-center">(Nothing for now! GeoTE Team is working on something cool for you. Please
                            be patient!)</p>
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




</x-layout>
