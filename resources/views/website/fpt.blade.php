<x-layout>

    <!-- Landing section -->
    <x-slot:landing_section>
      <x-landing-pages.landing-page
        style="background-image: url('{{ asset('assets/img/landingpages_pics/fptpage.jpg') }}');">
        Field Practical Trainings
      </x-landing-pages.landing-page>
    </x-slot:landing_section>


    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="row position-relative">
            <div class="col-lg-7">
                <h2></h2>
                <div class="our-story">
                  <h4>Since 2023</h4>
                  <h3>About FPT's</h3></h3>
                  <p>This is a hands-on, five-week program that integrates open geospatial technology training into academic
                    curricula to equip university students with practical skills to map, innovate and impact their
                    communities</p>


                    <p>GeoTE Tanzania in collaboration with YouthMappers, is spearheading a
                        geospatial training program that integrates open geospatial technologies
                        into university curricula. This initiative includes a five-week Field Practical
                        Training (FPT) at Sokoine University of Agriculture, engaging over 60
                        students and with plans to expand to other academic institutions. Midway
                        through the FPT, a one-day event <a href="{{ route('geosparks.index') }}"><b>“GeoSpark”</b></a> connects YouthMappers
                        students with YouthMappers alumni, faculty and industry experts for skill-
                        building, inspiration, recognition and networking, offering students insights
                        into career opportunities</p>

                        <div class="d-block align-items-center position-relative">

                            <div class="watch-video d-flex align-items-center position-relative  me-3">
                                <i class="bi bi-play-circle"></i>
                                <a href="https://www.youtube.com/watch?v=dAEz64z175A" class="glightbox stretched-link">Watch Video</a>
                              </div>

                            <div class="watch-video d-flex align-items-center position-relative">
                                <i class="bi bi-file-pdf"></i>
                                <a href="https://heyzine.com/flip-book/d004866bb8.html" class="glightbox stretched-link">More about FPT</a>
                              </div>


                              <div class="watch-video d-flex align-items-center position-relative">
                                <i class="bi bi-file-pdf"></i>
                                <a href="https://heyzine.com/flip-book/4d0acc54e5.html" class="glightbox stretched-link">FPT Schedule</a>
                              </div>



                        </div>



                </div>
              </div>

            <div class="col-lg-7 about-img" style="background-image: url({{ asset('assets/img/landingpages_pics/other_pics/other13.jpg') }});"></div>



          </div>

        </div>

      </section>


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




