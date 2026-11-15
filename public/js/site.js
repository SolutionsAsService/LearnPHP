(function () {
  var btn = document.querySelector('.menu-button');
  var nav = document.getElementById('site-nav');
  if (!btn || !nav) return;
  document.documentElement.classList.add('js');
  btn.hidden = false;
  function set(open) {
    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    btn.querySelector('.menu-label').textContent = open ? 'Close' : 'Menu';
    nav.classList.toggle('open', open);
  }
  btn.addEventListener('click', function () { set(btn.getAttribute('aria-expanded') !== 'true'); });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && nav.classList.contains('open')) { set(false); btn.focus(); }
  });
  var s = document.getElementById('error-summary');
  if (s) s.focus();
})();
