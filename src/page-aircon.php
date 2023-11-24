<?php
/*
Template Name: エアコン
*/
?>
<?php get_header(); ?>
<section class="l-section03--bg01 section01">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">車内環境を快適に</h2>
      <p class="c-title__l__sub">
        Air-Conditioning
      </p>
    </div>

    <div class="c-title__l__textL">
      <p>
        こんな症状でお困りではないですか？
      </p>
    </div>
    <ul class="c-title__l__list">
      <?php
      $airconChecks = [
        "エアコンの効きが悪くなった",
        "エアコンから「キー」という音がする"
      ]; ?>
      <?php foreach ($airconChecks as $value) : ?>
        <li class="c-title__l__list__item">
          <img src="<?php echo get_theme_img('common/check-white.svg'); ?>" alt="">
          <?php echo $value; ?>
        </li>
      <?php endforeach; ?>
    </ul>
    <p class="c-box03">
      クーラーガスの量(過不足)や劣化・コンプレッサーが故障・損傷している可能性があります。
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
    $airconMenus = [
      "title" => "エアコンガスクリーニング",
      "subTitle" => "各種作業・交換の目安：<span class='u-bold'>1万km</span>または<span class='u-bold'>1年</span>",
      "text" => "エアコンが冷えるために必要なフロントガスを完全再生!<br>不純物を取り除くと同時に、正規のガス量を充填することで新車時の涼しさが復活します。",
      "menu" => [
        "エアコン作業" => [
          "type" => [
            "一般車/真空引き",
            "国産車/循環式",
          ],
          "name" => [
            "一般車" => [
              "2,500",
              "2,680"
            ],
            "ハイブリット車" => [
              "2,500",
              "2,680"
            ],
          ]
        ],
        "ケミカル単品補充" => [
          "type" => [
            "エアコンオイル",
            "エアコンガス補充",
            "ガス補充工賃",
          ],
          "prices" => [
            "2,420",
            "2,420",
            "3,300"
          ],
        ],
        "エアコン機器メンテナンス" => [
          "type" => [
            "エアコンフィルター",
            "エアコンフィルター工賃",
            "エバポレーター消臭(カーエボ)",
            "コア戦場",
          ],
          "prices" => [
            "3,630~5,440",
            "1,100~",
            "6,050",
            "4,400"
          ],
        ]
      ]
    ]; ?>
    <dl class="c-boxBorder__header">
      <dt class="c-boxBorder__header__title">
        <span class="u-square"></span>
        <?php echo $airconMenus['title']; ?>
      </dt>
      <dd class="c-boxBorder__header__subTitle">
        <?php echo $airconMenus['subTitle']; ?>
      </dd>
    </dl>
    <p class="c-boxBorder__header__recommendText">
      <?php echo $airconMenus['text']; ?></p>
    <div class="section02__contents">
      <?php foreach ($airconMenus["menu"] as $menuTitle => $menuDetailes) : ?>
        <?php if (isset($menuDetailes['name'])) : ?>
          <h5 class="c-option__title">
            <?php echo $menuTitle; ?>
          </h5>
          <table class="c-table">
            <tbody>
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
                  <th class="c-table__des--short u-bgDeepBlue">
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
        <?php else : ?>
          <h5 class="c-option__title">
            <?php echo $menuTitle; ?>
          </h5>
          <table class="c-table">
            <tbody>
              <tr>
                <?php foreach ($menuDetailes['type'] as $typeIndex => $type) : ?>
                  <th class="c-table__type c-table__type--top">
                    <?php echo $type; ?>
                  </th>
                <?php endforeach; ?>
              </tr>
              <tr>
                <?php foreach ($menuDetailes['prices'] as $value) : ?>
                  <td class="c-table__price">
                    <?php echo $value; ?>
                  </td>
                <?php endforeach; ?>
              </tr>
            </tbody>
          </table>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php include('inc/askedQuestions.php'); ?>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
