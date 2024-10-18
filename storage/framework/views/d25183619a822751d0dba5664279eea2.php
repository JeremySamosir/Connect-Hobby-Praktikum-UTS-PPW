<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="css/beranda.css">
</head>
<body>
    <header>
        <h1>Beranda</h1>
        <nav>
            <ul>
                <li><a class="nav-link" href="<?php echo e(url('profile')); ?>">Profile</a></li>
                <li><a class="nav-link" href="<?php echo e(url('beranda')); ?>">Beranda</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <!-- Sidebar di kiri -->
        <aside class="sidebar">
            <h3>Info Pengguna</h3>
            <p>Nama Pengguna: Yohana</p>
            <p>Email: yohana@example.com</p>
            <p>Jumlah Postingan: 10</p>
        </aside>

        <!-- Konten Utama di kanan -->
        <div class="main-content">
            <div class="new-post">
                <textarea id="postContent" placeholder="Apa yang kamu pikirkan?"></textarea>
                <input type="file" id="postImage" accept="image/*">
                <button id="postButton">Post</button>
            </div>

            <div id="postFeed">
                <!-- Postingan akan muncul di sini -->
                <h2>Feed Utama</h2>
            </div>
        </div>
    </div>

    <script src="js/beranda.js"></script>
</body>
</html><?php /**PATH C:\Users\Indah\Herd\Connect-Hobby-Praktikum-UTS-PPW\resources\views/beranda.blade.php ENDPATH**/ ?>