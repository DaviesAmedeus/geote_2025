    <div class="modal fade" id="itemCreatorModal" tabindex="-1" role="dialog" aria-labelledby="itemCreatorModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">

            <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="event-details">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
