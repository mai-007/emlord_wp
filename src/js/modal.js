document.addEventListener('DOMContentLoaded', function() {
  var modalTriggers = document.querySelectorAll('.c-button02.modal-trigger');
  var modals = document.querySelectorAll('.l-modal');
  var modalOverlay = document.querySelector('.l-modal-overlay');

  modalTriggers.forEach(function(trigger) {
    trigger.addEventListener('click', function() {
      var modalId = this.getAttribute('data-target');
      var modalElement = document.getElementById(modalId);

      // 対応するモーダルとオーバーレイを表示
      modalElement.style.display = 'block';
      modalOverlay.style.display = 'block';

      // モーダルの上部から100px上の位置にスクロール
      var offset = modalElement.getBoundingClientRect().top + window.scrollY - 120;
      window.scrollTo({
        top: offset,
        behavior: 'smooth'
      });

      // オーバーレイがクリックされたときの処理
      modalOverlay.addEventListener('click', function(event) {
        if (!event.target.closest('.l-modal')) {
          modals.forEach(function(modal) {
            modal.style.display = 'none';
          });
          modalOverlay.style.display = 'none';
        }
      });
    });
  });

  // モーダルの閉じるボタンがクリックされたときの処理
  var closeButtons = document.querySelectorAll('.l-modal__close-btn');
  closeButtons.forEach(function(button) {
    button.addEventListener('click', function() {
      var modal = this.closest('.l-modal');
      modal.style.display = 'none';
      modalOverlay.style.display = 'none';
    });
  });
});
