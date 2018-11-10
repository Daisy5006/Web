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
                Regulations
                <div class="weizhi">Your current position：<a href="index.php">Index</a>&nbsp;&gt;&nbsp;<a href="regulations.php ">Regulations</a></div>
            </div>
            <div class="right_box">
            <?
                if (isset($_REQUEST['nid']) && $_REQUEST['nid']>0)
                {
                    $nid = $_REQUEST['nid'];
                    $newsRs = $maindb->Execute("SELECT * FROM t_news WHERE IsShow=1 AND id=?",array($nid));
                    if ($newsRs->RecordCount() >0)
                    {
                        $maindb->Execute("UPDATE t_news SET Hits=Hits+1 WHERE id=?",array($nid));
                        $newsObj = $newsRs->FetchObject();
                    }
                }
            ?>
                <div class="news_tit">
                    <h2><?=$newsObj->TITLE?></h2>
                    <p>
                        <b>Hits:&nbsp;</b><span style="color: red;"><?=$newsObj->HITS?></span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <b>Release time:&nbsp;</b><span>[<?echo date("Y.m.d",strtotime($newsList->NOTETIME));?>]</span>
                    </p>
                </div>
                <div class="news_body">
                    <?=$newsObj->CONTENT?>
                </div>
            </div>
            <div class="ny-pager">
                <div>
                      <a  id="preLink" href="regulationsd.php?nid=<? $rd = $maindb->Execute("SELECT * FROM t_news WHERE IsShow=1 AND NewType='".$newsObj->NEWTYPE."' AND OrderBy<".$newsObj->ORDERBY." ORDER BY OrderBy DESC limit 0,1");
                                            if ($rd->RecordCount() == 1)
                                            { echo $rd->fields['id'] ;} else {echo $newsObj->ID;}?>&gid=<?=$_REQUEST['gid']?>"   style="margin:0px 8px; color:#666;">Previous Posts:<? $rd = $maindb->Execute("SELECT * FROM t_news WHERE IsShow=1 AND NewType='".$newsObj->NEWTYPE."' AND OrderBy<".$newsObj->ORDERBY." ORDER BY OrderBy DESC limit 0,1");
                                            if ($rd->RecordCount() == 1)
                                            { echo $rd->fields['Title'] ;} else {echo $newsObj->TITLE;}?></a>
                                     </div>
                                     <div>
                                         <a  id="nextLink" href="regulationsd.php?nid=<? $rd = $maindb->Execute("SELECT * FROM t_news WHERE IsShow=1 AND NewType='".$newsObj->NEWTYPE."'  AND OrderBy>".$newsObj->ORDERBY." ORDER BY OrderBy limit 0,1");
                                                if ($rd->RecordCount() == 1)
                                                { echo $rd->fields['id'] ;} else {echo $newsObj->ID;}?>&gid=<?=$_REQUEST['gid']?>"  style="margin:0px 8px; color:#666;">Next Chapter:<? $rd = $maindb->Execute("SELECT * FROM t_news WHERE IsShow=1 AND NewType='".$newsObj->NEWTYPE."'  AND OrderBy>".$newsObj->ORDERBY." ORDER BY OrderBy limit 0,1");
                                                if ($rd->RecordCount() == 1)
                                                { echo $rd->fields['Title'] ;} else {echo $newsObj->TITLE;}?></a>
                                     </div>
            </div>
        </div>
    </div>
    <!--底部版权-->
        <?include_once("./footer.php")?>
</div>
</body>
</html>
<? include_once("../bottom.php")?>
