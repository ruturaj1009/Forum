
<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Thread</h1>
        <br>
        <a href="<?php echo SITEURL; ?>admin/add-thread.php" class="btn-primary">Add Thread</a>
        <br><br>
        <?php
            if(isset($_SESSION['add-thread'])){
                echo $_SESSION['add-thread'];
                unset($_SESSION['add-thread']);
            }
            if(isset($_SESSION['delete-thread'])){
                echo $_SESSION['delete-thread'];
                unset($_SESSION['delete-thread']);
            }
            if(isset($_SESSION['no-thread-found'])){
                echo $_SESSION['no-thread-found'];
                unset($_SESSION['no-thread-found']);
            }
            if(isset($_SESSION['update-thread'])){
                echo $_SESSION['update-thread'];
                unset($_SESSION['update-thread']);
            }
            
            
        ?>
        <br><br>

        <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Action</th>
            </tr>

            <?php
                $sql="SELECT * FROM threads";
                $res=mysqli_query($conn,$sql) or die('Error :');
                if($res==true){
                    $count=mysqli_num_rows($res);
                    $sn=1;
                    if($count>0){
                        while($rows=mysqli_fetch_assoc($res)){
                            $id=$rows['thread_id'];
                            $title=$rows['thread_title'];
                            $description=$rows['thread_desc'];
                            $th_cat_id=$rows['thread_cat_id'];
                            $th_user_id=$rows['thread_user_id'];
                            $time=$rows['timestamp'];

                            $sql1="SELECT * FROM categories WHERE category_id=$th_cat_id";
                            $res1=mysqli_query($conn,$sql1);
                            $cat_name=mysqli_fetch_assoc($res1)['category_name'];
                        ?>

                            <tr>
                                <td><?php echo $sn++; ?>.</td>
                                <td style="max-width: 50px;"><?php echo $title; ?></td>
                                <td style="max-width: 250px;"><?php echo $description; ?></td>
                                <td><?php echo $cat_name ; ?></td>
                                <td>

                                    <a href="<?php echo SITEURL; ?>admin/update-thread.php?id=<?php echo $id; ?>&time=<?php echo $time; ?>" class="btn-secondary">Update</a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-thread.php?id=<?php echo $id; ?>&time=<?php echo $time; ?>" class="btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php


                        }
                    }
                    else{
                        echo "Thread not added";
                    }
                }
                


            ?>
        </table>

    </div>
</div>


<?php include('partials/footer.php') ?>