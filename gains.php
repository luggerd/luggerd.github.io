<!DOCTYPE html>
<head>
      <title>Bitcoin Price</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
      <meta http-equiv="Pragma" content="no-cache">
      <meta http-equiv="Expires" content="0">

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
      
      <script>
         var auto_refresh = setInterval(
         function()
         {$('.btc-price').load('gox.php');}, 10000);
      </script>
</head>

<body>
<div class="btc-price">Wait 10 Seconds..</div>
</body>

</html>
