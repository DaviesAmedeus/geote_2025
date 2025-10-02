<x-layout>
    <!-- Landing section -->
    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page
            style="background-image: url('{{ asset('assets/img/landingpages_pics/geosparklanding.png') }}');"
            :geospark="request()->is('/geospark')">
            <h2>Publications</h2>
        </x-landing-pages.landing-page>
    </x-slot:landing_section>




    <section id="constructions" class="constructions pb-4">
        <div class="container" data-aos="fade-up">




            <div class="row gy-4 pb-3">

                @forelse ($publications as $publication)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url({{ asset('storage/' . $publication->image) ?? asset('assets/img/contours.jpg') }});">
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $publication->title }}</h4>
                                        <p> @truncate($publication->content, 100) </p>
                                        <a href="/publications/{{ $publication->slug }}" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    @empty
                    <div>
                        <p class="text-center">(Latest posts from Geosparks will be displayed here!)</p>
                    </div>

                @endforelse


            </div>

                         {{ $publications->links() }}




        </div>
    </section><!-- End Constructions Section -->









</x-layout>
