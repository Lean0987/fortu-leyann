<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hello Kitty Shop - Login</title>

    <link rel="stylesheet" href="/style.css">
</head>

<body>

<div class="login-page">

    <div class="login-card">

        <div class="login-logo">
            🐱🎀
        </div>

        <h1>Hello Kitty Shop 🎀</h1>

        <p class="login-subtitle">
            Welcome! Please login to continue 💗
        </p>

        <?php if (!empty($error)): ?>

            <div class="error">
                <?= htmlspecialchars($error); ?>
            </div>

        <?php endif; ?>

        <form method="POST" action="/login">

            <div class="form-group">

                <label>Username</label>

                <input
                    type="text"
                    name="username"
                    placeholder="Enter your username"
                    required
                >

            </div>

            <div class="form-group">

                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                >

            </div>

            <button type="submit">
                🎀 Login 🎀
            </button>

        </form>

        <div class="footer">

            <div class="bows">
                🎀 🎀 🎀
            </div>

            Made with love 💗

        </div>

    </div>

</div>

</body>
</html>