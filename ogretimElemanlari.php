<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÖTE Öğretim Elemanları</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="böteWebsite.php">
                <img src="images/iucLogo.jpeg" width="40" height="40" class="me-2" alt="Okul Logosu">
                BÖTE Website
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="böteWebsite.php">Anasayfa</a>
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
                        <a class="nav-link active" href="ogretimElemanlari.php">Öğretim Elemanları</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sinavlar.php">Sınavlar</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="signupLoginPage.php">Login / Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <h2>ÖĞRETİM ELEMANLARI LİSTESİ</h2>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Kurum Sicil No</th>
                    <th>Ad</th>
                    <th>Soyad</th>
                    <th>Email</th>
                    <th>Detay</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>SICILNO01</td>
                    <td>Doç. Dr. Özgür</td>
                    <td>Yılmaz</td>
                    <td>ozgur.yilmaz@iuc.edu.tr</td>
                    <td>
                        <button class="btn btn-dark btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#hoca1">
                            Detay
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>SICILNO02</td>
                    <td>Prof. Dr. İrfan</td>
                    <td>Şimşek</td>
                    <td>irfan.simsek@iuc.edu.tr</td>
                    <td>
                        <button class="btn btn-dark btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#hoca2">
                            Detay
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="container text-center mt-4 mb-5">

        <button class="btn btn-dark mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#hocaEklemeFormu">
            + Öğretim Elemanı Ekle
        </button>

        <div class="collapse" id="hocaEklemeFormu">
            <div class="card shadow-sm mx-auto text-start" style="max-width: 600px;">
                <div class="card-body">
                    <h4 class="mb-4 text-center">Öğretim Elemanı Ekleme Formu</h4>

                    <form action="ogretimElemaniKayit.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Kurum Sicil No</label>
                            <input type="text" class="form-control" placeholder="Kurum sicil numarasını giriniz" name="sicil_no">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Ad</label>
                            <input type="text" class="form-control" placeholder="Adını giriniz" name="hoca_adi">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Soyad</label>
                            <input type="text" class="form-control" placeholder="Soyadını giriniz" name="hoca_soyadi">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email adresini giriniz" name="hoca_email">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Kaydet</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>


    <div class="modal fade" id="hoca1" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Öğretim Elemanı Bilgileri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Kurum Sicil No:</strong> SICILNO02</p>
                    <p><strong>Ad:</strong> Doç. Dr. Özgür</p>
                    <p><strong>Soyad:</strong> Yılmaz</p>
                    <p><strong>Email:</strong> ozgur.yilmaz@iuc.edu.tr</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="hoca2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Öğretim Elemanı Bilgileri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Kurum Sicil No:</strong> SICILNO02</p>
                    <p><strong>Ad:</strong> Prof. Dr. İrfan</p>
                    <p><strong>Soyad:</strong> Şimşek</p>
                    <p><strong>Email:</strong> irfan.simsek@iuc.edu.tr</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>