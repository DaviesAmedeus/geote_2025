<script>
            document.addEventListener('DOMContentLoaded', function() {
                const modal = new bootstrap.Modal(document.getElementById('programModal'));
                const programDetails = document.getElementById('program-details');

                document.querySelectorAll('.view-program').forEach(button => {
                    button.addEventListener('click', function() {
                        const programSlug = this.getAttribute('data-program-slug');





                        fetch(`/super-admin/programs/${programSlug}/show`)
                            .then(response => {
                                if (!response.ok) throw new Error(
                                    `HTTP error! status: ${response.status}`);
                                return response.json();
                            })
                            .then(data => {







                                programDetails.innerHTML = `
                <div class="text-center my-5">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">GeoTE Loading...</span>
                    </div>
                </div>
            `;


                                programDetails.innerHTML = `

                    <div class="row">
                        <div class="for-group col-md-12">
                            ${data.image ? `<img id="coverPreview" src="${data.image}" class="img-fluid border mb-2"
                            style="width: 100%; height: 500px; object-fit: fill; border-radius: 8px;">` : ''}
                        </div>
                    </div>


                      <div class="row">
                        <div class="for-group py-3 col-md-12">
                                               <h3 class="text-center">${data.title}</h3>

                                              <h6 id="my-section-1" class="content-anchor text-muted">
                                                Post short description
                                              </h6>
                                               <p>${data.description.replace(/\n/g, '<br>')}</p>
<br>

                                               <h6 id="my-section-1" class="content-anchor text-muted">
                                                Post Content
                                              </h6>
                                               <p>${data.content.replace(/\n/g, '<br>')}</p>

                                               




                        </div>
                    </div>



                    `;
                                modal.show();
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                programDetails.innerHTML = `
                        <div class="alert alert-danger">
                            Error loading program: ${error.message}
                        </div>
                    `;
                                modal.show();
                            });
                    });
                });

                document.getElementById('programModal').addEventListener('hidden.bs.modal', function() {
                    programDetails.innerHTML = '';
                });
            });
        </script>
