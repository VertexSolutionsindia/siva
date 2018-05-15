<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysqli_connect("localhost","root","","siva");
    $query=mysqli_query($con, "select * from m_item_master where item_name LIKE '%{$key}%'");
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['title'];
    }
    echo json_encode($array);
    mysqli_close($con);
?>