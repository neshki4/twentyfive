<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "webeo";
$connect = mysqli_connect($host, $user, $pass, $database);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TwentyFive Organizer</title>
    <link rel="icon" type="image/x-icon" href="img/faviconn.png" />
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <a href="index.php" class="logo">TwentyFive Organizer</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#events">Events</a>
            <a href="reservation.php" target="_blank">Reservation</a>
            <a href="#contact">Contact Us</a>
            <span class="active-nav"></span>
        </nav>
    </header>
<!-- Home Section -->
    <section class="home" id="home">
        <div class="home-content">
            <h1>TwentyFive</h1>
            <div class="text-animate">
                <h3>Event Organizer</h3>
            </div>
            <p>Jasa Event Planner Organizer secara Online dan Offline profesional yang siap menciptakan nuansa acara berkesan dan tentunya menjadi
                memori terbaik. Tim EO akan membantu Anda menemukan konsep terbaik
                untuk acara seminar, bazaar, pameran dan event lain yang tidak akan terlupakan!</p>
            <div class="btn-box">
                <a href="reservation.php" target="_blank" class="btn">Reservation</a>
                <a href="#contact" class="btn">Contact Us!</a>
            </div>
        </div>
        <div class="image-container">
            <img src="img/logo-icon.png" alt="" height="450px" width="850px" />
        </div>
        <div class="home-sci">
            <a href="https://www.facebook.com/yhnshoo94" target="_blank"><i class='bx bxl-facebook'></i></a>
            <a href="https://www.instagram.com/xneshki" target="_blank"><i class='bx bxl-instagram'></i></a>
            <a href="https://wa.me/6281807207151" target="_blank"><i class='bx bxl-whatsapp'></i></a>
        </div>
    </section>
<!-- About Section -->
    <section class="about" id="about">
    <div class="about-img">
        <img src="img/logo-icon.png" alt="" height="200px" width="400px">
    </div>
    <div class="about-content">
            <div class="text-animate">
                <h4>Let’s Bring the Fun Out with TwentyFive</h4>
            <h1>Jadikan Acara Yang Menyenangkan dan Tak Terlupakan!</h1>
            <p> TwentyFive adalah penyedia layanan jasa event organizer (EO) profesional di Jakarta yang berfokus pada kualitas dan kepuasan klien. Kami berpengalaman dalam merancang dan menyelenggarakan acara untuk kegiatan corporate seperti family gathering, acara sekolah atau perkuliahan seperti wisuda, pentas seni atau acara perpisahan, hingga acara sosial serta acara pribadi seperti nikah online atau pesta keluarga dengan dokumentasi yang sangat lengkap. Berbagai kegiatan baik telah kami rancang dengan konsep yang unik baik indoor maupun outdoor seperti outbound untuk mempererat tali persaudaraan antar karyawan atau menyelenggarakan bazaar untuk mengenalkan produk Anda kepada khalayak luas.<br><br>
                Mengapa memilih TwentyFive sebagai event organizer untuk acara Anda? Karena kami membuka ruang diskusi bersama klien sehingga segala ide, masukan, bahkan koreksi dalam rangka menyelenggarakan sebuah acara yang memuaskan klien. Tim event organizer TwentyFive memiliki jiwa kreatif, solid, inovatif, dan telah berpengalaman membantu banyak klien untuk merancang berbagai acara dengan konsep yang baru, segar, dan unik sehingga tidak akan dapat dilupakan untuk selamanya. Didukung oleh keahlian dan pengalaman, jasa event organizer (EO) kami juga memiliki konsep video dan foto aerial yang akan membuat dokumentasi acara Anda menjadi lebih menarik, bahkan kami dapat menyediakan 180° dan 360° photobooth yang siap memanjakan tamu undangan. Bersama kami, “One Moment for Everlasting Memories” bukan lagi sekedar impian.<br><br><br></p>
        </div>
    </div>
    </section>
<!-- Events Section -->
    <section class="events" id="events">
        <h2 class="heading">List <span>Events</span></h2>

<!-- Slideshow Container Section -->
<div class="events-content">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="img/event-1.jpg" style="width:75%">
            <div class="text">Music Concert</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="img/event-2.jpg" style="width:75%">
            <div class="text">Automotive</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="img/event-3.jpg" style="width:75%">
            <div class="text">Art Exhibition</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="img/event-4.jpg" style="width:75%">
            <div class="text">Architect Exhibition</div>
        </div>
    
        <div class="containerNextPrev">
            <!-- Next and Previous button -->
            <a class="prev" onclick="plusSlides(-1)"><</a>
            <a class="next" onclick="plusSlides(1)">></a>
        </div>
    </div>
</div>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Us!</span></h2>

        <div class="row">
            <div class="col-50">
            <h1 class="form-title">Submit Your Messages Here<h1>
                <form action="#">
                    <div class="input-box">
                        <div class="input-field">
                            <input type="text" placeholder="Full Name" required>
                            <span class="focus"></span>
                        </div>
                    <div class="input-field">
                        <input type="text" placeholder="Email Address" required>
                        <span class="focus"></span>
                    </div>
                </div>
                <div class="input-box">
                    <div class="input-field">
                        <input type="text" placeholder="Phone Number" required>
                        <span class="focus"></span>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Subject" required>
                        <span class="focus"></span>
                    </div>
                </div>
                <div class="textarea-field">
                    <textarea name="" id="" cols="55" rows="12" placeholder="Your Message" required></textarea>
                    <span class="focus"></span>
                </div>
                    <div class="contact-content">
                        <div class="btn-box">
                        <button type="submit" class="btn">Submit</button>
                    </div>
                </div>
            </div>
            </form>
        
            <div class="contact-address">
                <h1>TwentyFive Organizer</h1>
                    <p>Jl. Kamal Raya No.18, RT.6/RW.3, Cengkareng Tim., Kecamatan Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11730</p><br>
                    <p>(021) 54376398 / +62818-0720-7151</p>
                    <p>twentyfive@bsi.ac.id</p><br>
                        <div class="google-map">
                            <iframe class="gmapx" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8710109930703!2d106.72475167554336!3d-6.14802079383904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7f961c04f65%3A0x91667efd0496a1cd!2sBina%20Sarana%20Informatika%20Kampus%20M!5e0!3m2!1sen!2sid!4v1682759239290!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
            </div>
        </div>       
    </section>
    <script src="script/script.js"></script>
</body>
</html>