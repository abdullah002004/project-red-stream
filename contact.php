<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>التيار الأحمر - ربط المتبرعين</title>

  <!-- favicon-->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--css-->
  <link rel="stylesheet" href="./assets/css/style.css">
  
  <!-- Arabic font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&family=Amiri:wght@400;700&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: 'Cairo', 'Amiri', sans-serif;
    }
    
    body {
      direction: rtl;
      text-align: right;
    }
    
    /* Enhanced Popup styles */
    .popup {
      display: flex;
      align-items: center;
      justify-content: center;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 25px 35px;
      background: linear-gradient(135deg, #ffffff, #ff6b6b, #4ecdc4);
      color: #2c3e50;
      font-size: 18px;
      font-weight: 600;
      z-index: 9999;
      border-radius: 15px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
      backdrop-filter: blur(10px);
      border: 2px solid rgba(255, 255, 255, 0.3);
      animation: popupSlide 0.4s ease-out;
    }
    
    @keyframes popupSlide {
      from {
        opacity: 0;
        transform: translate(-50%, -60%);
      }
      to {
        opacity: 1;
        transform: translate(-50%, -50%);
      }
    }

    /* Enhanced Hero Section */
    .hero {
      background: linear-gradient(135deg, rgba(231, 76, 60, 0.9), rgba(52, 152, 219, 0.8)), url('./assets/images/hero-bg.png');
      background-size: cover;
      background-position: center;
      position: relative;
      overflow: hidden;
    }
    
    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(45deg, rgba(231, 76, 60, 0.1), rgba(52, 152, 219, 0.1));
      z-index: 1;
    }
    
    .hero .container {
      position: relative;
      z-index: 2;
    }
    
    .hero-title {
      background: linear-gradient(45deg, #e74c3c, #3498db, #9b59b6);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      font-size: 3.5rem;
      font-weight: 800;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
      margin-bottom: 1.5rem;
      animation: titleGlow 3s ease-in-out infinite alternate;
    }
    
    @keyframes titleGlow {
      from {
        filter: drop-shadow(0 0 10px rgba(231, 76, 60, 0.3));
      }
      to {
        filter: drop-shadow(0 0 20px rgba(52, 152, 219, 0.5));
      }
    }
    
    /* Enhanced contact information styling */
    .contact-info {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(240, 248, 255, 0.9));
      backdrop-filter: blur(15px);
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      border: 2px solid rgba(255, 255, 255, 0.3);
      margin-bottom: 30px;
    }
    
    .contact-info h2 {
      color: #e74c3c;
      font-weight: 700;
      margin-bottom: 15px;
      font-size: 1.8rem;
    }
    
    .contact-info p {
      line-height: 1.8;
      color: #2c3e50;
      font-size: 16px;
      margin-bottom: 20px;
    }
    
    /* Enhanced form styling */
    .hero-form {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(240, 248, 255, 0.9));
      backdrop-filter: blur(15px);
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      border: 2px solid rgba(255, 255, 255, 0.3);
      margin-top: 30px;
    }
    
    .email-field {
      width: 100%;
      padding: 15px 20px;
      border: 2px solid rgba(52, 152, 219, 0.3);
      border-radius: 15px;
      font-size: 16px;
      background: rgba(255, 255, 255, 0.8);
      transition: all 0.3s ease;
      backdrop-filter: blur(5px);
      margin-bottom: 20px;
    }
    
    .email-field:focus {
      outline: none;
      border-color: #3498db;
      box-shadow: 0 0 20px rgba(52, 152, 219, 0.2);
      transform: scale(1.02);
    }
    
    /* Enhanced button */
    .btn {
      background: linear-gradient(135deg, #e74c3c, #c0392b);
      color: white;
      padding: 15px 35px;
      border: none;
      border-radius: 50px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 10px 25px rgba(231, 76, 60, 0.3);
      position: relative;
      overflow: hidden;
      width: 100%;
    }
    
    .btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
      transition: left 0.5s;
    }
    
    .btn:hover::before {
      left: 100%;
    }
    
    .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 35px rgba(231, 76, 60, 0.4);
    }
    
    /* Enhanced map styling */
    .hero-banner iframe {
      border-radius: 20px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      border: 3px solid rgba(255, 255, 255, 0.3);
      backdrop-filter: blur(10px);
    }
    
    /* Pulse Animation for Blood Icon */
    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.1); }
    }
    
    .hero-content img {
      animation: pulse 2s ease-in-out infinite;
    }
    
    /* Enhanced navigation for RTL */
    .navbar-list {
      flex-direction: row-reverse;
    }
    
    .contact-list {
      flex-direction: row-reverse;
    }
    
    .social-list {
      flex-direction: row-reverse;
    }
    
    /* Enhanced Footer */
    .footer {
      background: linear-gradient(135deg, #2c3e50, #34495e);
      position: relative;
      overflow: hidden;
    }
    
    .footer::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #e74c3c, #3498db, #9b59b6);
    }

    @media screen and (max-width: 768px) {
      .hero-form {
        display: flex;
        flex-direction: column;
        padding: 20px;
      }
      .email-field {
        margin-bottom: 15px;
      }
      .hero-banner iframe {
        width: 100%;
        height: 200px;
      }
      .hero-title {
        font-size: 2.5rem;
      }
      .contact-info {
        padding: 20px;
      }
    }
    
    @media screen and (max-width: 900px) {
      .hero-form {
        display: flex;
        flex-direction: column;
      }

      .email-field {
        margin-bottom: 15px;
      }

      .hero-banner iframe {
        width: 100%;
        height: 250px;
      }
    }
    
    /* Media query for screen sizes between 905x800 and 1197x800 */
    @media screen and (min-width: 905px) and (max-width: 1197px) {
      .hero-form {
        max-width: 70%;
        margin: 0 auto;
      }
      .hero-banner iframe {
        width: 100%;
        height: 300px;
      }
    }

  </style>

  <script>
    // Function to display the popup message
    function showPopup(message) {
      const popup = document.createElement("div");
      popup.className = "popup";
      popup.textContent = message;
      document.body.appendChild(popup);
      
      // Automatically close the popup after 4 seconds
      setTimeout(function () {
        popup.style.opacity = '0';
        popup.style.transform = 'translate(-50%, -60%)';
        setTimeout(() => popup.remove(), 300);
      }, 4000);
    }
  </script>

</head>

<body id="top">
  <!-- HEADER-->
  <header class="header">
    <div class="header-top">
      <div class="container">
        <ul class="contact-list">
          <li class="contact-item">
            <ion-icon name="mail-outline"></ion-icon>
            <a href="mailto:redstream001@gmail.com" class="contact-link">redstream001@gmail.com</a>
          </li>
          <li class="contact-item">
            <ion-icon name="call-outline"></ion-icon>
            <a href="tel:+917558951351" class="contact-link">+91-7558-951-351</a>
          </li>
        </ul>
        <ul class="social-list">
          <li>
            <a href="https://www.facebook.com/andro.pool.54?mibextid=ZbWKwL" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/_vladimir_putin.___/" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/Annabel07785340" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://youtu.be/Af0gk_kiGac" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="header-bottom" data-header>
      <div class="container">
        <a href="#" class="logo">التيار الأحمر</a>
        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">
            <li>
              <a href="index.php" class="navbar-link" data-nav-link>الرئيسية</a>
            </li>
            <li>
              <a href="#service" class="navbar-link" data-nav-link>البحث عن متبرع</a>
            </li>
            <li>
              <a href="about.html" class="navbar-link" data-nav-link>من نحن</a>
            </li>
            <li>
              <a href="#blog" class="navbar-link" data-nav-link>المدونة</a>
            </li>
            <li>
              <a href="contact.php" class="navbar-link" data-nav-link>اتصل بنا</a>
            </li>
          </ul>
        </nav>
        <a href="register.php" class="btn">تسجيل الدخول / إنشاء حساب</a>
        <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
          <ion-icon name="menu-sharp" aria-hidden="true" class="menu-icon"></ion-icon>
          <ion-icon name="close-sharp" aria-hidden="true" class="close-icon"></ion-icon>
        </button>
      </div>
    </div>
  </header>

  <main>
    <article>
      <!--HERO-->
    <section class="section hero" id="home" style="background-image: url('./assets/images/hero-bg.png')"
        aria-label="hero">
        <div class="container">
          <div class="hero-content">
            <img src="assets/images/blood-icon.png" alt="أيقونة الدم" width="70" height="70"> 
            <p class="section-subtitle">التيار الأحمر</p>
            <h1 class="h1 hero-title">اتصل بنا</h1>
            
            <div class="contact-info">
              <h2>العنوان</h2>
              <p>
                التيار الأحمر، طريق فايكوم، بالقرب من مقر المحافظة<br>
                كوتايام، كيرالا، الهند<br>
                الرمز البريدي 686141
              </p>
              
              <h2>تفاصيل الاتصال</h2>
              <p>
                الهاتف المحمول: +91 7558 9513 51 | الهاتف الثابت: 0484-292674<br>
                البريد الإلكتروني: redstream001@gmail.com<br>
              </p>
            </div>
            
            <form action="" class="hero-form" method="POST">
              <input type="email" name="email_address" aria-label="البريد الإلكتروني" placeholder="عنوان بريدكم الإلكتروني..." required
                class="email-field">
              <button type="submit" class="btn">احصل على رد</button>
            </form>
          </div>
          <figure class="hero-banner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.76164524118906!2d76.39003912368983!3d9.750279515331268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b08790da3aa8ec7%3A0x58b351f9df4075a3!2sBlood%20Storage%20Center!5e0!3m2!1sen!2sin!4v1689507408879!5m2!1sen!2sin" width="700" height="600" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </figure>
        </div>
    </section>

  <!--FOOTER-->
  <footer class="footer">
    <div class="footer-top section">
      <div class="container">
        <div class="footer-brand">
          <a href="#" class="logo">التيار الأحمر</a>
          <p class="footer-text">
            نحن متحمسون لربط المتبرعين بالدم مع المحتاجين إليه وسد الفجوة في صناعة الرعاية الصحية. 
            نسعى لإنشاء مجتمع يعزز التعاطف والدعم والتضامن بين الأفراد الملتزمين بإحداث فرق.
          </p>
          <div class="schedule">
            <div class="schedule-icon">
              <ion-icon name="time-outline"></ion-icon>
            </div>
            <span class="span">
              24 ساعة × 7 أيام:<br>
              365 يوماً
            </span>
          </div>
        </div>
        <ul class="footer-list">
          <li>
            <p class="footer-list-title">روابط أخرى</p>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">الرئيسية</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">البحث عن متبرع</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">من نحن</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">المدونة</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">اتصل بنا</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">تسجيل الدخول / إنشاء حساب</span>
            </a>
          </li>
        </ul>
        <ul class="footer-list">
          <li>
            <p class="footer-list-title">خدماتنا</p>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">حجز الدم مسبقاً</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">خدمة الإسعاف</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">استشارات طبية</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">فحوصات طبية</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">تحليل فصيلة الدم</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">متابعة صحية</span>
            </a>
          </li>
        </ul>
        <ul class="footer-list">
          <li>
            <p class="footer-list-title">اتصل بنا</p>
          </li>
          <li class="footer-item">
            <div class="item-icon">
              <ion-icon name="location-outline"></ion-icon>
            </div>
            <a href="https://goo.gl/maps/BYA5MxQUg5B8ZFLcA">
            <address class="item-text">
              بالقرب من مقر المحافظة،<br>
              فايكوم، كوتايام، كيرالا، الهند
            </address>
          </a>
          </li>
          <li class="footer-item">
            <div class="item-icon">
              <ion-icon name="call-outline"></ion-icon>
            </div>
            <a href="tel:+917558951351" class="footer-link">+91-7558-951-351</a>
          </li>
          <li class="footer-item">
            <div class="item-icon">
              <ion-icon name="mail-outline"></ion-icon>
            </div>
            <a href="mailto:redstream001@gmail.com" class="footer-link">redstream001@gmail.com</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          &copy; 2024 جميع الحقوق محفوظة لدى التيار الأحمر
        </p>
        <ul class="social-list">
          <li>
            <a href="https://www.facebook.com/andro.pool.54?mibextid=ZbWKwL" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/_vladimir_putin.___/" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/Annabel07785340" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email_address"]) && filter_var($_POST["email_address"], FILTER_VALIDATE_EMAIL)) {
        // Sanitize the email address to prevent SQL injection
        $email = htmlspecialchars($_POST["email_address"]);
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "redstream_db";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $stmt = $conn->prepare("INSERT INTO response_back (email) VALUES (?)");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            echo '<script>showPopup("تم إضافة البريد الإلكتروني بنجاح!");</script>';
        } else {
            echo '<script>showPopup("خطأ: لا يمكن إضافة البريد الإلكتروني. يرجى المحاولة لاحقاً.");</script>';
        }
        $stmt->close();
        $conn->close();
    } else {
        echo '<script>showPopup("خطأ: عنوان بريد إلكتروني غير صحيح. يرجى إدخال بريد إلكتروني صالح.");</script>';
    }
}
?>

  <!--BACK TO TOP-->
  <a href="#top" class="back-top-btn" aria-label="العودة إلى الأعلى" data-back-top-btn>
    <ion-icon name="caret-up" aria-hidden="true"></ion-icon>
  </a>

  <!--custom js link-->
  <script src="./assets/js/script.js" defer></script>
  <!--ionicon link-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>