<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit;
}

$result = $conn->query("SELECT * FROM movies");
$user_first_letter = strtoupper(substr($_SESSION['username'], 0, 1));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movix - Home</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
        header {
            position: relative;
            z-index: 1000 !important;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
            background: rgba(20, 20, 20, 0.95);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 25px;
            position: relative;
            z-index: 1001 !important;
        }

        .nav-home-btn {
            color: #ffffff !important;
            text-decoration: none !important;
            font-weight: 600;
            font-size: 1.05rem;
            padding: 6px 14px;
            border-radius: 6px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            cursor: pointer !important;
            display: inline-block;
            transition: all 0.2s ease;
            position: relative;
            z-index: 1002 !important;
        }

        .nav-home-btn:hover {
            background: #ffffff !important;
            color: #141414 !important;
        }

        .hero-banner {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>

    <header>
        <div class="header-left">
            <h1 class="logo">MOVIX</h1>
            <a href="home.php" class="nav-home-btn">Home</a>
        </div>
        <div class="nav-links">
            <div class="user-profile">
                <div class="avatar"><?php echo $user_first_letter; ?></div>
                <span class="username"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
            </div>
            <a href="logout.php" class="btn-logout">Logout</a>
        </div>
    </header>

    <div class="cinema-poster-banner">
    <div class="banner-overlay-text">
        <span class="banner-tag">UNLIMITED ENTERTAINMENT</span>
        <p class="banner-subtitle">Stream blockbusters, indie favorites, and exclusive series in 4K UHD.</p>
    </div>
</div>

    <div class="container">
        <h2 class="section-title">Trending Movies</h2>

        <div class="movie-grid">
            <?php while($movie = $result->fetch_assoc()): ?>
                <div class="movie-card">
    <div class="card-image-wrapper">
        <span class="genre-badge"><?php echo htmlspecialchars($movie['genre']); ?></span>
        <img src="<?php echo htmlspecialchars($movie['poster']); ?>" 
             alt="<?php echo htmlspecialchars($movie['title']); ?>" 
             onerror="this.onerror=null; this.src='images/placeholder.jpeg';">
    </div>
    
    <div class="card-details">
        <h3 class="movie-title" title="<?php echo htmlspecialchars($movie['title']); ?>">
    <?php echo htmlspecialchars($movie['title']); ?>
</h3>

        <div class="card-meta">
            <span class="rating">★ <?php echo number_format($movie['rating'], 1); ?></span>
            <span class="price">₱<?php echo number_format($movie['price'], 2); ?></span>
        </div>
    </div>
</div>
            <?php endwhile; ?>
        </div>
    </div>

</body>
</html>