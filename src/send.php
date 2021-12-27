<?php
if (!empty($_POST)) {
    require_once(__DIR__ . '/config/config.php');
    $send = new Monaka\Send();
    $send->run($adminMail, $adminName, $returnMailTitle, $returnMailHeader, $returnMailFooter);
}
?>

@@include('@@webRoot/parts/header.html',{
"title" : "お問い合わせ | ハンドセラピス Pono",
"description" :
"カラダと心が整うちょうどいいをご提案。ポノでは、ハンドセラピスによるオールハンドのマッサージと機器を使用した美容液カプセルで悩めるカラダやお肌にアプローチ。悩みを繰り返さ後で追加ず自分で整う事の出来るよう、優しすぎず心に寄り添う提案を心がけていきます。",
"keyword" : "Pono,ハンドセラピス,Wishpro,エステ,美肌トリートメント,",

})

<div class="bg">
    <div class="bg-box breadcrumb">
        <ul class="breadcrumb__list contact__list">
            <li class="breadcrumb__itm">
                <a href="@@webRoot/" class="breadcrumb__lnk">
                    ホーム
                </a>
            </li>
            <li class="breadcrumb__itm">
                <p class="breadcrumb__lnk">
                    Contact
                </p>
            </li>
        </ul>
    </div>
</div>
<section class="contact form-sended contact-page">
    <div class="contact__wrapper">
        <div class="container">
            <h2 class="heading-ttl contact--ttl mb-5">
                <span class="heading-en">Contact</span>
                <span class="heading-jp">送信完了</span>
            </h2>
        </div>
        <?php if (!empty($_POST)) { ?>
            <div class="container application-container application-confirm">
                <div class="form-sended__wrapper py-5">
                    <p class="form-sended__text">
                        <?php echo nl2br(h($completionMessage)); ?>
                    </p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
@@include('./parts/footer.html')