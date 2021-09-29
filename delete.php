<?php
$hpvpenqno= filter_input(INPUT_POST, 'hpvpenqno', FILTER_SANITIZE_NUMBER_INT);
$success = false;
if ($hpvpenqno) {
    $conn = mysqli_connect("localhost","root","","login"); //connection to database
    $query="SELECT *from upload where hpvpenqno=".$hpvpenqno;
    $query_run= mysqli_query($conn,$query);
    $result=mysqli_fetch_assoc($query_run);
    $id=$result['id'];
    $dir="uploads";
    unlink($dir.'/'.$id) ;
    $funcao="DELETE FROM upload WHERE hpvpenqno = " . $hpvpenqno;
    $result=mysqli_query($conn, $funcao);
    $success = true;
}
header('Content-Type: application/json');
echo json_encode(array('success' => $success));
?>