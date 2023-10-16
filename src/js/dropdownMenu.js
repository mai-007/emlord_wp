export default function dropdownMenu() {
  const dropMenu = document.querySelectorAll('.c-nav__li');
  const navMenu = document.getElementById('js-nav').children;
  const dropItems = document.querySelectorAll('.c-nav__dropMenu');
  const elemBody = document.querySelector('body');

  elemBody.addEventListener('click', e => {
    if (e.target == dropItem) {
      dropItems.forEach((dropItems) => {
        dropItems.classList.remove('is-show');
        })
    }
  });


  dropMenu.forEach((dropMenu) => {
    dropMenu.addEventListener('mouseover', dropSwitch);
  });

  function dropSwitch(e) {
    // クリックされた要素のデータ属性を取得
    const dropTargetData = e.currentTarget.dataset.tab;
    // クリックされた要素の親要素と、その子要素を取得
    const dropList = e.currentTarget.closest('.c-nav__li');
    // クリックされた要素の中の表示したい要素
    const dropItem = dropList.querySelectorAll('.c-nav__dropMenu');

    dropItem.forEach((dropItem) => {
      dropItem.classList.remove('is-show');
    })
  // クリックしたmenuのデータ属性と等しい値を持つパネルにis-showクラスを付加
  dropItem.forEach((dropItem) => {
    if (dropItem.dataset.panel ===  dropTargetData) {
      dropItem.classList.add('is-show');
    }
  })
  }
}
