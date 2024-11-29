$(document).ready(function() {
    $('#registrationForm').on('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Serialize form data
        var formData = $(this).serialize();

        // Send data to submit.php
        $.ajax({
            type: 'POST',
            url: 'submit.php',
            data: formData,
            success: function(response) {
                $('#result').html(response); // Display response
                $('#registrationForm')[0].reset(); // Reset form
            },
            error: function() {
                $('#result').html('<p>An error occurred. Please try again.</p>');
            }
        });
    });
});