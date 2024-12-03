document.getElementById('file-upload-goverment1').addEventListener('change', function() {
    var fileInput = document.getElementById('file-upload-goverment1');
    var label = document.querySelector('#show-text-goverment1');
    if (fileInput.files.length > 0) {
        label.textContent = fileInput.files[0].name;
    } else {
            label.textContent = 'Img here';
    }
});  

document.getElementById('file-upload-goverment2').addEventListener('change', function() {
    var fileInput = document.getElementById('file-upload-goverment2');
    var label = document.querySelector('#show-text-goverment2');
    if (fileInput.files.length > 0) {
        label.textContent = fileInput.files[0].name;
    } else {
            label.textContent = 'Img here';
    }
});  
document.getElementById('file-upload-billing').addEventListener('change', function() {
    var fileInput = document.getElementById('file-upload-billing');
    var label = document.querySelector('#show-text-billing');
    if (fileInput.files.length > 0) {
        label.textContent = fileInput.files[0].name;
    } else {
            label.textContent = 'Img here';
    }
});  
document.getElementById('file-upload-income').addEventListener('change', function() {
    var fileInput = document.getElementById('file-upload-income');
    var label = document.querySelector('#show-text-income');
    if (fileInput.files.length > 0) {
        label.textContent = fileInput.files[0].name;
    } else {
            label.textContent = 'Img here';
    }
});  

document.getElementById('file-upload-reservation').addEventListener('change', function() {
    var fileInput = document.getElementById('file-upload-reservation');
    var label = document.querySelector('#show-text-reservation');
    if (fileInput.files.length > 0) {
        label.textContent = fileInput.files[0].name;
    } else {
            label.textContent = 'Img here';
    }
});  

