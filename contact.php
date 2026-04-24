<!doctype html>
<html lang="ar">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>تواصل معنا — Marsa</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <h1 class="logo">Marsa — Jeddah</h1>
      <button id="nav-toggle-4" class="nav-toggle" aria-expanded="false">☰</button>
      <nav class="main-nav" id="main-nav-4">
        <a href="index.html">الرئيسية</a>
        <a href="about.html">عن جدة</a>
        <a href="destinations.html">الوجهات</a>
        <a href="contact.html">تواصل معنا</a>
      </nav>
    </div>
  </header>

  <main class="container">
    <section class="contact-section">
      <h2>تواصل معنا</h2>
      <form id="contact-form" novalidate>
        <label>الاسم
          <input type="text" id="name" name="name" required>
        </label>

        <label>الإيميل
 <input type="email" id="email" name="email" required>
        </label>

        <label>نوع الطلب
          <select id="topic" name="topic">
            <option value="inquiry">استفسار</option>
            <option value="booking">حجز</option>
            <option value="info">معلومات</option>
          </select>
        </label>

        <label>الرسالة
          <textarea id="message" name="message" rows="5" required></textarea>
        </label>

        <button type="submit" class="btn">إرسال</button>
      </form>

      <div id="form-result" role="status" aria-live="polite"></div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <p>© Marsa — Jeddah 2025</p>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>