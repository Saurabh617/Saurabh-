<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Form</title>
    <style>
    *, body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

        .form-container{
            margin-top: 2rem;
            max-width: 70%;
        }

        .container button{
            border: none;
            outline: none;
        }

        .error{
            color : red;
        }
    </style>
</head>
<body>

        <?php
            $name = "";
            $email = "";
            $movie = "";


            include("components/header.php");
            if(isset($_POST["submit"])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $movie = $_POST['movie'];

                $error = ['name'=> '',
                        'email' => '',
                            'movies' => '',
                            'color' => ''
                            ];

                //$colors = $_POST['colors'];

                if(empty($name)){
                   // echo "";
                    $error['name'] = "<br><em>Name can't be empty'.</em><br>";
                }
                else{
                    if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
                        $error['name'] = "<br><em>Name can contain only aplhabets and spaces.</em><br>";
                    }
                }

                //predefined regex for email using filters
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $error['email'] = "<br><em>E-mail should be in proper format.</em><br>";
                }

                if(empty($movie)){
                    $error['movies'] = "<br><em>Atleast one movie is required.</em><br>";
                }
                else{
                    if(!preg_match('/^([a-zA-Z\s]+)(,[a-zA-Z\s]+)*/', $movie)){
                        $error['movies'] = "<br><em>Movie names should be comma separated.</em><br>";
                    }
                }

                if(!isset($_POST['colors'])){
                    $error['color'] = "Please select atleast one color.";
                }

            }
        ?>

    <div class="form-container container">
        <div class="row">
            <form action="regex.php" method="POST" class="col s12">

                    <div class="input-field">
                        <input type="text" name="name" placeholder="Enter your name..." class="validate" value=<?php echo $name ?>>
                        <label for="name">Name</label>
                        <p class="error">
                                <?php  echo $error['name'];
                                ?>
                            </p>
                    </div>
                    <div class="input-field">
                        <input name="email" placeholder="Enter your email..." class="validate" value=<?php echo $email ?>>
                        <!-- <label for="email">Email</label> -->
                        <p class="error">
                                <?php  echo $error['email'];
                                ?>
                            </p>
                    </div>


                    <div class="input-field">
                        <input type="text" name="movie" placeholder="Enter your fav movie" class="validate" value=<?php echo $movie ?>>
                        <label for="name">Movies</label>
                        <p class="error">
                                <?php  echo $error['movies'];
                                ?>
                            </p>
                    </div>
                    <!-- <div class="input-field">
                        <input type="password" name="password" placeholder="You gotta enter it again..." class="validate">
                        <label for="name">Confirm Password</label>
                    </div> -->

                    <!-- <div class="input-field">
                        <input type="checkbox" name="colors[]" id="red" class="validate">
                        <label for="red">Red</label>
                        <input type="checkbox" name="colors[]" id="green" class="validate">
                        <label for="green">Green</label>
                    </div> -->
                    <p>
                    <label>
                        <input type="checkbox" name="colors[]" class="filled-in" />
                        <span>Red</span>
                    </label>
                    </p>

                    <p>
                    <label>
                        <input type="checkbox" name="colors[]" class="filled-in" />
                        <span>Green</span>
                    </label>
                    </p>
                    <p class="error">
                                <?php  echo $error['color'];
                                ?>
                            </p>

                    <button value="submit" name="submit" type="submit"><a class="waves-effect waves-light btn">Submit</a></button>

            </form>
        </div>
    </div>


</body>
</html>
