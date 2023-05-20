<?php
    include('../config/_dbconnect.php');

    if(isset($_GET['id']) && isset($_GET['time'])){
        $id=$_GET['id'];
        $time=$_GET['time'];


        $sql="DELETE FROM categories WHERE category_id=$id AND created='$time'";
        $res=mysqli_query($conn,$sql);
        if($res==true){
            $_SESSION['delete-thread']="<div class='suck2'>Category deleted successfully</div>";
            header('location:'.SITEURL.'admin/manage-category.php');
        }
        else{
            $_SESSION['delete-thread']="<div class='suck1'>Failed to delete Category.</div>";
            header('location:'.SITEURL.'admin/manage-category.php');
        }
    }
    else{
        $_SESSION['no-thread-found']="<div class='suck1'>Invalid category.</div>";
        header('location:'.SITEURL.'admin/manage-category.php');
    }
?>