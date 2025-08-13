<x-panel.dash>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="dash-title">Update Project</h1>
            </div>

            <div class="col-md-6 me-3" style="text-align: end">
                <strong> <a href="/super-admin/projects">projects</a>/edit</strong>
            </div>
        </div>



        <x-panel.alerts />

        <div class="row">
            <form action="/super-admin/projects/{{ $project->id }}/update" method="post" class="col-xl-12" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="card-body bg-light border ">

                    <div class="col-xl-12">
                        <div class="card spur-card">
                            <div class="card-header">
                                <div class="spur-card-icon">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <div class="spur-card-title"> Project Information</div>
                            </div>
                            <div class="card-body ">
                                <div class="for-row">
                                    <div class="form-group">
                                        <label for="name">Project Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="title"
                                            placeholder="Eg: Mapping for Pangolin"
                                            value="{{ old('title', $project->title) }}" name="title">
                                        @error('title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                 <div class="for-row">
                                    <div class="form-group">
                                        <label for="name">Project Subtitle<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="title"
                                            placeholder="Eg: A case study of..." value="{{ old('subtitle', $project->subtitle) }}"
                                            name="subtitle">
                                        @error('subtitle')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Start date <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="start_date" name="start_date"
                                            value="{{ old('start_date', $project->start_date->format('Y-m-d')) }}">
                                        @error('start_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="end_date">End date <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="end_date"
                                            placeholder="Eg: Mapping for Pangolin"
                                            value="{{ old('end_date', $project->end_date->format('Y-m-d')) }}"
                                            name="end_date">
                                        @error('end_date')
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
                                                    src="{{ asset('storage/' . $project->image) ?? asset('imgs/demo/profile.jpg') }}"
                                                    class="img-fluid border mb-2"
                                                    style="width: 100%; height: 400px; object-fit: contain; border-radius: 8px;">

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
                                    <label for="exampleFormControlTextarea1">Project Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="More about the project......."
                                        rows="7" name="description">{{ old('description', $project->description) }}</textarea>
                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">


                                    <div class="mb-3">
                                        <label class="form-label">Achievements</label>
                                        <div id="achievements-container">
                                            @php
                                                // Check if achievements exists and is not empty
                                                $achievements = isset($project->achievements)
                                                    ? $project->achievements
                                                    : [];

                                                // If it's a JSON string, decode it; otherwise, use as-is
                                                if (is_string($achievements)) {
                                                    $achievements = json_decode($achievements, true) ?? [];
                                                }
                                            @endphp

                                            @if (!empty($achievements))
                                                @foreach ($achievements as $achievement)
                                                    <div class="input-group mb-2">
                                                        <input type="text" name="achievements[]" class="form-control"
                                                            value="{{ $achievement }}"
                                                            placeholder="Enter achievement">
                                                        <button type="button"
                                                            class="btn btn-outline-danger remove-achievement">×</button>
                                                    </div>
                                                @endforeach
                                            @else
                                                <!-- Default empty input if no achievements exist -->
                                                <div class="input-group mb-2">
                                                    <input type="text" name="achievements[]" class="form-control"
                                                        placeholder="Enter achievement">
                                                    <button type="button"
                                                        class="btn btn-outline-danger remove-achievement">×</button>
                                                </div>
                                            @endif
                                        </div>
                                        <button type="button" id="add-achievement"
                                            class="btn btn-sm btn-outline-primary">Add Another</button>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Project published Report link</label>
                                         <input type="text" class="form-control" id="title"
                                            placeholder="Eg: https://docs.google.com/...project.pdf" value="{{ old('pdf_link', $project->pdf_link) }}"
                                            name="pdf_link">
                                        @error('pdf_link')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Project image directory</label>
                                         <input type="text" class="form-control" id="other_imgs"
                                            placeholder="Eg: https://drive.google.com/drive/....folder" value="{{ old('other_imgs', $project->other_imgs) }}"
                                            name="other_imgs">
                                        @error('category')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Status</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="status">
                                            <option class="text-muted" disabled
                                                {{ !isset($project->status) ? 'selected' : '' }}>---Select project
                                                state---</option>

                                            <option value="completed"
                                                {{ isset($project->status) && $project->status == 'completed' ? 'selected' : '' }}>
                                                Completed</option>
                                            <option value="pending"
                                                {{ isset($project->status) && $project->status == 'pending' ? 'selected' : '' }}>
                                                Pending</option>
                                            <option value="ongoing"
                                                {{ isset($project->status) && $project->status == 'ongoing' ? 'selected' : '' }}>
                                                Ongoing</option>
                                        </select>
                                        @error('status')
                                            <!-- Fix typo: was 'ststus' -->
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Category</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="category">

                                            <option class="text-muted" disabled
                                                {{ !isset($project->category) ? 'selected' : '' }}>---Select category---</option>
                                            <option value="none"
                                                {{ isset($project->category) && $project->category == 'none' ? 'selected' : '' }}>
                                                None</option>

                                        </select>
                                        @error('category')
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
                            Project</button>
                    </div>
                </div>




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
