<x-panel.dash>


        <x-slot name="breadcrumb">
            <x-panel.breadcrumb pageTitle='Trashed Shortcourse Posts' icon='fas fa-trash-alt'>
                 <x-panel.all-items btnTitle="Shortcourses post"  href="{{ route('superadmin.programs.shortcourses') }}" />
            </x-panel.breadcrumb>
        </x-slot>





        <div class="row">

            <x-panel.table-wrap>
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Title</th>
                        <th scope="col">Event type</th>
                        <th scope="col">Creator</th>
                        <th scope="col">Status</th>
                        <th scope="col">Trashed at</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($trashedPrograms as $trash)
                        <a href="/">
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/' . $trash->cover_image) ?? asset('assets/img/contours.jpg') }}"
                                        alt="Icon" width="50" height="50" class="me-2 img-thumbnail">
                                </td>
                                <th scope="row">{{ $trash->title }}</th>
                                <td>{{ $trash->subcategory?->name }}</td>
                                <td>{{ $trash->author?->name }}</td>
                                <td>
                                @if ($trash->status === 'published')
                                    <span class="badge rounded badge-success px-3 py-1">Published</span>
                                @endif
                                @if ($trash->status === 'pending')
                                    <span class="badge rounded badge-secondary  px-3 py-1">Pending</span>
                                @endif

                                @if ($trash->status === 'archived')
                                    <span class="badge rounded badge-warning  px-3 py-1">Archived</span>
                                @endif
                            </td>
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



                                        <form action="{{ route('superadmin.programs.restore', $trash->slug) }}"
                                            method="post">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-secondary mr-3"><i
                                                    class="fas fa-undo"></i></button>
                                        </form>

                                        <button class="btn mr-3 btn-danger view-danger"
                                            data-delete-slug="{{ $trash->slug }}" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        </a>
                    @empty
                        <a href="/">
                            <tr>
                                <td class="text-center py-3" colspan="100%"> <strong>--- No Trashed Shotcourses posts! ---</strong>
                                </td>
                            </tr>

                        </a>
                    @endforelse




                </tbody>
            </x-panel.table-wrap>



            <div class="col">
                {{ $trashedPrograms->links() }}
            </div>


        </div>






    <!-- Confirm Delete Category Modal -->
    <x-panel.modals.confirm-delete-modal warningMsg="Are you sure you want to delete this Program Post?">
        <form id="forceDelete" action="" method="post" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">
                <i class="fas fa-trash mr-1"></i> Yes Delete!
            </button>
        </form>
    </x-panel.modals.confirm-delete-modal>


    {{-- Ajax script --}}
    {{-- @push('scripts')
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
    @endpush --}}

    <!--script related to Confirm Delete Category Modal -->
    @push('scripts')
        <x-panel.scripts.delete-program-post-script action="/super-admin/programs/" />
    @endpush





</x-panel.dash>
