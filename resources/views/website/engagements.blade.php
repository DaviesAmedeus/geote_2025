<x-layout>

    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page :home="request()->is('login')"
            style="background-image: url({{ asset('assets/img/landingpages_pics/engagementpage.jpg') }});">
            Our Engagements
        </x-landing-pages.landing-page>
    </x-slot:landing_section>

    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="row g-4">
                    <div class="row g-4">
                        <!-- Project 1 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <!-- Project Image with Status Badge -->
                                <div class="position-relative">
                                    <img src="{{ asset('assets/img/contours.jpg') }}" class="card-img-top"
                                        alt="GIS Project" style="height: 400px; object-fit: cover;">
                                    <span class="badge bg-success position-absolute top-0 end-0 m-2">Completed</span>
                                </div>

                                <!-- Card Body -->
                                <div class="card-body pb-2">
                                    <!-- Project Meta -->
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge bg-primary bg-opacity-10 text-primary py-2">
                                            <i class="fas fa-map-marked-alt me-1"></i> Geospatial
                                        </span>
                                        <small class="text-muted">Jun - Dec 2023</small>
                                    </div>

                                    <!-- Project Title -->
                                    <h3 class="h5 mb-3">Community Land Mapping Initiative</h3>

                                    <!-- Key Stats -->
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                        <span class="badge bg-light text-dark border py-2">
                                            <i class="fas fa-users me-1"></i> 15 Members
                                        </span>
                                        <span class="badge bg-light text-dark border py-2">
                                            <i class="fas fa-map-pin me-1"></i> 42 Locations
                                        </span>
                                    </div>

                                    <!-- Project Summary -->
                                    <p class="card-text mb-3">
                                        Developed comprehensive land use maps for 12 rural communities to document
                                        property rights and support...
                                    </p>

                                    <!-- Key Achievements -->
                                    <div class="bg-light p-3 rounded mb-3">
                                        <h6 class="fw-bold mb-2 text-success">Achievements:</h6>
                                        <ul class="list-unstyled small mb-0">
                                            <li class="mb-1"><i class="fas fa-check-circle text-success me-2"></i>200+
                                                families documented</li>
                                            <li class="mb-1"><i class="fas fa-check-circle text-success me-2"></i>5.7K
                                                records collected</li>
                                            <li><i class="fas fa-check-circle text-success me-2"></i>3 community
                                                disputes resolved</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Card Footer -->
                                <div class="card-footer bg-white border-top-0 pt-0 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary px-3">View Project</a>

                                    </div>
                                </div>
                            </div>
                        </div>




    </section>
</x-layout>
