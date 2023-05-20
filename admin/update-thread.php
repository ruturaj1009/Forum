<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Thread</h1>
        <br><br>
        <?php 
            if(isset($_GET['id']) && isset($_GET['time'])){
                $id = $_GET['id'];
                $time=$_GET['time'];
                $sql = "SELECT * FROM threads WHERE thread_id=$id AND timestamp='$time'";
                $res = mysqli_query($conn, $sql);

                if($res==true){
                    $row = mysqli_fetch_assoc($res);
                    $title = $row['thread_title'];
                    $description = $row['thread_desc'];
                    $cat_id=$row['thread_cat_id'];
                    $user_id=$row['thread_user_id'];
                }
                else{
                    $_SESSION['no-thread-found']="<div class='suck1'>Error Occured. Try Again!</div>";
                    header('location:'.SITEURL.'admin/manage-thread.php');
                }

            }
            else{
                $_SESSION['no-thread-found']="<div class='suck1'>Invalid Thread.</div>";
                header('location:'.SITEURL.'admin/manage-thread.php');
            }
        
        ?>

        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" value="<?php echo $title; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Description: </td>
                    <td><textarea cols="30" rows="5" name="description"><?php echo $description; ?></textarea></td>
                </tr>

                <tr>
                    <td>Category: </td>
                    <td>
                        <Select name="category">
                        <?php 
                                
                                $sql2 = "SELECT * FROM categories ";
                                $res2 = mysqli_query($conn, $sql2);
                                $count2 = mysqli_num_rows($res2);

                                if($count2>0){

                                    while($row2=mysqli_fetch_assoc($res2)){
                                        
                                        $id2 = $row2['category_id'];
                                        $title = $row2['category_name'];
                                        ?>

                                        <option <?php if($id2==$cat_id) echo 'selected'; ?> value="<?php echo $id2; ?>"><?php echo $title; ?></option>

                                        <?php
                                    }
                                }
                                else{

                                    ?>
                                    <option value="0">No Category Found</option>
                                    <?php
                                }
                            

                            ?>
                        

                        </Select>
                    </td>
                </tr>
                <tr>
                    <td>User: </td>
                    <td>
                        <Select name="user">
                        <?php 
                                
                                $sql1 = "SELECT * FROM users ";
                                $res1 = mysqli_query($conn, $sql1);
                                $count1 = mysqli_num_rows($res1);

                                if($count1>0){

                                    while($row1=mysqli_fetch_assoc($res1)){
                                        
                                        $id1 = $row1['sno'];
                                        $title1 = $row1['user_email'];
                                        ?>

                                        <option <?php if($id1==$user_id) echo 'selected'; ?> value="<?php echo $id1; ?>"><?php echo $title1; ?></option>

                                        <?php
                                    }
                                }
                                else{

                                    ?>
                                    <option value="0">No User Found</option>
                                    <?php
                                }
                            

                            ?>
                        

                        </Select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <br>
                        <input type="submit" name="submit" value="Update Category" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

        <?php 
        
            if(isset($_POST['submit'])){
                $id = $_POST['id'];
                $title = $_POST['title'];
                $description = $_POST['description'];
                $category=$_POST['category'];
                $user=$_POST['user'];

                $sql3 = "UPDATE threads SET 
                    thread_title = '$title',
                    thread_desc = '$description', 
                    thread_cat_id = '$category', 
                    thread_user_id = '$user', 
                    timestamp=current_timestamp()
                    WHERE thread_id=$id
                ";

                $res3 = mysqli_query($conn, $sql3);

                if($res3==true){
                    $_SESSION['update-thread'] = "<div class='suck2'>Thread Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-thread.php');
                }
                else{
                    $_SESSION['update-thread'] = "<div class='suck1'>Failed to Update Thread.</div>";
                    header('location:'.SITEURL.'admin/update-thread.php');
                }

            }
        
        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>