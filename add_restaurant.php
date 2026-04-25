<!doctype html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8" />
  <title>إضافة مطعم جديد — Marsa Jeddah</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <h1 class="logo">Marsa — Jeddah</h1>
      <nav class="main-nav">
        <a href="index.html">الرئيسية</a>
        <a href="restaurants.php">المطاعم</a>
      </nav>
    </div>
  </header>

  <main class="container">
    <section class="contact-section">
      <h2 style="color: var(--accent);">إضافة مطعم جديد</h2>
      <p>عبئي البيانات التالية لإضافة مطعم لقائمة مرسى جدة:</p>

      <form action="save_restaurant.php" method="POST" enctype="multipart/form-data">
        <label>
          اسم المطعم:
          <input type="text" name="name" placeholder="مثال: سنشري برجر" required>
        </label>

        <label>
          تصنيف المطبخ:
          <select name="category">
            <option value="Fast Food">وجبات سريعة</option>
            <option value="Lebanese">لبناني</option>
            <option value="Italian">إيطالي</option>
            <option value="Cafe">كافيه</option>
          </select>
        </label>

        <label>
          وصف قصير للمطعم:
          <textarea name="description" rows="4" placeholder="اكتبي وصفاً مختصراً هنا..." required></textarea>
        </label>

        <label>
          تحميل صورة المطعم:
          <input type="file" name="image" accept="image/*">
        </label>

        <button type="submit" class="btn">حفظ المطعم</button>
      </form>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <p>© Marsa — Jeddah 2025</p>
    </div>
  </footer>
</body>
</html>