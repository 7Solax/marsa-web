// main.js
document.addEventListener('DOMContentLoaded', () => {
  // Nav toggle for all pages (works with any header)
  document.querySelectorAll('.nav-toggle').forEach(btn => {
    btn.addEventListener('click', () => {
      const nav = btn.nextElementSibling;
      if (!nav) return;
      const expanded = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', !expanded);
      nav.style.display = expanded ? '' : 'flex';
    });
  });

  // Contact form handling (if present)
  const form = document.getElementById('contact-form');
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const message = document.getElementById('message').value.trim();
      const result = document.getElementById('form-result');

      // Simple validation
      if (!name || !email || !message) {
        result.textContent = 'يرجى ملء جميع الحقول المطلوبة.';
        result.style.color = 'crimson';
        return;
      }
      // basic email regex
  const emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRe.test(email)) {
        result.textContent = 'صيغة البريد الإلكتروني غير صحيحة.';
        result.style.color = 'crimson';
        return;
      }

      // success (here we just show message; integration مع backend غير مطلوب)
      result.textContent = 'تم إرسال الرسالة بنجاح! سنوافيك بالرد قريبًا.';
      result.style.color = 'green';
      form.reset();
    });
  }
});