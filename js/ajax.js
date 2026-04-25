// ajax.jsdocument.addEventListener('DOMContentLoaded', () => {const gallery = document.getElementById("gallery");const gallery = document.getElementById("gallery");
const filterButtons = document.querySelectorAll(".filter-btn");

let allItems = [];

// تحميل JSON
fetch("destinations.json")

  .then(res => res.json())
  .then(data => {
    allItems = data;
    displayItems(allItems); // عرض جميع الوجهات
  })
  .catch(err => {
    gallery.innerHTML = "<p>حدث خطأ في تحميل البيانات.</p>";
  });

// عرض العناصر
function displayItems(items) {
  if (items.length === 0) {
    gallery.innerHTML = "<p>لا توجد وجهات في هذا التصنيف.</p>";
    return;
  }

  gallery.innerHTML = items.map(item => `
    <div class="dest-card">
      <img src="${item.image}" alt="${item.name}">
      <h3>${item.name}</h3>
      <span class="type">${item.type}</span>
    </div>
  `).join("");
}

// الفلترة
filterButtons.forEach(btn => {
  btn.addEventListener("click", () => {

    filterButtons.forEach(b => b.classList.remove("active"));
    btn.classList.add("active");

    const filter = btn.dataset.filter;

    if (filter === "All") {
      displayItems(allItems);
    } else {
      const filtered = allItems.filter(item => item.type === filter);
      displayItems(filtered);
    }

  });
});

