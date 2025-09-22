<x-layout>
    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page
            style="background-image: url('{{ asset('assets/img/landingpages_pics/shortcoursepage.jpg') }}');">
            Short Courses
        </x-landing-pages.landing-page>
    </x-slot:landing_section>



    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details px-4">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="services-list">
                        <a href="{{ $shortcourse->images_repository }}" target="_blank"
                            class="active btn btn-outline-success text-light"><span class="pe-2"><i
                                    class="bi bi-image"></i></span>Shortcourses Images (Click here!) </a>

                    </div>

                    <h3><span style="font-size:2rem;">✋</span>Hold On! Be part of shortcourse programs</h3>
                    <p>Our short courses give you hands-on, real-world experience. Apply your classroom knowledge, master industry tools, and build skills you can proudly showcase on your CV or portfolio. Join us and turn learning into impact!</p>
                    <p class="text-muted"> <b>For more information about GeoTE shortcourse programs reach us via:</b> </p>
                    <ul>
                        <li><i class="bi bi-whatsapp"></i> <span><a href="https://wa.me/255688364134" target="_blank">
                                    <b>+255 688 364 134</b> (click here)</a></span></li>
                        <li><i class="bi bi-envelope"></i><span>info@geote.org</span></li>
                        <li><i class="bi bi-telephone"></i> <span>+255 762 780 170</span></li>
                    </ul>

                </div>

                <div class="col-lg-8">
                    <img src="{{ asset('storage/' . $shortcourse->cover_image) ?? asset('assets/img/contours.jpg') }}"
                        alt="" class="img-fluid services-img">
                    <h3>{{ $shortcourse->title }}</h3>
                    <p>{!! nl2br(e($shortcourse->content)) !!}</p>


                </div>

            </div>

        </div>
    </section><!-- End Service Details Section -->






</x-layout>
