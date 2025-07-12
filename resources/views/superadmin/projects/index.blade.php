<x-panel.dash>
    <div class="container-fluid">
        <div class="row align-items-center pr-3">
            <div class="col-md-6">
                <h1 class="dash-title">All Projects</h1>
            </div>

            <div class="col-md-6 me-3" style="text-align: end">
                <strong> projects<a href="/super-admin/projects/create">/create</a></strong>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success text-center mb-4 rounded-0">
                <strong> {{ session('success') }}</strong>
            </div>
        @endif


        <div class="row">

            <x-panel.table-wrap>
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Posted By</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($projects as $project)
                        <a href="/">
                            <tr>
                                <th scope="row">{{ $project->title }}</th>
                                <td>{{ $project->user?->name }}</td>
                                <td>{{ $project->start_date ? $project->start_date->format('F jS, Y') : '--' }}</td>
                                <td>{{ $project->end_date ? $project->end_date->format('F jS, Y') : '--' }}</td>
                                <td class="">
                                    <div class="d-flex pb-3">
                                        {{-- <button class="btn btn-primary mr-3" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter"><i class="fas fa-eye"></i></button> --}}

                                        <button class="btn mr-3 btn-primary view-project"
                                            data-project-id="{{ $project->id }}" data-bs-toggle="modal"
                                            data-bs-target="#projectModal">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <a href="/super-admin/projects/{{ $project->id }}/edit"
                                            class="btn btn-primary mr-3"><i class="fas fa-pen"></i></a>
                                        <form action="/super-admin/projects/{{ $project->id }}/destroy" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>


                                    </div>
                                </td>



                            </tr>
                        </a>
                    @endforeach




                </tbody>
            </x-panel.table-wrap>



            <div class="col">
                {{ $projects->links() }}
            </div>


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
                            <p class="text-center"><span class="text-muted"><strong>Start Date:</strong>${data.start_date}
                                    <strong>End Date:</strong>${data.end_date}</span></p>
                        </div>
                    </div>


                      <div class="row">
                        <div class="for-group col-md-12">
                            ${data.image ? `<img id="coverPreview" src="${data.image}" class="img-fluid border mb-2"
                                                        style="width: 100%; height: 700px; object-fit: fill; border-radius: 8px;">` : ''}

                        </div>
                    </div>

                     <div class="row pt-3">
    <div class="col">
        <p class="lead">${data.description.replace(/\n/g, '<br>')}</p>
    </div>
</div>

                    ${achievementsHtml}

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
