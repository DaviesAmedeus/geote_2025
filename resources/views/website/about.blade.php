<x-layout>

    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page
            style="background-image: url('{{ asset('assets/img/landingpages_pics/aboutpage.jpg') }}');">
            About GeoTE
        </x-landing-pages.landing-page>
    </x-slot:landing_section>


    <section id="alt-services" class="alt-services">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-around gy-4">
                <div class="col-lg-6 img-bg"
                    style="background-image: url({{ asset('assets/img/landingpages_pics/fullteam.JPG') }});"
                    data-aos="zoom-in" data-aos-delay="100"></div>

                <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h3>Who We Are...</h3>
                    <p> GeoTE is an open non-state geospatial actor who are voluntarily
                        focusing on making a world a better place by developing and managing open source
                        geospatial datasets, piloting open geospatial technologies and open geospatial innovations
                        to effectively, efficiently,
                        and sustainably support development and management of natural resources globally.</p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-easel flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Our Vision</a></h4>
                            <p>Aspiring future where society will be equipped with the ability to utilize geospatial
                                technology to bring a sustainable solution to challenges in the society</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Our Mission</a></h4>
                            <p>Promoting community engagement in applying open-source technologies while working in a
                                network that enables a self-sufficient connected ecosystem to ensure efficiency,
                                productivity, and quality services.</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Our Culture</a></h4>
                            <p>GeoTE tradition and norms revolve around uniting citizen science with hard science to
                                support development for all.</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Our Values</a></h4>
                            <p>GeoTE believes in nurturing open Data-Technologies-Innovation nexus (DTI).
                                As an open organization, GeoTE places its entire value on actualizing the interface of
                                data,
                                technology, and innovation, empowering communities to shape their own future.</p>


                        </div>
                    </div><!-- End Icon Box -->

                </div>
            </div>

        </div>
    </section>
    <!-- End of who we are -->



    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
       <x-geote-staff />
    </section><!-- End Our Team Section -->


</x-layout>
