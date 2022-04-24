<html>
<head>
    <title>Register Page</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-1.11.1.min.js" integrity="sha256-VAvG3sHdS5LqTT+5A/aeq/bZGa/Uj04xKxY8KM/w9EE=" crossorigin="anonymous"></script>

<script type="text/javascript">
        $(document).ready(function () {
         $('#signin').click(function (){
            username=$("#username").val();
            email=$("#email").val();
            password=$("#password").val();

        

             $.ajax({
        type:"POST",
        url:"adduser.php",
        data: "username=" +username +  "&email=" + email + "&password=" + password,
        success: function (html) {
            if (html=='true'){
                $("#add_err2").html('<div class="alert alert-success">\
                    <strong>Account</strong> processed. \\ </div>');
                window.location.href ="homepage.php";
                
        

            }else if (html== 'false') {
                $("#add_err2").html('<div class="alert alert-danger">\
                    <strong>Email Address</strong> already in system. \\ </div>');
            }else if (html== 'username') {
                $("#add_err2").html('<div class="alert alert-danger">\
                    <strong>username</strong> is required \\ </div>');
            }else if (html== 'email') {
                $("#add_err2").html('<div class="alert alert-danger">\
                    <strong>email address </strong> is required \\ </div>');
            }else if (html== 'eshort') {
                $("#add_err2").html('<div class="alert alert-danger">\
                    <strong>email address </strong> is required \\ </div>');
            }else if (html== 'eformat') {
                $("#add_err2").html('<div class="alert alert-danger">\
                    <strong>email address </strong> format not valid \\ </div>');
            }else if (html== 'pshort') {
                $("#add_err2").html('<div class="alert alert-danger">\
                    <strong>password </strong> must be atleast 4 characters. \\ </div>');
            }else  {
                $("#add_err2").html('<div class="alert alert-danger">\
                    <strong>Error </strong> Processing request. Please try again \\ </div>');
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
    <?php
    if(isset($_GET['logout'])) {
        if ($_GET["logout"] == "true") { ?>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>You have been logged out of the system</strong>
            </div>
            <?php
        }
    }
    ?>
    <p>Sign up to create an account</p>
    <form id="form_register">
    <div id="add_err2"></div>
        <input type="text" placeholder="Username" id="username" name="username">
        <br>
        <input type="email" placeholder="Email address" id="email" name="email" >
        <br>
        <input type="password" placeholder="Create Password" id="password" name="password">
        
    </form>
    <button type="submit" form="form-center" id="signin">Register</button>
    </div>
</body>

</html>