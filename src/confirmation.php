<?php
require_once(__DIR__ . '/config/config.php');
$app = new Monaka\Confirmation();
$app->run($adminMail, $ext_denied, $EXT_ALLOWS, $maxmemory, $max, $_SERVER["CONTENT_LENGTH"]);
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

<section class="contact contact-confirmation">
    <div class="contact__wrapper">
        <div class="container">
            <h2 class="heading-ttl contact--ttl">
                <span class="heading-en">Contact</span>
                <span class="heading-jp">内容のご確認</span>
            </h2>
        </div>
        <div class="container">

            <?php
            if (!empty($_SESSION["submitContent"]) && empty($app->seriousError)) : ?>
                <form action="send.php" method="post" enctype="multipart/form-data" class="contact-form">

                    <?php foreach ($_SESSION["submitContent"] as $key => $value) : ?>
                        <div class="form-group">
                            <!-- <div class="col-12 col-sm-6"> -->
                            <p class="form-label align-items-center">
                                <?php echo h($key); ?><span class="form-label--sy">※</span>
                            </p>
                            <!-- </div> -->
                            <!-- <div class="col-12 col-sm-6"> -->
                            <p class="form-control inquiry-form__value">
                                <?php
                                if (empty($app->err[$key])) {
                                    if (strpos($value, "\n") !== false) {
                                        echo nl2br(h($value));
                                    } else {
                                        echo empty($value) && (string)$value !== "0" ? "&nbsp;\n" : h($value);
                                    }
                                } else {
                                    echo "<span class=\"err\">{$app->err[$key]}</span>";
                                }
                                ?>
                            </p>
                            <!-- </div> -->
                        </div>
                    <?php endforeach; ?>

                    <div class="confirmation-btns d-flex flex-wrap justify-content-center mb-5">
                        <input type="hidden" name="requiredItem[name]" value="<?php echo h($app->requiredItem["name"]); ?>">
                        <input type="hidden" name="requiredItem[mailaddress]" value="<?php echo h($app->requiredItem["mailaddress"]); ?>">
                        <input type="hidden" name="token" value="<?php echo h($_SESSION['token']); ?>">
                        <div class="d-flex justify-content-end form-left">
                            <input type="button" value="戻る" class="btn-red btn-red--md btn-back mr-md-3 mb-3" onclick="history.back();">
                        </div>
                        <?php if (empty($app->err) && empty($app->seriousError)) {
                            echo "<div class=\"form-arrow -back d-flex justify-content-start\">";
                            echo "<input type=\"submit\" value=\"送信する\" class=\"btn-red btn-red--md mb-3\">";
                            echo "</div>";
                        } ?>
                    </div>
                </form>
            <?php else : ?>
                <div class="form-group confim-submit d-flex">
                    <input type="button" value="この内容で送信" class="btn-red btn-red--md" onclick="history.back();">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

@@include('./parts/footer.html')