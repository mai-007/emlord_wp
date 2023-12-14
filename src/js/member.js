export default function member(){
  function changeImage() {
    // select要素から選択された値を取得
    var selectedStore = document.getElementById("stores").key;

    // 画像を切り替えるためのコード
    var qrImagesContainer = document.getElementById("qrImagesContainer");
    qrImagesContainer.innerHTML = ''; // 一旦中身をクリア

    // 新しい画像を挿入
    var newImage = document.createElement("img");
    newImage.className = "qr_00";
    newImage.src = "<?php echo get_theme_img('qr/'); ?>" + selectedStore + ".gif"; // ファイルの拡張子に注意
    newImage.alt = "エムロード" + selectedStore + "メール会員";
    qrImagesContainer.appendChild(newImage);
  }

}
