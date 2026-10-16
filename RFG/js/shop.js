document.addEventListener('DOMContentLoaded', () => {
    if (document.getElementById('catalogBtn') && document.getElementById('catalog')) {
      let catalogBtn = document.getElementById('catalogBtn');
      let catalog = document.getElementById('catalog');
      catalogBtn.addEventListener('click', () => {
        catalog.classList.remove('book-wrap--hidden');
      })
    }

    /**/
const book   = document.getElementById('book');
const sheets = Array.from(book.querySelectorAll('.sheet'));

let current = 0;

// Стабильная раскладка "в покое"
function layoutZ() {
  const total = sheets.length;
  sheets.forEach((sheet, i) => {
    if (i < current) {
      sheet.style.zIndex = 100 + i;            // перевёрнутые
    } else {
      sheet.style.zIndex = 100 + (total - i);  // неперевёрнутые
    }
  });
}
layoutZ();

book.addEventListener('click', (e) => {
  const rect = book.getBoundingClientRect();
  const x = e.clientX - rect.left;
  if (x > rect.width / 2) flipForward();
  else                     flipBackward();
});

function flipForward() {
  if (current >= sheets.length) return;
  const sheet = sheets[current];

  // 1) Во время анимации лист — поверх всех
  sheet.style.zIndex = 1000;
  sheet.classList.add('flipped', 'moving');

  // 2) После анимации — фиксируем новое состояние стопки
  sheet.addEventListener('transitionend', function done(ev) {
    if (ev.propertyName !== 'transform') return;
    sheet.removeEventListener('transitionend', done);
    sheet.classList.remove('moving');
    current++;
    layoutZ();          // теперь порядок пересчитается корректно
  });
}

function flipBackward() {
  if (current <= 0) return;
  current--;
  const sheet = sheets[current];

  // Возвращаемся: лист тоже должен быть сверху во время анимации
  sheet.style.zIndex = 1000;
  sheet.classList.remove('flipped');
  sheet.classList.add('moving');

  sheet.addEventListener('transitionend', function done(ev) {
    if (ev.propertyName !== 'transform') return;
    sheet.removeEventListener('transitionend', done);
    sheet.classList.remove('moving');
    layoutZ();
  });


}

})