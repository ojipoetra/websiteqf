
document.addEventListener('DOMContentLoaded', function () {

    const inputFile = document.getElementById('pas_foto');

    if (!inputFile) return;

    inputFile.addEventListener('change', function () {

        const file = this.files[0];

        const preview = document.getElementById('preview-pas-foto');
        const namaFile = document.getElementById('nama-pas-foto');
        const ukuranFile = document.getElementById('ukuran-pas-foto');

        if (file) {

            // Menampilkan nama file
            namaFile.textContent = file.name;

            // Menghitung ukuran file
            const ukuranKB = file.size / 1024;

            let ukuran;

            if (ukuranKB >= 1024) {
                ukuran = (ukuranKB / 1024).toFixed(2) + ' MB';
            } else {
                ukuran = ukuranKB.toFixed(0) + ' KB';
            }

            ukuranFile.textContent = ukuran;

            // Menampilkan informasi file
            preview.classList.remove('hidden');

        } else {

            preview.classList.add('hidden');

        }

    });

});
