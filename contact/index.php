<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Minako Yoshino Official Website - Contact</title>
	<meta name="Description" content="The art of Minako Yoshino" />
	<meta name="Keywords" content="Minako Yoshino, Minako, Yoshino, art, sculpture, sculptor, paintings, stone, marble, granite" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="imagetoolbar"	content="no" />
<link rel="stylesheet" type="text/css" media="all" href="../css/master-new.css" />
</head>
<body>
<div id="wrap">
	<div id="header">
			<h1><a href="http://www.minakoyoshino.com">Minako Yoshino</a></h1>
			<div id="nav">
				<!-- <ul>
                	<li id="nav-left"><a href=""></a></li>
					<li id="nav-about"><a href="">About</a></li>
					<li id="nav-statement"><a href="../statement/">Statement</a></li>
					<li id="nav-artworks"><a href="../artworks/">Artworks</a></li>
				    <li id="nav-exhibitions"><a href="../exhibitions/">Exhibitions</a></li>
                    <li id="nav-contact"><a href="../contact/">Contact</a></li>
                    <li id="nav-right"><a href=""></a></li>
		    <li id="nav-jp"><a href="/jp/index.html">Japanese</a></li>
				</ul> -->
				<ul id="css3menu1" class="topmenu">
				<li id="nav-left"></li> <!-- <a href="">&nbsp;<br>     </a> -->
	<li class="topfirst"><a href="../about/" style="height:24px;line-height:24px;">ABOUT</a></li>
	<li class="topmenu"><a href="../statement/" style="height:24px;line-height:24px;">STATEMENT</a></li>
	<li class="topmenu"><a href="#" style="height:24px;line-height:24px;"><span>ARTWORK</span></a>
	<ul>
		<li><a href="../artworks/marble/">MARBLE REPRESENTATIONS</a></li>
		<li><a href="../artworks/abstract-stone/">STONE ABSTRACTIONS</a></li>
		<li><a href="../artworks/painting/">PAINTING</a></li>
	</ul></li>
	<li class="topmenu"><a href="../exhibitions/" style="height:24px;line-height:24px;">EXHIBITION</a></li>
	<li class="toplast"><a href="../contact/" style="height:24px;line-height:24px;">CONTACT</a></li>
	<li id="nav-right"></li> <!-- <a href=""></a> -->
		    <li id="nav-jp"><a href="../jp/contact">Japanese</a></li>
		  
		    </ul>
			</div>
		</div>
    <div id="main">
	<div id="contact-all">
		<div id="contact">
	  		<form id="form1" name="form1" method="post" action="doEmail.php">
	    	<p>Name:<br />
	        <label>
	          <input type="text" name="name" />
	        </label>
        	</p>
	    	<p>Email:<br />
	        <label>
	          <input type="text" name="email" />
	        </label>
        	</p>
	   		<p>Comment:<br />
	        <label>
	          <textarea name="comment" cols="40" rows="10"></textarea>
	        </label>
        	</p>
			<p>
				<?php
          require_once('recaptchalib.php');
          $publickey = "6LcUx-sSAAAAAKvdOti-QBTy9L8cl2owG3Cjc3iL"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>

			</p>
	    	<p>
	      	<label>
	      	<input type="submit" name="Submit" value="Submit" />
	      	</label>
	      	<br />
          	</p>
	  		</form>
	  </div>
	  </div>
      </div>
<div id="footer">
		<div id="footer-left">
			<p><a href="http://www.facebook.com/minako.art" title="facebook"><img src="/images/fb-logo.png" border=0></a>
			<a href="https://twitter.com/#!/minakoyoshino"  title="twitter"><img src="/images/twitter-logo.png" border=0></a>
			<a href="http://www.youtube.com/playlist?list=PLB0DF0FFB44F6988B" title="youtube"><img src="/images/yahoo-logo.png" border=0></a></p>
		</div>
		<div id="footer-right">
		<p>Copyright (C) StudioM NYC. All right reserved.</p>
		</div>
	</div>
	</div>
</body>
</html>
