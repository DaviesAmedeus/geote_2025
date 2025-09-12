@props(['action'])

<script>
document.addEventListener('DOMContentLoaded', function() {
    var deleteModal = document.getElementById('deleteModal');

    deleteModal.addEventListener('show.bs.modal', function(event) {
        // The button that triggered the modal
        var button = event.relatedTarget;
        var deleteId = button.getAttribute('data-delete-id');

        // Form we’re updating
        var form = document.getElementById('forceDelete');

        // Pass PHP variable safely to JS
        var baseUrl = @json($action); // e.g. "super-admin/events/categories/"

        // Build the action dynamically
        form.setAttribute('action', baseUrl + deleteId + '/destroy');
    });
});
</script>
