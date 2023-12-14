<?php
/*
Template Name: ブレーキ
*/
?>
<?php get_header(); ?>
<section class="l-section03--bg01 section01">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">大切なブレーキ、点検してますか？</h2>
      <p class="c-title__l__sub">
        Brake
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
        "ブレーキペダルの踏みしろが大きくなった",
        "ブレーキから「キーキー」という音がする"
      ]; ?>
      <?php foreach ($radiatorChecks as $value) : ?>
      <li class="c-title__l__list__item">
        <img src="<?php echo get_theme_img('common/check-white.svg'); ?>" alt="">
        <?php echo $value; ?>
      </li>
      <?php endforeach; ?>
    </ul>
    <p class="c-box03">
      ブレーキパッドが摩耗している可能性があります。
    </p>
    <!-- <div class="l-flexRowToColumn">
      <p>ディスクブレーキは、ディスクキャリパー内部に組み込まれているピストンが、ブレーキパッドを押しつけ、強力な摩擦力によって、ブレーキをかける仕組みです。</p>
      <img src="<?php echo get_theme_img('brake/image01.png'); ?>" alt="">
    </div> -->
    <!-- <div class="c-title__l__textL">
      <p>
        パーキングブレーキ
      </p>
    </div>
    <ul class="c-title__l__list">
      <?php
      $radiatorChecks = [
        "効きが悪い・・・",
        "引きしろ(踏みしろ)が大きい・・・"
      ]; ?>
      <?php foreach ($radiatorChecks as $value) : ?>
        <li class="c-title__l__list__item">
          <img src="<?php echo get_theme_img('common/check-white.svg'); ?>" alt="">
          <?php echo $value; ?>
        </li>
      <?php endforeach; ?>
    </ul>
    <p class="c-box03">
      パッド・ライニングが減少している可能性があります。
    </p>
    <div class="l-flexRowToColumn">
      <div>
        <p>パーキングブレーキの引きしろ（踏みしろ）
          が大きい場合はワイヤーを調整することで、元の状態に戻すことができます。</p>
        <p>メーカーによって異なりますが、ノッチ音（レバーを引いた時のカチカチ音）が4〜8ノッチの範囲が、一般的な基準とされています。</p>
        <p>引きしろ（踏みしろ）が大きいと、坂道などで駐車中に車が勝手に動き出してしまう危険性があります。</p>
      </div>
      <img src="<?php echo get_theme_img('brake/image02.png'); ?>" alt="">
    </div> -->
  </div>
</section>
<section class="l-section02--bg04 section02">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">料金</h2>
      <p class="c-title__l__sub">
        Price
      </p>
    </div>
    <div class="c-boxBorder">
      <div class="p-battery__priceBox">
        <dl class="c-boxBorder__header">
          <dt class="c-boxBorder__header__title">
            <span class="u-square"></span>
            ブレーキフルード交換
          </dt>
          <dd class="c-boxBorder__header__subTitle">
            2年に一度または、走行距離2万km前後
          </dd>
        </dl>
        <p class="c-boxBorder__header__recommendText">
          一般的な自動車に搭載されている、油圧式ブレーキの内部を満たしているオイルのことです。わかりやすく“ブレーキオイル”と呼ばれることもあります。
        </p>
        <table class="c-table">
          <tbody>
            <tr class="c-table__tr">
              <th class="c-table__type">
                全量交換
              </th>
              <th class="c-table__type">
                カップ交換
              </th>
            </tr>
            <tr class="c-table__tr">
              <td class="c-table__price">
                ¥6,600~
              </td>
              <td class="c-table__price">
                ¥2,200
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="u-textS">
        ※一部国産車・輸入車につきましては追加料金もしくはお取り扱いできない場合がございます。
      </p>
    </div>
</section>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
