<?php
/*
Template Name: コーティング
  bodyClass =[.p-coating]
  .p-coating.scss
*/
?>
<?php get_header(); ?>
<section class="l-section03--bg01 section01">
  <div class="l-containerM">
    <h1 class="c-title__l">硬度9Hの硬さで塗装を守り<br>
いつまでも輝き続けるコーティングを。</h1>
    <picture class="movie">
      <source media="(max-width:799px)" srcset="<?php echo get_theme_img('coating/#');?>" sizes="100vw">
      <source media="(min-width:800px)" srcset="<?php echo get_theme_img('coating/movieImage.jpg');?>" sizes="100vw">
      <img src="<?php echo get_theme_img('coating/movieImage.jpg');?>">
    </picture>
    <div class="c-title__l__text">
      <p>
      どこにもない多層ガラスコーティングで、まるで新車のような輝きが続く。<br>
  施行後は水洗いだけで汚れが落ちるから、洗車もお手入れも簡単に。
      </p>
      <p>
      進化し続ける最上級の技術力で、新しいカーライフをお届けすることがエムロードの使命です。
      </p>
    </div>
    <!--LinkInPage -->
    <div class="c-linkInPage">
      <button class="c-linkInPage__btn">
        <a href="#coatingFrow">施工の流れ</a>
      </button>
      <button class="c-linkInPage__btn">
        <a href="#price">料　金</a>
      </button>
      <button class="c-linkInPage__btn">
        <a href="#QA">よくある質問</a>
      </button>
    </div>
  </div>
</section>

<!--Merit -->
<section class="l-section01 p-coating__section02">
  <div class="l-containerL">
    <div class="c-title">
      <h2 class="c-title__l">9Hガラスコーティングの&lt;クオーツ&gt;の<br><span class="u-gold">メリット</span></h2>
        <p class="c-title__l__sub">Benefit</p>
    </div>
    <div class="c-title__l__text">
        <p>
        説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
    </div>

    <div class="l-flexRowToColumn">
      <?php
    $coatingMerits = [
        [
            'number' => '01.',
            'title' => 'ダメージから守る',
            'description' => [
                '業界初のシリカ多層構造でコーティング',
                '圧倒的なガラス多層被膜が愛車を守ります。',
                'もちろんUV（紫外線）ダメージも防ぎます。'
            ],
            'image' => 'coating/merit01.jpg'
        ],
        [
            'number' => '02.',
            'title' => '圧倒的な輝きに',
            'description' => [
                'まず匠の技で磨き、細かな傷を補修するから塗装本来の輝きが蘇る。',
                '何層にも渡るコーティングで「深い艶」が生まれます。是非、圧倒的な技術力をお試しください。'
            ],
            'image' => 'coating/merit02.jpg'
        ],
        [
            'number' => '03.',
            'title' => 'お手入れ簡単',
            'description' => [
                'トップコートが雨に含まれる油分や埃を雨ごと押し流し、汚れを残しません。',
                '洗車は水だけでOKだから、環境に優しく洗車時間を短縮できます。',
                'コーティング後の洗車機使用や洗剤使用も問題ありません。'
            ],
            'image' => 'coating/merit03.jpg'
        ]
    ];

      foreach ($coatingMerits as $merit) :
      ?>
        <div class="c-box01">
          <h3 class="c-box01__title">
            <span class="c-box01__title__number"><?php echo $merit['number']; ?></span>
            <?php echo $merit['title']; ?>
          </h3>
          <div class="c-box01__text">
            <?php foreach ($merit['description'] as $paragraph) : ?>
              <p class="c-box01__text__item"><?php echo $paragraph; ?></p>
                <?php endforeach; ?>
          </div>
          <img
            src="<?php echo get_theme_img($merit['image']); ?>"          alt=""
            class="c-box01__image">
          <button class="c-button02">
            OPEN
          <img src="<?php echo get_theme_img('common/externalLinks.svg'); ?>" alt="">
          </button>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="coatingFrow" class="l-section02--bg01 section03">
  <div class="c-title">
    <h3 class="c-title__l">
      入庫から納車までの工程
    </h3>
    <p class="c-title__l__sub">
      Frow
    </p>
  </div>
  <?php
$flowSteps = [
    [
        "title" => "01.店舗持ち込み・洗車",
        "text" => [
            "お電話・LINEにてご予約後、お車を持ち込みいただき受付を行います。",
            "入庫後は",
            "1.シートカバー・ハンドルカバー・マットカバーを装着",
            "2.専⽤クリーナーを使⽤しホイールとタイヤ洗浄。",
            "3.極上の泡で⼿洗い洗⾞・脱脂作業を実施。※専用クロスで拭き上げ後、エアガンで細部まで⽔分を除去。"
        ],
        "images" => [
            "flow01_01.jpg",
            "flow01_02.jpg",
            "flow01_03.jpg",
            "flow01_04.jpg",
            "flow01_05.jpg"
        ],
        "image_descriptions" => ['', '', '', '',''],
    ],
    [
        "title" => "02.磨き",
        "text" => [
            "専⽤機材を⽤い、認定資格を持ったプロスタッフが磨きを⾏います。",
            "施⼯前には必ずマスキングによる安全確保を実施。",
            "確実な<span class='u-red'>バフ⽬の番⼿調整（⽬の細かさ）を繰り返し</span>、キメ細かな作業を繰り返します。洗⾞キズ・経年劣化キズ・異物・⽔シミを除去し。<span class='u-red'>キメの細かい塗装⾯を形成</span>します。",
            "<span class='u-small u-red'>※深刻なウォータースポットなどは完全に除去できませんのでご注意ください。</span>"
        ],
        "images" => [
            "flow02_01.jpg",
            "flow02_02.jpg",
            "flow02_03.jpg",
            "flow02_04.jpg"
        ],
        "image_descriptions" => ['磨き前', 'ポリッシング', '磨き終盤(うろこ状)', '拭き上げ後'],
    ],
    [
        "title" => "03.コーティング",
        "text" => [
            "実は⼿塗りではありません。<br>塗装で使⽤する、キメの細かいエアーガンを使⽤します。",
            "エアーガンを使⽤することで、⼈間の⽬では確認できない凹凸や細部まで塗布することが実現。",
            "硬度９Hで無機質のガラスコーティング⽪膜を多層構造で仕上げることで、強度と艶が従来と⽐較できな い程の強度耐久性と艶を⽣み出します。",
            "さらに、最終⼯程で「犠牲⽪膜」を構成しガラスコーティング⾃体を保護します。"
        ],
        "images" => [
            "flow03_01.jpg",
            "flow03_02.jpg",
            "flow03_03.jpg",
            "flow03_04.jpg"
        ],
        "image_descriptions" => ['', '', '', ''],
    ],
    [
        "title" => "04.仕上げ・納車",
        "text" => [
            "明るい照明施設・特殊ライト・太陽光のもとで細部まで厳しいプロの⽬で施⼯状態を確認します。万が⼀、納得いかない箇所は再度施⼯を実施し満⾜いくまで拘ります。",
            "<span class='u-red'>※⽪膜状態・ムラ・ツヤの確認。</span>",
            "<span class='u-red'>※お客様に引き渡し可能時間のご連絡（LINEorTEL）</span>",
            "<span class='u-red'>※ご来店精算・施⼯証明書発⾏</span>",
            "<span class='u-red'>※⽇頃の洗⾞⽅法アドバイス</span>",
            "<span class='u-red'>※翌年以降のメンテナンス説明</span>"
        ],
        "images" => [
          "flow04_01.jpg",
          "flow04_02.jpg",
          "flow04_03.jpg",
          "flow04_04.jpg"
        ],
        "image_descriptions" => ['', '', '', ''],
      ],
    ];
;?>
<?php foreach($flowSteps as $step): ?>
    <div class="c-flow">
        <div class="c-flow__title">
            <h3><?php echo $step['title']; ?></h3>
        </div>
        <div class="c-flow__inner">
          <div class="c-flow__text">
              <?php foreach ($step['text'] as $paragraph): ?>
                  <p><?php echo $paragraph; ?></p>
              <?php endforeach; ?>
          </div>
          <div class="c-flow__image">
              <?php foreach($step['images'] as $index => $image): ?>
                <div class="c-flow__image__wrap">
                  <span class="c-flow__image__title">
                    <?php echo $step['image_descriptions'][$index];?>
                  </span>
                  <img src="<?php echo get_theme_img('coating/' . $image); ?>" alt="">
                </div>
                <?php endforeach; ?>
          </div>
        </div>
    </div>
  <?php endforeach; ?>
</section>

<section class="l-section02 p-coating__section04">
    <div class="c-title">
      <h2 class="c-title__l">施工証明書を発行いたします</h2>
        <p class="c-title__l__sub">Credentials</p>
        <p class="c-title__l__text">万が⼀の保険対象にも対応。施⼯証明書をご提⽰いただく事で<br>
保険⾦補償事例は多数ございます。</p>
    </div>
    <div class="l-containerM">
      <img src="<?php echo get_theme_img('coating/credentials01.jpg'); ?>" alt="">
      <img src="<?php echo get_theme_img('coating/credentials02.jpg'); ?>" alt="">
    </div>
</section>

<section id="price" class="l-section02--bg04">
  <div class="c-title">
    <h2 class="c-title__l">コース・料金のご案内</h2>
      <p class="c-title__l__sub">Courses and Fees</p>
      <p class="c-title__l__text">お客様のニーズに合わせた3つのコースをご用意しております。</p>
  </div>
  <div class="l-containerM">
  <?php
$coatingPrice = [
    [
        'category' => 'NEWCAR',
        'title' => '新車コーティング',
        'description' => '新車専用のプレミアムコースお車の11箇所をすみずみまで
        しっかりとコーティング',
        'lists'=>[
          '新車の輝きを維持したい',
          'すべてのパーツを保護したい',
          '自宅納品前に施工してほしい'
        ],
    ],
    [
      'category' => 'PREMIUM',
      'title' => 'クオーツプレミアム',
      'description' => '4層+2層の6層皮膜形成でより深みのある圧倒的な艶と輝きを実現',
      'lists'=>[
        '水シミや水アカが気になる',
        '自慢できる輝きが欲しい',
        '新車の輝きを取り戻し、維持したい'
      ],
    ],
    [
      'category' => 'REGULAR',
      'title' => 'クオーツ レギュラー',
      'description' => 'カーコーティングが初めての方にボディの4層コーティングのみのお手頃コース',
      'lists'=>[
        '洗車をもっと楽にしたい',
        'ボディの水シミや水アカが気になる',
        '中古車を新車のように蘇らせたい'
      ],
    ]
];

foreach ($coatingPrice as $price) :
?>
  <div class="c-box01">
    <span class="c-title__category">
      <?php echo $price['category']; ?>
    </span>
    <h3 class="c-box01__title">
      <?php echo $price['title']; ?>
    </h3>
    <div class="c-box01__text">
      <p><?php echo $price['description']; ?></p>
    </div>
    <ul>
      <?php foreach ($price['lists'] as $list) : ?>
        <li class="c-box01__list">
          <?php echo $list; ?>
        </li>
      <?php endforeach; ?>
    </ul>
    <button class="c-button02">
      <img src="<?php echo get_theme_img('common/price.svg'); ?>" alt="">
        OPEN
      <img src="<?php echo get_theme_img('common/externalLinks.svg'); ?>" alt="">
    </button>
  </div>
  <?php endforeach; ?>
  </div>
</section>

<section id="QA" class="l-section03--bg01">
  <div class="l-containerM">
  <div class="c-title">
    <h2 class="c-title__l">よくある質問</h2>
      <p class="c-title__l__sub">Asked Questions</p>
  </div>
  <?php
   $coatingQuestions = [
    [
      "Q" => "外車でも値段は変わらないの？",
      "A" => "<span class='u-bold'>はい、変わりません。</span>国産車でも外国車でも高級車でも、車体のサイズやコーティングの回数やオプション項目によって価格が決定します。 ",
    ],
    [
      "Q" => "ホイールがすぐ汚れるのでコーティングしたいのですが出来ますか？",
      "A" => "<span class='u-bold'>コーティングした車と、してない車とはでは雲泥の差です。</span>当店の次世代多層コーティングは、雨が降れば、ほとんどの汚れが雨と一緒に流れ落ちます。(当コーティングは滑水性で、撥水性のコーティングのようにウォータースポットの心配もございません)一部汚れが残った場合もさっと水をかければすぐに落ちます。",
    ],
    [
      "Q" => "価格はいくらですか？",
      "A" => "コース別料金表をご確認下さい。",
    ],
    [
      "Q" => "他社のコーティングをしてますが、その上から施工出来ますか？",
      "A" => "<span class='u-bold'>付着物の除去の上で施行しますので問題ありません。</span>高硬度のガラスコーティングを施工されている場合は、除去せず平滑化した上で、ガラスを塗布します。",
    ],
    [
      "Q" => "市販の自動車用シャンプーは使用しても良いですか？",
      "A" => "市販の洗浄シャンプー（研磨剤が入っていないもの）でも全く問題ありませんが、<span class='u-bold'>塗膜への付着物の除去など定期的に施工店でメンテナンス洗車されることをオススメしています。</span>",
    ],
    [
      "Q" => "事故を起こした場合、コーティング自体は自動車保険の対象になるの？",
      "A" => "保険会社からは、対物事故の場合であれば、保険の対象になるとの判断をいただける場合もございます。その際、施行証明書を御提示してください。",
    ],
    [
      "Q" => "次世代クオーツコーティングとは何ですか？",
      "A" => "コーティング業界で、これまで不可能とされたシリカ多層被膜のガラス溶剤とプロ仕様の匠磨きによって、これまでのガラスコーティングに比べて、<span class='u-bold'>圧倒的な強度と艶を実現する多層ガラスコーティング</span>です。 ",
    ],
  ]
  ;?>
    <?php foreach($coatingQuestions as $coatingQuestion): ?>
      <dl class="c-qa">
        <dt class ="c-qa__question">
          <?php echo $coatingQuestion['Q'];?>
        </dt>
        <dd class ="c-qa__answer">
          <?php echo $coatingQuestion['A'];?>
        </dd>
      </dl>
    <?php endforeach;?>
  </div>
</section>
<?php include('inc/map.php');?>
<section class="l-section02--bg02">
  <?php include('inc/service-section.php');?>
</section>
<?php get_footer(); ?>
