<?php
require('database/dbConnect.php');

if (!isset($_GET['id'])) {
    header('location: index.php');
} else {

    require('database/showById.php');

    require('view/header.php');
    ?>

    <title><?php if ($noEntri == true) {
                echo "Untitled";
            } else {
                echo $data['judul'];
            } ?></title>
    </head>

    <body>

        <?php include('view/navbar.php'); ?>

        <?php if ($noEntri == true) { ?>
            <section>
                <div class="jumbotron jumbotron-fluid bg-whitee" style="height: 100%; width: 100%;">
                    <div class="container py-5">
                        <h2>Tidak ada entri</h2>
                    </div>
                </div>
            </section>
        <? }
    if ($noEntri == false) { ?>
            <section>
                <div class="jumbotron jumbotron-fluid bg-whitee" style="height: 100%; width: 100%;">
                    <div class="container py-5">
                        <h2><?php echo $data['judul']; ?></h2>
                        <p style="font-size:18px;font-weight: 300;"><b><?php echo $data['author']; ?></b><br><?php echo ucfirst($data['bahasa']); ?><br>Created at : <?php echo $data['date']; ?></p>
                        <pre class="language-<?php echo $data['bahasa']; ?>"><code class="language-<?php echo $data['bahasa']; ?>"><?php echo $data['konten']; ?></code></pre>
                    </div>
                </div>
            </section>
        <?php } ?>


        <?php
        require('view/footer.php');
        ?>




    <?php } ?>