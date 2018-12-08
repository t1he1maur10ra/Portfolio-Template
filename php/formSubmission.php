<?php
if(isset($_POST['submit']))
{
    $to = "jv1@g.toiohomai.ac.nz";
    $name = $_POST['firstname + " " + lastname'];
    $location = $_POST['country'];
    $msg = $_POST['subject'];
    
    $headers="Reply to: $name";

    mail($to,$name,$location,$msg,$headers);
}

?>

