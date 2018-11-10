<? include_once("../config.php")?>
<? include_once("./header.php")?>
    <!--banner-->
<?include_once("./banner.php")?>
    <!--主体内容区域-->
    <div class="content w1200">
        <!--工程案例-->
<?include_once("./case-banner.php")?>
        <!--联系我们-->
        <div class="contact box fl">
            <div class="title">Contact Us</div>
            <div class="contact_box">
                <? signerpost("cn","首页联系我们"); ?>
            </div>
        </div>
        <!--新光简介-->
        <div class="about box fr">
            <div class="title">About</div>
            <div class="about_box">
                <div class="about_text">
                    <? signerpost("cn","首页公司简介"); ?>
                </div>
                <div class="about_img"><img src="images/about_img.png" height="169" width="118" /></div>
            </div>
        </div>
        <div class="clear"></div>
        <!--新光产品-->
        <a href="javascript:void(0)" class="xgcp fl"></a>
        <!--新光工程-->
        <a href="javascript:void(0)" class="xggc fr"></a>
        <div class="clear"></div>
        <!--产品展示-->
        <?include_once("./pro-banner.php")?>
    </div>
    <!--底部版权-->
        <?include_once("./footer.php")?>
</div>
</body>
</html>
<? include_once("../bottom.php")?>