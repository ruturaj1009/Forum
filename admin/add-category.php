<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>

        <br><br>

        <?php 
        
            if(isset($_SESSION['add-category']))
            {
                echo $_SESSION['add-category'];
                unset($_SESSION['add-category']);
            }

        
        ?>

        <br><br>

        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Name: </td>
                    <td>
                        <input type="text" name="title" placeholder="Enter category name">
                    </td>
                </tr>

                <tr>
                    <td>Description: </td>
                    <td><textarea cols="30" rows="5" name="description" placeholder="Enter category description"></textarea></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

        <?php 
            if(isset($_POST['submit'])){

                $title = $_POST['title'];
                $description=$_POST['description'];

                $sql = "INSERT INTO categories SET 
                    category_name='$title',
                    category_description='$description',
                    created=current_timestamp()
                ";

                $res = mysqli_query($conn, $sql);

                if($res==true){
                    $_SESSION['add-category'] = "<div class='suck2'>Category Added Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
                else{
                    $_SESSION['add-category'] = "<div class='suck1'>Failed to Add Category.</div>";
                    header('location:'.SITEURL.'admin/add-category.php');
                }
            }
        
        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>