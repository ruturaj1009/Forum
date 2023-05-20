<?php
    include('../config/_dbconnect.php');

    if(isset($_GET['id']) && isset($_GET['time'])){
        $id=$_GET['id'];
        $time=$_GET['time'];

        $sql1="DELETE FROM comments WHERE thread_id=$id";
        $res1=mysqli_query($conn,$res1);
        $sql="DELETE FROM threads WHERE thread_id=$id AND timestamp='$time'";
        $res=mysqli_query($conn,$sql);
        if($res==true && $res1==true){
            $_SESSION['delete-thread']="<div class='suck2'>Thread deleted successfully</div>";
            header('location:'.SITEURL.'admin/manage-thread.php');
        }
        else{
            $_SESSION['delete-thread']="<div class='suck1'>Failed to delete Thread.</div>";
            header('location:'.SITEURL.'admin/manage-thread.php');
        }
    }
    else{
        $_SESSION['no-thread-found']="<div class='suck1'>Invalid Thread.</div>";
        header('location:'.SITEURL.'admin/manage-thread.php');
    }
?>