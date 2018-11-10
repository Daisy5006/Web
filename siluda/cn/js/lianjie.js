
// JavaScript Document
//设为首页
function SetHome(obj){var url=window.location.href;try{                obj.style.behavior='url(#default#homepage)';                obj.setHomePage(vrl=url);        }        catch(e){                if(window.netscape) {                        try {                                netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");                        }                        catch (e) {                                alert("请先开启firefox设为主页功能！\n在浏览器地址栏输入“about:config”后回车\n将signed.applets.codebase_principal_support的值设置为'true',双击改变。");                        }                        var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);                        prefs.setCharPref('browser.startup.homepage',vrl);                 }        }}
// 加入收藏
function AddFavorite()
{
var url=window.location.href;
try
{
window.external.addFavorite(url, document.title);
}
catch (e)
{
try
{
window.sidebar.addPanel(document.title, url, "");
}
catch (e)
{
alert("加入收藏失败，请使用Ctrl+D进行添加");
}
}
}
