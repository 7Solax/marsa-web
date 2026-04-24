<!doctype html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>الوجهات — Marsa Jeddah</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- ========== HEADER ========== -->
  <header class="site-header">
    <div class="container header-inner">
      <h1 class="logo">Marsa — Jeddah</h1>

      <!-- زر القائمة للجوال -->
      <button id="nav-toggle-3" class="nav-toggle" aria-expanded="false" aria-label="فتح القائمة">
        ☰
      </button>

      <!-- روابط التنقل -->
      <nav class="main-nav" id="main-nav-3">
        <a href="index.html">الرئيسية</a>
        <a href="about.html">عن جدة</a>
        <a href="destinations.html" class="active">الوجهات</a>
        <a href="contact.html">تواصل معنا</a>
      </nav>
    </div>
  </header>

  <!-- ========== MAIN ========== -->
  <main class="container">

    <section class="destinations-intro">
      <h2>اكتشف وجهات جدة</h2>
      <p>اختر التصنيف لعرض الوجهات المناسبة.</p>

      <!-- أزرار الفلترة — مطابقة للمطلوب -->
      <div class="filters">
        <button class="filter-btn active" data-filter="All">الكل</button>
        <button class="filter-btn" data-filter="Beach">شاطئ</button>
        <button class="filter-btn" data-filter="Historic">تاريخي</button>
        <button class="filter-btn" data-filter="Museum">متاحف</button>
        <button class="filter-btn" data-filter="Landmark">معالم</button>
      </div>
    </section>

    <!-- معرض الوجهات — AJAX سيعرض المحتوى هنا -->
    <section id="gallery" class="gallery">
      <p class="loading">جارٍ تحميل الوجهات...</p>
    </section>

  </main>

  <!-- ========== FOOTER ========== -->
  <footer class="site-footer">
    <div class="container">
      <p>© Marsa — Jeddah 2025</p>
    </div>
  </footer>

  <!-- ملفات JS -->
  <script src="js/ajax.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
