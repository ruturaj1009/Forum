<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Thread</h1>
        <br><br>
        <?php
             if(isset($_SESSION['add-thread'])){
                echo $_SESSION['add-thread'];
                unset($_SESSION['add-thread']);
            }
            
        ?>
        <br><br>
        <form action="" method="POST" >
            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td><input type="text" name="title" placeholder="Enter thread title " ></td>
                </tr>
                <tr>
                    <td>Description: </td>
                    <td><textarea cols="30" rows="5" name="description" placeholder="Enter thread description"></textarea></td>
                </tr>
                <tr>
                    <td>Category: </td>
                    <td>
                        <Select name="category">
                        <?php 
                                
                                $sql = "SELECT * FROM categories ";
                                $res = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($res);

                                if($count>0){

                                    while($row=mysqli_fetch_assoc($res)){
                                        
                                        $id = $row['category_id'];
                                        $title = $row['category_name'];
                                        ?>

                                        <option value="<?php echo $id; ?>"><?php echo $title; ?></option>

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

                                        <option value="<?php echo $id1; ?>"><?php echo $title1; ?></option>

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
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Thread" class="btn-primary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php
    if(isset($_POST['submit'])){
        $title=$_POST['title'];
        $description=$_POST['description'];
        $category=$_POST['category'];
        $user=$_POST['user'];


        $sql4="INSERT INTO threads SET
            thread_title='$title',
            thread_desc='$description',
            thread_cat_id=$category,
            thread_user_id='$user',
            timestamp=current_timestamp()
            ";
        $res4=mysqli_query($conn,$sql4);
        if($res4==true){
            $_SESSION['add-thread']="<div class='suck2'>Thread added successfully</div>";
            header('location:'.SITEURL.'admin/manage-thread.php');
        }
        else{
            $_SESSION['add-thread']="<div class='suck1'>Thread not added.</div>";
            header('location:'.SITEURL.'admin/add-thread.php');
        }
    }

?>




<?php include('partials/footer.php') ?>