<x-panel.dash>




    <x-slot name="breadcrumb">
        <x-panel.breadcrumb pageTitle='Project posts' icon='far fa-list-alt'>
            <x-panel.item-creator btnTitle="Create" :button=false href="{{ route('superadmin.projects.create') }}" />
        </x-panel.breadcrumb>
    </x-slot>







    <div class="row">

        <x-panel.table-wrap>
            <thead>
                <tr>
                    <th scope="col"></th>

                    <th scope="col">Title</th>
                    <th scope="col">Creator</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>

                @forelse ($projects as $project)
                    <a href="/">
                        <tr>
                            <td>
                                <img src="{{ asset('storage/' . $project->image) ?? asset('assets/img/contours.jpg') }}"
                                    alt="Icon" width="50" height="50" class="me-2 img-thumbnail">
                            </td>
                            <th scope="row"> @truncate($project->title, 20) </th>
                            <td>{{ $project->user?->name }}</td>
                            <td>{{ $project->created_at ? $project->created_at->format('F jS, Y') : '--' }}</td>
                            <td>
                                @if ($project->status === 'completed')
                                    <span class="badge rounded badge-success px-3 py-1">{{ $project->status }}</span>
                                @elseif ($project->status === 'ongoing')
                                    <span class="badge rounded badge-warning  px-3 py-1">{{ $project->status }}</span>
                                @elseif ($project->status === 'pending')
                                    <span class="badge rounded badge-secondary px-3 py-1">{{ $project->status }}</span>
                                @endif
                            </td>
                            <td class="">
                                <div class="d-flex pb-3">
                                    <button class="btn mr-3 btn-primary view-project"
                                        data-project-id="{{ $project->id }}" data-bs-toggle="modal"
                                        data-bs-target="#projectModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <a href="/super-admin/projects/{{ $project->id }}/edit"
                                        class="btn btn-secondary mr-3"><i class="fas fa-pen"></i></a>
                                    <form action="/super-admin/projects/{{ $project->id }}/trash" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                    </a>
                @empty
                    <a href="/">
                        <tr>
                            <td class="text-center py-3" colspan="100%"> <strong>--- No Project posts! ---</strong>
                            </td>
                        </tr>

                    </a>

                @endforelse






            </tbody>
        </x-panel.table-wrap>



        <div class="col">
            {{ $projects->links() }}
        </div>


    </div>






    <!-- Edit Profile Modal -->
    <div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="projectModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body px-5">
                    <div id="project-details">
                        {{-- Project content will display here --}}

                        {{-- When Loading..... --}}
                        <div class="text-center my-5">
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>



                    </div>
                </div>



            </div>
        </div>
    </div>



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


    {{-- Ajax script --}}
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const modal = new bootstrap.Modal(document.getElementById('projectModal'));
                const projectDetails = document.getElementById('project-details');

                document.querySelectorAll('.view-project').forEach(button => {
                    button.addEventListener('click', function() {
                        const projectId = this.getAttribute('data-project-id');





                        fetch(`/super-admin/projects/${projectId}/show`)
                            .then(response => {
                                if (!response.ok) throw new Error(
                                    `HTTP error! status: ${response.status}`);
                                return response.json();
                            })
                            .then(data => {




                                let achievementsHtml = '';
                                try {
                                    const achievements = typeof data.achievements === 'string' ?
                                        JSON.parse(data.achievements) :
                                        (data.achievements || []);

                                    if (achievements.length > 0) {
                                        achievementsHtml = `

                             <div class="row">
                        <div class="col ">
                            <h4><strong>Project achievements</strong>:</h4>
                            <ul class="list-unstyled">
                                            ${achievements.map(achievement => `
                                                                                                                <li class="mb-2">
                                                                                                                    <i class="fas fa-check-circle text-success me-2"></i>
                                                                                                                    ${achievement}
                                                                                                                </li>
                                                                                                            `).join('')}
                                        </ul>
                        </div>
                    </div>


                            `;
                                    }
                                } catch (e) {
                                    console.error('Error parsing achievements:', e);
                                    achievementsHtml = `
                            <div class="alert alert-warning mt-3">
                                Could not load achievements data
                            </div>
                        `;
                                }


                                projectDetails.innerHTML = `
                <div class="text-center my-5">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            `;


                                projectDetails.innerHTML = `

 <div class="row">
                        <div class="col align-self-center py-3">
                            <h3 class="text-center"><strong>${data.title}</strong></h3>
                            <p class="text-center lead"><span class="text-muted">(${data.subtitle})</span></p>
                                        <!-- Other links to projects -->

                                <div class="bg-light p-3 rounded mb-3">

                                    <div class="row">
                                        <div class="col-md-6">
                                           <i class="fas fa-calendar-alt text-primary me-2"></i>


                                                  <span><strong>Start & End date:</strong> </span>  ${data.start_date} - ${data.end_date}
                                            </div>

                                                <div class="col-md-6">
                                                <i class="fas fa-dot-circle text-info me-2"></i>

                                                <span><strong>Status</strong> </span>  ${data.status}
                                                </div>

                                        </div>

                                    </div>
                                </p>
                        </div>
                    </div>


                      <div class="row">
                        <div class="for-group col-md-12">
                            ${data.image ? `<img id="coverPreview" src="${data.image}" class="img-fluid border mb-2"
                                                                                                style="width: 100%; height: 500px; object-fit: fill; border-radius: 8px;">` : ''}

                        </div>
                    </div>

                     <div class="row pt-3">
    <div class="col">
        <p class="lead">${data.description.replace(/\n/g, '<br>')}</p>
    </div>
</div>

                    ${achievementsHtml}

                    <p>
                        <!-- Other links to projects -->
                                <div class="bg-light p-3 rounded mb-3">
                                    <h6 class="fw-bold mb-2 text-success">Project Archive:</h6>

                                       <ul class="list-unstyled small mb-0">

                                            <li class="mb-1">
                                                <i class="fas fa-file-pdf text-danger me-2"></i>
                                                <a href="${data.pdf_link} "" target="_blank"
                                                    class="link">Project published report</a>

                                            </li>

                                            <li class="mb-1">
                                                <i class="fas fa-images text-primary me-2"></i>
                                                <a href="${data.other_imgs} " target="_blank"
                                                    class="link">Project Images</a>

                                            </li>

                                    </ul>


                                </div>
                                </p>

                      <div class="row pt-5">
                        <div class="col">
                            <p class=""><span class="text-muted"><strong>created_at: </strong>${data.created_at}
                                    <strong>updated_at: </strong>${data.updated_at} <strong>By: </strong>${data.created_by}</span></p>
                        </div>

                    </div>



                    `;
                                modal.show();
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                projectDetails.innerHTML = `
                        <div class="alert alert-danger">
                            Error loading project: ${error.message}
                        </div>
                    `;
                                modal.show();
                            });
                    });
                });

                document.getElementById('projectModal').addEventListener('hidden.bs.modal', function() {
                    projectDetails.innerHTML = '';
                });
            });
        </script>
    @endpush




</x-panel.dash>
