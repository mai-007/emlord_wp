export default function serviceTab() {
  const tabMenus = document.querySelectorAll('.c-service__tabs__item');
  tabMenus[0].classList.add('is-active');

  tabMenus.forEach((tabMenu) => {
    tabMenu.addEventListener('click', tabSwitch);
  });

  function tabSwitch(e) {

    // クリックされた要素のデータ属性を取得
    const tabTargetData = e.currentTarget.dataset.tab;

    // クリックされた要素の親要素と、その子要素を取得
    const tabList = e.currentTarget.closest('.c-service__tabs');

    const tabItems = tabList.querySelectorAll('.c-service__tabs__item');

    // クリックされた要素の親要素の兄弟要素の子要素を取得
    const tabPanelItems = tabList.nextElementSibling.querySelectorAll('.c-service__wrapper');

    // クリックされたtabの同階層のmenuとpanelのクラスを削除
    tabItems.forEach((tabItem) => {
      tabItem.classList.remove('is-active');
    })
    tabPanelItems.forEach((tabPanelItem) => {
      tabPanelItem.classList.remove('is-show');
    })
     // クリックされたmenu要素にis-activeクラスを付加
  e.currentTarget.classList.add('is-active');

  // クリックしたmenuのデータ属性と等しい値を持つパネルにis-showクラスを付加
  tabPanelItems.forEach((tabPanelItem) => {
    if (tabPanelItem.dataset.panel ===  tabTargetData) {
      tabPanelItem.classList.add('is-show');
    }
  })
  }

}
