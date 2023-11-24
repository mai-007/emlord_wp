<?php
/*
Template Name: オイル
*/
?>
<?php get_header(); ?>
<section class="l-section03--bg01 section01">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        プロの視点で<br>
        お車に合ったオイル交換をご提案。
      </h2>
      <p class="c-title__l__sub">
        Oil Change
      </p>
    </div>
    <div class="c-title__text">
      <p>
        エンジンオイル、オートマチックオイル（ＡＴ/ＣＶＴ）、車にはいろいろなオイルが使われています。 オイルを交換しないで長く走行すると、添加剤の消耗や熱・空気による酸化、混入物による汚れが発生し、燃費の悪化やパワーダウンを引き起こします。
      </p>
      <p>
        また、オイルは使われなくても劣化してしまいます。大切な愛車を長く安全にお乗りいただくため、エムロードでは定期的なオイル交換をお勧めしています。
      </p>
    </div>

    <!--LinkInPage -->
    <div class="c-linkInPage">
      <button class="c-linkInPage__btn">
        <a href="#oilChange">オイル交換について</a>
      </button>
      <button class="c-linkInPage__btn">
        <a href="#price">交換料金</a>
      </button>
      <button class="c-linkInPage__btn">
        <a href="#QA">よくある質問</a>
      </button>
    </div>
  </div>
</section>

<section id="oilChange" class="l-section02--bg02 section02">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        オイル交換について
      </h2>
      <p class="c-title__l__sub">
        How to oil Change
      </p>
    </div>
    <div class="c-title__text">
      <p>お車のウインドウにこんなステッカーが貼られていませんか？</p>
      <?php
      $stickers = [
        [
          "image" => "oil/oil_image01.gif",
          "alt" => "低排出ガス車 基準75%低減",
        ],
        [
          "image" => "oil/oil_image02.gif",
          "alt" => "低排出ガス車 基準50%低減",
        ],        [
          "image" => "oil/oil_image03.gif",
          "alt" => "燃費基準＋5%達成",
        ],        [
          "image" => "oil/oil_image04.gif",
          "alt" => "燃費基準達成車",
        ],
      ]; ?>
    </div>
    <div class="section02__sticker">
      <?php foreach ($stickers as $key => $sticker) : ?>
        <img src="<?php echo get_theme_img($sticker['image']); ?>" alt="<?php echo $sticker['alt']; ?>">
      <?php endforeach; ?>
    </div>
    <div class="section02__catch">
      <p class="section02__catch__title">ECOカーのエンジン性能を最大限に<br>
        発揮させるために低粘度オイルを使いましょう。</p>
      <p class="section02__catch__text">
        オイルは「さらさら(低粘度)」なほどエンジン内部での抵抗が少なく、パワーの損失も最小限で済みます。</p>
      <p class="section02__catch__text">このため、省燃費性を重視して設計されたエンジンのほとんどは低粘度オイルの使用を推奨しています。
      </p>
    </div>
    <img class="section02__image" src="<?php echo get_theme_img('oil/oil_image05.jpg'); ?>" alt="">
    <div class="l-flexRowToColumn section02__oil">
      <div class="l-section--half section02__oil__item">
        <img src="<?php echo get_theme_img('oil/oil_image06.jpg'); ?>" alt="">
        <p>
          【化学合成油】 最新国際規格（API／SP、ILSAC／GF-6）の要求性能を凌駕する、当社技術の粋を集めた100％化学合成油エンジンオイル。 更なる顧客満足度向上を目指すため、省燃費性能、加速性能に加え、当社独自の指標である「乗り心地性」を新たに追求した「新・体感プレミアムエンジンオイル」です。
        </p>
      </div>
      <div class="l-section--half section02__oil__item">
        <img src="<?php echo get_theme_img('oil/oil_image07.jpg'); ?>" alt="">
        <p>
          【部分合成油】　最新の国際規格（API／SP、ILSAC／GF-6）を取得したエンジンオイル。 部分合成油を使用することで、高い性能とコストパフォーマンスの両立を達成しています。
        </p>
      </div>
    </div>
  </div>
</section>
<section id="price" class="l-section02 section03">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        交換料金
      </h2>
      <p class="c-title__l__sub">
        Price
      </p>
    </div>
    <div class="c-box03">
      <div class="c-box">
        <h5 class="c-option__title">
          ガゾリン車 専用オイル
        </h5>
        <table class="c-table">
          <?php
          $gasolines = [
            "type" => [
              "スポーツ",
              "エコカー",
              "欧州車"
            ],
            "viscosity" => [
              "OW-50",
              "OW-8",
              "OW-16",
              "OW-20",
              "5W-30",
              "5W-40",
            ],
            "prime" => [
              "¥3,000/L",
              "¥2,600/L",
              "¥2,600/L",
              "¥2,600/L",
              "¥2,600/L",
              "¥2,600/L",
            ],
            "X" => [
              "",
              "",
              "¥2,000/L",
              "¥2,000/L",
              "¥2,000/L",
              "",
            ]
          ]; ?>
          <tbody>
            <tr class="c-table__tr">
              <th class="c-table__type--blank">&nbsp;</th>
              <?php foreach ($gasolines['type'] as $key => $type) : ?>
                <?php if ($type === 'エコカー') : ?>
                  <th class="c-table__type type colspan">
                    <?php echo $type; ?>
                  </th>
                <?php else : ?>
                  <th class="c-table__type type">
                    <?php echo $type; ?>
                  </th>
                <?php endif; ?>
              <?php endforeach; ?>
            </tr>
            <tr class="c-table__tr">
              <th class="c-table__type">
                粘度指数
              </th>
              <?php foreach ($gasolines['viscosity'] as $viscosity) : ?>
                <th class="c-table__type viscosity">
                  <?php echo $viscosity; ?>
                </th>
              <?php endforeach; ?>
            </tr>
            <tr class="c-table__tr">
              <th class="c-table__des--short u-bgDeepBlue">
                ENEOS X<br>PRIME
              </th>
              <?php foreach ($gasolines['prime'] as $prime) : ?>
                <td class="c-table__price"><?php echo $prime; ?></td>
              <?php endforeach; ?>
            </tr>
            <tr class="c-table__tr">
              <th class="c-table__des--short u-bgDeepBlue">
                ENEOS X
              </th>
              <?php foreach ($gasolines['X'] as $key => $x) : ?>
                <td class="c-table__price"><?php echo $x; ?></td>
              <?php endforeach; ?>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="l-flexRowToColumn">
        <div class="c-box--half">
          <h5 class="c-option__title">
            ディーゼル車 専用オイル
          </h5>
          <table class="c-table">
            <?php
            $diesel = [
              "type" => [
                "クリーンディーゼル車",
                "その他",
              ],
              "price" => [
                "¥1,800/L",
                "¥1,700/L",
              ],
            ]; ?>
            <tbody>
              <tr>
                <?php foreach ($diesel['type'] as $type) : ?>
                  <th class="c-table__type">
                    <?php echo $type; ?>
                  </th>
                <?php endforeach; ?>
              </tr>
              <tr>
                <?php foreach ($diesel['price'] as $price) : ?>
                  <td class="c-table__price"><?php echo $price; ?></td>
                <?php endforeach; ?>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="c-box--half">
          <h5 class="c-option__title">
            AT/CVTフルード
          </h5>
          <table class="c-table">
            <?php
            $at = [
              "type" => [
                "ENEOS X PRIME<br>ATフルード",
                "ENEOS X<br>ATフルード",
                "ENEOS X PRIME<br>CVTフルード",
              ],
              "price" => [
                "¥2,400/L",
                "¥1,800/L",
                "¥2,400/L",
              ],
            ]; ?>
            <tbody>
              <tr>
                <?php foreach ($at['type'] as $type) : ?>
                  <th class="c-table__type">
                    <?php echo $type; ?>
                  </th>
                <?php endforeach; ?>
              </tr>
              <tr>
                <?php foreach ($at['price'] as $price) : ?>
                  <td class="c-table__price"><?php echo $price; ?></td>
                <?php endforeach; ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <p class="section03__text">※表記はオイル本体価格です。<span class="u-red">別途作業工賃¥550を頂戴します。</span></p>
    </div>
    <div class="l-flexRowToColumn section03__subContents">
      <div class="c-title section03__subContents__title">
        <h3 class="c-title__m">
          オイルフィルターは定期的な交換を
        </h3>
      </div>
      <div class="l-section--half section03__subContents__text">
        <p>エンジンオイルの中に混入した不純物（金属摩耗粉、カーボンなど）をろ過するフィルターです。</p>
        <p>フィルターが目詰まりしたままだと、潤滑不良になり、エンジンに重大な損傷を与えるおそれがあるので、定期的な交換が必要となります。
        </p>
        <table class="c-table">
          <?php
          $filter = [
            "type" => [
              "クリーンディーゼル対応",
              "OW-50",
            ],
            "price" => [
              "¥1,800/L",
              "¥1,700/L",
            ],
          ]; ?>
          <tbody>
            <tr>
              <?php foreach ($filter['type'] as $type) : ?>
                <th class="c-table__type">
                  <?php echo $type; ?>
                </th>
              <?php endforeach; ?>
            </tr>
            <tr>
              <?php foreach ($filter['price'] as $price) : ?>
                <td class="c-table__price"><?php echo $price; ?></td>
              <?php endforeach; ?>
            </tr>
          </tbody>
        </table>
        <p class="u-textS u-align-center">※作業工賃込み</p>
      </div>
      <div class="l-section--half section03__subContents__image">
        <img src="<?php echo get_theme_img('oil/oil_image08.jpg'); ?>" alt="">
        <img src="<?php echo get_theme_img('oil/oil_image09.jpg'); ?>" alt="">
      </div>
    </div>
    <div class="l-flexRowToColumn section03__subContents">
      <div class="c-title section03__subContents__title">
        <h3 class="c-title__m">
          オイル交換時のフラッシング(エンジン内洗浄)をお勧めします。 </h3>
      </div>
      <div class="l-section--half section03__subContents__text">
        <p>オイルを抜き取ってもエンジンの内部にはまだ汚れたオイルやスラッジが残っています。</p>
        <p>そこで、エンジンの「うがい」をして内部をキレイにします。エンジンの中はスッキリします！</p>

      </div>
      <div class="l-section--half l-flexBetween">
        <div class="l-section--half">
          <table class="c-table">
            <tbody>
              <tr>
                <th class="c-table__type">
                  フラッシング
                </th>
              </tr>
              <tr>
                <td class="c-table__price">
                  ¥1,400/L
                </td>
              </tr>
            </tbody>
          </table>
          <p class="u-textS u-align-center">※作業工賃込み</p>
        </div>
        <div class="l-section--half">
          <img src="<?php echo get_theme_img('oil/oil_image10.jpg'); ?>" alt="">
        </div>
      </div>

    </div>
    <picture class="section03__image">
      <source media="(max-width: 799px)" srcset="<?php echo get_theme_img('common/banner_point-sp.png'); ?> " sizes="100%">
      <source media="(min-width: 800px)" srcset="<?php echo get_theme_img('common/banner_point.png'); ?> w849" , sizes="849px">
      <img src="<?php echo get_theme_img('common/banner_point.png'); ?>" alt="">
    </picture>
</section>
<?php include('inc/askedQuestions.php'); ?>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
