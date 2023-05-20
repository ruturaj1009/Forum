<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper" style="width:90%">
        <h1>Manage Category</h1>
        <br>
        <a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn-primary">Add Category</a>
        <br><br>
        <?php
             if(isset($_SESSION['no-category-found'])){
                echo $_SESSION['no-category-found'];
                unset($_SESSION['no-category-found']);
            }
             if(isset($_SESSION['add-category'])){
                echo $_SESSION['add-category'];
                unset($_SESSION['add-category']);
            }
             if(isset($_SESSION['delete-category'])){
                echo $_SESSION['delete-category'];
                unset($_SESSION['delete-category']);
            }
             if(isset($_SESSION['update-category'])){
                echo $_SESSION['update-category'];
                unset($_SESSION['update-category']);
            }
            
        ?>
        <br><br>
        <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>

            <?php
                $sql="SELECT * FROM categories";
                $res=mysqli_query($conn,$sql) or die('Error :');
                if($res==true){
                    $count=mysqli_num_rows($res);
                    $sn=1;
                    if($count>0){
                        while($rows=mysqli_fetch_assoc($res)){
                            $id=$rows['category_id'];
                            $title=$rows['category_name'];
                            $description=$rows['category_description'];
                            $time=$rows['created'];
                        ?>

                            <tr>
                                <td><?php echo $sn++; ?>.</td>
                                <td style="max-width: 80px;"><?php echo $title; ?></td>
                                <td style="max-width: 350px;"><?php echo $description; ?></td>
                                <td>

                                    <a href="<?php echo SITEURL; ?>admin/update-category.php?id=<?php echo $id; ?>&time=<?php echo $time; ?>" class="btn-secondary">Update</a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-category.php?id=<?php echo $id; ?>&time=<?php echo $time; ?>" class="btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php


                        }
                    }
                }
                


            ?>
        </table>
    </div>
</div>


<?php include('partials/footer.php'); ?>