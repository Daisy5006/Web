<div class="case box fl">
            <div class="title">
                Project Case
                <ul class="icon_ul1">
                    <li class="	li_on"></li>

                </ul>
            </div>
            <div class="case_box">
                <ul class="banner_ul">
                <?
                    $proObj=productlist("工程案例", "", "cn", "1", "6");
                    $proArr=$proObj['proArr'];
                    foreach($proArr as $proList){
                ?>
                    <li>
                        <a href="javascript:void(0)">
                            <img src="/web/Public/Uploads/Product/<?=$proList->SMALLPIC?>" height="132" width="345" />
                        </a>
                    </li>
                    <? } ?>
                </ul>
                <script>
                    //case图滚动
                    $(function(){
						//创造小点
						$('.banner_ul li').each(function(i){
							$('.icon_ul1').append($("<li></li>"));
						})
                        $('.banner_ul li:first').css({"z-index":"3","opacity":"1"});
                        var index = 1;
                        var ul_li = $('.banner_ul li');
                        var icon_li = $('.icon_ul1 li');
                        var img_length = $('.banner_ul li').length;
						
                        //小点变色
                        $('.icon_ul1 li').mouseover(function(){
                            $(this).addClass('li_on').siblings('li').removeClass('li_on');
                            var _index = $(this).index();
                            var ul_li = $('.banner_ul li');
                            ul_li.eq(_index).stop(true,false).animate({opacity:'1'},1000).siblings('li').stop(true,false).animate({opacity:'0'},1000);
                            ul_li.eq(_index).css("z-index","3").siblings('li').css("z-index","2");
                            index = _index;
                        });
                        //自动切换

                        $('.banner_ul').hover(function(){
                            clearInterval(picTimer);
                        },function(){
                            picTimer = setInterval(function(){
                                ul_li.eq(index).stop(true,false).animate({opacity:'1'},1000).siblings().stop(true,false).animate({opacity:'0'},1000);
                                ul_li.eq(index).css("z-index","3").siblings('li').css("z-index","2");
                                icon_li.eq(index).addClass('li_on').siblings('li').removeClass('li_on');
                                index++;
                                if(index == img_length){
                                    index = 0;
                                }
                            },3000);
                        }).trigger("mouseout");
                    });
                </script>
            </div>
        </div>