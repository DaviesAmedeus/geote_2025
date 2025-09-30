<x-panel.dash>



    <x-slot name="breadcrumb">
        <x-panel.breadcrumb pageTitle='FPT Posts' icon='far fa-list-alt'>
            <x-panel.item-creator btnTitle="Create" :button=false href="{{ route('superadmin.programs.create') }}" />
        </x-panel.breadcrumb>
    </x-slot>

    <div class="row">

        <x-panel.table-wrap>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Title</th>
                    <th scope="col">Program</th>
                    <th scope="col">Creator</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($programs as $program)
                    <a href="/">
                        <tr>
                            <td>
                                <img src="{{ asset('storage/' . $program->cover_image) ?? asset('assets/img/contours.jpg') }}"
                                    alt="Icon" width="50" height="50" class="me-2 img-thumbnail">
                            </td>
                            <th scope="row">@truncate($program->title, 20)</th>
                            <th scope="row">{{ $program->subcategory->name }}</th>
                            <td scope="row">{{ $program->author->name }}</td>
                            <td>
                                @if ($program->status === 'published')
                                    <span class="badge rounded badge-success px-3 py-1">Published</span>
                                @endif
                                @if ($program->status === 'pending')
                                    <span class="badge rounded badge-secondary  px-3 py-1">Pending</span>
                                @endif

                                @if ($program->status === 'archived')
                                    <span class="badge rounded badge-warning  px-3 py-1">Archived</span>
                                @endif
                            </td>

                            <td>{{ $program->created_at ? $program->created_at->format('F jS, Y') : '--' }}</td>

                            <td class="">
                                <div class="d-flex pb-3">
                                    <button class="btn mr-3 btn-outline-primary view-program" data-program-slug="{{ $program->slug }}"
                                        data-bs-toggle="modal" data-bs-target="#programModal">
                                        <i class="fas fa-eye"></i>
                                    </button>



                                    <a href="{{ route('superadmin.programs.edit', $program->slug) }}"
                                        class="btn btn-outline-secondary mr-3"><i class="fas fa-pen"></i></a>
                                    <form action="{{ route('superadmin.programs.trash', $program->slug) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                    </a>
                @empty
                    <a href="/">
                        <tr>
                            <td class="text-center py-3" colspan="100%"> <strong>--- No FPT posts ---</strong> </td>
                        </tr>

                    </a>
                @endforelse

            </tbody>
        </x-panel.table-wrap>



        <div class="col">
            {{ $programs->links() }}
        </div>


    </div>





    <!-- Edit Profile Modal -->
    <div class="modal fade" id="programModal" tabindex="-1" role="dialog" aria-labelledby="programModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body px-5">
                    <div id="program-details">
                        {{-- program content will display here --}}
                        {{-- When Loading..... --}}
                        <div class="text-center my-5">
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">GeoTE Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


      <!-- Edit Profile Modal -->
    <div class="modal fade" id="programEditModal" tabindex="-1" role="dialog" aria-labelledby="programEditModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body px-5">
                    <div id="program-edit-details">
                        {{-- program content will display here --}}

                        {{-- When Loading..... --}}
                        <div class="text-center my-5">
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">GeoTE Loading...</span>
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



      {{-- SCRIPTS --}}


    <!--script to pop up and view the data -->
    @push('scripts')
       <x-panel.scripts.view-program-script />
    @endpush





</x-panel.dash>
