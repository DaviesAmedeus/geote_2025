<x-panel.dash>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="dash-title">Create Event Post</h1>
            </div>

            <div class="col-md-6 me-3" style="text-align: end">
                <strong> <a href="{{ route('superadmin.events.all') }}">projects</a>/create</strong>
            </div>
        </div>

        <x-panel.alerts />


        <div class="row">
            <form action="{{ route('superadmin.events.store') }}" method="post" class="col-xl-12" enctype="multipart/form-data">
                @csrf

                <div class="card-body bg-light border ">

                    <div class="col-xl-12">
                        <div class="card spur-card">
                            <div class="card-header">
                                <div class="spur-card-icon">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <div class="spur-card-title"> Event Post Information</div>
                            </div>
                            <div class="card-body ">

                                <div class="for-row pb-3">
                                    <div class="form-group">
                                        <label for="name">Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="title"
                                            placeholder="Enter title for event post..." value="{{ old('title') }}"
                                            name="title">
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
                                                <img id="coverPreview" src="" class="img-fluid border mb-2"
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
                                    <label for="exampleFormControlTextarea1">Event Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="A Litle about the event......."
                                        rows="7" name="description">{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>



                              <div class="form-row">
                                      <div class="form-group col-md-12">
                                        <label for="exampleFormControlSelect1">Image directory link</label>
                                         <input type="text" class="form-control" id="event_images"
                                            placeholder="Eg: https://drive.google.com/drive/....folder" value="{{ old('event_images') }}"
                                            name="event_images">
                                        @error('category')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                              </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Status</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="status">
                                            <option class="text-muted">--- Enable/Disable --</option>

                                            <option value="1">Enable</option>
                                            <option value="0">Disable</option>
                                        </select>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Category</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="category">
                                            @foreach ($eventCategories as $category )
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach


                                        </select>
                                        @error('category')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>







                            </div>
                        </div>
                    </div>

                    <div class="mt-3 col-6 mx-auto">
                        <button type="submit" class="btn btn-outline-secondary btn-lg btn-block mb-1">Submit
                            Event Post</button>
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


            </form>



        </div>



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
            document.getElementById('add-achievement').addEventListener('click', function() {
                const container = document.getElementById('achievements-container');
                const newInput = document.createElement('div');
                newInput.className = 'input-group mb-2';
                newInput.innerHTML = `
        <input type="text" name="achievements[]" class="form-control" placeholder="Enter achievement">
        <button type="button" class="btn btn-outline-danger remove-achievement">×</button>
    `;
                container.appendChild(newInput);
            });

            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-achievement')) {
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
