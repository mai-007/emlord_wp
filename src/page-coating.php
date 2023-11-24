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
      <source media="(max-width:799px)" srcset="<?php echo get_theme_img('coating/#'); ?>" sizes="100vw">
      <source media="(min-width:800px)" srcset="<?php echo get_theme_img('coating/movieImage.jpg'); ?>" sizes="100vw">
      <img src="<?php echo get_theme_img('coating/movieImage.jpg'); ?>">
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

      foreach ($coatingMerits as $key => $merit) : ?>
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
          <img src="<?php echo get_theme_img($merit['image']); ?>" alt="" class="c-box01__image">
          <button class="c-button02 modal-trigger" data-target="<?php echo $key + 1; ?>">
            OPEN
            <img src="<?php echo get_theme_img('common/externalLinks.svg'); ?>" alt="">
          </button>
        </div>
      <?php endforeach; ?>

      <!--以下モーダルで表示させるコンテンツ-->
      <div class="l-modal-overlay"></div>

      <div id="1" class="l-modal c-box" data-content="modal1">
        <div class="l-modal__close-btn">
          <span></span>
          <span></span>
        </div>
        <h3 class="c-box01__title">
          <span class="c-box01__title__number">01.</span>
          ダメージから守る
        </h3>
        <h5 class="c-box01__subtitle">実現不可能とされていたシリカ化合物の多層構造を実現。</h5>
        <h4 class="c-gradationBox--blue">
          次世代ガラス被膜
        </h4>
        <div class="c-box01__text">
          <p>一般的なガラスコーティングはガラスではなくレジン系が主流ですが、《クオーツ》では<span class="u-bold">完全ガラス成分</span>のシリカ化合物を使用しています。</p>
          <p>シリカ化合物は<span class="u-bold">桁違いの硬度</span>で従来品よりも汚れがつきにくく、キズがつきにくい反面、艶を出すのが難しいとされていました。当社では長年の研究開発の結果、業界初の多層化に成功。多層化することにより<span class="u-bold">類稀なる強度と艶の両方を実現</span>することに成功しました。</p>
          <p class="u-red">※レジン系などの場合１年程度で効果が無くなりますが、シリカ多層構造の場合は最低5年以上の効果が期待できます。</p>
        </div>
        <img src="<?php echo get_theme_img('coating/modal01_image01.jpg'); ?>" alt="">
      </div>

      <div id="2" class="l-modal" data-content="modal1">
        <div class="l-modal__close-btn">
          <span></span>
          <span></span>
        </div>
        <h3 class="c-box01__title">
          <span class="c-box01__title__number">02.</span>
          圧倒的な輝きに
        </h3>
        <h5 class="c-box01__subtitle">徹底した下処理で新車に近い輝きに</h5>
        <h4 class="c-gradationBox--blue">
          匠磨き
        </h4>
        <div class="c-box01__text">
          <p>これまで主流のガラスコーティングでは、下地処理にスポンジ等を使った手作業の磨き工程を採用していたため、繊細なキズの除去が難しく、さらに塗装面に過度の負荷を与えていました。</p>
          <p>当店のガラスコーティングでは、専用機材を用いた本格的な磨き工程「匠磨き」を用いることで、塗装面に余計な負荷を与えず、<span class="u-bold">洗車キズなどの繊細なキズまで除去します。</span></p>
          <p class="u-bold">経年劣化したボディ表面のキズや異物を除去し、キメの細かい塗装肌を復元します。</p>
          <p class="u-red">※深刻なウォータースポットなどは完全に除去出来ません。</p>
        </div>
        <img src="<?php echo get_theme_img('coating/modal01_image02.jpg'); ?>" alt="">
      </div>


      <div id="3" class="l-modal" data-content="modal1">
        <div class="l-modal__close-btn">
          <span></span>
          <span></span>
        </div>
        <h3 class="c-box01__title">
          <span class="c-box01__title__number">03.</span>
          お手入れ簡単
        </h3>
        <h5 class="c-box01__subtitle">水滴が自重で流れ落ちる「滑水力」で</h5>
        <h4 class="c-gradationBox--blue">
          雨・油・埃を定着させない
        </h4>
        <div class="c-box01__text">
          <p>下地のキズ消しと研磨、表面をなめらかに整えるガラストップコートが、<span class="u-bold">雨に含まれる油分や埃を雨ごと押し流し、汚れとして残しません。</span></p>
          <p>また、ガラス被膜は無機物のため有機物（汚れ）を定着させません。</p>
          <p class="u-red">また、紫外線吸収剤配合で<span class="u-bold">UVダメージを防ぎます。</span>クリア面が日常の紫外線ダメージをカット・保護するので<span class="u-bold">ただ乗っているだけで劣化するという悩みから解放されます。</span></p>
        </div>
        <img src="<?php echo get_theme_img('coating/modal01_image03.jpg'); ?>" alt="">
      </div>

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
      "image_descriptions" => ['', '', '', '', ''],
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
  ];; ?>
  <?php foreach ($flowSteps as $step) : ?>
    <div class="c-flow">
      <div class="c-flow__title">
        <h3><?php echo $step['title']; ?></h3>
      </div>
      <div class="c-flow__inner">
        <div class="c-flow__text">
          <?php foreach ($step['text'] as $paragraph) : ?>
            <p><?php echo $paragraph; ?></p>
          <?php endforeach; ?>
        </div>
        <div class="c-box--image">
          <?php foreach ($step['images'] as $index => $image) : ?>
            <div class="c-box--image__wrap">
              <?php if (!empty($step['image_descriptions'][$index])) : ?>
                <span class="c-box--image__title">
                  <?php echo $step['image_descriptions'][$index]; ?>
                </span>
              <?php endif; ?>
              <img src="<?php echo get_theme_img('coating/' . $image); ?>" alt="">
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</section>

<section class="l-section02 section04">
  <div class="c-title">
    <h2 class="c-title__l">施工証明書を発行いたします</h2>
    <p class="c-title__l__sub">Credentials</p>
    <p class="c-title__l__text">万が⼀の保険対象にも対応。施⼯証明書をご提⽰いただく事で、保険⾦補償事例は多数ございます。</p>
  </div>
  <div class="l-containerL section04__flex">
    <img src="<?php echo get_theme_img('coating/credentials01.jpg'); ?>" alt="">
    <img src="<?php echo get_theme_img('coating/credentials02.jpg'); ?>" alt="">
  </div>
</section>

<section id="price" class="l-section02--bg04 section05">
  <div class="c-title">
    <h2 class="c-title__l">コース・料金のご案内</h2>
    <p class="c-title__l__sub">Courses and Fees</p>
    <p class="c-title__l__text">お客様のニーズに合わせた3つのコースをご用意しております。</p>
  </div>
  <div class="l-containerL l-flexRowToColumn">
    <?php
    $coatingPrice = [
      [
        'category' => 'NEWCAR',
        'title' => '新車コーティング',
        'description' => '新車専用のプレミアムコースお車の11箇所をすみずみまで
        しっかりとコーティング',
        'lists' => [
          '新車の輝きを維持したい',
          'すべてのパーツを保護したい',
          '自宅納品前に施工してほしい'
        ],
      ],
      [
        'category' => 'PREMIUM',
        'title' => 'クオーツプレミアム',
        'description' => '4層+2層の6層皮膜形成でより深みのある圧倒的な艶と輝きを実現',
        'lists' => [
          '水シミや水アカが気になる',
          '自慢できる輝きが欲しい',
          '新車の輝きを取り戻し、維持したい'
        ],
      ],
      [
        'category' => 'REGULAR',
        'title' => 'クオーツ レギュラー',
        'description' => 'カーコーティングが初めての方にボディの4層コーティングのみのお手頃コース',
        'lists' => [
          '洗車をもっと楽にしたい',
          'ボディの水シミや水アカが気になる',
          '中古車を新車のように蘇らせたい'
        ],
      ]
    ];

    foreach ($coatingPrice as $key => $price) : ?>
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
        <ul class="c-box01__list">
          <?php foreach ($price['lists'] as $list) : ?>
            <li class="c-box01__list__item">
              <?php echo $list; ?>
            </li>
          <?php endforeach; ?>
        </ul>
        <button class="c-button02 modal-trigger" data-target="<?php echo $key + 4; ?>">
          <img src="<?php echo get_theme_img('common/price.svg'); ?>" alt="">
          OPEN
          <img src="<?php echo get_theme_img('common/externalLinks.svg'); ?>" alt="">
        </button>
      </div>
    <?php endforeach; ?>

  </div>

  <!--これより下がモーダルで表示させるコンテンツ-->

  <div id="4" class="l-modal c-box" data-content="modal4">
    <div class="l-modal__close-btn">
      <span></span>
      <span></span>
    </div>
    <span class="c-title__category">
      NEWCAR
    </span>
    <h3 class="c-box01__title">
      新車コーティング
    </h3>
    <h5 class="c-box01__subtitle">
      新車時だからできる<span class="u-red">全部をコーティング</span>
    </h5>
    <img src="<?php echo get_theme_img('coating/modal02_image01.jpg'); ?>" alt="">
    <div class="c-box02">
      <p class="c-box02__title">実施内容</p>
      <ul class="c-box02__inner">
        <?php
        $newCarCoatingMenus = [
          'ボディ',
          'アルミホイールx4',
          'ヘッドライトx2',
          'テールレンズx2',
          'バイザーx4',
          '樹脂パーツ',
          'メッキパーツ',
          'ボンネットインナー',
          'ドアインナー',
          'トラックインナー',
          '給油口インナー',
          'フロントガラス'
        ];
        ?>
        <?php foreach ($newCarCoatingMenus as $key => $menu) : ?>
          <li class="c-box--image__wrap--50">
            <span class="c-box--image__title">
              <?php echo $menu; ?>
            </span>
            <img src="<?php echo get_theme_img('coating/modal02_image' . str_pad($key + 2, 2, '0', STR_PAD_LEFT) . '.jpg'); ?>" alt="">
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <dl class="c-table">
      <?php
      $newCarCoatingPrices = [
        [
          'size' => 'SS',
          'type' => 'N-ONE/ハスラー/ワゴンR等',
          'price' => '87,100'
        ],
        [
          'size' => 'S',
          'type' => 'N-BOX/フィット/ヴィッツ等',
          'price' => '93,100'
        ],
        [
          'size' => 'M',
          'type' => 'プリウス/インプレッサ/アテンザ等',
          'price' => '101,600'
        ],
        [
          'size' => 'L',
          'type' => 'ヴェゼル/クラウン/フーガ等',
          'price' => '111,300'
        ],
        [
          'size' => 'LL',
          'type' => 'ヴォクシー/エルグランド/デリカ等',
          'price' => '119,700'
        ],
        [
          'size' => 'XL',
          'type' => 'ランドクルーザー/レクサスXL等',
          'price' => '128,200'
        ],
      ]; ?>
      <?php foreach ($newCarCoatingPrices as $newCarCoatingPrice) : ?>
        <div class="c-table__inner">
          <dt class="c-table__type">
            <span class="c-table__type__top">
              <?php echo $newCarCoatingPrice['size']; ?>
            </span>
            <?php echo $newCarCoatingPrice['type']; ?>
          </dt>
          <dd class="c-table__price u-red">
            <?php echo $newCarCoatingPrice['price']; ?>
          </dd>
        </div>
      <?php endforeach; ?>
    </dl>
  </div>

  <div id="5" class="l-modal c-box" data-content="modal5">
    <div class="l-modal__close-btn">
      <span></span>
      <span></span>
    </div>
    <span class="c-title__category">
      PREMIUM
    </span>
    <h3 class="c-box01__title">
      クオーツプレミアム
    </h3>
    <h5 class="c-box01__subtitle">
      コード9H 多層ガラスコーティング
    </h5>
    <dl class="c-table">
      <?php
      $premiumPrices = [
        [
          'size' => 'SS',
          'type' => 'N-ONE/ハスラー/ワゴンR等',
          'price' => '87,100'
        ],
        [
          'size' => 'S',
          'type' => 'N-BOX/フィット/ヴィッツ等',
          'price' => '93,100'
        ],
        [
          'size' => 'M',
          'type' => 'プリウス/インプレッサ/アテンザ等',
          'price' => '101,600'
        ],
        [
          'size' => 'L',
          'type' => 'ヴェゼル/クラウン/フーガ等',
          'price' => '111,300'
        ],
        [
          'size' => 'LL',
          'type' => 'ヴォクシー/エルグランド/デリカ等',
          'price' => '119,700'
        ],
        [
          'size' => 'XL',
          'type' => 'ランドクルーザー/レクサスXL等',
          'price' => '128,200'
        ],
      ]; ?>
      <?php foreach ($premiumPrices as $premiumPrice) : ?>
        <div class="c-table__inner">
          <dt class="c-table__type">
            <span class="c-table__type__top">
              <?php echo $premiumPrice['size']; ?>
            </span>
            <?php echo $premiumPrice['type']; ?>
          </dt>
          <dd class="c-table__price u-red">
            <?php echo $premiumPrice['price']; ?>
          </dd>
        </div>
      <?php endforeach; ?>
    </dl>
  </div>


  <div id="6" class="l-modal c-box" data-content="modal6">
    <div class="l-modal__close-btn">
      <span></span>
      <span></span>
    </div>
    <span class="c-title__category">
      REGULAR
    </span>
    <h3 class="c-box01__title">
      クオーツレギュラー
    </h3>
    <h5 class="c-box01__subtitle">
      コード9H 多層ガラスコーティング
    </h5>
    <dl class="c-table">
      <?php
      $regularPrices = [
        [
          'size' => 'SS',
          'type' => 'N-ONE/ハスラー/ワゴンR等',
          'price' => '87,100'
        ],
        [
          'size' => 'S',
          'type' => 'N-BOX/フィット/ヴィッツ等',
          'price' => '93,100'
        ],
        [
          'size' => 'M',
          'type' => 'プリウス/インプレッサ/アテンザ等',
          'price' => '101,600'
        ],
        [
          'size' => 'L',
          'type' => 'ヴェゼル/クラウン/フーガ等',
          'price' => '111,300'
        ],
        [
          'size' => 'LL',
          'type' => 'ヴォクシー/エルグランド/デリカ等',
          'price' => '119,700'
        ],
        [
          'size' => 'XL',
          'type' => 'ランドクルーザー/レクサスXL等',
          'price' => '128,200'
        ],
      ]; ?>
      <?php foreach ($regularPrices as $regularPrice) : ?>
        <div class="c-table__inner">
          <dt class="c-table__type">
            <span class="c-table__type__top">
              <?php echo $regularPrice['size']; ?>
            </span>
            <?php echo $regularPrice['type']; ?>
          </dt>
          <dd class="c-table__price u-red">
            <?php echo $regularPrice['price']; ?>
          </dd>
        </div>
      <?php endforeach; ?>
    </dl>
  </div>
</section>

<?php include('inc/askedQuestions.php'); ?>
<?php include('inc/map.php'); ?>
<section class="l-section02--bg04">
  <?php include('inc/service-section.php'); ?>
</section>
<?php get_footer(); ?>
