
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello | PHP</title>
</head>
<body>
<h1>Hello World~ from php</h1>
<h1>哈囉~ from php</h1>
<?php
echo "This is after hypertext preprocessor! "
?>
<P> TEST2 TEST2 JQuery JQuery </P>
<P  id="now"> 會變成時間 test </P>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: yvtc
 * Date: 2017/11/3
 * Time: 上午 08:32
 */
//include_once __DIR__."/vendor/autoload.php";
//use Carbon\Carbon;
//printf("Right now is %s", Carbon::now()->toDateTimeString());
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("p").click(function(){
          $(this).hide();
      })
});


     (function loop(){
    setTimeout(function () {
        QueryData();
        loop(); }, 1000);
     })();
      function QueryData(){
        jQuery.getJSON("http://homestead.app/json.php", function (data)  {
            var tmp = data;
     document.getElementById("now").innerHTML = data.time;
        });


}
</script>


