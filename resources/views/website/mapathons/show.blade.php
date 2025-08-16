<x-layout>

    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page
            style="background-image: url('{{ asset('assets/img/landingpages_pics/slide_pics/slide5.jpg') }}');">
            Mapathons New
        </x-landing-pages.landing-page>
    </x-slot:landing_section>


  <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="services-list">
              <a href="#" class="active">Remodeling</a>
              <a href="#">Construction</a>
              <a href="#">Product Management</a>
              <a href="#">Repairs</a>
              <a href="#">Design</a>
            </div>

            <h4>Enim qui eos rerum in delectus</h4>
            <p>Nam voluptatem quasi numquam quas fugiat ex temporibus quo est. Quia aut quam quod facere ut non occaecati ut aut. Nesciunt mollitia illum tempore corrupti sed eum reiciendis. Maxime modi rerum.</p>
          </div>

          <div class="col-lg-8">
            <img src="{{ asset('storage/' . $mapathon->image) ?? asset('assets/img/contours.jpg') }}" alt="" class="img-fluid services-img">
            <h3>{{ $mapathon->title }}</h3>
            <p>{!! $mapathon->description !!}</p>


          </div>

        </div>

      </div>
    </section><!-- End Service Details Section -->




</x-layout>
