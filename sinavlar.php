<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÖTE Sınav Listesi</title>
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
                        <a class="nav-link" href="https://hayefbote.iuc.edu.tr/tr/_">BÖTE</a>
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
                        <a class="nav-link active" href="sinavlar.php">Sınavlar</a>
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
        <h2>SINAV SONUÇ LİSTESİ</h2>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Ders</th>
                    <th>Öğrenci</th>
                    <th>Sınav Tipi</th>
                    <th>Sınav Notu</th>
                    <th>Detay</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>WEB TABANLI PROGRAMLAMA</td>
                    <td>20260101 - Ahmet Yılmaz</td>
                    <td>Vize</td>
                    <td>85</td>
                    <td>
                        <button class="btn btn-dark btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#sinav1">
                            Detay
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>EĞİTİMDE YAPAY ZEKA UYGULAMALARI</td>
                    <td>20260102 - Ayşe Kaya</td>
                    <td>Final</td>
                    <td>90</td>
                    <td>
                        <button class="btn btn-dark btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#sinav2">
                            Detay
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="container text-center mt-4 mb-5">

        <button class="btn btn-dark mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#sinavEklemeFormu">
            + Sınav Ekle
        </button>

        <div class="collapse" id="sinavEklemeFormu">
            <div class="card shadow-sm mx-auto text-start" style="max-width: 600px;">
                <div class="card-body">
                    <h4 class="mb-4 text-center">Sınav Notu Ekleme Formu</h4>

                    <form>
                        <div class="mb-3">
                            <label for="dersSecimi" class="form-label">Ders</label>
                            <select class="form-select" id="dersSecimi">
                                <option value="" selected disabled>Ders seçiniz</option>
                                <option value="AEBO3003">AEBO3003 - BİLİŞİM ÖĞRETİM PROGRAMLARI</option>
                                <option value="AESEBO04">AESEBO04 - EĞİTİMDE YAPAY ZEKA UYGULAMALARI</option>
                                <option value="AEBO3002">AEBO3002 - WEB TABANLI PROGRAMLAMA</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="ogrenciSecimi" class="form-label">Öğrenci</label>
                            <select class="form-select" id="ogrenciSecimi">
                                <option value="" selected disabled>Öğrenci seçiniz</option>
                                <option value="20240101">20260101 - Ahmet Yılmaz</option>
                                <option value="20240102">20260102 - Ayşe Kaya</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="sinavTipi" class="form-label">Sınav Tipi</label>
                            <select class="form-select" id="sinavTipi">
                                <option value="" selected disabled>Sınav tipi seçiniz</option>
                                <option value="vize">Vize</option>
                                <option value="final">Final</option>
                                <option value="butunleme">Bütünleme</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sınav Notu</label>
                            <input type="number" class="form-control" min="0" max="100" placeholder="Sınav notunu giriniz (0-100)">
                        </div>

                        <div class="text-center">
                            <button type="button" class="btn btn-success">Kaydet</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>


    <!-- Sınav Detay Modalları -->
    <div class="modal fade" id="sinav1" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sınav Detayı</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Ders:</strong> WEB TABANLI PROGRAMLAMA</p>
                    <p><strong>Öğrenci:</strong> 20240101 - Ahmet Yılmaz</p>
                    <p><strong>Sınav Tipi:</strong> Vize</p>
                    <p><strong>Sınav Notu:</strong> 85</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="sinav2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sınav Detayı</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Ders:</strong> EĞİTİMDE YAPAY ZEKA UYGULAMALARI</p>
                    <p><strong>Öğrenci:</strong> 20240102 - Ayşe Kaya</p>
                    <p><strong>Sınav Tipi:</strong> Final</p>
                    <p><strong>Sınav Notu:</strong> 90</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>