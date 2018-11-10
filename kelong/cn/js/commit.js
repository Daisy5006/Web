$(function(){
    // 语言
    $(".nav-form-img").click(function(){
        $(".language").toggle();
    })




    // 首页banner图
    var swiper = new Swiper('.banner-swiper', {
        loop:true,
        autoplay:5000,
        pagination: '.swiper-pagination',
    });
    // 首页产品
    var proSwiper = new Swiper('.index-pro-swiper',{
        pagination:'.swiper-pagination',
        slidesPerView: 4,
        loop:true,
        autoplay:5000,
        spaceBetween: 30,
        prevButton:'.swiper-button-prev',
        nextButton:'.swiper-button-next',
    })

    //产品页面
    $(".products-body-box li").each(function(i){
        if(i%3==0){
            $(".products-body-box li").eq(i).css({"margin-left":'0px'});
        }
        if(i<3){
            $(".products-body-box li").eq(i).css({"margin-top":'0px'});
        }
    })

    // 生产设备
    $(".equipment-box li").each(function(i){
        if(i%3==0){
            $(".equipment-box li").eq(i).css({"margin-left":'0px'});
        }
        if(i<3){
            $(".equipment-box li").eq(i).css({"margin-top":'0px'});
        }
    })

    // 资质荣誉
    $(".honor-box li").each(function(i){
        if(i%3==0){
            $(".honor-box li").eq(i).css({"margin-left":'0px'});
        }
        if(i<3){
            $(".honor-box li").eq(i).css({"margin-top":'0px'});
        }
    })

    // 客户反馈
    $(".feedback-box li").each(function(i){
        if(i%3==0){
            $(".feedback-box li").eq(i).css({"margin-left":'0px'});
        }
        if(i<3){
            $(".feedback-box li").eq(i).css({"margin-top":'0px'});
        }
    })

    // 联系我们
    function check(){
        var obj = document.form;

        if (obj.姓名.value == "")
        {
            alert("请填写姓名！");
            return false;
        }
        if (obj.标题.value == "")
        {
            alert("请填写标题！");
            return false;
        }
        if (obj.手机.value == "")
        {
            alert("请填写手机！");
            return false;
        }
        if (obj.邮箱.value == "")
        {
            alert("请填写邮箱！");
            return false;
        }
    }
               
})