<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HAYEF BÖTE Website</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container">

            <a class="navbar-brand d-flex align-items-center" href="böteWebsite.php">
                <img src="images/iucLogo.jpeg" width="40" height="40" class="me-2" alt="Okul Logosu">BÖTE Website
            </a>


            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">

                <span class="navbar-toggler-icon"></span>

            </button>


            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="böteWebsite.php">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://hayefbote.iuc.edu.tr/tr/_" target="_blank">BÖTE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dersler.php">Dersler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ogrenciler.php">Öğrenciler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ogretimElemanlari.php">Öğretim Elemanları</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sinavlar.php">Sınavlar</a>
                    </li>
                </ul>


                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="signupLoginPage.php">

                            Login / Register

                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>


<!-- Anasayfa Bağlantılı Cardlar -->
    <div class="container mt-5">

        <div class="p-4 mb-4 bg-light rounded-3 border">
            <h1>Bilgisayar ve Öğretim Teknolojileri Öğretmenliği</h1>
            <p class="lead mt-3">
                İstanbul Üniversitesi-Cerrahpaşa Hasan Âli Yücel Eğitim Fakültesi BÖTE Bölümü öğrenci, öğretim elemanı ve ders yönetim sistemi
            </p>
        </div>

        <div class="row mt-4 text-center">

            <div class="col-md-3 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Dersler</h5>
                        <p class="card-text">Bölüm dersleri Listesi</p>
                        <a href="dersler.php" class="btn btn-dark btn-sm">Derslere Git</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Öğrenciler</h5>
                        <p class="card-text">Kayıtlı öğrenci listesi</p>
                        <a href="ogrenciler.php" class="btn btn-dark btn-sm">Öğrencilere Git</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Öğretim Elemanları</h5>
                        <p class="card-text">Bölüm öğretim üyeleri listesi</p>
                        <a href="ogretimElemanlari.php" class="btn btn-dark btn-sm">Listeye Git</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Sınavlar</h5>
                        <p class="card-text">Sınav notları listesi</p>
                        <a href="sinavlar.php" class="btn btn-dark btn-sm">Sınavlara Git</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>

</html>
