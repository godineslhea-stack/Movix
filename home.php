<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIX - The Ultimate Hub for Film Buffs and Critics</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
    font-family: 'Poppins', sans-serif;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    
    background: linear-gradient(
                    to bottom, 
                    rgba(10, 6, 18, 0.35), 
                    rgba(10, 6, 18, 0.55)
                ), 
                url('images/login.jpeg') center/cover no-repeat fixed;
    color: #ffffff;
    overflow: hidden;
}

        .hero-wrapper {
            text-align: center;
            max-width: 850px;
            padding: 20px;
            z-index: 2;
        }

        .brand-title {
            font-size: 4.5rem;
            font-weight: 800;
            letter-spacing: 4px;
            background: linear-gradient(135deg, #ff416c, #ff4b2b, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 30px rgba(255, 75, 43, 0.4);
            margin-bottom: 8px;
            text-transform: uppercase;
        }

        .brand-subtitle {
            font-size: 1.25rem;
            font-weight: 400;
            color: #e2e8f0;
            margin-bottom: 45px;
            letter-spacing: 1px;
            opacity: 0.9;
        }

        .action-cards {
            display: flex;
            gap: 25px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .card {
    background: rgba(15, 9, 26, 0.82); 
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(192, 132, 252, 0.35);
    border-radius: 16px;
    padding: 35px 30px;
    width: 320px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 18px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.7),
                0 0 25px rgba(168, 85, 247, 0.2);
    transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
}

        .card:hover {
            transform: translateY(-6px);
            border-color: rgba(192, 132, 252, 0.6);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6),
                        0 0 30px rgba(168, 85, 247, 0.25);
        }

        .card-text {
            font-size: 1.15rem;
            font-weight: 600;
            color: #ffffff;
        }

        .btn-signup {
            width: 100%;
            padding: 12px 24px;
            font-size: 1rem;
            font-weight: 700;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            background: linear-gradient(135deg, #ff416c, #ff4b2b);
            box-shadow: 0 4px 15px rgba(255, 65, 108, 0.4);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-signup:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 20px rgba(255, 65, 108, 0.6);
        }

        .btn-login {
            width: 100%;
            padding: 12px 24px;
            font-size: 1rem;
            font-weight: 700;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            background: linear-gradient(135deg, #8b5cf6, #6d28d9);
            box-shadow: 0 4px 15px rgba(139, 92, 246, 0.4);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-login:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 20px rgba(139, 92, 246, 0.6);
        }
    </style>
</head>
<body>

    <div class="hero-wrapper">
        <h1 class="brand-title">MOVIX</h1>
        <p class="brand-subtitle">The Ultimate Hub for Film Buffs and Critics</p>

        <div class="action-cards">
            <?php if (isset($_SESSION['user_id'])): ?>
            <div class="card">
                <span class="card-text">Hi, Welcome back <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
                <a href="index.php" class="btn-login">Browse Movies</a>
                <a href="logout.php" class="btn-signup">Log Out</a>
            </div>
            <?php else: ?>
            <div class="card">
                <span class="card-text">New to Movix?</span>
                <a href="register.php" class="btn-signup">Sign Up</a>
            </div>

            <div class="card">
                <span class="card-text">Already have an account?</span>
                <a href="login.php" class="btn-login">Log In</a>
            </div>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>