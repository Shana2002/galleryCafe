<div class="login-bg"></div>
<div class="login-wrapper">
    <div class="login-container">
        <div class="detail-wrapper">
            <h1>Login</h1>
            <h1><i class="fa-solid fa-utensils fa-lg"></i>&nbsp;&nbsp;Galley Cafe</h1>
            <p>Version 1.1</p>
        </div>
        <div class="login-detals">
            <form action="action/verify-login.php" method="post" class="login-form">
                <?php
                if (isset($_SESSION['error-login'])) {
                ?>
                    <p class="error">user name or password wrong</p>
                <?php
                    unset($_SESSION['error-login']);
                }
                ?>
                <input type="text" name="username" placeholder="Enter User Name" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                <input type="submit" name="submit-login" value="Login">
            </form>
        </div>
    </div>
</div>