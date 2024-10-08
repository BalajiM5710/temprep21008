// script.js

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('cgpaForm');
    const responseDiv = document.getElementById('response');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        const formData = new FormData(form);

        // Send AJAX request using fetch API
        fetch('server.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            responseDiv.innerHTML = data;
            form.reset(); // Reset the form after successful submission
        })
        .catch(error => {
            console.error('Error:', error);
            responseDiv.innerHTML = 'An error occurred while submitting the form.';
        });
    });
});
