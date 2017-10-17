<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      onSelect : function(date){
          window.alert(date);
      }
    });
  } );
</script>
<style>
.itemscontainer
{
    float:right;
}
#datepicker
{
}
</style>
</head>
<body>
<div class="menu">
<div class="menuOption">Contest</div>
</div>
<div class="comprise">
<table><tr><td><div id="datepicker"></div>
</td><td>
<div class="itemscontainer">
<div class="item">
<div class="question">What is your name ?</div>
<div class="answer">Rahul</div>
</div>
</div>
</td></tr></table>

</div>
</body>
</html>