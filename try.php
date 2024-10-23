<form id="myForm" method="POST">
    <input type="text" name="someInput" placeholder="Enter something">
    <button type="submit">Submit</button>
</form>

<script>
    // Add an event listener to the form's submit event
    document.getElementById('myForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from reloading the page

        // Retrieve form data
        const formData = new FormData(this);

        // Send the data using AJAX (fetch API)
        fetch('your_backend_script.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log('Form submitted successfully!', data); // Handle the response
        })
        .catch(error => {
            console.error('Error:', error); // Handle errors
        });
    });
</script>
