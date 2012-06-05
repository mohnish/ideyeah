<!DOCTYPE html>
<html lang="en">
<head>
<title>Idea Stream | IdeYeah</title>
<meta charset="utf-8">
<link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/css/style.css" type="text/css" media="all">
<script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/js/cufon-replace.js"></script>
<script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/js/CabinSketch_700.font.js"></script>
<script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/js/EB_Garamond_400.font.js"></script>
<!-- [if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">
.bg {behavior:url(js/PIE.htc)}
</style>
<![endif]-->
<!-- [if lt IE 7]>
<div style='clear:both;text-align:center;position:relative'>
   <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
</div>
<![endif]-->
</head>
<body id="page1">

<div class="main">
<!-- header -->
   <header>
      <div class="wrapper">
         <nav>
            <ul id="menu">
               <li><a href="<?php echo base_url(); ?>profile">Profile</a></li>
				<li><a href="<?php echo base_url(); ?>profile/post_idea">Post Idea</a></li>
				<li><a href="<?php echo base_url(); ?>profile/idea_stream">Idea Stream</a></li>
				<li><a href="<?php echo base_url(); ?>profile/search">Search</a></li>
				<li><a href="<?php echo base_url(); ?>profile/logout">Logout</a></li>
            </ul>
         </nav>
      </div>
      <h1><a href="index.html" id="logo">IdeYeah1.com</a></h1>
   </header><div class="inner_copy"><div class="inner_copy">Best selection of premium <a href="http://www.templatemonster.com/pack/joomla-1-6-templates/">Joomla 1.6 templates</a></div></div>
<!-- / header -->
<!-- content -->
   <section id="content">
      <div class="wrapper">
         <article class="col1">
                            
                                <!-- <h2><span>Login</span></h2> -->
            <div class="pad_left1">
               <div class="pad_left1">
                  <div class="wrapper pad_top1">                                                                                             
                                                    
                  </div>

               </div>
            </div>
                            
            <h2>Current Ideas</h2>
            <div class="pad_left1 pad_bot1">
               <div class="pad">
               <?php 
   if(isset($msg)) {
      echo '<div class="message">'.$msg.'</div>';
   }
?>

<br/>
<p>
<fieldset>
<?php 
   
   $count = 1;
   if(isset($all_ideas)) {
      foreach($all_ideas as $idea) {  
      	// It displays all the ideas title and content   
         echo '<br/><b>'.$count.'. Title:</b> <u> <a href="'.base_url().'idea/index/'.$idea->idea_id.'">'.$idea->idea_title.'</a></u> (Posted on: '.$idea->date.')<br/><b>Idea:</b> '.$idea->idea_content.'<br/>';
         $count++;
      }
   }
?>
</fieldset>
               </div>
            </div>
            
         </article>
         <article class="col2">
            <h3>Latest Works</h3>
            <ul class="ul_works">
               <li><a href="#"><img src="images/page1_img2.png" alt=""></a></li>
            </ul>
                  
         </article>
      </div>
   </section>
<!-- / content -->

</div>


</body>
</html>