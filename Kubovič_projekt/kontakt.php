<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/kontakt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Kontakt</title>
</head>

<body>
    <?php include "./parts/header.php"?>


    <div class="container">
        <main class="row">
            <section class="col left">
                <div class="contactTitle">
                    <h2>Kontaktujte nás</h2>
                    <p>Ak ste sa stretli s problémom na našej stránke, neváhajte nás kontaktovať.</p>
                </div>
                <div class="contactInfo">
                    <div class="iconGroup">
                        <div class="icon">
                            <a href="tel:0911404876"><i class="fa-solid fa-phone"></i></a>
                        </div>
                        <div class="details">
                            <span>Tel.č:</span>
                            <span>0911 404 876</span>
                        </div>
                    </div>

                    <div class="iconGroup">
                        <div class="icon">
                            <a href="mailto:samuelkub04@gmail.com" target="_blank"><i
                                    class="fa-solid fa-envelope"></i></a>
                        </div>
                        <div class="details">
                            <span>Email</span>
                            <span>samuelkub04@gmail.com</span>
                        </div>
                    </div>

                    <div class="iconGroup">
                        <div class="icon">
                            <a href="https://maps.app.goo.gl/cBjp4azAZGviQaDr5" target="_blank"><i
                                    class="fa-solid fa-location-dot"></i></a>
                        </div>
                        <div class="details">
                            <span>Lokácia</span>
                            <span>Trieda Andreja Hlinku 1670, 949 01 Nitra-Chrenová</span>
                        </div>
                    </div>

                </div>

                <div class="socialMedia">
                    <a href="https://www.facebook.com/ScuderiaFerrari/" target="_blank"><i
                            class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://twitter.com/ScuderiaFerrari" target="_blank"><i
                            class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.instagram.com/scuderiaferrari/" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@Ferrari" target="_blank"><i class="bx bxl-youtube"></i></a>
                </div>
            </section>



            <section class="col right">
                <form class="messageForm">
                    <div class="inputGroup halfWidth">
                        <input type="text" name="" required="required">
                        <label>Your Name</label>
                    </div>

                    <div class="inputGroup halfWidth">
                        <input type="email" name="" required="required">
                        <label>Email</label>
                    </div>

                    <div class="inputGroup fullWidth">
                        <input type="text" name="" required="required">
                        <label>Subject</label>
                    </div>

                    <div class="inputGroup fullWidth">
                        <textarea required="required"></textarea>
                        <label>Say Something</label>
                    </div>

                    <div class="inputGroup fullWidth">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
            </section>



    </div>

    <?php include "./parts/footer.php"?>


    <script src="js/app.js" defer></script>

</body>

</html>