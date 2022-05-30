<?php
require ('../../protfolio/model/db.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM protfolio WHERE id=$id";
    $run = mysqli_query($db,$query);
        if($run){
            echo "<script>Window.location.href = '../admin/index.php?protfoliosetting=true';</script>";
        }
}
?>