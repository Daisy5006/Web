<? include_once("../config.php")?>
<? include_once("./header.php")?>
    <!--banner-->
<?include_once("./banner-about.php")?>
    <!--主体内容区域-->
    <div id="main" class="w1200">
        <!--左侧-->
        <?include_once("./left.php")?>
        <!--右侧-->
        <div class="main_right fr">
            <div class="right_title">
                政策法规
                <div class="weizhi">您当前的位置：<a href="index.php">首页</a>&nbsp;&gt;&nbsp;<a href="javascript:void(0)">政策法规</a></div>
            </div>
            <div class="right_box">
                <ul class="regulation">
                <?
                    $newsObj=newslist("政策法规","cn","1","5");
                    $newsArr=$newsObj['newsArr'];
                    foreach($newsArr as $newsList){
                ?>
                    <li>
                        <a href="regulationsd.php?gid=<?=$typeID?>&nid=<?=$newsList->ID?>" class="fl">
                            <?=$newsList->TITLE?>
                        </a>
                        <span class="data fr">[<?echo date("Y-m-d",strtotime($newsList->NOTETIME));?>]</span>
                    </li>
                    <? } ?>
                </ul>
            </div>
            <div class="pager">
                <?
                    $newsPagerShow=$newsObj['pagerShow'];
                    $newsPagerShow->lanAll = "共有";
                    $newsPagerShow->lanItems = "条";
                    echo $newsPagerShow->render();
                ?>
            </div>
        </div>
    </div>
    <!--底部版权-->
        <?include_once("./footer.php")?>
</div>
</body>
</html>
<? include_once("../bottom.php")?>