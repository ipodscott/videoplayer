<html>
	<head>
	<link href="//vjs.zencdn.net/7.1.0/video-js.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">
	<script src="//vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
	<style type="text/css">
body {
	position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100vh;
    z-index: 999;
    background-color: #000;
    font-family: 'Lato', sans-serif;
    background-image: url(images/background.jpg);
	background-repeat: no-repeat;
	background-position: center center;
	background-size: cover;
}

.main-content{
	position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100vh;
    z-index: 999;
    }

.movie-box{
	top: 0px;
    left: 0px;
    display: table;
    width: 100%;
    height: 100vh;
    color: #fff;
    text-align: center;
}

.movie{
	display: table-cell;
    text-align: center;
    vertical-align: middle;
}

.vid-box {
position: relative;
    text-align: center;
 
}

.vid-box img {
    max-height: calc(100vh - 200px);
	max-width: calc(100vw - 80px);
    position: relative;
    margin: 0 auto;
    display: block
}

.vid-holder {
    display: inline-block;
    top: 0px;
    left: 0px;
    position: relative;
    margin: 0 auto;
    -webkit-box-shadow: 0 0 30px 0 #000000;
    box-shadow: 0 0 30px 0 #000000;
    border-style: solid;
    border-width: 1px;
    border-color: #333;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    background-image: url(images/eclipse.svg);
    background-position: center center;
    background-repeat: no-repeat;
    background-color: #000;
    background-size: 120px 120px;
}

.video-js, video, iframe, .wistia_embed {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%
}

.video-js { color: #999; }
.video-js .vjs-control-bar { background-color: rgba(0, 0, 0, 0.64); border-radius: 6px; width: calc(100% - 20px); margin: 10px; opacity: 0.1; transition: all 0.5s;}
.video-js .vjs-control-bar:hover{opacity: 1;}
.video-js .vjs-play-progress { background: #ff0000; -webkit-box-shadow:inset 0 0 5px 0 #000000; box-shadow:inset 0 0 5px 0 #000000;}

.wistia_responsive_wrapper {
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%
}

.title {
    display: block;
    position: absolute;
    top: -40px;
    left: 0;
    width: 100%;
    text-align: right;
    font-size: 24px;
    font-weight: 100;
    transition: all 0.5s;
    color: #ccc
}

.logo {
    display: block;
    position: absolute;
    right: 10px;
    top: 10px;
    width: 20%;
    opacity: .25;
    transition: all 0.5s;
    cursor: pointer
}

.logo img {
    float: right;
    width: 20%;
    height: auto
}

.logo:hover {
    opacity: 1
}

@media (max-width:720px) {
    .title {
        font-size: 18px;
        top: -30px
    }
}

@media (max-width:600px) {
    .title {
        font-size: 14px;
        top: -20px
    }
}

@media (max-height:530px) {
    .title {
        font-size: 18px;
        top: -30px
    }
}

@media (max-height:400px) {
    .title {
        font-size: 12px;
        top: -30px
    }
}

</style>
	</head>
	<body>
		<div class="main-content">
					<div class="movie-box">
						<div class="movie">
							<div class="vid-box">
								<div class="vid-holder">
								<?php if($x=&$_GET["res"] == "16x9"){ ?>
			  <img src="images/16x9_bg.png" />
			<?php }else if ($x=&$_GET["res"] == "stnd"){ ?>
			  <img src="images/standard_bg.png" />
			<?php }else if ($x=&$_GET["res"] == "pal"){ ?>
			  <img src="images/pal.png" />
			<?php }else if ($x=&$_GET["res"] == "wid"){ ?>
			  <img src="images/bg_widescreen.gif" />
			<?php }else if ($x=&$_GET["res"] == "wis"){ ?>
			  <img src="images/wistia_bg.gif" />
			<?php }else if ($x=&$_GET["res"] == "pano"){ ?>
			  <img src="images/pano.gif" />
			<?php }else{ ?>
			  <img src="images/16x9_bg.png" />
			<?php } ?>
			
			<?php if($x=&$_GET["vt"] == "yt"){ ?>
			  <iframe src="https://www.youtube.com/embed/<?php echo htmlspecialchars($_GET["u"]);?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<?php }else if ($x=&$_GET["vt"] == "vim"){ ?>
			  <iframe src="https://player.vimeo.com/video/<?php echo htmlspecialchars($_GET["u"]);?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			<?php }else if ($x=&$_GET["vt"] == "wis"){ ?>
				
				<script src="https://fast.wistia.com/embed/medias/<?php echo htmlspecialchars($_GET["u"]);?>.jsonp" async></script>
				<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
				
					<div class="wistia_responsive_wrapper">
					<div class="wistia_embed wistia_async_<?php echo htmlspecialchars($_GET["u"]);?> videoFoam=true">&nbsp;</div>
				</div>
					
			<?php }else if ($x=&$_GET["vt"] == "tn"){ ?>
			
				<video id="my-video" class="video-js vjs-big-play-centered" controls preload="auto" data-setup="{}">
			    <source src="//tinyurl.com/<?php echo htmlspecialchars($_GET["u"]);?>" type='video/mp4'>
			    
			    <p class="vjs-no-js">
			      To view this video please enable JavaScript, and consider upgrading to a web browser that
			      <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
			    </p>
			  	</video>	
				
			
			<?php }else if ($x=&$_GET["vt"] == "bt"){ ?>
				
				<video id="my-video" class="video-js vjs-big-play-centered" controls preload="auto" data-setup="{}">
			    <source src="//bit.ly/	<?php echo htmlspecialchars($_GET["u"]);?>" type='video/mp4'>
			    
			    <p class="vjs-no-js">
			      To view this video please enable JavaScript, and consider upgrading to a web browser that
			      <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
			    </p>
			  	</video>
				
							
			<?php }else{ ?>
			
			
				<video id="my-video" class="video-js vjs-big-play-centered" controls preload="auto" data-setup="{}">
			    <source src="<?php echo htmlspecialchars($_GET["u"]);?>" type='video/mp4'>
			    
			    <p class="vjs-no-js">
			      To view this video please enable JavaScript, and consider upgrading to a web browser that
			      <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
			    </p>
			  	</video>
			  	
			 <?php } ?>
				
			
			
			<?php if($x=&$_GET["t"]): ?><div class="title"><?php echo htmlspecialchars($_GET["t"]);?> &nbsp;</div><?php endif; ?>
								</div>
							</div>
						</div>
					</div>		
			</div>			
	
	</body>
	<script src="//vjs.zencdn.net/7.1.0/video.js"></script>
</html>
