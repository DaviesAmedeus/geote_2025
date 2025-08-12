<x-layout>
    <!-- Landing section -->
     <!-- Landing section -->
     <x-slot:landing_section>
        <x-landing-pages.landing-page
          style="background-image: url('{{ asset('assets/img/landingpages_pics/geosparklanding.png') }}');"
          :geospark="request()->is('/geospark')"
          >
         <h2> <strong>GEO<span class="text-warning">_</span>SPARK</strong></h2>
         <h5 class="text-warning">Let's Map, Innovate & Impact</h5>
        </x-landing-pages.landing-page>
      </x-slot:landing_section>

     <!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" style="background-image: url({{ asset('assets/img/website/geosparkpanel.webp') }});"></div>

          <div class="col-lg-7">
            <h2>Our year to Map, Innovate & Impact</h2>
            <div class="our-story">
              <h3>Here we go...</h3>
              <p class="fst-italic">
                GeoTE Tanzania in collaboration with YouthMappers, is thrilled to present GeoSpark 2025, a one-day event designed to connect YouthMappers students with alumni, faculty, and industry experts.</p>
                <p>This event is a key highlight of a five-week Field Practical Training (FPT) program that aims to integrate open geospatial technologies into university curricula, equipping students with valuable geospatial data analysis, mapping, and visualization skills.</p>


               <div class="watch-video d-flex align-items-center position-relative">
                 <i class="bi bi-play-circle"></i>
                 <a href="https://youtu.be/G9qyGXHA8HU?si=Yx-f1RsGyA1Kdim7" class="glightbox stretched-link">Watch Video</a>
               </div>
            </div>
          </div>

        </div>

      </div>


      <!-- ======= Alt Services Section ======= -->
<section id="alt-services" class="alt-services">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-around gy-4">
        <div class="col-lg-6 img-bg" style="background-image: url({{ asset('assets/img/website/simonGeospark.webp') }});" data-aos="zoom-in" data-aos-delay="100"></div>

        <div class="col-lg-5 d-flex flex-column justify-content-center">

            <p><b>Celebrated on Open data Month, GeoSpark 2025 aims to:</b></p>

            <ul>
                <li><i class="bi bi-check-circle"></i>Inspire students to harness open geospatial data for impactful solutions.</li>
                 <li><i class="bi bi-check-circle"></i>Connect YouthMappers students with alumni, faculty, and industry mentors.</li>
                  <li><i class="bi bi-check-circle"></i>Promote career exploration within the geospatial field.</li>
                   <li><i class="bi bi-check-circle"></i>Provide a space for recognition of achievements and ongoing learning.</li>

              </ul>

              <p>
                Join us at <b>GeoSpark 2025</b> and be part of a community that maps with purpose, innovates for progress, and impacts the world for a sustainable future.
              </p>




        </div>
      </div>

    </div>
</section><!-- End Alt Services Section -->



<div class="container" data-aos="fade-up">

    <div class="row position-relative">



      {{-- <div class="col-lg-7">
        <div class="our-story">
          <h3>Special Announcements</h3>


          <ul>
            <li><i class="bi bi-bullet"></i><p><b>Call for posters:</b></p>
            </li>
             <li><i class="bi bi-point-circle"></i><a href="https://docs.google.com/forms/d/1INyylFCLJMbKeZZ1kc3KoALRj8bsAylC8OaFMPSgDAQ/preview"> >>Showcase your research projects or map <br>visualizations addressing real-world challenges!</a></li>

          </ul>

        </div>
      </div> --}}

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


  <!-- End About Section -->


  <!-- ======= Stats Counter Section ======= -->
  <section id="stats-counter" class="stats-counter section-bg">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-tools  color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-person color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="850" data-purecounter-duration="1" class="purecounter">+</span>
                <p>Trainees</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-clipboard-data color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                <p>Workshops</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journals color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                <p>Publications</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section>
  <!-- End Stats Counter Section -->




</x-layout>


