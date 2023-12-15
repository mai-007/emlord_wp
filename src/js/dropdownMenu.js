export default function dropdownMenu() {
  document.addEventListener('DOMContentLoaded', function () {
    const nav = document.getElementById('nav');

    nav.addEventListener('click', (event) => {
      const targetNavItem = event.target.closest('.c-nav__li');

      if (targetNavItem) {
        const dropMenu = targetNavItem.querySelector('.c-dropMenu');

        if (dropMenu) {
          event.stopPropagation(); // イベントの伝播を止める
          console.log('click');

          // クリックした.nav__li内の.dropMenuが表示されている場合は非表示にし、非表示の場合は表示する
          if (dropMenu.classList.contains('is-show')) {
            // dropMenu.classList.remove('is-show');
          } else {
            // 他のすべての.dropMenuを非表示にする（オプション）
            nav.querySelectorAll('.c-dropMenu.is-show').forEach((otherDropMenu) => {
              otherDropMenu.classList.remove('is-show');
            });

            dropMenu.classList.add('is-show');
          }
        }
      }
    });

    // ドキュメント全体のクリックイベントを使って、ドロップダウンメニュー外をクリックした場合は非表示にする
    document.addEventListener('click', (event) => {
      if (!event.target.closest('.c-nav__li')) {
        nav.querySelectorAll('.c-dropMenu.is-show').forEach((dropMenu) => {
          dropMenu.classList.remove('is-show');
        });
      }
    });
  });
}
