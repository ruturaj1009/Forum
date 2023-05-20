<?php
    include('../config/_dbconnect.php');

    if(isset($_GET['id']) && isset($_GET['user_id'])){
        $id=$_GET['id'];
        $user_id=$_GET['user_id'];


        $sql="DELETE FROM comments WHERE comment_id=$id AND comment_by=$user_id ";
        $res=mysqli_query($conn,$sql);
        if($res==true){
            $_SESSION['delete-comment']="<div class='suck2'>comment deleted successfully</div>";
            header('location:'.SITEURL.'admin/manage-comment.php');
        }
        else{
            $_SESSION['delete-comment']="<div class='suck1'>Failed to delete comment.</div>";
            header('location:'.SITEURL.'admin/manage-comment.php');
        }
    }
    else{
        $_SESSION['no-comment-found']="<div class='suck1'>Invalid comment.</div>";
        header('location:'.SITEURL.'admin/manage-comment.php');
    }
?>