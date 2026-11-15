(function () {
  var btn = document.querySelector('.menu-btn');
  var header = document.querySelector('.site-header');
  if (!btn || !header) return;
  header.classList.add('js');
  btn.hidden = false;
  btn.addEventListener('click', function () {
    var open = header.classList.toggle('open');
    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    btn.textContent = open ? 'Close' : 'Menu';
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && header.classList.contains('open')) { btn.click(); btn.focus(); }
  });
  var err = document.getElementById('errors');
  if (err) err.focus();
})();
