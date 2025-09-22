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
                  <p>We offer flexible courses designed to cater to various disciplines within Geographic Information Systems (GIS).
                    At the heart of our curriculum is the compulsory course, 'Basic to GIS', which serves as an introduction
                    to beginners in the field. This foundational course provides participants with exposure to a wide array of
                    tools, including both commercial and open-source software, as well as field mapping tools.</p>

                    <p>Additionally, we offer specialized courses tailored to specific disciplines such as Wildlife
                        Management, Marine GIS, and Land Management, among others. These courses are crafted to address
                        the unique needs and applications of each field, providing participants with targeted skills and
                        knowledge.
                    </p>





                        <div class="d-flex align-items-center position-relative">

                            <div class="watch-video d-flex align-items-center position-relative  me-3">
                                <i class="bi bi-play-circle"></i>
                                <a href="https://www.youtube.com/watch?v=dAEz64z175A" class="glightbox stretched-link">Online Courses</a>
                              </div>

                            <div class="watch-video d-flex align-items-center position-relative">
                                <i class="bi bi-list"></i>
                                <a href="#" class="glightbox stretched-link">In person/Physical courses</a>
                              </div>



                        </div>



                </div>
              </div>

            <div class="col-lg-7 about-img" style="background-image: url({{ asset('assets/img/landingpages_pics/other_pics/other4.jpg') }});"></div>



          </div>

        </div>

      </section>

      <section id="alt-services" class="alt-services">
        <div class="container" data-aos="fade-up">

          <div class="row justify-content-around gy-4">
            <div class="col-lg-6 img-bg" style="background-image: url({{ asset('assets/img/landingpages_pics/other_pics/other5.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div>

            <div class="col-lg-5 d-flex flex-column justify-content-center">

                <p>
                    To ensure accessibility, our courses are delivered in both physical and virtual environments,
                    allowing individuals to participate from anywhere in the world. Furthermore, our courses are offered
                    year-round, providing the flexibility for individuals to apply at any time that suits their schedule.
                    Through our GeoTE community, we strive to accommodate the interests and preferences of all participants, offering a variety of study centers and course options
                </p>

                <p>Whether you are seeking to enhance your professional skills or supplement your education, our courses
                     are structured to meet your needs and goals. We look forward to welcoming you to our GIS short
                     course programs and guiding you on your journey to mastering this dynamic field."</p>



            </div>
          </div>

        </div>
      </section>






  </x-layout>




