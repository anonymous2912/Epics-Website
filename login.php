<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-1.11.1.min.js" integrity="sha256-VAvG3sHdS5LqTT+5A/aeq/bZGa/Uj04xKxY8KM/w9EE=" crossorigin="anonymous"></script>


<script type="text/javascript">
        $(document).ready(function () {
         $('#login').click(function (){
            
            email=$("#email").val();
            password=$("#password").val();

        

             $.ajax({
        type:"POST",
        url:"lcheck.php",
        data: "&email=" + email + "&password=" + password,
        success: function (html) {
            if (html=='true'){
                $("#add_err2").html('<div class="alert alert-success">\
                    <em>Authenticated</em> \ </div>');
                window.location.href ="homepage.php";
            }else if (html== 'false') {
                $("#add_err2").html('<div class="alert alert-danger">\
                    <em>Authentication</em> failure. \\ </div>');
            }else  {
                $("#add_err2").html('<div class="alert alert-danger">\
                    <em>Error </em> Processing request. Please try again \\ </div>');
            }



            },
            beforeSend: function () {
                $("#add_err2").html("loading...");
            }
        
     });
             return false;
     });
     });
     </script>
</head>

<body>
    <div class="form-center" style="background-image: url('images/registerbg.png');">
    <p>Please Login to Continue..</p>
    <form id="form_login">
    <div id="add_err2"></div>
        <input type="text" placeholder="Email address" name="email" id="email">
        <br>
        <input type="password" placeholder="Password" name="password" id="password">
        
        <button type="submit" form="form-center" id="login">Login</button>


    </form>
    <!-- <button type="submit" form="form-center" value="Submit">LogIn</button> -->
            <?php
    if(isset($_GET['logout'])) {
        if ($_GET["logout"] == "true") { ?>
            <div class="alert alert-success">
                <a href="#" class="close "  data-dismiss="alert" aria-label="close"></a><em>You have been logged out of the system</em>
            </div>
            <?php
        }
    }
    ?>
    </div>
</body>

</html>