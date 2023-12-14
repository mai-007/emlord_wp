<?php
/*
Template Name: 会社案内
*/
?>
<?php get_header(); ?>
<section class="l-section03--bg01 section01">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        この社名が、私たちの経営理念です。
      </h2>
      <p class="c-title__l__sub">
        Management Philosophy
      </p>
    </div>
    <picture class="emlord">
      <source media="(max-width:799px)" srcset="<?php echo get_theme_img('company/image01--sp
.png'); ?>" sizes="100vw">
      <source media="(min-width:800px)" srcset="<?php echo get_theme_img('company/image01.png'); ?>" sizes="100vw">
      <img src="<?php echo get_theme_img('company/image01.png'); ?>">
    </picture>
    <!--LinkInPage -->
    <div class="c-linkInPage">
      <button class="c-linkInPage__btn">
        <a href="#outline">会社概要</a>
      </button>
      <button class="c-linkInPage__btn">
        <a href="#message">メッセージ</a>
      </button>
      <button class="c-linkInPage__btn">
        <a href="#history">沿革</a>
      </button>
    </div>
  </div>
</section>
<section id="outline" class="l-section02--bg04 section02">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        会社概要
      </h2>
      <p class="c-title__l__sub">
        Outline
      </p>
    </div>
    <picture class="emlord">
      <source media="(max-width:799px)" srcset="<?php echo get_theme_img('company/image02-sp.png'); ?>" sizes="100vw">
      <source media="(min-width:800px)" srcset="<?php echo get_theme_img('company/image02.png'); ?>" sizes="100vw">
      <img src="<?php echo get_theme_img('company/image02.png'); ?>">
    </picture>
    <table class="c-table02">
      <tbody class="c-table02__tbody">
        <tr class="c-table02__th">
          <th class="c-table02__th">社名</th>
          <td class="c-table02__td">株式会社エムロード</td>
        </tr>
        <tr class="c-table02__th">
          <th class="c-table02__th">創業</th>
          <td class="c-table02__td">明治40年(1907年)</td>
        </tr>
        <tr class="c-table02__th">
          <th class="c-table02__th">資本金</th>
          <td class="c-table02__td">3,000万</td>
        </tr>
        <tr class="c-table02__th">
          <th class="c-table02__th">代表者</th>
          <td class="c-table02__td">代表取締役社長：三角雄介</td>
        </tr>
        <tr class="c-table02__th">
          <th class="c-table02__th">営業内容</th>
          <td class="c-table02__td">ENEOSサービスステーション、石油製品販売、車検・整備、保険、中古車販売・買取、鈑金・塗装、レンタカー、オートリース、
            ホームエネルギー（太陽光発電、燃料電池、エコフィール）、環境商材（光触媒、遮熱塗料）</td>
        </tr>
        <tr class="c-table02__th">
          <th class="c-table02__th">本社</th>
          <td class="c-table02__td">〒860-0821<br>
            熊本市中央区本山4丁目3番7号<br>
            電話：<a href="tel:096-352-8177">096-352-8177</a>、FAX：096-355-7144</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
<section id="message" class="l-section02--bg03 section03">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        代表メッセージ
      </h2>
      <p class="c-title__l__sub">
        Message
      </p>
    </div>

    <div class="c-title__l__text">
      <p>
        当社は創業以来100年にわたり石油販売業として歩んできました。<br>
        今後エネルギーがどのように変化していくか想像できません。<br>しかし、どのような時代になろうとも、お客様から喜んで頂ける会社・選んで頂ける会社であり続けるよう、社員一同考え実践していきます。
      </p>
    </div>
  </div>
</section>
<section id="history" class="l-section02 section04">
  <div class="l-containerM">
    <div class="c-title">
      <h2 class="c-title__l">
        沿革
      </h2>
      <p class="c-title__l__sub">
        History
      </p>
    </div>


    <h3 class="section04__title">創業百余年、変わらないエネルギーへの想い。</h3>
    <div class="history">
      <?php
      $histories = [
        [
          "ad" => "1907",
          "j-year" => "明治40年",
          "month" => "",
          "text" => "下益城郡杉合村(現在の富合町)にて、初代・三角巳ノ八(みのはち)が、「栗屋」の称号を持って、米穀・肥料・呉服・雑貨・植物油の販売を開始",
        ],
        [
          "ad" => "1914",
          "j-year" => "大正3年",
          "month" => "3月",
          "text" => "石油販売開始
          日本石油と特約販売契約を結び、石油製品の販売を開始",
        ],
        [
          "ad" => "1927",
          "j-year" => "昭和2年",
          "month" => "6月",
          "text" => "県下2番目のガソリンスタンドを建設
          これを機に営業所・販売店を設け販路を拡張していく",
        ],
        [
          "ad" => "1933",
          "j-year" => "昭和8年",
          "month" => "12月",
          "text" => "三角石油合名会社を設立",
        ],
        [
          "ad" => "1939",
          "j-year" => "昭和14年",
          "month" => "4月",
          "text" => "油槽所(三角)及び販売店40店を有し、県下第一位の販売量を誇る。
          当時は宇土本店を中心に8支店(三角・本渡・人吉・川尻・松橋・
          八代・水俣・島原)",
        ],
        [
          "ad" => "1948",
          "j-year" => "昭和23年",
          "month" => "8月",
          "text" => "三角商事合名会社に社名変更",
        ],
        [
          "ad" => "1949",
          "j-year" => "昭和24年",
          "month" => "",
          "text" => "終戦後8年間に渡って行われた、石油統制による切符制配給がよう
          やく解除され、日本石油との取引を再開。戦前の活気を取り戻す",
        ],
        [
          "ad" => "1952",
          "j-year" => "昭和27年",
          "month" => "2月",
          "text" => "三角石油合同会社に社名変更",
        ],
        [
          "ad" => "1957",
          "j-year" => "昭和32年",
          "month" => "4月",
          "text" => "本店を熊本市本庄町に移転",
        ],
        [
          "ad" => "1966",
          "j-year" => "昭和41年",
          "month" => "4月",
          "text" => "三角石油株式会社を設立。三角石油合同会社の業務を継承",
        ],
        [
          "ad" => "1976",
          "j-year" => "昭和51年",
          "month" => "4月",
          "text" => "大正海上火災(現三井住友海上火災)の代理店となり損害保険事業の開始",
        ],
        [
          "ad" => "1980",
          "j-year" => "昭和55年",
          "month" => "",
          "text" => "アメリカンファイミリー生命(AFLAC)と代理店契約を結び、生命保険事業の開始",
        ],
        [
          "ad" => "1988",
          "j-year" => "昭和63年",
          "month" => "",
          "text" => "創業80周年 三角石油は当時県下18店舗を展開",
        ],
        [
          "ad" => "1999",
          "j-year" => "平成11年",
          "month" => "8月",
          "text" => "くまもと日石株式会社を吸収合併。社名を株式会社エムロードに変
          更 。直営32箇所、販売店94箇所となり熊本県下最大の石油販売店
          となる",
        ],
        [
          "ad" => "2000",
          "j-year" => "平成12年",
          "month" => "9月",
          "text" => "鈑金工場(カーバンケンズ)を立ち上げ",
        ],
        [
          "ad" => "2001",
          "j-year" => "平成13年",
          "month" => "4月",
          "text" => "ホームネットカーズ株式会社と契約し、中古車販売開始",
        ],
        [
          "ad" => "2002",
          "j-year" => "平成14年",
          "month" => "",
          "text" => "オリックスオートリースの代理店となり、オートリース事業を開始
          する",
        ],
        [
          "ad" => "2004",
          "j-year" => "平成16年",
          "month" => "7月",
          "text" => "光の森にセルフ式スタンドの1号店をオープンさせる",
        ],
        [
          "ad" => "2007",
          "j-year" => "平成19年",
          "month" => "9月",
          "text" => "カーリンクに加盟し中古車委託販売を開始",
        ],
        [
          "ad" => "2007",
          "j-year" => "",
          "month" => "11月",
          "text" => "創業100周年",
        ],
        [
          "ad" => "2015",
          "j-year" => "平成27年",
          "month" => "2月",
          "text" => "太陽光発電事業を開始(三角町)",
        ],
      ]; ?>
      <?php foreach ($histories as $history) : ?>
      <dl>
        <dt class="history__time">
          <span class="history__time__ad">
            <?php echo $history["ad"]; ?>
          </span>
          <span class="history__time__j">
            <?php echo $history["j-year"]; ?>
          </span>
        </dt>
        <dt class="history__event">
          <?php echo $history["text"]; ?>
        </dt>
      </dl>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
