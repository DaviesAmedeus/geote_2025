 <script>
            document.addEventListener('DOMContentLoaded', function() {
                const modal = new bootstrap.Modal(document.getElementById('viewModal'));
                const viewDetails = document.getElementById('view-details');

                document.querySelectorAll('.view-view').forEach(button => {
                    button.addEventListener('click', function() {
                        const viewId = this.getAttribute('data-view-id');




                        fetch(`/super-admin/events/categories/${viewId}/show`)
                            .then(response => {
                                if (!response.ok) throw new Error(
                                    `HTTP error! status: ${response.status}`);
                                return response.json();
                            })
                            .then(data => {



                                viewDetails.innerHTML = `
                <div class="text-center my-5">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            `;


                                viewDetails.innerHTML = `


  <div class="row pt-4 justify-content-center">


                <div class="col-md-8 col-lg-6 text-start">
                    <div class="mb-3">
                         <strong> Event name: </strong>
                       <div class="p-3 border bg-light">${data.name}</div>
                    </div>


                     <div class="mb-3">
                        <strong> Description: </strong>
                       <div class="p-3 border bg-light">${data.description}</div>
                    </div>
                </div>
            </div>


                    `;
                                modal.show();
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                viewDetails.innerHTML = `
                        <div class="alert alert-danger">
                            Error loading view: ${error.message}
                        </div>
                    `;
                                modal.show();
                            });
                    });
                });

                document.getElementById('viewModal').addEventListener('hidden.bs.modal', function() {
                    viewDetails.innerHTML = '';
                });
            });
        </script>
