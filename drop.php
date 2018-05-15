<?php
include("dbinfo.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>


</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
$(document).ready(function()
{

    $('.select').change(function()  // function will work when option will change in select
    {

        var course_id = $('.select').val();
        $.ajax({
        type:"post", 
      url: 'drop.php' ,     // url to the php file to get the response 
      data:'course_id='+  course_id,
      success: function(msg) {
          $('.select2').html(msg);

        }
        });
    })
})
</script>

</head>

<body>
<?php echo $_POST['course_id'];  ?>
<select class="select">
        <option value="Womens">Womens</option>
        <option value="2">Course1</option>
        <option value="3">Course1</option>  
    </select>

    <select class="select2">
        <option>select1</option>
         <?php
		 if($_REQUEST['course_id']=='Womens')
		 {
           ?>
             <option value="1">1</option>;

           <?php
           }
           ?>
      </select>
    

</body>
</html>
