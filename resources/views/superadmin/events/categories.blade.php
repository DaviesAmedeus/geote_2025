<x-panel.dash>




    <x-slot name="breadcrumb">
        <x-panel.breadcrumb pageTitle='All Categories'>
            <x-panel.item-creator btnTitle="Add Category" disabled />
        </x-panel.breadcrumb>
    </x-slot>

    <div class="row">

        <x-panel.table-wrap>
            <thead>
                <tr>
                    <th scope="col">Event Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($eventCategories as $eventCategory)
                    <a href="/">
                        <tr>

                            <td scope="row">{{ $eventCategory->name }}</td>
                            <td scope="row">{{ $eventCategory->category->name }}</td>
                            <td>{{ $eventCategory->created_at ? $eventCategory->created_at->format('F jS, Y') : '--' }}</td>

                            <td class="">
                                <div class="d-flex pb-3">
                                    <button class="btn mr-3 btn-primary view-view" disabled
                                        data-view-id="{{ $eventCategory->id }}" data-bs-toggle="modal"
                                        data-bs-target="#viewModal">
                                        <i class="fas fa-eye"></i>
                                    </button>

                                    <button class="btn mr-3 btn-secondary editModalBtn" disabled
                                        data-id="{{ $eventCategory->id }}" data-name="{{ $eventCategory->name }}"
                                        data-description="{{ $eventCategory->description }}" data-bs-toggle="modal"
                                        data-bs-target="#itemCreatorModal">
                                        <i class="fas fa-pen"></i>
                                    </button>

                                    <button class="btn mr-3 btn-danger view-danger" disabled
                                        data-delete-id="{{ $eventCategory->id }}" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal">
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
            {{ $eventCategories->links() }}
        </div>


    </div>



    {{-- MODALS --}}

    <!-- Add Category Modal -->
    <x-panel.modals.item-creator-modal>
        <form id="categoryForm" action="{{ route('superadmin.events.categories.store') }}" method="POST">
            @csrf
            <input type="hidden" name="_method" id="formMethod" value="POST">

            <div class="row pt-4 justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="mb-3">
                        <x-panel.forms.input placeholder='Add category name...' type="text" name="name"
                            id="categoryName" />
                    </div>
                    <div class="mb-3">
                        <x-panel.forms.input :textarea=true placeholder='Describe the event category...'
                            id="categoryDescription" type="text" name="description" />
                    </div>
                    <button type="submit" id="submitButton" class="btn btn-primary px-4">
                        <i class="fas fa-plus"></i> Add Category
                    </button>
                </div>
            </div>
        </form>
    </x-panel.modals.item-creator-modal>

    <!-- View Category details Modal -->
    <x-panel.modals.view-item-modal>
        <div id="view-details">
            {{-- view content will display here --}}

            {{-- When Loading this below will display --}}
            <div class="text-center my-5">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </x-panel.modals.view-item-modal>



    <!-- Confirm Delete Category Modal -->
    <x-panel.modals.confirm-delete-modal
        warningMsg="Deleting this category will also delete the related event posts. Are you sure you want to delete this Category?">
        <form id="forceDelete" action="" method="post" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">
                <i class="fas fa-trash mr-1"></i> Yes Delete!
            </button>
        </form>
    </x-panel.modals.confirm-delete-modal>



    {{-- SCRIPTS --}}


    <!--script related to edit Category Modal -->
    @push('scripts')
        <x-panel.scripts.edit-event-category-script />
    @endpush

    <!-- Script to pop up view data-->
    @push('scripts')
        <x-panel.scripts.view-event-category-script />
    @endpush

    <!--script related to Confirm Delete Category Modal -->
    @push('scripts')
            <x-panel.scripts.delete-event-category-script action="/super-admin/events/categories/"  />
    @endpush


</x-panel.dash>
