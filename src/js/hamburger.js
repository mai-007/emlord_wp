export default function hamburger() {
  const trigger = document.getElementById('js-hamburger');
  const wrap = document.getElementById('js-hamburger-wrap');
  const target = document.getElementsByClassName('js-hamburger__bar');
  const nav = document.getElementById('js-nav');

  if (trigger && wrap && target && nav) {
    trigger.addEventListener('click', function () {
      wrap.classList.toggle('active');
      nav.classList.toggle('active');
      for (var i = 0; i < target.length; ++i) target[i].classList.toggle('active');
    });
  }
}
