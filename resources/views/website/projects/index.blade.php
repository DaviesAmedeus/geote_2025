<x-layout>

    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page :home="request()->is('login')"
            style="background-image: url({{ asset('assets/img/landingpages_pics/engagementpage.jpg') }});">
            Our Projects
        </x-landing-pages.landing-page>
    </x-slot:landing_section>

    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="row g-4">
                    <div class="row g-4">
                        <!-- Project list -->
                        @forelse ($projects as $project )
<div class="col-lg-4 col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <!-- Project Image with Status Badge -->
                                <div class="position-relative">
                                    <img src="{{ asset('storage/'.$project->image) ??  asset('assets/img/contours.jpg') }}" class="card-img-top"
                                        alt="GIS Project" style="height: 200px; object-fit: cover;">

                                            @if($project->status === 'completed')
                                            <span class="badge bg-success position-absolute top-0 end-0 m-2">Completed</span>
                                            @endif

                                            @if($project->status === 'ongoing')
                                            <span class="badge bg-warning position-absolute top-0 end-0 m-2">Ongoing</span>
                                            @endif
                                </div>

                                <!-- Card Body -->
                                <div class="card-body pb-2">
                                    <!-- Project Meta -->
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge bg-primary bg-opacity-10 text-primary py-2">
                                            <i class="fas fa-map-marked-alt me-1"></i> GeoTE
                                        </span>
                                        <small class="text-muted">{{ $project->created_at->format('M d, Y') }}</small>
                                    </div>

                                    <!-- Project Title -->
                                    <h3 class="h5 mb-3">{{ $project->title }}</h3>


                                    <!-- Project Summary -->
                                    {{-- <p class="card-text mb-3">
    @truncate($project->description)
</p> --}}

                                    <!-- Key Achievements -->
                                    <div class="bg-light p-3 rounded mb-3">
                                        <h6 class="fw-bold mb-2 text-success">Achievements:</h6>
                                        <ul class="list-unstyled small mb-0">
                                             @php
                                                // Check if achievements exists and is not empty
                                                $achievements = isset($project->achievements)
                                                    ? $project->achievements
                                                    : [];

                                                // If it's a JSON string, decode it; otherwise, use as-is
                                                if (is_string($achievements)) {
                                                    $achievements = json_decode($achievements, true) ?? [];
                                                }
                                            @endphp
                                           @foreach ( $achievements as $achievement)
    <li class="mb-1">
        <i class="fas fa-check-circle text-success me-2"></i>
        {{ $achievement }}
    </li>
@endforeach


                                        </ul>
                                    </div>
                                </div>

                                <!-- Card Footer -->
                                <div class="card-footer bg-white border-top-0 pt-0 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary px-3">Project in detail</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        NO PROJECTS YET
                        @endforelse





    </section>
</x-layout>
