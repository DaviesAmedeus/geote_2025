<x-layout>
    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page :home="request()->is('/')" />
    </x-slot:landing_section>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row position-relative">

                <div class="col-lg-7 about-img"
                    style="background-image: url({{ asset('assets/img/website/ourstory.JPG') }});"></div>

                <div class="col-lg-7">
                    <h2>Welcome to GeoTE.</h2>
                    <div class="our-story">
                        <h4>Est 2019</h4>
                        <h3>Our Story</h3>
                        <p>Founded in 2019 as a youth-led initiative promoting sustainable development
                            in local communities, GeoTE aims at utilizing geospatial technology to support
                            sustainable development goals through geographic citizen science and participatory
                            geographic information system strategies in implementing community projects to enhance
                            inclusiveness in addressing challenges and finding sustainable solutions in local
                            communities.</p>

                        <p>Being one of many open mapping communities, GeoTE Tanzania has continued to contribute
                            to open data through Openstreetmap and while transforming community knowledge through
                            remote mapping and field data gathering workshops and capacity building sessions.</p>


                        <div class="watch-video d-flex align-items-center position-relative">
                            <i class="bi bi-play-circle"></i>
                            <a href="https://youtu.be/fNE--qlDo2Y" class="glightbox stretched-link">Watch
                                Video</a>
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
                        style="background-image: url({{ asset('assets/img/landingpages_pics/other_pics/other5.jpg') }});"
                        data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">

                        <p>Our strength lies in our ability to mobilize community participation in developing
                            and implementing projects and activities that strengthen their adaptation to changing
                            environments and technologies. In addition, GeoTE effectively advocates the use of
                            open knowledge and problem-based learning through community training, seminars, and
                            workshops with different stakeholders.</p>

                        <p>GeoTE intends to create a community that works in a connected ecosystem,
                            contributing to and utilizing the power of open-source tools in solving local,
                            regional, and global challenges that directly support the 2030 Sustainable Development
                            Goals.</p>



                    </div>
                </div>

            </div>
        </section><!-- End Alt Services Section -->


        <div class="container" data-aos="fade-up">

            <div class="row position-relative">

                <div class="col-lg-7 about-img"
                    style="background-image: url({{ asset('assets/img/website/strategic-plan-2022-2027.png') }});">
                </div>

                <div class="col-lg-7">
                    <div class="our-story">
                        <h4>2022 - 2027</h4>
                        <h3>Our Strategic Plan </h3>
                        <p class="py-5">We are pleased to present the first Strategic Plan of GeoTE (Geospatial
                            Technology and
                            Environment). This plan outlines our commitment to bridging data gaps, strengthening local
                            capacity, and empowering communities to address environmental and development challenges
                            with inclusive, evidence-based solutions.</p>
                        <p></p>


                        <div class="watch-video d-flex align-items-center position-relative">
                            <i class="bi bi-download"></i>
                            <a href="https://drive.google.com/file/d/1LMvm3foMYHe0tjpLPiemhpd0_Eq2X3_h/view?usp=sharing"
                                target="_blank" class="">Download</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End About Section -->

    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Engagements</h2>
            </div>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-mountain-city"></i>
                        </div>
                        <h3>Capacity Building</h3>
                        <p>Capacity Building is at the core of GeoTE’s mission, with a deliberate focus on empowering
                            youth and early-career professionals within institutions and communities. GeoTE strengthens
                            geospatial knowledge and technical skills
                            through geospatial programs such as Field practical training, GIS mentorship, GIS short
                            courses and workshops. Our programs priorities applied learning that enables young people
                            and emerging professionals to confidently use geospatial technologies in real-world
                            contexts, from community mapping to institutional decision-making.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-compass-drafting"></i>
                        </div>
                        <h3>Community Mapping</h3>
                        <p>Community Mapping focuses on the collection, improvement, and validation of geospatial data
                            through participatory approaches. GeoTE works with youth, academic institutions, the
                            government and local communities, to map critical infrastructure, services, and
                            environmental features, particularly in underserved and data-scarce areas. This approach
                            ensures that local knowledge is captured, communities are made visible on maps, and open
                            geospatial data is available to support development agendas such as planning, service
                            delivery, and disaster risk management.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                        </div>
                        <h3>Community sensitization</h3>
                        <p>Community sensitization aims to advance geospatial advocacy by building awareness, trust, and
                            understanding of geospatial technologies among decision-makers, communities, and
                            stakeholders across multiple sectors. Through dialogue, outreach, and engagement, GeoTE
                            promotes the adoption of open data, participatory mapping, and geospatial innovation in
                            sectors beyond the traditional geospatial domain. These efforts encourage evidence-based,
                            data-driven decision-making while highlighting the cross-cutting value of geospatial
                            technologies. Community sensitization fosters ownership, inclusive participation, and the
                            responsible and ethical use of geospatial information in development processes.</p>
                    </div>
                </div><!-- End Service Item -->



                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-trowel-bricks"></i>
                        </div>
                        <h3>Mentorship</h3>
                        <p>Targeting Youth, this thematic area focuses on mentoring youth in universities and the
                            community on ways they can shape their carriers. This includes finding opportunities and
                            ideating and pitching their ideas that aim to solve community challenges. </p>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-search"></i>
                        </div>
                        <h3>Research</h3>
                        <p>GeoTE contributes to community-based research to remove the various social, cultural, and
                            logistical barriers while aiming to achieve greater knowledge around sustainable environment
                            to empower communities worldwide through collaboration and partnerships. </p>
                    </div>
                </div><!-- End Service Item -->


            </div>

        </div>
    </section>


    <x-stats-counter />
    <!-- End Stats Counter Section -->

    <!-- ======= GeoTE partners Section ======= -->
    <x-geote-partners />
    <!-- End GeoTE partners Section -->




</x-layout>
