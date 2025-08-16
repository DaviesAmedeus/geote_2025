<x-layout>
    <!-- Landing section -->
    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page
            style="background-image: url('{{ asset('assets/img/landingpages_pics/geosparklanding.png') }}');"
            :geospark="request()->is('/geospark')">
            <h2> <strong>GEO<span class="text-warning">_</span>SPARK</strong></h2>
            <ol class="text-centr">
                <li><a href="{{ route('geosparks.index') }}">Geosparks</a></li>
                <li>Geospark Event Post In Detail</li>
            </ol>
        </x-landing-pages.landing-page>
    </x-slot:landing_section>



    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details px-4">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="services-list">
                        <a href="{{ $geospark->event_images }}" target="_blank"
                            class="active btn btn-outline-success text-light"><span class="pe-2"><i
                                    class="bi bi-image"></i></span>Event Images (Click here!) </a>

                    </div>

                    <h3><span style="font-size:2rem;">✋</span>Hold On! Support GeoSpark</h3>
                    <p>Before you dive into the details, take a moment to support <strong>GeoSpark!</strong>
                        Your encouragement — whether through sharing, mentoring, sponsoring, or simply showing up —
                        empowers students to master geospatial skills that make real-world impact..</p>
                    <p class="text-muted"> <b>For more information on how to support reach us via:</b> </p>
                    <ul>
                        <li><i class="bi bi-whatsapp"></i> <span><a href="⛔https://wa.me/255688364134" target="_blank">
                                    <b>+255 688 364 134</b> (click here)</a></span></li>
                        <li><i class="bi bi-envelope"></i><span>info@geote.org</span></li>
                        <li><i class="bi bi-telephone"></i> <span>+255 762 780 170</span></li>
                    </ul>

                </div>

                <div class="col-lg-8">
                    <img src="{{ asset('storage/' . $geospark->image) ?? asset('assets/img/contours.jpg') }}"
                        alt="" class="img-fluid services-img">
                    <h3>{{ $geospark->title }}</h3>
                    <p>{!! nl2br(e($geospark->description)) !!}</p>


                </div>

            </div>

        </div>
    </section><!-- End Service Details Section -->






</x-layout>
