<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <header>
        <img src="img/profile.ing" alt="Profile Picture" class="profile-img" >
        <h1>Hallo! I'm Yohana</h1>
        <nav>
            <ul>
                <li><a class="nav-link" href="{{ url('profile') }}">Profile</a></li>
                <li><a class="nav-link" href="{{ url('beranda') }}">Beranda</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="intro">
            <h2>Welcome to Our Community!</h2>
            <p>We are excited to have you here. This is a place where you can share your passion and connect with others.</p>
        </section>

        <section id="profilePostFeed">
            <h2>Postingan Saya</h2>
            <!-- Postingan dari profil akan muncul di sini -->
        </section>
    </main>

    <script src="js/profile.js"></script>
</body>
</html>
