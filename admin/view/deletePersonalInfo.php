<?php
require ('../../protfolio/model/db.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM personal_info WHERE id=$id";
    $run = mysqli_query($db,$query);
        if($run){
            echo "<script>Window.location.href = '../admin/index.php?aboutsetting=true';</script>";
        }
}
?>