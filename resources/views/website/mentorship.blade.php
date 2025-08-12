<x-layout>

    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page
            style="background-image: url('{{ asset('assets/img/landingpages_pics/other_pics/other13.jpg') }}');">
            Mentorship
        </x-landing-pages.landing-page>
    </x-slot:landing_section>


    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row position-relative">
                <div class="col-lg-7">
                    <h2></h2>
                    <div class="our-story">
                        <h3>GIS Mentorship Program</h3>
                        <p>Through this initiative, we understand the power of mentorship, especially with the hands-on
                            nature and
                            progressive advancement of the GIS and Remote Sensing discipline. Whether enrolled in an
                            academic
                            institution, innovating, conducting your research, or employed, we offer great mentors and
                            qualified
                            GIS experts to support your course for 1 months or more. </p>

                        <p>

                            Through one-on-one mentorship, an individual can connect to a mentor for assistance and
                            navigate
                            through GIS-related proposals, projects, ideation and pitching, and activities. On your
                            flexibility
                            we are ready to engage with you. </p>

                        <div class="watch-video d-flex align-items-center position-relative  me-3">
                            <i class="bi bi-person"></i>
                            <a href="https://docs.google.com/forms/d/1fXV92v-qlGLlY6saHdVHkZZZIhWNajXEzAUFJOo4X74/edit"
                                target="_blank">
                                Interested to be mentored?</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 about-img"
                    style="background-image: url({{ asset('assets/img/landingpages_pics/other_pics/other12.jpg') }});">
                </div>

            </div>

        </div>

    </section>

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Mentees Testimonial</h2>
                <p>Real stories, real growth. Here’s what some of our past mentees have to say about their journey with
                    GeoTE’s mentorship program.</p>
            </div>

            <!-- Mentee Testimonials Slider -->
            <div class="slider-container">

                <div class="slider" id="slider">

                    <x-mentee
                    imglink="assets/img/geote-team/staff/Anna.webp"
                    name="Anna K Mzeru"
                    testimonial="GeoTE's mentorship gave me the skills, confidence, and network to take my career to the next level."  />

                </div>
                <div class="controls">
                    <button class="btn" onclick="moveSlide(-1)">&#10094;</button>
                    <button class="btn" onclick="moveSlide(1)">&#10095;</button>
                </div>
            </div>




        </div>
    </section><!-- End Our Team Section -->


    {{-- <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Testimonials</h2>
            <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
          </div>

          <div class="slides-2 swiper">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section><!-- End Testimonials Section --> --}}



    @push('styles')
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            .slider-container {
                width: 90%;
                margin: auto;
                overflow: hidden;
                position: relative;
            }

            .slider {
                display: flex;
                transition: transform 0.5s ease-in-out;
            }

            .slide {
                flex: 0 0 calc(100% / 3);
                /* 3 items per view */
                box-sizing: border-box;
                padding: 10px;
            }

            .testimonial {
                background: #f4f4f4;
                padding: 20px;
                border-radius: 10px;
                text-align: center;
            }

            .controls {
                position: absolute;
                top: 50%;
                width: 100%;
                display: flex;
                justify-content: space-between;
                transform: translateY(-50%);
            }

            .btn {
                background: rgba(0, 0, 0, 0.6);
                color: white;
                border: none;
                padding: 10px 15px;
                cursor: pointer;
            }
        </style>
    @endpush



    @push('scripts')
        <script>
            let currentIndex = 0;
            const slidesToShow = 3;
            const totalSlides = document.querySelectorAll('.slide').length;

            function moveSlide(direction) {
                const slider = document.getElementById('slider');
                const maxIndex = Math.ceil(totalSlides / slidesToShow) - 1;
                currentIndex += direction;
                if (currentIndex < 0) currentIndex = maxIndex;
                if (currentIndex > maxIndex) currentIndex = 0;
                slider.style.transform = `translateX(-${currentIndex * 100}%)`;
            }
        </script>
    @endpush
</x-layout>
