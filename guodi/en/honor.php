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
                Honor
                <div class="weizhi">Your current position：<a href="index.html">Index</a>&nbsp;&gt;&nbsp;<a href="javascript:void(0)">Honor</a></div>
            </div>
            <div class="right_box">
                <ul class="honor">
                <?
                    $linkurl = $_SERVER["PHP_SELF"]."?";
                    $proObj=productlist("资质荣誉","","cn","0","9");
                    $proArr=$proObj['proArr'];
                    foreach($proArr as $proList){
                 ?>
                    <li class="fl">
                        <a href="honorsd.php?gid=<?=$typeID?>&pid=<?=$proList->ID?>">
                            <img src="/web/Public/Uploads/Product/<?=$proList->SMALLPIC?>" alt="">
                        </a>
                        <div class="honor_tit">
                            <a href="honorsd.php?gid=<?=$typeID?>&pid=<?=$proList->ID?>"><?=$proList->PRONAME?></a>
                        </div>
                    </li>
                    <? }?>
                </ul>
                <div class="clear"></div>
                <div class="pager">
                    <?
                        $proPagerShow=$proObj['pagerShow'];
                        echo $proPagerShow->render();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            $('.honor li').each(function(i){
                if(2 >= i){
                    $(this).css({'margin-top':0,})
                }
                if(i%3==0){
                    $(this).css({'margin-left':0,})
                }
            });
        });
    </script>
    <!--底部版权-->
    <?include_once("./footer.php")?>
</div>
</body>
</html>
<? include_once("../bottom.php")?>
