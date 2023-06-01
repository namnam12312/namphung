<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html b:templateUrl='indie.xml' b:version='2' class='v2' expr:dir='data:blog.languageDirection' lang='vi-VN' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'> <html xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'/>
<head>
<link crossorigin='anonymous' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' rel='stylesheet'/>
<!-- [ Meta Tag SEO ] -->
<include expiration='7d' path='*.css'/>
<include expiration='7d' path='*.js'/>
<include expiration='3d' path='*.gif'/>
<include expiration='3d' path='*.jpeg'/>
<include expiration='3d' path='*.jpg'/>
<include expiration='3d' path='*.png'/>
<meta charset='utf-8'/>
<meta content='width=device-width, initial-scale=1' name='viewport'/>
<meta content='blogger' name='generator'/>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<link href='http://www.blogger.com/openid-server.g' rel='openid.server'/>
<link expr:href='data:blog.homepageUrl' rel='openid.delegate'/>
<link expr:href='data:blog.url' rel='canonical'/>
<b:if cond='data:blog.pageType == &quot;index&quot;'>
<title><data:blog.pageTitle/></title>
<b:else/>
<b:if cond='data:blog.pageType != &quot;error_page&quot;'>
<title><data:blog.pageName/> - <data:blog.title/></title>
</b:if></b:if>
<b:if cond='data:blog.pageType == &quot;error_page&quot;'>
<title>Page Not Found - <data:blog.title/></title>
</b:if>
<b:if cond='data:blog.pageType == &quot;archive&quot;'>
<meta content='noindex' name='robots'/>
</b:if>
<b:if cond='data:blog.searchLabel'>
<meta content='noindex,nofollow' name='robots'/>
</b:if>
<b:if cond='data:blog.isMobile'>
<meta content='noindex,nofollow' name='robots'/>
</b:if>
<b:if cond='data:blog.pageType != &quot;error_page&quot;'>
<meta expr:content='data:blog.metaDescription' name='description'/>
<b:if cond='data:blog.homepageUrl != data:blog.url'>
<meta expr:content='data:blog.pageName + &quot;, &quot; + data:blog.pageTitle + &quot;, &quot; + data:blog.title' name='keywords'/>
</b:if></b:if>
<b:if cond='data:blog.url == data:blog.homepageUrl'>
<meta content='Blog Hồng Chia Sẻ Kiến Thức SEO và Blogspot' name='keywords'/></b:if>
<link expr:href='data:blog.homepageUrl + &quot;feeds/posts/default&quot;' expr:title='data:blog.title + &quot; - Atom&quot;' rel='alternate' type='application/atom+xml'/>
<link expr:href='data:blog.homepageUrl + &quot;feeds/posts/default?alt=rss&quot;' expr:title='data:blog.title + &quot; - RSS&quot;' rel='alternate' type='application/rss+xml'/>
<link expr:href='&quot;http://www.blogger.com/feeds/&quot; + data:blog.blogId + &quot;/posts/default&quot;' expr:title='data:blog.title + &quot; - Atom&quot;' rel='alternate' type='application/atom+xml'/>
<b:if cond='data:blog.pageType == &quot;item&quot;'>
<b:if cond='data:blog.postImageThumbnailUrl'>
<link expr:href='data:blog.postImageThumbnailUrl' rel='image_src'/>
</b:if></b:if>
<link expr:href='data:blog.url' hreflang='x-default' rel='alternate'/>
<link href='/favicon.ico' rel='icon' type='image/x-icon'/>
<link href='https://www.facebook.com/bloghongseo/' rel='publisher'/>
<link href='https://www.facebook.com/manhongit89' rel='author'/>
<link href='https://plus.google.com/112362448205751880659' rel='me'/>
<meta content='c19ef6c26b764599a666ead4f1706522' name='p:domain_verify'/>
<meta content='76DB5C79D45AA377D1117989CFAC4AB2' name='msvalidate.01'/>
<meta content='1b959e1cab129df426ce457203636bdd' name='p:domain_verify'/>
<meta content='XHbfbkdUvgZ-CyIhgJdfxR9kdpoF2ngtfZZHmrgXc-4' name='google-site-verification'/>
<meta content='Vietnam' name='geo.placename'/>
<meta content='Đỗ Mạnh Hồng' name='Author'/>
<meta content='general' name='rating'/>
<meta content='id' name='geo.country'/>
<!-- [ Social Media Meta Tag ] -->
<b:if cond='data:blog.pageType == &quot;item&quot;'>
<meta expr:content='data:blog.pageName' property='og:title'/>
<meta expr:content='data:blog.canonicalUrl' property='og:url'/>
<meta content='article' property='og:type'/>
</b:if>
<meta expr:content='data:blog.title' property='og:site_name'/>
<b:if cond='data:blog.url == data:blog.homepageUrl'>
<meta expr:content='data:blog.title' property='og:title'/>
<meta content='website' property='og:type'/>
<b:if cond='data:blog.metaDescription'>
<meta expr:content='data:blog.metaDescription' property='og:description'/>
<b:else/>
<meta expr:content='&quot;Silakan kunjungi &quot; + data:blog.pageTitle + &quot; Untuk membaca postingan menarik.&quot;' property='og:description'/>
</b:if>
</b:if>
<b:if cond='data:blog.pageType == &quot;item&quot;'>
<meta expr:content='data:blog.metaDescription' property='og:description'/>
</b:if>
<b:if cond='data:blog.postImageUrl'>
<meta expr:content='data:blog.postImageUrl' property='og:image'/>
<b:else/>
<b:if cond='data:blog.postImageThumbnailUrl'>
<meta expr:content='data:blog.postThumbnailUrl' property='og:image'/>
<b:else/>
<meta content='https://4.bp.blogspot.com/-rFsLhmqUACI/XMztiu8Q6QI/AAAAAAAAIiY/kTu-Xg82ZTcEx35XJQOU9l2b-4aEXba8gCLcBGAs/s1600/do-manh-hong.jpg' property='og:image'/>
</b:if>
</b:if>
<meta content='https://www.facebook.com/100005776683788' property='article:author'/>
<meta content='https://www.facebook.com/bloghongseo/' property='article:publisher'/>
<meta content='1936237659924700' property='fb:app_id'/>
<meta content='100005776683788' property='fb:admins'/>
<meta content='vi_VN' property='og:locale'/>
<meta content='vi_VN' property='og:locale:alternate'/>
<meta content='id_ID' property='og:locale:alternate'/>
<meta content='summary' name='twitter:card'/>
<meta expr:content='data:blog.pageTitle' name='twitter:title'/>
<meta content='bloghong' name='twitter:site'/>
<meta content='bloghong' name='twitter:creator'/>
<meta content='summary_large_image' name='twitter:card'/>
<link href='//ajax.googleapis.com' rel='dns-prefetch'/>
<link href='//www.google-analytics.com' rel='dns-prefetch'/>
<link href='//googleads.g.doubleclick.net' rel='dns-prefetch'/>
<link href='//www.googletagservices.com' rel='dns-prefetch'/>
<link href='//pagead2.googlesyndication.com' rel='dns-prefetch'/>
<link href='//maxcdn.bootstrapcdn.com' rel='dns-prefetch'/>
<link href='//adservice.google.ca' rel='dns-prefetch'/>
<link href='//adservice.google.com' rel='dns-prefetch'/>
<link href='//resources.blogblog.com' rel='dns-prefetch'/>
<link href='//fonts.googleapis.com' rel='dns-prefetch'/>
<link href='//1.bp.blogspot.com' rel='dns-prefetch'/>
<link href='//2.bp.blogspot.com' rel='dns-prefetch'/>
<link href='//3.bp.blogspot.com' rel='dns-prefetch'/>
<link href='//4.bp.blogspot.com' rel='dns-prefetch'/>
<link href='//disqus.com' rel='dns-prefetch'/>
<link href='//github.com' rel='dns-prefetch'/>
<link href='//cdn.rawgit.com' rel='dns-prefetch'/>
<link href='//fontawesome.com' rel='dns-prefetch'/>
<link href='//addthis.com' rel='dns-prefetch'/>
<script type='text/javascript'>//<![CDATA[
function loadCSS(e, t, o) {
    "use strict";
    var s = window.document.createElement("link"),
        a = t || window.document.getElementsByTagName("script")[0];
    s.rel = "stylesheet", s.href = e, s.media = "only x", a.parentNode.insertBefore(s, a), setTimeout(function () {
        s.media = o || "all"
    })
}
loadCSS("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
loadCSS("https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese");
loadCSS("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese");
loadCSS("https://fonts.googleapis.com/css?family=Roboto:400,100,400italic,700italic,700");
//]]></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'/>
<!-- Style Code -->
<link href='//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/atom-one-dark.min.css' rel='stylesheet'/>
<script src='//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js'/>
<script type='text/javascript'>
//<![CDATA[
$(document).ready(function() {
  $('pre').each(function(i, block) {
    hljs.highlightBlock(block);
  });
});
//]]>
</script>
<script>
function login() {
alert(&#39;Chưa đăng ký đã vội đăng nhập. Đăng ký kế kia!&#39;);
}
</script>
<script type='text/javascript'>
//<![CDATA[
// Total Posts
function getposts(json){var totalposts=json.feed.openSearch$totalResults.$t;document.write('<div class="totalposts"><span class="totalnumber">'+totalposts+'</span><div class="clear" style="margin:20px 0"></div><span class="totallabel"><green style="color:#17b217">Bài viết</green> được suất bản</span></div>');}
//]]>
</script>
<style type='text/css'>@font-face{font-family:&#39;Roboto&#39;;font-style:normal;font-weight:400;src:local(&#39;Roboto&#39;),local(&#39;Roboto-Regular&#39;),url(//fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu72xKOzY.woff2)format(&#39;woff2&#39;);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;}@font-face{font-family:&#39;Roboto&#39;;font-style:normal;font-weight:400;src:local(&#39;Roboto&#39;),local(&#39;Roboto-Regular&#39;),url(//fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu5mxKOzY.woff2)format(&#39;woff2&#39;);unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;}@font-face{font-family:&#39;Roboto&#39;;font-style:normal;font-weight:400;src:local(&#39;Roboto&#39;),local(&#39;Roboto-Regular&#39;),url(//fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7mxKOzY.woff2)format(&#39;woff2&#39;);unicode-range:U+1F00-1FFF;}@font-face{font-family:&#39;Roboto&#39;;font-style:normal;font-weight:400;src:local(&#39;Roboto&#39;),local(&#39;Roboto-Regular&#39;),url(//fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4WxKOzY.woff2)format(&#39;woff2&#39;);unicode-range:U+0370-03FF;}@font-face{font-family:&#39;Roboto&#39;;font-style:normal;font-weight:400;src:local(&#39;Roboto&#39;),local(&#39;Roboto-Regular&#39;),url(//fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7WxKOzY.woff2)format(&#39;woff2&#39;);unicode-range:U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB;}@font-face{font-family:&#39;Roboto&#39;;font-style:normal;font-weight:400;src:local(&#39;Roboto&#39;),local(&#39;Roboto-Regular&#39;),url(//fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7GxKOzY.woff2)format(&#39;woff2&#39;);unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;}@font-face{font-family:&#39;Roboto&#39;;font-style:normal;font-weight:400;src:local(&#39;Roboto&#39;),local(&#39;Roboto-Regular&#39;),url(//fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4mxK.woff2)format(&#39;woff2&#39;);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}@font-face{font-family:&#39;Roboto&#39;;font-style:normal;font-weight:700;src:local(&#39;Roboto Bold&#39;),local(&#39;Roboto-Bold&#39;),url(//fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2)format(&#39;woff2&#39;);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;}@font-face{font-family:&#39;Roboto&#39;;font-style:normal;font-weight:700;src:local(&#39;Roboto Bold&#39;),local(&#39;Roboto-Bold&#39;),url(//fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2)format(&#39;woff2&#39;);unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;}@font-face{font-family:&#39;Roboto&#39;;font-style:normal;font-weight:700;src:local(&#39;Roboto Bold&#39;),local(&#39;Roboto-Bold&#39;),url(//fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2)format(&#39;woff2&#39;);unicode-range:U+1F00-1FFF;}@font-face{font-family:&#39;Roboto&#39;;font-style:normal;font-weight:700;src:local(&#39;Roboto Bold&#39;),local(&#39;Roboto-Bold&#39;),url(//fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2)format(&#39;woff2&#39;);unicode-range:U+0370-03FF;}@font-face{font-family:&#39;Roboto&#39;;font-style:normal;font-weight:700;src:local(&#39;Roboto Bold&#39;),local(&#39;Roboto-Bold&#39;),url(//fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2)format(&#39;woff2&#39;);unicode-range:U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB;}@font-face{font-family:&#39;Roboto&#39;;font-style:normal;font-weight:700;src:local(&#39;Roboto Bold&#39;),local(&#39;Roboto-Bold&#39;),url(//fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2)format(&#39;woff2&#39;);unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;}@font-face{font-family:&#39;Roboto&#39;;font-style:normal;font-weight:700;src:local(&#39;Roboto Bold&#39;),local(&#39;Roboto-Bold&#39;),url(//fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBBc4.woff2)format(&#39;woff2&#39;);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}</style>
    <b:skin><![CDATA[/*
-----------------------------------------------
Blogger Template Style
Name:     Dự Án Vland
Rip By: Đỗ Mạnh Hồng
URL:      https://www.share123bloggertemplates.com/
----------------------------------------------- */
/*<Variable name="robotoNormal15" description="Roboto Normal 15" type="font" default="15px Roboto, sans-serif" hideEditor="true" value="15px Roboto, sans-serif"/><Variable name="robotoNormal16" description="Roboto Normal 16" type="font" default="16px Roboto, sans-serif" hideEditor="true" value="16px Roboto, sans-serif"/><Variable name="robotoLightItalic15" description="Roboto Light Italic 15" type="font" default="italic 300 15px Roboto, sans-serif" hideEditor="true" value="italic 300 15px Roboto, sans-serif"/><Variable name="robotoBold22" description="Roboto Bold 22" type="font" default="bold 22px Roboto, sans-serif" hideEditor="true" value="bold 22px Roboto, sans-serif"/><Variable name="robotoBold30" description="Roboto Bold 30" type="font" default="bold 30px Roboto, sans-serif" hideEditor="true" value="bold 30px Roboto, sans-serif"/><Variable name="robotoBold45" description="Roboto Bold 45" type="font" default="bold 45px Roboto, sans-serif" hideEditor="true" value="bold 45px Roboto, sans-serif"/>
<Group description="Body">  <Variable name="body.text.font" description="Font" type="font" default="$(robotoNormal15)" value="15px Roboto, sans-serif"/>  <Variable name="body.text.color" description="Color" type="color" default="#757575" value="#757575"/>  <Variable name="body.background.height" description="Background height" type="length" min="420px" max="640px" default="480px" value="480px"/>  <Variable name="body.background" description="Background" color="$(body.background.color)" type="background" default="$(color) none repeat scroll top left" value="$(color) url(https://themes.googleusercontent.com/image?id=L1lcAxxz0CLgsDzixEprHJ2F38TyEjCyE3RSAjynQDks0lT1BDc1OxXKaTEdLc89HPvdB11X9FDw) no-repeat scroll top center /* Credit: Michael Elkan (http://www.offset.com/photos/394244) */;"/>  <Variable name="body.background.color" description="Body background color" type="color" default="#eee" value="#eeeeee"/>  <Variable name="body.background.blur" description="Background blur" type="length" min="0px" max="50px" default="0px" value="0px"/>  <Variable name="body.link.color" description="Link color" type="color" default="#2196f3"  value="#2196f3"/>  <Variable name="body.link.visited.color" description="Visited link color" type="color" default="$(body.link.color)" value="#2196f3"/>  <Variable name="body.link.hover.color" description="Link Hover Color" type="color" default="$(body.link.color)" value="#2196f3"/>  <Variable name="labels.text.color" description="Label text color" type="color" default="$(body.link.color)"  value="rgba(0,0,0,0.54)"/>  <Variable name="labels.background.color" description="Label background color" type="color" red="$(labels.text.color.red)" green="$(labels.text.color.green)" blue="$(labels.text.color.blue)" default="rgba($red, $green, $blue, 0.05)" value="#f7f7f7"/></Group>
<Group description="Posts" selector="div.widget.Blog">  <Variable name="posts.title.color" description="Post title color" type="color" default="#212121" value="#212121"/>  <Variable name="posts.title.font" description="Post title font" type="font" default="$(robotoBold22)" value="bold 22px Roboto, sans-serif"/>  <Variable name="posts.stream.title.font" description="Post title stream font" type="font" default="$(robotoBold30)" value="bold 30px Roboto, sans-serif"/>  <Variable name="posts.background.color" description="Post background color" type="color" default="#fff" value="#ffffff"/>  <Variable name="posts.text.font" description="Post text font" type="font" default="$(body.text.font)" value="15px Roboto, sans-serif"/>  <Variable name="posts.text.color" description="Post text color" type="color" default="$(body.text.color)" value="#757575"/>  <Variable name="posts.byline.color" description="Post byline color" type="color" default="rgba(0, 0, 0, 0.54)" value="rgba(0, 0, 0, 0.54)"/>  <Variable name="blockquote.font" description="Blockquote font" type="font" default="$(robotoLightItalic15)" value="italic 300 15px Roboto, sans-serif"/>  <Variable name="blockquote.color" description="Blockquote color" type="color" default="#444" value="#444444"/>  <Variable name="posts.icons.color" description="Post icons color" type="color" default="#707070" value="#707070"/>  <Variable name="tabs.font" description="Font" type="font" family="$(robotoNormal15.family)" size="$(robotoNormal15.size)" default="700 normal $(size) $(family)" value="700 normal $(size) $(family)"/>  <Variable name="tabs.color" description="Text color" type="color" default="#ccc" value="#cccccc"/>  <Variable name="tabs.selected.color" description="Selected color" type="color" default="#fff" value="#ffffff"/>  <Variable name="tabs.overflow.background.color" description="Popup background color" type="color" default="$(posts.background.color)" value="#ffffff"/>  <Variable name="tabs.overflow.color" description="Popup text color" type="color" default="$(posts.text.color)" value="#757575"/>  <Variable name="tabs.overflow.selected.color" description="Popup selected color" type="color" default="$(posts.title.color)" value="#212121"/></Group>*/
*/
h1.post-body,h2.post-body,h3.post-body{font-family:Open Sans,sans-serif;font-size:20px;font-weight:700;color:#ff9800;text-transform:uppercase;margin:12px 0;line-height:1.5em}
a,abbr,acronym,address,applet,b,big,blockquote,body,caption,center,cite,code,dd,del,dfn,div,dl,dt,em,fieldset,font,form,h1,h2,h3,h4,h5,h6,html,i,iframe,img,ins,kbd,label,legend,li,object,p,pre,q,s,samp,small,span,strike,strong,sub,sup,table,tbody,td,tfoot,th,thead,tr,tt,u,ul,var{padding:0;border:0;outline:0;vertical-align:baseline;background:0 0}
*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}
ins{text-decoration:underline}
del{text-decoration:line-through}
dl,ul{list-style-position:inside;list-style:none}
ul,li{display:list-item;list-style:none}
caption,th{text-align:center}
img{border:0;position:relative;user-select:none;-moz-user-select:none;-ms-user-select:none;-khtml-user-select:none;-webkit-user-select:none;-webkit-touch-callout:none}
a,a:visited{text-decoration:none}
none,display-none{display:none!important}
.clear{clear:both}
.section,.widget,.widget ul{margin:0;padding:0}
abbr[title],acronym[title]{text-decoration:none}
a{color:#333;text-decoration:none;word-wrap:break-word;transition:all .5s ease}
a:active,a:hover{color:#ff9800}
a:hover{outline-width:0;color:#ff9800}
a:focus{}
a:active,a:hover{}
:focus{outline:0}
a img{border:0}
abbr{text-decoration:none}
i.fa{margin-right:5px}
#font-wp,.font-wp{font-family:-apple-system,BlinkMacSystemFont,segoe ui,Roboto,Oxygen-Sans,Ubuntu,Cantarell,helvetica neue,sans-serif}
.tomhover{text-align:center;color:#fff;position:relative}
.tomhover a:hover,.tomhover:after{color:#fff}
.tomhover:after{content:"";position:absolute;top:0;left:0;width:0;height:100%;color:#fff;background-color:rgba(255,255,255,.4);-webkit-transition:none;-moz-transition:none;-ms-transition:none;-o-transition:none;transition:none}
.tomhover:hover:after{width:120%;color:#fff;background-color:transparent;-webkit-transition:all 1.2s ease-out;-moz-transition:all 1.2s ease-out;-ms-transition:all 1.2s ease-out;-o-transition:all 1.2s ease-out;transition:all 1.2s ease-out}
.separator a{clear:none!important;float:none!important;margin-left:0!important;margin-right:0!important}
#navbar-iframe{display:none;height:0;visibility:hidden}
.widget-item-control,a.quickedit{display:none!important}
.status-msg-wrap{margin:0 auto 25px;text-transform:uppercase;font-size:11px;display:none}
.status-msg-border{border:1px solid #eee;opacity:.7;border-radius:0}
.status-msg-bg{background-color:#f8f8f8;opacity:1;filter:none}
.feed-links{clear:both;display:none;line-height:2.5em}
.widget li,.BlogArchive #ArchiveList ul.flat li{padding:2px}
html{overflow-y:scroll;line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}
body{
background: url(https://highhay.com/img/bg_h.svg),#f1f1f1;
background-repeat: no-repeat;
background-position-x: 50%;
background-position-y: 50%;
background-size: cover;
background-attachment: fixed;
position: relative;
background-repeat: repeat;
font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;
color: #333;
font-size: 15px;
word-wrap: break-word;
margin: 0;
padding: 0;
line-height: 1.66;
}
.fa-gg{transform:rotate(90deg) scale(-1,1)}
.row{width:100%;max-width:1120px;margin:0 auto}
#content-wrapper{margin-top:0;padding-top:10px;margin-bottom:20px;overflow:hidden}
#main-content{background:transparent;float:left;overflow:hidden;width:calc(100% - 347px);margin:0;padding:0;box-sizing:border-box;word-wrap:break-word}
#sidebar{float:right;overflow:hidden;width:347px;box-sizing:border-box;word-wrap:break-word;border:0;padding:0;padding-bottom:15px;padding-left:15px}
.thumbnail{display:block;position:relative;object-fit:cover;transition:all .3s ease}
.post-meta{width:100%;float:left;box-sizing:border-box;margin-bottom:15px;padding-bottom:.8em;line-height:28px;font-style:italic;border-bottom:1px solid #eaedf2}
.post-meta a{color:#1590e6!important}
.post-meta>span{float:left;font-size:15px;color:#9fa6b4;line-height:28px}
.post-meta > span i{color:#1590e6}
.post-meta .timestamp-link{margin-left:0}
.post-meta i{color:#1590e6;margin-right:0}
.meta-post{color:#fa80d2;margin:10px 0 5px 0;padding:2px 14px;display:inline-block;border-radius:22px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-size:13px;box-shadow:0 0 10px rgba(0,0,0,0.1)}
.meta-post a{color:#777;margin-right:10px}
.meta-post .timestamp-link{margin-left:0}
.meta-post .author-link:before{content:'\f2c0';font-family:'FontAwesome';margin-right:5px;color:#189dfe}
.meta-post .timestamp-link:before{content:'\f017';font-family:'FontAwesome';font-size:15px;margin-right:5px;color:#189dfe}
.post-timestamp{margin-left:0}
.post{display:block;overflow:hidden;word-wrap:break-word}
.widget.post.ty-article{line-height:0!important}
.index .post{width:100%;box-sizing:border-box;background:#fff;margin:0 0 15px;border:1px solid #eee}
.index .ty-article .post-inner{position:relative;overflow:hidden}
.thumbnail-post {
position: relative;
float: left;
width: 220px;
height: 170px;
display: block;
overflow: hidden;
margin: 0;
}
.thumbnail-post,.thumbnail-post img{object-fit:cover}
.thumbnail-post .thumb{width:100%;height:100%;position:relative;display:block;z-index:1;overflow:hidden}
.thumbnail-post .thumb img {
width: 100%;
height: 100%;
display: block;
filter: grayscale(10%);
cursor: zoom-in;
}
.thumbnail-post a{-webkit-transition:all .6s;-moz-transition:all .6s;-o-transition:all .6s;transition:all .6s}
.ty-thumb{display:block;position:relative;object-fit:cover;transition:all .3s ease}
.post h2{font-size:20px;line-height:normal;text-decoration:none;margin:0;padding:0}
.post h2 a{color:#222;font-size:1.125rem;margin-bottom:0;transition:all .5s ease;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;font-weight:500}
.post h2 a:hover{color:#222}
.postags{position:absolute;top:5px;left:5px;z-index:3}
.postags a{display:inline-block;display:none;background:rgba(0,0,0,0.5);color:#fff;border-radius:2px;margin:0;height:auto;line-height:auto;padding:0 8px;font-size:15px}
.postags a:first-child{display:inline-block}
.item .post{padding:15px;background:#fff;border:1px solid #eee;border-top:0}
.static_page .post{padding:15px;background:#fff;border:1px solid #eee;border-top:0}
.date-header{box-sizing:border-box;overflow:hidden;margin:0!important;padding:0;margin:0}
.breadcrumbs{background:#fafafa;border:1px solid #e5e5e5;display:block!important;font-size:15px;line-height:inherit;padding:10px 15px}
.breadcrumbs a{color:#333}
.breadcrumbs i{margin:0 5px;font-size:13px}
.item .post-title{color:#333;margin:0;padding:0 0 10px 0;font-size:1.5rem;font-weight:500;line-height:33px}
.statice_page .post-title{margin-bottom:0}
.item .post-inner{margin:0}
.static_page .post-inner{margin:10px 0 0;border-top:1px solid #eee}
.item .post-body{width:100%;color:#333;font-size:16px;line-height:24px;overflow:hidden;padding:0;font-family: 'Roboto', sans-serif;}
.item .post-body img{width:auto;max-width:inherit;height:auto;margin:10px 0;border-radius:8px;box-shadow:0 5px 15px -8px rgba(0,0,0,.24),0 8px 10px -5px rgba(0,0,0,.2);box-sizing:border-box}
.static_page .post-body{width:100%;color:#333;font-size:16px;line-height:24px;overflow:hidden;padding:0;font-family: 'Roboto', sans-serif;}
.static_page .post-body img{width:100%;max-width:inherit;height:auto;margin:10px 0;border-radius:8px;box-shadow:0 5px 15px -8px rgba(0,0,0,.24),0 8px 10px -5px rgba(0,0,0,.2);box-sizing:border-box}

.main .widget{margin:0}
.main .Blog{border-bottom-width:0}
#box-share{width:100%;box-sizing:border-box;border-top:1px dashed #eee;float:right;border-bottom:1px dotted #eee;float:left;margin-bottom:10px}
.botton-fb{float:right;box-sizing:border-box;margin:10px 0}
li.notiblog{float:right!important}
.notiblog a{padding:8px 0!important}
.notiblog a:hover{background:transparent!important;color:#189dfe!important}
.notiblog i{margin-right:0}
/*
#blog-pager{text-align:center;margin-top:20px;overflow:visible}
.blog-pager ul,.blog-pager li{display:inline-block;list-style:none;padding:0}
.blog-pager li{margin:0 5px 10px 0}
.blog-pager li:last-child{margin-right:0}
.blog-pager a{display:inline-block}
.blog-pager a{font-size:16px;text-transform:uppercase;color:#1590e6;border:2px solid #FFF;background-color:#FFF;border-radius:2px;padding:5px 10px;-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.15);-moz-box-shadow:0 1px 2px rgba(0,0,0,0.15);box-shadow:0 1px 2px rgba(0,0,0,0.15)}
.blog-pager a i{margin-left:5px;font-size:1.1em}
.blog-pager a.blog-pager-newer-link i{margin-left:0;margin-right:5px}
.blog-pager a,.blog-pager a:hover{color:#FFF!important;border-color:#1590e6!important;background-color:#1590e6!important}
.blog-pager li a,.blog-pager li span{display:block;padding:5px 10px}
.blog-pager li.current span,.blog-pager li.page span{font-size:16px;color:#FFF;border:2px solid #1590e6;background-color:#1590e6;border-radius:2px}
.blog-pager li.current a i{margin-left:0}
*/
.post-body h2{
border-top: 1px solid rgb(238, 238, 238);
color: #736efe;
font-family: Roboto;
font-size: 20px;
font-stretch: normal;
font-variant-east-asian: normal;
font-variant-numeric: normal;
font-weight: 500;
letter-spacing: -0.35px;
line-height: normal;
margin: 10px 0px;
padding: 10px 0px;
position: relative;
text-align: center;
text-transform: uppercase;
transition: 0.4s;
}
.post-body h2:hover:after {width: 100%;background: white;}.post-body h2:after {content: '';position: absolute;width: 5%;height: 1px;background: #4b77be;bottom: 0;left: 50%;transform: translate(-50%,0);transition: 1s;-webkit-transition: 1s;}
.post-body h1,.post-body h3,.post-body h4,.post-body h5,.post-body h6{font-family:Open Sans,sans-serif;font-size:20px;font-weight:700;color:#ff9800;text-transform:uppercase;margin:12px 0;line-height:1.5em}
blockquote{font-size:15px;line-height:1.5em;font-style:italic;color:#333;background:#f8f9fa;margin:0;padding:15px 20px;border-left:3px solid #ff9800}
blockquote:before{content:'\f10d';display:inline-block;font-family:'FontAwesome';font-style:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;margin-right:10px;color:#333}
blockquote:after{content:'\f10e';display:inline-block;font-family:'FontAwesome';font-style:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;margin-left:10px;color:#333}
.widget .post-body ul,.widget .post-body ol{line-height:1.5;padding:0}
.widget .post-body li{margin:5px 0;padding:0;line-height:1.5}
.post-body ul li:before{content:"\f101";margin-right:5px;font-family:'FontAwesome';display:none}
#sidebar .widget{margin-bottom:15px;overflow:hidden;background:#fff;border:1px solid #eee;border-radius:3px}
#sidebar .widget:last-child{margin-bottom:0}
/*.sidebar .widget>h2, #fbcmt h66{
float: left;
box-sizing: border-box;
width: 100%;
position: relative;
background: #fff;
color: #333;
font-family: Open Sans,sans-serif;
font-size: 17px;
font-weight: 600;
text-transform: uppercase;
border-bottom: 1px solid #e5e5e5;
margin-bottom: 0;
padding: 6px 10px;
}*/
.sidebar .widget>h2, #fbcmt h66{
float: left;
background: linear-gradient(135deg,#189eff calc(100% - 55px),#fff 0,#fff 100%,#fff 100%);
border-top: 3px solid #189eff;
box-sizing: border-box;
width: 100%;
position: relative;
color: #fff;
font-family: Open Sans,sans-serif;
font-size: 17px;
font-weight: 600;
text-transform: uppercase;
border-bottom: 1px solid #189eff;
margin-bottom: 0;
padding: 6px 10px;
}
.sidebar .widget>h2:before {content: "";position: absolute;border-bottom: 0 solid #189eff;top: 35px;left: 0;width: 150px;transition: all .5s;}
/*.sidebar .widget>h2:before {
content: "";
position: absolute;
border-bottom: 1px solid #189eff;
top: 35px;
left: 0;
width: 150px;
transition: all .5s;
}*/
.sidebar .widget>h2:hover:before {width:100%}
.sidebar .widget-content{width:100%;float:left;padding:10px;box-sizing:border-box}
.footer-bottom{background:linear-gradient(135deg,#F2F2F2 0%,#F2F2F2 50%,#fff 30%,#fff 30%,#fff 100%);border-top:1px solid #ebebeb;float:left;width:100%;font-size:15px;padding:10px 0;line-height:25px}
.footer-bottom h2{color:#ff9800;font-size:16px;text-transform:uppercase}
.footer-bottom ul{margin:0;padding:0}
.footer-bottom,.footer-bottom b,.footer-bottom p{color:#696969}
.footer-bottom .left{float:left;text-align:left}
.footer-bottom .right{float:right;text-align:left}
/* Footer social */
.footer-social{margin-top:10px}
.footer-social ul li{display:inline-block}
.footer-social a{background:#f2f2f2;font-size:14px;width:35px;height:35px;-webkit-border-radius:100%;-khtml-border-radius:100%;-moz-border-radius:100%;-ms-border-radius:100%;-o-border-radius:100%;border-radius:100%;float:left;position:relative;display:inline-block;text-align:center;line-height:35px;margin-left:6px}
.footer-social a:after{left:0;top:0;width:35px;height:35px;-webkit-transition:all .2s ease-in-out;-khtml-transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-ms-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}
.footer-social a:hover:after{content:'';position:absolute;left:1px;top:1px;width:33px;height:33px;border:1px solid #fff;-webkit-border-radius:100%;-khtml-border-radius:100%;-moz-border-radius:100%;-ms-border-radius:100%;-o-border-radius:100%;border-radius:100%;-webkit-transition:all .2s ease-in-out;-khtml-transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-ms-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}
.footer-social a i{color:#fff}
.footer-social .social-box .facebook{background:#516eab}
.footer-social .social-box .twitter{background:#1B95E0}
.footer-social .social-box .plusgoogle{background:#db4437}
.footer-social .social-box .rss{background:#ff9900}
.far.fa-heart:hover:before{content:"\f004";font-family:"FontAwesome"}
.avatar-author{vertical-align:top;border:0;border-radius:100%;padding:0;width:46px;height:46px;margin-right:8px}
.codeHeader{background-color:#f5f5f5;border:1px solid #e0e0e0;border-bottom:0;text-align:right}
.copy-text{color:#767676;font-size:14px;padding:7px 10px;border-left:1px solid #e0e0e0}
pre.code{display:block;background:#f7f7f9;border:1px solid #e1e1e8;border-radius:4px;max-height:400px;font-family:Roboto,Arial;font:16px Roboto,sans-serif;color:#333;text-align:left;overflow:auto;border:1px solid #d3d6db;margin:auto;padding:16px;line-height:1.6em;white-space:nowrap}
pre{background:#0d1011;color:#abb2bf;display:block;overflow-x:auto;margin:10px 0;padding:.5em}
pre,.hljs{border-color:#1b2b34!important;border-radius:4px;padding:10px;background-color:#0d1011!important;background-image:url(https://i.imgur.com/aZt73XJ.png)!important}
blockquote{font-size:15px;line-height:1.5em;font-style:italic;color:#333;background:#f8f9fa;margin:0;padding:15px 20px;border-left:3px solid #ff9800}
blockquote:before{content:'\f10d';display:inline-block;font-family:'FontAwesome';font-style:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;margin-right:10px;color:#333}
blockquote:after{content:'\f10e';display:inline-block;font-family:'FontAwesome';font-style:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;margin-left:10px;color:#333}
#chuy-khicmt{margin:15px 0;border-radius:2px;position:relative;background:#fff;padding:8px;line-height:22px;color:#444;font-size:14px}
#chuy-khicmt p{font-size:14px}
#chuy-khicmt p:after{content:"";width:0;height:0;position:absolute;bottom:-15px;left:15px;border:8px solid transparent;border-color:#fff transparent transparent}
#fbcmt{background:#fff;border:1px solid #e5e5e5;margin-top:20px;padding:10px}
span.title-number{background:#fff;text-transform:uppercase;font-size:20px;position:relative;padding:10px 15px;margin-bottom:0;color:#ff9800;border-bottom:0!important}
p.post-snip {
width: 100%;
float: left;
font-style: italic;
color: #888;
font-size: 14px;
text-overflow: ellipsis;
display: -webkit-box;
-webkit-line-clamp: 3;
overflow: hidden;
-webkit-box-orient: vertical;
line-height: 19px;
}
.sidebar ul{list-style:none;margin:0;padding:0}
ttb,blockquote,pre,code{-webkit-user-select:text;-khtml-user-select:text;-moz-user-select:text;-ms-user-select:text;user-select:text}
ttb{position:relative;background-color:#dd4b39;color:#fff;border-radius:2px;padding:1.5px}
ttb:before{position:absolute;content:'Double click to select';display:table;bottom:23px;left:0;background:#28a1f0;color:#fff;padding:6px;border-radius:3px;font-size:70%;line-height:1;opacity:0;visibility:hidden;z-index:2;transition:all .3s}
ttb:hover:before{opacity:1;visibility:visible}
.widget-user .row{margin-right:-15px;margin-left:-15px;width:inherit;margin:0}
#HTML3 .widget-content{border:0!important;padding:0}
.widget-user-header a{color:#fff;text-decoration:none}
.box{border-radius:3px;background:#fff;margin-bottom:20px;width:100%}
.box .border-right{border-right:1px solid #f4f4f4}
.box .border-left{border-left:1px solid #f4f4f4}
.box.box-solid{border-top:0}
.box-header>.box-tools [data-toggle=tooltip],.box-widget{position:relative}
.box-header>.box-tools.pull-right .dropdown-menu{right:0;left:auto}
.widget-user .widget-user-header{padding:20px;height:150px;border-top-right-radius:3px;border-top-left-radius:3px}
.widget-user .widget-user-username{margin-top:0;margin-bottom:5px;font-size:25px;text-shadow:0 1px 1px rgba(0,0,0,.2)}
.widget-user .widget-user-desc{color:#fff;font-size:14px;margin-top:0;margin-bottom:15px}
.widget-user .widget-user-image{position:absolute;top:105px;left:50%;margin-left:-45px}
.widget-user .widget-user-image img{width:90px;height:auto;border:3px solid #fff}
.img-circle{border-radius:50%}
.widget-user .box-footer{padding-top:40px}
.box-footer{border-top:1px solid #f4f4f4;padding:10px;background-color:#fff;border-radius:0 0 3px 3px}
.bg-aqua-active{background-color:#00a7d0!important}
.description-block{display:block;margin:10px 0;text-align:center}
.description-block.margin-bottom{margin-bottom:25px}
.description-block>.description-header{margin:0;padding:0;font-size:16px}
.description-block>.description-text{text-transform:uppercase;font-size:11px}
.description-block .description-icon{font-size:16px}
.col-sm-4{position:relative;min-height:1px;padding-right:15px;padding-left:15px}
.col-sm-4{width:33.33333333%;float:left}
.post-item{width:100%;box-sizing:border-box;line-height:23px}
.music-box button:hover{cursor:alias}
#lh-me:hover,#share-box-bottom a:hover{cursor:alias}
.content{margin-top:115px}
.hanh-dong{float:left;width:100%;margin-top:7px}
.tu-khoa{margin:5px 0 0}
.tu-khoa a{float:left;background-color:#f1f1f1;border:1px solid #d3d3d3;border-radius:2px;box-shadow:0 1px 0 rgba(0,0,0,.05);color:#333;font-size:11px;margin:0 5px 5px 0;padding:5px 8px 5px 18px;position:relative;text-transform:uppercase}
.tu-khoa a:before{content:"";width:6px;height:6px;background:#1590e6;float:left;position:absolute;left:5px;top:11px;border-radius:50%}
.mxh i{background:#fff;color:#fff;width:30px;height:30px;line-height:30px;text-align:center;color:#fafafa!important;border-radius:50%;margin:5px 10px;font-size:14px}
.mxh i.fa-facebook-f{margin-right:4px!important}
.mxh i.fa-google{margin:0!important}
.mxh i.fa-twitter{margin-left:4px!important}
.dropmedown select{outline:0;cursor:pointer}
.dropmedown{float:left;width:150px!important;height:45px;display:inline-block;position:relative;overflow:hidden;width:100%;background:#f1f1f1;border:1px solid transparent;border-radius:3px 0 0 3px;line-height:43px;color:#333}
.dropmedown:before,.dropmedown:after{content:'';position:absolute;z-index:2;top:16px;right:12px;width:0;height:0;line-height:36px;border:4px dashed;border-color:#888 transparent;pointer-events:none}
.dropmedown:before{border-bottom-style:solid;border-top:0}
.dropmedown:after{margin-top:8px;border-top-style:solid;border-bottom:0}
.dropdown-select{position:relative;width:100%;margin:0;padding:6px 8px 6px 10px;height:38px;line-height:25px;font-family:Helvetica,Arial,'DejaVu Sans','Liberation Sans',Freesa,sans-serif;font-size:14px;font-weight:400;color:#333;background:#f1f1f1;border:0;border-radius:0;-webkit-appearance:none}
.dropdown-select>option{margin:3px;padding:6px 8px;text-shadow:none;background:#f8f8f8;outline:0;border:0;border-radius:3px;cursor:pointer}
span.label-count{float:right!important}
#id:before{background-position:50%;background-size:750px;background-image:url(https://i.imgur.com/x2tVk3U.png);position:absolute;top:0;left:0;height:100%;width:100%;display:block;z-index:0;content:"";opacity:.05;pointer-events:none}
@keyframes Gradient {
0%{background-position:0 50%}
50%{background-position:100% 50%}
100%{background-position:0 50%}
}
#Label1{float:left}
#Label1 h2{display:none}
#Label2 .widget-content{padding:0}
#Label2 li{float:left;width:100%;margin:0}
#Label2 a:hover{color:#333}
#Label2 li a{float:left;text-align:left}
#Label2 li span{float:right;text-align:right}
.item-title a{color:#1590e6;font-size:15px;font-weight:600;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:2;overflow:hidden;-webkit-box-orient:vertical;line-height:18px}
.item-snippet{color:#1590e6;display:block;font-size:14px;color:#999;overflow:hidden;white-space:nowrap;text-overflow:ellipsis}
.text-left{text-align:left}
.timeline{position:relative;margin:0 0 30px;padding:0;list-style:none}
.timeline:before{content:'';position:absolute;top:0;bottom:0;width:4px;background:#ddd;left:13px;margin:0;border-radius:2px}
.timeline>li{position:relative;margin-right:10px;margin-bottom:15px}
.timeline>li:before,.timeline>li:after{content:" ";display:table}
.timeline>li:after{clear:both}
.timeline>li>.timeline-item{-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.1);box-shadow:0 1px 1px rgba(0,0,0,0.1);border-radius:3px;margin-top:0;background:#fff;color:#444;margin-left:45px;margin-right:0;padding:0;position:relative}
.timeline>li>.timeline-item>.time{color:#999;float:right;padding:10px;font-size:12px}
.timeline>li>.timeline-item>.timeline-header{margin:0;color:#3e66b3;border-bottom:1px solid #f4f4f4;padding:10px;font-size:16px;line-height:1.1}
.timeline>li>.timeline-item>.timeline-header>a{font-weight:600}
.timeline>li>.timeline-item>.timeline-body,.timeline>li>.timeline-item>.timeline-footer{padding:10px}
.timeline>li>i{width:30px;height:30px;font-size:15px;line-height:30px;position:absolute;color:#fff;background:#d2d6de;border-radius:50%;text-align:center;left:0;top:0}
.timeline>.time-label>span{font-weight:600;padding:5px;display:inline-block;background-color:#fff;border-radius:4px}
.timeline-inverse>li>.timeline-item{background:#f0f0f0;border:1px solid #ddd;-webkit-box-shadow:none;box-shadow:none}
.timeline-inverse>li>.timeline-item>.timeline-header{border-bottom-color:#ddd}
.btn.btn-flat{border-radius:0;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;border-width:1px}
.btn-primary{background-color:#1590e6;border-color:#1590e6}
.btn{border-radius:3px;-webkit-box-shadow:none;box-shadow:none;border:1px solid transparent}
.btn-group-xs>.btn,.btn-xs{padding:1px 5px;font-size:12px;line-height:1.5;border-radius:3px}
.btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4}
.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px}
#baca-juga{position:relative}
#baca-juga h4{text-transform:none;font-weight:600;color:#888;position:absolute;top:-25px;left:20px;border:2px solid #efefef;padding:2px 12px;font-size:15px;background:#fff;z-index:1}
#baca-juga a{color:#49ace1;font-weight:600;font-size:15px;display:block;padding:0}
#baca-juga ul{width:100%;max-width:100%;box-sizing:border-box;border-radius:3px;margin:30px 0 20px;padding:20px 20px 10px 40px;position:relative;border:2px solid #efefef}
#baca-juga li{list-style-type:circle!important;padding:0;margin:.6em 0}
#FollowByEmail1 h2{display:none!important}
#FollowByEmail1 h2:after{content:'\f0f3'}
.FollowByEmail .follow-by-email-inner td{width:100%!important;float:left!important}
.FollowByEmail .follow-by-email-inner .follow-by-email-address,.FollowByEmail .follow-by-email-inner .follow-by-name,.FollowByEmail .follow-by-email-inner .follow-by-email-submit{float:left;width:100%;background:#fafafa;margin-bottom:10px;padding:5px 10px;border:1px solid #e5e5e5;border-radius:3px;margin:0;font-family:inherit;font-size:inherit;line-height:inherit;height:auto}
.FollowByEmail .follow-by-email-inner .follow-by-name,.FollowByEmail .follow-by-email-inner .follow-by-email-submit{color:#222;margin-top:10px}
#header-inner .titlewrapper h1{user-select:none;text-align:left;font-family:'Quicksand', sans-serif;font-size:26px;font-weight:800;text-transform:uppercase;padding:0;margin:0}
#header-inner .titlewrapper h1 a,#header-inner .titlewrapper h1 a:hover{color:#fff!important}
#header-inner .titlewrapper span{background:#fff;color:#1590e6;padding:0 8px}
#header-inner .descriptionwrapper p{display:none}
.col-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}
.col{position:relative;width:100%;padding:0 10px}
/* CSS Mshop Nako */
.container{max-width:1120px}
.container{width:100%;padding:0 10px;margin:0 auto}
.header-bottom{width:100%;float:left;box-sizing:border-box}
#site-header{position:relative;float:left;width:100%;border-bottom:1px solid #e5e5e5;z-index:9}
#site-header.filling{position:fixed;width:100%;top:0;left:0;z-index:10}
.header-top-right{text-align:right}
.header-middle{padding:9px 0 10px 0}
.header-middle .row{align-items:center}
.header-middle,.header-middle a{z-index:1;color:#fff}
.header-bottom{background:#fff!important}
.header-middle img{display:block;max-width:inherit;width:80%;height:auto}
.header-middle .button button{width:100%;height:40px;padding:0;background:transparent;color:#666}
#search-form{position:relative;max-width:600px}
#search-form input{width:75%;display:inline-block;border:0;border-radius:0 3px 3px 0;padding:0 70px 0 20px;line-height:45px}
.moc-list-category{float:left;width:25%;right:75%;border:0;border-radius:3px 0 0 3px;padding:0 15px;cursor:pointer}
#search-form button{
position: absolute;
top: 4px;
right: 4px;
font-size: 15px;
padding: 11px 21px;
background: #1590e6;
color: #fff;
}
button.search:before{content:"\f002";font-family:FontAwesome}
.moc-list-category{background-color:#f1f1f1}
#show-menu,#show-search{display:none}
#show-menu:before{content:"\f0c9";font-family:FontAwesome}
#show-search:before{content:"\f002";font-family:FontAwesome}
#primary-navigation ul{margin:0;padding:0}
#primary-navigation li{list-style:none;float:left;position:relative}
#primary-navigation li a{float:left;display:inline-block;display:block;padding:7.8px 10px}
#primary-navigation li a:hover{background:#fafafa;font-weight:550}
#primary-navigation li i{width:22px;text-align:center;margin-right:2px}
.primary-menu li a:hover{background-color:#f5f5f5}
#primary-navigation ul.sub-menu{position:absolute;visibility:hidden;opacity:0;-webkit-transform:translateY(10px);-moz-transform:translateY(10px);transform:translateY(10px);top:40px;background:#fff;min-width:149px;padding:0;margin:0;transition:all .3s ease}
#primary-navigation ul.sub-menu li,#primary-navigation ul.sub-menu a{width:100%;color:#fff}
#primary-navigation ul.sub-menu li{border-top:2px solid #fff}
#primary-navigation li > ul.sub-menu{left:0}
#primary-navigation li > ul.sub-menu > li > ul{top:-1px;left:100%}
#primary-navigation li:hover > ul.sub-menu{opacity:1;visibility:visible;-webkit-transform:translateY(0);-moz-transform:translateY(0);transform:translateY(0)}
#moc-phu{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.7);z-index:98;display:none}
#moc-phu.active{display:block}
#close-menu{display:block;padding:15px;margin-bottom:20px;text-align:center;background:#f0f0f0;cursor:pointer}
.navigation.pagination{margin-top:30px;text-align:center}
/* Background color */
#primary-navigation .sub-menu li:hover > a,.back-to-top,#buttonsb .btn.btn-read,/*#primary-navigation li:hover > a,*/.ajax-search::-webkit-scrollbar-thumb,.blog-pager a,.blog-pager a:hover,.blog-pager li.current span,.blog-pager li.page span,.btn-primary,#site-header,.header-middle,.home-menu-title,#primary-navigation ul.sub-menu,.footer-social a i:after,#primary-navigation ul.sub-menu li a{background:#669900}
.moc-product a.add_to_cart_buttoniption ol li{color:#1590e6}
.header-top-left{float:left;text-align:left}
.header-top-right{float:right;text-align:right}
.row.small-mb{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-10px;margin-left:-10px}
#label{float:left}
.header-bottom .container,.header-bottom .row{max-width:1160px!important}
/* Circle */
.thumbnail-post a{-webkit-transition:all .6s;-moz-transition:all .6s;-o-transition:all .6s;transition:all .6s}
.thumbnail-post a:before{position:absolute;top:50%;left:50%;z-index:2;display:block;content:'';width:0;height:0;background:rgba(255,255,255,.2);border-radius:100%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);opacity:0}
.thumbnail-post a:hover:before{-webkit-animation:circle .75s;animation:circle .75s}@-webkit-keyframes circle{0%,40%{opacity:1}100%{width:140%;height:140%;opacity:0}}@keyframes circle{0%,40%{opacity:1}100%{width:140%;height:140%;opacity:0}}
@keyframes blink{0%,100%{opacity:1}50%{opacity:0}}@-webkit-keyframes blink{0%,100%{opacity:1}50%{opacity:0}}
/* CSS Widget Info About Us */
.boxinner{z-index:99;width:100%;height:550px;position:absolute;left:50%;margin-left:-250px;background-color:#e9e8e9;top:50px;box-shadow:0 0 70px 0 rgba(0,0,0,0.1)}
.boxinner{border-radius:6px}
.contentbox{border-radius:0 0 6px 6px}
#left{border-radius:0 0 6px 0}
.contentbox{border-top:1px solid #cbcbcb;position:absolute;background-color:#fff;top:40px;right:0;left:0;bottom:0}
.circle{float:left;height:12px;width:12px;margin:14px 0 0 10px;border-radius:50%;border:1px solid #0000000f}
.circle:first-child{background:#f56252;margin-left:15px}
.circle:nth-child(2){background:#fac000}
.circle:nth-child(3){background:#42cc01}
kepala{background:#cfcfcf;height:50px;width:100%;position:inherit}
#textlogo{background:#f7f7f7;color:#120d04;padding-top:15px;text-align:center;font-weight:700;font-size:15px;position:inherit;height:70%;width:58.4%;box-sizing:initial;}
#left{background:#222;color:#fff;top:50px;bottom:0;right:0;width:250px;position:inherit}
#left a{color:#bdc3c7;}#left a:hover{color:#fff;}
.taber1,.taber2,.taber3,.taber4,.taber5,.taber6,.taber7{cursor:pointer;font-size:14px;padding:15px 25px;color:#bdc3c7;}
.taber1:hover{background:#f88c00;color:#fff}.taber2:hover{background:#e74c3c;color:#fff}.taber3:hover{background:#2980b9;color:#fff}.taber4:hover{background:#27C9E9;color:#fff}.taber5:hover{background:#3ca9d0;color:#fff}
.taber6:hover{background:#1abc9c;color:#fff}.taber7:hover{background:#f39c12;color:#fff}
#left .taber1:hover a,#left .taber2:hover a,#left .taber3:hover a,#left .taber4:hover a,#left .taber5:hover a,#left .taber6:hover a,#left .taber7:hover a{color:#fff}
#aboutus{top:50px;width:59%;padding:10px;color:#444;text-align:left;position:inherit;float:left;line-height:normal;font-size:15px}
#aboutus img{margin:10px auto 0 auto;display:table;border-radius:100%;max-width:140px;box-shadow:0 0 0 5px rgba(0,0,0,.03)}
#aboutus p{line-height:17px}
.scrollbarbox{overflow:hidden;text-align:justify;margin-top:45px}
.scrollbarbox .innerone{height:480px;overflow:auto}}
a.popup-link{border-bottom:3px solid #e2e2e2;border-radius:3px;padding:8px 40px!important;background:#fff;color:#555!important;text-align:center;letter-spacing:1px;margin-right:10px}
#popup{display:none;}
#popup:target{background:none;display:block;position:fixed;top:0;left:0;right:0;bottom:0;margin:0;z-index:999;transition:all .3s}
.popup-container{position:relative;margin:0 auto;padding:20px}
a.popup-close{position:relative;top:5px;border-radius:50px;float:right;right:5px;margin:0 auto;padding:7px;font-weight:bold;font-size:30px;text-decoration:none;line-height:1;color:#737376}
a.popup-close:hover{color:#737376}
.totalposts{margin:auto;display:table;text-align:center}
.totalposts .totalnumber{background:#00c700;color:#fff;display:inline;font-weight:700;font-size:50px;padding:2px 7px 0px 7px;border-radius:3px}
.totalposts .totallabel{display:block;text-transform:none;color:#222}
/*::-webkit-scrollbar{display:none!important}*/
.post-category-home {
background: #fff;
color: #222;
padding: 4px 10px;
border-top: 1px solid #eee;
font-size: 12px;
text-transform: uppercase;
}
.post-category-home:before{content:"\f115";font-family:FontAwesome;color:#189dfe;margin-right:5px;font-style:normal;display:inline-block;width:15px}
.post-category-home a{color:#189dfe}
.post-category-home a:hover{text-decoration:underline}
.thumbnail-post,.date-header{padding:10px}
.post h2 a:hover,.item-title a:hover{text-decoration:underline}
button#button_show{width:30px;height:30px;background:transparent;border:1px solid #607D8B;color:#607D8B;border-radius:50%;padding:5px;margin-top:10px}
/* Related post image */
#related-box{width:300px;overflow:hidden;height:auto;position:fixed;bottom:65px;right:0;background:#fff;/*border:1px solid #ddd;*/    box-shadow:0 0 3px #CACACA;transition:all .5s;z-index:9999;font-family:'Open Sans',sans-serif}
#related-box .header{width:100%;height:34px;line-height:35px;border-top:4px solid #F88C00;color:#222;background:#fff}
#related-box .header h2{font-size:17px;text-transform:uppercase;font-weight:600;margin:0;text-align:center}
#related-box .header a{color:#222}
#related-box .tombol{position:absolute;color:#fff;top:0;left:0;font-size:18px;font-weight:400;cursor:pointer;background:#F88C00;text-align:center;width:30px;height:30px;line-height:30px;transition:all .3s ease-in-out}
#related-box .tombol a{color:#fff}
#related-box .tombol a:hover{color:#ffffff7d}
#related-box .tombol i{margin-right:0}
#related-box .item{width:300px;padding:15px;float:left}
#related-box .list{box-sizing:border-box;height:100%;overflow:hidden;width:600px;transition:all .5s}
#related-box .gambar{position:relative;float:left;width:100%;height:150px;display:block;overflow:hidden;margin:0}
#related-box .gambar a{width:100%;height:100%;position:relative;display:block;z-index:1;overflow:hidden}
#related-box .gambar img{width:100%;height:100%;display:block;object-fit:cover}
#related-box .info{padding:0 0 15px;margin:10px 0 -20px}
#related-box .info a{float:left;text-transform:uppercase;font-size:17px;color:#222;font-weight:600;line-height:normal/*;border-bottom:1px solid #eee*/;text-overflow:ellipsis;overflow:hidden;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:1}
#related-box .info h3{margin:0}
#related-box .navigation{float:right;position:absolute;width:auto;left:12px;bottom:12px}
#related-box .navigation a{float:left;border:1px solid rgba(0,0,0,0.2);margin:3px;font-size:12px;width:26px;height:26px;line-height:26px;text-align:center;border-radius:100%}
#related-box .navigation a:hover{background:#f88c00;color:#fff;border:1px solid rgba(0,0,0,0.24)}
#related-box .navigation i{margin-right:0}
#related-box .navigation .left{float:left!important}
#related-box .navigation .right{float:right!important}
#related-box .navigation .left,#related-box .navigation .right{width:auto!important;text-align:inherit!important}
#related-box .gambar,#related-box .info{float:left;width:100%;box-sizing:border-box;display:block}
.relatedshow{display:none!important;position:fixed;bottom:40px;right:-50px;transition:all .5s;z-index:9999;margin:0 10px 0 0}
.relatedshow a{color:#fff;background:#F88C00;border-radius:100%;box-shadow:0 0 10px rgba(0,0,0,0.2);float:right;height:40px;width:40px;line-height:42px;text-align:center}
.relatedshow i{margin-right:0}
.gambar a{display:block!important;background:#000;font-size:0}
.gambar a:hover img{opacity:.3!important}
.gambar{margin-right:15px;position:relative;line-height:0}
.gambar a:hover .overlay-icon:before{opacity:1;-webkit-transform:scale(1);-moz-transform:scale(1);-ms-transform:scale(1);-o-transform:scale(1);transform:scale(1)}
.overlay-icon:before{content:'\f0c1';color:#FFF;display:block;position:absolute;top:50%;left:50%;border:3px solid #FFF;border-radius:100%;width:40px;height:40px;line-height:40px;text-align:center;font-size:18px;margin:-20px 0 0 -20px;opacity:0;-webkit-backface-visibility:hidden;-webkit-transform:scale(0);-moz-transform:scale(0);-ms-transform:scale(0);-o-transform:scale(0);transform:scale(0);-webkit-transition:all .3s ease-in-out;-moz-transition:all .3s ease-in-out;-ms-transition:all .3s ease-in-out;-o-transition:all .3s ease-in-out;transition:all .3s ease-in-out}
.gambar img{height:auto;max-width:100%;width:100%;-webkit-transition:all .4s;-moz-transition:all .4s;-o-transition:all .4s;transition:all .4s}
.gambar{opacity:1;-webkit-transition:all .4s ease-in-out;-moz-transition:all .4s ease-in-out;-o-transition:all .4s ease-in-out;transition:all .4s ease-in-out}
.load-post{clear:both;text-align:right;margin:5px auto 5px auto}
.load-post a,.load-post span{background-color:#189dfe;color:#fff;-webkit-box-shadow:0 2px 5px rgba(52,152,219,0.15);box-shadow:0 2px 5px rgba(52,152,219,0.15);width:auto;float:none;box-sizing:border-box;text-align:center;position:relative;/*display*/:table;overflow:hidden;margin:0 auto;padding:6px 16px;border-radius:20px;font-size:14px;font-weight:400;transition:all .5s;text-transform:uppercase;font-family:sans-serif}
.load-post span.js-loading{background-color:#2e6da4}
.load-post span.js-loaded{background-color:#4cae4c}
.load-post span.js-error{background-color:#d43f3a}
/*.load-post i{margin:5px;float:left;text-align:right;color:#fff}*/
/* Popular Post */
#sidebar .PopularPosts ul li:nth-of-type(1) .item-thumbnail{width:100%;height:150px;margin:0 0 10px}
#sidebar .PopularPosts ul li:nth-of-type(1) img{width:100%;border-radius:4px}
#sidebar .PopularPosts ul li:nth-of-type(1) .item-title{float:left;margin:10px 0 2px 0}
#sidebar .PopularPosts .item-thumbnail{width:100px;height:73px;float:left;overflow:hidden;display:block;vertical-align:middle;margin:0 15px 0 0 !important}
#sidebar .PopularPosts .item-thumbnail a{position:relative;overflow:hidden;line-height:0}
#sidebar .PopularPosts ul li img{width:100%;height:100%;object-fit:cover;padding:0;transition:all .3s ease}
#sidebar .PopularPosts .widget-content ul li{overflow:hidden;padding:10px 0;border-top:1px solid #ddd}
#sidebar .PopularPosts .widget-content ul li:first-child,.sidebar .custom-widget li:first-child{padding-top:0;border-top:0}
#sidebar .PopularPosts .widget-content ul li:last-child,.sidebar .custom-widget li:last-child{padding-bottom:0}
#sidebar .PopularPosts .item-title{font-size:15.5px!important;font-weight:400;line-height:1.4em;margin:0 0 5px;padding:0}
#sidebar .PopularPosts ul li{position: relative}
#sidebar .PopularPosts ul li a{color:#333;transition:color .3s}
#sidebar .PopularPosts ul li a:hover{color:#f90}
/*
#sidebar .PopularPosts .widget-content ul li{padding:10px 0;border-bottom:1px solid #f4f4f4}
#sidebar .PopularPosts .widget-content ul li:nth-child(1){padding:0}
#sidebar .PopularPosts .widget-content ul li:nth-child(2),.PopularPosts .widget-content ul li:nth-child(3),.PopularPosts .widget-content ul li:nth-child(4){padding-bottom:0}
#sidebar .PopularPosts .widget-content ul li:last-child{padding-bottom:0;margin-bottom:0}
*/
#ads-home{margin:0px 0 15px 0}
#ads-home img{width:100%;float:left;box-sizing:border-box}
/*----Responsive Design----*/
@media screen and (max-width: 1138px) {
#outer-wrapper{width:100%;border:0!important}
#error-wrap{display:block!important;padding:5px!important}
.row{width:97%}
}
@media screen and (max-width:1100px) {
#Label1{display:none!important}
#search-form{max-width:100%}
#search-form input{width:100%;border-radius:3px}
}
@media screen and (max-width: 980px) {
#main-content{width:100%}
#sidebar{width:100%;padding:0;margin:15px 0 0}
.sect-left{width:100%;margin-right:0}
.post-item{padding:0!important}
.left,.right{width:100%;float:none;text-align:center}
#header-top{display:none!important}
#site-header{position:relative!important}
}
@media screen and (max-width: 830px) {
.colophon .copyright{width:100%;text-align:left}
}
@media screen and (max-width:767px) {
.header-middle{float:left!important;width:100%!important}
.wrap{max-width:100%}
.row{width:95%!important}
#label,form.tim-kiem{display:none!important}
button.menu-toggle:before{content:"\f142"}
.header-logo{margin-right:0!important}
#main-wrapper.post{border-left:0;border-right:0}
.header-middle img{max-width:130px;margin-top:0px;float:left;position:relative;z-index:1;overflow:hidden;color:#fff}
#search-form{display:none;margin-bottom:10px}
#search-form.active{display:block}
#show-menu{display:block;text-align:center;width:50px;height:50px;line-height:44px;float:left;cursor:pointer;z-index:999}
#show-search{display:block;text-align:center;width:50px;height:50px;line-height:44px;float:right;cursor:pointer;z-index:1}
#primary-navigation{position:fixed;width:300px;height:100%;top:0;left:-300px;z-index:99;background:#fff;overflow-y:auto}
#primary-navigation.active{left:0}
#primary-navigation li{width:100%;border-top:1px solid #e5e5e5}
#primary-navigation li a{float:left;width:100%;text-align:left;display:block}
#primary-navigation .sub-menu li:hover > a{color:#fff}
#primary-navigation ul.sub-menu{display:none!important;position:relative!important;top:0!important;left:0!important}
#primary-navigation ul.sub-menu li a{padding-left:35px}
#primary-navigation ul.sub-menu li ul li a{padding-left:50px}
span.toggle-caret.fas{position:absolute;right:0;top:0;background:#fff;width:40px;line-height:40px;text-align:center;cursor:pointer;z-index:1}
span.toggle-caret.fas:before{content:"\f0d7";font-family:'Font Awesome 5 Free';transition:all .5s ease}
.active > span.toggle-caret.fas:before{content:"\f0d8";transition:all .5s ease}
#primary-navigation ul.sub-menu{display:none!important}
#primary-navigation ul.sub-menu.active{display:block!important}
#moc-breadcrumb{margin-top:-10px;margin-bottom:10px}
.number-product{width:100%;float:left;margin:0 0 -10px;background:#fff}
.widget-title a.category-children{display:none}
#header-inner .titlewrapper h1{text-align:center!important;font-size:20px}
#primary-navigation ul.sub-menu li a,.number-product a{margin:0}
.number-product a{display:inline-block;width:50%;float:left;text-align:center;line-height:40px}
.number-product a,.bp-dark .number-product a{color:#189dfe!important}
.number-product span,.cart-contents{display:none!important}
.container{padding:0!important}
.row.small-mb{width:100%!important;margin:0!important}
}
@media screen and (max-width: 600px) {
.thumbnail-post{position:inherit!important;width:100%!important;height:auto!important;margin:0!important;padding:0!important;border-right:0!important}
.post-item{display:block}
.post h2{font-size:16px;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;word-wrap:break-word}
.header-wrapper{border-bottom:1px solid #e6e6e6}
.col-sm-4{width:100%!important;padding:0!important}
.box .border-right {border-right:none}
.box-footer .row{width:100%!important}
.date-header{width:100%;float:left}
svg.spinner{width:30px!important;height:30px!important}
#show-menu,#show-search{top:-5px!important}
}
@media screen and (max-width:500px) {
.item .post-body img{width:100%!important}
}
@media screen and (max-width:500px) {
.static_page .post-body img{width:100%!important}
}
@media screen and (max-width: 480px) {
.ty-share li a span{display:none}
#ads-home{margin:10px 0 5px 0!important}
}
@media screen and (max-width: 440px) {
.post h2{font-size:15px}
.item .post-title{font-size:20px}
#primary-navigation.active{width:87%!important;box-sizing:border-box}
}
@media screen and (max-width: 400px) {
#content-wrapper{margin-top:0!important;padding-top:0!important}
}
/* CSS Comment */
ul.recent_comment{display:inline-block;width:100%;padding:0;margin:0;position:relative;overflow:hidden;border-radius:5px}
ul.recent_comment li a{font-weight:700;text-decoration:none;color:#fff;padding:0 0 5px}
ul.recent_comment li a.author{display:block}
ul.recent_comment li{width:-webkit-fill-available;position:relative;clear:both;display:inline-block;padding:10px;margin:0 0 15px;font-size:14px;background-color:#3578e4;animation:show-chat-even .15s 1 ease-in;-moz-animation:show-chat-even .15s 1 ease-in;-webkit-animation:show-chat-even .15s 1 ease-in;float:left;margin-left:70px;color:#fff;border:0}
/*ul.recent_comment li:after{position:absolute;top:15px;content:'';width:0;height:0;border-top:15px solid #3578e4;border-left:15px solid transparent;left:-15px}*/
ul.recent_comment li .avatarImage{position:absolute;top:0;width:50px;height:50px;border-radius:50px;left:-70px;overflow:hidden}
ul.recent_comment li .avatarImage img{width:100%;height:auto}
ul.recent_comment li{border-radius:10px 20px 0 10px}
ul.recent_comment li:nth-child(2n+2){border-radius:10px 0 20px 10px!important}
/* End Cmt */
.header-middle.block{display:block!important}
.header-middle.none{display:none!important}
/* Cmt New */
.comment-thread iframe{min-height:100px!important}
#comments{background:#fff;position:relative;margin-top:25px;padding:10px;display:block;clear:both;color:#333;border:1px solid #e5e5e5}
#comments h4{display:none}
.comment_avatar_wrap{width:42px;height:42px;background:#fcfcfc;border-radius:6px;text-align:center;margin:0 0 20px 0;padding:0}
#comments .avatar-image-container{position:absolute;float:left;margin:0 10px 0 0;width:42px;height:42px;max-width:42px;max-height:42px;padding:0;margin-bottom:10px}
#comments .avatar-image-container img{border-radius:100px;width:42px;height:42px;max-width:42px;max-height:42px;background:url(https://i.imgur.com/bnbt4u9.png) no-repeat;background-size:42px}
#comments .comment_name,#comments .comment_admin .comment_name{padding:0 0 10px 0;font-size:13px;position:relative}
#comments .comment_name a{font-weight:700;padding:0;font-size:13px;text-decoration:none}
#comments .comment_admin .comment_date{font-weight:normal;font-size:11px}
#comments .comment_admin .comment_author_flag{display:inline-block;font-size:14px;color:rgb(17,143,249);text-align:center;margin:0 0 0 3px;}
#comments .comment_service{margin-top:5px}
#comments .comment_date{color:#a9a9a9;float:right;font-size:11px;font-weight:normal;margin-top:-3px}
#comments .comment_date a{color:#a9a9a9;float:right;font-size:11px;font-weight:normal;margin:0;padding:0}
#comments .comment_date a:hover{color:#a9a9a9;text-decoration:underline}
#comments .comment-block{margin-left:62px;background:#eff1f3;padding:10px 13px;line-height:26px;border-radius:7px;margin-bottom:10px;position:relative}
#comments .comment-block p{color:#111;margin:5px 0 0 0;font-size:14px;font-weight:400;word-wrap:break-word;padding:0 0 5px 0}
#comments .comment-block:before{content:'';right:100%;border:solid transparent;height:0;width:0;position:absolute;pointer-events:none;border-right-color:#eff1f3;border-width:10px}
#comments .comment_inner{margin:12px 0}
#comments .comment_child .comment_wrap{padding-left:3%}
#comments .comment_reply{display:inline-block;margin-top:10px;padding:1px 7px;color:#fff;text-align:center;text-decoration:none;background:#1eaeef;font:11px/18px sans-serif;transition:background-color 1s ease-out 0s}
#comments .comment_reply:hover{text-decoration:none;background:#199dd9}
#comments .unneeded-paging-control{display:none}
#comments .comment-form{max-width:100%;}
#comments .comment_form a{text-decoration:none;}
#comments .comment-form p{background:#f6f5f1;padding:6px 13px;margin:5px 0 15px;color:#111;font-size:15px;line-height:26px;border-radius:3px;position:relative;max-width:100%;}
#comments .comment-form p:after{content:"";width:0;height:0;position:absolute;bottom:-16px;left:2%;border:8px solid transparent;border-color:#f6f5f1 transparent transparent}
#comments .comment_reply_form{padding:0 0 0 70px}
#comments .comment_reply_form .comment-form{width:99%}
.comment_emo_list .item{float:left;display:block;text-align:center;margin:5px 5px 0 0;height:40px;width:41px}
.comment_emo_list span{display:block;font-weight:bold;font-size:11px;letter-spacing:1px}
img.comment_emo {width:16px;height:16px;}
.comment_youtube{max-width:100%;width:400px;height:225px;display:block;margin:auto}
.comment_img{max-width:100%}
#comments .deleted-comment{padding:10px 10px 10px 10px;display:block;color:#CCC}
#comments .comment_header{width:50px}
#comments .comment_avatar img{width:42px;height:auto;background:url(//3.bp.blogspot.com/-fr42e67HG4I/Vky8HLexiEI/AAAAAAAAM0I/MLMd2qwIH1E/s1600/avatar.png) no-repeat;border-radius:6px}
#comments .comment-delete img{float:right;margin-left:15px;margin-top:3px;}
iframe{border:none;overflow:hidden}
.comments .item-control{position:static;display:none}
.comments .comment-block,.comments .comments-content .comment-replies{margin-left:60px;margin-top:0}
.comments .continue a,.comments .thread-toggle{padding:0 0 0 60px;font-weight:400;display:none}
.comments .comments-content .comment-header{font-size:12px;display:block;overflow:hidden;clear:both}
.comments .comments-content .comment-header a{color:#111;transition:color .3s}
.comments .comments-content .comment-header a:hover{color:#189dfe}
.comments .comments-content .comment{margin:0!important;padding:0!important}
.comments .comments-content .user{float:left;font-size:16px;font-style:normal;font-weight:600;display:inline-block}
.comments .comments-content .icon.blog-author{background:transparent;border:1px solid #222;border-radius:100%;text-align:center;width:16px;height:16px;line-height:8px;margin-top:6px}
.comments .comments-content .icon.blog-author:before{content:'\f00c';font-family:'Font Awesome 5 Free';font-size:8px;color:#222}
.comments .comments-content span.datetime.secondary-text{float:right;text-align:right}
.comments .comments-content span.datetime.secondary-text a{color:#a9a9a9}
.comments .comments-content span.comment-actions.secondary-text a{color:#333;font-size:13px}
.comments .comments-content .loadmore.loaded{padding-top:9px}
.comment-replybox-thread{margin-bottom:20px 0}
.static_page .comment-system,.static_page .comments{display:block}
.static_page .comments{margin-top:20px}
.comments .continue a,.comments .thread-toggle{padding:0 0 0 60px;font-weight:400;display:none}
#comments ol li .comment-header cite.blog-author:after{content:'';background-image:url(https://www.instagram.com/static/bundles/base/sprite_core.png/00b79edf00fd.png);margin:0 0 -4px 6px;background-position:-42px -425px;height:18px;width:18px;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;display:inline-block;overflow:hidden;text-indent:110%;white-space:nowrap}
.comments-page{}
#blogger-comments-page,#googplus-comments-page{padding:0}
#comments h4{text-indent:-999em;height:1px;background:#0186CB;margin-top:27px}
#fb-comments-page{padding:0 5px;display:none}
#googplus-comments-page{border-top:1px solid #0186CB;margin-top:27px}
.comments-tab{float:right;padding:8px 12px;margin-left:0;cursor:pointer;background-color:#FFF}
.comments-tab .iconbl,.comments-tab .iconfb{float:left;width:24px;height:24px;line-height:25px;border-radius:3px;text-align:center;color:#fff;font-size:15px;margin-right:5px}
.comments-tab .iconbl{background:#fe6602}.comments-tab .iconfb{background:#3b5998}
.comments-tab-icon{height:20px;width:auto;margin:0 5px -5px 5px}
.comments-tab-text{font-size:15px;font-weight:600;color:#333;float:left;padding:9px}
.inactive-select-tab{background-color:#F2F2F2}
.dv-tabs-header{height:40px;background-color:#F2F2F2;position:relative;margin:-10px;margin-bottom:10px}
.comments .continue{display:none;border-top:0}
.comments .continue a{border:1px solid #fa0320;border-radius:3px;box-shadow:0 1px rgba(255,255,255,.3) inset;background:#e8233a;padding:5px 10px;font-size:13px;color:#fff!important;text-decoration:none!important}
.comments .continue a:hover{background:#d70d25}
/* Res cmt */
@media screen and (max-width:480px) {
#comments .avatar-image-container{display:none!important}
#comments .comment-block{margin-left:10px!important}
.comments .comment-block,.comments .comments-content .comment-replies{marign-left:40px!important}
.comments .comments-content span.datetime.secondary-text{width:100%!important;float:left!important;text-align:left!important}
}
/* Preloader */
#preloader{overflow:hidden;background:none;left:0;right:0;top:0;bottom:0;position:fixed;z-index:9999}
.spinner{position:absolute;top:50%;left:49.5%;z-index:1;height:20px;width:20px;transform:translate(-50%,-50%);background:#fff;padding:5px}
[class^="ball-"]{position:absolute;display:block;left:30px;width:6px;height:6px;border-radius:6px;transition:all 0.5s;animation:circleRotate 4s both infinite;transform-origin:0 250% 0}
@keyframes circleRotate{0%{transform:rotate(0deg)}100%{transform:rotate(1440deg)}}
.ball-1{z-index:-1;background-color:#2196F3;animation-timing-function:cubic-bezier(0.5,0.3,0.9,0.9)}
.ball-2{z-index:-2;background-color:#03A9F4;animation-timing-function:cubic-bezier(0.5,0.6,0.9,0.9)}
.ball-3{z-index:-3;background-color:#00BCD4;animation-timing-function:cubic-bezier(0.5,0.9,0.9,0.9)}
.ball-4{z-index:-4;background-color:#009688;animation-timing-function:cubic-bezier(0.5,1.2,0.9,0.9)}
.ball-5{z-index:-5;background-color:#4CAF50;animation-timing-function:cubic-bezier(0.5,1.5,0.9,0.9)}
.ball-6{z-index:-6;background-color:#8BC34A;animation-timing-function:cubic-bezier(0.5,1.8,0.9,0.9)}
.ball-7{z-index:-7;background-color:#CDDC39;animation-timing-function:cubic-bezier(0.5,2.1,0.9,0.9)}
.ball-8{z-index:-8;background-color:#FFEB3B;animation-timing-function:cubic-bezier(0.5,2.4,0.9,0.9)}
@media screen and (max-width:800px){.spinner{left:43%}}
/* Animation */
.ripplelink{position:relative;overflow:hidden;transition:all 0.2s ease;z-index:0}.ink{display:block;position:absolute;background:rgba(255,255,255,0.3);border-radius:100%;transform:scale(0)}.animate{animation:ripple 0.65s linear}@keyframes ripple{100%{opacity:0;transform:scale(2.5)}}@keyframes fadeInDown{0%{opacity:0;transform:translateY(-20px)}100%{opacity:1;transform:translateY(0)}}@keyframes rubberBand{from{transform:scale3d(1,1,1)}30%{transform:scale3d(1.25,0.75,1)}40%{transform:scale3d(0.75,1.25,1)}50%{transform:scale3d(1.15,0.85,1)}65%{transform:scale3d(.95,1.05,1)}75%{transform:scale3d(1.05,.95,1)}to{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}@keyframes bounceInLeft{from,60%,75%,90%,to{animation-timing-function:cubic-bezier(0.215,0.610,0.355,1.000)}0%{opacity:0;transform:translate3d(-3000px,0,0)}60%{opacity:1;transform:translate3d(25px,0,0)}75%{transform:translate3d(-10px,0,0)}90%{transform:translate3d(5px,0,0)}to{transform:none}}@keyframes slideInRight{from{transform:translate3d(100%,0,0);visibility:visible;-webkit-backface-visibility:hidden}to{transform:translate3d(0,0,0)}}@keyframes slideInDown{from{transform:translate3d(0,100%,0);visibility:visible;-webkit-backface-visibility:hidden}to{transform:translate3d(0,0,0)}}@keyframes slideInTop{from{transform:translate3d(0,-100%,0);visibility:visible;-webkit-backface-visibility:hidden}to{transform:translate3d(0,0,0)}}
.liverain{display:block;overflow:hidden;margin:30px auto 0 auto;border-bottom:7px dotted rgba(0,0,0,0.08)}
@keyframes Gradient{0%{background-position:0 50%}50%{background-position:100% 50%}100%{background-position:0 50%}}
/* Css Dark Mode */
#change-theme-btn{cursor:pointer}
.d-sm-none{display:none!important}
.new-badge{margin-left:10px;font-size:12px;line-height:1.33341;font-weight:400;letter-spacing:-.01em;padding:2px 10px;border-radius:3px;color:#ef5602;background:transparent;border:1px solid #ef5602;white-space:nowrap;display:inline-block}.come-in{-webkit-transform:translateY(150px);-ms-transform:translateY(150px);transform:translateY(150px);-webkit-animation:come-in 1.6s ease forwards;animation:come-in 1.6s ease forwards}.come-in:nth-child(odd){-webkit-animation-duration:2s;animation-duration:2s}@-webkit-keyframes come-in{to{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes come-in{to{-webkit-transform:translateY(0);transform:translateY(0)}}
/* Dark */
body.bp-dark{background-color:#1c1c1c!important;color:#888!important}
.bp-dark .header-bottom a,.bp-dark .post h2 a,.bp-dark .sidebar-wrapper .widget>h2,.bp-dark #sidebar-wrapper .PopularPosts ul li a,.bp-dark .wrappergl button.on,.bp-dark #hide-qc li a,.bp-dark #hide-sd li a{color:#fff!important}
.bp-dark #icon-settings{fill:#fff!important}
.bp-dark #site-header,.bp-dark .header-middle,.bp-dark .home-menu-title,.bp-dark #primary-navigation ul.sub-menu,.bp-dark #primary-navigation li:hover > a,.bp-dark #primary-navigation ul.sub-menu li a{background-color:#1c1c1c!important}
.bp-dark #search-form button,.bp-dark .header-bottom,.bp-dark .wrappergl button,.bp-dark #nxmoi .noi-dung{background:#333!important}
.bp-dark .content-post,.bp-dark .ty-article,.bp-dark .back-to-top,.bp-dark .sidebar-wrapper .widget>h2,.bp-dark #sidebar-wrapper .widget,.bp-dark .author-post-info-title,.bp-dark .author-more,.bp-dark .author-post-meta,.bp-dark .box-footer,.bp-dark #hide-qc li,.bp-dark #hide-sd li{background:#2c2c2c!important}
.bp-dark .content-post,.bp-dark .load-post a,.bp-dark .load-post span{color:#888!important;border-color:#3c3c3c!important}
.bp-dark .content-post,.bp-dark .wrappergl button{box-shadow:0 0 10px rgba(0,0,0,0.2)!important}
.bp-dark .meta-post a{color:#888!important}
.bp-dark .footer-bottom{background:linear-gradient(135deg,#2c2c2c 0%,#2c2c2c 50%,#2c2c2c 30%,#1c1c1c 30%,#1c1c1c 100%)!important;border-top:1px solid #3c3c3c!important}
.bp-dark .footer-bottom,.bp-dark .footer-bottom b,.bp-dark .footer-bottom p,.bp-dark .lien-ket-blog a,.bp-dark .lien-ket-blog a:before,.bp-dark .wrappergl button{color:#888!important}
.bp-dark .sidebar-wrapper .widget>h2,.bp-dark #hide-qc li,.bp-dark #hide-sd li,.bp-dark #sidebar-wrapper .widget,.bp-dark .author-post-info-title,.bp-dark .author-more,.bp-dark .author-post-meta,.bp-dark .author-post-meta > span,.bp-dark .lien-ket-blog li,.bp-dark .td-ps-border-grey .td-social-but-icon,.bp-dark .td-ps-border-grey .td-social-but-text,.bp-dark .gbld-author-bio .author-description,.bp-dark .breadcrumbs,.bp-dark .post-meta,.bp-dark .post,.bp-dark #sidebar-wrapper .PopularPosts .widget-content ul li,.bp-dark .box .border-right,.bp-dark #nxmoi .morecmt a,.bp-dark #nxmoi li,.bp-dark #nxmoi .avatarRound{border-color:#3c3c3c!important}
.bp-dark .lien-ket-blog p{background-color:#252525!important}
.bp-dark .sidebar-wrapper .widget>h2:before{border-color:#232323!important}
.bp-dark .meta-post .author-link:before,.bp-dark .meta-post .timestamp-link:before,.bp-dark .meta-post span.label:before,.bp-dark .card .box h2,.bp-dark .card .box p{color:#999!important}
.bp-dark a,.bp-dark .post-title,.bp-dark .post-body{color:#888!important}
.bp-dark .related-title a,.bp-dark .widget-user .widget-user-username,.bp-dark .author-post-name a,.bp-dark #timer h2{color:#fff!important}
.bp-dark .number-product a,.bp-dark .shareit.floating .single-social .social-icn i{color:#fff!important}
.bp-dark .breadcrumbs{background:#272626!important}
.bp-dark #primary-navigation ul.sub-menu li{border-top:1px solid #333333}
.bp-dark .fa-moon{color:#007aff}
.bp-dark .fa-random{color:#23d160}
.bp-dark .fa-bell{color:#fe3d2f}
.bp-dark .card,.bp-dark .box{background-color:#252525!important}
.bp-dark #timer div{background:#3c3c3c!important}
.bp-dark #nxmoi .name,.bp-dark #nxmoi .morecmt a{background:#444!important}
.bp-dark #comments{background:#2c2c2c;border-color:#3c3c3c}
.bp-dark .dv-tabs-header{background:#212020}
.bp-dark .comments-tab-text,.bp-dark .comments-tab{color:#eee}
.bp-dark .comments-tab{background:#333333}
.bp-dark .inactive-select-tab{background:#272727}
.bp-dark #comments .comment-block{background:#3c3c3c}
.bp-dark #comments .comment-block:before{border-right-color:#3c3c3c}
.bp-dark #comments .comment-block p{color:#fff}
.bp-dark #comments .comment-form p{background:#3c3c3c;color:#fff}
.bp-dark #comments .comment-form p:after{border-color:#3c3c3c transparent transparent}
.bp-dark .comments .comments-content .comment-header a{color:#eee!important}
/* End Dark */
/* Heart */
.animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}
.animated.infinite{-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}@-webkit-keyframes pulse{from{-webkit-transform:scale3d(0.5,0.5,0.5);transform:scale3d(0.5,0.5,0.5)}50%{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}to{-webkit-transform:scale3d(0.5,0.5,0.5);transform:scale3d(0.5,0.5,0.5)}}@keyframes pulse{from{-webkit-transform:scale3d(0.5,0.5,0.5);transform:scale3d(0.5,0.5,0.5)}50%{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}to{-webkit-transform:scale3d(0.5,0.5,0.5);transform:scale3d(0.5,0.5,0.5)}}
.pulse{-webkit-animation-name:pulse;animation-name:pulse}
/* Menu hide */
#site-header.filling{position:fixed;width:100%;top:0;left:0;z-index:10}
#site-header.filling .header-middle{height:0;padding:0;overflow:hidden}
/* Hide banner */
#hide-qc li{width:100%;float:none;box-sizing:border-box;background:#fff;border:1px solid #eee;padding:8px 10px;margin-bottom:15px}
input[type=checkbox]{display:none}
.toggle{position:relative;float:right;width:41px;height:25px}
.toggle label,.toggle i{-webkit-box-sizing:border-box;box-sizing:border-box;display:block;background:#fff}
.toggle label{width:42px;height:24px;border-radius:35px;border:2px solid #e5e5e5;-webkit-transition:all .3s ease;-o-transition:all .3s ease;transition:all .3s ease;cursor:pointer}
.toggle i{position:absolute;top:2px;left:2px;width:20px;height:20px;border-radius:40px;-webkit-box-shadow:0 2px 5px rgba(0,0,0,.4);box-shadow:0 2px 5px rgba(0,0,0,.4);background:#fff;-webkit-transition:all .3s cubic-bezier(.275,-.45,.725,1.45);-o-transition:all .3s cubic-bezier(.275,-.45,.725,1.45);transition:all .3s cubic-bezier(.275,-.45,.725,1.45)}
input[type=checkbox]:active+.toggle i{width:35px}
.hd-qc input[type=checkbox]:active+.toggle label,.hd-qc input[type=checkbox]+.toggle label{border:12px solid #e81123}
.hd-qc input[type=checkbox]+.toggle i{left:21px}
.hd-qc input[type=checkbox]:active+.toggle label{border:16px solid #e5e5e5}
.hd-qc input[type=checkbox]:active+.toggle i{left:14px}
/* Hide sidebar */
#hide-sd li{width:100%;float:none;box-sizing:border-box;background:#fff;border:1px solid #eee;padding:8px 10px;margin-bottom:15px}
input[type=checkbox]{display:none}
.toggle{position:relative;float:right;width:41px;height:25px}
.toggle label,.toggle i{-webkit-box-sizing:border-box;box-sizing:border-box;display:block;background:#fff}
.toggle label{width:42px;height:24px;border-radius:35px;border:2px solid #e5e5e5;-webkit-transition:all .3s ease;-o-transition:all .3s ease;transition:all .3s ease;cursor:pointer}
.toggle i{position:absolute;top:2px;left:2px;width:20px;height:20px;border-radius:40px;-webkit-box-shadow:0 2px 5px rgba(0,0,0,.4);box-shadow:0 2px 5px rgba(0,0,0,.4);background:#fff;-webkit-transition:all .3s cubic-bezier(.275,-.45,.725,1.45);-o-transition:all .3s cubic-bezier(.275,-.45,.725,1.45);transition:all .3s cubic-bezier(.275,-.45,.725,1.45)}
input[type=checkbox]:active+.toggle i{width:35px}
.hd-sd input[type=checkbox]:active+.toggle label,.hd-sd input[type=checkbox]+.toggle label{border:12px solid #4cd964}
.hd-sd input[type=checkbox]+.toggle i{left:21px}
.hd-sd input[type=checkbox]:active+.toggle label{border:16px solid #e5e5e5}
.hd-sd input[type=checkbox]:active+.toggle i{left:14px}
.load-post{clear:both;text-align:center;margin:20px auto 5px auto}
.load-post a,.load-post span{background-color:#189dfe;color:#fff;-webkit-box-shadow:0 2px 5px rgba(52,152,219,0.15);box-shadow:0 2px 5px rgba(52,152,219,0.15);width:auto;float:none;box-sizing:border-box;text-align:center;position:relative;display:table;overflow:hidden;margin:0 auto;padding:6px 25px;border-radius:20px;font-size:15px;font-weight:400;transition:all .5s;text-transform:uppercase;font-family:sans-serif}
.load-post span.js-loading{background-color:#2e6da4}
.load-post span.js-loaded{background-color:#4cae4c}
.load-post span.js-error{background-color:#d43f3a}
.load-post i{margin:5px;float:left;text-align:center;color:#fff}
/* Change color */
.changecolor{width:100%;float:left;box-sizing:border-box;margin-bottom:5px}
.changecolor a{width:26px;height:26px;border:2px solid rgba(0, 0, 0, 0.2784313725490196);line-height:0;margin:0 8px 8px 0;display:block;float:left;background-color:#555;border-radius:100%;text-align:center}
.changecolor a:nth-child(10),.changecolor a:nth-child(20){margin-right:0px}
.changecolor a:focus{border:2px solid rgba(0, 0, 0, 0.45)}
.changecolor a:focus:before{content:"\f00c";font-family:'FontAwesome';font-size:12px;color:#fff;line-height:23px}
]]></b:skin>
<style>
/*
 * MOC Default CSS
 */
/*--------------------------------------------------------------
6.0 Forms
--------------------------------------------------------------*/

label{color:#333;display:block;font-weight:400;margin-bottom:.5em}
fieldset{margin-bottom:1em}
input[type=&quot;text&quot;],input[type=&quot;email&quot;],input[type=&quot;url&quot;],input[type=&quot;password&quot;],input[type=&quot;search&quot;],input[type=&quot;number&quot;],input[type=&quot;tel&quot;],input[type=&quot;range&quot;],input[type=&quot;date&quot;],input[type=&quot;month&quot;],input[type=&quot;week&quot;],input[type=&quot;time&quot;],input[type=&quot;datetime&quot;],input[type=&quot;datetime-local&quot;],input[type=&quot;color&quot;],textarea{color:#666;background:#fafafa;background-image:-webkit-linear-gradient(rgba(255,255,255,0),rgba(255,255,255,0));border:1px solid #bbb;-webkit-border-radius:3px;border-radius:3px;display:block;padding:.7em;width:auto;max-width:auto}
input[type=&quot;text&quot;]:focus,input[type=&quot;email&quot;]:focus,input[type=&quot;url&quot;]:focus,input[type=&quot;password&quot;]:focus,input[type=&quot;search&quot;]:focus,input[type=&quot;number&quot;]:focus,input[type=&quot;tel&quot;]:focus,input[type=&quot;range&quot;]:focus,input[type=&quot;date&quot;]:focus,input[type=&quot;month&quot;]:focus,input[type=&quot;week&quot;]:focus,input[type=&quot;time&quot;]:focus,input[type=&quot;datetime&quot;]:focus,input[type=&quot;datetime-local&quot;]:focus,input[type=&quot;color&quot;]:focus,textarea:focus{background:#fff;color:#222}
select{border:1px solid #bbb;-webkit-border-radius:3px;border-radius:3px;height:3em;max-width:100%}
input[type=&quot;radio&quot;],input[type=&quot;checkbox&quot;]{margin-right:.5em}
input[type=&quot;radio&quot;] + label,input[type=&quot;checkbox&quot;] + label{font-weight:400}
button,input[type=&quot;button&quot;],input[type=&quot;submit&quot;]{background-color:#189dfe;border:0;-webkit-border-radius:2px;border-radius:2px;-webkit-box-shadow:none;box-shadow:none;color:#fff;cursor:pointer;display:inline-block;font-size:14px;font-size:.875rem;font-weight:400;line-height:1;padding:1em 2em;text-shadow:none;-webkit-transition:background .2s;transition:background .2s}
input + button,input + input[type=&quot;button&quot;],input + input[type=&quot;submit&quot;]{padding:.75em 2em}
button.secondary,input[type=&quot;reset&quot;],input[type=&quot;button&quot;].secondary,input[type=&quot;reset&quot;].secondary,input[type=&quot;submit&quot;].secondary{background-color:#ddd;color:#222}
button:hover,button:focus,input[type=&quot;button&quot;]:hover,input[type=&quot;button&quot;]:focus,input[type=&quot;submit&quot;]:hover,input[type=&quot;submit&quot;]:focus{background:#767676}
button.secondary:hover,button.secondary:focus,input[type=&quot;reset&quot;]:hover,input[type=&quot;reset&quot;]:focus,input[type=&quot;button&quot;].secondary:hover,input[type=&quot;button&quot;].secondary:focus,input[type=&quot;reset&quot;].secondary:hover,input[type=&quot;reset&quot;].secondary:focus,input[type=&quot;submit&quot;].secondary:hover,input[type=&quot;submit&quot;].secondary:focus{background:#bbb}
::-webkit-input-placeholder{color:#333;font-family:&quot;Libre Franklin&quot;,&quot;Helvetica Neue&quot;,helvetica,arial,sans-serif}
:-moz-placeholder{color:#333;font-family:&quot;Libre Franklin&quot;,&quot;Helvetica Neue&quot;,helvetica,arial,sans-serif}
::-moz-placeholder{color:#333;font-family:&quot;Libre Franklin&quot;,&quot;Helvetica Neue&quot;,helvetica,arial,sans-serif;opacity:1}
:-ms-input-placeholder{color:#333;font-family:&quot;Libre Franklin&quot;,&quot;Helvetica Neue&quot;,helvetica,arial,sans-serif}

/*--------------------------------------------------------------
12.0 Layout
--------------------------------------------------------------*/
.right{float:right}
.left{float:left}
.col{position:relative;width:100%;padding:0 10px}
.row.small{margin-right:-5px;margin-left:-5px}
.small &gt; .col{padding:0 5px}
.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}
.col-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}
.col-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}
.col-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}
.col-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}
.col-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}
.col-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}
.col-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}
.col-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}
.col-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}
.col-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}
.col-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}
.col-0{display:none}
.col-0.right{left:100%}
.col-1.right{left:91.666667%}
.col-2.right{left:83.333333%}
.col-3.right{left:75%}
.col-4.right{left:66.666667%}
.col-5.right{left:58.333333%}
.col-6.right{left:50%}
.col-7.right{left:41.666667%}
.col-8.right{left:33.333333%}
.col-9.right{left:25%}
.col-10.right{left:16.666667%}
.col-11.right{left:8.333333%}
.col-12.right{left:0}
.col-0.left{right:100%}
.col-1.left{right:91.666667%}
.col-2.left{right:83.333333%}
.col-3.left{right:75%}
.col-4.left{right:66.666667%}
.col-5.left{right:58.333333%}
.col-6.left{right:50%}
.col-7.left{right:41.666667%}
.col-8.left{right:33.333333%}
.col-9.left{right:25%}
.col-10.left{right:16.666667%}
.col-11.left{right:8.333333%}
.col-12.left{right:0}
@media screen and (max-width:992px) {
.col-lg-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}
.col-lg-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}
.col-lg-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}
.col-lg-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}
.col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}
.col-lg-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}
.col-lg-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}
.col-lg-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}
.col-lg-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}
.col-lg-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}
.col-lg-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}
.col-lg-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}
.col-lg-0{display:none}
.col-lg-top{margin-bottom:20px}
.row.small-lg{margin-right:-5px;margin-left:-5px}
.small-lg &gt; .col{padding:0 5px}
.col-lg-0.right{left:100%}
.col-lg-1.right{left:91.666667%}
.col-lg-2.right{left:83.333333%}
.col-lg-3.right{left:75%}
.col-lg-4.right{left:66.666667%}
.col-lg-5.right{left:58.333333%}
.col-lg-6.right{left:50%}
.col-lg-7.right{left:41.666667%}
.col-lg-8.right{left:33.333333%}
.col-lg-9.right{left:25%}
.col-lg-10.right{left:16.666667%}
.col-lg-11.right{left:8.333333%}
.col-lg-12.right{left:0}
.col-lg-0.left{right:100%}
.col-lg-1.left{right:91.666667%}
.col-lg-2.left{right:83.333333%}
.col-lg-3.left{right:75%}
.col-lg-4.left{right:66.666667%}
.col-lg-5.left{right:58.333333%}
.col-lg-6.left{right:50%}
.col-lg-7.left{right:41.666667%}
.col-lg-8.left{right:33.333333%}
.col-lg-9.left{right:25%}
.col-lg-10.left{right:16.666667%}
.col-lg-11.left{right:8.333333%}
.col-lg-12.left{right:0}
}
@media screen and (max-width:767px) {
.row.large{margin-right:-10px;margin-left:-10px}
.large .col{padding:0 10px}
.col-tb-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}
.col-tb-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}
.col-tb-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}
.col-tb-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}
.col-tb-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}
.col-tb-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}
.col-tb-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}
.col-tb-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}
.col-tb-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}
.col-tb-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}
.col-tb-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}
.col-tb-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}
.col-tb-0{display:none}
.col-tb-top{margin-bottom:20px}
.row.small-tb{margin-right:-5px;margin-left:-5px}
.small-tb &gt; .col{padding:0 5px}
.col-tb-0.right{left:100%}
.col-tb-1.right{left:91.666667%}
.col-tb-2.right{left:83.333333%}
.col-tb-3.right{left:75%}
.col-tb-4.right{left:66.666667%}
.col-tb-5.right{left:58.333333%}
.col-tb-6.right{left:50%}
.col-tb-7.right{left:41.666667%}
.col-tb-8.right{left:33.333333%}
.col-tb-9.right{left:25%}
.col-tb-10.right{left:16.666667%}
.col-tb-11.right{left:8.333333%}
.col-tb-12.right{left:0}
.col-tb-0.left{right:100%}
.col-tb-1.left{right:91.666667%}
.col-tb-2.left{right:83.333333%}
.col-tb-3.left{right:75%}
.col-tb-4.left{right:66.666667%}
.col-tb-5.left{right:58.333333%}
.col-tb-6.left{right:50%}
.col-tb-7.left{right:41.666667%}
.col-tb-8.left{right:33.333333%}
.col-tb-9.left{right:25%}
.col-tb-10.left{right:16.666667%}
.col-tb-11.left{right:8.333333%}
.col-tb-12.left{right:0}
}
@media screen and (max-width:600px) {
.col-mb-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}
.col-mb-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}
.col-mb-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}
.col-mb-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}
.col-mb-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}
.col-mb-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}
.col-mb-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}
.col-mb-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}
.col-mb-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}
.col-mb-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}
.col-mb-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}
.col-mb-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}
.col-mb-0{display:none}
.col-mb-top{margin-bottom:10px}
.row.small-mb{margin-right:-5px;margin-left:-5px}
.small-mb &gt; .col{padding:0 5px}
.col-mb-0.right{left:100%}
.col-mb-1.right{left:91.666667%}
.col-mb-2.right{left:83.333333%}
.col-mb-3.right{left:75%}
.col-mb-4.right{left:66.666667%}
.col-mb-5.right{left:58.333333%}
.col-mb-6.right{left:50%}
.col-mb-7.right{left:41.666667%}
.col-mb-8.right{left:33.333333%}
.col-mb-9.right{left:25%}
.col-mb-10.right{left:16.666667%}
.col-mb-11.right{left:8.333333%}
.col-mb-12.right{left:0}
.col-mb-0.left{right:100%}
.col-mb-1.left{right:91.666667%}
.col-mb-2.left{right:83.333333%}
.col-mb-3.left{right:75%}
.col-mb-4.left{right:66.666667%}
.col-mb-5.left{right:58.333333%}
.col-mb-6.left{right:50%}
.col-mb-7.left{right:41.666667%}
.col-mb-8.left{right:33.333333%}
.col-mb-9.left{right:25%}
.col-mb-10.left{right:16.666667%}
.col-mb-11.left{right:8.333333%}
.col-mb-12.left{right:0}
}
</style>
<style>
.post-inner:hover:after{right:-100%}
.post-inner:after {
    content: &quot;&quot;;
    position: absolute;
    left: 0;
    bottom: 0;
    right: 100%;
    -moz-transition: 0.6s;
    -webkit-transition: 0.6s;
    -o-transition: 0.6s;
    transition: 0.6s;
    background: $(main.color);
    height: 2px;
}
</style>
 <b:template-skin>
      <![CDATA[
/*------Layout (No Edit)----------*/
body#layout #primary-navigation, body#layout .popup-wrapper{display:none}
body#layout #outer-wrapper,body#layout .row{width:1000px;padding:0}
body#layout .section h4{margin:2px 0 8px;color:#333!important}
body#layout #header-wrapper {position:relative}
body#layout #navigation-menu,body#layout .navigation-content{height:auto;margin:0}
body#layout #topnav,body#layout .tm-head{height:auto}
body#layout .tm-menu{margin:0;width:70%}
body#layout .social-area{margin:0;width:30%}
body#layout div.widget {width:100%}
body#layout .site-logo{float:left;width:30%;max-width:30%;max-height:none;margin:0;padding:0}
body#layout .header-logo .section{background:rgba(26,188,156,0.1);border-color:#1abc9c}
body#layout #search-form{height:auto;width:70%;float:right}
body#layout #ads-home{background-color:rgba(241,196,16,0.22);border-color:#f1c410}
body#layout #main-nav{display:block;width:70%;height:auto}
body#layout #menu{display:block;float:left;height:auto;background:rgba(231,76,60,0.1)!important;border-color:#e74c3c!important;width:94.6%}
body#layout #search-icon,body#layout #nav-search{display:none}
body#layout #menu .widget{display:block}
body#layout #content-wrapper{margin:0 auto}
body#layout #main-content{float:left;width:70%;margin:0;padding:0}
body#layout .posts-title{display:none}
body#layout #blocked-widgets{display:none!important}
body#layout #main-content #main{margin-right:4px;background:rgba(52,73,94,0.1);border-color:#34495e}
body#layout .layout-widget-description{display:none!important}
body#layout .widget-content .editlink{color:#fff!important;border:1px solid #233648;border-radius:2px;padding:0 5px;background-color:#233648}
body#layout #sidebar{width:25%;float:left}
body#layout #footer-wrapper{overflow:hidden;padding:0 5px}
body#layout #footer{float:left;width:100%;border:1px solid #1abc9c;background:rgba(26,188,156,0.1);padding:0}
body#layout #footer .col{float:left;background:transparent;padding:16px 0!important;margin:0 1%!important;width:31.33%!important;border:0!important}
body#layout #footer #footer-sec3{margin-right:0!important}
body#layout #footer .section .draggable-widget .widget-wrap2{background-color:#1abc9c!important}
body#layout #footer .section .add_widget{border-color:#1abc9c}
body#layout #footer-sec3{margin-right:0}
body#layout .footer-wrapper .footer-copy{width:100%}
body#layout .footer-wrapper .footer-copy .section{margin-right:0}
/*------Layout (end)----------*/
      ]]>
    </b:template-skin>
<script type='text/javascript'>
 //<![CDATA[
 function related_results_labels(a){for(var b=0;b<a.feed.entry.length;b++){var c=a.feed.entry[b];titles[titlesNum]=c.title.$t;for(var d=0;d<c.link.length;d++)if("alternate"==c.link[d].rel){urls[titlesNum]=c.link[d].href,time[titlesNum]=c.published.$t,titlesNum++;break}}}function removeRelatedDuplicates(){var a=new Array(0),b=new Array(0);e=new Array(0);for(var c=0;c<urls.length;c++)contains(a,urls[c])||(a.length+=1,a[a.length-1]=urls[c],b.length+=1,b[b.length-1]=titles[c],e.length+=1,e[e.length-1]=time[c]);titles=b,urls=a,time=e}function contains(a,b){for(var c=0;c<a.length;c++)if(a[c]==b)return!0;return!1}function printRelatedLabels(a){var b=a.indexOf("?m=0");b!=-1&&(a=a.replace(/\?m=0/g,""));for(var c=0;c<urls.length;c++)urls[c]==a&&(urls.splice(c,1),titles.splice(c,1),time.splice(c,1));var d=Math.floor((titles.length-1)*Math.random()),c=0;if(document.write("<ul>"),0==titles.length)document.write("<li>Không có bài viết liên quan → </li>");else for(;c<titles.length&&c<20&&c<maxresults;)b!=-1&&(urls[d]=urls[d]+"?m=0"),document.write('<li><a href="'+urls[d]+'" title="'+time[d].substring(8,10)+"/"+time[d].substring(5,7)+"/"+time[d].substring(0,4)+'">'+titles[d]+"</a></li>"),d<titles.length-1?d++:d=0,c++;document.write("</ul>"),urls.splice(0,urls.length),titles.splice(0,titles.length)}var titles=new Array,titlesNum=0,urls=new Array,time=new Array;
 //]]>
 </script>
<style>
.widget .post-body ul li, .widget .post-body ol li{
    /* list-style: none; */
    list-style-type: square;
    margin-left: 40px;
    margin-bottom: 10px;
}
</style>
<b:if cond='data:blog.pageType != &quot;index&quot;'>
<style type='text/css'>
/* CSS Only */
.post iframe{width:100%!important;}
@media screen and (max-width:960px){
.post iframe{max-height:90%}}
@media screen and (max-width:768px){
.post iframe{max-height:75%}}
@media screen and (max-width:600px){
.post iframe{max-height:60%}}
@media screen and (max-width:480px){
.post iframe{height:auto!important;max-height:auto!important}}
</style>
<style>
/*####TOC Plugin V2.0 by Bloghong####*/
.mbtTOC2{border:5px solid #ff7878;box-shadow:1px 1px 0 #EDE396;background-color:#fff;color:#707037;line-height:1.4em;margin:30px auto;padding:20px 30px 20px 10px; font-family:Ubuntu, arial;display: block;width: 100%;}.mbtTOC2 button{background:#fff; font-family:ubuntu, arial; font-size:19px;position:relative; outline:none;border:none; color:#707037;padding:0 0 0 15px;}.mbtTOC2 button a {color:#0080ff; padding:0px 2px;cursor:pointer;} 
.mbtTOC2 button a:hover{ text-decoration:underline; } 
.mbtTOC2 button span {font-size:15px; margin:0px 10px; }

.mbtTOC2 li{margin:10px 0;  } 
.mbtTOC2 li a {color:#0080ff; text-decoration:none; font-size:16px; text-transform:capitalize;} 
.mbtTOC2 li a:hover {text-decoration: underline;}.mbtTOC2 li li {margin:4px 0px;} 
.mbtTOC2 li li a{ color:#289728; font-size:15px;}

.mbtTOC2 ol{list-style:none}
.mbtTOC2 ol ol{counter-reset:section2}
.mbtTOC2 ol ol ol{counter-reset:section3}
.mbtTOC2 ol ol ol ol{counter-reset:section4}
.mbtTOC2 ol ol ol ol ol{counter-reset:section5}
.mbtTOC2 li:before{content:counter(section1);counter-increment:section1;position:relative;padding:0 8px 0 0;font-size:18px}
.mbtTOC2 li li:before{content:counter(section1) &quot;.&quot; counter(section2);counter-increment:section2;font-size:14px}
.mbtTOC2 li li li:before{content:counter(section1) &quot;.&quot;counter(section2) &quot;.&quot; counter(section3);counter-increment:section3}
.mbtTOC2 li li li li:before{content:counter(section1) &quot;.&quot;counter(section2) &quot;.&quot;counter(section3) &quot;.&quot; counter(section4);counter-increment:section4}
.mbtTOC2 li li li li li:before{content:counter(section1) &quot;.&quot;counter(section2) &quot;.&quot;counter(section3) &quot;.&quot; counter(section4)&quot;.&quot; counter(section5);counter-increment:section5}
.label-size a {
    font-size: 0.8em !important;
    display: inline-block;
    border: 1px solid currentColor;
    opacity: .8;
    margin: 0 5px 5px 0;
    padding: 2px 5px;
    border-radius: 3px;
}
  .post-body a{color: #8fd443;}
/* 

</style>
<script type='text/javascript'> 
//<![CDATA[ 
//*************TOC Plugin V2.0 by bloghong.com 
function mbtTOC2(){var a=1,b=0,c="";document.getElementById("post-toc").innerHTML=document.getElementById("post-toc").innerHTML.replace(/<h([\d]).*?>(.*?)<\/h([\d]).*?>/gi,function(d,e,f,g){return e!=g?d:(e>a?c+=new Array(e-a+1).join("<ol class='point"+a+"'>"):e<a&&(c+=new Array(a-e+1).join("</ol></li>")),b+=1,c+='<li><a href="#point'+b+'">'+f+"</a>",a=parseInt(e),"<h"+e+" id='point"+b+"'>"+f+"</h"+g+">")}),a&&(c+=new Array(a+1).join("</ol>")),document.getElementById("mbtTOC2").innerHTML+=c}function mbtToggle2(){var a=document.getElementById("mbtTOC2"),b=document.getElementById("Tog");"none"===a.style.display?(a.style.display="block",b.innerHTML="Ẩn"):(a.style.display="none",b.innerHTML="Hiện")} 
//]]> 
</script>
</b:if>
  </head>
<style>
/* Related Post */
#related-posts{overflow:hidden;margin:0 0 10px;padding:10px 0 0}
.related li{width:32.276%;display:inline-block;height:auto;float:left;margin-right:9px;overflow:hidden;position:relative}
.related li h3{margin-top:0}
.related-thumb{width:100%;height:130px;overflow:hidden;border-radius:2px}
.related li .related-img{width:100%;height:130px;display:block;position:relative;transition:all .3s ease-out}
.related-title{position:absolute;bottom:10px;left:10px;right:10px;padding:0;margin:0;line-height:1.2em;z-index:2}
.related-title a{font-size:14px;line-height:1.4em;padding:0;font-weight:400;color:#fff;display:block;text-shadow:0 .5px .5px rgba(34,34,34,0.3)}
.related-title a:hover,.related-title a:active{color:#fff}
.related li:nth-of-type(3),.related li:nth-of-type(6),.related li:nth-of-type(9){margin-right:0}
.related .related-thumb .related-img:after{background:rgba(0,0,0,0.12);content:&quot;&quot;;bottom:0;left:0;top:0;right:0;margin:auto;position:absolute;transition:all .5s}
.related .related-thumb:hover .related-img:after{background:rgba(0,0,0,0.38)}
.related-overlay{position:absolute;left:0;top:0;z-index:1;width:100%;height:100%;background-color:rgba(40,35,40,0.05)}
.related-line,.related-line-c{position:relative;margin:10px auto 0}
.related-info-th{z-index:2;position:relative;margin-bottom:20px;color:#888;background:#fff;display:inline-block;padding:3px 10px;margin:1px 0;font-size:10px;font-weight:400;text-transform:uppercase;border:1px solid rgba(0,0,0,0.08);border-radius:99em}
.related-line-c{text-align:center;margin-bottom:6px}
.related-line:before,.related-line-c:before{z-index:1;content:&quot;&quot;;width:100%;height:1px;background:rgba(0,0,0,0.08);position:absolute;top:50%;left:0;margin-top:-1px}/* Responsive */
@media screen and (max-width:769px) {
.related li{width:100%;margin:0 0 10px 0}
}
/* Reading progress bar */
#nprogress{pointer-events:none}#nprogress .bar{background:#08f;box-shadow:0 0 10px rgba(0,136,255,.7);position:fixed;z-index:1031;bottom:0;left:0;width:0;height:4px}#nprogress .peg{display:none;position:absolute;right:0;width:100px;height:100%;box-shadow:0 0 10px #29d,0 0 5px #29d;opacity:1;-webkit-transform:rotate(3deg) translate(0,-4px);-ms-transform:rotate(3deg) translate(0,-4px);transform:rotate(3deg) translate(0,-4px)}
</style>
<style>
img.avt-fsb:hover {transform: rotate(360deg);transition: 0.7s; border-radius: 100%;}
  img.avt-fsb {transition: 1s;}
</style>
<body expr:class='data:blog.pageType'>
<style>
.sidebar .widget&gt;h2:after {
    content: &#39;\f209&#39;;
    font-family: fontawesome;
    font-size: 1rem;
    font-weight: normal;
    float: right;
    margin: 0 0 0 15px;
    color: #a4b0be;
    transition: all .6s;
}</style>
<style>
/* Thong ke */
#Stats1 h2{display:block}
.Stats .counter-wrapper{display:inline;font-size:15px;font-weight:700;vertical-align:top;direction:ltr;height:inherit;line-height:inherit}
.Stats .count{display:inline;font-size:15px;font-weight:400;vertical-align:top;direction:ltr;height:inherit;line-height:inherit}
.Stats .counts{font-weight:700}
.Stats .count2,.Stats .count3{float:left;width:100%}
.Stats .count2{padding:12px 0}</style>
<div class='home' id='outer-wrapper'>
<!-- Header wrapper -->
<header class='main-header' id='site-header'>
<div class='header-middle' style='overflow:hidden'>
<div class='container'>
<div class='row small-mb'>
<div class='col col-3 col-lg-3 col-tb-12' id='logo'>
<div class='fas col-0' id='show-menu'>
</div>
<div class='site-logo'>
<b:section class='' id='header' maxwidgets='1' showaddelement='no'>
  <b:widget id='Header1' locked='true' title='Hiếu Giddy (Tiêu đề)' type='Header' version='2' visible='true'>
    <b:widget-settings>
      <b:widget-setting name='displayUrl'>http://1.bp.blogspot.com/-SzASQtQRHjg/XXS7U0znVqI/AAAAAAAAIuI/V2RIQRRIFSYl2rzcyhE4oyhK-qO3FX9RACK4BGAYYCw/s1600/logo-bloghong.png</b:widget-setting>
      <b:widget-setting name='displayHeight'>100</b:widget-setting>
      <b:widget-setting name='sectionWidth'>292</b:widget-setting>
      <b:widget-setting name='useImage'>true</b:widget-setting>
      <b:widget-setting name='shrinkToFit'>false</b:widget-setting>
      <b:widget-setting name='imagePlacement'>REPLACE</b:widget-setting>
      <b:widget-setting name='displayWidth'>451</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>

  <b:if cond='data:useImage'>
    <b:if cond='data:imagePlacement == &quot;BEHIND&quot;'>
      <!--
      Show image as background to text. You can't really calculate the width
      reliably in JS because margins are not taken into account by any of
      clientWidth, offsetWidth or scrollWidth, so we don't force a minimum
      width if the user is using shrink to fit.
      This results in a margin-width's worth of pixels being cropped. If the
      user is not using shrink to fit then we expand the header.
      -->
      <b:if cond='data:mobile'>
        <div id='header-inner'>
          <div class='titlewrapper' style='background: transparent'>
            <h1 class='title' style='background: transparent; border-width: 0px'>
              <b:include name='title'/>
            </h1>
          </div>
          <b:include name='description'/>
        </div>
      <b:else/>
        <div expr:style='&quot;background-image: url(\&quot;&quot; + data:sourceUrl + &quot;\&quot;); &quot;                      + &quot;background-position: &quot;                      + data:backgroundPositionStyleStr + &quot;; &quot;                      + data:widthStyleStr                      + &quot;min-height: &quot; + data:height                      + &quot;_height: &quot; + data:height                      + &quot;background-repeat: no-repeat; &quot;' id='header-inner'>
          <div class='titlewrapper' style='background: transparent'>
            <h1 class='title' style='background: transparent; border-width: 0px'>
              <b:include name='title'/>
            </h1>
          </div>
          <b:include name='description'/>
        </div>
      </b:if>
    <b:else/>
      <!--Show the image only-->
      <div id='header-inner'>
        <a expr:href='data:blog.homepageUrl' style='display: block'>
          <img expr:alt='data:title' expr:height='data:height' expr:id='data:widget.instanceId + &quot;_headerimg&quot;' expr:src='data:sourceUrl' expr:width='data:width' style='display: block'/>
        </a>
        <!--Show the description-->
        <b:if cond='data:imagePlacement == &quot;BEFORE_DESCRIPTION&quot;'>
          <b:include name='description'/>
        </b:if>
      </div>
    </b:if>
  <b:else/>
    <!--No header image -->
    <div id='header-inner'>
      <div class='titlewrapper'>
<b:if cond='data:blog.pageType == &quot;index&quot;'>
<h1 style='display: none;'>Blog Hồng - Thủ Thuật Blogspot- Facebook - Marketing</h1><a expr:href='data:blog.homepageUrl' style='display: block'>
          <img expr:alt='data:title' expr:height='data:height' expr:id='data:widget.instanceId + &quot;_headerimg&quot;' expr:src='data:sourceUrl' expr:width='data:width' style='display: block'/>
  </a>
<b:else/>
<a expr:href='data:blog.homepageUrl' style='display: block'>
          <img expr:alt='data:title' expr:height='data:height' expr:id='data:widget.instanceId + &quot;_headerimg&quot;' expr:src='data:sourceUrl' expr:width='data:width' style='display: block'/>
        </a>
</b:if>
        
      </div>
      <b:include name='description'/>
    </div>
  </b:if>
</b:includable>
    <b:includable id='behindImageStyle'>
    <b:if cond='data:sourceUrl'>
      <b:include cond='data:this.image' data='{                    image: data:this.image,                    selector: &quot;.header-widget&quot;                  }' name='responsiveImageStyle'/>
      <style type='text/css'>
        .header-widget {
          background-position: <data:blog.locale.languageAlignment/>;
          background-repeat: no-repeat;
        }
      </style>
    </b:if>
  </b:includable>
    <b:includable id='description'>
    <p>
      <data:this.description/>
    </p>
  </b:includable>
    <b:includable id='image'>
    <a class='header-image-wrapper' expr:href='data:blog.homepageUrl'>
      <b:include data='{                                                 image: data:image,                                                 altText: data:blog.title.escaped,                                                 originalWidth: data:width,                                                 originalHeight: data:height                                               }' name='responsiveImage'/>
    </a>
  </b:includable>
    <b:includable id='title'>
    <h1>
      <b:tag cond='data:view.url != data:blog.homepageUrl' expr:href='data:blog.homepageUrl' name='a'>
        <data:title/>
      </b:tag>
    </h1>
  </b:includable>
  </b:widget>
</b:section>
</div>
<div class='fas col-0' id='show-search'/>
</div>
<div class='col col-7 col-lg-6 col-tb-12'>
<form action='https://www.bloghong.com/search' id='search-form' method='get' role='search'>
<div class='form-group'>
<button class='search fas' id='search-submit' type='submit' value='Search'/>
<input aria-label='Search this blog' autocomplete='off' name='q' placeholder='Search' spellcheck='false' type='search' value=''/><!-- Drop label -->
<b:section class='' id='label' showaddelement='yes'>
  <b:widget id='Label1' locked='false' title='Nhãn' type='Label' version='1'>
    <b:widget-settings>
      <b:widget-setting name='sorting'>ALPHA</b:widget-setting>
      <b:widget-setting name='display'>LIST</b:widget-setting>
      <b:widget-setting name='selectedLabelsList'/>
      <b:widget-setting name='showType'>ALL</b:widget-setting>
      <b:widget-setting name='showFreqNumbers'>true</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'>
    <h2><data:title/></h2>
  </b:if>
  <div class='widget-content list-label-widget-content'>
    <b:if cond='data:display == &quot;list&quot;'>
<div class='dropmedown'>
<select class='dropdown-select' onchange='location=this.options[this.selectedIndex].value;'>
<option> Search Category </option>
      <ul>
        <b:loop values='data:labels' var='label'>
          <li>
            <b:if cond='data:blog.url == data:label.url'>
              <span expr:dir='data:blog.languageDirection'><data:label.name/></span>
            <b:else/>
              <option expr:dir='data:blog.languageDirection' expr:value='data:label.url'>#<data:label.name/></option>
            </b:if>
            <b:if cond='data:showFreqNumbers'>
              <span dir='ltr'>(<data:label.count/>)</span>
            </b:if>
          </li>
        </b:loop>
      </ul>
  </select></div>
    <b:else/>
      <b:loop values='data:labels' var='label'>
        <span expr:class='&quot;label-size label-size-&quot; + data:label.cssSize'>
          <b:if cond='data:blog.url == data:label.url'>
            <span expr:dir='data:blog.languageDirection'><data:label.name/></span>
          <b:else/>
            <a expr:dir='data:blog.languageDirection' expr:href='data:label.url'><data:label.name/></a>
          </b:if>
          <b:if cond='data:showFreqNumbers'>
            <span class='label-count' dir='ltr'>(<data:label.count/>)</span>
          </b:if>
        </span>
      </b:loop>
    </b:if>
    <b:include name='quickedit'/>
  </div>
</b:includable>
  </b:widget>
</b:section>
</div>
</form>
</div>
<div class='col col-2 col-lg-3 col-tb-12 number-product'><a class='cart-contents' href='https://facebook.com/hieugiddy' style='display:block' title='Liên hệ'><i class='fa fa-envelope'/>Contact</a>
<a class='moc-my-account' href='https://www.blogger.com/follow.g?blogID=928566791091565874' title='Đăng ký'>
<i class='fa fa-user-plus'/>Register</a>
<span>/</span>
<a class='moc-my-account' href='https://www.blogger.com/follow.g?blogID=928566791091565874' onclick='login()' title='Đăng nhập'><i class='fa fa-sign-in'/>Login</a>
</div>
</div>
</div>
</div>
<div class='header-bottom'>
<div class='container'>
<div class='row'>
<div class='col col-12 col-tb-12 col-mb-12'>
<div id='primary-navigation'>
<nav>
<ul class='menu clearfix' id='menu-menu-1'>
<li class='menu-item menu-item-type-custom'><a href='/'><i class='fas fa-house-damage'/>HOME</a></li>
<li class='menu-item-has-children'><a href='#'><i class='fa fa-html5'/>BLOGSPOT <i class='fa fa-arrow-circle-right'/></a>
<ul class='sub-menu' style='min-width:201px'>
<li class='menu-item menu-item-type-taxonomy'><a href='/search/label/Thủ%20thuật%20blogspot#'><i class='fa fa-code'/>Thủ Thuật Blogspot</a></li>
<li class='menu-item-has-children'><a href='/search/label/Blogger%20Templates#'><i class='fa fa-file-code-o'/>Theme Blogspot <i class='fa fa-arrow-circle-right'/></a>
<ul class='sub-menu'>
<li class='menu-item menu-item-type-taxonomy' id='menu-item-2035'><a href='#'>Miễn Phí</a></li>
<li class='menu-item menu-item-type-taxonomy' id='menu-item-2036'><a href='#'>Có Phí</a></li>
</ul>
</li>
</ul>
</li>
<li class='menu-item-has-children'><a href='/search/label/Facebook'><i class='fa fa-facebook'/>FACEBOOK</a>
</li>
<li class='menu-item-has-children'><a href='/search/label/Kiến%20Thức%20SEO'><i class='fa fa-paint-brush'/>KIẾN THỨC SEO <i class='fa fa-arrow-circle-right'/></a>
<ul class='sub-menu' style='min-width:201px'>
<li class='menu-item menu-item-type-taxonomy'><a href='#'><i class='fa fa-code'/>ONPAGE</a></li>
<li class='menu-item menu-item-type-taxonomy'><a href='#'><i class='fa fa-wrench'/>OFF PAGE</a></li>
</ul>
</li>
<li class='menu-item menu-item-type-taxonomy'>
<a href='/2018/07/thong-bao-chuyen-doi-ten-mien.html'><i aria-hidden='true' class='fa fa-bolt'/>CÔNG CỤ <i class='fa fa-arrow-circle-right'/></a>
<ul class='sub-menu' style='min-width:201px'>
<li class='menu-item menu-item-type-taxonomy'><a href='/p/ma-hoa.html#'><i class='fa fa-code'/>MÃ HÓA CODE</a></li>
<li class='menu-item menu-item-type-taxonomy'><a href='/p/cong-cu-seo.html#'><i class='fa fa-wrench'/>CÔNG CỤ SEO</a></li>
<li class='menu-item menu-item-type-taxonomy'><a href='/p/unpack-javascripts-giai-ma-code.html#'><i class='fa fa-wrench'/>UNPACK JAVASCRIPT</a></li>
<li class='menu-item menu-item-type-taxonomy'><a href='/p/encoder.html#'><i class='fa fa-wrench'/>ENCODER</a></li>
<li class='menu-item menu-item-type-taxonomy'><a href='/p/chuyen-doi-code.html#'><i class='fa fa-wrench'/>CHUYỂN ĐỔI CODE</a></li>
</ul>
</li>
</ul></nav>
</div>
<div id='moc-phu'/>
</div>
</div>
</div>
<div class='clear'/>
<style>
/*=====================================
= Nhiều màu
=====================================*/
#colored-bar{width:100%;height:2px;overflow:hidden;background:#669900}
.color-bar{width:25%;height:2px;float:left;background:transparent!important}
.color-blue{background:#0089fa}
.color-red{background:#ff002b}
.color-orange{background:#ffa900}
.color-green{background:#00a753}
</style>
<div id='colored-bar'>
<span class='color-bar color-blue'/>
<span class='color-bar color-red'/>
<span class='color-bar color-orange'/>
<span class='color-bar color-green'/>
</div>
</div>
</header>
<!--<a class='filling' href='#' id='back-to-top'><i class='fa fa-arrow-up'/></a>-->
<!-- Back -->
<div class='row' id='content-wrapper'>
<div class='clear'/>
<b:if cond='data:blog.pageType == &quot;error_page&quot;'>
<style>
body,html{overflow:hidden;margin:0;padding:0;width:100%;min-height:100vh;}
body{background:#f0f0f0;background-image:none;font-family:&#39;Quicksand&#39;,sans-serif;font-size:14px;font-weight:400;text-align:left;color:#000}
::-webkit-scrollbar{display:none!important}
#site-header,#main-wrapper,#sidebar-wrapper,#countdown-holiday,.site-footer,#HTML5,#sidebar{display:none!important}
#content-wrapper{margin:0 auto!important;overflow:inherit!important}
.container404{margin:8% auto 0 auto;max-width:560px;min-width:200px;line-height:normal;backface-visibility:hidden;transition:all .3s;}
.container404:hover{cursor:crosshair;transform:scale(1.1)}
.box404 hr{background:transparent;display:block;border:none;border-bottom:2px dashed rgba(0,0,0,0.1);height:1px;margin:1.5em 0}
.box404{background-color:#fff;padding:20px;font-size:110%;color:#888;border-radius:5px 5px 0 0}
.box404 h2,.box404 h3{color:#444;display:block;text-align:center;font-size:120%}
.box404 h2{font-size:4rem;color:#e74c3c;}
.box404 p{display:block;margin:10px 0}
.box404 ul li{margin:0 0 8px 20px;list-style:initial;list-style-type:square}
.box404 ul li a{color:#888;}
.copyright404{background:#444;display:block;text-align:center;color:#fff;margin:auto;font-weight:normal;max-width:560px;min-width:200px;padding:20px;border-radius:0 0 5px 5px}
.copyright404 a,.copyright404 a:hover{color:#fff}
@media screen and (max-width:1024px) {
.container404{margin:4% auto 0 auto;}}
</style>
<div class='container404'>
<div class='box404'>
<h2>404</h2>
<h3>The page could not be found</h3>
<hr/>
<p>Trang bạn đang tìm kiếm có thể đã bị xóa đã thay đổi tên hoặc tạm thời không khả dụng</p>
<p>Hãy thử như sau :</p>
<ul>
<li>Nếu bạn nhập địa chỉ trang vào <strong>thanh Địa chỉ</strong>, hãy đảm bảo rằng nó được viết đúng chính tả.</li>
<li>Nhấp chuột <strong><a href='//www.bloghong.com'>vào đây</a></strong> để trở về trang chính của chúng tôi.</li>
<li>Nếu bạn được liên kết với trang này, hãy liên hệ với quản trị viên và làm cho họ biết về vấn đề này.</li>
</ul>
</div>
<div class='copyright404'>
  &#169; 2020 <a href='#'>Hiếu Giddy</a>. All Rights Reserved.
</div>
</div>
</b:if>
<div id='main-content'>
<b:section class='ads-home' id='ads-home' showaddelement='yes'/>
<b:section class='main' id='main' showaddelement='no'>
  <b:widget id='Blog1' locked='true' title='Bài đăng trên Blog' type='Blog' version='1'>
    <b:widget-settings>
      <b:widget-setting name='showDateHeader'>false</b:widget-setting>
      <b:widget-setting name='style.textcolor'>#2196f3</b:widget-setting>
      <b:widget-setting name='showShareButtons'>false</b:widget-setting>
      <b:widget-setting name='showCommentLink'>true</b:widget-setting>
      <b:widget-setting name='style.urlcolor'>#000000</b:widget-setting>
      <b:widget-setting name='showAuthor'>true</b:widget-setting>
      <b:widget-setting name='disableGooglePlusShare'>true</b:widget-setting>
      <b:widget-setting name='style.linkcolor'>#757575</b:widget-setting>
      <b:widget-setting name='style.unittype'>TextAndImage</b:widget-setting>
      <b:widget-setting name='style.bgcolor'>#ffffff</b:widget-setting>
      <b:widget-setting name='showAuthorProfile'>false</b:widget-setting>
      <b:widget-setting name='style.layout'>1x1</b:widget-setting>
      <b:widget-setting name='showLabels'>true</b:widget-setting>
      <b:widget-setting name='showLocation'>false</b:widget-setting>
      <b:widget-setting name='showTimestamp'>true</b:widget-setting>
      <b:widget-setting name='postsPerAd'>1</b:widget-setting>
      <b:widget-setting name='showBacklinks'>false</b:widget-setting>
      <b:widget-setting name='style.bordercolor'>#ffffff</b:widget-setting>
      <b:widget-setting name='showInlineAds'>false</b:widget-setting>
      <b:widget-setting name='showReactions'>false</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main' var='top'>
  <b:if cond='!data:mobile'>
    <!-- posts -->
    <div class='blog-posts hfeed'>

      <b:include data='top' name='status-message'/>
      <b:include data='posts' name='breadcrumb'/> 

      <data:defaultAdStart/>
      <b:loop values='data:posts' var='post'>
        <b:if cond='data:post.isDateStart and not data:post.isFirstPost'>
          &lt;/div&gt;&lt;/div&gt;
        </b:if>
        <b:if cond='data:post.isDateStart'>
          &lt;div class=&quot;date-outer&quot;&gt;
        </b:if>

        <b:if cond='data:post.isDateStart'>
          &lt;div class=&quot;date-posts&quot;&gt;
        </b:if>
        <div class='post-item'>
<div class='clear'/>
<div class='clear'/>
          <b:include data='post' name='post'/>
          <b:include cond='data:blog.pageType in {&quot;static_page&quot;,&quot;item&quot;}' data='post' name='comment_picker'/>
        </div>
        <!-- Ad -->
        <b:if cond='data:post.includeAd'>
          <div class='inline-ad'>
            <data:adCode/>
          </div>
        </b:if>
      </b:loop>
<b:if cond='data:numPosts != 0'>
        &lt;/div&gt;&lt;/div&gt;
      </b:if>
      <data:adEnd/>
    </div>
  	<b:if cond='data:blog.pageType == &quot;index&quot;'>
		<b:include name='nextprev'/>
    <b:else/>
    <b:if cond='data:blog.pageType == &quot;archive&quot;'>
        <b:include name='nextprev'/>
	<b:else/>
		<b:if cond='data:blog.homepageUrl != data:blog.url'>
<!-- navigation -->

</b:if>
	</b:if>
	</b:if>

    <!-- feed links -->
    <b:include name='feedLinks'/>

  <b:else/>
    <b:include name='mobile-main'/>
  </b:if>

  <b:include cond='data:top.showPlusOne' name='googlePlusBootstrap'/>
</b:includable>
    <b:includable id='backlinkDeleteIcon' var='backlink'>
  <span expr:class='&quot;item-control &quot; + data:backlink.adminClass'>
    <a expr:href='data:backlink.deleteUrl' expr:title='data:top.deleteBacklinkMsg'>
      <img src='https://resources.blogblog.com/img/icon_delete13.gif'/>
    </a>
  </span>
</b:includable>
    <b:includable id='backlinks' var='post'>
  <a name='links'/><h4><data:post.backlinksLabel/></h4>
  <b:if cond='data:post.numBacklinks != 0'>
    <dl class='comments-block' id='comments-block'>
      <b:loop values='data:post.backlinks' var='backlink'>
        <div class='collapsed-backlink backlink-control'>
          <dt class='comment-title'>
            <span class='backlink-toggle-zippy'>&#160;</span>
            <a expr:href='data:backlink.url' rel='nofollow'><data:backlink.title/></a>
            <b:include data='backlink' name='backlinkDeleteIcon'/>
          </dt>
          <dd class='comment-body collapseable'>
            <data:backlink.snippet/>
          </dd>
          <dd class='comment-footer collapseable'>
            <span class='comment-author'><data:post.authorLabel/> <data:backlink.author/></span>
            <span class='comment-timestamp'><data:post.timestampLabel/> <data:backlink.timestamp/></span>
          </dd>
        </div>
      </b:loop>
    </dl>
  </b:if>
  <p class='comment-footer'>
    <a class='comment-link' expr:href='data:post.createLinkUrl' expr:id='data:widget.instanceId + &quot;_backlinks-create-link&quot;' target='_blank'><data:post.createLinkLabel/></a>
  </p>
</b:includable>
    <b:includable id='breadcrumb' var='posts'>
<b:if cond='data:blog.homepageUrl != data:blog.url'>
<b:if cond='data:blog.pageType == &quot;static_page&quot;'>
<div class='breadcrumbs'><span><a expr:href='data:blog.homepageUrl' rel='tag' title='Home'>Home</a></span> <i class='fa fa-angle-right'/> <span><data:blog.pageName/></span></div>
<b:else/>
<b:if cond='data:blog.pageType == &quot;item&quot;'>
<!-- Breadcrumb Untuk Halaman Pos -->
<b:loop values='data:posts' var='post'>
<b:if cond='data:post.labels'>
<div class='breadcrumbs'>
<span itemscope='' itemtype='http://data-vocabulary.org/Breadcrumb'><a expr:href='data:blog.homepageUrl' itemprop='url' title='Home'><span itemprop='title'>Home</span></a></span>
<b:loop values='data:post.labels' var='label'>
<i class='fa fa-angle-right'/> <span itemscope='' itemtype='http://data-vocabulary.org/Breadcrumb'><a expr:href='data:label.url + &quot;&quot;' expr:title='data:label.name' itemprop='url'><span itemprop='title'><data:label.name/></span></a></span>
</b:loop>
<i class='fa fa-angle-right'/> <span><data:post.title/></span>
</div>
<b:else/>
<div class='breadcrumbs'><span><a expr:href='data:blog.homepageUrl' rel='tag' title='Home'>Home</a></span> <i class='fa fa-angle-right'/> <span>Without Label</span> <i class='fa fa-angle-right'/> <span><data:post.title/></span></div>
</b:if>
</b:loop>
<b:else/>
<b:if cond='data:blog.pageType == &quot;archive&quot;'>
<!-- Breadcrumb Untuk Label Search dan Search Pages -->
<div class='breadcrumbs'>
<span><a expr:href='data:blog.homepageUrl' title='Home'>Home</a></span> <i class='fa fa-angle-right'/> <span>Archived For <data:blog.pageName/></span>
</div>
<b:else/>
<b:if cond='data:blog.pageType == &quot;index&quot;'>
<div class='breadcrumbs'>
<b:if cond='data:blog.pageName == &quot;&quot;'>
<span><a expr:href='data:blog.homepageUrl' title='Home'>Home</a></span> <i class='fa fa-angle-right'/> <span>All Post</span>
<b:else/>
<span><a expr:href='data:blog.homepageUrl' title='Home'>Home</a></span> <i class='fa fa-angle-right'/> <span><data:blog.pageName/></span>
</b:if>
</div>
</b:if>
</b:if>
</b:if>
</b:if>
</b:if>
</b:includable>
    <b:includable id='comment-form' var='post'>
  <div class='comment-form'>
    <a name='comment-form'/>
    <b:if cond='data:mobile'>
      <h4 id='comment-post-message'>
        <a expr:id='data:widget.instanceId + &quot;_comment-editor-toggle-link&quot;' href='javascript:void(0)'><data:postCommentMsg/></a></h4>
      <p><data:blogCommentMessage/></p>
      <data:blogTeamBlogMessage/>
      <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
      <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' expr:height='data:cmtIframeInitialHeight' frameborder='0' id='comment-editor' name='comment-editor' src='' style='display: none' width='100%'/>
    <b:else/>
      <h4 id='comment-post-message'><data:postCommentMsg/></h4>
      <p><data:blogCommentMessage/></p>
      <data:blogTeamBlogMessage/>
      <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
      <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' expr:height='data:cmtIframeInitialHeight' frameborder='0' id='comment-editor' name='comment-editor' src='' width='100%'/>
    </b:if>
    <data:post.cmtfpIframe/>
    <script type='text/javascript'>
      BLOG_CMT_createIframe(&#39;<data:post.appRpcRelayPath/>&#39;);
    </script>
  </div>
</b:includable>
    <b:includable id='commentDeleteIcon' var='comment'>
  <span expr:class='&quot;item-control &quot; + data:comment.adminClass'>
    <b:if cond='data:showCmtPopup'>
      <div class='goog-toggle-button'>
        <div class='goog-inline-block comment-action-icon'/>
      </div>
    <b:else/>
      <a class='comment-delete' expr:href='data:comment.deleteUrl' expr:title='data:top.deleteCommentMsg'>
        <img src='https://resources.blogblog.com/img/icon_delete13.gif'/>
      </a>
    </b:if>
  </span>
</b:includable>
    <b:includable id='comment_count_picker' var='post'>
  <b:if cond='data:post.commentSource == 1'>
    <span class='cmt_count_iframe_holder' expr:data-count='data:post.numComments' expr:data-onclick='data:post.addCommentOnclick' expr:data-post-url='data:post.url' expr:data-url='data:post.url.canonical.http'>
    </span>
  <b:else/>
    <a class='comment-link' expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'>
      <data:post.commentLabelFull/>:
    </a>
  </b:if>
</b:includable>
    <b:includable id='comment_picker' var='post'>
  <b:if cond='data:post.commentSource == 1'>
    <b:include data='post' name='iframe_comments'/>
  <b:elseif cond='data:post.showThreadedComments'/>
    <b:include data='post' name='threaded_comments'/>
  <b:else/>
    <b:include data='post' name='comments'/>
  </b:if>
</b:includable>
    <b:includable id='comments' var='post'>
  <div class='comments' id='comments'>
    <a name='comments'/>
    <b:if cond='data:post.allowComments'>
      <h4><data:post.commentLabelFull/>:</h4>

      <b:if cond='data:post.commentPagingRequired'>
        <span class='paging-control-container'>
          <b:if cond='data:post.hasOlderLinks'>
            <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'><data:post.oldestLinkText/></a>
              &#160;
            <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'><data:post.olderLinkText/></a>
              &#160;
          </b:if>

          <data:post.commentRangeText/>

          <b:if cond='data:post.hasNewerLinks'>
            &#160;
            <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'><data:post.newerLinkText/></a>
            &#160;
            <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'><data:post.newestLinkText/></a>
          </b:if>
        </span>
      </b:if>

      <div expr:id='data:widget.instanceId + &quot;_comments-block-wrapper&quot;'>
        <dl expr:class='data:post.avatarIndentClass' id='comments-block'>
          <b:loop values='data:post.comments' var='comment'>
            <dt expr:class='&quot;comment-author &quot; + data:comment.authorClass' expr:id='data:comment.anchorName'>
              <b:if cond='data:comment.favicon'>
                <img expr:src='data:comment.favicon' height='16px' style='margin-bottom:-2px;' width='16px'/>
              </b:if>
              <a expr:name='data:comment.anchorName'/>
              <b:if cond='data:blog.enabledCommentProfileImages'>
                <data:comment.authorAvatarImage/>
              </b:if>
              <b:if cond='data:comment.authorUrl'>
                <a expr:href='data:comment.authorUrl' rel='nofollow'><data:comment.author/></a>
              <b:else/>
                <data:comment.author/>
              </b:if>
              <data:commentPostedByMsg/>
            </dt>
            <dd class='comment-body' expr:id='data:widget.instanceId + data:comment.cmtBodyIdPostfix'>
              <b:if cond='data:comment.isDeleted'>
                <span class='deleted-comment'><data:comment.body/></span>
              <b:else/>
                <p>
                  <data:comment.body/>
                </p>
              </b:if>
            </dd>
            <dd class='comment-footer'>
              <span class='comment-timestamp'>
                <a expr:href='data:comment.url' title='comment permalink'>
                  <data:comment.timestamp/>
                </a>
                <b:include data='comment' name='commentDeleteIcon'/>
              </span>
            </dd>
          </b:loop>
        </dl>
      </div>

      <b:if cond='data:post.commentPagingRequired'>
        <span class='paging-control-container'>
          <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'>
            <data:post.oldestLinkText/>
          </a>
          <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'>
            <data:post.olderLinkText/>
          </a>
          &#160;
          <data:post.commentRangeText/>
          &#160;
          <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'>
            <data:post.newerLinkText/>
          </a>
          <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'>
            <data:post.newestLinkText/>
          </a>
        </span>
      </b:if>

      <p class='comment-footer'>
        <b:if cond='data:post.embedCommentForm'>
          <b:if cond='data:post.allowNewComments'>
            <b:include data='post' name='comment-form'/>
          <b:else/>
            <data:post.noNewCommentsText/>
          </b:if>
        <b:elseif cond='data:post.allowComments'/>
          <a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'><data:postCommentMsg/></a>
        </b:if>
      </p>
    </b:if>
    <b:if cond='data:showCmtPopup'>
      <div id='comment-popup'>
        <iframe allowtransparency='true' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'>
        </iframe>
      </div>
    </b:if>

    <div id='backlinks-container'>
    <div expr:id='data:widget.instanceId + &quot;_backlinks-container&quot;'>
       <b:include cond='data:post.showBacklinks' data='post' name='backlinks'/>
    </div>
    </div>
  </div>
</b:includable>
    <b:includable id='feedLinks'>
  <b:if cond='data:blog.pageType != &quot;item&quot;'> <!-- Blog feed links -->
    <b:if cond='data:feedLinks'>
      <div class='blog-feeds'>
        <b:include data='feedLinks' name='feedLinksBody'/>
      </div>
    </b:if>

  <b:else/> <!--Post feed links -->
    <div class='post-feeds'>
      <b:loop values='data:posts' var='post'>
        <b:include cond='data:post.allowComments and data:post.feedLinks' data='post.feedLinks' name='feedLinksBody'/>
      </b:loop>
    </div>
  </b:if>
</b:includable>
    <b:includable id='feedLinksBody' var='links'>
  <div class='feed-links'>
  <data:feedLinksMsg/>
  <b:loop values='data:links' var='f'>
     <a class='feed-link' expr:href='data:f.url' expr:type='data:f.mimeType' target='_blank'><data:f.name/> (<data:f.feedType/>)</a>
  </b:loop>
  </div>
</b:includable>
    <b:includable id='iframe_comments' var='post'>

  <b:if cond='data:post.allowIframeComments'>
    <script expr:src='data:post.iframeCommentSrc' type='text/javascript'/>
    <div class='cmt_iframe_holder' expr:data-href='data:post.url.canonical' expr:data-viewtype='data:post.viewType'/>

    <b:if cond='data:post.embedCommentForm == &quot;false&quot;'>
      <a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'><data:postCommentMsg/></a>
    </b:if>
  </b:if>
</b:includable>
    <b:includable id='mobile-index-post' var='post'>
  <div class='mobile-date-outer date-outer'>
    <b:if cond='data:post.dateHeader'>
      <div class='date-header'>
        <span><data:post.dateHeader/></span>
      </div>
    </b:if>

    <div class='mobile-post-outer'>
      <a expr:href='data:post.url'>
        <h3 class='mobile-index-title entry-title' itemprop='name'>
          <data:post.title/>
        </h3>

        <div class='mobile-index-arrow'>&amp;rsaquo;</div>

        <div class='mobile-index-contents'>
          <b:if cond='data:post.thumbnailUrl'>
            <div class='mobile-index-thumbnail'>
              <div class='Image'>
                <img expr:src='data:post.thumbnailUrl'/>
              </div>
            </div>
          </b:if>

          <div class='post-body'>
            <b:if cond='data:post.snippet'><data:post.snippet/></b:if>
          </div>
        </div>

        <div style='clear: both;'/>
      </a>

      <div class='mobile-index-comment'>
        <b:include cond='data:blog.pageType != &quot;static_page&quot;                          and data:post.allowComments                          and data:post.numComments != 0' data='post' name='comment_count_picker'/>
      </div>
    </div>
  </div>
</b:includable>
    <b:includable id='mobile-main' var='top'>
    <!-- posts -->
    <div class='blog-posts hfeed'>

      <b:include data='top' name='status-message'/>

      <b:if cond='data:blog.pageType == &quot;index&quot;'>
        <b:loop values='data:posts' var='post'>
          <b:include data='post' name='mobile-index-post'/>
        </b:loop>
      <b:else/>
        <b:loop values='data:posts' var='post'>
          <b:include data='post' name='mobile-post'/>
        </b:loop>
      </b:if>
    </div>

   <b:include name='mobile-nextprev'/>
</b:includable>
    <b:includable id='mobile-nextprev'>
  <div class='blog-pager' id='blog-pager'>
    <b:if cond='data:newerPageUrl'>
      <div class='mobile-link-button' id='blog-pager-newer-link'>
      <a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:newerPageTitle'>&amp;lsaquo;</a>
      </div>
    </b:if>

    <b:if cond='data:olderPageUrl'>
      <div class='mobile-link-button' id='blog-pager-older-link'>
      <a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:olderPageTitle'>&amp;rsaquo;</a>
      </div>
    </b:if>

    <div class='mobile-link-button' id='blog-pager-home-link'>
    <a class='home-link' expr:href='data:blog.homepageUrl'><data:homeMsg/></a>
    </div>

    <div class='mobile-desktop-link'>
      <a class='home-link' expr:href='data:desktopLinkUrl'><data:desktopLinkMsg/></a>
    </div>

  </div>
  <div class='clear'/>
</b:includable>
    <b:includable id='mobile-post' var='post'>
  <div class='date-outer'>
    <b:if cond='data:post.dateHeader'>
      <h2 class='date-header'><span><data:post.dateHeader/></span></h2>
    </b:if>
    <div class='date-posts'>
      <div class='post-outer'>

        <div class='post' itemscope='itemscope' itemtype='http://schema.org/BlogPosting'>
          <b:if cond='data:post.thumbnailUrl'>
            <meta expr:content='data:post.thumbnailUrl' itemprop='image_url'/>
          </b:if>
          <meta expr:content='data:blog.blogId' itemprop='blogId'/>
          <meta expr:content='data:post.id' itemprop='postId'/>

          <a expr:name='data:post.id'/>
          <b:if cond='data:post.title'>
            <h3 class='post-title entry-title' itemprop='name'>
              <b:if cond='data:post.link'>
                <a expr:href='data:post.link'><data:post.title/></a>
              <b:elseif cond='data:post.url and data:blog.url != data:post.url'/>
                <a expr:href='data:post.url'><data:post.title/></a>
              <b:else/>
                <data:post.title/>
              </b:if>
            </h3>
          </b:if>

          <div class='post-header'>
            <div class='post-header-line-1'/>
          </div>

          <div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id' itemprop='articleBody'>
            <data:post.body/>
            <div style='clear: both;'/> <!-- clear for photos floats -->
          </div>

          <div class='post-footer'>
            <div class='post-footer-line post-footer-line-1'>
              <span class='post-author vcard'>
                <b:if cond='data:top.showAuthor'>
                  <b:if cond='data:post.authorProfileUrl'>
                    <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                      <meta expr:content='data:post.authorProfileUrl' itemprop='url'/>
                      <a expr:href='data:post.authorProfileUrl' rel='author' title='author profile'>
                        <span itemprop='name'><data:post.author/></span>
                      </a>
                    </span>
                  <b:else/>
                    <span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
                      <span itemprop='name'><data:post.author/></span>
                    </span>
                  </b:if>
                </b:if>
              </span>

              <span class='post-timestamp'>
                <b:if cond='data:top.showTimestamp'>
                  <data:top.timestampLabel/>
                  <b:if cond='data:post.url'>
                    <meta expr:content='data:post.url.canonical' itemprop='url'/>
                    <a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'><abbr class='published' expr:title='data:post.timestampISO8601' itemprop='datePublished'><data:post.timestamp/></abbr></a>
                  </b:if>
                </b:if>
              </span>

              <span class='post-comment-link'>
                <b:include cond='data:blog.pageType not in {&quot;item&quot;,&quot;static_page&quot;}                                  and data:post.allowComments' data='post' name='comment_count_picker'/>
              </span>
            </div>

            <div class='post-footer-line post-footer-line-2'>
              <b:if cond='data:top.showMobileShare'>
                <div class='mobile-link-button goog-inline-block' id='mobile-share-button'>
                  <a href='javascript:void(0);'><data:shareMsg/></a>
                </div>
              </b:if>
              <b:if cond='data:top.showDummy'>
                <div class='goog-inline-block dummy-container'><data:post.dummyTag/></div>
              </b:if>
            </div>

          </div>
        </div>

        <b:include cond='data:blog.pageType in {&quot;static_page&quot;,&quot;item&quot;}' data='post' name='comment_picker'/>
      </div>
    </div>
  </div>
</b:includable>
    <b:includable id='nextprev'>
  <div class='blog-pager' id='blog-pager'>
    <b:if cond='data:newerPageUrl'>
      <span id='blog-pager-newer-link'>
      <a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:newerPageTitle'><data:newerPageTitle/></a>
      </span>
    </b:if>

    <b:if cond='data:olderPageUrl'>
      <span id='blog-pager-older-link'>
      <a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:olderPageTitle'><data:olderPageTitle/></a>
      </span>
    </b:if>

    <a class='home-link' expr:href='data:blog.homepageUrl'><data:homeMsg/></a>

    <b:if cond='data:mobileLinkUrl'>
      <div class='blog-mobile-link'>
        <a expr:href='data:mobileLinkUrl'><data:mobileLinkMsg/></a>
      </div>
    </b:if>

  </div>
  <div class='clear'/>
</b:includable>
    <b:includable id='post' var='post'>
<article class='post ty-article'>
    <!-- Then use the post body as the schema.org description, for good G+/FB snippeting. -->
  <b:if cond='data:blog.pageType != &quot;item&quot;'>
 <b:if cond='data:blog.pageType != &quot;static_page&quot;'>
 <div class='post-inner'>
<div class='thumbnail-post'>
   <b:if cond='data:post.thumbnailUrl'>
    <a class='thumb' expr:href='data:post.url' expr:title='data:post.title'><img class='ty-thumb' expr:alt='data:post.title' expr:src='data:post.firstImageUrl'/></a>
   </b:if>
 </div>
<div class='date-header'>
    <b:if cond='data:post.title'>
      <h2 class='post-title entry-title'>
      <b:if cond='data:post.link or (data:post.url and data:blog.url != data:post.url)'>
        <a expr:href='data:post.link ? data:post.link : data:post.url'><data:post.title/></a>
      <b:else/>
        <data:post.title/>
      </b:if>
      </h2>
    </b:if>
<div class='ty-meta meta-post'>
<span class='author-link vcard'><data:post.author/>
</span>
<a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'><abbr class='published' expr:title='data:post.timestampISO8601' itemprop='datePublished dateModified'> <data:post.timestamp/></abbr></a>
<span class='post-category-home'>
<b:loop values='data:post.labels' var='label'>
 <a expr:href='data:label.url' rel='tag'> <data:label.name/></a><b:if cond='data:label.isLast != &quot;true&quot;'>,</b:if></b:loop>
</span>
</div>
<p class='post-snip'>
   <data:post.snippet/>
   </p>   </div>
</div>
<div class='post-category-home'>
<span class='label'>Chuyên Mục:
<b:loop values='data:post.labels' var='label'>
 <a expr:href='data:label.url' rel='tag'> <data:label.name/></a><b:if cond='data:label.isLast != &quot;true&quot;'>,</b:if></b:loop>
</span>
</div>
 <b:else/>
<!--trang tĩnh-->
<header class='entry-header-single'>
<b:if cond='data:post.title'>
      <h1 class='post-title entry-title' itemprop='name headline'>
      <b:if cond='data:post.link or (data:post.url and data:blog.url != data:post.url)'>
        <a expr:href='data:post.link ? data:post.link : data:post.url'><data:post.title/></a>
      <b:else/>
        <data:post.title/>
      </b:if>
      </h1>
    </b:if>
    </header>
 <div class='blogPost' itemscope='itemscope' itemtype='http://schema.org/BlogPosting'>
<div itemprop='image' itemscope='itemscope' itemtype='https://schema.org/ImageObject' style='display:none;'>
  <meta expr:content='data:post.firstImageUrl' itemprop='url'/>
  <meta content='700' itemprop='width height'/>
</div>
<div class='post-inner'>
<div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id' itemprop='articleBody'>
<meta expr:content='data:post.title' itemprop='headline'/>
<meta expr:content='data:blog.metaDescription' name='twitter:description'/>
<div class='post-meta ty-meta'>
<span class='post-timestamp'>
<i class='fa fa-calendar-check-o'/> Đăng Ngày: 
  <meta expr:content='data:post.url' itemprop='url mainEntityOfPage'/>
<a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'><abbr class='published' expr:title='data:post.timestampISO8601' itemprop='datePublished dateModified'> <data:post.timestamp/></abbr></a>
  </span><br/>
<span class='post-author vcard'>
<span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
<a class='g-profile' expr:title='data:post.author' href='' rel='author'>
<span itemprop='name'><data:post.author/></span></a>
</span>
  </span><br/>
</div>
 <data:post.body/>
</div>
    </div>
<div class='clear'/>
<style>
.post-category, .post-tags{display:block}
.post-category,.post-tags{display:block}
.post-category ul,.post-tags ul{display:inline-block;padding:0;margin:0}
.post-category i,.post-tags i{width:15px;margin-right:15px}
.post-category li,.post-tags li{display:inline-block;margin-right:10px}
</style>
<style>
  .gbld-author-bio{margin-top:20px}
.gbld-author-bio .author-avatar{padding:60px 0 0;margin-right:-50px}
.gbld-author-bio .avatar-image{overflow:hidden;background-color:#eee;border-radius:50%;width:100px;height:100px}
.gbld-author-bio .avatar-image img{width:inherit;height:inherit;margin:0}
.gbld-author-bio header{margin-top:0;margin-bottom:5px;padding:0;border:0}
.gbld-author-bio footer{padding:0;border:0}
.gbld-author-bio footer .social-media{margin:9px 0 7px}
.gbld-author-bio footer .social-media a{color:#777677;display:inline-block;margin-left:14px}
.gbld-author-bio footer .social-media a:first-child{margin-left:0}
.gbld-author-bio h4{font-weight:700!important;text-transform:uppercase;font-size:16px;margin-top:10px;margin-bottom:10px;font-style:italic}
.gbld-author-bio h4 span{color:#666}
.gbld-author-bio h4 small{font-size:16px;text-transform:none;display:inline-block;margin-left:10px;color:#13afec;font-weight:400!important}
.gbld-author-bio .author-description{font-size:14px;border:1px solid #ececec;padding:25px 25px 25px 75px;min-height:135px}
.gbld-author-bio .author-description a.cta{display:inline-block;padding:2px 6px 0;font-size:12px;color:#fff;outline:0;cursor:pointer;text-shadow:0 1px 1px rgba(0,0,0,0.2);font-weight:700;background-color:#efcc6d;text-transform:uppercase}
.gbld-author-bio .media-body,.gbld-author-bio .media-left,.gbld-author-bio .media-right{display:table-cell;vertical-align:top;width:10000px;overflow:hidden;zoom:1}
@media screen and (max-width: 468px) {
.gbld-read-more{width:100%}
}
@media screen and (max-width: 1024px) {
.gbld-author-bio{text-align:center}
.gbld-author-bio .author-avatar{float:none!important;margin:0 0 10px;padding:0}
.gbld-author-bio .avatar-image{width:100px;margin:0 auto}
.gbld-author-bio h4&gt;small{display:block;margin:5px 0}
.gbld-author-bio .author-description{padding:15px 20px;margin-bottom:15px;text-align:justify}
}
</style>
<div class='post-footer'>
<style>
.td-post-sharing-top{margin:20px 0}
.td-ps-notext .td-social-network .td-social-but-icon,.td-ps-notext .td-social-handler .td-social-but-icon{border-top-right-radius:2px;border-bottom-right-radius:2px}
.td-social-network{color:#000;overflow:hidden}
.td-social-network .td-social-but-icon{border-top-left-radius:2px;border-bottom-left-radius:2px}
.td-social-but-icon,.td-social-but-text{font-size:13px}
.td-social-network .td-social-but-text{border-top-right-radius:2px;border-bottom-right-radius:2px}
.td-social-network:hover{opacity:.8!important}
.td-social-handler{color:#444;border:1px solid #e9e9e9;border-radius:2px}
.td-social-handler .td-social-but-text{font-weight:700}
.td-social-handler .td-social-but-text:before{background-color:#000;opacity:.08;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity= 8 );filter:alpha(opacity=8)}
.td-social-share-text{margin-right:18px}
.td-social-share-text:before,.td-social-share-text:after{content:&#39;&#39;;position:absolute;top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-o-transform:translateY(-50%);left:100%;width:0;height:0;border-style:solid}
.td-social-share-text:before{border-width:9px 0 9px 11px;border-color:transparent transparent transparent #e9e9e9}
.td-social-share-text:after{border-width:8px 0 8px 10px;border-color:transparent transparent transparent #fff}
.td-social-but-text,.td-social-but-icon{display:inline-block;position:relative}
.td-social-but-icon{padding-left:13px;padding-right:13px;line-height:40px;z-index:1}
.td-social-but-icon i{position:relative;top:-1px;margin-right:0!important}
.td-social-but-text{margin-left:-6px;padding-left:12px;padding-right:17px;line-height:40px}
.td-social-but-text:before{content:&#39;&#39;;position:absolute;top:12px;left:0;width:1px;height:16px;background-color:#fff;opacity:.2;z-index:1}
.td-ps-bg .td-social-network{color:#fff}
.td-ps-border .td-social-network .td-social-but-icon,.td-ps-border .td-social-network .td-social-but-text{line-height:38px;border-width:1px;border-style:solid}
.td-ps-border .td-social-network .td-social-but-text{border-left-width:0}
.td-ps-border .td-social-network .td-social-but-text:before{background-color:#000;opacity:.08;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity= 8 );filter:alpha(opacity=8)}
.td-ps-border.td-ps-padding .td-social-network .td-social-but-icon{border-right-width:0}
.td-ps-border.td-ps-padding .td-social-network.td-social-expand-tabs .td-social-but-icon{border-right-width:1px}
.td-ps-border-grey .td-social-but-icon,.td-ps-border-grey .td-social-but-text{border-color:#e9e9e9}
.td-ps-border-colored .td-social-facebook .td-social-but-icon,.td-ps-border-colored .td-social-facebook .td-social-but-text{border-color:#516eab}
.td-ps-border-colored .td-social-twitter .td-social-but-icon,.td-ps-border-colored .td-social-twitter .td-social-but-text{border-color:#29c5f6}
.td-ps-border-colored .td-social-googleplus .td-social-but-icon,.td-ps-border-colored .td-social-googleplus .td-social-but-text{border-color:#eb4026}
.td-ps-icon-arrow .td-social-network .td-social-but-icon:after{content:&#39;&#39;;position:absolute;top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-o-transform:translateY(-50%);left:calc(100% + 1px);width:0;height:0;border-style:solid;border-width:9px 0 9px 11px;border-color:transparent transparent transparent #000}
.td-ps-icon-color .td-social-facebook .td-social-but-icon{color:#516eab}
.td-ps-icon-color .td-social-twitter .td-social-but-icon{color:#29c5f6}
.td-ps-icon-color .td-social-googleplus .td-social-but-icon{color:#eb4026}
.td-ps-padding .td-social-network .td-social-but-icon{padding-left:17px;padding-right:17px}
.td-ps-padding .td-social-handler .td-social-but-icon{width:40px}
.td-ps-padding .td-social-reddit .td-social-but-icon,.td-ps-padding .td-social-telegram .td-social-but-icon{padding-right:16px}
.td-ps-padding .td-social-stumbleupon .td-social-but-icon,.td-ps-padding .td-social-digg .td-social-but-icon,.td-ps-padding .td-social-expand-tabs .td-social-but-icon{padding-right:13px}
.td-ps-padding .td-social-googleplus .td-social-but-icon{padding-right:15px}
.td-ps-padding .td-social-vk .td-social-but-icon{padding-right:14px}
.td-ps-padding .td-social-expand-tabs .td-social-but-icon{padding-left:13px}
.td-ps-rounded .td-social-network .td-social-but-icon{border-top-left-radius:100px;border-bottom-left-radius:100px}
.td-ps-rounded .td-social-network .td-social-but-text{border-top-right-radius:100px;border-bottom-right-radius:100px}
.td-ps-rounded.td-ps-notext .td-social-network .td-social-but-icon{border-top-right-radius:100px;border-bottom-right-radius:100px}
.td-ps-rounded .td-social-expand-tabs{border-radius:100px}
@media screen and (max-width:440px) {
.td-social-but-text{display:none!important}
.td-ps-border.td-ps-padding .td-social-network .td-social-but-icon,.td-ps-border.td-ps-padding .td-social-network .td-social-but-icon{border:1px solid #e9e9e9!important;width:40px;height:40px;line-height:40px}
.td-ps-rounded .td-social-network .td-social-but-icon{border-radius:100px!important}
.td-social-but-icon i.fa-facebook{right:2px}
.td-social-but-icon i.fa-twitter{right:3.5px}
.td-social-but-icon i.fa-google-plus{right:5px}
}
</style>
<div class='td-post-sharing-top'><div class='td-post-sharing td-ps-border td-ps-border-grey td-ps-rounded td-ps-padding td-ps-icon-color td-post-sharing-style18 ' id='td_social_sharing_article_top'><div class='td-post-sharing-visible'><a class='td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook' expr:href='&quot;http://www.facebook.com/sharer.php?u=&quot; + data:post.url + &quot;&amp;title=&quot;+ data:post.title' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=600, height=400, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow' target='_blank' title='Facebook'>
<div class='td-social-but-icon'><i class='fa fa-facebook'/></div>
<div class='td-social-but-text'>Facebook</div>
</a><a class='td-social-sharing-button td-social-sharing-button-js td-social-network td-social-twitter' expr:href='&quot;http://twitter.com/share?url=&quot; + data:post.url + &quot;&amp;title=&quot; + data:post.title' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=600, height=400, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow' target='_blank' title='Twitter'>
<div class='td-social-but-icon'><i class='fa fa-twitter'/></div>
<div class='td-social-but-text'>Twitter</div>
</a><a class='td-social-sharing-button td-social-sharing-button-js td-social-network td-social-googleplus' expr:href='&quot;https://plus.google.com/share?url=&quot; + data:post.url + &quot;&amp;title=&quot; + data:post.title' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=600, height=400, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow' target='_blank' title='Google Plus'>
<div class='td-social-but-icon'><i class='fa fa-google-plus'/></div>
<div class='td-social-but-text'>Google+</div>
</a></div>
</div></div>
</div>
<div class='gbld-author-bio' id='info-ngdien' itemprop='publisher' itemscope='' itemtype='https://schema.org/Organization'>
<div class='media'>
<div class='pull-left author-avatar'>
<div class='avatar-image img-circle' itemprop='logo' itemscope='' itemtype='https://schema.org/ImageObject'>
<img alt='' class='avatar avatar-100 photo' height='100' src='//4.bp.blogspot.com/-rFsLhmqUACI/XMztiu8Q6QI/AAAAAAAAIiY/kTu-Xg82ZTcEx35XJQOU9l2b-4aEXba8gCLcBGAs/s1600/do-manh-hong.jpg' width='100'/>
<meta content='https://graph.facebook.com/100005776683788/picture?width=500&amp;height=500' itemprop='url'/>
<meta content='100' itemprop='width'/>
<meta content='100' itemprop='height'/>
</div>
</div>
<div class='media-body'>
<header class='author-bio-header media-heading'>
<h4 class='third-color'><span itemprop='name'>Hiếu Giddy</span>
<small class='first-color'><i>Web Developer</i></small></h4>
</header>
<div class='author-description'>
															Muốn giỏi phải học, muốn học thì phải hỏi. Chính vì thế, hãy cùng tham gia thảo luận với nhau để tìm ra câu trả lời nếu có thắc mắc nhé! Xem thêm nhiều bài viết hay <b><a href='http://hgmedianui.blogspot.com/search?max-results=20' style='color:#3b5998'>tại đây</a></b> nhé.
  <br/>
Trong quá trình viết bài chúng tôi sẽ có nhiều thiếu sót mong các bạn đóng góp để chúng tôi rút kinh nghiệm hơn !
  <br/>
</div>
<footer class='author-bio-footer'>
<div class='social-media'>
<a class='external' data-original-title='Facebook' data-placement='top' data-toggle='tooltip' href='https://www.facebook.com/anhduccei' rel='nofollow' target='_blank' title=''><i class='fa fa-facebook'/></a>
<a data-original-title='Twitter' data-placement='top' data-toggle='tooltip' href='#' rel='nofollow' style='pointer-events: none;' target='_blank' title=''><i class='fa fa-twitter'/></a>
<a data-original-title='Instagram' data-placement='top' data-toggle='tooltip' href='#' rel='nofollow' style='pointer-events: none;' target='_blank' title=''><i class='fa fa-instagram'/></a>
</div>
</footer>
</div>
</div>
</div>
<style>
  /* Navigasi Blogger dengan Judul by igniel.com */
  #blog-pager a.home-link {display:none}
  #blog-pager {margin:20px 0px; display:inline-block; width:100%;}
  #blog-pager a.blog-pager-newer-link, #blog-pager a.blog-pager-older-link {font-weight:600; font-size:16px; padding:0px; overflow:hidden; line-height:initial; display:block; width:100%; border:0px; background:transparent;}
  #blog-pager a.blog-pager-newer-link {padding-right:5px;}
  #blog-pager a.blog-pager-older-link {padding-left:5px;}
  .blog-pager-newer-link span:first-child, .blog-pager-older-link span:first-child {font-size:20px; color:#000; text-transform:uppercase;}
  .blog-pager-newer-link span:last-child, .blog-pager-older-link span:last-child{display:block; line-height:24px; font-weight:400; text-transform:none;}
  #blog-pager a.blog-pager-newer-link:hover, #blog-pager a.blog-pager-older-link:hover{color:#ff5722; background:transparent;}
  #blog-pager-newer-link {float:left; text-align:left; width:50%;}
  #blog-pager-older-link {float:right; text-align:right; width:50%;}
  #blog-pager-older-link span:first-child::after {margin-right:-10px; width:35px; height:35px; vertical-align:-10px; display:inline-block; transition:all .3s ease; background:url(&quot;data:image/svg+xml,<svg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path d='M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z' fill='%231d2129'/></svg>&quot;) no-repeat; content:&#39;&#39;}
  #blog-pager-newer-link span:first-child:before {margin-left:-10px; width:35px; height:35px; vertical-align:-10px; display:inline-block; transition:all .3s ease; background: url(&quot;data:image/svg+xml,<svg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path d='M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z' fill='%231d2129'/></svg>&quot;) no-repeat; content:&#39;&#39;}
  @media only screen and (max-width:640px){
    #blog-pager {display:block;}
    #blog-pager-newer-link, #blog-pager-older-link {float: none; width: 100%; display: block; text-align:left;}
    #blog-pager-older-link {margin-top:20px;}
  }
</style>
<style>
#posturl {
    padding: 5px 0 5px 10px;
    border: 1px solid #e1e1e1;
    margin-bottom: 4px;
    margin-top: 10px;
    font-size: 15px;
    color: #000;
}
#posturl{padding: 5px 0 5px 10px;border:1px solid #e1e1e1;margin-bottom:4px;margin-top:10px;font-size:15px;color:#000}
#posturl i{font-size: 14px}
#post-url{user-select:all;-webkit-user-select:all;-moz-user-select:all;-o-user-select:all}
</style>
<div class='clear'/>
<div class='post-action'>
<i class='fa fa-folder-open'/>
<span style='font-size:15px;font-weight:bold'> URL : </span>
<a class='copy-text' data-clipboard-target='#post-url'><i class='fa fa-clone'/> Copy</a>
</div><div class='clear' id='posturl'><i class='fa fa-link'/> | <span id='post-url'><data:post.url/></span>
</div>
</div>
<!--end trang tĩnh-->
 </b:if>
<b:else/>
<!--trang bài viết-->
<header class='entry-header-single'>
<b:if cond='data:post.title'>
      <h1 class='post-title entry-title' itemprop='name headline'>
      <b:if cond='data:post.link or (data:post.url and data:blog.url != data:post.url)'>
        <a expr:href='data:post.link ? data:post.link : data:post.url'><data:post.title/></a>
      <b:else/>
        <data:post.title/>
      </b:if>
      </h1>
    </b:if>
    </header>
 <div class='blogPost' itemscope='itemscope' itemtype='http://schema.org/BlogPosting'>
<div itemprop='image' itemscope='itemscope' itemtype='https://schema.org/ImageObject' style='display:none;'>
  <meta expr:content='data:post.firstImageUrl' itemprop='url'/>
  <meta content='700' itemprop='width height'/>
</div>
<div class='post-inner'>
<div class='post-body entry-content' expr:id='&quot;post-body-&quot; + data:post.id' itemprop='articleBody'>
<meta expr:content='data:post.title' itemprop='headline'/>
<meta expr:content='data:blog.metaDescription' name='twitter:description'/>
<div class='post-meta ty-meta'>
<span class='post-timestamp'>
<i class='fa fa-calendar-check-o'/> Đăng Ngày: 
  <meta expr:content='data:post.url' itemprop='url mainEntityOfPage'/>
<a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'><abbr class='published' expr:title='data:post.timestampISO8601' itemprop='datePublished dateModified'> <data:post.timestamp/></abbr></a>
  </span><br/>
<span class='post-labels'>
<i class='fa fa-folder-open'/> Chuyên Mục:
<b:loop values='data:post.labels' var='label'>
 <a expr:href='data:label.url' rel='tag'> <data:label.name/></a><b:if cond='data:label.isLast != &quot;true&quot;'>,</b:if></b:loop>
  </span><br/>
<span class='post-author vcard'>
<span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
<a class='g-profile' expr:title='data:post.author' href='' rel='author'>
<span itemprop='name'><data:post.author/></span></a>
</span>
  </span><br/>
</div>
 <data:post.body/>
</div>
    </div>
<div class='clear'/>
<style>
.post-category, .post-tags{display:block}
.post-category,.post-tags{display:block}
.post-category ul,.post-tags ul{display:inline-block;padding:0;margin:0}
.post-category i,.post-tags i{width:15px;margin-right:15px}
.post-category li,.post-tags li{display:inline-block;margin-right:10px}
</style>
<style>
  .gbld-author-bio{margin-top:20px}
.gbld-author-bio .author-avatar{padding:60px 0 0;margin-right:-50px}
.gbld-author-bio .avatar-image{overflow:hidden;background-color:#eee;border-radius:50%;width:100px;height:100px}
.gbld-author-bio .avatar-image img{width:inherit;height:inherit;margin:0}
.gbld-author-bio header{margin-top:0;margin-bottom:5px;padding:0;border:0}
.gbld-author-bio footer{padding:0;border:0}
.gbld-author-bio footer .social-media{margin:9px 0 7px}
.gbld-author-bio footer .social-media a{color:#777677;display:inline-block;margin-left:14px}
.gbld-author-bio footer .social-media a:first-child{margin-left:0}
.gbld-author-bio h4{font-weight:700!important;text-transform:uppercase;font-size:16px;margin-top:10px;margin-bottom:10px;font-style:italic}
.gbld-author-bio h4 span{color:#666}
.gbld-author-bio h4 small{font-size:16px;text-transform:none;display:inline-block;margin-left:10px;color:#13afec;font-weight:400!important}
.gbld-author-bio .author-description{font-size:14px;border:1px solid #ececec;padding:25px 25px 25px 75px;min-height:135px}
.gbld-author-bio .author-description a.cta{display:inline-block;padding:2px 6px 0;font-size:12px;color:#fff;outline:0;cursor:pointer;text-shadow:0 1px 1px rgba(0,0,0,0.2);font-weight:700;background-color:#efcc6d;text-transform:uppercase}
.gbld-author-bio .media-body,.gbld-author-bio .media-left,.gbld-author-bio .media-right{display:table-cell;vertical-align:top;width:10000px;overflow:hidden;zoom:1}
@media screen and (max-width: 468px) {
.gbld-read-more{width:100%}
}
@media screen and (max-width: 1024px) {
.gbld-author-bio{text-align:center}
.gbld-author-bio .author-avatar{float:none!important;margin:0 0 10px;padding:0}
.gbld-author-bio .avatar-image{width:100px;margin:0 auto}
.gbld-author-bio h4&gt;small{display:block;margin:5px 0}
.gbld-author-bio .author-description{padding:15px 20px;margin-bottom:15px;text-align:justify}
}
</style>
<div class='post-footer'>
<div class='post-category'>
<i class='fa fa-folder-o'/>
</div>
<div class='post-tags'>
<i class='fa fa-hashtag'/>
<span class='label-head'>
<b:loop values='data:post.labels' var='label'>
 <a expr:href='data:label.url' rel='tag'> <data:label.name/></a><b:if cond='data:label.isLast != &quot;true&quot;'>,</b:if></b:loop>
</span></div>
<style>
.td-post-sharing-top{margin:20px 0}
.td-ps-notext .td-social-network .td-social-but-icon,.td-ps-notext .td-social-handler .td-social-but-icon{border-top-right-radius:2px;border-bottom-right-radius:2px}
.td-social-network{color:#000;overflow:hidden}
.td-social-network .td-social-but-icon{border-top-left-radius:2px;border-bottom-left-radius:2px}
.td-social-but-icon,.td-social-but-text{font-size:13px}
.td-social-network .td-social-but-text{border-top-right-radius:2px;border-bottom-right-radius:2px}
.td-social-network:hover{opacity:.8!important}
.td-social-handler{color:#444;border:1px solid #e9e9e9;border-radius:2px}
.td-social-handler .td-social-but-text{font-weight:700}
.td-social-handler .td-social-but-text:before{background-color:#000;opacity:.08;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity= 8 );filter:alpha(opacity=8)}
.td-social-share-text{margin-right:18px}
.td-social-share-text:before,.td-social-share-text:after{content:&#39;&#39;;position:absolute;top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-o-transform:translateY(-50%);left:100%;width:0;height:0;border-style:solid}
.td-social-share-text:before{border-width:9px 0 9px 11px;border-color:transparent transparent transparent #e9e9e9}
.td-social-share-text:after{border-width:8px 0 8px 10px;border-color:transparent transparent transparent #fff}
.td-social-but-text,.td-social-but-icon{display:inline-block;position:relative}
.td-social-but-icon{padding-left:13px;padding-right:13px;line-height:40px;z-index:1}
.td-social-but-icon i{position:relative;top:-1px;margin-right:0!important}
.td-social-but-text{margin-left:-6px;padding-left:12px;padding-right:17px;line-height:40px}
.td-social-but-text:before{content:&#39;&#39;;position:absolute;top:12px;left:0;width:1px;height:16px;background-color:#fff;opacity:.2;z-index:1}
.td-ps-bg .td-social-network{color:#fff}
.td-ps-border .td-social-network .td-social-but-icon,.td-ps-border .td-social-network .td-social-but-text{line-height:38px;border-width:1px;border-style:solid}
.td-ps-border .td-social-network .td-social-but-text{border-left-width:0}
.td-ps-border .td-social-network .td-social-but-text:before{background-color:#000;opacity:.08;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity= 8 );filter:alpha(opacity=8)}
.td-ps-border.td-ps-padding .td-social-network .td-social-but-icon{border-right-width:0}
.td-ps-border.td-ps-padding .td-social-network.td-social-expand-tabs .td-social-but-icon{border-right-width:1px}
.td-ps-border-grey .td-social-but-icon,.td-ps-border-grey .td-social-but-text{border-color:#e9e9e9}
.td-ps-border-colored .td-social-facebook .td-social-but-icon,.td-ps-border-colored .td-social-facebook .td-social-but-text{border-color:#516eab}
.td-ps-border-colored .td-social-twitter .td-social-but-icon,.td-ps-border-colored .td-social-twitter .td-social-but-text{border-color:#29c5f6}
.td-ps-border-colored .td-social-googleplus .td-social-but-icon,.td-ps-border-colored .td-social-googleplus .td-social-but-text{border-color:#eb4026}
.td-ps-icon-arrow .td-social-network .td-social-but-icon:after{content:&#39;&#39;;position:absolute;top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-o-transform:translateY(-50%);left:calc(100% + 1px);width:0;height:0;border-style:solid;border-width:9px 0 9px 11px;border-color:transparent transparent transparent #000}
.td-ps-icon-color .td-social-facebook .td-social-but-icon{color:#516eab}
.td-ps-icon-color .td-social-twitter .td-social-but-icon{color:#29c5f6}
.td-ps-icon-color .td-social-googleplus .td-social-but-icon{color:#eb4026}
.td-ps-padding .td-social-network .td-social-but-icon{padding-left:17px;padding-right:17px}
.td-ps-padding .td-social-handler .td-social-but-icon{width:40px}
.td-ps-padding .td-social-reddit .td-social-but-icon,.td-ps-padding .td-social-telegram .td-social-but-icon{padding-right:16px}
.td-ps-padding .td-social-stumbleupon .td-social-but-icon,.td-ps-padding .td-social-digg .td-social-but-icon,.td-ps-padding .td-social-expand-tabs .td-social-but-icon{padding-right:13px}
.td-ps-padding .td-social-googleplus .td-social-but-icon{padding-right:15px}
.td-ps-padding .td-social-vk .td-social-but-icon{padding-right:14px}
.td-ps-padding .td-social-expand-tabs .td-social-but-icon{padding-left:13px}
.td-ps-rounded .td-social-network .td-social-but-icon{border-top-left-radius:100px;border-bottom-left-radius:100px}
.td-ps-rounded .td-social-network .td-social-but-text{border-top-right-radius:100px;border-bottom-right-radius:100px}
.td-ps-rounded.td-ps-notext .td-social-network .td-social-but-icon{border-top-right-radius:100px;border-bottom-right-radius:100px}
.td-ps-rounded .td-social-expand-tabs{border-radius:100px}
@media screen and (max-width:440px) {
.td-social-but-text{display:none!important}
.td-ps-border.td-ps-padding .td-social-network .td-social-but-icon,.td-ps-border.td-ps-padding .td-social-network .td-social-but-icon{border:1px solid #e9e9e9!important;width:40px;height:40px;line-height:40px}
.td-ps-rounded .td-social-network .td-social-but-icon{border-radius:100px!important}
.td-social-but-icon i.fa-facebook{right:2px}
.td-social-but-icon i.fa-twitter{right:3.5px}
.td-social-but-icon i.fa-google-plus{right:5px}
}
</style>
<div class='td-post-sharing-top'><div class='td-post-sharing td-ps-border td-ps-border-grey td-ps-rounded td-ps-padding td-ps-icon-color td-post-sharing-style18 ' id='td_social_sharing_article_top'><div class='td-post-sharing-visible'><a class='td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook' expr:href='&quot;http://www.facebook.com/sharer.php?u=&quot; + data:post.url + &quot;&amp;title=&quot;+ data:post.title' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=600, height=400, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow' target='_blank' title='Facebook'>
<div class='td-social-but-icon'><i class='fa fa-facebook'/></div>
<div class='td-social-but-text'>Facebook</div>
</a><a class='td-social-sharing-button td-social-sharing-button-js td-social-network td-social-twitter' expr:href='&quot;http://twitter.com/share?url=&quot; + data:post.url + &quot;&amp;title=&quot; + data:post.title' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=600, height=400, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow' target='_blank' title='Twitter'>
<div class='td-social-but-icon'><i class='fa fa-twitter'/></div>
<div class='td-social-but-text'>Twitter</div>
</a><a class='td-social-sharing-button td-social-sharing-button-js td-social-network td-social-googleplus' expr:href='&quot;https://plus.google.com/share?url=&quot; + data:post.url + &quot;&amp;title=&quot; + data:post.title' onclick='window.open(this.href, &apos;windowName&apos;, &apos;width=600, height=400, left=24, top=24, scrollbars, resizable&apos;); return false;' rel='nofollow' target='_blank' title='Google Plus'>
<div class='td-social-but-icon'><i class='fa fa-google-plus'/></div>
<div class='td-social-but-text'>Google+</div>
</a></div>
</div></div>
<div id='related-posts'><b:if cond='data:post.labels'>
          <b:loop values='data:post.labels' var='label'>
            <a expr:href='data:label.url + &quot;?&amp;max-results=10&quot;' rel='tag'><data:label.name/></a><b:if cond='data:label.isLast != &quot;true&quot;'>,</b:if>
          </b:loop>
        </b:if>
</div>
</div>
<div class='gbld-author-bio' id='info-ngdien' itemprop='publisher' itemscope='' itemtype='https://schema.org/Organization'>
<div class='media'>
<div class='pull-left author-avatar'>
<div class='avatar-image img-circle' itemprop='logo' itemscope='' itemtype='https://schema.org/ImageObject'>
<img alt='' class='avatar avatar-100 photo' height='100' src='//4.bp.blogspot.com/-rFsLhmqUACI/XMztiu8Q6QI/AAAAAAAAIiY/kTu-Xg82ZTcEx35XJQOU9l2b-4aEXba8gCLcBGAs/s1600/do-manh-hong.jpg' width='100'/>
<meta content='https://scontent.fsgn2-6.fna.fbcdn.net/v/t1.0-9/120084350_1771143459701141_4261466186283589845_o.jpg?_nc_cat=100&_nc_sid=09cbfe&_nc_ohc=4Vow34apnYkAX-Qc0FP&_nc_ht=scontent.fsgn2-6.fna&oh=5042c6bb0a66e681cbc6c159f5328754&oe=5F9CE44E' itemprop='url'/>
<meta content='100' itemprop='width'/>
<meta content='100' itemprop='height'/>
</div>
</div>
<div class='media-body'>
<header class='author-bio-header media-heading'>
<h4 class='third-color'><span itemprop='name'>Hiếu Giddy</span>
<small class='first-color'><i>Web Developer</i></small></h4>
</header>
<div class='author-description'>
															Tôi là Hiếu Giddy, tôi xây dựng lên <a href='https://hgmedianui.blogspot.com' title='Hiếu Giddy'><b>Bloger này</b></a> với mong muốn lưu trữ những gì tôi trải nghiệm được mà không nhớ nổi để sau này tìm lại dễ dàng hơn và chia sẽ lại cho ai đó cần đến, những bài viết ở đây có một số tôi Coppy và tự viết.
  <br/>
Tôi mong rằng những bạn đến với Blog Hiếu Giddy hãy văn minh lịch sự
  <br/>
</div>
<footer class='author-bio-footer'>
<div class='social-media'>
<a class='external' data-original-title='Facebook' data-placement='top' data-toggle='tooltip' href='https://www.facebook.com/manhongit89' rel='nofollow' target='_blank' title=''><i class='fa fa-facebook'/></a>
<a data-original-title='Twitter' data-placement='top' data-toggle='tooltip' href='#' rel='nofollow' style='pointer-events: none;' target='_blank' title=''><i class='fa fa-twitter'/></a>
<a data-original-title='Youtube' data-placement='top' data-toggle='tooltip' href='https://www.youtube.com/channel/UCOBeSsgc74n8kbgiAyQ6vAA' rel='nofollow' style='pointer-events: none;' target='_blank' title=''><i class='fa fa-youtube'/></a>
</div>
</footer>
</div>
</div>
</div>
<b:include name='nextprev'/>
<style>
  /* Navigasi Blogger dengan Judul by igniel.com */
  #blog-pager a.home-link {display:none}
  #blog-pager {margin:20px 0px; display:inline-block; width:100%;}
  #blog-pager a.blog-pager-newer-link, #blog-pager a.blog-pager-older-link {font-weight:600; font-size:16px; padding:0px; overflow:hidden; line-height:initial; display:block; width:100%; border:0px; background:transparent;}
  #blog-pager a.blog-pager-newer-link {padding-right:5px;}
  #blog-pager a.blog-pager-older-link {padding-left:5px;}
  .blog-pager-newer-link span:first-child, .blog-pager-older-link span:first-child {font-size:20px; color:#000; text-transform:uppercase;}
  .blog-pager-newer-link span:last-child, .blog-pager-older-link span:last-child{display:block; line-height:24px; font-weight:400; text-transform:none;}
  #blog-pager a.blog-pager-newer-link:hover, #blog-pager a.blog-pager-older-link:hover{color:#ff5722; background:transparent;}
  #blog-pager-newer-link {float:left; text-align:left; width:50%;}
  #blog-pager-older-link {float:right; text-align:right; width:50%;}
  #blog-pager-older-link span:first-child::after {margin-right:-10px; width:35px; height:35px; vertical-align:-10px; display:inline-block; transition:all .3s ease; background:url(&quot;data:image/svg+xml,<svg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path d='M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z' fill='%231d2129'/></svg>&quot;) no-repeat; content:&#39;&#39;}
  #blog-pager-newer-link span:first-child:before {margin-left:-10px; width:35px; height:35px; vertical-align:-10px; display:inline-block; transition:all .3s ease; background: url(&quot;data:image/svg+xml,<svg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path d='M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z' fill='%231d2129'/></svg>&quot;) no-repeat; content:&#39;&#39;}
  @media only screen and (max-width:640px){
    #blog-pager {display:block;}
    #blog-pager-newer-link, #blog-pager-older-link {float: none; width: 100%; display: block; text-align:left;}
    #blog-pager-older-link {margin-top:20px;}
  }
</style>
<style>
#posturl {
    padding: 5px 0 5px 10px;
    border: 1px solid #e1e1e1;
    margin-bottom: 4px;
    margin-top: 10px;
    font-size: 15px;
    color: #000;
}
#posturl{padding: 5px 0 5px 10px;border:1px solid #e1e1e1;margin-bottom:4px;margin-top:10px;font-size:15px;color:#000}
#posturl i{font-size: 14px}
#post-url{user-select:all;-webkit-user-select:all;-moz-user-select:all;-o-user-select:all}
</style>
<div class='clear'/>
<div class='post-action'>
<i class='fa fa-folder-open'/>
<span style='font-size:15px;font-weight:bold'> URL : </span>
<a class='copy-text' data-clipboard-target='#post-url'><i class='fa fa-clone'/> Copy</a>
</div><div class='clear' id='posturl'><i class='fa fa-link'/> | <span id='post-url'><data:post.url/></span>
</div>
</div>
<!--end trang bài viết-->
</b:if>
      <div style='clear: both;'/> <!-- clear for photos floats -->
    

    <div class='post-footer'>
    <div class='post-footer-line post-footer-line-1'/>

      <div class='post-footer-line post-footer-line-2'/>

      <div class='post-footer-line post-footer-line-3'/>
      <b:if cond='data:post.authorAboutMe'>
        <div class='author-profile' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'>
          <b:if cond='data:post.authorPhoto.url'>
            <img expr:src='data:post.authorPhoto.url' itemprop='image' width='50px'/>
          </b:if>
          <div>
            <a class='g-profile' expr:href='data:post.authorProfileUrl' itemprop='url' rel='author' title='author profile'>
              <span itemprop='name'><data:post.author/></span>
            </a>
          </div>
          <span itemprop='description'><data:post.authorAboutMe/></span>
        </div>
      </b:if>
    </div>

      </article>

</b:includable>
    <b:includable id='postQuickEdit' var='post'>
  <b:if cond='data:post.editUrl'>
    <span expr:class='&quot;item-control &quot; + data:post.adminClass'>
      <a expr:href='data:post.editUrl' expr:title='data:top.editPostMsg'>
        <img alt='' class='icon-action' height='18' src='https://resources.blogblog.com/img/icon18_edit_allbkg.gif' width='18'/>
      </a>
    </span>
  </b:if>
</b:includable>
    <b:includable id='shareButtons' var='post'>
  <b:if cond='data:top.showEmailButton'><a class='goog-inline-block share-button sb-email' expr:href='data:post.sharePostUrl + &quot;&amp;target=email&quot;' expr:title='data:top.emailThisMsg' target='_blank'><span class='share-button-link-text'><data:top.emailThisMsg/></span></a></b:if><b:if cond='data:top.showBlogThisButton'><a class='goog-inline-block share-button sb-blog' expr:href='data:post.sharePostUrl + &quot;&amp;target=blog&quot;' expr:onclick='&quot;window.open(this.href, \&quot;_blank\&quot;, \&quot;height=270,width=475\&quot;); return false;&quot;' expr:title='data:top.blogThisMsg' target='_blank'><span class='share-button-link-text'><data:top.blogThisMsg/></span></a></b:if><b:if cond='data:top.showTwitterButton'><a class='goog-inline-block share-button sb-twitter' expr:href='data:post.sharePostUrl + &quot;&amp;target=twitter&quot;' expr:title='data:top.shareToTwitterMsg' target='_blank'><span class='share-button-link-text'><data:top.shareToTwitterMsg/></span></a></b:if><b:if cond='data:top.showFacebookButton'><a class='goog-inline-block share-button sb-facebook' expr:href='data:post.sharePostUrl + &quot;&amp;target=facebook&quot;' expr:onclick='&quot;window.open(this.href, \&quot;_blank\&quot;, \&quot;height=430,width=640\&quot;); return false;&quot;' expr:title='data:top.shareToFacebookMsg' target='_blank'><span class='share-button-link-text'><data:top.shareToFacebookMsg/></span></a></b:if><b:if cond='data:top.showPinterestButton'><a class='goog-inline-block share-button sb-pinterest' expr:href='data:post.sharePostUrl + &quot;&amp;target=pinterest&quot;' expr:title='data:top.shareToPinterestMsg' target='_blank'><span class='share-button-link-text'><data:top.shareToPinterestMsg/></span></a></b:if><b:if cond='data:top.showPlusOne'><div class='goog-inline-block google-plus-share-container'><data:post.googlePlusShareTag/></div></b:if>
</b:includable>
    <b:includable id='status-message'>
  <b:if cond='data:navMessage'>
  <div class='status-msg-wrap'>
    <div class='status-msg-body'>
      <data:navMessage/>
    </div>
    <div class='status-msg-border'>
      <div class='status-msg-bg'>
        <div class='status-msg-hidden'><data:navMessage/></div>
      </div>
    </div>
  </div>
  <div style='clear: both;'/>
  </b:if>
</b:includable>
    <b:includable id='threaded-comment-form' var='post'>
  <div class='comment-form'>
    <a name='comment-form'/>
    <b:if cond='data:mobile'>
      <p><data:blogCommentMessage/></p>
      <data:blogTeamBlogMessage/>
      <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
      <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' expr:height='data:cmtIframeInitialHeight' frameborder='0' id='comment-editor' name='comment-editor' src='' style='display: none' width='100%'/>
    <b:else/>
      <p><data:blogCommentMessage/></p>
      <data:blogTeamBlogMessage/>
      <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
      <iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' expr:height='data:cmtIframeInitialHeight' frameborder='0' id='comment-editor' name='comment-editor' src='' width='100%'/>
    </b:if>
    <data:post.cmtfpIframe/>
    <script type='text/javascript'>
      BLOG_CMT_createIframe(&#39;<data:post.appRpcRelayPath/>&#39;);
    </script>
  </div>
</b:includable>
    <b:includable id='threaded_comment_js' var='post'>
  <script async='async' expr:src='data:post.commentSrc' type='text/javascript'/>

  <script type='text/javascript'>
    (function() {
      var items = <data:post.commentJso/>;
      var msgs = <data:post.commentMsgs/>;
      var config = <data:post.commentConfig/>;

// <![CDATA[
      var cursor = null;
      if (items && items.length > 0) {
        cursor = parseInt(items[items.length - 1].timestamp) + 1;
      }

      var bodyFromEntry = function(entry) {
        var text = (entry &&
                    ((entry.content && entry.content.$t) ||
                     (entry.summary && entry.summary.$t))) ||
            '';
        if (entry && entry.gd$extendedProperty) {
          for (var k in entry.gd$extendedProperty) {
            if (entry.gd$extendedProperty[k].name == 'blogger.contentRemoved') {
              return '<span class="deleted-comment">' + text + '</span>';
            }
          }
        }
        return text;
      }

      var parse = function(data) {
        cursor = null;
        var comments = [];
        if (data && data.feed && data.feed.entry) {
          for (var i = 0, entry; entry = data.feed.entry[i]; i++) {
            var comment = {};
            // comment ID, parsed out of the original id format
            var id = /blog-(\d+).post-(\d+)/.exec(entry.id.$t);
            comment.id = id ? id[2] : null;
            comment.body = bodyFromEntry(entry);
            comment.timestamp = Date.parse(entry.published.$t) + '';
            if (entry.author && entry.author.constructor === Array) {
              var auth = entry.author[0];
              if (auth) {
                comment.author = {
                  name: (auth.name ? auth.name.$t : undefined),
                  profileUrl: (auth.uri ? auth.uri.$t : undefined),
                  avatarUrl: (auth.gd$image ? auth.gd$image.src : undefined)
                };
              }
            }
            if (entry.link) {
              if (entry.link[2]) {
                comment.link = comment.permalink = entry.link[2].href;
              }
              if (entry.link[3]) {
                var pid = /.*comments\/default\/(\d+)\?.*/.exec(entry.link[3].href);
                if (pid && pid[1]) {
                  comment.parentId = pid[1];
                }
              }
            }
            comment.deleteclass = 'item-control blog-admin';
            if (entry.gd$extendedProperty) {
              for (var k in entry.gd$extendedProperty) {
                if (entry.gd$extendedProperty[k].name == 'blogger.itemClass') {
                  comment.deleteclass += ' ' + entry.gd$extendedProperty[k].value;
                } else if (entry.gd$extendedProperty[k].name == 'blogger.displayTime') {
                  comment.displayTime = entry.gd$extendedProperty[k].value;
                }
              }
            }
            comments.push(comment);
          }
        }
        return comments;
      };

      var paginator = function(callback) {
        if (hasMore()) {
          var url = config.feed + '?alt=json&v=2&orderby=published&reverse=false&max-results=50';
          if (cursor) {
            url += '&published-min=' + new Date(cursor).toISOString();
          }
          window.bloggercomments = function(data) {
            var parsed = parse(data);
            cursor = parsed.length < 50 ? null
                : parseInt(parsed[parsed.length - 1].timestamp) + 1
            callback(parsed);
            window.bloggercomments = null;
          }
          url += '&callback=bloggercomments';
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = url;
          document.getElementsByTagName('head')[0].appendChild(script);
        }
      };
      var hasMore = function() {
        return !!cursor;
      };
      var getMeta = function(key, comment) {
        if ('iswriter' == key) {
          var matches = !!comment.author
              && comment.author.name == config.authorName
              && comment.author.profileUrl == config.authorUrl;
          return matches ? 'true' : '';
        } else if ('deletelink' == key) {
          return config.baseUri + '/delete-comment.g?blogID='
               + config.blogId + '&postID=' + comment.id;
        } else if ('deleteclass' == key) {
          return comment.deleteclass;
        }
        return '';
      };

      var replybox = null;
      var replyUrlParts = null;
      var replyParent = undefined;

      var onReply = function(commentId, domId) {
        if (replybox == null) {
          // lazily cache replybox, and adjust to suit this style:
          replybox = document.getElementById('comment-editor');
          if (replybox != null) {
            replybox.height = '250px';
            replybox.style.display = 'block';
            replyUrlParts = replybox.src.split('#');
          }
        }
        if (replybox && (commentId !== replyParent)) {
          replybox.src = '';
          document.getElementById(domId).insertBefore(replybox, null);
          replybox.src = replyUrlParts[0]
              + (commentId ? '&parentID=' + commentId : '')
              + '#' + replyUrlParts[1];
          replyParent = commentId;
        }
      };

      var hash = (window.location.hash || '#').substring(1);
      var startThread, targetComment;
      if (/^comment-form_/.test(hash)) {
        startThread = hash.substring('comment-form_'.length);
      } else if (/^c[0-9]+$/.test(hash)) {
        targetComment = hash.substring(1);
      }

      // Configure commenting API:
      var configJso = {
        'maxDepth': config.maxThreadDepth
      };
      var provider = {
        'id': config.postId,
        'data': items,
        'loadNext': paginator,
        'hasMore': hasMore,
        'getMeta': getMeta,
        'onReply': onReply,
        'rendered': true,
        'initComment': targetComment,
        'initReplyThread': startThread,
        'config': configJso,
        'messages': msgs
      };

      var render = function() {
        if (window.goog && window.goog.comments) {
          var holder = document.getElementById('comment-holder');
          window.goog.comments.render(holder, provider);
        }
      };

      // render now, or queue to render when library loads:
      if (window.goog && window.goog.comments) {
        render();
      } else {
        window.goog = window.goog || {};
        window.goog.comments = window.goog.comments || {};
        window.goog.comments.loadQueue = window.goog.comments.loadQueue || [];
        window.goog.comments.loadQueue.push(render);
      }
    })();
// ]]>
  </script>
</b:includable>
    <b:includable id='threaded_comments' var='post'>
  <div class='comments' id='comments'>
    <a name='comments'/>
    <h4><data:post.commentLabelFull/>:</h4>
<p class='comment-footer'>
      <b:if cond='data:post.allowNewComments'>
        <b:include data='post' name='threaded-comment-form'/>
      <b:else/>
        <data:post.noNewCommentsText/>
      </b:if>
    </p>
    <div class='comments-content'>
      <b:include cond='data:post.embedCommentForm' data='post' name='threaded_comment_js'/>
      <div id='comment-holder'>
         <data:post.commentHtml/>
      </div>
    </div>

    

    <b:if cond='data:showCmtPopup'>
      <div id='comment-popup'>
        <iframe allowtransparency='true' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'>
        </iframe>
      </div>
    </b:if>

    <div id='backlinks-container'>
    <div expr:id='data:widget.instanceId + &quot;_backlinks-container&quot;'>
      <b:include cond='data:post.showBacklinks' data='post' name='backlinks'/>
    </div>
    </div>
  </div>
</b:includable>
  </b:widget>
</b:section>
</div>
<div class='sidebar-container' id='sidebar'>
<!-- Change color -->
<div class='changecolor'>
<a data-color='#ff5722' href='#'/>
<a data-color='#FFCC00' href='#'/>
<a data-color='#EE145B' href='#'/>
<a data-color='#00BFF3' href='#'/>
<a data-color='#8DC73F' href='#'/>
<a data-color='#603913' href='#'/>
<a data-color='#F26522' href='#'/>
<a data-color='#9E0039' href='#'/>
<a data-color='#004A80' href='#'/>
<a data-color='#197B30' href='#'/>
<a data-color='#333333' href='#'/>
<a data-color='#583a63' href='#'/>
<a data-color='#043e50' href='#'/>
<a data-color='#3c3e4f' href='#'/>
<a data-color='#344a3d' href='#'/>
<a data-color='#352b4e' href='#'/>
<a data-color='#344a3d' href='#'/>
<a data-color='#189dfe' href='#'/>
<a data-color='#3b5998' href='#'/>
<a data-color='#00a680' href='#'/>
</div>
<!-- End change color -->
<div class='clear'/>
<div id='hide-qc'>
<li>
<span class='setting-label'> Ẩn quảng cáo </span>
<input id='hide-qc' name='' type='checkbox' value=''/>
<div class='toggle'>
<label for='toggle-change-theme'><i/>
</label></div></li></div>
<div class='clear'/>
<b:section class='sidebar ready-widget' id='sidebar1' showaddelement='yes'>
  <b:widget id='Stats1' locked='false' title='Tổng số lượt xem trang' type='Stats' version='1'>
    <b:widget-settings>
      <b:widget-setting name='showGraphicalCounter'>false</b:widget-setting>
      <b:widget-setting name='showAnimatedCounter'>false</b:widget-setting>
      <b:widget-setting name='showSparkline'>true</b:widget-setting>
      <b:widget-setting name='sparklineStyle'>BLACK_TRANSPARENT</b:widget-setting>
      <b:widget-setting name='timeRange'>ALL_TIME</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'><h2><data:title/></h2></b:if>
  <div class='widget-content'>
 <div id='Stats1_content' style='display: none;'>
<img alt='Sparkline' height='30' id='Stats1_sparkline' style='display:none' width='75'/>
<span class='count count1'><i class='far fa-eye' style='margin-right:5px'/>Tổng số lượt xem trang: </span>
<span class='counter-wrapper text-counter-wrapper' id='Stats1_totalCount'>
</span>    </div>
<script>
function postCount(a){document.write(&quot;<span class='count count2'><i class='fas fa-pen-alt' style='margin-right:5px'/> Tổng số bài viết: &quot;);var b=a.feed.openSearch$totalResults.$t;document.write(&quot;<span class='counts'>&quot;+b+&quot;</span><div class='clear'/>&quot;);document.write(&quot;</span>&quot;)}function numberOfComments(a){document.write(&quot;<span class='count count3'><i class='fas fa-comments' style='margin-right:5px'/> Tổng số nhận xét: &quot;);var b=a.feed.openSearch$totalResults.$t;document.write(&quot;<span class='counts'>&quot;+b+&quot;</span>&quot;);document.write(&quot;</span>&quot;)}
</script>
<script src='/feeds/posts/default?alt=json-in-script&amp;max-results=0&amp;callback=postCount' type='text/javascript'/>
<script src='/feeds/comments/default?alt=json-in-script&amp;max-results=0&amp;callback=numberOfComments'/>

  </div>
</b:includable>
  </b:widget>
  <b:widget id='HTML2' locked='false' title='Nhận Xét Gần Đây' type='HTML' version='2' visible='true'>
    <b:widget-settings>
      <b:widget-setting name='content'>&lt;style type=&quot;text/css&quot;&gt;
a.nxmoia{color:#777}
#nxmoi li{padding:5px 0;border-bottom:1px dotted #ccc}
#nxmoi li:last-child{padding-bottom:0;border-bottom:0}
#nxmoi .avatarImage,#nxmoi .noi-dung{position:relative}
#nxmoi .avatarImage{margin:1px 10px 0 0}
#nxmoi .avatarImage,#nxmoi .avatarRound{width:30px;height:30px}
#nxmoi .avatarRound{border:1px solid #eee}
#nxmoi .avatarImage{margin:1px 10px 0 0}
#nxmoi .avatarImage,#nxmoi .noi-dung{position:relative}
.trai{float:left}
#nxmoi .name{position:absolute;top:-5px;right:-21px;background:none repeat scroll 0% 0% #EEE;padding:2px 4px;line-height:16px;color:#777}
#nxmoi .noi-dung{background:#F9F9F9;padding:13px 10px 4px;width:80%}
#nxmoi .morecmt{float:right;text-align:right;width:100%;box-sizing:border-box;margin-top:10px}
#nxmoi .morecmt a{color:#777;font-size:14px;background:linear-gradient(135deg,#F2F2F2 0%,#F2F2F2 50%,#fff 30%,#FFF 30%,#FFF 100%);padding:2px 10px;border-radius:20px;border:1px solid #f2f2f2}
#nxmoi .morecmt a:hover{background:linear-gradient(135deg,#FFF 0%,#FFF 50%,#F2F2F2 30%,#F2F2F2 30%,#F2F2F2 100%)}
&lt;/style&gt;
&lt;div id=&#39;nxmoi&#39;&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
//&lt;![CDATA[
function nxmoi(e){var t;t=&#39;&lt;ul&gt;&#39;;for(var n=0;n&lt;numComments;n++){var r,i,s,o;if(n==e.feed.entry.length)break;t+=&quot;&lt;li&gt;&quot;;var u=e.feed.entry[n];for(var a=0;a&lt;u.link.length;a++){if(u.link[a].rel==&quot;alternate&quot;){r=u.link[a].href}}
for(var f=0;f&lt;u.author.length;f++){i=u.author[f].name.$t;s=u.author[f].gd$image.src}
if(s.indexOf(&quot;/s1600/&quot;)!=-1){s=s.replace(&quot;/s1600/&quot;,&quot;/s&quot;+avatarSize+&quot;-c/&quot;)}else if(s.indexOf(&quot;/s220/&quot;)!=-1){s=s.replace(&quot;/s220/&quot;,&quot;/s&quot;+avatarSize+&quot;-c/&quot;)}else if(s.indexOf(&quot;/s512-c/&quot;)!=-1&amp;&amp;s.indexOf(&quot;https:&quot;)!=0){s=&quot;https:&quot;+s.replace(&quot;/s512-c/&quot;,&quot;/s&quot;+avatarSize+&quot;-c/&quot;)}else if(s.indexOf(&quot;blogblog.com/img/b16-rounded.gif&quot;)!=-1){s=&quot;https://1.bp.blogspot.com/-NAMZejK41So/T0evV0_SSUI/AAAAAAAACso/ol6-PKkZipA/s&quot;+avatarSize+&quot;/md_blogger_logo.png&quot;}else if(s.indexOf(&quot;blogblog.com/img/openid16-rounded.gif&quot;)!=-1){s=&quot;https://4.bp.blogspot.com/-k0U7v1WpNRs/T0euKMHQi_I/AAAAAAAACsg/DNqzinhvxt4/s&quot;+avatarSize+&quot;/md_openid_logo.png&quot;}else if(s.indexOf(&quot;blogblog.com/img/blank.gif&quot;)!=-1){if(defaultAvatar.indexOf(&quot;gravatar.com&quot;)!=-1){s=defaultAvatar+&quot;&amp;s=&quot;+avatarSize}else{s=defaultAvatar}}else{s=s}
if(showAvatar==true){if(roundAvatar==true){o=&quot;avatarRound&quot;}else{o=&quot;&quot;}
t+=&#39;&lt;div class=&quot;trai avatarImage&quot;&gt;&lt;img class=&quot;&#39;+o+&#39;&quot; src=&quot;&#39;+s+&#39;&quot; alt=&quot;&#39;+i+&#39;&quot; height=&quot;&#39;+avatarSize+&#39;&quot; width=&quot;&#39;+avatarSize+&#39;&quot; /&gt;&lt;/div&gt;&#39;}
t+=&quot;&lt;div class=&#39;trai noi-dung&#39;&gt;&lt;span class=&#39;name&#39;&gt;&quot;+i+&quot;&lt;/span&gt;&quot;;var r=r.replace(/&lt;.*?&gt;/ig,&#39;&#39;);var l=u.content.$t;var c=l.replace(/(&lt;([^&gt;]+)&gt;)/ig,&quot;&quot;);if(c!=&quot;&quot;&amp;&amp;c.length&gt;characters){c=c.substring(0,characters);c+=&quot;&amp;#8230;&quot;}else{c=c}
t+=&#39;&lt;a class=&quot;nxmoia&quot; rel=&quot;nofollow&quot; href=&quot;&#39;+r+&#39;&quot;&gt;&#39;+c+&quot;&lt;/a&gt;&lt;/div&gt;&quot;;t+=&quot;&lt;div style=&#39;clear: both&#39;/&gt;&lt;/li&gt;&quot;};document.getElementById(&#39;nxmoi&#39;).innerHTML=t}
var numComments = numComments || 5,
  avatarSize = avatarSize || 30,
  characters = characters || 30,
  defaultAvatar = defaultAvatar || &quot;https://lh5.googleusercontent.com/-5YeC_6-32nw/UPb7SL-uGXI/AAAAAAAABWE/QJRpUV7G9bc/s30/personal.png&quot;,
  showAvatar = &quot;undefined&quot; === typeof showAvatar ? !0 : showAvatar,
  roundAvatar = &quot;undefined&quot; === typeof roundAvatar ? !0 : roundAvatar,
  hideCredits = &quot;undefined&quot; === typeof hideCredits ? !1 : roundAvatar
//]]&gt;
&lt;/script&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;/feeds/comments/default?alt=json&amp;amp;callback=nxmoi&amp;amp;max-results=5&quot;&gt;&lt;/script&gt;
&lt;div class=&#39;morecmt&#39;&gt;
&lt;a href=&#39;/p/comments.html&#39;&gt;&lt;i class=&quot;far fa-comment-dots&quot;&gt;&lt;/i&gt; Xem thêm phản hồi&lt;/a&gt;
&lt;/div&gt;&lt;/div&gt;</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
  </b:widget>
  <b:widget id='HTML3' locked='false' title='Quảng Cáo' type='HTML' version='2' visible='true'>
    <b:widget-settings>
      <b:widget-setting name='content'>&lt;style&gt;
#moc-author-post,.author-post-cover,.author-post-cover img,.author-post-avatar img,.author-post-meta,.author-post-info-title{position:relative;float:left;width:100%}
.cover-bg{position:absolute;background:linear-gradient(rgba(0,0,0,0) 71%,rgba(0,0,0,.53));width:100%;height:100%;z-index:1}
.author-post-avatar{position:relative;float:left;width:55px;margin-top:-65px;margin-left:10px;font-weight:600;box-shadow:0 0 1px 0 rgba(0,0,0,.3);-moz-box-shadow:0 0 1px 0 rgba(0,0,0,.3);-webkit-box-shadow:0 0 1px 0 rgba(0,0,0,.3);border-radius:3px;overflow:hidden;z-index:1}
.author-post-name{position:relative;float:left;margin-left:75px;margin-top:-63px;z-index:1}
.author-post-name a{font-size:18px;line-height:20px;text-transform:inherit;color:#fff;font-weight:400;text-shadow:1px 1px rgba(0,0,0,0.3);-moz-text-shadow:1px 1px rgba(0,0,0,0.3);-webkit-text-shadow:1px 1px rgba(0,0,0,0.3);margin-bottom:0}
.author-post-info-title{float:left;background:#fff;padding:10px 0;text-align:center;border:1px solid #e5e5e5;border-top:0}
.author-more{float:left;background:#fff;padding:10px;text-align:center;border:1px solid #e5e5e5;border-top:0}
.author-post-meta{background:#fff;border:1px solid #e5e5e5;border-top:0;border-radius:0 0 3px 3px}
.author-post-meta &gt; span{float:left;width:50%;padding:10px 0;text-align:center;border-left:1px solid #e5e5e5}
.author-post-meta &gt; span.date{width:50%;border-left:0}
&lt;/style&gt;
&lt;div id=&quot;moc-author-post&quot;&gt;
&lt;div class=&quot;author-post-cover&quot;&gt;
&lt;div class=&quot;cover-bg&quot;&gt;&lt;/div&gt;
&lt;img src=&quot;https://i.imgur.com/hsLqJaU.jpg&quot; /&gt;
&lt;/div&gt;
&lt;div class=&quot;author-post-avatar&quot;&gt;
&lt;a href=&quot;#&quot; title=&quot;Xem trang cá nhân của Đỗ Mạnh Hồng&quot;&gt;
&lt;img alt=&quot;Author&quot; height=&quot;auto&quot; src=&quot;https://graph.facebook.com/100005776683788/picture?width=500&amp;amp;height=500&quot; width=&quot;auto&quot; /&gt;
&lt;/a&gt;
&lt;/div&gt;
&lt;span class=&quot;author-post-name&quot;&gt;
&lt;a href=&quot;#&quot; title=&quot;Xem trang cá nhân của Đỗ Mạnh Hồng&quot;&gt;Đỗ Mạnh Hồng&lt;br /&gt;(Developes and Designer)&lt;/a&gt;
&lt;/span&gt;
&lt;div class=&quot;author-post-info-title&quot;&gt;
&lt;span&gt;THÔNG TIN VỀ TÔI&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;author-more&quot;&gt;
&lt;p&gt;Tôi có đam mê về lập trình, thích khám phá những điều thú vị trên mạng internet. Biết đôi chút về HTML, CSS, JS,...&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;author-post-meta&quot;&gt;
&lt;span class=&quot;date&quot;&gt;
&lt;i class=&quot;fa fa-street-view&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt; Ho Chi Minh&lt;/span&gt;
&lt;span class=&quot;dg&quot;&gt;
&lt;i class=&quot;fa fa-map-marker&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt; Dubai
&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
  </b:widget>
  <b:widget id='PopularPosts1' locked='false' title='Đọc nhiều tuần qua' type='PopularPosts' version='1'>
    <b:widget-settings>
      <b:widget-setting name='numItemsToShow'>10</b:widget-setting>
      <b:widget-setting name='showThumbnails'>true</b:widget-setting>
      <b:widget-setting name='showSnippets'>true</b:widget-setting>
      <b:widget-setting name='timeRange'>LAST_WEEK</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
  <b:if cond='data:title != &quot;&quot;'><h2><data:title/></h2></b:if>
  <div class='widget-content popular-posts'>
    <ul>
      <b:loop values='data:posts' var='post'>
      <li>
        <b:if cond='!data:showThumbnails'>
          <b:if cond='!data:showSnippets'>
            <!-- (1) No snippet/thumbnail -->
            <a expr:href='data:post.href'><data:post.title/></a>
          <b:else/>
            <!-- (2) Show only snippets -->
            <div class='item-title'><a expr:href='data:post.href'><data:post.title/></a></div>
            <div class='item-snippet'><data:post.snippet/></div>
          </b:if>
        <b:else/>
          <!-- (3) Show only thumbnails or (4) Snippets and thumbnails. -->
          <div expr:class='data:showSnippets ? &quot;item-content&quot; : &quot;item-thumbnail-only&quot;'>
            <b:if cond='data:post.featuredImage.isResizable or data:post.thumbnail'>
              <div class='item-thumbnail'>
                <a expr:href='data:post.href' target='_blank'>
                  <b:with value='data:post.featuredImage.isResizable                                  ? resizeImage(data:post.featuredImage, 300, &quot;1:1&quot;)                                  : data:post.thumbnail' var='image'>
                    <img alt='' border='0' expr:src='data:image'/>
                  </b:with>
                </a>
              </div>
            </b:if>
            <div class='item-title'><a expr:href='data:post.href'><data:post.title/></a></div>
            <b:if cond='data:showSnippets'>
              <div class='item-snippet'><data:post.snippet/></div>
            </b:if>
          </div>
          <div style='clear: both;'/>
        </b:if>
      </li>
      </b:loop>
    </ul>
    <b:include name='quickedit'/>
  </div>
</b:includable>
  </b:widget>
  <b:widget id='HTML4' locked='false' title='Liên Kết' type='HTML' version='2' visible='true'>
    <b:widget-settings>
      <b:widget-setting name='content'>&lt;div class=&quot;&quot;&gt;
&lt;style&gt;
#HTML2 .widget-content{padding:0!important}
.lien-ket-blog ul::-webkit-scrollbar{width:5px}
.lien-ket-blog ul::-webkit-scrollbar-thumb{background:#189dfe;border-radius:15px}
.lien-ket-blog ul::-webkit-scrollbar-thumb:active{background:#eee}
.lien-ket-blog ul::-webkit-scrollbar-thumb:corner{background:red}
.lien-ket-blog{margin:0;padding:0}
.lien-ket-blog ul{padding:0;max-height:155px;overflow:overlay}
.lien-ket-blog li{border:1px solid #f4f4f4;width:50%;padding:0;line-height:normal;float:left;text-align:left}
.lien-ket-blog li:nth-child(2n+1){border-width:1px 1px 0 0px}
.lien-ket-blog li:nth-child(2n+2){border-width:1px 0px 0 0px}
.lien-ket-blog li:nth-child(1),.lien-ket-blog li:nth-child(2){border-top:0px}
.lien-ket-blog li:nth-child(20){border-width:1px 0px 0px 0px}
.lien-ket-blog li:last-child{border-width:1px 0px 1px 0px}
.lien-ket-blog li a:hover{margin-left:5px;font-weight:600}
.lien-ket-blog a{width:auto;text-overflow:ellipsis;overflow:hidden;display:block;-webkit-box-orient:vertical;-webkit-line-clamp:1;white-space:nowrap;padding:8.7px;font-size:14.5px;color:#222}
.lien-ket-blog a:before{content:&quot;\f101&quot;;font-family:&#39;Font Awesome 5 Free&#39;;font-size:12px;margin-right:7px;color:#333;font-weight:900}
&lt;/style&gt;
&lt;div class=&quot;lien-ket-blog font-wp&quot;&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a href=&quot;#&quot; target=&quot;_blank&quot; title=&quot;Đỗ Mạnh Hồng&quot;&gt;Đặt Liên Kết&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;p style=&quot;width:100%;background-color:#f8f9fa;font-size:15px;font-style:italic;margin-top:-1px;float:left;padding:10px 15px&quot;&gt;* Mình sẽ &lt;u&gt;gỡ liên liên kết&lt;/u&gt; nếu 1 trong những blog làm sai quy tắc trong việc liên kết.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;</b:widget-setting>
    </b:widget-settings>
    <b:includable id='main'>
  <!-- only display title if it's non-empty -->
  <b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
  <div class='widget-content'>
    <data:content/>
  </div>

  <b:include name='quickedit'/>
</b:includable>
  </b:widget>
</b:section>
</div>
</div><!-- end content-wrapper -->
<div class='clear'/><!-- Footer wrapper -->
<div class='clear'/>
<footer class='site-footer' id='colophon'>
<!-- Footer Widget End -->
<!-- Copyright -->
<div class='footer-bottom'>
<div class='row'>
<div class='left'>
<div class='footer-social'>
<ul class='social-box'>
<li><a class='facebook' href='#'><i class='fab fa-facebook-f'/></a></li>
<li><a class='twitter' href='#'><i class='fab fa-twitter'/></a></li>
<li><a class='plusgoogle' href='#'><i class='fab fa-google'/></a></li>
<li><a class='rss' href='#'><i class='fas fa-rss'/></a></li>
</ul>
</div>
</div>
<div class='right'>
<p>Copyright &#169; 2015 - <span id='current-year'>2018</span>
<a href='#' id='copyright'><b>Tiến Đức Blog</b></a>. All rights reserved.
</p>
<p>Bản Quyền Nội Dung website này Thuộc về <i class='fas fa-heart animated infinite pulse' style='color:red'/>
<a href='#' id='mytemplate' ref='nofollow' target='_blank' title='Đỗ Mạnh Hồng'><b>Đỗ Mạnh Hồng</b>.</a></p>
</div>
</div>
</div>
</footer>
</div>
<!-- Javascript -->
<script type='text/javascript'>
//<![CDATA[
/*GLOBAL SETTINGS, USER CAN CHANGE*/
var tyOptions = {
    monthFormat: [, "1,", "2,", "3,", "4,", "5,", "6,", "7,", "8,", "9,", "10,", "11,", "12,"],
    noThumbnail: "https://i.imgur.com/IIdtni8.png",
    postperPage: 10,
    labelResults: 9,
};
// Double Click
$('i[rel="pre"]').replaceWith(function(){return $("<pre><code>"+$(this).html()+"</code></pre>")});for(var pres=document.querySelectorAll("pre,code,ttb,blockquote,td"),i=0;i<pres.length;i++)pres[i].addEventListener("dblclick",function(){var e=getSelection(),t=document.createRange();t.selectNodeContents(this),e.removeAllRanges(),e.addRange(t)},!1);
// Drop menu
jQuery(document).ready(function($){
    $('#primary-navigation, .widget_nav_menu').addClass('toggle-menu');
    $('.toggle-menu ul.sub-menu, .toggle-menu ul.children').addClass('toggle-submenu');
    $('.toggle-menu ul.sub-menu').parent().addClass('toggle-menu-item-parent');
    $('.toggle-menu .toggle-menu-item-parent').append('<span class="toggle-caret fas"></span>');
    $('.toggle-caret').click(function(e){
        $(this).parent().toggleClass('active').children('.toggle-submenu').toggleClass('active');
    })
});

// Show menu mobile
jQuery(document).ready(function($){
    $(document).click(function (e) {
        // Show Menu
        if (e.target.id == 'show-menu') {
            $("#primary-navigation, #moc-phu").toggleClass("active");
        }
        if (e.target.id == 'nav-icon2') {
            $("#primary-navigation, #moc-phu").toggleClass("active");
        }
        // Hidden Menu
        if( e.target.id == 'moc-phu' || e.target.id == 'close-menu') {
            $("#primary-navigation, #moc-phu").removeClass("active");
        }
        
        // Show Menu
        if (e.target.id == 'show-search') {
            $("#search-form").toggleClass("active");
        } else if (e.target.id != 'search-keyword' && e.target.id != 'cat' && e.target.id != 'search-submit' ) {
            $("#search-form").removeClass("active");
        }
    })
});
// Related Posts
$(document).ready(function(){function relatedPost(g,e,r){$.ajax({url:"/feeds/posts/default/-/"+e+"?alt=json-in-script&max-results="+r,type:"get",dataType:"jsonp",success:function(t){for(var u="",h='<div class="related">',x=0;x<t.feed.entry.length;x++){for(var z=0;z<t.feed.entry[x].link.length;z++){if("alternate"==t.feed.entry[x].link[z].rel){u=t.feed.entry[x].link[z].href;break}}
var p=t.feed.entry[x].title.$t;var c=t.feed.entry[x].content.$t;var y=$('<div>').html(c);if(c.indexOf("https://www.youtube.com/embed/")>-1||c.indexOf("https://www.youtube.com/embed/")>-1){var d=t.feed.entry[x].media$thumbnail.url,m=d.replace('/default.jpg','/mqdefault.jpg'),k=m;}else if(c.indexOf("<img")>-1){var s=y.find('img:first').attr('src'),v=s.replace('s72-c','s600');var k=v;}else{var k='https://2.bp.blogspot.com/-4lZ7DCckjkg/WtaPclghMGI/AAAAAAAAN00/4Cais5iSDRwwUyU6jEc7qlCojlg1izsVgCLcBGAs/s1600/noImage.png';}
h+='<li><div class="related-thumb"><a class="related-img" href="'+u+'" style="background:url('+k+') no-repeat center center;background-size: cover"/></div><h3 class="related-title"><a href="'+u+'">'+p+'</a></h3></li>'}
h+='</div>',g.html(h);}})}
$("#related-posts").each(function(){var g=$(this),e=g.text(),r=3;relatedPost(g,e,r);});});

//]]>
</script>
<!-- Load post -->
<b:if cond='data:blog.pageType == &quot;index&quot;'>
<script type='text/javascript'>
//<![CDATA[
! function (A, H) {
    A.InfiniteScroll = function (e) {
        function d(e, t) {
            return (t = t || H).querySelectorAll(e)
        }
        function n(e) {
            return void 0 !== e
        }
        function r(e) {
            return "function" == typeof e
        }
        function c(e, t) {
            if (n(o[e]))
                for (var a in o[e]) o[e][a](t)
        }
        function a() {
            return i.innerHTML = u.text.loading, h = !0, v ? (m.classList.add(u.state.loading), c("loading", [u]), void t(v, function (e, t) {
                m.className = b + " " + u.state.load, (p = H.createElement("div")).innerHTML = e;
                var a = d("title", p),
                    n = d(u.target.post, p),
                    r = d(u.target.anchors + " " + u.target.anchor, p),
                    o = d(u.target.post, g);
                if (a = a && a[0] ? a[0].innerHTML : "", n.length && o.length) {
                    var s = o[o.length - 1];
                    H.title = a, s.insertAdjacentHTML("afterend", '<span class="fi" id="#fi:' + M + '"></span>'), p = H.createElement("div");
                    for (var i = 0, l = n.length; i < l; ++i) p.appendChild(n[i]);
                    s.insertAdjacentHTML("afterend", p.innerHTML), f(), v = !!r.length && r[0].href, h = !1, M++, c("load", [u, e, t])
                }
            }, function (e, t) {
                m.classList.add(u.state.error), h = !1, f(1), c("error", [u, e, t])
            })) : (m.classList.add(u.state.loaded), i.innerHTML = u.text.loaded, c("loaded", [u]))
        }
        function f(e) {
            if (i.innerHTML = "", s) {
                p.innerHTML = u.text[e ? "error" : "load"];
                var t = p.firstChild;
                t.onclick = function () {
                    return 2 === u.type && (s = !1), a(), !1
                }, i.appendChild(t)
            }
        }
        var u = {
                target: {
                    posts: ".posts",
                    post: ".post",
                    anchors: ".anchors",
                    anchor: ".anchor"
                },
                text: {
                    load: "%s",
                    loading: "%s",
                    loaded: "%s",
                    error: "%s"
                },
                state: {
                    load: (t = "infinite-scroll-state-") + "load",
                    loading: t + "loading",
                    loaded: t + "loaded",
                    error: t + "error"
                }
            },
            o = {
                load: [],
                loading: [],
                loaded: [],
                error: []
            };
        (u = function e(t, a) {
            for (var n in t = t || {}, a) t[n] = "object" == typeof a[n] ? e(t[n], a[n]) : a[n];
            return t
        }(u, e || {})).on = function (e, t, a) {
            return n(e) ? n(t) ? void(n(a) ? o[e][a] = t : o[e].push(t)) : o[e] : o
        }, u.off = function (e, t) {
            n(t) ? delete o[e][t] : o[e] = []
        };
        var p = null,
            t = function (e, t, a) {
                if (A.XMLHttpRequest) {
                    var n = new XMLHttpRequest;
                    n.onreadystatechange = function () {
                        if (4 === n.readyState) {
                            if (200 !== n.status) return void(a && r(a) && a(n.responseText, n));
                            t && r(t) && t(n.responseText, n)
                        }
                    }, n.open("GET", e), n.send()
                }
            },
            s = 1 !== u.type,
            h = !1,
            g = d(u.target.posts)[0],
            i = d(u.target.anchors)[0],
            v = d(u.target.anchor, i),
            l = H.body,
            m = H.documentElement,
            b = m.className || "",
            x = g.offsetTop + g.offsetHeight,
            y = A.innerHeight,
            T = 0,
            L = null,
            M = 1;
        if (v.length) {
            v = v[0].href, g.insertAdjacentHTML("afterbegin", '<span class="fi" id="#fi:0"></span>'), p = H.createElement("div"), f();
            var w = function () {
                x = g.offsetTop + g.offsetHeight, y = A.innerHeight, T = l.scrollTop || m.scrollTop, h || T + y < x || a()
            };
            w(), 0 !== u.type && A.addEventListener("scroll", function () {
                s || (L && A.clearTimeout(L), L = A.setTimeout(w, 500))
            }, !1)
        }
        return u
    }
}(window, document);
var infinite_scroll = new InfiniteScroll({
    type: 2,
    target: {
        posts: ".blog-posts",
        post: ".post-item",
        anchors: ".blog-pager",
        anchor: ".blog-pager-older-link"
    },
    text: {
        load: '<div class="load-post"><a class="js-load" href="javascript:;">Tải thêm <i class="fas fa-arrow-down"></i></a></div>',
        loading: '<div class="load-post"><span class="js-loading" style="cursor:wait;">Đang tải <i class="fas fa-circle-notch fa-spin"></i></span></div>',
        loaded: '<div class="load-post"><span class="js-loaded">Hết rồi kéo gì nữa người ơi <i class="fas fa-check"></i></span>',
        error: '<a class="js-error" href="javascript:;">Lỗi rồi <i class="fas fa-exclamation"></i></a></div>'
    }
});//]]>
  </script>
<b:else/>
<script> //<![CDATA[
    // Navigasi Blogger dengan Judul by igniel.com
    !function(t) {
   var next = 'Next';
   var prev = 'Previous';
    var a = t("a.blog-pager-newer-link"),
    n = t("a.blog-pager-older-link");
t.get(a.attr("href"), function (n) {
    a.html("<span>" + next + "</span> <span>" + t(n).find(".post .post-title").first().text() + "</span>")
}, "html");
t.get(n.attr("href"), function (a) {
    n.html("<span>" + prev + "</span> <span>" + t(a).find(".post .post-title").first().text() + "</span>")
}, "html");}(jQuery);
  //]]> </script>
</b:if>
<!-- Your customer chat code -->
<!-- Load Facebook SDK for JavaScript -->
<!-- Weather + Date -->
<!-- CSS -->
<link href='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/animate.css' rel='stylesheet'/>
<link href='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/lightgallery.css' rel='stylesheet'/>
<link href='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/lg-transitions.css' rel='stylesheet'/>
<!-- JS -->
<script src='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/lightgallery.js'/>
<script src='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/transition.js'/>
<script src='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/wow.js'/>
<script src='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/collapse.js'/>
<script src='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/jquery.sharrre.min.js'/>
<script src='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/picturefill.min.js'/>
<script src='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/lightgallery.js'/>
<script src='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/lg-fullscreen.js'/>
<script src='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/lg-thumbnail.js'/>
<script src='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/lg-video.js'/>
<script src='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/lg-autoplay.js'/>
<script src='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/lg-share.js'/>
<script src='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/lg-zoom.js'/>
<script src='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/lg-hash.js'/>
<script src='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/lg-pager.js'/>
<script src='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/jquery.mousewheel.min.js'/>
<script src='//cdn.jsdelivr.net/gh/hongblogger/bloghong09@master/main.js'/>
<script type='text/javascript'>
//<![CDATA[
$('#lightgallery').lightGallery({thumbnail:true,getCaptionFromTitleOrAlt:true,selector:"a[imageanchor]"});
//]]>
</script>
<script type='text/javascript'>//<![CDATA[
window.paceOptions = {
  ajax: false,
  eventLag: false,
  restartOnRequestAfter: false
}
//]]></script>
<b:if cond='data:blog.pageType != &quot;index&quot;'>
<script>
$(&quot;#sidebar&quot;).change(function(){0==$(this).is(&quot;:checked&quot;)?($(&quot;.sidebar-content&quot;).addClass(&quot;hide&quot;),$(&quot;.item-view .content-wrapper&quot;).addClass(&quot;resize&quot;)):($(&quot;.sidebar-content&quot;).removeClass(&quot;hide&quot;),$(&quot;.item-view .content-wrapper&quot;).removeClass(&quot;resize&quot;))});
 </script>
</b:if>
<script>
// Preloader
$(window).load(function(){$(&quot;#loader&quot;).fadeOut(),$(&quot;#preloader&quot;).delay(350).fadeOut(&quot;slow&quot;),$(&quot;body&quot;).delay(350).css({overflow:&quot;visible&quot;})});

</script>
<!-- Dark mode -->
<script>
$(&#39;p, div&#39;).selectionSharer();
</script>
<!-- Load Facebook SDK for JavaScript -->
<!-- Search live -->
<style type='text/css'>
/* Ajax Search */
*,*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
.ajax-search{padding:20px;background:#fff!important;box-shadow:0 0 15px rgba(0,0,0,0.15);max-height:450px!important}
.ajax-search h3{font-size:14px;font-weight:normal;margin:0 0 20px 0}
.ajax-search li{position:relative;display:inline-block;float:left;width:50%;margin:0 0 10px 0;overflow:hidden}
.ajax-search li h4{font-size:13px;font-weight:normal;margin:0 15px 0 0}
.ajax-search li h4 a{color:#000;transition:all .3s}
.ajax-search li h4 mark{background-color:transparent;color:#000;text-decoration:underline;transition:all .3s}
.ajax-search li h4 a:hover,.ajax-search li h4:hover mark{color:#f44336}
.ajax-search-image{float:left;margin:0 10px 0 0}
.ajax-search-image img{border-radius:5px}
.ajax-search-pager a{display:inline-block;clear:both;overflow:hidden;background:#f44336;color:#fff;font-size:13px;padding:5px 10px;border-radius:3px;margin:15px auto 0 auto}
.ajax-search-pager a:hover{background:#333;color:#fff}
@media screen and (max-width:768px){
.ajax-search li{position:relative;display:inline-block;float:left;width:100%;margin:0 0 10px 0;overflow:hidden}
}
/* Background color */
.back-to-top{background:#189dfe}
/* Back top */
.back-to-top{visibility:hidden;width:30px;height:30px;line-height:28.5px;bottom:0;right:10px;text-align:center;position:fixed;bottom:0;cursor:pointer;opacity:0;-webkit-transform:translateZ(0);transition:all .5s;border-radius:3px;z-index:2147483647}
.back-to-top i{font-size:13px;color:#fff}
.back-to-top.show{visibility:visible;bottom:10px;opacity:10}
</style>
<script src='https://rawcdn.githack.com/Arlina-Design/quasar/master/ajaxsearch.js?live=true&amp;image=true&amp;target=_blank&amp;url=https://www.bloghong.com'/>
<div id='bottom'/>
<script>
(function () {
    $(document).ready(function () {
        return $(window).scroll(function () {
            return $(window).scrollTop() &gt; 200 ? $(&quot;#back-to-top&quot;).addClass(&quot;show&quot;) : $(&quot;#back-to-top&quot;).removeClass(&quot;show&quot;)
        }), $(&quot;#back-to-top&quot;).click(function () {
            return $(&quot;html,body&quot;).animate({
                scrollTop: &quot;0&quot;
            })
        })
    })
}
</script>
<!-- Changecolor -->
<script type='text/javascript'> 
//<![CDATA[
$(".changecolor a").each(function () {
    var o = $(this).attr("data-color");
    $(this).css("background-color", o), $(this).click(function () {
        return $(".post-meta a, .post-meta > span i, .post-meta i, .meta-post a, .item-title a, .item-snippet, #header-inner .titlewrapper span, .post-category-home a, .iconmenu a:hover, .iconmenu a:hover, .gbld-author-bio h4 small, .footer-bottom a").css("color", o),
$("#colored-bar,#primary-navigation .sub-menu li:hover > a, .back-to-top, #buttonsb .btn.btn-read, .ajax-search::-webkit-scrollbar-thumb, .btn-primary, #site-header, .header-middle, .home-menu-title, #primary-navigation ul.sub-menu, .footer-social a i:after, #primary-navigation ul.sub-menu li a").css("background-color", o), $(".code-doi-vien,#code-doi-vien").css("border-color", o), $(".code-giu-nguyen-khi-chuyen-mau").hover(function () {
            $(this).css("background-color", o)
        }, function () {
            $(this).css("background-color", "#f4f4f4")
        }), $(".chua-them").hover(function () {
            $(this).css("background-color", o)
        }, function () {
            $(this).css("border-color", "#eee")
        }), $(".chua-them").each(function () {
            $(this).css("border-color", o)
        }, function () {
            $(this).css("color", "#fff!important")
        }), $(".chua-them").hover(function () {
            $(this).css("color", o)
        }, function () {
            $(this).css("background-color", "#fff")
        }), !1
    })
});
//]]>
</script>
<div class='back-to-top' id='back-to-top' title='Back to Top'><i aria-hidden='true' class='fa fa-angle-double-up'/></div>
<!-- Hide qc -->
<style>
.hd-qc .class,.hd-qc #id{display:none!important}
</style>
<script type='text/javascript'>
//<![CDATA[
document.getElementById("hide-qc").addEventListener("click", function () {
    var _0xbabbx3 = document.body.classList.toggle("hd-qc");
    localStorage.setItem("hide-banner", _0xbabbx3)
});
jQuery(document).ready(function (_0xbabbx4) {
    _0xbabbx4(function () {
        _0xbabbx4("hide-qc").click(function (_0xbabbx5) {
            _0xbabbx5.preventDefault()
        })
    })
})
//]]>
</script>
<script type='application/ld+json'>

{
	&quot;@context&quot;: &quot;http://schema.org&quot;,
	&quot;@type&quot;: &quot;Organization&quot;,
	&quot;name&quot;: &quot;Blog Hồng&quot;,
	&quot;url&quot;: &quot;https://www.bloghong.com/&quot;,
	&quot;logo&quot;: &quot;https://1.bp.blogspot.com/-MbHDgWjj-vE/Wavq3TFLz9I/AAAAAAAAHl0/7CHV8zu9bkwNKkHX9R-EhLEQotUcc1ajgCLcBGAs/s1600/aaaa.jpg&quot;,
	&quot;contactPoint&quot;:
		{
			&quot;@type&quot;: &quot;ContactPoint&quot;,
			&quot;telephone&quot;: &quot;+84967849934&quot;,
			&quot;contactType&quot;: &quot;customer service&quot;,
			&quot;areaServed&quot;: &quot;VN&quot;,
			&quot;availableLanguage&quot;: &quot;Vietnamese&quot;
		},
	&quot;sameAs&quot;: &quot;https://www.facebook.com/bloghongseo/&quot;
}

</script>
<script type='application/ld+json'>
{
  &quot;@context&quot;: &quot;http://schema.org/&quot;,
  &quot;@type&quot;: &quot;WebSite&quot;,
  &quot;name&quot;: &quot;Blog cá nhân Đỗ Mạnh Hồng&quot;,
  &quot;alternateName&quot;: &quot;Blog Hồng&quot;,
  &quot;url&quot;: &quot;https://www.bloghong.com/&quot;
}
</script>
<script type='text/javascript'>
//<![CDATA[
(function() { var ad = document.createElement('script'); ad.type = 'text/javascript'; ad.async = true; ad.src = 'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'; var sc = document.getElementsByTagName('script')[0]; sc.parentNode.insertBefore(ad, sc); })();
//]]>
</script>
<script type='text/javascript'>
//<![CDATA[
//Block anh
      var images = document.getElementsByTagName("img");
      for(var i=0;i<images.length;i++) {   
        images[i].src = images[i].src.replace(/[0-9]+.bp.blogspot.com/,"lh5.ggpht.com");
      }
// AdSense by Bloghong.com
var lazyadsense=!1;window.addEventListener("scroll",function(){(0!=document.documentElement.scrollTop&&!1===lazyadsense||0!=document.body.scrollTop&&!1===lazyadsense)&&(!function(){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="https://cdn.jsdelivr.net/gh/Arlina-Design/quasar@master/arlinablock.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(e,a)}(),lazyadsense=!0)},!0);
// Lazy Load bloghong.com
(function(a){a.fn.lazyload=function(b){var c={threshold:0,failurelimit:0,event:"scroll",effect:"show",container:window};if(b){a.extend(c,b)}var d=this;if("scroll"==c.event){a(c.container).bind("scroll",function(b){var e=0;d.each(function(){if(a.abovethetop(this,c)||a.leftofbegin(this,c)){}else if(!a.belowthefold(this,c)&&!a.rightoffold(this,c)){a(this).trigger("appear")}else{if(e++>c.failurelimit){return false}}});var f=a.grep(d,function(a){return!a.loaded});d=a(f)})}this.each(function(){var b=this;if(undefined==a(b).attr("original")){a(b).attr("original",a(b).attr("src"))}if("scroll"!=c.event||undefined==a(b).attr("src")||c.placeholder==a(b).attr("src")||a.abovethetop(b,c)||a.leftofbegin(b,c)||a.belowthefold(b,c)||a.rightoffold(b,c)){if(c.placeholder){a(b).attr("src",c.placeholder)}else{a(b).removeAttr("src")}b.loaded=false}else{b.loaded=true}a(b).one("appear",function(){if(!this.loaded){a("<img />").bind("load",function(){a(b).hide().attr("src",a(b).attr("original"))[c.effect](c.effectspeed);b.loaded=true}).attr("src",a(b).attr("original"))}});if("scroll"!=c.event){a(b).bind(c.event,function(c){if(!b.loaded){a(b).trigger("appear")}})}});a(c.container).trigger(c.event);return this};a.belowthefold=function(b,c){if(c.container===undefined||c.container===window){var d=a(window).height()+a(window).scrollTop()}else{var d=a(c.container).offset().top+a(c.container).height()}return d<=a(b).offset().top-c.threshold};a.rightoffold=function(b,c){if(c.container===undefined||c.container===window){var d=a(window).width()+a(window).scrollLeft()}else{var d=a(c.container).offset().left+a(c.container).width()}return d<=a(b).offset().left-c.threshold};a.abovethetop=function(b,c){if(c.container===undefined||c.container===window){var d=a(window).scrollTop()}else{var d=a(c.container).offset().top}return d>=a(b).offset().top+c.threshold+a(b).height()};a.leftofbegin=function(b,c){if(c.container===undefined||c.container===window){var d=a(window).scrollLeft()}else{var d=a(c.container).offset().left}return d>=a(b).offset().left+c.threshold+a(b).width()};a.extend(a.expr[":"],{"below-the-fold":"$.belowthefold(a, {threshold : 0, container: window})","above-the-fold":"!$.belowthefold(a, {threshold : 0, container: window})","right-of-fold":"$.rightoffold(a, {threshold : 0, container: window})","left-of-fold":"!$.rightoffold(a, {threshold : 0, container:window})"})})(jQuery);$(function(){$("img").lazyload({placeholder:"https://3.bp.blogspot.com/-xtM_7x0_cU4/XIok1BisovI/AAAAAAAAPUc/QGJpBJZ3QBM_Spkd9r3-SMurEUbRI1pOQCLcBGAs/s1600/loadingku.gif",effect:"fadeIn",threshold:"0"})});
//]]>
</script>
  </body></html>