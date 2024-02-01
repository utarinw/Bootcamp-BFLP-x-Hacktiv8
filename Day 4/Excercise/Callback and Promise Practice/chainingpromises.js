function fetchPosts() {
    return fetch('https://jsonplaceholder.typicode.com/posts')
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to fetch posts');
            }
            return response.json();
        });
}

function fetchComments() {
    return fetch('https://jsonplaceholder.typicode.com/comments')
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to fetch comments');
            }
            return response.json();
        });
}

// Menggunakan chaining promise untuk mengambil data posts dan comments
fetchPosts()
    .then(posts => {
        console.log('Number of posts:', posts.length);
        return fetchComments();
    })
    .then(comments => {
        console.log('Number of comments:', comments.length);
    })
    .catch(error => {
        console.error('Error:', error.message);
    });
