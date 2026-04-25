<?php 
// هنا مستقبلاً صاحبتك بتربطه بقاعدة البيانات
?>
<!doctype html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>المطاعم — Marsa Jeddah</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <header class="site-header">
    <div class="container header-inner">
      <h1 class="logo">Marsa — Jeddah</h1>
      <nav class="main-nav">
        <a href="index.html">الرئيسية</a>
        <a href="about.html">عن جدة</a>
        <a href="destinations.html">الوجهات</a>
        <a href="restaurants.php" class="active">المطاعم</a>
        <a href="contact.html">تواصل معنا</a>
      </nav>
    </div>
  </header>

  <main class="container">
    <section class="destinations-intro">
      <h2>مطاعم جدة المميزة</h2>
      <p>اكتشف نكهات عروس البحر الأحمر.</p>
      <div style="margin: 1rem 0;">
          <a href="add_restaurant.php" class="btn">+ إضافة مطعم جديد</a>
      </div>
    </section>

    <section class="gallery">
      <div class="dest-card">
        <img src="images/century.jpg" alt="سنشري برجر">
        <div class="content">
          <h3>سنشري برجر</h3>
          <p>طعم الحداثة بروح محلية</p>
          <a href="restaurant_details.php" class="link">عرض التفاصيل</a>
        </div>
      </div>
      
      </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <p>© Marsa — Jeddah 2025</p>
    </div>
  </footer>

</body>
</html>