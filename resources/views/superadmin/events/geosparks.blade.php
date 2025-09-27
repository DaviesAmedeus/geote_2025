<x-panel.dash>



    <x-slot name="breadcrumb">
        <x-panel.breadcrumb pageTitle='Geosparks Posts'>
            <x-panel.item-creator btnTitle="Create" :button=false href="{{ route('superadmin.events.create') }}" />
        </x-panel.breadcrumb>
    </x-slot>

    <div class="row">

        <x-panel.table-wrap>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Title</th>
                    <th scope="col">Event</th>
                    <th scope="col">Creator</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($events as $event)
                    <a href="/">
                        <tr>
                            <td>
                                <img src="{{ asset('storage/' . $event->cover_image) ?? asset('assets/img/contours.jpg') }}"
                                    alt="Icon" width="50" height="50" class="me-2 img-thumbnail">
                            </td>
                            <th scope="row">{{ $event->title }}</th>
                            <th scope="row">{{ $event->subcategory->name }}</th>
                            <td scope="row">{{ $event->author->name }}</td>
                            <td>
                                @if ($event->status === 'published')
                                    <span class="badge rounded badge-success px-3 py-1">Published</span>
                                @endif
                                @if ($event->status === 'pending')
                                    <span class="badge rounded badge-secondary  px-3 py-1">Pending</span>
                                @endif

                                @if ($event->status === 'archived')
                                    <span class="badge rounded badge-warning  px-3 py-1">Archived</span>
                                @endif
                            </td>

                            <td>{{ $event->created_at ? $event->created_at->format('F jS, Y') : '--' }}</td>

                            <td class="">
                                <div class="d-flex pb-3">
                                    <button class="btn mr-3 btn-primary view-event" data-event-id="{{ $event->id }}"
                                        data-bs-toggle="modal" data-bs-target="#eventModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <a href="{{ route('superadmin.events.edit', $event->id) }}"
                                        class="btn btn-secondary mr-3"><i class="fas fa-pen"></i></a>
                                    <form action="{{ route('superadmin.events.trash', $event->id) }}" method="post">
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
                            <td class="text-center py-3" colspan="100%"> <strong>--- No Event posts ---</strong> </td>
                        </tr>

                    </a>
                @endforelse

            </tbody>
        </x-panel.table-wrap>



        <div class="col">
            {{ $events->links() }}
        </div>


    </div>





    <!-- Edit Profile Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body px-5">
                    <div id="event-details">
                        {{-- event content will display here --}}

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


    {{-- Ajax script --}}
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const modal = new bootstrap.Modal(document.getElementById('eventModal'));
                const eventDetails = document.getElementById('event-details');

                document.querySelectorAll('.view-event').forEach(button => {
                    button.addEventListener('click', function() {
                        const eventId = this.getAttribute('data-event-id');





                        fetch(`/super-admin/events/${eventId}/show`)
                            .then(response => {
                                if (!response.ok) throw new Error(
                                    `HTTP error! status: ${response.status}`);
                                return response.json();
                            })
                            .then(data => {







                                eventDetails.innerHTML = `
                <div class="text-center my-5">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">GeoTE Loading...</span>
                    </div>
                </div>
            `;


                                eventDetails.innerHTML = `

 <div class="row">
                        <div class="col align-self-center py-3">
                            <h3 class="text-center"><strong>${data.title}</strong></h3>

                                        <!-- Other links to events -->

                                <div class="bg-light p-3 rounded mb-3">

                                    <div class="row">
                                        <div class="col-md-6">
                                           <i class="fas fa-calendar-alt text-primary me-2"></i>


                                                  <span><strong>Event</strong> </span>  ${data.event}
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
        <p class="lead">${data.content.replace(/\n/g, '<br>')}</p>
    </div>
</div>



                    <p>
                        <!-- Other links to events -->
                                <div class="bg-light p-3 rounded mb-3">
                                    <h6 class="fw-bold mb-2 text-success">Event Archive:</h6>

                                       <ul class="list-unstyled small mb-0">


                                            <li class="mb-1">
                                                <i class="fas fa-images text-primary me-2"></i>
                                                <a href="${data.images_repository} " target="_blank"
                                                    class="link">event Images</a>

                                            </li>

                                    </ul>


                                </div>
                                </p>

                      <div class="row pt-5">
                        <div class="col">
                            <p class=""><span class="text-muted"><strong>created_at: </strong>${data.created_at}
                                    <strong>updated_at: </strong>${data.updated_at} </p>
                        </div>

                    </div>



                    `;
                                modal.show();
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                eventDetails.innerHTML = `
                        <div class="alert alert-danger">
                            Error loading event: ${error.message}
                        </div>
                    `;
                                modal.show();
                            });
                    });
                });

                document.getElementById('eventModal').addEventListener('hidden.bs.modal', function() {
                    eventDetails.innerHTML = '';
                });
            });
        </script>
    @endpush




</x-panel.dash>
