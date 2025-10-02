<x-layout>
    <!-- Landing section -->
    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page
            style="background-image: url('{{ asset('assets/img/landingpages_pics/geosparklanding.png') }}');"
            :geospark="request()->is('/geospark')">
            <h2>Publication</h2>

        </x-landing-pages.landing-page>
    </x-slot:landing_section>



    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details px-4">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4">


                    <h3><span style="font-size:2rem;">✋</span>Hold On & Support publications.</h3>
                    <p>Before you dive into the details, take a moment to support <strong>Our publications!</strong>
                        Your encouragement — whether through sharing, mentoring, sponsoring, or simply showing up —
                        empowers students to master geospatial skills that make real-world impact..</p>
                    <p class="text-muted"> <b>For more information on how to support reach us via:</b> </p>
                    <ul>
                        <li><i class="bi bi-whatsapp"></i> <span><a href="https://wa.me/255688364134" target="_blank">
                                    <b>+255 688 364 134</b> (click here)</a></span></li>
                        <li><i class="bi bi-envelope"></i><span>info@geote.org</span></li>
                        <li><i class="bi bi-telephone"></i> <span>+255 762 780 170</span></li>
                    </ul>

                </div>

                <div class="col-lg-8">
                    <img src="{{ asset('storage/' . $publication->image) ?? asset('assets/img/contours.jpg') }}"
                        alt="" class="img-fluid services-img">
                    <h3>{{ $publication->title }}</h3>
                    <p>{!! nl2br(e($publication->overview)) !!}</p>

                    <a class="btn btn-outline-primary" href="{{ $publication->publication_link }}" target="_blank"><i class="fas fa-download me-2"></i>Download & Read</a>


                </div>

            </div>

        </div>
    </section><!-- End Service Details Section -->






</x-layout>
