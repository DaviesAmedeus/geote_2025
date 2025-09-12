@props(['warningMsg'])

 <!-- Confirm Delete Category Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body px-5">
                    <div id="delete-details">
                        {{-- delete content will display here --}}

                        <div class="row">
                            <div class="col-md-12 alert alert-warning text-center py-3">
                                <strong>{{ $warningMsg }}</strong>
                                <div class="mt-2">
                                   {{ $slot }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
