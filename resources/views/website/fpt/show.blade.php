<x-layout>
    <!-- Landing section -->
    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page
            style="background-image: url('{{ asset('assets/img/landingpages_pics/fptpage.jpg') }}');">
            Field Practical Trainings
        </x-landing-pages.landing-page>
    </x-slot:landing_section>



    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details px-4">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="services-list">
                        <a href="{{ $fpt->images_repository }}" target="_blank"
                            class="active btn btn-outline-success text-light"><span class="pe-2"><i
                                    class="bi bi-image"></i></span>FPT Images (Click here!) </a>

                    </div>

                    <h3><span style="font-size:2rem;">✋</span>Hold On! Be part of FPT programs</h3>
                    <p>Field Practical Training (FPT) is a structured, hands-on training activity done outside the
                        classroom.
                        It’s designed to let students:

                        Apply what they’ve learned in class to real-world situations.

                        Gain practical skills using industry-standard tools.

                        Build experience that can later be included on their CV or portfolio</p>
                    <p class="text-muted"> <b>For more information about GeoTE FPT programs reach us via:</b> </p>
                    <ul>
                        <li><i class="bi bi-whatsapp"></i> <span><a href="https://wa.me/255688364134" target="_blank">
                                    <b>+255 688 364 134</b> (click here)</a></span></li>
                        <li><i class="bi bi-envelope"></i><span>info@geote.org</span></li>
                        <li><i class="bi bi-telephone"></i> <span>+255 762 780 170</span></li>
                    </ul>

                </div>

                <div class="col-lg-8">
                    <img src="{{ asset('storage/' . $fpt->cover_image) ?? asset('assets/img/contours.jpg') }}"
                        alt="" class="img-fluid services-img">
                    <h3>{{ $fpt->title }}</h3>
                    <p>{!! nl2br(e($fpt->content)) !!}</p>


                </div>

            </div>

        </div>
    </section><!-- End Service Details Section -->






</x-layout>
