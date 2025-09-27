<x-layout>
    <!-- Landing section -->
    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page
            style="background-image: url('{{ asset('assets/img/landingpages_pics/projectpage4.jpg') }}');"
            :geospark="request()->is('/geospark')">
            <h2> <strong>Help Us Grow</strong></h2>
        </x-landing-pages.landing-page>
    </x-slot:landing_section>

    <section id="alt-services-2" class="alt-services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-around gy-4">
                <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h3>Donate Today!</h3>
                    <p>Your contribution is not a charitable donation and is not tax-deductible.
                        It directly supports GeoTE’s mission to make the world a better place through open geospatial
                        data, technology, and innovation. Your support helps us maintain and expand our open datasets,
                        pilot new geospatial technologies, and empower communities to sustainably manage natural
                        resources.</p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-bank flex-shrink-0" aria-hidden="true"></i>
                        <div>
                            <h4><a href="#" class="stretched-link h4">NATIONAL MICROFINANCE BANK(NMB) LIMITED </a>
                            </h4>
                            <h6><strong>Swift Code: </strong> <span class="text-muted">NMIBTZTZ</span></h6>
                            <h6><strong>A/C Number: </strong> <span class="text-muted">22110106988</span></h6>
                            <h6><strong>Name: </strong> <span class="text-muted">Geospatial Technology and
                                    Environment</span></h6>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4><a href="#" class="stretched-link h4">M-PESA</a></h4>
                            <h6><strong>Phone Number: </strong> <span class="text-muted">+255 762 780 170</span></h6>
                            <h6><strong>Name: </strong> <span class="text-muted">GeoTE</span></h6>
                        </div>
                    </div><!-- End Icon Box -->

                    <blockquote>
                        <p class="pt-4">"Your support today shapes the sustainable world of tomorrow." <span
                                class="text-muted">~Erick Tamba Mnyali (Co - Founder & Director)</span></p>
                        <p></p>

                    </blockquote>

                </div>


                <div class="col-lg-6 img-bg"
                    style="background-image: url({{ asset('assets/img/website/helpusgrow.jpeg') }});" data-aos="zoom-in"
                    data-aos-delay="100"></div>
            </div>

        </div>
    </section><!-- End Alt Services Section 2 -->



</x-layout>
