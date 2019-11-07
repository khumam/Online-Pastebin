<?php
require('view/header.php');
?>

<title>Login</title>
</head>

<body>

    <?php include('view/navbar.php'); ?>

    <section>
        <div class="jumbotron jumbotron-fluid bg-whitee" style="height: 100%; width: 100%;">
            <div class="container py-5">
                <h2 class="text-center mt-5">Login</h2>
                <form action="database/login.php" method="post">
                    <div class="form-group">
                        <label for="judul">Email</label>
                        <input type="email" name="email" class="form-control" id="judul" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="author">Password</label>
                        <input type="password" name="password" class="form-control" id="author" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input name="btn-login" class="form-control form-control-lg btn btn-lg btn-success noRadius" value="Login" type="submit">
                    </div>
                </form>
            </div>
        </div>
    </section>


    <?php
    require('view/footer.php');
    ?>