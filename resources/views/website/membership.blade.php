<x-layout>

    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page
            style="background-image: url('{{ asset('assets/img/landingpages_pics/other_pics/other13.jpg') }}');">
            GeoTE Membership
        </x-landing-pages.landing-page>
    </x-slot:landing_section>


    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row position-relative">
                <div class="col-lg-7">
                    <h2></h2>
                    <div class="our-story">
                        <h3>GeoTE Membership Program.</h3>
                        <p>GeoTE’s membership program directly supports our mission of promoting community engagement in
                            applying geospatial technologies by funding and sustaining activities such as mapathons,
                            community mapping projects, and capacity-building events. Membership comes with several
                            benefits, including access to exclusive resources, networking opportunities, and priority
                            involvement in GeoTE initiatives. </p>

                            <p>This form is only to capture your interest in joining.
                            Those who complete it will receive detailed information about our membership tiers,
                            benefits, and donation rates before making any commitment</p>


                        <div class="watch-video d-flex align-items-center position-relative  me-3">
                            <i class="bi bi-person"></i>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSf3QwwljcAQi3kpCIogMkHdHMvMNCtcISOvAab8IfSRy0mwCA/viewform?usp=header"
                                target="_blank">
                                Interested to become a member? (click here)</a>
                        </div>

                        <div class="watch-video d-flex align-items-center position-relative">
                            <i class="bi bi-play-circle"></i>
                            <a href="https://youtu.be/7pdQwCAPbWE?si=dBQRiGA6lYT2bik0"
                                class="glightbox stretched-link">Watch Video</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 about-img"
                    style="background-image: url({{ asset('assets/img/website/geotemembership.webp') }});">
                </div>

            </div>

        </div>

    </section>

    <!-- ======= Our Team Section ======= -->
    {{-- <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Mentees Testimonial</h2>
                <p>Real stories, real growth. Here’s what some of our past mentees have to say about their journey with
                    GeoTE’s mentorship program.</p>
            </div>

            <!-- Mentee Testimonials Slider -->
            <div class="slider-container">

                <div class="slider" id="slider">
                    <x-mentee-testimonials />
                </div>

                <div class="controls">
                    <button class="btn" onclick="moveSlide(-1)">&#10094;</button>
                    <button class="btn" onclick="moveSlide(1)">&#10095;</button>
                </div>
            </div>




        </div>
    </section><!-- End Our Team Section --> --}}






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
