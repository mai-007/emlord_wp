export default function dropdownMenu() {
  const dropMenu = document.querySelectorAll('.c-nav__li');
  const dropItems = document.querySelectorAll('.c-nav__dropMenu');

  // ドキュメント全体にクリックイベントを設定
  document.addEventListener('click', function(e) {
    // クリックされた要素がドロップダウンメニューの要素またはドロップダウンメニューの親要素でない場合
    if (!e.target.closest('.c-nav__li') && !e.target.closest('.c-nav__dropMenu')) {
      dropItems.forEach((dropItem) => {
        dropItem.classList.remove('is-show');
      });
    }
  });

  dropMenu.forEach((dropMenu) => {
    dropMenu.addEventListener('mouseover', dropSwitch);
  });

  function dropSwitch(e) {
    const dropTargetData = e.currentTarget.dataset.tab;
    const dropList = e.currentTarget.closest('.c-nav__li');
    const dropItem = dropList.querySelectorAll('.c-nav__dropMenu');

    dropItem.forEach((dropItem) => {
      dropItem.classList.remove('is-show');
    });

    dropItem.forEach((dropItem) => {
      if (dropItem.dataset.panel === dropTargetData) {
        dropItem.classList.add('is-show');
      }
    });
  }
}
