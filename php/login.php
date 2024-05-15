<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/all.min.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/master.css">
    <title>Hoşgeldiniz</title>
</head>
    <body style = "height: 100vh; display: flex; flex-direction: column;">
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="logo" href="../index.html">AVCI</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="../ozgecmis.html">Özgeçmiş</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../sehrim.html">Şehrim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../mirasimiz.html">Mirasımız</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../ilgi.html">İlgi alanlarım</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../iletisim.html">İletişim sayfası</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <section style = "height: 100%; display: flex; text-align: center; justify-content: center; flex-direction: column;">
            <div class="container">
                <?php 
                    if ($_POST["mail"] == "g221210552@sakarya.edu.tr" && $_POST["pass"] == "g221210552") 
                    {
                        echo "<h1>Hoşgeldiniz Bilal Alsayad</h1>";
                        echo "<h3><br>Girişin Onaylandı.</h3>";
                    } 
                    else 
                    {
                        echo "<h1>Kullanıcı epostası yada şifre hatalı</h1>";
                        header("refresh:3; ../login.html");
                    }
                ?>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="box">
                    <a href="../index.html">
                        <h3>AVCI</h3>
                    </a>
                </div>
                <p>&copy; 2024 Bilal Alsayad</p>
            </div>
        </footer>
        <script src="../JS/bootstrap.js"></script>
    </body>
</html>