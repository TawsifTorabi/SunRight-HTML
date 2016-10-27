<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Download - Regional Dictionary of bangladesh | Open Source</title>		
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">
		<link href='http://blog.grplusbd.net/favicon.ico' rel='icon' type='image/x-icon'/>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
		<meta content='GR+' name='generator'/>
		<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
		<link href='http://app.grplusbd.net/' rel='openid.delegate'/>
		<link href='http://app.grplusbd.net/' rel='canonical'/>
		<meta content="1st ever Bangladesh's Regional Language Digital Dictionary Developed By Team GR+, Download for Free, It's Open Source" name="description"/>
		<meta content="1st ever Bangladesh's Regional Language Digital Dictionary Developed By Team GR+, Download for Free, It's Open Source, About GR+ Bangladesh, Know the background story of a team of rising stars, Know the story of the founders of Bangladeshe's 1st Child Blogging Network, tahmid hasan, tawsif torabi, mahmudujjaman kamol, shahria sulov, mojurur quadir nafees, tousif mahbub siyam, GR+ Blog" name="keywords"/>
		<link href='https://plus.google.com/TawsifTorabi/posts' rel='publisher'/>
		<link href='https://plus.google.com/TawsifTorabi/about' rel='author'/>
		<link href='https://plus.google.com/TawsifTorabi' rel='me'/>
		<meta content='Tawsif Torabi' name='Author'/>
		<meta content='general' name='rating'/>
		<meta content='english' name='language'/>
		<meta content='https://www.facebook.com/grplusbd' property='article:author'/>
		<meta content='https://www.facebook.com/grplusbd' property='article:publisher'/>
		<meta content='@TawsifTorabi' name='twitter:site'/>
		<meta content='@TawsifTorabi' name='twitter:creator'/>
		<meta content='2;url=https://github.com/TawsifTorabi/Regional-Digital-Dictionary-Bangladesh/raw/master/distributive_pack_regional_dictionary.zip' http-equiv='refresh'/>
		<script async defer src="https://buttons.github.io/buttons.js"></script>
    </head>
	
    <body onload="count()">
	<?php
		$fp = fopen("Count.txt", "r");
		$count = fread($fp, 1024);
		fclose($fp);
		$count = $count + 1;
		$fp = fopen("Count.txt", "w");
		fwrite($fp, $count);
		fclose($fp);
	?>
	<script>
	 function reslinks(){
	  var url1 = document.getElementById('reslinks').selectedIndex;
	  var url2 = document.getElementById('reslinks').options[url1].value;
	  window.location = url2;
	 }
	</script>
	<script type="text/javascript">
     function count(){
      var read = new XMLHttpRequest();
      read.open('GET', 'Count.txt', false);
      read.send();
      var displayName = parseInt(read.responseText)
      document.getElementById("displaydlcount").innerHTML = displayName;
      setTimeout("count()",1000)
      }
     </script>
	
		<div class="header">
		    <a href="#body">
				<img class="logo" src="../img/logo.png" alt="GR+ Regional Dictionary">
			</a>

			<div class="toplinkscontainer">
                    <a class="toplinks" target="_blank" href="http://app.grplusbd.net/regional-dictionary">হোম</a>
                    <a class="toplinks" target="_blank" href="http://grplusbd.net">জিআর+</a>
                    <a class="toplinks" target="_blank" href="http://blog.grplusbd.net">ব্লগ</a>
            </div>

			<div class="responsive-toplinkscontainer">
				<select id="reslinks" onchange="reslinks()">
                    <option value="http://grplusbd.net">জিআর+</option>
                    <option value="http://app.grplusbd.net/regional-dictionary">হোম</option>
                    <option value="http://blog.grplusbd.net">ব্লগ</option>
				</select>
            </div>
			
		</div>
		
		<div class="container">
			<div class="mainlogo">
				<div class="home" id="home">
						<img class="cdcover" src="../img/cdcover.png">
					<h1 class="title">Digital Regional Dictionary of <span style="color: green;">Bangladesh</span></h1>
				</div>
				
			</div>
			
			<div class="buttoncontainer">
				<h2 style="color: red; font-family: arial;">File is Being Downloaded. If the download do not start automatically, then <a href="https://github.com/TawsifTorabi/Regional-Digital-Dictionary-Bangladesh/raw/master/distributive_pack_regional_dictionary.zip">click here</a></h2>

				<div class="socialfloattop">
					<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fgrplusbd&width=87&layout=button_count&action=like&size=large&show_faces=false&share=false&height=21&appId=164293520647951" width="87" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fapp.grplusbd.net%2Fregional-dictionary&layout=button_count&size=large&mobile_iframe=true&appId=164293520647951&width=83&height=28" width="83" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					<a class="github-button" href="https://github.com/TawsifTorabi/Regional-Digital-Dictionary-Bangladesh" data-icon="octicon-star" data-style="mega" data-count-href="/TawsifTorabi/Regional-Digital-Dictionary-Bangladesh/stargazers" data-count-api="/repos/TawsifTorabi/Regional-Digital-Dictionary-Bangladesh#stargazers_count" data-count-aria-label="# stargazers on GitHub" aria-label="Star TawsifTorabi/Regional-Digital-Dictionary-Bangladesh on GitHub">Star</a>
					<a class="github-button" href="https://github.com/TawsifTorabi/Regional-Digital-Dictionary-Bangladesh" data-icon="octicon-eye" data-style="mega" data-count-href="/TawsifTorabi/Regional-Digital-Dictionary-Bangladesh/watchers" data-count-api="/repos/TawsifTorabi/Regional-Digital-Dictionary-Bangladesh#subscribers_count" data-count-aria-label="# watchers on GitHub" aria-label="Watch TawsifTorabi/Regional-Digital-Dictionary-Bangladesh on GitHub">Watch</a>
				</div>
			</div>
			</br>
			<center style="color: white; background: rgba(0, 0, 0, 0.58);; padding: 10px 15px; border-radius: 5px;">
				<h1>Current Verson: 2.0.0</h1>
				</br>
				</br>
				<h1>How To Install?</h1>
				<ol>
					<li>Download with "distributive_pack_regional_dictionary.zip"</li>
					<li>Extract with the open source extractor software 7z or Others | <a href="http://www.7-zip.org/download.html">Download 7z</a></li>
					<li>Open Extracted Folder</li>
					<li>Run with app.html with any browser</li>
					<li>Enjoy!</li>
				</ol>
			</center>
			
			<br class="rwd-break" />
			<br class="rwd-break" />
		</br></br>			
		</div>		

		<hr>
		
		
		
		
		
		<footer id="footer" class="footer">
			<div class="footercontainer">
					Copyright © 2016-2017 <a href="http://grplusbd.net/">Green Ranzers +</a> , Incorporated in Bangladesh. All rights reserved. Designed & developed by <a href="http://facebook.com/tawsif.torabi">Tawsif Torabi</a>
			</div>
		</footer>
	
    </body>
</html>