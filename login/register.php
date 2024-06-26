<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Event Jungle</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
</head>
<body>
    <div class="container">
        <aside class="welcome-section">
            <h1>Welcome Aboard!</h1>
            <p>Join us today and experience the best events around the world.</p>
            <p>Already have an account? <a href="login.php" class="sign-in-button">Sign In</a></p>

        </aside>
        <section class="register-section">
            <form action="register_action.php" method="POST" class="register-form">
                <h2>SIGN UP</h2>
                <input type="text" placeholder="Full Name" required>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <button type="submit" name="submit" class="register-button">Register</button>
                <p class="social-media">Or, sign up using social media</p>
                <div class="social-icons">
                    
                <a href="#"><i class="lab la-twitter"></i></a>
                <a href="#"><i class="lab la-facebook"></i></a>
                <a href="#"><i class="lab la-linkedin"></i></a>
                </div>
            </form>
        </section>
    </div>
</body>
</html>