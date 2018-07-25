<?php header("Content-type: text/css"); ?>
body {
	margin: 0px;
	padding: 0px;
	font-family: 'Oxygen';
	background: #fefefe;
}
#container {
	position: relative;
	background: #f5f5f5;
}
a {
	color: white;
	text-decoration: none;
}
#photo_cover {
	background-image: url(../images/skin/bg/header.jpg);
	background-repeat: no-repeat;
	background-position: center center;
	background-size: cover;
	background-attachment: fixed;
	border-bottom: 5px solid #b30b0b;
	width: 100%;
	height: 700px;
	position: relative;
}
#photo_cover .filter-trans {
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	background: rgba(0,0,0,.3);
	filter: blur(5px);
}
#ftop {
	position: fixed;
	width: 100%;
	height: 100px;
	box-shadow: 0px 0px 10px rgba(0,0,0,.5);
	top: 0px;
	left: 0px;
	background: rgba(26,78,216,.9);
	-webkit-transition: all .2s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	-ms-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}
#ftop .wrap {
	width: 960px;
	height: 100%;
	position: relative;
	margin: 0px auto;
}
#ftop a.logo {
	font-size: 30px;
	position: relative;
	top: 10px;
	-webkit-transition: all .2s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	-ms-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}
#ftop ul.nav {
	position: absolute;
	overflow: visible;
	height: 100%;
	top: 0px;
	right: 0px;
	margin: 0px;
	padding: 0px;
	list-style-type: none;
}
#ftop ul.nav>li {
	float: left;
	position: relative;
	-webkit-transition: all .2s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	-ms-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}
#ftop ul.nav>li>a {
	display: inline-block;
	box-sizing: border-box;
	padding: 40px 25px;
	font-size: 13px;
	height: 100px;
	-webkit-transition: all .2s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	-ms-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
	text-shadow: 0px 2px 5px rgba(0,0,0,.9);
}
#ftop ul.nav>li:hover>a {
	border-top: 5px solid #eec51f;
	color: #eec51f;
}
#ftop ul.sub {
	position: absolute;
	background: rgba(255,255,255,.95);
	border-radius: 5px 0px 5px 5px;
	width: 200px;
	top: 100px;
	right: 0px;
	list-style-type: none;
	box-shadow: 0px 0px 10px rgba(0,0,0,.75);
	margin: 0px;
	padding: 0px;
	display: none;
	opacity: 0;
	border: 1px solid rgba(0,0,0,.1);
	-webkit-transition: all .2s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	-ms-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}
#ftop ul.nav li:hover ul.sub {
	display: block;
	height: auto;
	opacity: 1;
}
#ftop ul.sub>li>a {
	display: block;
	color: #444;
	font-size: 12px;
	padding: 15px 10px;
	box-sizing: border-box;
	-webkit-transition: all .2s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	-ms-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}
#ftop ul.sub>li:not(:last-child)>a {
	border-bottom: 1px solid rgba(0,0,0,.3);
}
#ftop ul.sub>li>a:hover {
	padding-left: 20px;
	background: rgba(238,197,31,.6);
}

a.scroll-name {
	opacity: 0;
	cursor: pointer;
	position: absolute;
	top: -54px;
}

.div_cover {
	background-color: #005c6a;
	background-repeat: no-repeat;
	background-position: center center;
	background-size: cover;
	background-attachment: fixed;
	border-top: 5px solid #164ed7;
	border-bottom: 5px solid #b30b0b;
	width: 100%;
	height: 400px;
	position: relative;
	overflow: hidden;
}
.div_cover .photo_cover {
	background-color: #005c6a;
	-webkit-filter: blur(5px);
	background-repeat: no-repeat;
	background-position: center center;
	background-size: cover;
	background-attachment: fixed;
	width: 100%;
	height: 400px;
	position: absolute;
	top: 0px;
	left: 0px;
}
.div_cover .filter-trans {
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	background: rgba(238,197,31,.2);
}
.div_cover .wrap {
	width: 960px;
	position: relative;
	margin: 0px auto;
}
.div_cover .side-photo {
	width: 900px;
	height: 400px;
	background: transparent;
	position: absolute;
	right: 500px;
	top: 0px;
}
.div_cover .side-text {
	position: absolute;
	left: 50%;
	top: 40px;
	margin-left: 20px;
	width: 40%;
	height: 100px;
	color: rgba(255,255,255,.9);
	text-shadow: 0px 2px 3px rgba(0,0,0,.5);
}
.div_cover .side-text h1 {
	border-bottom: 2px dotted rgba(255,255,255,.3);
	padding-left: 20px;
	padding-bottom: 20px;
}
.div_cover .side-text a.button {
	border: 2px solid rgba(238,197,31,.8);
	color: #eec51f;
	padding: 10px;
	border-radius: 7px;
	-webkit-transition: all .2s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	-ms-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
	margin-left: 40px;
	margin-top: 20px;
	display: inline-block;
}
.div_cover .side-text a.button:hover {
	box-shadow: 0px 0px 10px rgba(255,255,255,.8);
	text-shadow: 0px 0px 10px rgba(255,255,255,.8);
}


.page {
	position: relative;
	width: 960px;
	margin: 0px auto;
	box-sizing: border-box;
	padding: 30px 0px;
	overflow: visible;
}
.page a.button {
	position: relative;
	top: 0px;
	background: #aa1616;
	color: white;
	padding: 15px;
	display: inline-block;
	text-shadow: 0px 2px 2px black;
	border-radius: 5px;
	border: 1px solid rgba(0,0,0,.2);
	box-sizing: border-box;
	box-shadow: 0px 4px 5px rgba(0,0,0,.4);
	-webkit-transition: all .2s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	-ms-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}
.page a.button:hover {
	top: 2px;
	box-shadow: 0px 2px 5px rgba(0,0,0,.4);
}
.page h1, .page h2, .page h3 {
	border-bottom: 1px solid #eec51f;
	padding-bottom: 10px;
	padding-left: 10px;
	padding-top: 20px;
	text-shadow: -2px 2px 1px rgba(0,0,0,.2);
	color: #121212;
	position: relative;
}
p {
	line-height: 200%;
	box-sizing: border-box;
	padding: 0px 40px;
}
.col2 {
	overflow: hidden;
}
.col2 .main-con {
	float: left;
	width: 700px;
}
.col2 .sb {
	float: left;
	width: 260px;
}
.col2>div {
	box-sizing: border-box;
	padding: 0px 20px;
}
.col2 h1, .col2 h2, .col2 h3 {
	font-size: 25px;
}

#footer {
	position: relative;
	width: 100%;
	overflow: hidden;
	background: #b81311;
}
#footer .wrap {
	padding: 30px 10px;
	width: 960px;
	height: auto;
	margin: 0px auto;
	position: relative;
	overflow: hidden;
}
#footer table {
	width: 100%;
	float: left;
	color: #e8e8e8;
	font-size: 11px;
}