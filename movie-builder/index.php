<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		
				
		<style type="text/css">
			.video-type{
				width: 100%;
				display: block;
			}
			
			.text-area{
				display: block;
				position: relative;
				width: 100%;
			}
			
			.form-control{
				margin: 0 0 20px 0;
			}
			
			h3{
				margin-bottom: 0;
				font-size: 18px;
			}
			
			.video-builder{
				 display: flex;
				 align-items: center;
				 justify-content: center;
				 position: relative;
				 height: 100%;
			}

			
			.video-builder-form{
				display: block;
				position: relative;
				width: calc(100vw - 40px);
				margin: 0 auto;
				max-width: 960px;
			}
			
			.btn{
				margin: 0 0 10px 0;
			}
		
			
			.view-movie{
				
			}
			
			.hide{
				display: none;
			}
			
			.show{
				display: block;
			}
			
			.btn-danger{
				float: right;
			}
						
			
		</style>
	</head>
	<body>
		<div class="video-builder">
			
		 <form id="movie-form" class="video-builder-form" action="" method="post">
			 <div class="form-group">
			 <h3>Video Source </h3>
	<input type="text" class="text-area form-control" name="video_src"></input>
	<h3>Video Title</h3>
	<input type="text" class="text-area form-control" name="vid_title"></input>
	<h3>Video Type</h3>
     <select class="video-type form-control" name="video_type">
        <option value="mp4">MP4</option>
        <option value="yt">YouTube</option>
        <option value="vim">Vimeo</option>
        <option value="wis">Wistia</option>
        <option value="bt">bit.ly</option>
        <option value="tn">Tiny URL</option>
      </select>
      <h3>Resolution</h3>
       <select class="video-type form-control" name="resolution">
        <option value="16x9">16x9</option>
        <option value="stnd">Standard</option>
        <option value="pal">Pal</option>
        <option value="wid">Widescreen</option>
        <option value="wis">Wistia</option>
        <option value="pano">Panavision</option>
        <option value="na">National Archive</option>
      </select>
      <input name="Submit" type="submit" class="btn btn-primary generate-movie" value="Generate URL" />
     
      
        <?php
	  $videoRoot = 'https://wpwebos.com/video/';
	  $vidSrc = (isset($_POST['video_src'])) ? $_POST['video_src'] : '';
      $vidType = (isset($_POST['video_type'])) ? $_POST['video_type'] : '';
      $resolution = (isset($_POST['resolution'])) ? $_POST['resolution'] : '';
      $vidTitle = (isset($_POST['vid_title'])) ? $_POST['vid_title'] : '';
      ?>
     
     <?php if(isset( $_POST['Submit']) && $msg=='' )
    {?>
               <textarea id="movie-url" class="text-area form-control"><?php echo($videoRoot);?>?u=<?php echo($vidSrc);?>&vt=<?php echo($vidType);?>&res=<?php echo($resolution);?>&t=<?php echo($vidTitle);?></textarea>
              <div class=""><a class="view-movie btn btn-secondary" href="<?php echo($videoRoot);?>?u=<?php echo($vidSrc);?>&vt=<?php echo($vidType);?>&res=<?php echo($resolution);?>&t=<?php echo($vidTitle);?>" target="_blank">View Movie</a> <a href="<?php echo($videoRoot);?>movie-builder" class="btn btn-danger">Reset</a></div>
       </div> 
     
     
    <?php } else{?>
              
    <?php }?>
    
      </form>
			
    
		</div>
	</body>
</html>