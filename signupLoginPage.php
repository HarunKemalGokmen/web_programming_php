<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <title>Giriş Yap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container">

            <a class="navbar-brand d-flex align-items-center" href="böteWebsite.php">
    <img
        src="images/iucLogo.jpeg"
        width="40"
        height="40"
        class="me-2"
        alt="İÜC Logo">

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
                            class="nav-link active"
                            href="signupLoginPage.php">

                            Login / Register

                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <div class="container">

        <div class="card shadow-sm mx-auto mt-5" style="max-width: 400px;">

            <div class="card-body p-4">

                <ul class="nav nav-tabs mb-4" id="myTab">

                    <li class="nav-item">
                        <button class="nav-link active"
                                data-bs-toggle="tab"
                                data-bs-target="#login">
                            Login
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link"
                                data-bs-toggle="tab"
                                data-bs-target="#register">
                            Register
                        </button>
                    </li>

                </ul>


                <div class="tab-content">

                    <div class="tab-pane fade show active" id="login">

                        <h3 class="text-center mb-4">Login</h3>

                        <form>

                            <div class="mb-3">
                                <label for="loginEmail" class="form-label">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    class="form-control"
                                    id="loginEmail"
                                    placeholder="Email adresiniz">
                            </div>


                            <div class="mb-3">
                                <label for="loginPassword" class="form-label">
                                    Password
                                </label>

                                <input
                                    type="password"
                                    class="form-control"
                                    id="loginPassword"
                                    placeholder="Şifreniz">
                            </div>


                            <div class="form-check mb-3">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="rememberMe">

                                <label class="form-check-label" for="rememberMe">
                                    Beni hatırla
                                </label>
                            </div>


                            <button type="submit" class="btn btn-dark w-100">
                                Login
                            </button>

                        </form>

                    </div>


                    <div class="tab-pane fade" id="register">

                        <h3 class="text-center mb-4">Register</h3>

                        <form>

                            <div class="mb-3">
                                <label for="registerName" class="form-label">
                                    Name
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="registerName"
                                    placeholder="Adınız">
                            </div>


                            <div class="mb-3">
                                <label for="registerEmail" class="form-label">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    class="form-control"
                                    id="registerEmail"
                                    placeholder="Email adresiniz">
                            </div>


                            <div class="mb-3">
                                <label for="registerPassword" class="form-label">
                                    Password
                                </label>

                                <input
                                    type="password"
                                    class="form-control"
                                    id="registerPassword"
                                    placeholder="Şifreniz">
                            </div>


                            <div class="mb-3">
                                <label for="registerPasswordAgain" class="form-label">
                                    Repeat Password
                                </label>

                                <input
                                    type="password"
                                    class="form-control"
                                    id="registerPasswordAgain"
                                    placeholder="Şifrenizi tekrar girin">
                            </div>


                            <div class="form-check mb-3">

                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="terms">

                                <label class="form-check-label" for="terms">
                                    Şartları kabul ediyorum
                                </label>

                            </div>


                            <button type="submit" class="btn btn-dark w-100">
                                Register
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html> 