<?php
session_start();
require 'db.php';
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (!$conn) {
        die("Database connection error: " . mysqli_connect_error());
    }

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    
    if ($stmt === false) {
        $message = "Database SQL Error: " . htmlspecialchars($conn->error);
    } else {
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            $_SESSION['user_id'] = $conn->insert_id;
            $_SESSION['username'] = $username;
            
            header("Location: index.php");
            exit;
        } else {
            $message = "Registration Error: " . htmlspecialchars($stmt->error);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Movix</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #08000c;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            position: relative;
        }

        .bg-video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 1;
            transform: translate(-50%, -50%);
            object-fit: cover;
            filter: brightness(0.25) hue-rotate(45deg) blur(2px);
        }

        .auth-header {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 40px;
            width: 100%;
            box-sizing: border-box;
        }

        .auth-header h1 {
            color: #e50914;
            margin: 0;
            font-size: 2.2rem;
            letter-spacing: 2px;
            font-weight: 900;
        }

        .btn-home {
            color: #ffffff !important;
            text-decoration: none !important;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 6px 14px;
            border-radius: 6px;
            background: rgba(168, 85, 247, 0.2);
            border: 1px solid rgba(168, 85, 247, 0.4);
            transition: all 0.2s ease;
        }

        .btn-home:hover {
            background: #a855f7 !important;
            color: #ffffff !important;
        }

        .auth-container {
            position: relative;
            z-index: 2;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 40px;
        }

        .auth-card {
            background: rgba(15, 5, 25, 0.85);
            padding: 40px;
            border-radius: 12px;
            width: 340px;
            border: 1px solid rgba(168, 85, 247, 0.3);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(10px);
        }

        .auth-card h2 {
            color: #e50914;
            font-size: 2rem;
            margin-top: 0;
            margin-bottom: 25px;
        }

        .auth-card input {
            display: block;
            width: 100%;
            padding: 14px;
            margin-bottom: 15px;
            border: none;
            border-radius: 6px;
            background: #231233;
            color: white;
            box-sizing: border-box;
            font-size: 0.95rem;
            border: 1px solid rgba(168, 85, 247, 0.2);
        }

        .auth-card input:focus {
            outline: 2px solid #a855f7;
        }

        .auth-card button {
            width: 100%;
            padding: 14px;
            background: #e50914;
            border: none;
            color: white;
            font-weight: bold;
            font-size: 1rem;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 10px;
        }

        .auth-card button:hover {
            background: #f40612;
        }

        .auth-card p {
            margin-top: 20px;
            color: #aaa;
            font-size: 0.9rem;
        }

        .auth-card a {
            color: #c084fc;
            text-decoration: none;
            font-weight: bold;
        }

        .error-msg {
            color: #ffffff;
            background: rgba(229, 9, 20, 0.85);
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 0.9rem;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- Background Video Clip -->
    <video class="bg-video" autoplay loop muted playsinline poster="https://images.unsplash.com/photo-1534447677768-be436bb09401?w=1600">
        <source src="https://assets.mixkit.co/videos/preview/mixkit-projector-projecting-a-film-in-a-cinema-41584-large.mp4" type="video/mp4">
    </video>

    <div class="auth-header">
        <h1>MOVIX</h1>
        <a href="home.php" class="btn-home">← Home</a>
    </div>

    <div class="auth-container">
        <div class="auth-card">
            <h2>Sign Up</h2>
            <?php if($message): ?>
                <div class="error-msg"><?php echo $message; ?></div>
            <?php endif; ?>
            <form method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email address" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Register</button>
            </form>
            <p>Already have an account? <a href="login.php">Sign In</a></p>
        </div>
    </div>

</body>
</html>