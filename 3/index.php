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
                        <tr>
                            <td><input class="label-inline" type="checkbox" name="" value="1"></td>
                            <td>1</td>
                            <td>Bring medicine for Dad</td>
                            <td>18th May, 2019</td>
                            <td><a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Complete</a></td>
                        </tr>
                        <tr>
                            <td><input class="label-inline" type="checkbox" name="" value="1"></td>
                            <td>1</td>
                            <td>Submit physics homework</td>
                            <td>19th May, 2019</td>
                            <td><a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Complete</a></td>
                        </tr>
                    </tbody>
                </table>
                <select id="action">
                    <option value="0">With Selected</option>
                    <option value="del">Delete</option>
                    <option value="complete">Mark As Complete</option>
                </select>
                <input class="button-primary" type="submit" name="" value="Submit">
            </form>
            <p></p>
            <h4>Add Tasks</h4>
            <form action="">
                <label>Task</label>
                <input type="text" name="" placeholder="Task Details">
                <label>Date</label>
                <input type="text" name="" placeholder="Task Date">
                <input class="button-primary" type="submit" name="" value="Add Task">
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