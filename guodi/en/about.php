<? include_once("../config.php")?>
<? include_once("./header.php")?>
    <!--banner-->
<?include_once("./banner-about.php")?>
    <!--主体内容区域-->
    <div id="main" class="w1200">
        <!--右侧-->
        <div class="main_right_about  fr">
            <div class="right_title">
                About
                <div class="weizhi">Your current position：<a href="index.php">Index</a>&nbsp;&gt;&nbsp;<a href="javascript:void(0)">About</a></div>
            </div>
            <div class="right_box">
                <? signerpost("cn","公司简介"); ?>
            </div>
        </div>
    </div>
    <!--底部版权-->
        <?include_once("./footer.php")?>
</div>
</body>
</html>
<? include_once("../bottom.php")?>