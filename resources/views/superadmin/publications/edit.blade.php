<x-panel.dash>


         <x-slot name="breadcrumb">
        <x-panel.breadcrumb pageTitle='Update Publication' icon='far fa-list-alt'>
            <x-panel.all-items btnTitle="All publications"  href="/super-admin/publications" />
        </x-panel.breadcrumb>
    </x-slot>





        <div class="row">
            <form action="/super-admin/publications/{{ $publication->id }}" method="post" class="col-xl-12"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="card-body bg-light border ">

                    <div class="col-xl-12">
                        <div class="card spur-card">
                            <div class="card-header">
                                <div class="spur-card-icon">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <div class="spur-card-title"> publication Information</div>
                            </div>
                            <div class="card-body ">
                                <div class="for-row">
                                    <div class="form-group">
                                        <label for="name">publication Title <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="title"
                                            placeholder="Eg: Mapping for Pangolin"
                                            value="{{ old('title', $publication->title) }}" name="title">
                                        @error('title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-row">
                                    <div class="for-group col-md-12">
                                        <!-- Square Cover Photo Section (Full Width) -->
                                        <div class="mb-4 text-center position-relative">
                                            <!-- Clickable Image Container -->
                                            <label for="cover_photo" class="d-block cover-photo-wrapper"
                                                style="cursor: pointer;">
                                                <!-- Cover Image Preview -->
                                                <img id="coverPreview"
                                                    src="{{ asset('storage/' . $publication->image) ?? asset('imgs/demo/profile.jpg') }}"
                                                    class="img-fluid border mb-2"
                                                    style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">

                                                <!-- Hover Overlay -->
                                                <div class="cover-edit-overlay" style="border-radius: 8px;">
                                                    <i class="bi bi-camera-fill"></i>
                                                    <span>Choose cover photo</span>
                                                </div>
                                            </label>

                                            <!-- Hidden File Input -->
                                            <input type="file" class="d-none" id="cover_photo" name="image"
                                                accept="image/*">

                                            <small class="form-text text-muted d-block">
                                                Recommended size: 1080x500 pixels (Rectangle). Max file size: 2MB.
                                            </small>
                                            @error('image')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">publication Overview</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="More about the publication......."
                                        rows="7" name="overview">{{ old('overview', $publication->overview) }}</textarea>
                                    @error('overview')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-6">


                                        <div class="mb-3">
                                            <label class="form-label">authors</label>
                                            <div id="authors-container">
                                                @php
                                                    // Check if authors exists and is not empty
                                                    $authors = isset($publication->authors)
                                                        ? $publication->authors
                                                        : [];

                                                    // If it's a JSON string, decode it; otherwise, use as-is
                                                    if (is_string($authors)) {
                                                        $authors = json_decode($authors, true) ?? [];
                                                    }
                                                @endphp

                                                @if (!empty($authors))
                                                    @foreach ($authors as $author)
                                                        <div class="input-group mb-2">
                                                            <input type="text" name="authors[]" class="form-control"
                                                                value="{{ $author }}" placeholder="Enter author">
                                                            <button type="button"
                                                                class="btn btn-outline-danger remove-author">×</button>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <!-- Default empty input if no authors exist -->
                                                    <div class="input-group mb-2">
                                                        <input type="text" name="authors[]" class="form-control"
                                                            placeholder="Enter author">
                                                        <button type="button"
                                                            class="btn btn-outline-danger remove-author">×</button>
                                                    </div>
                                                @endif
                                            </div>
                                            <button type="button" id="add-author"
                                                class="btn btn-sm btn-outline-primary">Add Another</button>
                                        </div>



                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">publication published Report link</label>
                                        <input type="text" class="form-control" id="title"
                                            placeholder="Eg: https://docs.google.com/...publication.pdf"
                                            value="{{ old('publication_link', $publication->publication_link) }}"
                                            name="publication_link">
                                        @error('publication_link')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>









                            </div>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <div class="mt-3 col-6 mx-auto">
                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block mb-1">Update
                            publication</button>
                    </div>
                </div>




            </form>



        </div>








    @push('styles')
        <style>
            .cover-photo-wrapper {
                position: relative;
            }

            .cover-edit-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.5);
                color: white;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .cover-edit-overlay i {
                font-size: 2rem;
                margin-bottom: 0.5rem;
            }

            .cover-photo-wrapper:hover .cover-edit-overlay {
                opacity: 1;
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            document.getElementById('add-author').addEventListener('click', function() {
                const container = document.getElementById('authors-container');
                const newInput = document.createElement('div');
                newInput.className = 'input-group mb-2';
                newInput.innerHTML = `
        <input type="text" name="authors[]" class="form-control" placeholder="Enter author">
        <button type="button" class="btn btn-outline-danger remove-author">×</button>
    `;
                container.appendChild(newInput);
            });

            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-author')) {
                    e.target.closest('.input-group').remove();
                }
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const fileInput = document.getElementById('cover_photo');
                const coverPreview = document.getElementById('coverPreview');

                fileInput.addEventListener('change', function(e) {
                    if (this.files && this.files[0]) {
                        const reader = new FileReader();

                        reader.onload = function(event) {
                            coverPreview.src = event.target.result;
                        };

                        reader.onerror = function() {
                            console.error('Error reading file');
                        };

                        reader.readAsDataURL(this.files[0]);
                    }
                });
            });
        </script>
    @endpush
</x-panel.dash>
