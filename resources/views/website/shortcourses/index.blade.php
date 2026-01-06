<x-layout>

    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page
            style="background-image: url('{{ asset('assets/img/landingpages_pics/shortcoursepage.jpg') }}');">
            Short Courses
        </x-landing-pages.landing-page>
    </x-slot:landing_section>


    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row position-relative">
                <div class="col-lg-7">
                    <h2></h2>
                    <div class="our-story">
                        <h3>Our Short Courses</h3>
                        <p>We offer flexible courses designed to cater to various disciplines within Geographic
                            Information Systems (GIS).
                            At the heart of our curriculum is the compulsory course, 'Basic to GIS', which serves as an
                            introduction
                            to beginners in the field. This foundational course provides participants with exposure to a
                            wide array of
                            tools, including both commercial and open-source software, as well as field mapping tools.
                        </p>

                        <p>Additionally, we offer specialized courses tailored to specific disciplines such as Wildlife
                            Management, Marine GIS, and Land Management, among others. These courses are crafted to
                            address
                            the unique needs and applications of each field, providing participants with targeted skills
                            and
                            knowledge.
                        </p>





                        <div class="d-flex align-items-center position-relative">

                            <div class="watch-video dbi bi-send-flex align-items-center position-relative">

                                <a href="https://forms.gle/gkWN8qFYgdquqKwu7" target="_blank" class="btn btn-success"><span class="text-light"><i class="bi bi-send text-light"></i>Apply here!</span></a>
                            </div>



                        </div>



                    </div>
                </div>

                <div class="col-lg-7 about-img"
                    style="background-image: url({{ asset('assets/img/landingpages_pics/other_pics/other4.jpg') }});">
                </div>



            </div>

        </div>

    </section>

    <section id="alt-services" class="alt-services">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-around gy-4">
                <div class="col-lg-6 img-bg"
                    style="background-image: url({{ asset('assets/img/landingpages_pics/other_pics/other5.jpg') }});"
                    data-aos="zoom-in" data-aos-delay="100"></div>

                <div class="col-lg-5 d-flex flex-column justify-content-center">

                    <p>
                        To ensure accessibility, our courses are delivered in both physical and virtual environments,
                        allowing individuals to participate from anywhere in the world. Furthermore, our courses are
                        offered
                        year-round, providing the flexibility for individuals to apply at any time that suits their
                        schedule.
                        Through our GeoTE community, we strive to accommodate the interests and preferences of all
                        participants, offering a variety of study centers and course options
                    </p>

                    <p>Whether you are seeking to enhance your professional skills or supplement your education, our
                        courses
                        are structured to meet your needs and goals. We look forward to welcoming you to our GIS short
                        course programs and guiding you on your journey to mastering this dynamic field."</p>



                </div>
            </div>

        </div>
    </section>


       <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>From Our Latest Shortcourses</h2>
                <p>See the courses available below and apply for one you think is beneficial and has impact!</p>
            </div>

             {{ $shortcourses->links() }}

            <div class="row gy-4 pb-3">

                @forelse ($shortcourses as $shortcourse)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url({{ asset('storage/' . $shortcourse->cover_image) ?? asset('assets/img/contours.jpg') }});">
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $shortcourse->title }}</h4>
                                        <p> @truncate($shortcourse->excerpt, 100) </p>
                                        <a href="{{ route('shortcourses.show', $shortcourse->slug) }}" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
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








</x-layout>
