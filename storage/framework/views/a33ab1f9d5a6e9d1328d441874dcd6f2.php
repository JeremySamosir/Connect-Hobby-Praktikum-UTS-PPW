<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-in">
            <form>
                <?php echo csrf_field(); ?>
                <h1>Sign In</h1>
                <span>use your email and password</span>
                <input type="email" placeholder="Email">
                
                <input type="password" placeholder="Password">
                <button>Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of the site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of the site features</p>
                </div>
            </div>
        </div>
    </div>

    
</body>

</html>
<?php /**PATH C:\Users\Indah\Herd\Connect-Hobby-Praktikum-UTS-PPW\resources\views/login.blade.php ENDPATH**/ ?>