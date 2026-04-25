<?php include 'header.php'; ?>
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
<?php include 'footer.php'; ?>