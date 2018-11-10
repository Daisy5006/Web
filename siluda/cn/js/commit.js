$(function () {


  var map = new BMap.Map("allmap");
  var point = new BMap.Point(121.506377, 31.245105);
  map.centerAndZoom(point, 18);
  var marker = new BMap.Marker(point); // 创建标注
  map.addOverlay(marker); // 将标注添加到地图中
  marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
  map.enableScrollWheelZoom(); //启用滚轮放大缩小，默认禁用
  map.enableContinuousZoom(); //启用地图惯性拖拽，默认禁用


  var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
    '<img src="../img/baidu.jpg" alt="" style="float:right;zoom:1;overflow:hidden;width:100px;height:100px;margin-left:3px;"/>' +
    '地址：北京市海淀区上地十街10号<br/>电话：(010)59928888<br/>简介：百度大厦位于北京市海淀区西二旗地铁站附近，为百度公司综合研发及办公总部。' +
    '</div>';

  //创建检索信息窗口对象
  var searchInfoWindow = null;
  searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
    title: "百度大厦", //标题
    width: 290, //宽度
    height: 105, //高度
    panel: "panel", //检索结果面板
    enableAutoPan: true, //自动平移
    searchTypes: [
      BMAPLIB_TAB_SEARCH, //周边检索
      BMAPLIB_TAB_TO_HERE, //到这里去
      BMAPLIB_TAB_FROM_HERE //从这里出发
    ]
  });
  // var marker = new BMap.Marker(point); //创建marker对象
  marker.enableDragging(); //marker可拖拽
  marker.addEventListener("click", function (e) {
    searchInfoWindow.open(marker);
  })
  map.addOverlay(marker); //在地图中添加marker

  var searchInfoWindow1 = new BMapLib.SearchInfoWindow(map, "信息框1内容", {
    title: "信息框1", //标题
    panel: "panel", //检索结果面板
    enableAutoPan: true, //自动平移
    searchTypes: [
      BMAPLIB_TAB_FROM_HERE, //从这里出发
      BMAPLIB_TAB_SEARCH //周边检索
    ]
  });

  function openInfoWindow1() {
    searchInfoWindow1.open(new BMap.Point(121.506377, 31.245105));
  }



  // 添加带有定位的导航控件
  var navigationControl = new BMap.NavigationControl({
    // 靠左上角位置
    anchor: BMAP_ANCHOR_TOP_LEFT,
    // LARGE类型
    type: BMAP_NAVIGATION_CONTROL_LARGE,
    // 启用显示定位
    enableGeolocation: true
  });
  map.addControl(navigationControl);
  // 添加定位控件
  var geolocationControl = new BMap.GeolocationControl();
  geolocationControl.addEventListener("locationSuccess", function (e) {
    // 定位成功事件
    var address = '';
    address += e.addressComponent.province;
    address += e.addressComponent.city;
    address += e.addressComponent.district;
    address += e.addressComponent.street;
    address += e.addressComponent.streetNumber;
    alert("当前定位地址为：" + address);
  });
  geolocationControl.addEventListener("locationError", function (e) {
    // 定位失败事件
    alert(e.message);
  });
  map.addControl(geolocationControl);


  // 返回顶部
  $(".returnTop").click(function () {
    $('html,body').animate({
      scrollTop: 0
    }, 300);
  });
  $(window).on('scroll', function () { /*当滚动条的垂直位置大于浏览器所能看到的页面的那部分的高度时，回到顶部按钮就显示 */
    if ($(window).scrollTop() > 200) /*当顶部的距离大于200px的时候显示*/
      $(".returnTop").fadeIn();
    else
      $(".returnTop").fadeOut();
  });
  $(window).trigger('scroll'); /*触发滚动事件，避免刷新的时候显示回到顶部按钮*/
  console.log($(window).height());


  // wow动画
  new WOW().init();


  // 关于我们轮播图
  var marquee1 = new Marquee("pic_s")
    marquee1.Direction = "top";
    marquee1.Step = 3;
    marquee1.Width =270;
    marquee1.Height = 582;
    marquee1.Timer = 50;
    marquee1.DelayTime =0;
    marquee1.WaitTime = 0;
    marquee1.ScrollStep = 0;
    marquee1.Start();


    // 放大鏡
    $(".jqzoom").imagezoom();
	
    $("#thumblist li a").click(function(){
      $(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
      $(".jqzoom").attr('src',$(this).find("img").attr("mid"));
      $(".jqzoom").attr('rel',$(this).find("img").attr("big"));
    });   
    

    // 新闻轮播图
    var marquee2 = new Marquee("new_pic")
    marquee2.Direction = "left";
    marquee2.Step = 3;
    marquee2.Width =1200;
    marquee2.Height = 210;
    marquee2.Timer = 70;
    marquee2.DelayTime =0;
    marquee2.WaitTime = 0;
    marquee2.ScrollStep = 20;
    marquee2.Start();

})