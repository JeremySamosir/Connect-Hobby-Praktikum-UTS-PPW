const postButton = document.getElementById('postButton');
const postContent = document.getElementById('postContent');
const postImage = document.getElementById('postImage');
const postFeed = document.getElementById('postFeed');

// Ganti username di sini
const username = "Yohana"; 

// Event listener untuk tombol post
postButton.addEventListener('click', function() {
    const content = postContent.value;
    if (content.trim() !== "" || postImage.files.length > 0) {
        const newPost = {
            username: username, // Pastikan username diambil dari variabel yang sudah didefinisikan
            text: content,
            image: null
        };

        // Jika ada gambar, simpan gambarnya
        if (postImage.files.length > 0) {
            const file = postImage.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                newPost.image = e.target.result;
                savePostToLocalStorage(newPost);
                displayPost(newPost);
            };

            reader.readAsDataURL(file);
        } else {
            savePostToLocalStorage(newPost);
            displayPost(newPost);
        }

        // Bersihkan input
        postContent.value = "";
        postImage.value = "";
    } else {
        alert("Silakan tulis sesuatu atau pilih gambar untuk di-post!");
    }
});

// Fungsi untuk menyimpan postingan ke local storage
function savePostToLocalStorage(post) {
    let posts = JSON.parse(localStorage.getItem('posts')) || [];
    posts.push(post);
    localStorage.setItem('posts', JSON.stringify(posts));
}

// Fungsi untuk menampilkan postingan di feed
function displayPost(post) {
    const newPostDiv = document.createElement('div');
    newPostDiv.classList.add('post');

    let postHTML = `
        <p><strong>${post.username}</strong></p> <!-- Menampilkan username -->
        <p>${post.text}</p>
    `;

    if (post.image) {
        postHTML += `<img src="${post.image}" alt="Post Image" style="max-width: 100%; border-radius: 5px;">`;
    }

    // Tambahkan tombol hapus
    postHTML += `<button class="delete-button">Hapus</button>`;
    newPostDiv.innerHTML = postHTML;

    // Tambahkan event listener untuk tombol hapus
    newPostDiv.querySelector('.delete-button').addEventListener('click', function() {
        deletePost(post);
        newPostDiv.remove(); // Hapus postingan dari tampilan
    });

    postFeed.prepend(newPostDiv);
}

// Fungsi untuk menghapus postingan dari local storage
function deletePost(postToDelete) {
    let posts = JSON.parse(localStorage.getItem('posts')) || [];
    posts = posts.filter(post => post.text !== postToDelete.text || post.image !== postToDelete.image);
    localStorage.setItem('posts', JSON.stringify(posts));
}

// Fungsi untuk menampilkan semua postingan yang ada di local storage
function displayAllPosts() {
    let posts = JSON.parse(localStorage.getItem('posts')) || [];
    posts.forEach(post => {
        displayPost(post);
    });
}

// Ketika halaman beranda dimuat, tampilkan semua postingan
window.onload = function() {
    displayAllPosts();
};