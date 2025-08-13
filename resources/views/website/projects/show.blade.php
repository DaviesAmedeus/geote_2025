<x-layout>
    <!-- Landing section -->
    <x-slot:landing_section>
        <x-landing-pages.landing-page :home="request()->is('login')"
            style="background-image: url({{ asset('assets/img/landingpages_pics/engagementpage.jpg') }});">
            Our Projects
            <ol class="text-centr">
                <li><a href="/projects">Projects</a></li>
                <li>Project Details</li>
            </ol>
        </x-landing-pages.landing-page>
    </x-slot:landing_section>

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-5">

                <div class="col-lg-8">

                    <article class="blog-details">

                        <div class="post-img">
                            <img src="{{ asset('storage/' . $project->image) ?? asset('assets/img/contours.jpg') }}"
                                alt="" class="img-fluid" style="">
                        </div>

                        <div class="pb-3">
                            <h2 class="title text-center">{{ $project->title }}</h2>
                            <p class=" text-center text-muted pt-2 px-3">({{ $project->subtitle }})</p>
                        </div>


                        <div class="content">
                            <p>
                                {!! nl2br(e($project->description)) !!}
                            </p>



                            <p>
                                <!-- Key Achievements -->
                            <div class="bg-light p-3 rounded mb-3">
                                <h6 class="fw-bold mb-2 text-success">This Projects Achievements:</h6>
                                <ul class="list-unstyled small mb-0">
                                    @php
                                        // Check if achievements exists and is not empty
                                        $achievements = isset($project->achievements) ? $project->achievements : [];

                                        // If it's a JSON string, decode it; otherwise, use as-is
                                        if (is_string($achievements)) {
                                            $achievements = json_decode($achievements, true) ?? [];
                                        }
                                    @endphp
                                    @foreach ($achievements as $achievement)
                                        <li class="mb-1">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            {{ $achievement }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            </p>



                            @if (isset($project->pdf_link) || isset($project->other_imgs))
                                <p>
                                    <!-- Other links to projects -->
                                <div class="bg-light p-3 rounded mb-3">
                                    <h6 class="fw-bold mb-2 text-success">Project Archive:</h6>

                                    <ul class="list-unstyled small mb-0">

                                        @if (!empty($project->pdf_link))
                                            <li class="mb-1">
                                                <i class="fas fa-file-pdf text-danger me-2"></i>
                                                <a href="{{ $project->pdf_link }}" target="_blank"
                                                    class="link">Project published report</a>

                                            </li>
                                        @endif

                                        @if (!empty($project->other_imgs))
                                            <li class="mb-1">
                                                <i class="fas fa-images text-primary me-2"></i>
                                                <a href="{{ $project->other_imgs }}" target="_blank"
                                                    >Project Images</a>

                                            </li>
                                        @endif

                                    </ul>


                                </div>
                                </p>
                            @endif






                        </div><!-- End post content -->

                        <div class="meta-bottom">

                            <ul class="cats">
                                <li>
                                    @if ($project->status === 'completed')
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <span class="text-success"> <strong>Project Completed</strong></span>
                                    @endif

                                    @if ($project->status === 'ongoing')
                                        <i class="fas fa-spinner fa-spin text-warning me-2"></i>
                                        <span class="text-warning"><strong>Project Ongoing</strong></span>
                                    @endif
                                </li>
                            </ul>


                        </div><!-- End meta bottom -->

                    </article><!-- End blog post -->



                </div>

                <div class="col-lg-4">

                    <div class="sidebar">
                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">Recent Projects</h3>

                            <div class="mt-3">
                                @foreach ($otherProjects as $otherProject)
                                    <div class="post-item mt-3">
                                        <img src="{{ asset('storage/' . $otherProject->image) ?? asset('assets/img/contours.jpg') }}"
                                            alt="{{ $otherProject->title }}" >
                                        <div class="align-self-center">
                                            <h4>
                                                <a href="{{ route('projects.show', $otherProject) }}">
                                                    {{ $otherProject->title }}
                                                </a>
                                            </h4>

                                        </div>
                                    </div><!-- End recent post item-->
                                @endforeach
                            </div>
                        </div><!-- End sidebar recent posts-->


                    </div><!-- End Blog Sidebar -->

                </div>
            </div>

        </div>
    </section><!-- End Blog Details Section -->


    @push('styles')
        <style>
            .link {
                color: #52565e;
                transition: color 0.3s ease;
            }

            .link:hover {
                color: #198754;
            }
        </style>
    @endpush

</x-layout>



 <p>

