<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        #ques {
            min-height: 433px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .box_02:hover {
            translate: 20px 0;
        }

        .box_02 {
            width: 100%;
            background: white;
            padding: 20px;
            margin: 10px;
            border-radius: 8px;
            cursor: pointer;
            margin: 15px;
            box-shadow: 3px 3px 25px rgba(0, 0, 0, 0.3);
        }

        .box_04 {
            display: flex;
            align-items: center;
        }

        .box_04-image {
            width: 70px;
            height: 70px;
            box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            border-radius: 50%;
            margin-right: 10px;
        }

        .box_04-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .Name_01 {
            display: flex;
            flex-direction: column;
            margin-left: 10px;
        }

        .Name_01 strong {
            color: black;
            font-size: 18px;
        }

        .Name_01 span {
            color: gray;
            margin-top: 2px;
        }

        .comment_01 p {
            color: black;
            text-align: justify;
        }

        .animated-button {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 18px;
            text-align: center;
            color: #fff;
            background-color: #007bff;
            box-shadow: 0px 5px 0px #005ce6;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .animated-button:hover {
            background-color: #005ce6;
            box-shadow: 0px 5px 0px #0039b3;
            transform: translateY(-5px);
        }
    </style>
    <title>Welcome to Ravenshaw Campus Commune</title>
</head>

<body>
    <?php include './config/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE category_id=$id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
    }

    ?>

    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        // Insert into thread db
        $th_title = $_POST['title'];
        $th_desc = $_POST['desc'];

        $th_title = str_replace("<", "&lt;", $th_title);
        $th_title = str_replace(">", "&gt;", $th_title);

        $th_desc = str_replace("<", "&lt;", $th_desc);
        $th_desc = str_replace(">", "&gt;", $th_desc);

        $sno = $_POST['sno'];
        $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ( '$th_title', '$th_desc', '$id', '$sno', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if ($showAlert) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Your thread has been added! Please wait for community to respond
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                  </div>';
        }
    }
    ?>






    <!-- Category container starts here -->
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $catname; ?> forums</h1>
            <p class="lead"> <?php echo $catdesc; ?></p>
            <hr class="my-4">
            <ul style="list-style-type: none;">
                <li style="font-size: larger;">This is a peer to peer forum.</li>
                <li>&#10146;
                    No Spam / Advertising / Self-promote in the forums is not allowed.
                </li>
                <li>&#10146;
                    Do not post copyright-infringing material.
                </li>
                <li>&#10146;
                    Do not post “offensive” posts, links or images.
                </li>
                <li>&#10146;
                    Do not cross post questions.
                </li>
                <li>&#10146;
                    Remain respectful of other members at all times.
                </li>
            </ul>
        </div>
    </div>

    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        echo '<div class="container">
            <h1 class="py-2">Start a Discussion</h1> 
            <form action="' . $_SERVER["REQUEST_URI"] . '" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Problem Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Keep your title as short and crisp as
                        possible</small>
                </div>
                <input type="hidden" name="sno" value="' . $_SESSION["sno"] . '">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Ellaborate Your Concern</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>';
    } else {
        echo '
        <div class="container">
        <h1 class="py-2">Start a Discussion</h1> 
           <p class="lead">You are not logged in. Please login to be able to start a Discussion</p>
        </div>
        ';
    }

    ?>

    <div class="container mb-5" id="ques">
        <h1 class="py-2">Browse Questions</h1>




        <?php
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $id = $row['thread_id'];
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
            $thread_time = $row['timestamp'];
            $thread_user_id = $row['thread_user_id'];
            $sql2 = "SELECT user_email FROM `users` WHERE sno='$thread_user_id'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);




            echo ' <div class="box_01">
            <div class="box_02">
                <div class="box_03">
                    <div class="box_04">
                        <div class="box_04-image">
                            <img src="img/User-default.png">
                        </div>
                        <div class="Name_01">' . '
                            <strong>Asked By:- ' . $row2['user_email'] . '</strong>
                            <strong>' . $title . ' </strong>
                            <span>' . $thread_time . '</span>
                        </div>' . '
                    </div>
                </div>' . '
                <div class="comment_01">
                    <p>
                        ' . $desc . '
    
                    </p>
                </div>' . '
                <a class="animated-button" href="thread.php?threadid=' . $id . '">Comment</a>
            </div>
        </div>';
        }
        // echo var_dump($noResult);
        if ($noResult) {
            echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">No Threads Found</p>
                        <p class="lead"> Be the first person to ask a question</p>
                    </div>
                 </div> ';
        }

        ?>

    </div>

    <?php include 'partials/_footer.php'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>