
function loadImage(imageUrl, successCallback, errorCallback) {
    var imgElement = new Image();
    
    // Menetapkan URL gambar
    imgElement.src = imageUrl;

    // Menangani ketika gambar berhasil dimuat
    imgElement.onload = function() {
        successCallback(imgElement);
    };

    // Menangani ketika terjadi kesalahan saat memuat gambar
    imgElement.onerror = function() {
        errorCallback("Error loading image from " + imageUrl);
    };
}

// Contoh penggunaan fungsi loadImage
var imageUrl = "https://www.presidenri.go.id/assets/uploads/2020/02/presidenri.go.id-05022020111245-5e3a40bd7cdcb1.35250820-384x512.jpg";

// Callback untuk menangani kasus gambar berhasil dimuat
function onSuccess(imageElement) {
    console.log("Image loaded successfully!");
    // Lakukan sesuatu dengan elemen gambar jika diperlukan
    document.body.appendChild(imageElement);
}

// Callback untuk menangani kasus gambar gagal dimuat
function onError(errorMessage) {
    console.error(errorMessage);
}

// Memanggil fungsi loadImage dengan URL gambar dan callback
loadImage(imageUrl, onSuccess, onError);