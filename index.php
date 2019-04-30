<?php
require('view/header.php');
require('database/showAll.php');

?>

<title>Online Notepad</title>
</head>

<body>

    <?php include('view/navbar.php'); ?>
    <div class="jumbotron jumbotron-fluid bg-black" style="height: 100vh; width: 100%;" id="home">
        <div class="container py-5">
            <h2 class="text-center mt-5">Online Notepad</h2>
            <p class="text-center" style="font-size:18px;font-weight: 300;">Online notepad adalah layanan penyimpan
                catatan
                gratis yang
                dapat
                digunakan oleh semua orang
                tanpa ada batasan. Tersedia juga style untuk penulisan kode program</p>
            <div class="text-center mt-5 mb-5">
                <a href="new.php" class="btn btn-lg btn-red noRadius">Buat Catatan Baru</a>
            </div>
        </div>
    </div>
    <section id="last">
        <div class="jumbotron jumbotron-fluid bg-whitee" style="margin-top: -2em;">
            <div class="container py-5">
                <h2 class="text-center">Last Notepad</h2>
                <p class="text-center" style="font-size:18px;font-weight: 300;">Semua catatan dapat diakses secara
                    publik
                </p>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Author</th>
                                <th scope="col">Style</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $i = 1;
                            while ($data = mysqli_fetch_assoc($query)) : ?>

                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><a href="see.php?id=<?php echo $data['id']; ?>" class="link-red"><?php echo $data['judul']; ?></a></td>
                                    <td><?php echo $data['author']; ?></td>
                                    <td><?php echo ucfirst($data['bahasa']); ?></td>
                                </tr>

                                <?php $i++;
                            endwhile; ?>
                        </tbody>
                    </table>
                </div>

                <div class="container mt-5" id="inputid">
                    <p class="text-center" style="font-size:18px;font-weight: 300;">Lihat catatan berdasarkan id
                    </p>
                    <form action="see.php" class="" method="GET">
                        <input type="text" class="noRadius text-center form-control form-control-lg" name="id" placeholder="Tempel id catatan"><br>
                        <div class="text-center">
                            <button class="btn btn-lg btn-info noRadius">Lihat Catatan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    require('view/footer.php');
    ?>