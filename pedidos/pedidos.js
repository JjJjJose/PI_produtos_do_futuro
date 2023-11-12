const imageUpload = document.getElementById('imageUpload');
const preview = document.getElementById('preview');
preview.style.width = '150px';


imageUpload.addEventListener('change', function () {
    const file = this.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
            preview.style.margin = 'auto';
            preview.style.marginTop = '40px';
        };

        reader.readAsDataURL(file);
    } else {
        preview.style.display = 'none';
    }
});