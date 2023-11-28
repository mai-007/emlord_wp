<?php
/*
Template Name: 保険
*/
?>
<?php get_header(); ?>
<section class="l-section03--bg01 section01">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        損害保険
      </h2>
      <p class="c-title__l__sub">
        Damage insurance
      </p>
    </div>
    <h3 class="c-title__l__textL u-align-center">
      お客様のカーライフに合わせた自動車保険のプランをご紹介します。
    </h3>
    <div class="p-insurance__flexBox">
      <div class="p-insurance__flexBox__text">
        <p>エムロードでは、個人・法人のお客様のあらゆるリスクに対応可能な各種損害保険を扱っております。（自動車保険・火災保険・地震保険・傷害保険など）ご相談させていただくのは、各種保険に精通した保険プランナー。</p>
        <p>お客様のご希望内容とご予算に合わせた最適な保険をご提案させていただきます。</p>
        <p>万が一の事故の際には、迅速な対応と保険の力を最大限活かした万全のサポートをお約束いたします。</p>
      </div>
      <img class="p-insurance__flexBox__image" src="<?php echo get_theme_img('insurance/insurance_image01.jpg'); ?>" alt="">
    </div>
    <div class="c-box03 p-insurance__handling">
      <h4 class="p-insurance__handling__title">
        取り扱い保険会社
      </h4>
      <div class="p-insurance__handling__inner">
        <img src="<?php echo get_theme_img('insurance/mitsui_sumitomo.svg'); ?>" alt="三井住友海上">
        <img src="<?php echo get_theme_img('insurance/sonpo_japan.svg'); ?>" alt="損保ジャパン">
        <img src="<?php echo get_theme_img('insurance/tokyou_kaijo_nitidou.svg'); ?>" alt="東京海上日動">
      </div>
    </div>
  </div>
</section>
<section class="l-section02 section02">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        生命保険
      </h2>
      <p class="c-title__l__sub">
        Life insurance
      </p>
    </div>
    <h3 class="c-title__l__textL u-align-center">
      損保と生保を一括管理することでわかりやすい<br>「ひとつの窓口」に。<br>保険を通じて末永いおつきあい。
    </h3>
    <div class="p-insurance__flexBox">
      <div class="p-insurance__flexBox__text">
        <p>エムロードでは保険の総合窓口として、損害保険のほかにも生命保険を各社取り扱っております。</p>
        <p>例えば、ご家族の保険をまとめてお任せいただくと、事故があった時や保険内容の相談などの窓口がひとつになって、話が早く伝わりやすく便利です。</p>
        <p>また保障内容のムダや重複をライフスタイルの変化に合わせてチェックし、よりお客様にメリットの多い保険をご提案させていただきます。</p>
      </div>
      <img class="p-insurance__flexBox__image" src="<?php echo get_theme_img('insurance/insurance_image02.jpg'); ?>" alt="">
    </div>
    <!-- <div>
      <h4>さまざまなライフプランに対応</h4>
      <ul>
        <li>死後の整理資金</li>
        <li>生活立て直し資金</li>
        <li>相続対策資金</li>
        <li>老後の生活資金</li>
        <li>緊急予備資金</li>
        <li>長期療養資金</li>
        <li>遺族の生活資金</li>
        <li>教育資金</li>
        <li>子どもの結婚資金</li>
        <li>住宅購入資金</li>
        <li>家賃･ローン</li>
      </ul>
    </div> -->
    <div class="c-box03 p-insurance__handling">
      <h4 class="p-insurance__handling__title">取り扱い保険会社</h4>
      <div class="p-insurance__handling__inner">
        <img src="<?php echo get_theme_img('insurance/mitsui_sumitomo.svg'); ?>" alt="三井住友海上">
        <img src="<?php echo get_theme_img('insurance/sonpo_japan.svg'); ?>" alt="損保ジャパン">
        <img src="<?php echo get_theme_img('insurance/tokyou_kaijo_nitidou.svg'); ?>" alt="東京海上日動">
        <img src="<?php echo get_theme_img('insurance/aflac.svg'); ?>" alt="Aflac(アフラック)">
      </div>
    </div>
  </div>
</section>
<section class="l-section02--bg03 section03">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        よくある質問
      </h2>
      <p class="c-title__l__sub">
        Asked Questions
      </p>
      <p class="c-title__l__text u-align-center">
        損害保険や生命保険についてのよくあるご質問（外部リンク）</p>
      <div class="l-flexRowToColumn">
        <button class="c-button01 l-section--half">
          <a href="http://www.sonpo.or.jp" target="_blank" rel="noopener noreferrer">
            社団法人 日本損害保険協会
            <img src="<?php echo get_theme_img('common/externalLinks.svg'); ?>" alt="">
          </a>
        </button>
        <button class="c-button01 l-section--half">
          <a href="http://www.seiho.or.jp" target="_blank" rel="noopener noreferrer">
            社団法人 日本生命保険協会
            <img src="<?php echo get_theme_img('common/externalLinks.svg'); ?>" alt="">
          </a>
        </button>
      </div>
    </div>
  </div>
</section>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
