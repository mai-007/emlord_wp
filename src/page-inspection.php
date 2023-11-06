<?php
/*
Template Name: 車検
*/
?>
<?php get_header(); ?>
<section class="l-section03--bg01 section01">
  <div class="l-containerM">
  <div class="c-title">
      <h2 class="c-title__l">エムロードの車検が選ばれる理由</h2>
        <p class="c-title__l__sub">emlord car inspection</p>
    </div>

    <div class="c-title__l__text">
      <p>
      国家資格整備士による、信頼のおけるプロの整備を。
      </p>
      <p>
      確かな技術力でお客様の愛車を大切に整備いたします！
      </p>
    </div>
    <!--LinkInPage -->
    <div class="c-linkInPage">
      <button class="c-linkInPage__btn">
        <a href="#frow">車検の流れ</a>
      </button>
      <button class="c-linkInPage__btn">
        <a href="#price">料金表</a>
      </button>
      <button class="c-linkInPage__btn">
        <a href="#QA">よくある質問</a>
      </button>
    </div>
  </div>
</section>

<!--Point -->
<section class="l-section02--bg02 section02">
  <div class="l-containerL">
    <div class="c-title">
      <h2 class="c-title__l">
        安心の3つのポイント
      </h2>
        <p class="c-title__l__sub">Point</p>
    </div>
    <div class="c-title__l__text">
        <p>
        エムロードでは、厳しいトレーニングを経て高度な知識と技術を身につけた整備のプロ・国家資格整備士が、 「指定工場資格」「認証工場資格」を持つ店舗で行い、ディーラー車検と変わらない高いクオリティを実現しています。
      </p>
    </div>

    <div class="l-flexRowToColumn section02__image">
      <?php
    $inspectionMerits = [
        [
            'number' => '01.',
            'title' => '国家資格整備士',
            'description' => [
                '高い技術力を持つ有資格者整備士が愛車の安全を守ります'
            ],
            'image' => 'inspection/point_image01.jpg'
        ],
        [
            'number' => '02.',
            'title' => '無料見積もり',
            'description' => [
                '無料にて事前点検を実施します。',
                '車検前に費用目安がわかるので安心!'
            ],
            'image' => 'inspection/point_image02.jpg'
        ],
        [
            'number' => '03.',
            'title' => '洗車サービス',
            'description' => [
                '通常〇〇円の手洗い洗車サービス付き',
            ],
            'image' => 'inspection/point_image03.jpg'
        ]
    ];

    foreach ($inspectionMerits as $key => $merit) : ?>
        <div class="c-box01">
            <h3 class="c-box01__title">
                <span class="c-box01__title__number"><?php echo $merit['number'];?></span>
                <?php echo $merit['title']; ?>
            </h3>
            <div class="c-box01__text">
                <?php foreach ($merit['description'] as $paragraph) : ?>
                    <p class="c-box01__text__item"><?php echo $paragraph; ?></p>
                <?php endforeach; ?>
            </div>
            <img src="<?php echo get_theme_img($merit['image']); ?>" alt="" class="c-box01__image">
        </div>
    <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- benefit -->
<section class="l-section01 section03">
  <div class="l-containerL">
    <div class="c-title">
      <h2 class="c-title__l">
        エムロードの車検は6つの特典付き
      </h2>
        <p class="c-title__l__sub">Benefit</p>
    </div>
    <div class="c-title__l__text">
        <p>
        洗車無料サービス・プレゼントなど、様々な特典をご用意しております！
※時期によって内容が異なる場合はございます。
ご予約時にお気軽にお尋ねください。
      </p>
    </div>

    <div class="section03__image">
      <?php
    $inspectionBenefits = [
        [
          'image' => 'inspection/benefit_image01.png',
          'alt' => '代車貸し出し'
        ],
        [
          'image' => 'inspection/benefit_image02.png',
          'alt' => 'クレジット・ローン等各種支払いOK'
        ],
        [
          'image' => 'inspection/benefit_image03.png',
          'alt' => '板金塗装10％OFF',
        ],
        [
          'image' => 'inspection/benefit_image04.png',
          'alt' => '見積もり無料',
        ],
        [
          'image' => 'inspection/benefit_image05.png',
          'alt' => '洗車サービス',
        ],
        [
          'image' => 'inspection/benefit_image06.png',
          'alt' => '半年毎の無料点検付き',
        ],
    ];

    foreach ($inspectionBenefits as $benefit) : ?>
      <img src="<?php echo get_theme_img($benefit['image']); ?>" alt="<?php echo $benefit['alt']; ?>">
    <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- benefit -->
<section class="l-section02--bg02 section04">
  <div class="l-containerL l-flexRowToColumn">
    <div class="l-section--half">
      <div class="c-title--half">
        <h3 class="c-title__m">最適な車検コースをご提案</h3>
        <p class="c-title__m__sub">
        The best proposal for you
        </p>
        <p>
        車検の前に事前点検を実施し、お車の状態を詳しく説明させていただきます。<br>
  ご要望・ご予算に合わせた様々な車検コースから、お客様にピッタリな車検コースをお選びいただけます。<br>
  過剰整備・過剰交換は一切いたしませんので、安心してお任せください。
        </p>
      </div>
    </div>
    <div class="l-section--half">
      <img src="<?php echo get_theme_img('inspection/section04_image.jpg'); ?>" alt="">
    </div>
  </div>
</section>

<!--banner-->
<section class="l-section02--bg01 section05">
  <div class="l-containerM c-bannerArea">
    <picture class="section05__image">
      <source
        media="(max-width: 799px)"
        srcset="<?php echo get_theme_img('common/banner_inspection-sp.png');?> "
        sizes="100%"
      >
      <source
        media="(min-width: 800px)"
        srcset="<?php echo get_theme_img('common/banner_inspection.png');?> w849",
        sizes="849px"
      >
      <img src="<?php echo get_theme_img('common/banner_inspection.png');?>" alt="">
    </picture>
    <picture class="section05__image">
      <source
        media="(max-width: 799px)"
        srcset="<?php echo get_theme_img('common/banner_point-sp.png');?>"
        sizes="100%"
      >
      <source
        media="(min-width: 800px)"
        srcset="<?php echo get_theme_img('common/banner_point.png');?> w849",
        sizes="849px"
      >
      <img src="<?php echo get_theme_img('common/banner_point.png');?>" alt="">
    </picture>
  </div>
</section>

<!--frow-->
<section id="inspectionFrow" class="l-section02--bg02 section06">
  <div class="c-title">
    <h3 class="c-title__l">
      車検の流れ
    </h3>
    <p class="c-title__l__sub">
      Frow
    </p>
  </div>
  <?php
$inspectionFlow = [
      [
        "title" => "01.事前点検・お見積り",
        "text" => [
            "<span class='u-bold'>車検日の1週間から10日前に事前点検</span>を行います。<br>(所有時間約30分)",
            "事前点検の結果から実施コースをお選びいただき、概算お見積もりを作成します。"
        ],
        "image" => [
            "inspection/flow01.png",
        ]
      ],
      [
        "title" => "02.お車のお預かり",
        "text" => [
            "<span class='u-bold'>車検日にお車をお預かりします。</span>代車のご用意もございます。",
            "※代車無料/燃料費別途"
        ],
        "image" => [
            "inspection/flow02.png",
        ]
      ],
      [
        "title" => "03.法定2年点検の実施・または継続検査",
        "text" => [
            "安全のためにチェック項目を<span class='u-bold'>細かく点検します。</span>",
        ],
        "image" => [
            "inspection/flow03.png",
        ]
      ],
      [
        "title" => "04.洗車サービスの実施",
        "text" => [
            "車検の実施時に<span class='u-bold'>洗車サービス</span>を行います。",
        ],
        "image" => [
            "inspection/flow04.png",
        ]
      ],
      [
        "title" => "05.結果のご報告・お車の状態の説明",
        "text" => [
            "車検の結果と、交換の必要があったパーツや
            消耗品などについて詳しくご報告させて
            いただきます。",
        ],
        "image" => [
            "inspection/flow05.png",
        ]
      ],
      [
        "title" => "06.ご精算・引き渡し",
        "text" => [
            "車検費用とパーツ費用のご精算後、お車をお引き渡しします。",
        ],
        "image" => [
            "inspection/flow06.png",
        ]
      ],
    ];
;?>
<?php foreach($inspectionFlow as $flow): ?>
    <div class="c-flow">
        <div class="c-flow__title">
            <h3><?php echo $flow['title']; ?></h3>
        </div>
        <div class="c-flow__inner l-flexRowToColumn">
            <div class="c-flow__text">
                <?php foreach ($flow['text'] as $paragraph): ?>
                    <p><?php echo $paragraph; ?></p>
                <?php endforeach; ?>
            </div>
              <img src="<?php echo get_theme_img($flow['image'][0]); ?>" alt="">
          </div>
      </div>
    </div>
<?php endforeach; ?>
</section>

<!--price -->
<section id="price" class="l-section02 section07">
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
$Prices = [
      [
        "title" => "セーフティーコース",
        "text" => [
            "法定2年点検付／整備保証付／走行が少なめな方",
        ],
        "recommend" => [
          "日頃の点検にあまり自信のない方",
      ],
        "type" => [
            "軽自動車" => "",
            "小型車" => "1t以下",
            "中型車" => "1t~1.5t以下",
            "大型車" => "1.5t~2t以下",
            "小型貨物" =>"1t~2t以下",
        ],
        "legalFee" => [
          "25,740",
          "35,650",
          "43,850",
          "52,050",
          "21,050",
        ],
        "total" => [
          "49,940~",
          "59,850~",
          "68,050~",
          "76,250~",
          "45,250~",
        ],
        "member" => [
          "44,980~",
          "54,850~",
          "63,050~",
          "71,250~",
          "40,250~",
        ],
      ],
      [
          "title" => "パーフェクトコース",
          "text" => [
              "法定2年点検付/整備保証付/ブレーキオイル・LLC強化剤付",
          ],
          "recommend" => [
            "お車の部品交換・重整備は車検の時に行うと決めている方",
        ],
          "type" => [
              "軽自動車"=>"",
              "小型車" => "1t以下",
              "中型車" => "1t~1.5t以下",
              "大型車" => "1.5t~2t以下",
              "小型貨物" =>"1t~2t以下",
          ],
          "legalFee" => [
            "25,740",
            "35,650",
            "43,850",
            "52,050",
            "21,050",
          ],
          "total" => [
            "55,440~",
            "65,350~",
            "73,550~",
            "81,750~",
            "50,750~",
          ],
          "member" => [
            "50,440~",
            "60,350~",
            "68,550~",
            "76,750~",
            "45,750~",
          ],
        ],
    ];
;?>
<?php foreach($Prices as $price): ?>
    <dl class="c-boxBorder__header">
      <dt class="c-boxBorder__header__title">
        <?php echo $price['title']; ?>
      </dt>
      <dd class="c-boxBorder__header__text">
        <?php echo implode("<br>",$price['text']); ?>
      </dd>
      <dd class="c-boxBorder__header__recommend">
        【こんな方におすすめ】<?php echo implode("<br>", $price['recommend']); ?>
      </dd>
    </dl>
    <table class="c-table">
      <tbody>
        <tr>
          <th class="c-table__des">
            車種・重量
          </th>
          <?php foreach ($price['type'] as $key => $type): ?>
            <th class="c-table__type">
              <span class="c-table__type__top">
                <?php echo $key; ?>
              </span>
              <?php echo $type; ?>
            </th>
          <?php endforeach; ?>
        </tr>
        <tr>
          <th class="c-table__des">
            車検基本料
          </th>
          <td colspan="5" class="c-table__price">
            ¥24,200
          </td>
        </tr>
        <tr>
          <th class="c-table__des">
            法定費用
          </th>
          <?php foreach ($price['legalFee'] as $fee): ?>
            <td class="c-table__price">
              <?php echo $fee;?>
            </td>
          <?php endforeach;?>
        </tr>
        <tr>
          <th class="c-table__des">
            車検総額
          </th>
          <?php foreach ($price['total'] as $total): ?>
            <td class="c-table__price">
              <?php echo $total;?>
            </td>
          <?php endforeach;?>
        </tr>
        <tr>
          <th class="c-table__des">
            スーパー会員価格
          </th>
          <?php foreach ($price['member'] as $member): ?>
            <td class="c-table__price">
              <?php echo $member;?>
            </td>
          <?php endforeach;?>
        </tr>
      </tbody>
    </table>
  <?php endforeach; ?>
  </div>
</section>

<?php include('inc/askedQuestions.php');?>
<section class="l-section02--bg02">
  <?php include('inc/service-section.php');?>
</section>
<?php get_footer(); ?>
