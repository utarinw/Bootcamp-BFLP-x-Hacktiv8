function fetchUserData(username) {
    const apiUrl = `https://api.github.com/users/${username}`;

    // Mengembalikan Promise
    return new Promise((resolve, reject) => {
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
                // Memanggil resolve dengan data yang diambil dari API
                resolve(data);
            })
            .catch(error => {
                // Memanggil reject dengan error jika terjadi kesalahan
                reject(error);
            });
    });
}

// Contoh penggunaan fungsi fetchUserData dengan Promise
const username = 'octocat';

fetchUserData(username)
    .then(userData => {
        console.log(`User data for ${username}:`, userData);
    })
    .catch(error => {
        console.error(`Error fetching user data: ${error.message}`);
    });
