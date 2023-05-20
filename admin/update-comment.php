<?php include('partials/menu.php'); ?>
<div class="main-content">
        <div class="wrapper">
            <h1>Update Comment</h1>
            <br><br>

<?php
    $id=$_GET['id'];
    $sql="SELECT * FROM comments WHERE comment_id=$id";
    $res=mysqli_query($conn, $sql);
    
    if($res==true){
        $row=mysqli_fetch_assoc($res);
        $comment=$row['comment_content'];
        $t_id=$row['thread_id'];
        $u_id=$row['comment_by'];
    }

        $sql1="SELECT * FROM threads WHERE thread_id=$t_id ";
        $res1=mysqli_query($conn,$sql1);
        $thread=mysqli_fetch_assoc($res1)['thread_title'];

        $sql2="SELECT * FROM users WHERE sno=$u_id ";
        $res2=mysqli_query($conn,$sql2);
        $comment_by=mysqli_fetch_assoc($res2)['user_email'];
?>


            <form action="" method="POST">
                <table class="tbl-30">
                <tr>
                    <td>Comment: </td>
                    <td><textarea cols="30" rows="5" name="comment"><?php echo $comment; ?></textarea></td>
                </tr>
                    <tr>
                        <td>Thread: </td>
                        <td><?php echo $thread; ?></td>
                    </tr>
                    <tr>
                        <td>By: </td>
                        <td><?php echo $comment_by; ?></td>
                    </tr>
                    <br>
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="<?php echo $id;?>" >
                            <input type="submit" name="submit" value="Update Comment" class="btn-primary">
                        </td>
                    </tr>
                </table>
            </form>
            <br>
        </div>
    </div>


<?php

        if(isset($_POST['submit'])){
        $comment=$_POST['comment'];

        $sql="UPDATE comments SET 
        comment_content='$comment',
        comment_time=current_timestamp()
        WHERE comment_id=$id
        ";

            $res=mysqli_query($conn,$sql);
            if($res==true){
                $_SESSION['update-comment']="<div class='suck2'>Comment updated successfully</div>";
                header('location:'.SITEURL.'admin/manage-comment.php');
            }
            else{
                $_SESSION['update-comment']="<div class='suck1'>Comment not updated</div>";
                header('location:'.SITEURL.'admin/update-comment.php');
            }
        }






?>
<?php include('partials/footer.php') ?>

