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
                <div class="weizhi">Your current position：<a href="index.php">Index</a>&nbsp;&gt;&nbsp;<a href="javascript:void(0)">Honor</a></div>
            </div>
            <div class="right_box">
                <div class="honorsd">
                <?
                        if (isset($_REQUEST['pid']) && $_REQUEST['pid']>0)
                        {
                            $pid = $_REQUEST['pid'];
                            $proDetailRs = $maindb->Execute("SELECT * FROM t_products WHERE IsShow=1 AND id=?",array($pid));
                            if ($proDetailRs->RecordCount() >0)
                            {
                                $proObj = $proDetailRs->FetchObject();
                                ?>
                                <!-- <div style=" clear:both;">
                                    <?=$proObj->CONTENT?>
                                </div> -->
                            <?
                            }
                            else
                            {
                                @header("HTTP/1.1 404 Not Found");
                                @header("Status: 404 Not Found");
                                exit();
                            }
                        }
                        else
                        {
                            @header("HTTP/1.1 404 Not Found");
                            @header("Status: 404 Not Found");
                            exit();
                        }
                ?>
                    <h2 class="honor_name"><?=$proObj->PRONAME?></h2>
                    <div class="honorsd_pic">
                        <img src="/web/Public/Uploads/Product/<?=$proObj->SMALLPIC?>" >
                    </div>
                    <div class="honorsd_instro">
                        <strong>荣誉详情</strong>
                        <?=$proObj->CONTENT?>
                    </div>
                </div>

            </div>
            <div class="pager">
                <span>
                		                        <a  id="preLink" href="honorsd.php?pid=<? $rd = $maindb->Execute("SELECT * FROM t_products WHERE IsShow=1 AND TypeID='".$proObj->TYPEID."' AND OrderBy<".$proObj->ORDERBY." ORDER BY OrderBy DESC limit 0,1");
                		                        if ($rd->RecordCount() == 1)
                		                        { echo $rd->fields['id'] ;} else {echo $proObj->ID;}?>&tid=<?=$proObj->TYPEID?>"   style="margin:0px 8px;">上一个</a>
                                		    </span>
                                  			<span>
                		                        <a  id="nextLink" href="honorsd.php?pid=<? $rd = $maindb->Execute("SELECT * FROM t_products WHERE IsShow=1 AND TypeID='".$proObj->TYPEID."'  AND OrderBy>".$proObj->ORDERBY." ORDER BY OrderBy limit 0,1");
                		                        if ($rd->RecordCount() == 1)
                		                        { echo $rd->fields['id'] ;} else {echo $proObj->ID;}?>&tid=<?=$proObj->TYPEID?>"  style="margin:0px 8px;">下一个</a>
                                   			</span>
            </div>
        </div>
    </div>

    <!--底部版权-->
    <?include_once("./footer.php")?>
</div>
</body>
</html>
<? include_once("../bottom.php")?>
