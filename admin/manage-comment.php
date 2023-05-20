
<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Comment</h1>
        <br><br>
        <?php
            if(isset($_SESSION['delete-comment'])){
                echo $_SESSION['delete-comment'];
                unset($_SESSION['delete-comment']);
            }
            if(isset($_SESSION['update-comment'])){
                echo $_SESSION['update-comment'];
                unset($_SESSION['update-comment']);
            }
            if(isset($_SESSION['no-comment-found'])){
                echo $_SESSION['no-comment-found'];
                unset($_SESSION['no-comment-found']);
            }
        ?>
        <br><br>
        <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Thread</th>
                <th>Comment</th>
                <th>Comment By</th>
                <th>Action</th>
            </tr>

            <?php
                $sql="SELECT * FROM comments";
                $res=mysqli_query($conn,$sql) or die('Error :');
                if($res==true){
                    $count=mysqli_num_rows($res);
                    $sn=1;
                    if($count>0){
                        while($rows=mysqli_fetch_assoc($res)){
                            $id=$rows['comment_id'];
                            $comment=$rows['comment_content'];
                            $thread_id=$rows['thread_id'];
                            $u_id=$rows['comment_by'];
                            $time=$rows['comment_time'];

                            $sql1="SELECT * FROM threads WHERE thread_id=$thread_id ";
                            $res1=mysqli_query($conn,$sql1);
                            $thread=mysqli_fetch_assoc($res1)['thread_title'];

                            $sql2="SELECT * FROM users WHERE sno=$u_id ";
                            $res2=mysqli_query($conn,$sql2);
                            $comment_by=mysqli_fetch_assoc($res2)['user_email'];


                        ?>

                            <tr>
                                <td><?php echo $sn++; ?>.</td>
                                <td style="max-width: 70px;"><?php echo $thread; ?></td>
                                <td style="max-width: 250px;"><?php echo $comment; ?></td>
                                <td style="max-width: 0px;" class="text-center"><?php echo $comment_by; ?></td>
                                <td>
                                    <a href="<?php echo SITEURL; ?>admin/update-comment.php?id=<?php echo $id; ?>" class="btn-secondary">Update</a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-comment.php?id=<?php echo $id; ?>&user_id=<?php echo $u_id; ?>" class="btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php


                        }
                    }
                }
                


            ?>
        </table>
</div>

<?php include('partials/footer.php') ?>