document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('successModal');
    var okButton = document.getElementById('okButton');
    var spans = document.getElementsByClassName('close');

    // Function to display the success modal
    window.displaySuccessModal = function() {
        if (modal) {
            modal.style.display = 'block';
        }

        // When the user clicks on <span> (x) or OK button, close the modal and redirect
        if (spans.length > 0) {
            spans[0].onclick = function() {
                modal.style.display = 'none';
            };
        }
        
        if (okButton) {
            okButton.onclick = function() {
                window.location.href = 'dashboard.php'; // Replace with your actual dashboard path
            };
        }
    }
});

