<?php
	echo 'vai toma no cu';
/**
 * Template Name: Controle_curricular
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>


<? echo 'vai toma no cu'; ?>
<style >

@charset "utf-8";
/* CSS Document */

@import "css/reset.css";



div.menu
{
width: 500px;
border: 1 solid #002E63;
-moz-border-radius: 15px;
border-radius: 15px;
}

div.menu a
{
display: block;
padding-left: 5px;
line-height: 20px;
color: #002E63;
text-decoration: none;
outline: none;
border: 1 solid #002E63;
}

* html div.menu a { height: 1%; border: 1 solid #002E63;}

div.menu a:hover
{
background-color: #002E63;
    color: #FFFFFF;
border: 1 solid #002E63;
}

ul.corpo
{
margin: 0px;
padding: 0px;
width: 500px;
border: 1 solid #002E63;
}

ul.corpo li
{
display: block;
margin: 0px;
padding: 5px;
list-style: none;
border: 1 solid #002E63;
}

span.imagem
{
display: block;
width: 490px;
position : absolute;
text-align: right;
}

span.imagem img
{
padding: 0px 0px;
cursor: pointer;
}

span.header
{
z-index:1;
display: block;
margin: 0px;
padding: 0px;
padding-left: 5px;
line-height: 32px;
color: #FFFFFF;
font-weight: bold;
background-color: #002E63;
-moz-border-radius: 14px;
border-radius: 14px;
border: 1 solid #002E63;
}

/*----*****---- << General >> ----*****----*/
	
	body { font-weight:normal; font-family: Verdana, Arial, Helvetica, Garamond, sans-serif, serif; font-size:16px; background:#ffffff; color:#333334; margin-top:10px margin-bottom:10px}
	
	/*----*****---- << Fonts >> ----*****----*/
	
	body, h1, h2, h3, h4, h5, h6, h7,h8, h9, h10 input[type=text], input[type=password], input.text, textarea, input[type=submit], .mobile-menu, .side-nav-container ul li a, .widget.widget_nav_menu ul li a { font-family:'Lato', sans-serif; }	
	#logo h2 { font-family:'Arvo', serif; }
	
h1, h2, h3, h5, h9, h10 { color:#000000; font-weight:bold; }	
h4{ font-weight:normal; color:#000000;}
	h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color:#333334; }
	h6 { color:#333334;}
	h7 { color:#ff0000}
	h8 { color:#ffffff}
	
	h1{ font-size:24px; line-height:normal; margin-bottom:15px; text-transform:uppercase; }
	h2{ font-size:22px; line-height:normal; margin-bottom:15px; text-transform:uppercase; }
	h3{ font-size:20px; line-height:normal; margin-bottom:15px; text-transform:uppercase; }
	h4{ font-size:18px; line-height:24px; margin-bottom:15px; margin-top:0px}
	h5{ font-size:16px; line-height:24px; margin-bottom:0px; margin-top:0px}
	h6{ font-size:14px; line-height:24px; margin-bottom:0px; margin-top:0px }
	h7{ font-size:18px; line-height:24px; margin-bottom:0px; margin-top:0px }
	h8{ font-size:14px; line-height:24px; margin-bottom:0px; margin-top:0px }	
	h9{ font-size:22px; line-height:normal; margin-bottom:15px; text-transform:uppercase; text-align:right; }
	h10{ font-size:22px; line-height:normal; margin-bottom:15px; text-transform:uppercase; text-align:left; }
	
	
	.border-title { background:url(images/splitter.png) bottom repeat-x; width:100%; text-align:center; display:inline-block; margin:0px 0px 50px; padding:0px; position:relative; }
	.border-title h1, .border-title h2, .border-title h3, .border-title h4, .border-title h5, .border-title h6 { text-transform:uppercase; padding:0px 0px 0px; margin-bottom:5px; display:inline-block; *display:inline; *zoom:1; }
	.border-title h1 span, .border-title h2 span, .border-title h3 span, .border-title h4 span, .border-title h5 span, .border-title h6 span { border-left:6px solid transparent; border-right:6px solid transparent; left:0; *left:49%; right:0; width:0; margin:auto; bottom:10px; position:absolute; }
	
	/*----*****---- << Transition >> ----*****----*/
	
	a, input[type=submit], button, input[type=button], .widget ul li, #secondary .widget h3.widgettitle, #secondary .widget h3.widgettitle a:before, #secondary h2.filtering, #secondary h2.filtering span:before, #top-bar .phone-no, .social-icons li img, /*#main-menu ul li,*/#main-menu > ul > li > ul:before, #main-menu ul ul li ul:before, .slider-next-arrow, .ico-content.type2 .icon, .carousel-arrows a span, .portfolio .portfolio-thumb img, .blog-entry .entry-thumb-meta .entry-meta span, .testimonial .author, .team .image img, .side-nav-container ul li a span, .partner-carousel li, .carousel-arrows a:hover span, .entry-body .read-more span, #header-wrapper #header, #bbar-wrapper, #header-wrapper, #header-wrapper #logo, #header-wrapper #main-menu, #header #searchform { -webkit-transition:all 300ms linear; -moz-transition:all 300ms linear; -o-transition:all 300ms linear; -ms-transition:all 300ms linear; transition:all 300ms linear; }
	
	/*----*****---- << Text Elements >> ----*****----*/
	
	a{ text-decoration:none; }
	a:hover { color:#333334; }
	a img{ border:none; }
	
	strong{ font-weight: bold; }
	em{ font-style: italic; }
	
	address { display:block; margin:10px 0px 20px; }
	abbr {  border-bottom:1px dotted #333334; cursor:help; }
	ins { background:#FFF9C0; color:#333334; }
	sub, sup { font-size:75%; line-height:0; position:relative; vertical-align:baseline; }
	sub { bottom: -3px; }
	sup { top: -5px; }	
	
	p { line-height:24px; margin-bottom:10px; }	
	ul, ol, pre, code{ margin-bottom:20px; }
	
	ul{ list-style-type:square; list-style-position:inside; }
	ul li { padding-bottom:10px; }
	ul li ul { list-style-type:disc; padding-left:20px; margin:10px 0px 0px; }
	ul ul ul { margin-bottom:0px; list-style-type:circle; }
	
	ol{ list-style-type:decimal; list-style-position:outside; padding-left:20px; padding-top:10px; }
	ol li { padding-bottom:10px; }
	ol li ol { margin-bottom:0px; list-style-type:lower-alpha; }
	ol ol ol { margin-bottom:0px; list-style-type:lower-roman; }	
	
	blockquote{ line-height:22px; font-style:italic; font-size:16px; padding:3px 0px 0px 0px; margin:10px 0px 30px; float:left; }
	blockquote span { background-color:#e6e2d6; background-position:-354px -234px; width:70px; height:70px; float:left; margin:0px 10px 0px 0px; border-radius:70px; }
	blockquote p { margin-bottom:0px; }
	blockquote cite { float:right; margin:10px 0px 0px; font-size:14px; }
	
	blockquote.alignleft { margin-right:20px; text-align:left; width:30%; float:left; }
	blockquote.alignright { margin-left:20px; text-align:left; width:30%; float:right; }
	blockquote.aligncenter { width:100%; text-align:center; }
	
	pre, code{ border-left:3px solid #d9d9d9; background-color:#ededed; display:block; padding:10px; font-size:11px; font-family: monospace; line-height:20px; width:97.6%; overflow:auto; }
	
	hr{ background-color:#e6e2d6; border:none; height:1px; margin:30px 0; }
	
	/* due to IE <HR> margin bugs I had to made classed and apply them to div to achieve the effect of a <HR> */
	
	.hr{ background:url(images/splitter.png) repeat-x; height:10px; width:100%; clear:both; display:block; float:left; margin:40px 0px; position:relative; z-index:1; }
	.hr-border { border:4px double #D9D9D9; width:100%; clear:both; display:block; float:left; margin:50px 0px; position:relative; z-index:1; border-radius:5px; }
	.hr-invisible { float:left; width:100%; margin:40px 0px; display:block; clear:both; }
	.hr-invisible-small { float:left; width:100%; margin:20px 0px; display:block; clear:both; }
	.hr-invisible-very-small { float:left; width:100%; margin:10px 0px; display:block; clear:both; }
	
	.hr.top, .hr-border.top { width:97%; }
	.hr.top, .hr-border.top { background-position:right center; text-align:right; }
	.hr.top a, .hr-border.top a { color:#999589; background:transparent; font-size:11px; line-height:16px; padding-left:5px; position:absolute; right:-21px; top:-5px; }
	.hr-border.top a { top:-10px; right:-23px; }
	.hr.top a:hover, .hr-border.top a:hover { color:#333334; }
	
	.clear { float:none; clear:both; margin:0px; padding:0px; }
	.float-right { float:right; }
	.float-left { float:left; }
	.center { width:100%; text-align:center; }
	.hidden { display:none;}
	
	.post-edit-link { background:#e5e5e5; color:#5a5a5a; float:right; clear:both; margin:20px 0px 20px; line-height:24px; padding:0px 10px; font-size:12px; }
	.post-edit-link:hover { background:#4C4C4C; color:#ffffff; text-shadow:0px 1px 0px #0e4b6e; }	
	
	.page-link { float:left; clear:both; margin:0px; padding:0px; }
	.page-link a { background:#ededed; color:#333334; font-weight:bold; padding:7px 10px; float:left; margin-right:10px; }
	.page-link a span { background:none; color:#333334; padding:0px; margin:0px; }
	.page-link span { background:#333334; color:#ffffff; font-weight:bold; padding:7px 10px; float:left; margin-right:10px; }
	
	/*----*****---- << Tables >> ----*****----
	
	table{ border-collapse:separate; border-spacing:0; margin-bottom:20px; width:100%; clear:both; border:1px solid #dfdfdf; border-bottom:0px; border-right:0px;  }
	th{ background:#666667; color:#ffffff; border-bottom:5px solid #dfdfdf; border-right:1px solid #919191; padding:17px 15px; font-size:16px; line-height:normal; font-weight:bold; text-transform:uppercase; text-align:center; }
	td{ border-right:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; background:#f7f7f7; font-size:14px; line-height:normal; text-align:center; padding:13px 15px; }

	
	/*----*****---- << Definition Lists >> ----*****----*/
	
	dl { margin:0px 20px; }
	dl.gallery-item { margin:0px; }
	.gallery-caption { margin-bottom:10px; }
	.gallery-item img { border:10px solid #ededed !important; }
	dt { font-weight:bold; font-size:14px; margin-bottom:10px; }
	dd { margin-bottom:20px; line-height:20px; }	
		
	/*----*****---- << Forms >> ----*****----*/
	
	label{ font-size:14px; color:#2e2a2b; font-weight:bold; font-size:14px; }
	label span{ color:#333334; }
	label span.required { color:#ff0000; }

	fieldset{ border:1px solid #efefef; padding:15px; margin:0 0 20px 0; }
	legend{ font-weight: bold; }
	
	input[type="text"], input[type="password"], input[type="email"], input[type="url"], input[type="tel"], input[type="number"], input[type="range"], input[type="date"], textarea, input.text{ background:#ededed; border:1px solid #c4c4c4; color:#333334; padding:15px 2%; display:block; font-size:14px; margin:10px 0 10px; width:96%; }
	input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="tel"]:focus, input[type="number"]:focus, input[type="range"]:focus, input[type="date"]:focus, textarea:focus, input.text:focus { border-color:#a1a1a1; }
	
	textarea { height:190px; overflow:auto; }
	select{ background:#ededed; border:1px solid #c4c4c4; padding:10px; margin:10px 0 10px; display:block; max-width:100%; }
	select option { background:#ffffff; }
	
	input[type=submit], button, input[type=button] { background:url(images/btn-small-gradient.png) repeat-x; border:none; color:#ff00ff; text-transform:uppercase; font-weight:bold; margin:10px 0px 0px; font-size:14px; padding:11px 20px; float:right; cursor:pointer; }	
	//input[type=submit]:hover, button:hover, input[type=button]:hover { background-color:#000000; }
	
	/*#searchform input[type="text"] { border:none; text-transform:uppercase; color:#aaaaaa; font-size:12px; width:260px; }
	*/
	#primary input[type="submit"] { float:left; }
	
	/*----*****---- << Images >> ----*****----*/
	
	#primary img { max-width:100%; }
	
	.post-content input[type="submit"] { float:none; }
	
	.wp-caption { background:#ededed; border:1px solid #d9d9d9; margin-bottom:10px; margin-top:10px; max-width:96%; padding:5px 7px 7px 5px; text-align:center; }
	.wp-caption img { display:block; margin: 0 auto; padding:6px; max-width:98%; }
	.wp-caption .wp-caption-text { text-align:center; padding-top:0px; margin:0px; }
	
	img.size-auto, img.size-large, img.size-full, img.size-medium { max-width:99.6%; height: auto; }
	.alignleft, img.alignleft { display: inline; float: left; margin-right: 20px; }
	.alignright, img.alignright { display: inline; float: right; margin-left: 20px; }
	.aligncenter, img.aligncenter { clear: both; display: block; margin-left: auto; margin-right: auto; text-align:center; }
	.alignleft, .alignright, .aligncenter, .alignnone, img.alignleft, img.alignright, img.aligncenter { margin-bottom:20px; }
	
	/*----*****---- << Columns >> ----*****----*/
	
	.column { margin:0px 2% 0px 0px; float:left; min-height:1px; position:relative; }
	.column.last { margin-right:0px; }	
	
	.one-column { width:100%; }
	.column.one-column { margin-right:0px; }
	
	.one-fourth { width:23.4%; }
	.one-half { width:48.9%; }
	.one-third { width:31.9%; }
	.three-fourth { width:74.5%; }	
	.two-third { width:65.8%; }
	
	.one-fifth { width:18.3%; }
	.four-fifth { width:79.6%; }
	.three-fifth { width:59.2%; }
	.two-fifth { width:38.8%; }
	
	.one-sixth { width:15%; }
	.two-sixth { width:30%; }
	.three-sixth { width:45%; }
	.four-sixth { width:60%; }
	.five-sixth { width:75%; }		
	
	.column img { max-width:100%; height:auto; }
	
	.one-half iframe, .one-third iframe, .one-fourth iframe, .three-fourth iframe, .two-third iframe, iframe { max-width:100%; }
	embed, iframe, object, video { max-width:100%; }
	
	.column.no-space { margin-right:1px; }
	.column.no-space.one-fourth { width:24.8%; } 	
	.column.no-space.one-third { width:33.2%; }	
	.column.no-space.one-half { width:49.8%; }
	.column.no-space.one-fifth { width:19.8%; }
	.column.no-space.one-sixth { width:16.5%; }
	
	.column.no-space.three-fourth { width:74.9%; }
	.column.no-space.two-third { width:66.5%; }		
	.column.no-space.four-fifth { width:79.9%; }
	.column.no-space.three-fifth { width:60%; }
	.column.no-space.two-fifth { width:40%; }		
	.column.no-space.two-sixth { width:33.4%; }
	.column.no-space.three-sixth { width:50%; }
	.column.no-space.four-sixth { width:66.6%; }
	.column.no-space.five-sixth { width:83.2%; }
	
	/*----*****---- << Widgets >> ----*****----*/
	
	.widget { float:left; width:100%; padding:0px 0px 40px; margin:0px; }
	.widget h3.widgettitle { font-size:16px; padding-bottom:10px; }
	
	.widget ul { float:left; width:100%; margin:0px; padding:0px; }
	.widget ul li { float:left; display:block; clear:both; width:100%; font-size:16px; font-weight:bold; padding-bottom:0px; }
	.widget ul li a { color:#333334; line-height:20px; padding:13px 25px 15px 25px; display:block; position:relative; background:url(images/thin-border.png) bottom repeat-x; }
	
	
	.widget ul ul { margin-top:10px; margin-left:20px; }
	.widget ul ul li { width:90%; }
	
	.widget.widget_archive ul li { position:relative; }
	
	.widget_categories ul, .widget.widget_archive ul, .widget.widget_nav_menu ul, .widget.widget_meta ul { margin-top:-12px; }
	.widget_categories ul li { position:relative; float:none; display:block; margin:0px 0px 10px; padding:0px; margin:0px; }
	.widget_categories ul li a { padding:13px 25px 15px 25px; display:block; background:url(images/thin-border.png) bottom repeat-x; }
	.widget_categories ul li a span,  #secondary .widget_product_categories ul li a span, .widget.widget_archive ul li a span { position:absolute; right:10px; }
	#secondary .widget_categories ul li a:before, .widget_categories ul li a:before { font-family:FontAwesome; font-style:normal; font-weight:normal; text-decoration:inherit; font-size:16px; position:absolute; top:14px; left:0px; content:"\f058"; }
	
	.widget form { margin:15px 0px 0px; float:left; clear:both; width:100%; }
	.widget input[type="email"] { width:90.5%; }
	
	.widget.tweetbox ul.tweet_list { list-style-type:none; }
	.widget.tweetbox ul.tweet_list li { font-size:14px; line-height:20px; }
	.widget.tweetbox ul.tweet_list li a:hover { color:#333334; }
	.widget.tweetbox .tweet-thumb { float:left; margin:5px 10px 10px 0px; }
	
	.widget.widget_recent_entries ul { list-style-type:none; }
	.widget.widget_recent_entries h4 { font-size:18px; line-height:22px; font-weight:bold; text-transform:none; }
	
	.widget.widget_text { line-height:24px; }

	
	.widget.widget_tag_cloud .tagcloud a, .widget.widget_product_tag_cloud a { font-size:14px !important; line-height:36px; color:#333334; padding:0px 15px; background:#ededed; margin:0px 10px 10px 0px; float:left; border-bottom:2px solid #d9d9d9; position:relative; }
	.widget.widget_tag_cloud .tagcloud a:after, .widget.widget_product_tag_cloud a:after { border-bottom:1px solid #ffffff; position:absolute; bottom:0px; left:0px; content:''; width:100%; }
	.widget.widget_tag_cloud .tagcloud a:hover, .widget.widget_product_tag_cloud a:hover { color:#ffffff; }
	
	.recent-posts-widget ul li a, .recent-portfolio-widget ul li a { padding:0px; background:none; }
	#secondary .widget .recent-posts-widget ul li a:before, #secondary .recent-portfolio-widget ul li a:before { content:''; }
	.recent-posts-widget ul li a.thumb, .recent-portfolio-widget ul li a.thumb { padding:0px; clear:both; float:left; display:block; position:relative; margin-bottom:15px; margin-right:10px; background:none; }
	.recent-posts-widget ul li a.thumb img, .recent-portfolio-widget ul li a.thumb img { display:block; } 
	.recent-posts-widget ul li a.thumb:before, #secondary .widget .recent-posts-widget ul li a.thumb:before, .recent-portfolio-widget ul li a.thumb:before, #secondary .widget        .recent-portfolio-widget ul li a.thumb:before { display:block; content:''; position:absolute; left:0px; top:0px; width:100%; height:100%; -moz-box-shadow:inset 0px 0px 0px 5px rgba(255,255,255,0.7); -webkit-box-shadow:inset 0px 0px 0px 5px rgba(255,255,255,0.7); box-shadow:inset 0px 0px 0px 5px rgba(255,255,255,0.7); -webkit-transition: all 0.4s ease-in-out; -moz-transition: all 0.4s ease-in-out; -o-transition: all 0.4s ease-in-out; -ms-transition: all 0.4s ease-in-out; transition: all 0.4s ease-in-out; }
	.recent-posts-widget ul li h6, .recent-portfolio-widget ul li h6 { font-weight:bold; font-size:14px; margin-bottom:5px; }
	.recent-posts-widget ul li p, .recent-portfolio-widget ul li p { font-size:14px; font-weight:normal; }
	
	#secondary .widget .recent-portfolio-widget ul li a:before { content:""; }
	
	.recent-posts-widget ul li:hover a.thumb:before, #secondary .widget .recent-posts-widget ul li:hover a.thumb:before, .recent-portfolio-widget ul li:hover a.thumb:before, #secondary .widget .recent-portfolio-widget ul li:hover a.thumb:before { -moz-box-shadow:inset 0px 0px 0px 5px rgba(255,255,255,0.4); -webkit-box-shadow:inset 0px 0px 0px 5px rgba(255,255,255,0.4); box-shadow:inset 0px 0px 0px 5px rgba(255,255,255,0.4); }
	
	.widget.flickrbox .flickr-widget div { float:left; max-width:75px; margin:0px 7px 2px 0px; }
	.widget.flickrbox .flickr-widget div img { transition: opacity .5s ease-in-out; -moz-transition: opacity .5s ease-in-out; -webkit-transition: opacity .5s ease-in-out; opacity:1; filter:alpha(opacity=100); }
	.widget.flickrbox .flickr-widget div img:hover { opacity:0.4; filter:alpha(opacity=40); }
	
	.widget.widget_calendar caption { padding-bottom:20px; font-size:18px; font-weight:bold; }
	
	.widget.widget_nav_menu ul li:before { content:""; display:inline; }
	
	#secondary .widget h3.widgettitle { margin-bottom:30px; background:#ededed; display:inline-block; width:100%; padding:0px; border-bottom:3px solid #d9d9d9; }
	#secondary .widget h3.widgettitle span { padding:15px 10px 15px 45px; display:block; border-bottom:1px solid #ffffff; position:relative; }
	#secondary .widget h3.widgettitle span:before { font-family:FontAwesome; font-style:normal; font-weight:normal; text-decoration:inherit; font-size:12px; line-height:22px; text-align:center; color:#ffffff; width:20px; height:20px;  position:absolute; top:15px; left:16px; content:"\f054"; border-radius:20px; }
	
	#secondary .widget ul li a { position:relative; }
	#secondary .widget ul li a:before { font-family:FontAwesome; font-style:normal; font-weight:normal; text-decoration:inherit; font-size:16px; position:absolute; top:14px; left:0px; content:"\f0a4"; }
	#secondary .widget_categories ul li a:before, #secondary .widget_product_categories ul li a:before { font-family:FontAwesome; font-style:normal; font-weight:normal; text-decoration:inherit; font-size:16px; position:absolute; top:14px; left:0px; content:"\f058"; }
	#secondary .widget ul ul { margin-top:0px; width:93.6%; }
	#secondary .widget ul ul li { width:100%; }
	#secondary .widget ul ul ul { width:90%; }
	
	#secondary .widget.widget_recent_comments li, #secondary .widget.widget_rss li { width:85%; position:relative; line-height:20px; padding:13px 25px 15px 25px; display:block; position:relative; background:url(images/thin-border.png) bottom repeat-x; }
	#secondary .widget.widget_recent_comments li:before, #secondary .widget.widget_rss li:before { font-family:FontAwesome; font-style:normal; font-weight:normal; text-decoration:inherit; font-size:16px; position:absolute; top:14px; left:0px; content:"\f0a4"; }
	#secondary .widget.widget_recent_comments ul li a, #secondary .widget.widget_rss li a { padding:0px; background:none; }
	#secondary .widget.widget_recent_comments ul li a:before, #secondary .widget.widget_rss li a:before { content:''; }
	#secondary .widget.widget_rss li { font-size:16px; }
	#secondary .widget.widget_rss li cite { font-weight:normal; font-size:14px; }
	#secondary .widget.widget_rss li .rssSummary { font-size:14px; font-weight:normal; }
	#secondary .widget.widget_rss li .rss-date { font-size:12px; margin:5px 0px; }
	.widget.widget_rss h3.widgettitle img { display:none; }
	
	#secondary .widget .tweet_list li { position:relative; float:left; display:block; border:0px; padding-left:30px; padding-bottom:25px; width:91%; }
	#secondary .widget .tweet_list li:before { font-family:FontAwesome; font-style:normal; font-weight:normal; text-decoration:inherit; position:absolute; left:0px; content:"\f099"; font-size:18px; top:5px; }
	#secondary .widget .tweet_list li a:before { content:''; }
	#secondary .widget .tweet_list li a { padding:0px; background:none; display:inline; }
	#secondary .widget.tweetbox ul.tweet_list li a:hover { color:#333334; }
	
	#secondary .widget .social-icons { margin:20px 0px 0px; }
	#secondary .widget .social-icons li a:before { content:''; }
	#secondary .widget .social-icons li a { background:none; display:inline; padding:0px; position:static; }
	#secondary .widget .social-icons li { width:29px; clear:none; }
	
	/*#secondary .widget #searchform { margin:0px; }
	//#secondary .widget #searchform input[type="text"] { display:inline-block; width:242px; }
	//#secondary .widget #searchform input[type="submit"] { padding:13px 20px; }
	*/
	
	#secondary input[type="text"] { width:90.7%; }
	#secondary select { width:100%; }
	
	#secondary .widget.flickrbox .flickr-widget div { margin-bottom:6px; }
	
	#secondary h2.filtering { font-size:18px; margin-bottom:40px; background:#ededed; display:inline-block; width:100%; padding:0px; border-bottom:3px solid #d9d9d9; }
	#secondary h2.filtering span { padding:17px 45px 13px 15px; display:block; border-bottom:1px solid #ffffff; position:relative; }
	#secondary h2.filtering span:before { font-family:FontAwesome; font-style:normal; font-weight:normal; text-decoration:inherit; font-size:18px; line-height:32px; text-align:center; color:#ffffff; width:32px; height:32px;  position:absolute; top:12px; right:15px; content:"\f0b0"; border-radius:32px; }
	
	#secondary img { max-width:100%; }
	#secondary .wp-caption img { max-width:97%; }
	
	#slider-range { margin-top:20px; }
	#slider-range a:last-child { margin-left:-25px; }
	.price-range { margin-top:40px; } 
	.price-range label, .price-range input[type="text"] { width:auto; text-transform:uppercase; font-size:16px; line-height:18px; font-weight:bold; background:none; float:left; border:0px; padding:0px; margin:0px; clear:none; }
	.price-range .button { float:right; margin:-28px 0px 0px; }
	
	.recent-portfolio-widget li { display:block; clear:both; }
	
	#primary .tweet_list { width:100%; margin:0px; padding:0px; float:left; clear:both; }
	#primary .tweet_list .tweet-thumb { float:left; margin:0px 10px 10px 0px; }
	#primary .tweet_list li { float:left; clear:both; display:block; line-height:20px; width:100%; }
	#primary .tweet_list li .tweet-time { font-size:12px; color:#aaaaaa; }
	
	/*----*****---- << PIE >> ----*****----*/
	
	.ico-content.type1 .icon span, .product-overlay a, .product-overlay a span, h5.faq:before, .carousel-arrows a, .testimonial .author img, .testimonial .author, #secondary .widget h3.widgettitle a:before, .portfolio .image-overlay a, .portfolio .image-overlay a span, .team .social-icons li { behavior:url(PIE.htc); }
	
	.ico-content.type1 .icon span, .carousel-arrows a, .product-overlay a, .product-overlay a span, .portfolio .image-overlay a, .portfolio .image-overlay a span { position:relative\0/; z-index:1\0/; }
	
	.portfolio .image-overlay a.zoom, .portfolio .image-overlay a.link, ul.products li .product-thumb .product-overlay a { z-index:-1\0/; }
	.portfolio:hover .image-overlay a.zoom, .portfolio:hover .image-overlay a.link, ul.products li .product-thumb:hover .product-overlay a { z-index:1\0/; }
	
/*----*****---- << Layout >> ----*****----*/

	/*----*****---- << Container >> ----*****----*/

	.container { width:1060px; margin:0 auto; position:relative; }
	
	.boxed .wrapper { width:1120px; margin:0 auto 30px; background:#ffffff; display:table; box-shadow:0px 0px 30px rgba(0, 0, 0, .35); }
	
	/*----*****---- << Header >> ----*****----*/
	
	@media screen and (-webkit-min-device-pixel-ratio:0) {
		#header-wrapper { display:inline-table; }
		.is-sticky #header-wrapper { display:block; }
	}
	
	#header { width:100%; height:94px; margin:0px; padding:0px; float:left; border-bottom:5px solid #dddddd; background:#ffffff; position:relative; z-index:9999; }
	.is-sticky #header { height:60px; }
	.is-sticky #header #logo h2 { margin-top:15px; }	
	
	#header .container { height:94px; padding:0px 30px; }
	
	#header-sticky-wrapper { width:100%; }
	#header-wrapper { float:left; clear:both; margin:0px; padding:0px; width:100%; z-index:9999; }
	.boxed #header-wrapper { width:auto; }
	
	.is-sticky #header #main-menu > ul > li { padding:23px 0px; }
	.is-sticky #header #main-menu > ul > li:hover > a, .is-sticky #header #main-menu > ul > li.current_page_item > a, .is-sticky #header #main-menu > ul > li.current-menu-ancestor > a { padding:23px 18px; margin:-23px 0px; }
	.is-sticky #header #main-menu ul li ul { top:60px; }
	.is-sticky #header #main-menu ul li ul ul { top:0px; }
	
	.social-icons { float:right; margin:0px; padding:0px; }
	.social-icons li { position:relative; overflow:hidden; width:29px; height:29px; padding:0px; margin:0px 3px 5px; display:inline-block; *display:inline; zoom:1;  }
	.social-icons li img { bottom:0px; left:0px; position:absolute; } 
	.social-icons li img:first-child { bottom:-29px; }
	.social-icons li:hover img:first-child { bottom:0px; z-index:1;  }
	.social-icons li:hover img:last-child { bottom:-29px; }		
	
	#logo { float:left; display:inline; padding:0px; width:auto; height:94px; }
	#logo a { max-height:100%; }
	#logo a img { max-height:100%; width:auto; float:left; }
	#logo h2 { margin:35px 0px 0px; }
	#logo h2 a { font-size:24px; font-weight:700; color:#333334; }
	.is-sticky #logo { height:60px; }
	
	.is-sticky #main-menu ul li a { font-size:12px; }
	
	#main-menu { float:right; margin:0px; padding:0px; position:relative; z-index:100; }
	#main-menu ul { float:left; margin:0px 0px -5px; padding:0px; }
	#main-menu ul li { /*border-bottom:5px solid #dddddd;*/ margin:0px; padding:40px 0px; display:inline; float:left; position:relative; }
	#main-menu ul li a { display:block; padding:0px 18px; font-size:14px; font-weight:bold; color:#333334; text-transform:uppercase; transition: background 1s, color 1s, padding 0.5s, margin 0.5s; -moz-transition: background 1s, color 1s, padding 0.5s, margin 0.5s; -webkit-transition: background 1s, color 1s, padding 0.5s, margin 0.5s; -o-transition: background 1s, color 1s, padding 0.5s, margin 0.5s; }
	#main-menu ul li span.arrow { display:none; border-left:6px solid transparent; border-right:6px solid transparent; border-top:6px solid #333334; left:0; *left:48%; right:0; width:0; margin:auto; top:0; position:absolute; }
	
	#main-menu > ul > li.current_page_item span, #main-menu > ul > li.current-menu-ancestor span { display:block; }	
	#main-menu > ul > li:hover > a, #main-menu > ul > li.current_page_item > a, #main-menu > ul > li.current-menu-ancestor > a { padding:40px 18px; background:#ededed; position:relative; margin:-40px 0px; transition: background 1s, padding 0.5s, margin 0.5s; -moz-transition: background 1s, padding 0.5s, margin 0.5s; -webkit-transition: background 1s, padding 0.5s, margin 0.5s; -o-transition: background 1s, padding 0.5s, margin 0.5s;}		
	
	#main-menu > ul > li.hasSubmenu:hover { border-bottom:5px solid #dddddd; }
	
	#main-menu ul li ul { z-index:1; display:none; float:left; position:absolute; width:200px; top:94px; left:0px; background:url(images/sub-menu-bg.png) repeat; box-shadow:0px 5px 10px rgba(0, 0, 0, 0.25); -moz-box-shadow:0px 5px 10px rgba(0, 0, 0, 0.25); -webkit-box-shadow:0px 5px 10px rgba(0, 0, 0, 0.25); }
	#main-menu ul ul li { background:url(images/thin-border.png) bottom repeat-x; display:block; float:left; clear:both; padding:0px; border:0px; width:100%; }
	#main-menu ul ul li a { padding:16px 15px 15px; margin:0px; display:block; }
	#main-menu ul ul li:last-child { background:none; }
	
	#main-menu > ul > li > ul:before { border-left:6px solid transparent; border-right:6px solid transparent; content:""; height:0; left:15px; position:absolute; top:-11px; width:0; }
	
	#main-menu ul ul ul { left:200px; top:0px; }
	#main-menu ul ul li ul:before { border-top:6px solid transparent; border-bottom:6px solid transparent; left:-11px; top:18px; content:""; height:0; position:absolute; width:0; }	
	
	#main-menu ul ul li.current_page_item ul li a, #main-menu ul ul li.current-menu-ancestor ul li a { color:#333334; }
	
	/* Header Options */	
	#main-menu ul li span.menu-icon, .is-sticky .header2 #main-menu ul li span.menu-icon, #main-menu ul ul.sub-menu li span.menu-icon { display:none; font-size:16px; }	
	
	/* Header Style 2 */
	.header2 #main-menu ul li span.menu-icon { display:block; position:relative; left:0; right:0; margin:0 auto; top:-12px; width:20px; }
	.header2 #main-menu > ul > li.current_page_item > a, .header2 #main-menu > ul > li.current-menu-ancestor > a { height:14px; }	
	.header2 #main-menu > ul > li:hover > a, .header2 #main-menu > ul > li.current_page_item > a, .header2 #main-menu > ul > li.current-menu-ancestor > a { height:14px; }
	
	/* Header Style 3 */
	.header3 #logo { height:94px; }	
	#header.header3  { height:auto; }
	.header3 #primary-menu { clear:both; width:100%; display:block; background:#f5f5f5; border-top:1px solid #dddddd; }
	.header3 #main-menu { float:left; }
	
	.header3 #main-menu ul li span.arrow, .header4 #main-menu ul li span.arrow { display:none; }
	.header3 #main-menu ul li span.menu-icon, .header4 #main-menu ul li span.menu-icon { display:block; float:left; position:relative; top:-2px; margin:0px 5px 0px 0px; }
	.header3 #main-menu > ul > li:hover > a, .header3 #main-menu > ul > li.current_page_item > a, .header4 #main-menu > ul > li:hover > a, .header4 #main-menu > ul > li.current_page_item > a, .header3 #main-menu > ul > li.current-menu-ancestor > a, .header4 #main-menu > ul > li.current-menu-ancestor > a { margin:-25px 0px; padding:28px 18px; }
	.header3 #main-menu > ul > li > a, .header4 #main-menu > ul > li > a { padding:3px 18px; }
	.header3 #main-menu > ul > li, .header4 #main-menu > ul > li { padding:25px 0px; }
	#header.header3 #primary-menu .container, #header.header4 #primary-menu .container { height:70px; }
	.header3 #main-menu > ul > li > ul, .header4 #main-menu > ul > li > ul { top:70px; }
	
	/*#header #searchform { display:none; float:right; margin:25px 0px 0px; padding:15px 10px 10px 15px; background:#ededed; width:230px; height:19px; }
	//#header #searchform input[type="text"] { border:none; background:none; float:left; font-size:12px; color:#aaaaaa; font-family:'Lato', sans-serif; padding:0px; margin:0px 5px 0px 0px; width:208px; }
	//#header #searchform input[type="submit"] { background:url(images/search-ico.png) no-repeat; font-size:0; padding:0px; width:17px !important; height:17px; float:left; margin:0px; }
	*/
	#header.header3 { display:block; }
	
	.is-sticky #header.header3 .container, .is-sticky #header.header3 #logo, .is-sticky #header.header4 .container, .is-sticky #header.header4 #logo { height:60px; }
	/*.is-sticky #header.header3 #searchform { margin:11px 0px 0px; padding:11px 10px 6px 15px; } */
	.is-sticky #header.header3 #primary-menu .container, .is-sticky #header.header4 #primary-menu .container { height:50px; }
	.is-sticky #header.header3 #main-menu > ul > li, .is-sticky #header.header4 #main-menu > ul > li { height:20px; padding:15px 0px; }
	.is-sticky #header.header3 #main-menu > ul > li > a, .is-sticky #header.header4 #main-menu > ul > li > a { height:14px; }
	.is-sticky #header.header3 #main-menu > ul > li:hover > a, .is-sticky #header.header3 #main-menu > ul > li.current_page_item > a, .is-sticky #header.header4 #main-menu > ul > li:hover > a, .is-sticky #header.header4 #main-menu > ul > li.current_page_item > a, .is-sticky #header.header3 #main-menu > ul > li.current-menu-ancestor > a, .is-sticky #header.header4 #main-menu > ul > li.current-menu-ancestor > a { margin:-15px 0px; padding:18px; }
	.is-sticky #header.header3 #main-menu > ul > li > ul, .is-sticky #header.header4 #main-menu > ul > li > ul { top:50px; }
	.is-sticky #header.header3 #main-menu ul li ul ul, .is-sticky #header.header4 #main-menu ul li ul ul { top:0px; }
	
	/* Header Style 4 */
	.header4 #logo { height:94px; width:100%; text-align:center; float:none; display:inline-block; }	
	.header4 #logo a {  float:left; height:100%; position:relative; width:100%; }
	.header4 #logo a img { display:inline-block; position:absolute; left:0; right:0; float:left; margin:0 auto; }
	#header.header4  { height:auto; }
	.header4 #primary-menu { clear:both; width:100%; display:block; background:#f5f5f5; border-top:1px solid #dddddd; }
	.header4 #main-menu { float:left; }
	
	.header4 #main-menu, .header4 #main-menu > ul { width:100%; text-align:center; }
	.header4 #main-menu > ul > li { display:inline-block; *display:inline; zoom:1; float:none; }
	.header4 #main-menu ul ul li { text-align:left; }
	
	@media screen and (-webkit-min-device-pixel-ratio:0) {
	.header4 #main-menu > ul > li > a { -webkit-transition:none; -moz-transition:none; -o-transition:none; -ms-transition:none; transition:none; }
	}
	
	/*----*****---- << Responsive Menu >> ----*****----*/
	
	.mobile-menu { display:none; height:50px; background-color:#f3f3f3; color:#333334; background-image:url(images/responsive-nav-bg.png); background-position:center right; background-repeat: no-repeat; border:1px solid #d9d9d9; border-radius:0px; width:100%; margin:6px 0px 10px; padding:15px 10px 15px 5px; -webkit-appearance:none; -moz-appearance:none; appearance:none; cursor:pointer; }
	
	/*----*****---- << Main >> ----*****----*/
	
	#main { width:100%; margin:0px; padding:0px 0px 85px; float:left; }
	
	#primary { width:700px; margin:30px 0px 0px; padding:0px; float:left; }
	#primary.content-full-width { width:100%; }
	#primary.with-left-sidebar { float:right; }
	
	#secondary { width:340px; margin:30px 0px 0px 20px; float:left; padding:0px; }
	#secondary.left-sidebar { margin:30px 20px 0px 0px; }
	
		/*----*****---- << Home >> ----*****----*/
		
		#slider { width:100%; margin:0px; padding:0px; float:left; position:relative; }
		#slider .rev_slider_wrapper.fullwidthbanner-container { border-bottom:5px solid #dddddd; width:100%; }
		
		.intro-text { width:100%; margin:0px; padding:0px; float:left; }
		.intro-text.type1 { background:url(images/introtext-border-top.png) center top no-repeat; padding:40px 0px 0px; text-align:center; }
		.intro-text.type1 h4 { text-transform:uppercase; }
		.intro-text.type1 h4 span.highlight { color:#ffffff; padding:7px 15px; margin:0px 5px; }
		.intro-text.type1 h6 { text-transform:uppercase; color:#a0a0a1; background:url(images/intro-text-border-bottom.png) center bottom no-repeat; padding-bottom:37px; }
		
		.intro-text.type2, .intro-text.type3, .intro-text.type4 { background:#ededed; padding:30px 2.5%; width:95%; }
		.intro-text.type2 h4, .intro-text.type3 h4, .intro-text.type4 h4 { text-transform:uppercase; margin-bottom:5px; }
		.intro-text.type2 h5, .intro-text.type3 h5, .intro-text.type4 h5 { color:#a0a0a1; margin-bottom:0px; }		
		.intro-text.type2 a, .intro-text.type4 a { float:right; }
		
		.intro-text.type3 h4, .intro-text.type3 h5 { color:#ffffff; }
		.intro-text.type3 a { background:#ffffff url(images/btn-white-gradient.png) bottom repeat-x; color:#333334; float:right; }		
		
		.intro-text.type4 { width:94%; }
		
		.ico-content { width:100%; margin:0px; padding:0px; }
		.ico-content.type1 { text-align:center; }
		.ico-content.type1 .icon { width:100%; text-align:center;}
		.ico-content.type1 .icon span { display:inline-block; *display:inline; *zoom:1; margin-bottom:15px; background:#fafafa; border:10px solid #f0f0f0; font-size:60px; line-height:108px; color:#a5a5a5; width:108px; height:108px; border-radius:108px; -webkit-transition:all 300ms linear; -moz-transition:all 300ms linear; -o-transition:all 100ms linear; -ms-transition:all 300ms linear; transition:all 300ms linear;  }
		.ico-content.type1:hover .icon span { color:#ffffff; }
		.ico-content.type1 h5 { text-transform:uppercase; }
		.ico-content.type1:hover .icon span { -moz-transform: scale(1) rotate(360deg) translate(0px); -webkit-transform: scale(1) rotate(360deg) translate(0px); -o-transform: scale(1) rotate(360deg) translate(0px); transform: scale(1) rotate(360deg) translate(0px); }
		
		.ico-content.type2 { padding:0px 0px 30px 50px; position:relative; width:85%; }
		.ico-content.type2 .icon { position:absolute; left:0px; top:0px; }
		.ico-content.type2 .icon span { font-size:36px; }
		.ico-content.type2:hover .icon {  -webkit-transform: rotateY(360deg); -moz-transform: rotateY(360deg); -ms-transform: rotateY(360deg); -o-transform: rotateY(360deg); transform: rotateY(360deg); }
		
		.ico-content.type3 { padding:0px 0px 30px 70px; position:relative; width:70.5%; }
		.ico-content.type3 .icon { position:absolute; left:0px; top:0px; }
		.ico-content.type3 .icon span { display:inline-block; margin-bottom:15px; background:#fafafa; border:5px solid #f0f0f0; font-size:28px; line-height:46px; text-align:center; color:#a5a5a5; width:44px; height:44px; border-radius:44px; -webkit-transition:all 300ms linear; -moz-transition:all 300ms linear; -o-transition:all 100ms linear; -ms-transition:all 300ms linear; transition:all 300ms linear; }
		.ico-content.type3:hover .icon span { color:#ffffff; }
		.ico-content.type3:hover .icon span { -moz-transform: scale(1) rotate(360deg) translate(0px); -webkit-transform: scale(1) rotate(360deg) translate(0px); -o-transform: scale(1) rotate(360deg) translate(0px); transform: scale(1) rotate(360deg) translate(0px); }
		
		/*----*****---- << Breadcrumb >> ----*****----*/
			
		.breadcrumb-section { width:100%; margin:0px 0px 20px; padding:30px 0px 25px; float:left; clear:both; background:url(images/breadcrumb.jpg) repeat; border-bottom:5px solid #dddddd; }	
		.breadcrumb { float:left; margin:0px; padding:12px 0px 0px; width:100%; }
		.breadcrumb a { font-size:14px; text-transform:uppercase; float:left; line-height:30px; }
		.breadcrumb span { float:left; margin:7px 10px 0px; text-align:center; color:#ffffff; font-size:10px; line-height:16px; width:16px; height:16px; border-radius:16px; }
		.breadcrumb h1 { float:left; }
		
		/*----*****---- << Carousel >> ----*****----*/
		
		.product-carousel-wrapper { width:100%; float:left; clear:both; margin:0px; padding:0px; position:relative; }
		
		.carousel-arrows { position:absolute; top:-75px; right:0px; }
		.carousel-arrows a { display:inline-block; width:37px; height:37px; background:#e0e0e0; border-radius:37px; text-align:center; cursor:pointer; }
		.carousel-arrows a.product-prev-arrow, .carousel-arrows a.partner-prev-arrow, .carousel-arrows a.portfolio-prev-arrow { margin-right:5px; }
		.carousel-arrows a span { color:#adadad; font-size:18px; line-height:39px; display:inline-block; cursor:pointer; }
		.carousel-arrows a:hover { -moz-transform: scale(1.1) rotate(0deg) translate(0px); -webkit-transform: scale(1.1) rotate(0deg) translate(0px); -o-transform: scale(1.1) rotate(0deg) translate(0px); transform: scale(1.1) rotate(0deg) translate(0px); }
		.carousel-arrows a:hover span { color:#ffffff; -moz-transform: scale(1) rotate(360deg) translate(0px); -webkit-transform: scale(1) rotate(360deg) translate(0px); -o-transform: scale(1) rotate(360deg) translate(0px); transform: scale(1) rotate(360deg) translate(0px); }
		
		.carousel-arrows a.portfolio-next-arrow span, .carousel-arrows a.partner-next-arrow span, .carousel-arrows a.product-next-arrow span { margin-left:2px; cursor:pointer; }
		
		/*----*****---- << Portfolio >> ----*****----*/
		
		div.pp_overlay { z-index:10000; } 
		div.pp_pic_holder { z-index:99999; }
		
		.sorting-container { float:left; clear:both; margin:0px 0px 30px; padding:0px; width:100%; }
		.sorting-container a { font-size:14px; line-height:36px; color:#333334; padding:0px 15px; background:#ededed; margin:0px 10px 10px 0px; float:left; border-bottom:2px solid #d9d9d9; position:relative; }
		.sorting-container a:after { border-bottom:1px solid #ffffff; position:absolute; bottom:0px; left:0px; content:''; width:100%; }
		.sorting-container a:hover, .sorting-container a.active-sort { color:#ffffff; }
		
		.portfolio-container { width:100%; float:left; clear:both; }
		
		.portfolio-carousel-wrapper { width:100%; margin:0px; padding:0px; float:left; clear:both; position:relative; }
		.portfolio-carousel { width:100%; margin:0px; padding:0px; float:left; clear:both; }
		.portfolio-carousel li { display:inline; }
		.portfolio-carousel .portfolio { margin-top:0px; margin-bottom:0px; }
		
		.portfolio { width:100%; float:left; margin:10px 20px 10px 0px; border-bottom:3px solid #d9d9d9; padding:0px; -webkit-transition: all 0.4s ease-in-out; -moz-transition: all 0.4s ease-in-out; -o-transition: all 0.4s ease-in-out; -ms-transition: all 0.4s ease-in-out; transition: all 0.4s ease-in-out; }
		
		.portfolio.last { margin-right:0px; }
		
		.portfolio.three-column { width:340px; margin:6px; }
		.portfolio.three-column .portfolio-thumb, .portfolio.three-column .portfolio-thumb img { width:100%; height:230px; }
		.portfolio.two-column { width:520px; margin:5px; }
		.portfolio.two-column .portfolio-thumb, .portfolio.two-column .portfolio-thumb img { width:100%; height:350px; }
		.portfolio.four-column { width:250px; margin:7px; }
		.portfolio.four-column .portfolio-thumb, .portfolio.four-column .portfolio-thumb img { width:100%; height:170px; }
		
		.portfolio.three-column-with-sidebar { width:220px; margin:6px; }
		.portfolio.three-column-with-sidebar .portfolio-thumb, .portfolio.three-column-with-sidebar .portfolio-thumb img { width:100%; height:148px; }
		.portfolio.two-column-with-sidebar { width:340px; margin:5px; }
		.portfolio.two-column-with-sidebar .portfolio-thumb, .portfolio.two-column-with-sidebar .portfolio-thumb img { width:100%; height:230px; }
		.portfolio.four-column-with-sidebar { width:160px; margin:7px; }
		.portfolio.four-column-with-sidebar .portfolio-thumb, .portfolio.four-column-with-sidebar .portfolio-thumb img { width:100%; height:108px; }
		
		.portfolio.one-column, .portfolio.one-column-with-sidebar { width:100%; margin-bottom:30px; margin-right:0px; border:0px; }
		.portfolio.one-column .portfolio-thumb, .portfolio.one-column .portfolio-thumb img { width:520px; height:350px; }	
		.portfolio.one-column .portfolio-thumb, .portfolio.one-column-with-sidebar .portfolio-thumb { border-bottom:3px solid #d9d9d9; height:351px; margin-right:20px; }
		.portfolio.one-column .portfolio-thumb img, .portfolio.one-column-with-sidebar .portfolio-thumb img { margin-bottom:1px; }
		.portfolio.one-column .portfolio-detail, .portfolio.one-column-with-sidebar .portfolio-detail { float:left; background:none; text-align:left; width:49%; clear:none; padding:5px 0px 0px; margin-bottom:20px; }
		.portfolio.one-column-with-sidebar .portfolio-detail { width:48%; }
		.portfolio.one-column:hover .portfolio-detail, .portfolio.one-column-with-sidebar:hover .portfolio-detail { background:none; }
		.portfolio.one-column .portfolio-detail h5, .portfolio.one-column-with-sidebar .portfolio-detail h5 { font-size:18px; }
		.portfolio.one-column .portfolio-detail h5, .portfolio.one-column .portfolio-detail p, .portfolio.one-column-with-sidebar .portfolio-detail h5, .portfolio.one-column-with-sidebar .portfolio-detail p { padding:0px; }
		.portfolio.one-column:hover .portfolio-detail h5, .portfolio.one-column-with-sidebar:hover .portfolio-detail h5, .portfolio.one-column:hover .portfolio-detail h5 a, .portfolio.one-column-with-sidebar:hover .portfolio-detail h5 a, .portfolio.one-column-with-sidebar .portfolio-detail .portfolio-description p, .portfolio.one-column .portfolio-detail .portfolio-description p, .portfolio.one-column-with-sidebar:hover .portfolio-detail .portfolio-description p, .portfolio.one-column:hover .portfolio-detail .portfolio-description p { color:#333334; }
		.portfolio.one-column:hover .portfolio-detail p, .portfolio.one-column-with-sidebar:hover .portfolio-detail p { color:#919191; padding:0px; }
		
		.portfolio.one-column .image-overlay, .portfolio.one-column-with-sidebar .image-overlay { height:99.7%; }
		
		.portfolio.one-column-with-sidebar .portfolio-thumb, .portfolio.one-column-with-sidebar .portfolio-thumb img { width:340px; height:230px; }
		.portfolio.one-column-with-sidebar .portfolio-thumb { height:231px; }
		
		.portfolio-description { float:left; clear:both; margin:10px 0px 0px; }
		.portfolio-description .button { margin:15px 0px 0px; }
		
		.portfolio .portfolio-thumb:hover img { -moz-transform: scale(1.3) rotate(0deg) translate(0px); -webkit-transform: scale(1.3) rotate(0deg) translate(0px); -o-transform: scale(1.3) rotate(0deg) translate(0px); transform: scale(1.3) rotate(0deg) translate(0px); }
		
		.portfolio .portfolio-thumb { border-bottom:1px solid #ffffff; float:left; padding:0px; position:relative; overflow:hidden; }
		.portfolio .portfolio-detail { background:#ededed; border-bottom:1px solid #ffffff; padding:15px 0px; float:left; clear:both; width:100%; margin:0px 0px 1px; text-align:center; -webkit-transition: all 0.4s ease-in-out; -moz-transition: all 0.4s ease-in-out; -o-transition: all 0.4s ease-in-out; -ms-transition: all 0.4s ease-in-out; transition: all 0.4s ease-in-out; }
		.portfolio .portfolio-detail h5, .portfolio .portfolio-detail p { padding:0px 10px; margin:0px; -webkit-transition: all 0.4s ease-in-out; -moz-transition: all 0.4s ease-in-out; -o-transition: all 0.4s ease-in-out; -ms-transition: all 0.4s ease-in-out; transition: all 0.4s ease-in-out; }
		.portfolio .portfolio-detail p { color:#919191; }		
		
		.portfolio .image-overlay { transition: opacity .5s ease-in-out; -moz-transition: opacity .5s ease-in-out; -webkit-transition: opacity .5s ease-in-out; opacity:0; filter:alpha(opacity=0); background:url(images/transparent-bg.png) repeat; width:100%; height:100%; float:left; position:absolute; top:0px; left:0px; }
		.portfolio .image-overlay a { opacity:0; filter:alpha(opacity=0); text-align:center; background:url(images/transparent-bg2.png) repeat; padding:10px; position:absolute; display:inline-block; width:42px; height:42px; border-radius:42px; }
		.portfolio .image-overlay a span { color:#ffffff; font-size:18px; line-height:42px; width:42px; height:42px; border-radius:42px; display:inline-block; cursor:pointer; }
		
		.portfolio .image-overlay a.zoom { left:0px; }
		.portfolio .image-overlay a.link { right:0px; }
		
		.portfolio.three-column .image-overlay a, .portfolio.two-column-with-sidebar .image-overlay a, .portfolio.one-column-with-sidebar .image-overlay a  { top:37%; }
		.portfolio.three-column:hover a.zoom, .portfolio.two-column-with-sidebar:hover a.zoom, .portfolio.one-column-with-sidebar:hover a.zoom { left:30%; }
		.portfolio.three-column:hover .image-overlay a.link, .portfolio.two-column-with-sidebar:hover a.link, .portfolio.one-column-with-sidebar:hover a.link { right:30%; }
		.portfolio.two-column .image-overlay a, .portfolio.one-column .image-overlay a { top:41%; }
		.portfolio.two-column:hover a.zoom, .portfolio.one-column:hover a.zoom { left:37%; }
		.portfolio.two-column:hover .image-overlay a.link, .portfolio.one-column:hover .image-overlay a.link { right:37%; }
		.portfolio.four-column .image-overlay a { top:32%; }
		.portfolio.four-column:hover a.zoom { left:23%; }
		.portfolio.four-column:hover .image-overlay a.link { right:23%; }
		
		.portfolio.three-column-with-sidebar .image-overlay a  { top:30%; }
		.portfolio.three-column-with-sidebar:hover a.zoom { left:20%; }
		.portfolio.three-column-with-sidebar:hover a.link { right:20%; }
		.portfolio.four-column-with-sidebar .image-overlay a  { top:20%; }
		.portfolio.four-column-with-sidebar:hover a.zoom { left:9%; }
		.portfolio.four-column-with-sidebar:hover a.link { right:9%; }
		
		.portfolio.four-column-with-sidebar h5 { font-size:13px; margin-bottom:-5px; }
		.portfolio.four-column-with-sidebar h5 a { color:#FFFFFF; }
		.portfolio.four-column-with-sidebar p { font-size:12px; }
		.portfolio.four-column-with-sidebar .portfolio-detail { padding:10px 0px; }
		
		.portfolio:hover a.zoom, .portfolio:hover .image-overlay a.link { opacity:1; filter:alpha(opacity=100); }
		
		.portfolio:hover .portfolio-detail h5, .portfolio:hover .portfolio-detail h5 a { color:#ffffff; }
		.portfolio:hover .image-overlay { opacity:1; filter:alpha(opacity=100); transition: opacity .5s ease-in-out; -moz-transition: opacity .5s ease-in-out; -webkit-transition: opacity .5s ease-in-out; }		
		.portfolio .image-overlay a:hover { -moz-transform: scale(1.2) rotate(0deg) translate(0px); -webkit-transform: scale(1.2) rotate(0deg) translate(0px); -o-transform: scale(1.2) rotate(0deg) translate(0px); transform: scale(1.2) rotate(0deg) translate(0px); }
		
		
		.isotope-hidden { display:none !important; }
		
		.isotope,
		.isotope .isotope-item {
		  -webkit-transition-duration: 0.8s;
			 -moz-transition-duration: 0.8s;
			  -ms-transition-duration: 0.8s;
			   -o-transition-duration: 0.8s;
				  transition-duration: 0.8s;
		}
		
		.isotope {
		  -webkit-transition-property: height, width;
			 -moz-transition-property: height, width;
			  -ms-transition-property: height, width;
			   -o-transition-property: height, width;
				  transition-property: height, width;
		}
		
		.isotope .isotope-item {
		  -webkit-transition-property: -webkit-transform, opacity;
			 -moz-transition-property:    -moz-transform, opacity;
			  -ms-transition-property:     -ms-transform, opacity;
			   -o-transition-property:         top, left, opacity;
				  transition-property:         transform, opacity;
		}
		
		.isotope.no-transition,
		.isotope.no-transition .isotope-item,
		.isotope .isotope-item.no-transition {
		  -webkit-transition-duration: 0s;
			 -moz-transition-duration: 0s;
			  -ms-transition-duration: 0s;
			   -o-transition-duration: 0s;
				  transition-duration: 0s;
		}
		
		/* Portfolio Single */
		.portfolio-single { float:left; width:100%; padding:0px; margin:0px; }
		.portfolio-slider-container { float:left; width:100%; padding:0px; margin:0px 0px 20px; position:relative; }
		.two-third .portfolio-slider-container { margin-bottom:0px; }
		.portfolio-slider { float:left; width:100%; margin:0px; padding:0px; }
		.portfolio-slider li { width:100%; display:block; padding:0px; float:left; position:relative; margin-bottom:15px; margin-right:10px; background:none; }
		.portfolio-slider li img { display:block; height:auto !important; } 
		.portfolio-slider li:before { display:block; content:''; position:absolute; left:0px; top:0px; width:100%; height:100%; -moz-box-shadow:inset 0px 0px 0px 10px rgba(255,255,255,0.7); -webkit-box-shadow:inset 0px 0px 0px 10px rgba(255,255,255,0.7); box-shadow:inset 0px 0px 0px 10px rgba(255,255,255,0.7); -webkit-transition: all 0.4s ease-in-out; -moz-transition: all 0.4s ease-in-out; -o-transition: all 0.4s ease-in-out; -ms-transition: all 0.4s ease-in-out; transition: all 0.4s ease-in-out; }
		.portfolio-slider:hover li:before { -moz-box-shadow:inset 0px 0px 0px 10px rgba(255,255,255,0.4); -webkit-box-shadow:inset 0px 0px 0px 10px rgba(255,255,255,0.4); box-shadow:inset 0px 0px 0px 10px rgba(255,255,255,0.4); }
		
		
		.portfolio-slider-container .bx-controls-direction { width:100%; float:left; margin:0px; padding:0px; }
		.portfolio-slider-container .bx-controls-direction a { text-indent:-9999px; position:absolute; top:41%; z-index:9999; width:39px; height:72px; float:left; opacity:0.8; filter:alpha(opacity=80); }
		.portfolio-slider-container .bx-controls-direction a:hover { opacity:1; filter:alpha(opacity=100); }
		.portfolio-slider-container .bx-controls-direction a.bx-prev { left:10px; }
		.portfolio-slider-container .bx-controls-direction a.bx-next { right:10px; }	
		
		/*.portfolio-slider li iframe { position:relative; z-index:100; }*/
		
		.portfolio-single h3 { text-transform:none; margin-top:10px; }
		.portfolio-single h6 { color:#919191; font-weight:normal; margin:-10px 0px 20px; }
		.portfolio-share { float:left; clear:both; width:100%; margin:20px 0px 0px; }
		.portfolio-share .social-icons { float:left; }
		
		.right-gallery { float:right; margin-left:2%; margin-right:0px; }
		
		.post-nav-container { float:left; width:100%; margin:30px 0px 0px; padding:15px 0px; clear:both; border-bottom:1px dotted #888888; border-top:1px dotted #888888; }
		.post-nav-container a { font-weight:bold; }
		.post-nav-container a span { font-size:12px; font-weight:normal; color:#333334; font-style:italic; }
		.post-nav-container .post-prev-link { float:left; }
		.post-nav-container .post-next-link { float:right; }
		
		
		/*----*****---- << Pagination >> ----*****----*/
		
		.pagination { float:left; width:100%;  margin:20px 0px 10px; padding:0px; }
		.pagination ul { float:left; margin:0px; padding:0px; }
		.pagination ul li { float:left; display:inline; margin:0px; padding:0px; }
		.pagination ul li a, .pagination .next-post a, .pagination .prev-post a { font-size:14px; font-weight:bold; line-height:37px; color:#333334; padding:0px 15px; background:#ededed; margin:0px 10px 0px 0px; float:left; border-bottom:2px solid #d9d9d9; position:relative; }
		.pagination ul li a:after, .pagination .next-post a:after, .pagination .prev-post a:after { border-bottom:1px solid #ffffff; position:absolute; bottom:0px; left:0px; content:''; width:100%; }
		.pagination ul li.active-page { color:#ffffff; font-size:14px; font-weight:bold; line-height:37px; padding:0px 15px; margin:0px 10px 0px 0px; float:left; position:relative; }
		.pagination ul li.active-page:after { border-bottom:1px solid #ffffff; position:absolute; bottom:0px; left:0px; content:''; width:100%; }
		.pagination ul li a:hover, .pagination .next-post a:hover, .pagination .prev-post a:hover { color:#ffffff; }
		
		.pagination .next-post { float:left; margin-left:4px; padding:0px; }
		.pagination .prev-post { float:left; margin-right:4px; padding:0px; }
		
		
		/*----*****---- << Blog >> ----*****----*/
		
		.blog-entry { width:100%; margin:0px; padding:0px; float:left; }	
		
		.sticky { position:relative; }
		.sticky .featured-post, .featured-post { padding:0px; width:100%; font-size:16px; float:left; color:#333334; font-weight:bold; width:100%; text-align:center; text-transform:uppercase; margin-bottom:10px; background:url(images/splitter.png) left 4px repeat-x; }
		.sticky .featured-post span, .featured-post span { background:#ffffff; padding:0px 10px; }
		.sticky .blog-entry { margin-bottom:-26px; }
		
		.one-half .blog-entry .entry-thumb-meta, .one-column.blog-thumb .blog-entry .entry-thumb-meta { width:260px; }
		.one-half .entry-details { width:238px; }
		.one-third .blog-entry .entry-thumb-meta, .one-column.blog-fullwidth .blog-entry .entry-thumb-meta, .one-half.with-sidebar .blog-entry .entry-thumb-meta, .blog-single-entry .blog-entry .entry-thumb-meta { width:100%; margin:0px 0px 10px; }
		.one-third .entry-details, .one-column.blog-fullwidth .entry-details, .one-half.with-sidebar .entry-details, .blog-single-entry .entry-details { width:100%; }
		.one-column.with-sidebar.blog-thumb .entry-details { width:60%; }
		.one-column.blog-thumb .entry-details { width:73%; }
			
		.blog-entry .entry-thumb-meta img { max-width:100%; }
			
		.blog-entry .entry-thumb-meta { float:left; margin:0px 20px 0px 0px; position:relative; }
		.entry-details { float:left; margin:8px 0px 0px; padding:0px; }
		
		.blog-entry .entry-thumb-meta .entry-thumb { display:block; position:relative; }
		.blog-entry .entry-thumb-meta .entry-thumb img { display:block; height:auto; } 
		.blog-entry .entry-thumb-meta .entry-thumb a:before { display:block; content:''; position:absolute; width:100%; height:100%; -moz-box-shadow:inset 0px 0px 0px 10px rgba(255,255,255,0.7); -webkit-box-shadow:inset 0px 0px 0px 10px rgba(255,255,255,0.7); box-shadow:inset 0px 0px 0px 10px rgba(255,255,255,0.7); -webkit-transition: all 0.4s ease-in-out; -moz-transition: all 0.4s ease-in-out; -o-transition: all 0.4s ease-in-out; -ms-transition: all 0.4s ease-in-out; transition: all 0.4s ease-in-out; }
		
		.blog-entry .entry-thumb-meta .entry-meta { position:absolute; float:left; top:10px; left:10px; color:#ffffff; padding:0px 15px; height:40px; line-height:40px; }
		.blog-entry .entry-thumb-meta .entry-meta .rounded-bend { position:absolute; right:-17px; top:0px; width:12px; height:40px; }
		
		.blog-entry .entry-thumb-meta .entry-meta a, .blog-entry .entry-thumb-meta .entry-meta .date, .blog-entry .entry-thumb-meta .entry-meta, .blog-entry .entry-thumb-meta .entry-meta span, .blog-entry .entry-thumb-meta .entry-meta p { color:#ffffff; line-height:40px; float:left; }
		.blog-entry .entry-thumb-meta .entry-meta .date { margin-right:10px; }
		.blog-entry .entry-thumb-meta .entry-meta .date p { font-weight:bold; margin:0px; }
		.blog-entry .entry-thumb-meta .entry-meta span { margin-right:5px; }
		.blog-entry .entry-thumb-meta .entry-meta .comments { margin:0px 10px 0px 0px; }
		.blog-entry .entry-thumb-meta .entry-meta a:hover, .blog-entry .entry-thumb-meta .entry-meta a:hover span { color:#000000; }
		
		.entry-details h4 { margin-bottom:5px; }
		.entry-metadata { margin-bottom:10px; }
		.entry-metadata span { font-size:14px; color:#939393; }
		.entry-metadata div { margin-bottom:5px; clear:both; width:100%; } 
		.entry-metadata a { font-size:14px; color:#333334; }
		
		.entry-body .read-more, .entry-body .read-more span { color:#333334; font-style:italic; margin-top:4px; }
		
		.entry-body .read-more span { top:1px; position:relative; }
		
		.blog-entry .entry-thumb-meta:hover .entry-thumb a:before { -moz-box-shadow:inset 0px 0px 0px 10px rgba(255,255,255,0.4); -webkit-box-shadow:inset 0px 0px 0px 10px rgba(255,255,255,0.4); box-shadow:inset 0px 0px 0px 10px rgba(255,255,255,0.4); }
		
		.author-info { background:#EDEDED; display:block; padding:20px 20px 10px; clear:both; } 
		.author-info img { background:#ffffff; padding:5px; }

		
		/*----*****---- << Blog Comment Entries >> ----*****----*/	
		
		.commententries { width:100%; float:left; margin:10px 0px 0px; padding:0px; }
		ul.commentlist { float:left; margin:20px 0px 20px 0px; padding:0px 0px 20px 0px; list-style:none; border-top:0px; width:100%; }
		ul.commentlist li { display:block; float:none; list-style:none; border:none; margin:0px 0px 20px; padding:0px 0px 0px 100px; position:relative; clear:both; }
		ul.commentlist li ul.children { margin:10px 0px 10px; padding:0px; float:left; border:none; clear:both; width:100%; }
		ul.commentlist li .respond { margin-left:69px; }
		
		ul.commentlist li .comment { background:url(images/comment-bubble.png) left 38px no-repeat; margin:0px; padding:0px 0px 0px 25px; }
		ul.commentlist li .comment-details { position:relative; border-bottom:3px solid #d9d9d9; background:#ededed; padding:15px 20px 10px; margin:10px 0px 10px; }
		
		ul.commentlist li .comment-details:before { border-bottom:1px solid #FFFFFF; bottom:0px; content:''; left:0px; position:absolute; width:100%; }
		
		ul.commentlist li .comment-body { margin:15px 0px 0px; } 
		ul.commentlist li .comment-body p { line-height:20px; }
		
		ul.commentlist li .comment-author { left:0px; top:0px; position:absolute; }
		ul.commentlist li .comment-author img { border:5px solid #e5e5e5; max-width:88px; max-height:88px; float:left; margin:0px; -moz-transition:all 1s ease; -webkit-transition:all 1s ease; -o-transition:all 1s ease; transition:all 1s ease; border-radius:88px; }
		ul.commentlist li .comment-author img:hover { -moz-transform: scale(1.05) rotate(20deg) translate(2px); -webkit-transform: scale(1.05) rotate(20deg) translate(2px); -o-transform: scale(1.05) rotate(20deg) translate(2px); transform: scale(1.05) rotate(20deg) translate(2px); }
		ul.commentlist li .author-name { font-weight:bold; font-size:16px; padding-bottom:5px; }
		ul.commentlist li .author-name a { color:#333334; }
		
		ul.commentlist li .comment-details { display:block; }		
		ul.commentlist li .commentmetadata { font-size:12px; color:#8c8c8c; font-style:italic; text-decoration:none; }
		
		.bypostauthor { margin:0px; padding:0px; }
		
		ul.commentlist li .reply { margin:0px; position:absolute; top:0px; right:0px; }
		ul.commentlist li .reply a { font-weight:bold; color:#ffffff; padding:10px 15px; display:inline-block; }
		ul.commentlist li .reply a:hover { background:#333334; }
		
		#respond h3 { text-transform:uppercase; padding-bottom:20px; }
		#respond h3 small { font-size:14px; text-transform:none; }
		
		.content-full-width #respond textarea, .content-full-width #respond .one-column input[type="text"] { width:96.8%; }
		.content-full-width #respond input[type="text"], .content-full-width #respond input[type="email"] { width:94.4%; }
		
		/*----*****---- << Testimonials >> ----*****----*/
		
		.testimonial { width:100%; margin:0px 0px 15px; padding:0px; float:left; position:relative; }
		.testimonial .author { z-index:1; position:absolute; left:0px; top:0px; background:#e5e5e5; background:rgba(0, 0, 0, 0.1); padding:10px; float:left; width:118px; height:118px; border-radius:118px; }
		.testimonial .author img { width:118px; height:118px; border-radius:118px;  }
		.testimonial .author:hover { -moz-transform: scale(1.1) rotate(0deg) translate(0px); -webkit-transform: scale(1.1) rotate(0deg) translate(0px); -o-transform: scale(1.1) rotate(0deg) translate(0px); transform: scale(1.1) rotate(0deg) translate(0px); }
		.testimonial blockquote { margin-left:65px; padding:15px 25px 15px 120px; margin-top:14px; width:80%; }
		.testimonial blockquote:before { left:90px; top:15px; }
		
		/*----*****---- << Partner Carousel >> ----*****----*/
		.partner-carousel-wrapper { float:left; width:100%; margin:0px; padding:0px; position:relative; }
		.partner-carousel { float:left; width:100%; margin:0px; padding:0px; }
		.partner-carousel li { float:left; display:inline; padding:0px; margin:0px 10px; text-align:center; border:10px solid #ededed; } 
		.partner-carousel li a { display:inline-block; width:100%; height:100%; position:relative; }
        .partner-carousel li img { max-width:100%; margin:auto; position:absolute; left:0px; right:0px; top:0px; bottom:0px; max-height:100%; transition: opacity .5s ease-in-out; -moz-transition: opacity .5s ease-in-out; -webkit-transition: opacity .5s ease-in-out; opacity:0.5; filter:alpha(opacity=55); }
		.partner-carousel li:hover img { transition: opacity .5s ease-in-out; -moz-transition: opacity .5s ease-in-out; -webkit-transition: opacity .5s ease-in-out; opacity:1; filter:alpha(opacity=100); }
		
		/*----*****---- << Team >> ----*****----*/
		
		.team { background:#ededed; width:100%; float:left; margin:20px 0px 40px; padding:0px; text-align:center; }
		.team .image { width:100%; height:230px; overflow:hidden; }
		.team h4 { margin:10px 0px 0px; }
		.team h6 { color:#919191; font-weight:normal; margin:0px; }
		
		.team .social-icons { float:none; display:inline-block; text-align:center; position:relative; bottom:-17px; }
		.team .social-icons li { margin:0px; border:3px solid #ededed; border-radius:30px; }
		
		.team .image img:hover { -moz-transform: scale(1.2) rotate(0deg) translate(0px); -webkit-transform: scale(1.2) rotate(0deg) translate(0px); -o-transform: scale(1.2) rotate(0deg) translate(0px); transform: scale(1.2) rotate(0deg) translate(0px); }
		
		/*----*****---- << Page Slider >> ----*****----*/
		
		.page-slider-container { background:url(images/slider-shadow.png) center bottom no-repeat; float:left; width:100%; /*height:300px;*/ margin:0px; padding:0px 0px 25px; position:relative; }
		.page-slider { float:left; width:100%; margin:0px; padding:0px; }
		.page-slider li { display:block; width:100%; float:left; margin:0px; padding:0px; }
		.page-slider li img { max-width:100%; }
		
		.page-slider-container .bx-pager { position:absolute; right:15px; bottom:43px; z-index:100; }
		.page-slider-container .bx-pager .bx-pager-item { float:left; margin:0px 3px; }
		.page-slider-container .bx-pager .bx-pager-item a { background:#ffffff; width:12px; height:12px; border-radius:12px; font-size:0px; float:left; }
		.page-slider-container .bx-pager .bx-pager-item a.active { background:#333334; }
		
		/*----*****---- << 404 >> ----*****----*/
		
		.error-info { text-align:center; }
		.error-info h2 { font-size:30px; text-transform:none; margin-bottom:10px; }
		.error-info h2 span.error { font-size:120px; }
		.error-info h2 span { font-size:48px; }		
		.error-info h3 { font-size:24px; text-transform:none; }
		/*.error-info #searchform { margin:30px 0px 0px; display:inline-block; float:none; width:100%; }
		/*.error-info #searchform input[type="text"], .error-info #searchform input[type="submit"] { display:inline-block; float:none !important; margin:0px; }
		/*.error-info #searchform input[type="text"] { margin-right:-3px; }
		/*.error-info #searchform input[type="submit"] { padding:12px 15px; font-weight:bold; font-size:16px; }
		
		/*----*****---- << Contact >> ----*****----*/
		
		.grey-box { display:inline-block; background:#ededed; border-bottom:3px solid #d9d9d9; position:relative; margin:20px 0px 0px; padding:25px 8% 15px; width:84%; }
		.grey-box:before { content:''; position:absolute; bottom:0px; left:0px; width:100%; border-bottom:1px solid #ffffff; }
		.grey-box h4 { margin-top:25px; }
		.grey-box span { margin-right:5px; font-size:14px; }
		.working-hours { font-weight:bold; }
		.working-hours span { float:left; font-size:18px; margin-top:3px; margin-right:10px; padding-bottom:30px; }
		
		.contact-form { margin:25px 0px 0px; }
		.contact-form input[type="text"], .contact-form input[type="email"] { margin-bottom:20px;  }		
		
		.two-third .contact-form input[type="text"], .two-third .contact-form input[type="email"] { margin-bottom:20px;  }		
		.two-third .contact-form textarea { height:214px; }
		
		.fullwidth-map { width:100%; margin:-20px 0px 20px; padding:0px; float:left; clear:both; }		
		.mytheme-map { margin:0px; position:relative; width:100%; }	
			
		.mytheme-map img { max-width:none !important }		
		.mytheme-map { max-width:100%; }
		
		.failure { color:#ff0000; }
		.success { color:#7AA127; }
		
		/*----*****---- << Side Navigation >> ----*****----*/
		
		.side-nav-container { float:left; width:100%; margin:0px; padding:4px 0px 0px; background:url(images/sidenav-border.png) right top no-repeat; position:relative; }
		.side-nav-container ul { border-right:1px solid #d9d9d9; float:left; width:100%; margin:0px 0px 0px -1px; padding:0px; position:relative; }
		.side-nav-container ul:after { height:3px; background:url(images/sidenav-border.png) right bottom no-repeat; width:100%; position:absolute; content:''; right:-1px; bottom:-4px; }
		.side-nav-container ul li { display:block; margin:0px; padding:0px 0px 2px; background:url(images/sidenav-splitter.png) right bottom no-repeat; }
		.side-nav-container ul li:last-child { background:none; padding-bottom:0px; }
		.side-nav-container ul li:before { content:""; display:inline; }
		.side-nav-container ul li a { display:block; line-height:52px; font-weight:bold; color:#333334; border-right:4px solid #ececec; background:url(images/sidenav-bg.png) right repeat-y;  -webkit-transition:all 300ms linear; -moz-transition:all 500ms linear; -o-transition:all 500ms linear; -ms-transition:all 500ms linear; transition:all 500ms linear; }
		.side-nav-container ul li a:hover, .side-nav-container ul li.current_page_item a { background:url(images/sidenav-active.png) right repeat-y; }
		.side-nav-container ul li a span { background:#333334; border:3px solid #e2e2e2; width:25px; height:25px; line-height:25px; text-align:center; font-size:12px; color:#ffffff; margin:10px 10px 0px 0px; float:left; border-radius:25px; }
		.side-nav-container ul li a:hover span, .side-nav-container ul li.current_page_item a span { -moz-transform: scale(1) rotate(360deg) translate(0px); -webkit-transform: scale(1) rotate(360deg) translate(0px); -o-transform: scale(1) rotate(360deg) translate(0px); transform: scale(1) rotate(360deg) translate(0px); }
		
		/*----*****---- << Footer >> ----*****----*/
		
		#footer { float:left; width:100%; margin:0px; padding:0px; border-top:5px solid #dddddd; background:#333334; color:#989898; }
		
		#footer > .container { padding:30px 0px 0px; }
		
		#footer h1, #footer h2, #footer h3, #footer h4, #footer h5, #footer h6, #footer h1 a, #footer h2 a, #footer h3 a, #footer h4 a, #footer h5 a, #footer h6 a, #footer a:hover { color:#ffffff; }
		#footer p, #footer a, #footer span, #footer .widget .tweet_list li:before, #footer .widget ul li:before { color:#989898; line-height:24px; } 
		
		#footer .widget ul { float:left; width:100%; margin:0px; padding:0px; }
		#footer .widget ul li { width:94%; font-size:14px; font-weight:normal; color:#989898; display:block; position:relative; border-bottom:1px dotted #5a5a5a; padding:7px 0px 7px 15px; }
		#footer .widget ul li:before { content:"\f105"; font-family:FontAwesome; font-style:normal; font-weight:normal; text-decoration:inherit; font-size:16px; position:absolute; top:6px; left:0px; }
		#footer .widget ul li a { padding:0px; background:none; display:inline; }
		#footer .widget ul li:first-child { padding-top:0px; }
		#footer .widget ul li:first-child:before { top:0px; }
		
		#footer .widget ul ul { border-top:1px dotted #5a5a5a; margin-top:5px; padding-top:5px; }
		#footer .widget ul li:last-child { border:none; }
		
		#footer .tweets a { color:#e6e6e6; }
		
		#footer .widget { padding-bottom:30px; width:100%; float:left; }
		#footer .widget h3.widgettitle { margin-bottom:20px; font-size:18px; }
		
		#footer .widget .tweet_list li { position:relative; float:left; display:block; border:0px; padding-left:30px; }
		#footer .widget .tweet_list li:before { content:"\f099"; font-size:18px; top:12px;-webkit-transition:all 300ms linear; -moz-transition:all 300ms linear; -o-transition:all 300ms linear; -ms-transition:all 300ms linear; transition:all 300ms linear; }
		#footer .widget .tweet_list:hover li:before { color:#ffffff; }
	
		#footer .recent-posts-widget ul li, #footer .recent-portfolio-widget ul li { border-bottom:0px; padding:0px; }
		#footer .widget_categories ul li a { position:relative; display:block; }
		
		#footer .widget.widget_tag_cloud .tagcloud a { background:#212121; border-bottom-color:#212121; line-height:36px; }
		#footer .widget.widget_tag_cloud .tagcloud a:after { border-bottom-color:#333334; }
		
		#footer .widget .social-icons { margin:20px 0px 0px; }
		#footer .widget .social-icons li { display:inline; float:left; border:0px; padding:0px; margin:0px 5px 0px 0px; width:29px; clear:none; }
		#footer .widget .social-icons li:before { content:""; }
		#footer .widget .social-icons li a { position:static; }
		
		#footer .widget.widget_calendar caption { font-size:14px; }
		#footer .widget.widget_calendar th { padding:10px 9px; font-size:14px; color:#ffffff; }
		#footer .widget.widget_calendar td { padding:5px 9px; }
		
		#footer input[type="text"], #footer input[type="email"], #footer input[type="password"], #footer input.text, #footer textarea { width:87%; background:#252526; border-color:#474747; }
		#footer input[type=text]:focus, #footer input[type=email]:focus, #footer input[type=password]:focus, #footer input.text:focus, #footer textarea:focus { border-color:#505050; }
		#footer input[type="submit"]:hover, #footer .button:hover, #footer input[type="button"]:hover { background-color:#4B4B4B; }
		
		#footer select, #footer .wp-caption { color:#989898; background:#252526; border-color:#474747; width:100%; }
		
		#footer .wp-caption img { max-width:96%; }
		
		.copyright { background:#1f1f1f; width:100%; clear:both; padding:20px 0px; margin:0px; color:#6a6a6a; }
		.copyright p, .copyright div, .copyright a { color:#6a6a6a; margin-bottom:0px; }
		.copyright a:hover { color:#ffffff; }
		
		#footer .widget.widget_categories ul li a:before { content:""; }
		
		/* Bbar */
		#bbar-wrapper { width:100%; float:left; margin:0px; color:#787878; position:relative; z-index:99999; }
		#bbar-wrapper a { color:#787878; }
		#bbar-wrapper a:hover { color:#ffffff; }
		#bbar-wrapper .column { padding:5px 0px; }
		#bbar-wrapper .hr-invisible-small { margin:4px 0px; }
		#bbar-wrapper .social-icons li { margin-bottom:0px; }
		#bbar-wrapper .column.alignright { float:right; text-align:right; }
		#bbar-close, #bbar-open { position:absolute; right:10px; top:0px; cursor:pointer; }
		#bbar-body > img { max-width:80%; }
		
		/*----*****---- << Delicate Style Picker >> ----*****----*/
		
		#toTop { display:none; text-decoration:none; position:fixed; bottom:30px; right:30px; overflow:hidden; width:40px; height:40px; border:none; text-indent:100%; background:url(images/ui.totop.png) no-repeat left top; }	
		#toTopHover { background:url(images/ui.totop.png) no-repeat left -40px; width:40px; height:40px; display:block; overflow:hidden; float:left; opacity: 0; -moz-opacity: 0; filter:alpha(opacity=0); }	
		#toTop:active, #toTop:focus { outline:none;	}
						
		/*----*****---- << Delicate Style Picker >> ----*****----*/
		
		.delicate-style-picker-wrapper { position:fixed; z-index:99999; left:0px; top:150px; }
		
		#delicate-style-picker { background:#ffffff; width:225px; float:left; position:absolute; top:0px; z-index:1; margin:0px; padding:0px 0px 10px; text-align:center; box-shadow:0px 0px 10px rgba(0, 0, 0, 0.5); -moz-box-shadow:0px 0px 10px rgba(0, 0, 0, 0.5); -webkit-box-shadow:0px 0px 10px rgba(0, 0, 0, 0.5); }
		#delicate-style-picker h2 { background:url(images/style-picker/title-bg.jpg) repeat-x; font:normal 12px Tahoma, Geneva, sans-serif; text-transform:uppercase; line-height:48px; width:100%; color:#848484; margin:0px 0px 15px; padding:0px;  }
		#delicate-style-picker h3 { font:normal 12px Tahoma, Geneva, sans-serif; padding:0px 0px 10px; width:100%; color:#848484; margin:0px; text-transform:uppercase; }
		
		#delicate-style-picker ul { float:left; margin:0px; padding:0px; text-align:center; width:225px; }
		#delicate-style-picker ul li { display:inline-block; display:inline; list-style-type:none; padding:0px; margin:0px 0px 6px 0px; }
		#delicate-style-picker ul li a { background:#ffffff; border:1px solid #ffffff; padding:2px; display:inline-block; margin:0px; line-height:0; }
		#delicate-style-picker ul li a.selected, #delicate-style-picker ul li a:hover { border:1px solid #d7d7d7; }
		#delicate-style-picker ul li a img { border:1px solid #d7d7d7; }
		
		#delicate-style-picker .hr { background:url(images/style-picker/seperator.png) no-repeat; width:100%; height:25px; margin:-10px 0px 10px; float:left; }
		
		.style-picker-ico { position:absolute; top:25px; left:225px; }
		
		
/*----*****---- << Contact Form 7 >> ----*****----*/

.wpcf7-form-control-wrap { position:relative; }
.wpcf7-form span.wpcf7-not-valid-tip { background:#ffb0af; border:1px solid #ff7b79; color:#cc0000; padding:4px 10px; top:-45px; left:0px; }
.wpcf7-form span.wpcf7-not-valid-tip:before { position:absolute; background:url(images/error-arrow.png) top left no-repeat; top:-6px; left:14px; width:16px; height:6px; content:""; }

.wpcf7-form div.wpcf7-validation-errors, .wpcf7-form div.wpcf7-mail-sent-ok { margin-bottom:20px; margin-top:20px; clear:both; padding:15px 15px 15px 35px; float:left; }

.wpcf7-form div.wpcf7-validation-errors { background:#ffcccc; border:1px solid #ff9999; color:#d01313; position:relative; }
.wpcf7-form div.wpcf7-validation-errors:before, .wpcf7-form div.wpcf7-mail-sent-ok:before { top:13px; left:10px; font-family:FontAwesome; font-style:normal; font-weight:normal; text-decoration:inherit; font-size:20px; position:absolute; }		
.wpcf7-form div.wpcf7-validation-errors:before { content:"\f057"; color:#C54228; }

.wpcf7-form div.wpcf7-mail-sent-ok { background:#eafac0; border:1px solid #b1cf67; color:#7ba411; position:relative; }
.wpcf7-form div.wpcf7-mail-sent-ok:before { content:"\f058"; color:#75b632; }


#button {
 color: #fff;
 font-size: 16px;
 width: 135px;
 height: 90px;
 border: none;
 margin-left: 30px;
 padding: 0;
 background: #536878; 
 cursor:pointer;
 vertical-align: middle;
}
</style>

<?php	echo 'oi';#To load basic css
		load_mytheme_basic_css();
			
		#To Load responsive.css 
		set_mytheme_layout();
		
		do_action('load_head_styles_scripts');
		
		
		if(mytheme_option('integration', 'enable-header-code'))
			echo stripslashes(mytheme_option('integration', 'header-code'));
			
		#WordPress Default head hook
		wp_head(); ?>
</head>


        
        <!-- **Container** -->
        <div id="main-container" class="container">
		
<!--<?php
/*
 $query = mysql_query('SELECT * FROM controle_ECA');
 while($row = mysql_fetch_array($query))
 {
	$nome = $row['nome'];
	$codigo = $row['codigo'];
	$horas = $row['horas'];
	$fase = $row['fase'];
	$pre = $row['pre'];
	$pre2 = $row['pre2'];
	$opt = $row['opt'];

 }
*/
?>-->
	  
<script type="text/javascript">
	
/*
function desabButton() 
{	
	var x = document.getElementById("Curso").value;
    document.getElementById("demo").innerHTML = x;	
}

function habButton() 
{
	
	if (document.getElementById("escolha").disabled == true){
		document.getElementById("escolha").style.backgroundColor = "#12DB00";
	} else{
		document.getElementById("escolha").style.backgroundColor = "#CC0404";
	}
}

function mostrarDescricao(codigo, nome, cargaHor, ementa) {
	document.querySelector('.nomeMateria').innerHTML = codigo + " - " +nome;
	document.querySelector('.cargaHoraria').innerHTML = "Carga horária: "+cargaHor+" h/a";
	document.querySelector('.ementa').innerHTML = "Ementa: "+ementa;
}

function mostrarDescricao2() {

	document.querySelector('.nomeMateria').innerHTML = "sdasd";
	document.querySelector('.cargaHoraria').innerHTML = 'teste2';
	document.querySelector('.ementa').innerHTML = 'teste2';
}
*/

function loadJSON(callback) {
	var xobj = new XMLHttpRequest();
	xobj.overrideMimeType("application/json");
	xobj.open('GET', 'controle_ECA.json', true); // Replace 'my_data' with the path to your file
	xobj.onreadystatechange = function () {
		if (xobj.readyState == 4 && xobj.status == "200") {
			// Required use of an anonymous callback as .open will 
			// NOT return a value but simply returns undefined in asynchronous mode
            callback(xobj.responseText);
		}
	};
	xobj.send(null);  
}

function getHoras(disciplina){
	for (n = 0; n < actual_JSON2.length; n++) {
		if (actual_JSON2[n].codigo == disciplina){
			return actual_JSON2[n].horas;
		}
	}
	return 0;
}

function getNome(disciplina){
	var auxdisciplina = [];
	auxdisciplina.length = 0;
	//console.log(disciplina);
	for (w = 0; w < disciplina.length; w++) {
		for (n = 0; n < actual_JSON2.length; n++){
			if (actual_JSON2[n].codigo == disciplina[w]){
				 auxdisciplina.push(actual_JSON2[n].nome);
			}
		}	
	}
	return auxdisciplina;
}



function ativa(clickButton){
	
	// Mudar o botão clicado para o estado de materia feita
	// Veriricar se já não foi clicado antes o botão
	var posicao = disciplinasConcluidas.indexOf(clickButton.id);
	//var posicao2 = disciplinasLiberadas.indexOf(clickButton.id);
	if (posicao == -1 & (document.getElementById(clickButton.id).style.background == 'yellow')){
		// Se não existir
		//clickButton.style.background = "green";
		disciplinasConcluidas.push(clickButton.id);
		horasAulaCumpridas = horasAulaCumpridas + getHoras(clickButton.id);
	} else {
		// Se existir, desliga
		if(posicao != -1) {
			disciplinasConcluidas.splice(posicao, 1);
			horasAulaCumpridas = horasAulaCumpridas - getHoras(clickButton.id);
		}
	}

	
	// Liberar as materias que podem ser realizadas
	for (i = 0; i < actual_JSON2.length; i++) {
		var qtdpre = actual_JSON2[i].pre.length;
		var auxpre = qtdpre;
		for (j = 0; j < qtdpre; j++){
			for (k = 0; k < disciplinasConcluidas.length; k++) {
				if (actual_JSON2[i].pre[j] == disciplinasConcluidas[k]){
	    			auxpre--;
				} else if (Number(actual_JSON2[i].pre[j]) <= horasAulaCumpridas){
					// se não encontrar é porque é pre requisito de carga horaria
					auxpre--;
				}
			}
		}
		if (auxpre <= 0){
			// Concluiu todos os pre requisitos
			//document.getElementById(actual_JSON2[i].codigo).disabled = false;
			document.getElementById(actual_JSON2[i].codigo).style.background = "yellow";
			document.getElementById(actual_JSON2[i].codigo).style.color = "black";

			
			for (l = 0; l < disciplinasConcluidas.length; l++) {
				document.getElementById(disciplinasConcluidas[l]).style.background = "green";
				document.getElementById(disciplinasConcluidas[l]).style.color = "white";
			}
		} else {
			document.getElementById(actual_JSON2[i].codigo).style.background = "white";
			document.getElementById(actual_JSON2[i].codigo).style.color = "gray";
			if(disciplinasConcluidas.indexOf(actual_JSON2[i].codigo) != -1) {
				disciplinasConcluidas.splice(disciplinasConcluidas.indexOf(actual_JSON2[i].codigo), 1);
				horasAulaCumpridas = horasAulaCumpridas - getHoras(clickButton.id);
			}
		}
	}
	mostrarProximas(clickButton); //chama a funcao pra quando clicar em botao apagado e nao mexer o mouse;
	return 0;
}

function aposcheck(clickButton){
	//Funcao como o ativa, mas sem o mostrarProximas no final que daí não faz os botoes amarelos ficarem pintados.
	
	var posicao = disciplinasConcluidas.indexOf(clickButton.id);
	if (posicao == -1 & (document.getElementById(clickButton.id).style.background == 'yellow')){
		disciplinasConcluidas.push(clickButton.id);
		horasAulaCumpridas = horasAulaCumpridas + getHoras(clickButton.id);
	} else {
		if(posicao != -1) {
			disciplinasConcluidas.splice(posicao, 1);
			horasAulaCumpridas = horasAulaCumpridas - getHoras(clickButton.id);
		}
	}

	for (i = 0; i < actual_JSON2.length; i++) {
		var qtdpre = actual_JSON2[i].pre.length;
		var auxpre = qtdpre;
		for (j = 0; j < qtdpre; j++){
			for (k = 0; k < disciplinasConcluidas.length; k++) {
				if (actual_JSON2[i].pre[j] == disciplinasConcluidas[k]){
	    			auxpre--;
				} else if (Number(actual_JSON2[i].pre[j]) <= horasAulaCumpridas){
					auxpre--;
				}
			}
		}
		if (auxpre <= 0){
			document.getElementById(actual_JSON2[i].codigo).style.background = "yellow";
			document.getElementById(actual_JSON2[i].codigo).style.color = "black";

			
			for (l = 0; l < disciplinasConcluidas.length; l++) {
				document.getElementById(disciplinasConcluidas[l]).style.background = "green";
				document.getElementById(disciplinasConcluidas[l]).style.color = "white";
			}
		} else {
			document.getElementById(actual_JSON2[i].codigo).style.background = "white";
			document.getElementById(actual_JSON2[i].codigo).style.color = "gray";
			if(disciplinasConcluidas.indexOf(actual_JSON2[i].codigo) != -1) {
				disciplinasConcluidas.splice(disciplinasConcluidas.indexOf(actual_JSON2[i].codigo), 1);
				horasAulaCumpridas = horasAulaCumpridas - getHoras(clickButton.id);
			}
		}
	}
	return 0;
}



function checkfase(check){
	//Pegar fase
	// Tem que ver como chamar a funcao só quando marcar positivo e o que fazer quando marcar negativo, ta meio precario ainda mas as ideia é essa.
	var fase = check.id;
	fase = (fase.split("."));
	fase = fase[1];
	
	if (document.getElementById(check.id).checked == true){
		for (fi = 0; fi < actual_JSON2.length; fi++){
			if(actual_JSON2[fi].fase == fase){
				//console.log('Entrei');
				if(document.getElementById(actual_JSON2[fi].codigo).style.background == 'green'){
					
				}
				else if(document.getElementById(actual_JSON2[fi].codigo).style.background == 'white'){
					
				}
				else {
					aposcheck(document.getElementById(actual_JSON2[fi].codigo));
					}
			}
		}
	}
	else{
		for (fi = 0; fi < actual_JSON2.length; fi++){
			if(actual_JSON2[fi].fase == fase){
				//console.log('Entrei');
				if(document.getElementById(actual_JSON2[fi].codigo).style.background == 'yellow'){
					
				}
				else if(document.getElementById(actual_JSON2[fi].codigo).style.background == 'white'){
					
				}
				else {
					aposcheck(document.getElementById(actual_JSON2[fi].codigo));
				}
			}
		}	
	}
	
		
}

function mostrarProximas(mouseinButton){
	prereq.push(mouseinButton.id);
	for (i = 0; i < actual_JSON2.length; i++){
		var qtdpre = actual_JSON2[i].pre.length;
		var auxpre = qtdpre;	
		if (mouseinButton.id == actual_JSON2[i].codigo){
			if(qtdpre !=0){
				for (j = 0; j < qtdpre; j++){
					if(disciplinasConcluidas.indexOf(actual_JSON2[i].codigo) == -1){
						if(prereq.indexOf(actual_JSON2[i].pre[j]) == -1){
							if (isFinite(actual_JSON2[i].pre[j])){
								}
								else {
								prereq.push(actual_JSON2[i].pre[j]);
							}
						}
					}
					else {
						prereq.splice(prereq.indexOf(actual_JSON2[i].codigo),1)};
				}
				mostrarProximas3(prereq);
				return;
			}			
		}	
	}
	pinta(prereq);
	return;
}

function mostrarProximas3(prereq){
	for (v = 1; v < prereq.length; v++){
		for (db = 0; db < actual_JSON2.length; db++){
			if (prereq[v] == actual_JSON2[db].codigo){
				for (db1 = 0; db1 < actual_JSON2[db].pre.length; db1++){
					if(disciplinasConcluidas.indexOf(actual_JSON2[i].codigo) == -1){
						if(isFinite(actual_JSON2[db].pre[db1])){
							}
							else{
							prereq.push(actual_JSON2[db].pre[db1]);
						}
					}			
				}
			}
		}
	}
	pinta(prereq);
}



function pinta(prereq){
	tamprereq = prereq.length;
	for (t = 0; t < tamprereq; t++){
		if ((document.getElementById(prereq[t]).style.background) == "green"){
			document.getElementById(prereq[t]).style.color = "white";
		} else if((document.getElementById(prereq[t]).style.background) == "yellow"){
			document.getElementById(prereq[t]).style.background = "darkred";
			document.getElementById(prereq[t]).style.color = "white";
		} else if (document.getElementById(prereq[t]).style.background == "white"){
			document.getElementById(prereq[t]).style.background = "darkred";
			document.getElementById(prereq[t]).style.color = "white";
		}
	}
}


function volta(mouseoutButton){
	prereq.length = 0;
	ativa(document.getElementById('a1'));
}


function mostrarDisciplinas(){
	var aux = '';
	for (j = 1; j <= 11; j++){
		if (j!=11){
			aux = aux + '<input type="checkbox" id="FASE.'+j+'" value="on" onclick="checkfase(this);">'+j+' Fase&nbsp;&nbsp;';
			}
		else{
			aux = aux + 'Optativas<br><br>';
		}
		for (i = 0; i < actual_JSON2.length; i++) {
			if (actual_JSON2[i].fase == j){
				aux = aux + '<button name="'+actual_JSON2[i].nome+'" id="'+actual_JSON2[i].codigo+'" onclick="ativa(this);" onmouseover="mostrarProximas(this);" onmouseup="volta(this);" onmouseout="volta(this);" ondblclick="pinta(prereq);" >'+actual_JSON2[i].nome+'</button>';
			}
		}
		aux = aux + '<br><br>';
	}
	return aux;
}

	
</script>

<!--<?php
/*
$query = mysql_query('SELECT * FROM controle_ECA ORDER BY  `controle_ECA`.`fase` ASC');
$nLinhas = mysql_num_rows($query);
$nColunas = mysql_num_fields($query);
$nome = array();
$codigo = array();
$horas = array();
$fase = array();
$pre = array();
$pre2 = array();
$opt = array();
 while ($row = mysql_fetch_array($query, MYSQL_NUM))
{	
	array_push($nome, $row[1]);
	array_push($codigo, $row[0]);
	array_push($horas, $row[3]);
	array_push($fase, $row[2]);
	array_push($pre, $row[4]);
	array_push($pre2, $row[5]);
	array_push($opt, $row[6]);
}
//Cria uma array com a quantidade de materia em cada fase
for ($i=1; $i <= 10; $i++){
$arrNMateria[0] = 0;
$arrNMateria[$i] = mysql_result(mysql_query('SELECT COUNT( fase ) FROM  `controle_ECA` WHERE fase ='.$i.''),0);

}

$ArrNMateri = mysql_fetch_assoc(mysql_query('SELECT COUNT( fase ) FROM  `controle_ECA` WHERE fase ='.$i.''));
//Pega o numero de materias
$resultado = mysql_query('SELECT * FROM  `controle_ECA`');
$nMatTotal = mysql_num_rows($resultado)



*/?>-->


<br/>
<br/>	  
<p style="text-align:center;" > <center><h1> Controle Curricular </h1></center> </p>
<br/>
<br/>	 

<?php
	echo 'oi';
	echo '<div style="visibility: hidden" hidden=""><button id="a1" disabled=""></button></div>';
	?>
<!--
<p><h3> Escolha seu curso: </h3></p>
<table style="width:20%">
  <tr>
  <p id="demo"></p>
    <td align="center"> 
		<form  name=myform>
			<select id="Curso" name=mytextarea>
				<option name="DAS"value="DAS"> DAS </option>
				<option name="EMC" value="EMC"> EMC </option>
				<option name="EEL" value="EEL"> EEL </option>
			</select>
		</form> </td>
	<td align="left"> <button id="escolha" style="margin-left: 30px" onClick="desabButton()"> OK </button></td>
  </tr>
</table>



<table cellspacing="15px">
	<td>
	<table cellspacing="15px">
		<?php
		$pont = 0;
		for($i = 1; $i <= 10; $i++){
			echo'<tr> 
					<td valign="top" align="center"> <form action="">
						<input type="checkbox" name="fase1" value="fase1" onChange="habButton()"">'.$i.'ª fase<br> </form> 
					</td>';
			
			//Printa a "xª fase"
			if (($fase[$pont]) == 1){
				echo $fase[$pont];
				echo $opt[$pont];
				for($k = 0; $k < $arrNMateria[$i]; $k++){
					echo'<td align="center"> <button id="'.$codigo[$pont].'" style="margin-left: 10px" onClick="desabButton()" onmouseover="mostrarDescricao(\''.$codigo[$pont].'\',\''.$nome[$pont].'\',\''.$horas[$pont].'\',\''.$ementa[$pont].'\')">'.$codigo[$pont].'</button> </td>';
					$pont++;
				}
			} else {
				echo $fase[$pont];
				echo $opt[$pont];
				if(true){
					for($k = 0; $k < $arrNMateria[$i]; $k++){
						echo
						'<td align="center"> <button id="'.$codigo[$pont].'" style="margin-left: 10px" onClick="desabButton()" onmouseover="mostrarDescricao(\''.$codigo[$pont].'\',\''.$nome[$pont].'\',\''.$horas[$pont].'\',\''.$ementa[$pont].'\')">'.$codigo[$pont].'</button> </td>';
						$pont++;
					}
				}	
			}
				
			echo '</tr>';
				
		}
		?>
	</table>
	<td>
	<td width="5%">
		
	</td>
	<td style="width:40%">
		<table CELLPADDING="3" CELLSPACING="3">
			<td>
				<div class="nomeMateria"></div><p><p><div class="cargaHoraria"></div></p></p><p><p><div class="ementa"></div></p></p>
			</td>	
		</table>
	</td>
</table>
-->


<?php #Page Top Code Section
	  $mytheme_integration = $mytheme_options['integration'];
	  if(isset($mytheme_integration['enable-single-page-bottom-code']))	echo stripslashes($mytheme_integration['single-page-bottom-code']);
	  
	  get_footer();?>


	

	