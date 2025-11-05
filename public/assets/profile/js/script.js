// Preview foto profile sebelum upload
document.addEventListener('DOMContentLoaded', function () {
    const photoInput = document.querySelector('input[type="file"][name="photo"]');
    const imgPreview = document.querySelector('img[alt="Profile"]');

    if (photoInput && imgPreview) {
        photoInput.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (ev) {
                    imgPreview.src = ev.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    }
});


document.addEventListener('DOMContentLoaded', function () {
    var photoInput = document.getElementById('photoInput');
    var profilePhoto = document.getElementById('profilePhotoPreview');
    if (profilePhoto && photoInput) {
        profilePhoto.addEventListener('click', function () {
            photoInput.click();
        });
    }
});
