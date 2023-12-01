<?php
  $storeService = get_field('store-service');
?>
  <?php foreach ($storeService as $service) : ?>
    <div class="store__service__inner">
      <?php if ($service === '車検・法定点検') : ?>
        <a href="inspection">
          <div class="store__service__icon">
            <img src="<?php echo get_theme_img('store/inspection.svg'); ?>" alt="">
      <?php elseif ($service === '洗車') : ?>
        <a href="carwash">
          <div class="store__service__icon">
            <img src="<?php echo get_theme_img('store/carWash.svg'); ?>" alt="">
      <?php elseif ($service === 'コーティング') : ?>
        <a href="coating">
          <div class="store__service__icon">
            <img src="<?php echo get_theme_img('store/coating.svg'); ?>" alt="">
      <?php elseif ($service === 'タイヤ交換') : ?>
        <a href="tire">
          <div class="store__service__icon">
            <img src="<?php echo get_theme_img('store/tire.svg'); ?>" alt="">
      <?php elseif ($service === 'オイル交換') : ?>
        <a href="oil">
          <div class="store__service__icon">
            <img src="<?php echo get_theme_img('store/oil.svg'); ?>" alt="">
      <?php elseif ($service === 'バッテリー交換') : ?>
        <a href="battery">
          <div class="store__service__icon">
            <img src="<?php echo get_theme_img('store/battery.svg'); ?>" alt="">
      <?php elseif ($service === 'キズ・凹み修理') : ?>
        <a href="repair">
          <div class="store__service__icon">
            <img src="<?php echo get_theme_img('store/repair.svg'); ?>" alt="">
      <?php elseif ($service === 'ブレーキ') : ?>
        <a href="brake">
          <div class="store__service__icon">
            <img src="<?php echo get_theme_img('store/brake.svg'); ?>" alt="">
      <?php elseif ($service === 'エアコン') : ?>
        <a href="aircon">
          <div class="store__service__icon">
            <img src="<?php echo get_theme_img('store/aircon.svg'); ?>" alt="">
      <?php elseif ($service === 'ラジエーター') : ?>
        <a href="radiator">
          <div class="store__service__icon">
            <img src="<?php echo get_theme_img('store/radiator.svg'); ?>" alt="">
      <?php elseif ($service === '車買取・販売') : ?>
        <a href="sales">
          <div class="store__service__icon">
            <img src="<?php echo get_theme_img('store/sale.svg'); ?>" alt="">
      <?php elseif ($service === '保険') : ?>
        <a href="insurance">
          <div class="store__service__icon">
            <img src="<?php echo get_theme_img('store/insurance.svg'); ?>" alt="">
      <?php elseif ($service === 'レンタカー') : ?>
        <a href="rental">
          <div class="store__service__icon">
            <img src="<?php echo get_theme_img('store/rental.svg'); ?>" alt="">
      <?php elseif ($service === 'カーリース') : ?>
        <a href="lease">
          <div class="store__service__icon">
            <img src="<?php echo get_theme_img('store/lease.svg'); ?>" alt="">
      <?php endif; ?>
    </div>
  <span>
    <?php echo $service; ?>
  </span>
</a>
</div>
<?php endforeach; ?>
