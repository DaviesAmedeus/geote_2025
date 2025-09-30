<x-panel.dash>

    <x-slot name="breadcrumb">
        <x-panel.breadcrumb pageTitle='Trashed Project posts' icon='fas fa-trash-alt'>
            <x-panel.all-items btnTitle="Project Posts" href="{{ route('superadmin.projects.all') }}" />
        </x-panel.breadcrumb>
    </x-slot>




    <div class="row">

        <x-panel.table-wrap>
            <thead>
                <tr>
                    <th scope="col"></th>

                    <th scope="col">Title</th>
                    <th scope="col">Creator</th>
                    <th scope="col">Deleted_at</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                  @forelse ($trashedProjects as $project)
                   <a href="/">
                        <tr>
                            <td>
                                <img src="{{ asset('storage/' . $project->image) ?? asset('assets/img/contours.jpg') }}"
                                    alt="Icon" width="50" height="50" class="me-2 img-thumbnail">
                            </td>
                            <th scope="row">@truncate($project->title, 20)</th>
                            <td>{{ $project->user?->name }}</td>
                            <td>{{ $project->deleted_at ? $project->deleted_at->format('F jS, Y') : '--' }}</td>
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



                                    <form action="/super-admin/projects/{{ $project->id }}/restore" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-secondary mr-3"><i
                                                class="fas fa-undo"></i></button>
                                    </form>

                                    {{-- <form action="/super-admin/projects/{{ $project->id }}/destroy" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fas fa-trash"></i></button>
                                        </form> --}}

                                    <button class="btn mr-3 btn-danger view-danger"
                                        data-project-id="{{ $project->id }}" data-bs-toggle="modal"
                                        data-bs-target="#projectModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                    </a>
                @empty
                  <a href="/">
                            <tr>
                                <td class="text-center py-3" colspan="100%"> <strong>--- No Trashed Project posts! ---</strong>
                                </td>
                            </tr>

                        </a>
                @endforelse





            </tbody>
        </x-panel.table-wrap>



        <div class="col">
            {{ $trashedProjects->links() }}
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

                        <div class="row">
                            <div class="col-md-12 alert alert-danger text-center py-3">
                                <strong>Are you sure you want to delete this project?</strong>
                                <div class="mt-2">

                                    <form id="forceDelete" action="" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">
                                            <i class="fas fa-trash mr-1"></i> Yes Delete!
                                        </button>
                                    </form>
                                </div>
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
                var deleteModal = document.getElementById('projectModal');
                deleteModal.addEventListener('show.bs.modal', function(event) {
                    //Listens for Bootstrap's show.bs.modal event, which triggers just before the modal appears.

                    var button = event.relatedTarget; // gets the button which triggered the modal
                    var projectId = button.getAttribute('data-project-id');

                    var form = document.getElementById('forceDelete');
                    form.setAttribute('action', '/super-admin/projects/' + projectId + '/destroy');
                });
            });
        </script>
    @endpush




</x-panel.dash>
