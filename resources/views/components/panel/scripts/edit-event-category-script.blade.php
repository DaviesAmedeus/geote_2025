<script>
document.addEventListener('DOMContentLoaded', function() {

    // Handle Edit Buttons
    document.querySelectorAll('.editModalBtn').forEach(button => {
        button.addEventListener('click', function () {
            // Grab data from button
            let id = this.getAttribute('data-id');
            let name = this.getAttribute('data-name');
            let description = this.getAttribute('data-description');

            // Set form action to update route
            let form = document.getElementById('categoryForm');
            form.setAttribute('action', `/super-admin/events/categories/${id}/update`);

            // Set _method to PUT
            document.getElementById('formMethod').value = 'PATCH';

            // Fill inputs
            document.getElementById('categoryName').value = name;
            document.getElementById('categoryDescription').value = description;

            // Change button text to Update
            let submitButton = document.getElementById('submitButton');
            submitButton.innerHTML = `<i class="fas fa-save"></i> Update Category`;
        });
    });

    // Handle Add Button (reset form)
    document.querySelector('[data-bs-target="#itemCreatorModal"]').addEventListener('click', function () {
        // Reset form to create mode
        let form = document.getElementById('categoryForm');
        form.setAttribute('action', `{{ route('superadmin.events.categories.store') }}`);
        document.getElementById('formMethod').value = 'POST';
        document.getElementById('categoryName').value = '';
        document.getElementById('categoryDescription').value = '';
        document.getElementById('submitButton').innerHTML = `<i class="fas fa-plus"></i> Add Category`;
    });

});
</script>
