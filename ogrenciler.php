<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÖTE Öğrenci Listesi</title>
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
                        <a class="nav-link active" href="ogrenciler.php">Öğrenciler</a>
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
                        <a class="nav-link" href="signupLoginPage.php">Login / Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <h2>ÖĞRENCİ LİSTESİ</h2>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Okul No</th>
                    <th>Ad</th>
                    <th>Soyad</th>
                    <th>Bölüm</th>
                    <th>Telefon</th>
                    <th>Email</th>
                    <th>Detay</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>20260101</td>
                    <td>Ahmet</td>
                    <td>Yılmaz</td>
                    <td>BÖTE</td>
                    <td>0555 111 22 33</td>
                    <td>ahmet.yilmaz@ogr.iuc.edu.tr</td>
                    <td>
                        <button class="btn btn-dark btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#ogrenci1">
                            Detay
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>20260102</td>
                    <td>Ayşe</td>
                    <td>Kaya</td>
                    <td>BÖTE</td>
                    <td>0555 444 55 66</td>
                    <td>ayse.kaya@ogr.iuc.edu.tr</td>
                    <td>
                        <button class="btn btn-dark btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#ogrenci2">
                            Detay
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="container text-center mt-4 mb-5">

        <button class="btn btn-dark mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#ogrenciEklemeFormu">
            + Öğrenci Ekle
        </button>

        <div class="collapse" id="ogrenciEklemeFormu">
            <div class="card shadow-sm mx-auto text-start" style="max-width: 600px;">
                <div class="card-body">
                    <h4 class="mb-4 text-center">Öğrenci Ekleme Formu</h4>

                    <form>
                        <div class="mb-3">
                            <label class="form-label">Okul No</label>
                            <input type="number" class="form-control" placeholder="Okul numarasını giriniz">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Ad</label>
                            <input type="text" class="form-control" placeholder="Öğrenci adını giriniz">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Soyad</label>
                            <input type="text" class="form-control" placeholder="Öğrenci soyadını giriniz">
                        </div>

                        <div class="mb-3">
                            <label for="bolum" class="form-label">Bölüm</label>
                            <select class="form-select" id="bolum">
                                <option value="" selected disabled>Bölüm seçiniz</option>
                                <option value="bote">Bilgisayar ve Öğretim Teknolojileri Eğitimi</option>
                                <option value="pdr">Sosyal Bilgiler Öğretmenliği</option>
                                <option value="ingilizce">İngilizce Öğretmenliği</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Telefon</label>
                            <input type="tel" class="form-control" placeholder="05XX XXX XX XX">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email adresini giriniz">
                        </div>

                        <div class="text-center">
                            <button type="button" class="btn btn-success">Kaydet</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>



    <div class="modal fade" id="ogrenci1" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Öğrenci Bilgileri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Okul No:</strong> 20260101</p>
                    <p><strong>Ad Soyad:</strong> Ahmet Yılmaz</p>
                    <p><strong>Bölüm:</strong> BÖTE</p>
                    <p><strong>Telefon:</strong> 0555 111 22 33</p>
                    <p><strong>Email:</strong> ahmet.yilmaz@ogr.iuc.edu.tr</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ogrenci2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Öğrenci Bilgileri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Okul No:</strong> 20260102</p>
                    <p><strong>Ad Soyad:</strong> Ayşe Kaya</p>
                    <p><strong>Bölüm:</strong> BÖTE</p>
                    <p><strong>Telefon:</strong> 0555 444 55 66</p>
                    <p><strong>Email:</strong> ayse.kaya@ogr.iuc.edu.tr</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>