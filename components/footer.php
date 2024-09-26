<script src="script/main.js?v=<?php echo time() ?>">

    </script>
    </body>

    </html>
<?php
    if(isset($_SESSION['cus-psw-wrong'])){
        echo "<script>openLoginform()</script>";
        unset($_SESSION['cus-psw-wrong']);
    }
    if(isset($_SESSION['cus-sign-wrong'])){
        echo "<script>openLoginform()</script>";
        echo "<script>showSign()</script>";
        unset($_SESSION['cus-sign-wrong']);
    }
    if(isset($_SESSION['open-log'])){
        echo "<script>openLoginform()</script>";
        unset($_SESSION['open-log']);
    }
    if(isset($_SESSION['openfav'])){
        echo '<script>openfav()</script>';
        unset($_SESSION['openfav']);
    }
?>
