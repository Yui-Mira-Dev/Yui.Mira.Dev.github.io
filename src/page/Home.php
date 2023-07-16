<?php
session_start();

if (
    isset($_SESSION['npm']) &&
    isset($_SESSION['namaLengkap']) &&
    isset($_SESSION['tempatLahir']) &&
    isset($_SESSION['tanggalLahir']) &&
    isset($_SESSION['agama']) &&
    isset($_SESSION['angkatan']) &&
    isset($_SESSION['email']) &&
    isset($_SESSION['jurusan']) &&
    isset($_SESSION['jenisKelamin']) &&
    isset($_SESSION['hobby']) &&
    isset($_SESSION['alamat'])
) {
    $npm = $_SESSION['npm'];
    $namaLengkap = $_SESSION['namaLengkap'];
    $tempatLahir = $_SESSION['tempatLahir'];
    $tanggalLahir = $_SESSION['tanggalLahir'];
    $agama = $_SESSION['agama'];
    $angkatan = $_SESSION['angkatan'];
    $email = $_SESSION['email'];
    $jurusan = $_SESSION['jurusan'];
    $jenisKelamin = $_SESSION['jenisKelamin'];
    $hobby = $_SESSION['hobby'];
    $alamat = $_SESSION['alamat'];
} else {
    $npm = $namaLengkap = $tempatLahir = $tanggalLahir = $agama = $angkatan = $email = $jurusan = $jenisKelamin = $hobby = $alamat = '';
}

if (isset($_POST['hapus_data'])) {
    session_unset();
    session_destroy();
    header("Location: ../page/home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../event/main.css">
    <title>Home</title>
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#profile">About</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="kalkulator.php">Kalkulator</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="../../index.php">login</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contact
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://wa.me/+6282186403388" target="_blank">
                                <i class="bi bi-whatsapp"></i> Whatsapp</a></li>
                            <li><a class="dropdown-item" href="https://www.facebook.com/profile.php?id=100010604971777" target="_blank"><i class="bi bi-facebook"></i> Facebook</a></li>
                            <li><a class="dropdown-item" href="https://www.instagram.com/adeilhamw/" target="_blank"><i class="bi bi-instagram"></i> Instagram</a>
                            </li>
                        </ul>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </nav>
    </header>
    <main style="overflow: auto;">
        <section id="home" class="home mt-5 bg-info-subtle text-center">
            <div class="rounded-circle p-3">
                <img class="rounded-circle rounded p-3" src="https://sisak1.polsri.ac.id/assets/images/avatar-1.jpg" width="30%" height="50%">
            </div>
        </section>
        <div class="container text-center text-justify m-5 mt-3">
        
        <section id="Profile">
            <div class="border-bottom">
                <h3 id="profile">Profile</h3>
            </div>
            <div class="info-list justify-content-center row mt-3">
            <div class="col mt-3">
                <h5>Personal Information</h5>
                <div class="info-list-row">
                    <div class="category">NPM</div>
                    <?php echo isset($npm) ? '<div class="detail">' . $npm . '</div>' : ''; ?>
                </div>
                <div class="info-list-row">
                    <div class="category">Nama Lengkap</div>
                    <?php echo isset($namaLengkap) ? '<div class="detail">' . $namaLengkap . '</div>' : ''; ?>
                </div>
                <div class="info-list-row">
                    <div class="category">Email</div> 
                    <?php echo isset($email) ? '<div class="detail">' . $email . '</div>' : ''; ?>
                </div>
                <div class="info-list-row">
                    <div class="category">Tempat Lahir</div>
                    <?php echo isset($tempatLahir) ? '<div class="detail">' . $tempatLahir . '</div>' : ''; ?>
                </div>
                <div class="info-list-row">
                    <div class="category">Tanggal Lahir</div>
                    <?php echo isset($tanggalLahir) ? '<div class="detail">' . $tanggalLahir . '</div>' : ''; ?>
                </div>
                <div class="info-list-row">
                    <div class="category">Agama</div>
                    <?php echo isset($agama) ? '<div class="detail">' . $agama . '</div>' : ''; ?>
                </div>
                <div class="info-list-row">
                    <div class="category">Jurusan</div>
                    <?php echo isset($jurusan) ? '<div class="detail">' . $jurusan . '</div>' : ''; ?>
                </div>
                <div class="info-list-row">
                    <div class="category">Angkatan</div>
                    <?php echo isset($angkatan) ? '<div class="detail">' . $angkatan . '</div>' : ''; ?>
                </div>
                <div class="info-list-row">
                    <div class="category">Jenis Kelamin</div>
                    <?php echo isset($jenisKelamin) ? '<div class="detail">' . $jenisKelamin . '</div>' : ''; ?>
                </div>
                <div class="info-list-row">
                    <div class="category">Alamat</div>
                    <?php echo isset($alamat) ? '<div class="detail">' . $alamat . '</div>' : ''; ?>
                </div>
                </div>
                </div>
                <div class="text-center mt-3">
                    <form method="post">
                        <button class="btn btn-primary" type="submit" name="hapus_data">Hapus Data</button>
                        <a href="../utils/form.php" class="btn btn-primary">Isi Data</a>
                    </form>
                </div>
            </div>
        </section>
        <section id="fiture">
            <div class="info-list justify-content-center row row-cols-xxl-2 row-cols-xl-2 row-cols-1 mt-3">
            <div class="accordion mt-3" id="accordionPanelsStayOpenExample">
                <h3>
                    <b>Fitur</b>
                </h3>
                <div class="accordion-item mt-3">
                    <h2 class="accordion-header">
                    <a href="kalkulator.php">
                        <button class="accordion-button" type="button" >
                            <span class="cone-teratas">1</span>
                            <div>
                            <img class="ms-5" sizes="(min-width: 100px) 100px, 100vw" src="https://cdn.discordapp.com/attachments/1103683129178325004/1127942433846591588/download_2.png" width="25%">
                            </div>
                            <div class="lcone">Kalkulator</div>
                        </button>
                    </a>
                    </h2>
                </div>
                <div class="accordion-item mt-2">
                    <h2 class="accordion-header">
                    <a href="../utils/form.php">
                        <button class="accordion-button" type="button" >
                            <span class="cone-teratas">2</span>
                            <div>
                            <img class="ms-5" sizes="(min-width: 100px) 100px, 100vw" src="https://cdn.discordapp.com/attachments/1103683129178325004/1127945351417040917/images.png" width="25%">
                            </div>
                            <div class="lcone">Form Pengisian Data</div>
                        </button>
                    </a>
                    </h2>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>