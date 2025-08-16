<x-layout>

    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page
            style="background-image: url('{{ asset('assets/img/landingpages_pics/slide_pics/slide5.jpg') }}');">
            Mapathon Detail
              <ol class="text-centr">
                <li><a href="{{ route('mapathons.index') }}">Mapathons</a></li>
                <li>Mapathon Event Post In Detail</li>
            </ol>
        </x-landing-pages.landing-page>
    </x-slot:landing_section>


  <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="services-list">
              <a href="{{ $mapathon->event_images }}" target="_blank" class="active btn btn-outline-success text-light"><span class="pe-2"><i class="bi bi-image"></i></span>Event Images (Click here!) </a>

            </div>

            <h3>Before Reading this post, Just Remember!</h3>
            <p>🌍 These Mapathons rely on community spirit! You can support by participating, sharing, or encouraging others to join.</p>
                        <p class="text-muted"> <b>For more information on how to support reach us via:</b> </p>
                         <ul>
              <li><i class="bi bi-whatsapp"></i> <span><a href="https://wa.me/255688364134" target="_blank"> <b>+255 688 364 134</b> (click here)</a></span></li>
              <li><i class="bi bi-envelope"></i><span>info@geote.org</span></li>
              <li><i class="bi bi-telephone"></i> <span>+255 762 780 170</span></li>
            </ul>

          </div>

          <div class="col-lg-8">
            <img src="{{ asset('storage/' . $mapathon->image) ?? asset('assets/img/contours.jpg') }}" alt="" class="img-fluid services-img">
            <h3>{{ $mapathon->title }}</h3>
            <p>{!! nl2br(e($mapathon->description)) !!}</p>


          </div>

        </div>

      </div>
    </section><!-- End Service Details Section -->




</x-layout>
