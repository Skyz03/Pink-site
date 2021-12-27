<?php
// ----------基本設定開始---------- //

// 送信先メールアドレス
// $adminMail = "vivek@parijat.asia";
$adminMail = "pujan@aozora-okinawa.com";


// 送信先メールアドレスを配列化(編集しないでください)
$adminArray = array();
$adminArray = explode(',', $adminMail);

// 送信者名
$adminName = "Pono";


// 送信後に戻るURL
$returnUrl = "index.html";

// リターンメールのメールタイトル
$returnMailTitle = "【Pono】お問合せありがとうございます。";

// リターンメールのヘッダーメッセージ
$completionMessage = <<<EOD
お問い合わせ頂きありがとうございました。
内容によっては回答をさしあげるのにお時間をいただく場合もございます。
また、休業日は翌営業日以降の対応となりますのでご了承ください。
EOD;


// リターンメールのフッターメッセージ
$returnMailFooter = <<<EOD
------------------------------------------------- 

※本メールは、プログラムから自動で送信しています。
心当たりの無い方は、お手数ですが削除してください。
もしくは、そのまま送信元に返信していただければと思います。

-------------------------------------------------

===============================================
Pono Body Care
運営会社：株式会社 ジョイント
住所：〒901-2224
　　　沖縄県宜野湾市真志喜 3 丁目 17 番 12 号
===============================================

EOD;

// ----------基本設定終了---------- //


// ----------添付ファイル設定開始---------- //

// 拡張子制限（0=しない・1=する）
$ext_denied = 1;
// 許可する拡張子リスト
$ext_allow1 = "jpg";
$ext_allow2 = "jpeg";
$ext_allow3 = "gif";
$ext_allow4 = "pdf";
// 配列に格納しておく
$EXT_ALLOWS = array($ext_allow1, $ext_allow2, $ext_allow3, $ext_allow4);

// アップロード容量制限（0=しない・1=する）
$maxmemory = 1;
// 最大容量（KB）
$max = 3000;

// ----------添付ファイル設定終了---------- //


// ----------ここから下は変更不要---------- //

require_once(__DIR__ . "/../lib/functions.php");
require_once(__DIR__ . "/autoload.php");

session_start();