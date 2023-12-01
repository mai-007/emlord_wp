<?php
/*
Template Name: キズ・凹み(鈑金)
*/
?>

<?php get_header(); ?>
<section class="l-section03--bg01 section01">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        代車20台完備、専門スタッフによる<br>
        充実のサポート体制。
      </h2>
      <p class="c-title__l__sub">
        Repair
      </p>
    </div>

    <div class="section01__main l-flexRowToColumn">
      <div class="l-section--half">
        <img src="<?php echo get_theme_img('repair/repair_image01.jpg'); ?>" alt="">
      </div>
      <div class="l-section--half">
        <p>
          カーバンケンズはエムロードの自社鈑金工場です。
          お車の気になるキズ・ヘコミはもちろん、 小さな事故から大きな事故までワンストップで修理受付いたします。
        </p>
      </div>
    </div>

    <div class="c-carBankenz">
      <div>
        <img class="c-carBankenz__title" src="<?php echo get_theme_img('repair/repair_image02.jpg'); ?>" alt="
            熊本のあんしん鈑金塗装はカーバンケンズ">
        <address class="c-carBankenz__address">
          〒860-0824　熊本市南区十禅寺3-1-11
        </address>
        <p class="c-carBankenz__time">
          08：00～19：00（平日・祭日）日曜定休
        </p>
        <a class="c-carBankenz__tel" href="tel:096-319-5110">
          <img class="c-carBankenz__tel__image" src="<?php echo get_theme_img('common/phone.svg'); ?>" alt="">
          096-319-5110
        </a>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3354.500708157708!2d130.6978922!3d32.7789805!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3540f48cf766e915%3A0xa0a28ec78cbf326e!2z44CSODYwLTA4MjQg54aK5pys55yM54aK5pys5biC5Y2X5Yy65Y2B56aF5a-677yT5LiB55uu77yR4oiS77yR77yRIOOCqOODoOODreODvOODieOBrumIkemHkeW3peWgtOOCq-ODvOODkOODs-OCseODs-OCug!5e0!3m2!1sja!2sjp!4v1700553896558!5m2!1sja!2sjp" width="420" height="297" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!--LinkInPage -->
    <div class="c-linkInPage">
      <button class="c-linkInPage__btn">
        <a href="#repairService">3つの安心</a>
      </button>
      <button class="c-linkInPage__btn">
        <a href="#repairCase">修理事例</a>
      </button>
      <button class="c-linkInPage__btn">
        <a href="#QA">よくある質問</a>
      </button>
    </div>
  </div>
</section>

<section id="repairService" class="l-section02 section02">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        3つの安心サービス
      </h2>
      <p class="c-title__l__sub">Service</p>
    </div>
    <p class="section02__text">
      お客様のもしもの時にも、ＳＳ担当・保険担当・車販売の各担当が連携しながら、万全な対応が出来るように心掛けております。
    </p>
    <p class="section02__text">
      確かな技術と安心してご利用いただけるサービスで、お客様の車を美しく鈑金修理いたします！
    </p>
    <?php
    $repairServices = [
      [
        "image" => "repair/repair_image03.png",
        "alt" => "事故鈑金対応します！",
        "text" => "フロント、塗装、鈑金、ドライバーの専門スタッフで大きな事故でも万全の対応が可能。",
      ],
      [
        "image" => "repair/repair_image04.png",
        "alt" => "代車無料",
        "text" => "代車22台（無料）、レンタカー4台（有料）でお仕事や生活に不自由なく修理可能。",
      ],
      [
        "image" => "repair/repair_image05.png",
        "alt" => "保険会社との交渉も代行",
        "text" => "各保険会社との交渉も代行いたします。<br>ご安心ください。",
      ],

    ]; ?>
    <?php foreach ($repairServices as $repairService) : ?>
      <div class="p-repair__service">
        <img src="<?php echo get_theme_img($repairService["image"]); ?>" alt="<?php echo $repairService["alt"]; ?>">
        <p class="p-repair__service__text">
          <?php echo $repairService["text"]; ?>
        </p>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<section id="repairCase" class="l-section02--bg02 section03">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        修理事例
      </h2>
      <p class="c-title__l__sub">Repair Case</p>
    </div>
    <div class="c-title__l__text">
      <p>
        ちょっとのキズから大きなキズ・凹みまで。
      </p>
      <p>
        困った時は、どうぞお気軽にご相談ください。
      </p>
    </div>
    <?php
    $repairCases = [
      [
        "case" => "落ち込みキズ",
        "price" => "50,000",
        "image" => "repair/repair_image06.jpg",
      ],
      [
        "case" => "迷いキズ",
        "price" => "30,000",
        "image" => "repair/repair_image07.jpg",
      ],
      [
        "case" => "悩みキズ",
        "price" => "20,000",
        "image" => "repair/repair_image08.jpg",
      ],
      [
        "case" => "かすりキズ",
        "price" => "10,000",
        "image" => "repair/repair_image09.jpg",
      ],
    ]; ?>
    <div class="l-flexRowToColumn">
      <?php foreach ($repairCases as $repairCase) : ?>
        <dl class="c-box04">
          <div class="c-box04__box">
            <dt class="c-box04__box__title">
              <?php echo $repairCase['case']; ?>
            </dt>
            <dd class="c-box04__box__price">
              ¥<?php echo $repairCase['price']; ?>
            </dd>
          </div>
          <dd class="c-box04__image">
            <img src="<?php echo get_theme_img($repairCase['image']); ?>" alt="">
          </dd>
        </dl>
      <?php endforeach; ?>
    </div>
    <div class="p-repair__coupon"></div>
    <div class="c-carBankenz">
      <div>
        <img class="c-carBankenz__title" src="<?php echo get_theme_img('repair/repair_image02.jpg'); ?>" alt="
            熊本のあんしん鈑金塗装はカーバンケンズ">
        <address class="c-carBankenz__address">
          〒860-0824　熊本市南区十禅寺3-1-11
        </address>
        <p class="c-carBankenz__time">
          08：00～19：00（平日・祭日）日曜定休
        </p>
        <a class="c-carBankenz__tel" href="tel:096-319-5110">
          <img class="c-carBankenz__tel__image" src="<?php echo get_theme_img('common/phone.svg'); ?>" alt="">
          096-319-5110
        </a>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3354.500708157708!2d130.6978922!3d32.7789805!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3540f48cf766e915%3A0xa0a28ec78cbf326e!2z44CSODYwLTA4MjQg54aK5pys55yM54aK5pys5biC5Y2X5Yy65Y2B56aF5a-677yT5LiB55uu77yR4oiS77yR77yRIOOCqOODoOODreODvOODieOBrumIkemHkeW3peWgtOOCq-ODvOODkOODs-OCseODs-OCug!5e0!3m2!1sja!2sjp!4v1700553896558!5m2!1sja!2sjp" width="420" height="297" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>
<?php include('inc/askedQuestions.php'); ?>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
