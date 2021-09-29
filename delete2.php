<?php
$slno= filter_input(INPUT_POST, 'slno', FILTER_SANITIZE_NUMBER_INT);
$success = false;
if ($slno) {
    $conn = mysqli_connect("localhost","root","","login"); //connection to database 
    $query="SELECT *from annex where slno=".$slno;
    $query_run= mysqli_query($conn,$query);
    $result=mysqli_fetch_assoc($query_run);
    $id=$result['id'];
    $dir="annexure";
    unlink($dir.'/'.$id) ;
    $funcao="DELETE FROM annex WHERE slno = " . $slno;
    $result=mysqli_query($conn, $funcao);
    $success = true;
}
header('Content-Type: application/json');
echo json_encode(array('success' => $success));
?>