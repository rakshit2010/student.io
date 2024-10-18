// JavaScript to handle the form submission and display the thank you message
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission behavior

    // Display the thank you message
    document.getElementById('thankYouMessage').style.display = 'block';

    // Optionally, reset the form after submission
    document.getElementById('contactForm').reset();
});
