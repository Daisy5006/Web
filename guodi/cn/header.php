<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?=GetGlobalTitle("cn");?></title>
    <meta name="keywords" content="<?=GetGlobalKeywords("cn");?>" />
    <meta name="description" content="<?=GetGlobalDescription("cn");?>" />
    <link rel="stylesheet" type="text/css" href="css/base.css"/>
    <link rel="stylesheet" type="text/css" href="css/layout.css"/>
    <link rel="stylesheet" type="text/css" href="css/basic.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script language="javascript" src="js/MSClass.js"></script>
    <script type="text/javascript" src="js/lianjie.js"></script>
    <!--[if IE 6]>
    <script type="text/javascript" src="js/DD_belatedPNG.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('*');
    </script>
    <![endif]-->
</head>

<body>
<div id="wrap">
    <!--头部-->
    <div id="top">
        <div class="top_content w1200">
            <div class="top_left">欢迎来到我的家 ！</div>
            <ul class="language fr">
                <li><a href="javascript:void(0)" class="lan1">中文版</a></li>
                <li class="bg_none"><a href="javascript:void(0)" class="lan2">English</a></li>
            </ul>
        </div>
    </div>
    <div id="header">
        <div class="header_content w1200">
            <a href="index.php" class="logo"><img src="images/logo.png" /></a>
            <!--导航栏-->
            <ul id="nav">
                <li><a href="index.php" class="nav_a current">首页</a></li>
                <li><a href="about.php" class="nav_a">公司简介</a></li>
                <li><a href="honor.php" class="nav_a">资质荣誉</a></li>
                <li><a href="assessment.php" class="nav_a">评估指南</a></li>
                <li><a href="regulations.php" class="nav_a">政策法规</a></li>
                <li><a href="contact.php" class="nav_a">联系我们</a></li>
            </ul>
        </div>
    </div>
   <script>
   //获取nav
       //获取所有li
       var liLists = $("#nav").children().children("li");
       //获取URL
       var thisLink = document.location.href;
       //获取a标签
       for(var i=0;i<liLists.length;i++){
           var links = liLists[i].getElementsByTagName("a");
           for(var j=0;j<links.length;j++){
               //获取a标签内的href
               var linkss = links[j].getAttribute("href");
               //清空所有a标签上的class
               links[j].className = "";
               //如果href在URL中给a标签添加class
               if(thisLink.indexOf(linkss) !== -1){
                   links[j].className = "current";
               }
           }
       }
       //解决方案下的二级链接 一级导航添加class问题
               var thisTwo = ["honorsd.php","regulationsd.php"];
               if(thisLink.indexOf(thisTwo[0]) !== -1){
                   var thisA = liLists[2].getElementsByTagName("a")[0];
                   thisA.className = "current";
               }else if(thisLink.indexOf(thisTwo[1]) !== -1){
                   var thisA = liLists[4].getElementsByTagName("a")[0];
                   thisA.className = "current";
               }

   </script>