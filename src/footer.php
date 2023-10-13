<?php wp_footer(); ?>
<footer class="l-footer">
  <div class="l-footer__top">
    <img class="c-logo"
      src="<?php echo get_theme_img('common/logo.png');?>" alt="エムロードのロゴマーク">
    <div class="c-sns-nav--footer">
      <span>FOLLOW US</span>
      <img src="<?php echo get_theme_img('common/sns_icon-instagram.svg') ;?>" alt="">
      <img src="<?php echo get_theme_img('common/sns_icon-youtube.svg') ;?>" alt="">
      <span class="c-mapIcon">
        <span class="c-mapIcon__text">MAP</span>
        <img src="<?php echo get_theme_img('common/icon_map.svg') ;?>" alt="">
      </span>
    </div>
  </div>
<div class="l-footer__main l-flexRowToColumn">
  <div class="l-flexColumn l-footer__banner">
    <img src="<?php echo get_theme_img('common/banner_coating-sp.png') ;?>" alt="" alt="">
    <img src="<?php echo get_theme_img('common/banner_inspection-sp.png') ;?>" alt="" alt="">
  </div>
  <div class="l-flexColumn">
    <nav class="l-footer__service">
      <ul class="l-footer__service__block">
          <h6 class="l-footer__title">
            愛車のメンテナンス
          </h6>
          <?php
            $footerService01 = [
              [ 'name' => '車検・法定点検',
                'href' => '#'
              ],
              [
              'name' => '洗車',
              'href' => '#'
              ],
              [
                'name' => 'コーティング',
                'href' => '#'
              ],
              [
                'name' => 'エアコン',
                'href' => '#'
              ],
              [
                'name' => 'ブレーキ',
                'href' => '#'
              ],
              [
                'name' => 'ラジエーター',
                'href' => '#'
              ],
            ]
          ;?>
            <?php foreach($footerService01 as $value):?>
            <li class="l-footer__item">
              <a href="<?php echo $value['href'];?>">
              <span><?php echo $value['name'];?></span>
              <img src="<?php echo get_theme_img('common/arrow_right-small-white.svg');?>" alt="">
              </a>
            </li>
            <?php endforeach;?>
          </ul>
          <ul class="l-footer__service__block">
          <h6 class="l-footer__title">
            修理・交換
          </h6>
          <?php
            $footerService02 = [
              [ 'name' => 'キズ・凹み修理',
                'href' => '#'
              ],
              [
              'name' => 'タイヤ交換',
              'href' => '#'
              ],
              [
                'name' => 'オイル交換',
                'href' => '#'
              ],
              [
                'name' => 'バッテリー交換',
                'href' => '#'
              ],
            ]
          ;?>
            <?php foreach($footerService02 as $value):?>
            <li class="l-footer__item">
              <a href="<?php echo $value['href'];?>">
              <span><?php echo $value['name'];?></span>
              <img src="<?php echo get_theme_img('common/arrow_right-small-white.svg');?>" alt="">
              </a>
            </li>
            <?php endforeach;?>
          </ul>
          <ul class="l-footer__service__block">
          <h6 class="l-footer__title">
            修理・交換
          </h6>
          <?php
            $footerService03 = [
              [ 'name' => '車買取・販売',
                'href' => '#'
              ],
              [
              'name' => 'レンタカー',
              'href' => '#'
              ],
              [
                'name' => '自動車保険',
                'href' => '#'
              ],
              [
                'name' => 'カーリース',
                'href' => '#'
              ],
            ]
          ;?>
            <?php foreach($footerService03 as $value):?>
            <li class="l-footer__item">
              <a href="<?php echo $value['href'];?>">
              <span><?php echo $value['name'];?></span>
              <img src="<?php echo get_theme_img('common/arrow_right-small-white.svg');?>" alt="">
              </a>
            </li>
            <?php endforeach;?>
          </ul>
        </nav>

    <nav class="l-footer__sitemap">
      <ul>
      <?php
            $footerSitemap = [
              [ 'name' => '店舗一覧',
                'href' => '#'
              ],
              [
              'name' => '会社案内',
              'href' => '#'
              ],
              [
                'name' => 'カーライフ豆知識',
                'href' => '#'
              ],
              [
                'name' => 'お得なメール会員',
                'href' => '#'
              ],
              [
                'name' => '動画・CM一覧',
                'href' => '#'
              ],
              [
                'name' => '採用情報',
                'href' => '#'
              ],
              [
                'name' => 'お問い合わせ',
                'href' => '#'
              ],
            ]
          ;?>
            <?php foreach($footerSitemap as $value):?>
            <li class="l-footer__title">
              <a href="<?php echo $value['href'];?>">
              <?php echo $value['name'];?>
              <img src="<?php echo get_theme_img('common/arrow_right-small-white.svg');?>" alt="">
              </a>
            </li>
            <?php endforeach;?>
      </ul>
    </nav>
  </div>
</div>
</footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.5.4/vegas.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
<script src="<?php echo get_template_directory_uri().'/js/bundle.js';?>"></script>
</html>
