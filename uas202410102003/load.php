
<?php
    include 'config.php';
    include 'loadData.php';

    $conn = new conn();
    $connect =  $conn->DBConnect(); 

    $process = new process($connect);
?>