<?php
 require ('../../protfolio/model/db.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="DELETE FROM skill WHERE id=$id";
        $run = mysqli_query($db,$query);
            if($run){
                echo "<script>Window.location.href = '../index.php?aboutsetting=true';</script>";
            }
    }
?>