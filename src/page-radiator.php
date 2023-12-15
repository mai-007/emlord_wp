<?php
/*
Template Name: ラジエーター
*/
?>
<?php get_header(); ?>
<section class="l-section03--bg01 section01">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">お出かけ時のオーバーヒートを予防</h2>
      <p class="c-title__l__sub">
        Drive with confidence
      </p>
    </div>

    <div class="c-title__l__textL">
      <p>
        こんな症状でお困りではないですか？
      </p>
    </div>
    <ul class="c-title__l__list">
      <?php
      $radiatorChecks = [
        "水温計の針がいつも上がっている",
        "点検時に冷却水が減っていると言われた"
      ]; ?>
      <?php foreach ($radiatorChecks as $value) : ?>
      <li class="c-title__l__list__item">
        <img src="<?php echo get_theme_img('common/check-white.svg'); ?>" alt="">
        <?php echo $value; ?>
      </li>
      <?php endforeach; ?>
    </ul>
    <p class="c-box03">
      ラジエーター液の劣化・不足、またはラジエーターキャップの劣化が原因です。
    </p>
  </div>
</section>
<!--price -->
<section id="price" class="l-section02 section02">
  <div class="c-title">
    <h3 class="c-title__l">
      料金表
    </h3>
    <p class="c-title__l__sub">
      Price
    </p>
  </div>
  <div class="c-boxBorder l-containerM">
    <?php
    $radiatorMenus = [
      "title" => "ロングライフクーラント",
      "subTitle" => [
        "オーバーヒートを防ぐ",
        "凍結を防ぐ",
        "サビを防ぐ",
        "泡を消す"
      ],
      "text" => "長期間利用して液が劣化すると、ラジエーター内にサビや腐食などが発生して冷却機能が低下し、最終的にはオーバーヒートの原因となります。<br>早めのクリーニングまたは交換をお勧めします。",
      "menu" => [
        "LLCクリーニング" => [
          "type" => [
            "軽自動車",
            "普通車",
            "大型車"
          ],
          "name" => [
            "LLCクリーニング" => [
              "¥4,400",
              "¥5,500",
              "¥6,600"
            ],
            "ラジエーターキャップ" => [
              "¥1,815",
              "",
              "",
            ],
            "クーラント補充/1本" => [
              "¥3,270",
              "",
              "",
            ],
          ]
        ],
      ]
    ]; ?>
    <dl class="c-boxBorder__header">
      <dt class="c-boxBorder__header__title">
        <span class="u-square"></span>
        <?php echo $radiatorMenus['title']; ?>
      </dt>
      <?php foreach ($radiatorMenus['subTitle'] as $subTitle) : ?>
      <dd class="c-boxBorder__header__subTitle">
        <?php echo $subTitle; ?>
      </dd>
      <?php endforeach; ?>
    </dl>
    <p class="c-boxBorder__header__recommendText">
      <?php echo $radiatorMenus['text']; ?></p>
    <div class="section02__contents">
      <?php foreach ($radiatorMenus["menu"] as $menuTitle => $menuDetailes) : ?>
      <table class="c-table">
        <tbody class="js-scrollable">
          <tr class="c-table__tr">
            <th class="c-table__type--blank">&nbsp;</th>
            <?php foreach ($menuDetailes['type'] as $typeIndex => $type) : ?>
            <th class="c-table__type">
              <?php echo $type; ?>
            </th>
            <?php endforeach; ?>
          </tr>
          <?php foreach ($menuDetailes['name'] as $name => $price) : ?>
          <tr class="c-table__tr">
            <th class="c-table__des--short">
              <?php echo $name; ?>
            </th>
            <?php foreach ($price as $value) : ?>
            <td class="c-table__price">
              <?php echo $value; ?>
            </td>
            <?php endforeach; ?>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php endforeach; ?>
    </div>

  </div>
</section>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
