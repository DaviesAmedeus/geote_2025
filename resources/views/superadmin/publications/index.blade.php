<x-panel.dash>



  <x-slot name="breadcrumb">
        <x-panel.breadcrumb pageTitle='All Publications' icon='far fa-list-alt'>
            <x-panel.item-creator btnTitle="Create" :button=false href="/super-admin/publications/create" />
        </x-panel.breadcrumb>
    </x-slot>






    <div class="row">

        <x-panel.table-wrap>
            <thead>
                <tr>
                    <th scope="col"></th>

                    <th scope="col">Title</th>
                    {{-- <th scope="col">Creator</th> --}}
                    <th scope="col">Created_at</th>
                    {{-- <th scope="col">Status</th> --}}
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>

                @forelse ($publications as $publication)
                    <a href="/">
                        <tr>
                            <td>
                                <img src="{{ asset('storage/' . $publication->image) ?? asset('assets/img/contours.jpg') }}"
                                    alt="Icon" width="50" height="50" class="me-2 img-thumbnail">
                            </td>
                            <th scope="row"> @truncate($publication->title, 70) </th>
                            {{-- <td>{{ $publication->user->name }}</td> --}}
                            <td>{{ $publication->created_at ? $publication->created_at->format('F jS, Y') : '--' }}</td>
                            {{-- <td>
                                @if ($publication->status === 'completed')
                                    <span
                                        class="badge rounded badge-success px-3 py-1">{{ $publication->status }}</span>
                                @elseif ($publication->status === 'ongoing')
                                    <span
                                        class="badge rounded badge-warning  px-3 py-1">{{ $publication->status }}</span>
                                @elseif ($publication->status === 'pending')
                                    <span
                                        class="badge rounded badge-secondary px-3 py-1">{{ $publication->status }}</span>
                                @endif
                            </td> --}}
                            <td class="">
                                <div class="d-flex pb-3">
                                    <button class="btn mr-3 btn-primary view-publication"
                                        data-publication-id="{{ $publication->id }}" data-bs-toggle="modal"
                                        data-bs-target="#publicationModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <a href="/super-admin/publications/{{ $publication->id }}/edit"
                                        class="btn btn-secondary mr-3"><i class="fas fa-pen"></i></a>
                                    <form action="/super-admin/publications/{{ $publication->id }}"
                                        method="post">
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
                            <td class="text-center py-3" colspan="100%"> <strong>--- No publication posts! ---</strong>
                            </td>
                        </tr>

                    </a>
                @endforelse






            </tbody>
        </x-panel.table-wrap>



        <div class="col">
            {{ $publications->links() }}
        </div>


    </div>






    <!-- Edit Profile Modal -->
    <div class="modal fade" id="publicationModal" tabindex="-1" role="dialog" aria-labelledby="publicationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body px-5">
                    <div id="publication-details">
                        {{-- publication content will display here --}}

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
                const modal = new bootstrap.Modal(document.getElementById('publicationModal'));
                const publicationDetails = document.getElementById('publication-details');

                document.querySelectorAll('.view-publication').forEach(button => {
                    button.addEventListener('click', function() {
                        const publicationId = this.getAttribute('data-publication-id');





                        fetch(`/super-admin/publications/${publicationId}`)
                            .then(response => {
                                if (!response.ok) throw new Error(
                                    `HTTP error! status: ${response.status}`);
                                return response.json();
                            })
                            .then(data => {




                                let authorsHtml = '';
                                try {
                                    const authors = typeof data.authors === 'string' ?
                                        JSON.parse(data.authors) :
                                        (data.authors || []);

                                    if (authors.length > 0) {
                                        authorsHtml = `

                             <div class="row">
                        <div class="col ">
                            <h5 class="h5"><strong>Authors</strong></h5>
                            <ul >
                                ${authors.map(author => `<li class="mb-2"> ${author}</li>  `).join('')}
                            </ul>
                        </div>
                    </div>


                            `;
                                    }
                                } catch (e) {
                                    console.error('Error parsing authors:', e);
                                    authorsHtml = `
                            <div class="alert alert-warning mt-3">
                                Could not load authors data
                            </div>
                        `;
                                }


                                publicationDetails.innerHTML = `
                <div class="text-center my-5">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            `;


                                publicationDetails.innerHTML = `

<div class="container my-4">
    <div class="row g-4">
        <!-- Left: Image -->
        <div class="col-md-4">
            ${data.image ? `
                <img id="coverPreview" src="${data.image}"
                     class="img-fluid border rounded shadow-sm"
                     style="width: 100%; height: 100%; object-fit: cover;">
            ` : ''}
        </div>

        <!-- Right: Details -->
        <div class="col-md-8">
            <!-- Title -->
            <h2 class="fw-bold h2 mb-3"><strong>${data.title}</strong> </h2>

            <!-- Overview -->
            <p class=" mb-4">${data.overview.replace(/\n/g, '<br>')}</p>

            <!-- Authors -->
            <div class="mb-4">
                ${authorsHtml}
            </div>

            <!-- Publication link -->
          <a href="${data.publication_link}" download class="btn btn-sm btn-outline-primary">
                <i class="fas fa-download"></i> Read & Download
            </a>


        </div>
    </div>
</div>




                    `;
                                modal.show();
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                publicationDetails.innerHTML = `
                        <div class="alert alert-danger">
                            Error loading publication: ${error.message}
                        </div>
                    `;
                                modal.show();
                            });
                    });
                });

                document.getElementById('publicationModal').addEventListener('hidden.bs.modal', function() {
                    publicationDetails.innerHTML = '';
                });
            });
        </script>
    @endpush




</x-panel.dash>



