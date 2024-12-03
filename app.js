$(document).ready(function() {
    $('#registrationForm').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Gather form data
        const fullName = $('#fullName').val();
        const email = $('#email').val();
        const contactNumber = $('#contactNumber').val();
        const eventName = $('#eventName').val();
        const paymentMethod = $('input[name="paymentMethod"]:checked').val();
        const dietaryPreferences = $('#dietaryPreferences').val();
        const comments = $('#comments').val();

        // Display the result
        $('#result').html(`
            <h2>Registration Successful!</h2>
            <p><strong>Name:</strong> ${fullName}</p>
            <p><strong>Email:</strong> ${email}</p>
            <p><strong>Contact Number:</strong> ${contactNumber}</p>
            <p><strong>Event Name:</strong> ${eventName}</p>
            <p><strong>Payment Method:</strong> ${paymentMethod}</p>
            <p><strong>Dietary Preferences:</strong> ${dietaryPreferences || 'None'}</p>
            <p><strong>Comments:</strong> ${comments || 'None'}</p>
        `).show(); // Show the result div
    });
});