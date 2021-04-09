<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FAZAN</title>
<link rel="icon" href="img/icon.ico" type="image/x-icon"/>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134271096-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-134271096-2');
</script>



</head>

<body>

</br></br></br></br></br></br>

<a href="index.php"><img src="img/fazan-logo.png" /></a></br></br></br></br></br>
<p2 style="color:#FFFFFF;"><b>
    <!--Start Script-->
       
    

</b></p2></br>

<div class="row" style="background-image:url(img/repeat-background.png)"></br>

<p2>Introduceți numele și parolă:</p2></br></br></br>

<!-- [content] -->

			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Nume" id="username" required></br></br>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Parola" id="password" required></br></br>
				<input type="submit" value="Login"></br></br>                
			</form>
            
            <button onclick="window.location.href='inregistrare.php'" style="width:200px; height:60px;"><p2>Inregistrare</p2></button></br></br></br>



<!-- [/content] -->

</div>


</body>



<footer>



</footer>
</html>