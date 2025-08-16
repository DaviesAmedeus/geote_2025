<x-panel.dash>
    <div class="container-fluid">
        <div class="row align-items-center pr-3">
            <div class="col-md-6">
                <h1 class="dash-title">Trashed Event Posts</h1>
            </div>

            <div class="col-md-6 me-3" style="text-align: end">
                <strong> deleted<a href="/super-admin/trashs/create">/create</a></strong>
            </div>
        </div>


        <x-panel.alerts />



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

                    @foreach ($trashedEvents as $trash)
                        <a href="/">
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/' . $trash->image) ?? asset('assets/img/contours.jpg') }}"
                                        alt="Icon" width="50" height="50" class="me-2 img-thumbnail">
                                </td>
                                <th scope="row">{{ $trash->title }}</th>
                                <td>{{ $trash->user?->name }}</td>
                                <td>{{ $trash->deleted_at ? $trash->deleted_at->format('F jS, Y') : '--' }}</td>
                                <td>
                                    @if ($trash->status === 1)
                                        <span class="badge rounded badge-success px-3 py-1">Enabled</span>
                                    @elseif ($trash->status === 0)
                                        <span class="badge rounded badge-secondary  px-3 py-1">Disabled</span>
                                    @endif
                                </td>
                                <td class="">
                                    <div class="d-flex pb-3">



                                        <form action="{{ route('superadmin.events.restore', $trash->id) }}" method="post">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-secondary mr-3"><i
                                                    class="fas fa-undo"></i></button>
                                        </form>



                                         <button class="btn mr-3 btn-danger view-danger"
                                            data-trash-id="{{ $trash->id }}" data-bs-toggle="modal"
                                            data-bs-target="#trashModal">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        </a>
                    @endforeach




                </tbody>
            </x-panel.table-wrap>



            <div class="col">
                {{ $trashedEvents->links() }}
            </div>


        </div>

    </div>




    <!-- Edit Profile Modal -->
    <div class="modal fade" id="trashModal" tabindex="-1" role="dialog" aria-labelledby="trashModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body px-5">
                    <div id="trash-details">
                        {{-- trash content will display here --}}

                        <div class="row">
                            <div class="col-md-12 alert alert-danger text-center py-3">
                                <strong>Are you sure you want to delete this trash?</strong>
                                <div class="mt-2">

                                    <form id="forceDelete" action="" method="post"
                                        class="d-inline">
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
        document.addEventListener('DOMContentLoaded', function(){
            var deleteModal = document.getElementById('trashModal');
            deleteModal.addEventListener('show.bs.modal', function(event){
                //Listens for Bootstrap's show.bs.modal event, which triggers just before the modal appears.

                var button = event.relatedTarget; // gets the button which triggered the modal
                var trashId = button.getAttribute('data-trash-id');

                var form = document.getElementById('forceDelete');
                form.setAttribute('action', '/super-admin/events/'+ trashId +'/destroy');
            });
        } );
       </script>
    @endpush




</x-panel.dash>
