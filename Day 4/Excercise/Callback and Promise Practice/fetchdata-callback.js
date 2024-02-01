function fetchUserData(username, callback) {
    const apiUrl = `https://api.github.com/users/${username}`;

    // Melakukan HTTP GET request menggunakan Fetch API
    fetch(apiUrl)
        .then(response => {
            // Memeriksa apakah respons OK (status code 200)
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            // Mengembalikan respons dalam bentuk JSON
            return response.json();
        })
        .then(data => {
            // Memanggil callback dengan data yang diambil dari API
            callback(null, data);
        })
        .catch(error => {
            // Memanggil callback dengan error jika terjadi kesalahan
            callback(error, null);
        });
}

// Contoh penggunaan fungsi fetchUserData
const username = 'octocat';

fetchUserData(username, (error, userData) => {
    if (error) {
        console.error(`Error fetching user data: ${error.message}`);
    } else {
        console.log(`User data for ${username}:`, userData);
    }
});
