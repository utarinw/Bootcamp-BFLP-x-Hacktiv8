function loadImage(imageUrl) {
    return new Promise((resolve, reject) => {
        var imgElement = new Image();

        // Menetapkan URL gambar
        imgElement.src = imageUrl;

        // Menangani ketika gambar berhasil dimuat
        imgElement.onload = function () {
            resolve(imgElement);
        };

        // Menangani ketika terjadi kesalahan saat memuat gambar
        imgElement.onerror = function () {
            reject("Error loading image from " + imageUrl);
        };
    });
}

// Contoh penggunaan fungsi loadImage dengan Promise
var imageUrl = "https://example.com/example.jpg";

// Menggunakan Promise untuk menangani kasus gambar berhasil dimuat
loadImage(imageUrl)
    .then((imageElement) => {
        console.log("Image loaded successfully!");
        // Lakukan sesuatu dengan elemen gambar jika diperlukan
        document.body.appendChild(imageElement);
    })
    .catch((errorMessage) => {
        console.error(errorMessage);
    });