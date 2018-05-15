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
$(function(){
    $('#groups').on('change', function(){
        var val = $(this).val();
        var sub = $('#sub_groups');
        if(val == '--All--') {
            $('#sub_groups').find('option').show();
        }
        else {
            sub.find('option').not(':first').hide();
            $('option', sub).filter(function(){
                if($(this).attr('data-group') == val){
                    $(this).show();
                }
            });
        }
        sub.val(0);
    });
});

</script>

</head>

<body>
<select id="groups">
    <option value='--All--'>--All--</option>
    <option value='Group1'>Group1</option>
    <option value='Group2'>Group2</option>
    <option value='Group3'>Group3</option>
<select>
    
<select id="sub_groups">
    <option data-group='all' value='0'>--Select--</option>
    <option data-group='Group1' value='one'>one</option>
    <option data-group='Group1' value='two'>two</option>
    <option data-group='Group2' value='three'>three</option>
    <option data-group='Group2' value='four'>four</option>
    <option data-group='Group3' value='five'>five</option>
    <option data-group='Group3' value='Six'>six</option>
<select>
</body>
</html>
