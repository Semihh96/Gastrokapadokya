<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>İletişim - Gastrokapadokya</title>
    <?php
    include "link.php";
    ?>
</head>
<body>
<?php
include "header.php";
?>
<div class="header-base bg-cover" style="background-image: url(images/bg-23.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="title-base text-left">
                    <h1>İLETİŞİM</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-empty section-item">
    <div class="container content">
        <div class="row">
            <div class="col-md-6">
                <h3>SORU VE ÖNERİLERİNİZ İÇİN FORM GÖNDERİN!</h3>
                <hr class="space s">
                <form action="http://templates.framework-y.com/gourmet/scripts/php/contact-form.php" class="form-box form-ajax" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Adınız</p>
                            <input id="name" name="name" placeholder="" type="text" class="form-control form-value" required="">
                        </div>
                        <div class="col-md-6">
                            <p>Soyadınız</p>
                            <input id="name" name="name" placeholder="" type="text" class="form-control form-value" required="">
                        </div>
                        <div class="col-md-6">
                            <p>Telefon Numaranız</p>
                            <input id="phone" name="phone" placeholder="" type="number" class="form-control form-value" required="">
                        </div>
                        <div class="col-md-6">
                            <p>E-Posta Adresiniz</p>
                            <input id="email" name="email" placeholder="" type="email" class="form-control form-value" required="">
                        </div>
                    </div>
                    <hr class="space s">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Mesajınız</p>
                            <textarea id="messagge" name="messagge" class="form-control form-value" required=""></textarea>
                            <hr class="space s">
                            <button class="anima-button circle-button btn-xs btn" type="submit"><i class="im-mailbox-empty"></i>Gönder</button>
                        </div>
                    </div>
                    <div class="success-box">
                        <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
                    </div>
                    <div class="error-box">
                        <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <hr class="space visible-sm">
                <h3>BİZİMLE İLETİŞİME GEÇİN!</h3>
                <hr class="space s">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="fa-ul">
                            <li>
                                <i class="fa-sharp fa-solid  fa-location-dot"></i>
                                Kapadokya
                            </li>
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                0 (384) 353 50 09
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                info@gastrocappadocia.com
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="space s">
                <div class="text-center">
                    <div class="btn-group btn-group-icons" role="group">
                        <a target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a target="_blank" href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="space xs">
</div>
<div class="container content">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1601500.6010938757!2d33.94574675023717!3d38.373720832911964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d6025c679e1679%3A0xf9178b7341dc5e49!2sKapadokya!5e0!3m2!1str!2str!4v1674464931296!5m2!1str!2str" width="1200" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php
include "footer.php";
include "script.php";
?>
</body>
</html>

