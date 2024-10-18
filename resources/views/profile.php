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

    <main>
        <div id="profilePostFeed">
            <!-- Postingan dari profil akan muncul di sini -->
            <h2>Postingan Saya</h2>
        </div>
    </main>

    <script src="jss/profile.js"></script>
</body>
</html>