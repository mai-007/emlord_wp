export default function dropdownMenu() {
  const navItems = document.querySelectorAll('.c-nav__li');

  navItems.forEach((navItem) => {
    const dropMenu = navItem.querySelector('.c-dropMenu');

    if (dropMenu) {
      navItem.addEventListener('click', (event) => {
        event.preventDefault(); // リンクのクリックイベントを無効化する
        event.stopPropagation(); // イベントの伝播を止める

        // クリックした.nav__li内の.dropMenuが表示されている場合は非表示にし、非表示の場合は表示する
        if (dropMenu.classList.contains('is-show')) {
          // dropMenu.classList.remove('is-show');
        } else {
          // 他のすべての.dropMenuを非表示にする（オプション）
          navItems.forEach((item) => {
            const otherDropMenu = item.querySelector('.c-dropMenu');
            if (otherDropMenu && otherDropMenu !== dropMenu) {
              otherDropMenu.classList.remove('is-show');
            }
          });

          dropMenu.classList.add('is-show');
        }
      });
    }
  });

  // ドキュメント全体のクリックイベントを使って、ドロップダウンメニュー外をクリックした場合は非表示にする
  document.addEventListener('click', (event) => {
    if (!event.target.closest('.c-nav__li')) {
      navItems.forEach((navItems) => {
        const dropMenu = navItems.querySelector('.c-dropMenu');
        console.log(dropMenu);
        if (dropMenu) {
          dropMenu.classList.remove('is-show');
        }
      });
    }
  });
}
