const profilePostFeed = document.getElementById('profilePostFeed');

// Fungsi untuk menampilkan postingan di profil
function displayPostInProfile(post) {
    const newPostDiv = document.createElement('div');
    newPostDiv.classList.add('post');

    let postHTML = `
        <p>${post.text}</p>
    `;

    if (post.image) {
        postHTML += `<img src="${post.image}" alt="Post Image">`;
    }

    newPostDiv.innerHTML = postHTML;
    profilePostFeed.prepend(newPostDiv);
}

// Fungsi untuk menampilkan semua postingan yang ada di local storage
function displayAllPostsInProfile() {
    let posts = JSON.parse(localStorage.getItem('posts')) || [];
    posts.forEach(post => {
        displayPostInProfile(post);
    });
}

// Ketika halaman profil dimuat, tampilkan semua postingan
window.onload = function() {
    displayAllPostsInProfile();
};
