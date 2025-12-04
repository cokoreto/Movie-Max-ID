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
    const photoInput = document.getElementById('photoInput');
    const profilePhotoPreview = document.getElementById('profilePhotoPreview');

    if (photoInput && profilePhotoPreview) {
        photoInput.addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    profilePhotoPreview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    }
});
