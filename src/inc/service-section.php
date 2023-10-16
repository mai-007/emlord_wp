<div class="l-containerM c-service">
  <h3 class="c-title__left">サービス一覧</h3>
  <p class="c-service__text">車に関することならお近くのエムロードへお任せください。</p>
  <ul class="c-service__tabs">
    <?php
      $tabNavigation = [
        '愛車のメンテナンス',
        '修理・交換',
        '車に乗る・保険',
      ];?>
      <?php foreach($tabNavigation as $index=>$value):?>
    <li class="c-service__tabs__item" data-tab=<?php echo $index;?>>
      <?php echo $value;?>
    </li>
    <?php endforeach;?>
  </ul>
  <?php include('service-menu.php');?>
</div>
