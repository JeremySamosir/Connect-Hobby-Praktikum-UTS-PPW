<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <header>
        <h1>Profil Saya</h1>
        <nav>
            <ul>
                <li><a class="nav-link" href="{{ url('profile') }}">Profile</a></li>
                <li><a class="nav-link" href="{{ url('beranda') }}">Beranda</a></li>
            </ul>
        </nav>
    </header>

    <main class="flex-container">
        <!-- Bagian profil -->
        <section id="profileSection">
            <h2>Profil Pengguna</h2>
            <p>Nama: John Doe</p>
            <p>Email: johndoe@example.com</p>
            <p>Deskripsi: Seorang penggemar teknologi yang senang berbagi pengalaman melalui blog.</p>
        </section>

        <!-- Bagian postingan -->
        <section id="profilePostFeed">
            <h2>Postingan Saya</h2>
            <!-- Postingan dari profil akan muncul di sini -->
        </section>
    </main>

    <script src="jss/profile.js"></script>
</body>
</html>
