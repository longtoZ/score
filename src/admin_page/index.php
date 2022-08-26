<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../img/logo.png">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../expand/css/root.css">
	<link rel='stylesheet' href='../expand/css/uicons-regular-rounded.css'>
	<link rel='stylesheet' href='../expand/css/uicons-brands.css'>
	<title>Admin</title>
</head>

<style>
    body {
        background-size: 300% 300%;
        background-image: linear-gradient(45deg, #ccffee, #c5fbf6, #c3f6fc, #c6f1ff, #ccebff); 
        animation: AnimateBG 20s ease infinite;
    }

    @keyframes AnimateBG { 
        0%{background-position:0% 50%}
        50%{background-position:100% 50%}
        100%{background-position:0% 50%}
    }
</style>

<body>
	<div id="main">

        <header>
            <a href="../home_page/">
                <img src="../img/logo-admin.png" alt="logo" class="brand-logo" width="auto" height="40px">
            </a>
        </header>

        <div class="form-container">
            <div class="intro">
                <h2>Welcome to <br>
                    <b style="font-size: 1.6em; line-height: 1;">Score administrator</b>
                </h2>
                <p>This is for managing purpose only, do not try to destroy the system</p>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="divider">
                    <path fill="#ffffff" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                    </path>
                </svg> -->
            </div>
            <div class="form">
                <div class="form__title">
                    <h1>Score login</h1>
                </div>

                <?php 
                    if (isset($_GET['error'])) {?>
                        <p class="error"><?php echo $_GET['error'];?></p>
                        <?php
                    } 
                ?>

                <div class="form__field">
                    <form action="login.php" method="post">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="Username...">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password...">
                        <input type="submit" name="submit-btn" value="Login">
                    </form>
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </div>
</body>
</html>