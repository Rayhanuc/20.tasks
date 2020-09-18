<?php 
include_once "config.php";

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if (!$connection) {
    throw new Exception("Cannot connect to database");
}

$query = "SELECT * FROM tasks ORDER BY date";
$result = mysqli_query($connection, $query);

 ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo/Tasks</title>


        <!-- font-awesome css link -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
        <!-- style css link -->
        <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
        <!-- responsive css link -->
        <link href="assets/css/responsive.css" rel="stylesheet">
        <!-- css link end -->
        <style>
            body {
                margin-top: 30px;
            }
            #main {
                padding: 0px 150px 0px 150px;
            }
            #action {
                width:150px;
            }
        </style>
        
    </head>
    <body>
        <div class="container" id="main">
            <h1>Tasks Manager</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, ipsa, dolorem? Repellat voluptatum asperiores dolorem expedita odio aliquid possimus. Laboriosam.</p>
            <h4>All Tasks</h4>
            <?php 
            if (mysqli_num_rows($result)==0) {
                ?>
                <p>No task found.</p>
                <?php
            }else {
             ?>
            
            <form action="">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Id</th>
                            <th>Task</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while($data = mysqli_fetch_assoc($result)){
                            $timestamp = strtotime($data['date']);
                            $date = date("jS M, Y", $timestamp);

                            ?>
                            <tr>
                                <td><input class="label-inline" type="checkbox" name="" value="<?php echo $data['id'] ; ?>"></td>
                                <td><?php echo $data['id'] ; ?></td>
                                <td><?php echo $data['task'] ; ?></td>
                                <td><?php echo $date ; ?></td>
                                <td><a href="#">Delete</a> | <a href="#">Complete</a></td>
                            </tr>

                            <?php
                        
                        }
                        mysqli_close($connection);
                        ?>
                    </tbody>
                </table>
                <select id="action">
                    <option value="0">With Selected</option>
                    <option value="del">Delete</option>
                    <option value="complete">Mark As Complete</option>
                </select>
                <input class="button-primary" type="submit" name="" value="Submit">
            </form>
            <?php 
            }
             ?>


            <p></p>
            <h4>Add Tasks</h4>
            <form method="post" action="tasks.php">
                <fieldset>
                    <?php 
                        $added = $_GET['added'] ?? '';
                        if ($added) {
                            echo "<p>Task Successfully Added.</p>";
                        }
                     ?>


                    <label for="task">Task</label>
                    <input type="text" name="task" placeholder="Task Details" id="task">
                    <label for="date">Date</label>
                    <input type="text" name="date" placeholder="Task Date" id="date">

                    <input class="button-primary" type="submit" value="Add Task">
                    <input type="hidden" name="action" value="add">
                </fieldset>
            </form>
        </div>
        
        

        <!-- jquery js link -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- bootstrap js link -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- main js link -->
        <script src="assets/js/main.js"></script>
    </body>
</html>