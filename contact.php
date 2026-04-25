<?php include 'header.php'; ?>
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

  <?php include 'footer.php'; ?>