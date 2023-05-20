<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Category</h1>
        <br><br>
        <?php 
            if(isset($_GET['id']) && isset($_GET['time'])){
                $id = $_GET['id'];
                $time=$_GET['time'];
                $sql = "SELECT * FROM categories WHERE category_id=$id AND created='$time'";
                $res = mysqli_query($conn, $sql);

                if($res==true){
                    $row = mysqli_fetch_assoc($res);
                    $title = $row['category_name'];
                    $description = $row['category_description'];
                }
                else{
                    $_SESSION['no-category-found']="<div class='suck1'>Error Occured. Try Again!</div>";
                    header('location:'.SITEURL.'admin/manage-category.php');
                }

            }
            else{
                $_SESSION['no-category-found']="<div class='suck1'>Invalid category.</div>";
                header('location:'.SITEURL.'admin/manage-category.php');
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
                    <td>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
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

                $sql2 = "UPDATE categories SET 
                    category_name = '$title',
                    category_description = '$description', 
                    created=current_timestamp()
                    WHERE category_id=$id
                ";

                $res2 = mysqli_query($conn, $sql2);

                if($res2==true){
                    $_SESSION['update-category'] = "<div class='suck2'>Category Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
                else{
                    $_SESSION['update-category'] = "<div class='suck1'>Failed to Update Category.</div>";
                    header('location:'.SITEURL.'admin/update-category.php');
                }

            }
        
        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>