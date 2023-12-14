<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 追加: フォームからのデータを取得
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);

    if ($email) {
        // 既存のコードと同じくメール送信
        $to = $email;
        $subject = "新しいメールが届きました";
        $message = "新しいメールが届きました。\n\nメールアドレス: " . $email;
        mail($to, $subject, $message);

        // 送信後の処理（例: ユーザーにメッセージを表示）
        echo "メールが送信されました。お問い合わせいただきありがとうございます。";
    } else {
        // メールアドレスが無効な場合の処理
        echo "エラー: 無効なメールアドレスです。";
    }
} else {
    // POSTリクエストでない場合はエラーを表示
    echo "エラー: 不正なリクエストです。";
}

?>
