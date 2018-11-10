<div class="pro_title">产品展示</div>
<div class="pro_scroll">
    <div id="pic_s">
        <table>
            <tr>
            <?
                $proObj=productlist("产品展示", "", "cn", "1", "6");
                $proArr=$proObj['proArr'];
                foreach($proArr as $proList){
            ?>
                <td style="padding:0px 5px; text-align:center;">
                    <a href="javascript:void(0)">
                        <img src="/web/Public/Uploads/Product/<?=$proList->SMALLPIC?>" height="132" width="345" />
                        <p><?=$proList->PRONAME?></p>
                    </a>
                </td>
                <? } ?>
            </tr>
        </table>
    </div>
    <script language="javascript" src="js/MSClass.js"></script>
    <script language="javascript">
        var marquee1 = new Marquee("pic_s")
        marquee1.Direction = "left";
        marquee1.Step = 2;
        marquee1.Width =1200;
        marquee1.Height = 175;
        marquee1.Timer = 50;
        marquee1.DelayTime =0;
        marquee1.WaitTime = 0;
        marquee1.ScrollStep = 52;
        marquee1.Start();
    </script>
</div>