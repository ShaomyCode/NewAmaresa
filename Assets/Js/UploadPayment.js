// IMAGE
document.getElementById('file-upload-payment').addEventListener('change', function() {
    var fileInput = document.getElementById('file-upload-payment');
    var label = document.querySelector('#show-text-payment');
    if (fileInput.files.length > 0) {
        label.textContent = fileInput.files[0].name;
    } else {
            label.textContent = 'Img here';
    }
});  