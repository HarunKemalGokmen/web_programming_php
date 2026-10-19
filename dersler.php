<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Böte Ders Listesi</title>

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

    <img
        src="images/iucLogo.jpeg"
        width="40"
        height="40"
        class="me-2"
        alt="Okul Logosu">

    BÖTE Website

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
                        <a class="nav-link" href="böteWebsite.php">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://hayefbote.iuc.edu.tr/tr/_" target="_blank">BÖTE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="dersler.php">Dersler</a>
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




<div class="container mt-5">
  <h2>BİLGİSAYAR VE ÖĞRETİM TEKNOLOJİLERİ ÖĞRETMENLİĞİ, LİSANS PROGRAMI</h2>        
  <table class="table table-striped mt-4">
    <thead>
      <tr>
        <th>Ders Kodu</th>
        <th>Ders Adı</th>
        <th>Kredisi</th>
        <th>Dersin Öğretim Üyesi</th>
        <th>Detay</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>AEBO3003</td>
        <td>BİLİŞİM ÖĞRETİM PROGRMALARI</td>
        <td>2</td>
        <td>Doç. Dr. ÖZGÜR YILMAZ</td>
        <td><button class="btn btn-dark btn-sm"
        type="button"
        data-bs-toggle="modal"
        data-bs-target="#ders1">
    Detay
</button></td>
      </tr>
      <tr>
        <td>AESEBO04</td>
        <td>EĞİTİMDE YAPAY ZEKA UYGULAMALARI</td>
        <td>2</td>
        <td>Doç. Dr. ÖZGÜR YILMAZ</td>
        <td><button class="btn btn-dark btn-sm"
        type="button"
        data-bs-toggle="modal"
        data-bs-target="#ders2">
    Detay
</button></td>
      </tr>
      <tr>
        <td>AEBO3002</td>
        <td>WEB TABANLI PROGRAMLAMA</td>
        <td>3</td>
        <td>Prof. Dr. İRFAN ŞİMŞEK</td>
        <td><button class="btn btn-dark btn-sm"
        type="button"
        data-bs-toggle="modal"
        data-bs-target="#ders3">
    Detay
</button></td>
      </tr>
    </tbody>
  </table>
</div>


<div class="container text-center mt-4">

    <button class="btn btn-dark mb-3"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#dersEklemeFormu">
        + Ders Ekle
    </button>

    <div class="collapse" id="dersEklemeFormu">

        <div class="card shadow-sm mx-auto text-start"
             style="max-width: 600px;">

            <div class="card-body">

                <h4 class="mb-4 text-center">
                    Ders Ekleme Formu
                </h4>

                <form>

                    <div class="mb-3">
                        <label class="form-label">Ders Kodu</label>
                        <input type="text"
                               class="form-control"
                               placeholder="Ders kodunu giriniz">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ders Adı</label>
                        <input type="text"
                               class="form-control"
                               placeholder="Ders adını giriniz">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kredisi</label>
                        <input type="number"
                               class="form-control"
                               placeholder="Ders kredisini giriniz">
                    </div>

                    
                    <div class="mb-3">
                        <label for="ogretimUyesi" class="form-label">
                            Dersin Öğretim Üyesi
                        </label>

                        <select class="form-select" id="ogretimUyesi">

                            <option value="" selected disabled>
                                Öğretim üyesi seçiniz
                            </option>

                            <option value="ozgurYilmaz">
                                Doç. Dr. ÖZGÜR YILMAZ
                            </option>

                            <option value="irfanSimsek">
                                Prof. Dr. İRFAN ŞİMŞEK
                            </option>

                        </select>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">
                            Dersin Açıklaması
                        </label>
                        <textarea class="form-control"
                                  placeholder="Dersin açıklamasını giriniz"
                                  rows="3"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="button" class="btn btn-success">
                            Kaydet
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

</div>



<div class="modal fade" id="ders1" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    BİLİŞİM ÖĞRETİM PROGRAMLARI
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                </button>
            </div>

            <div class="modal-body">

                <p><strong>Ders Kodu:</strong> AEBO3003</p>

                <p><strong>Kredi:</strong> 2</p>

                <p><strong>Öğretim Üyesi:</strong>
                    Doç. Dr. ÖZGÜR YILMAZ
                </p>

                <hr>

                <h6>Ders Açıklaması</h6>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, optio.
                </p>

            </div>

            <div class="modal-footer">
                <button type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">
                    Kapat
                </button>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="ders2" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    EĞİTİMDE YAPAY ZEKA UYGULAMALARI
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                </button>
            </div>

            <div class="modal-body">

                <p><strong>Ders Kodu:</strong> AESEBO04</p>

                <p><strong>Kredi:</strong> 2</p>

                <p><strong>Öğretim Üyesi:</strong>
                    Doç. Dr. ÖZGÜR YILMAZ
                </p>

                <hr>

                <h6>Ders Açıklaması</h6>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, amet?
                </p>

            </div>

            <div class="modal-footer">
                <button type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">
                    Kapat
                </button>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="ders3" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    WEB TABANLI PROGRAMLAMA
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                </button>
            </div>

            <div class="modal-body">

                <p><strong>Ders Kodu:</strong> AEBO3002</p>

                <p><strong>Kredi:</strong> 3</p>

                <p><strong>Öğretim Üyesi:</strong>
                    Prof. Dr. İRFAN ŞİMŞEK
                </p>

                <hr>

                <h6>Ders Açıklaması</h6>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, esse?
                </p>

            </div>

            <div class="modal-footer">
                <button type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">
                    Kapat
                </button>
            </div>

        </div>
    </div>
</div>




</body>
</html>