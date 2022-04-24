<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $username = $_SESSION['username'];
    

?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous" />
    <link href="css/homepage.css" rel="stylesheet">

    <title>Calm Aura</title>
</head>

<body style="background-color: white !important;">
    <!-- Navigation -->
    <?php require_once 'nav.php' ?>
    
    <br>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-6">
                <div class="left">
                    <table>
                        <tr>
                            <td class="table-right">
                                <p class="h1">Calm<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aura</p>
                            </td>
                            <td class="table-left">
                                <img class="leaves" src="Images/bonbon-salad-leaves 1.png" alt="">
                            </td>
                        </tr>
                    </table>




                </div>
                <!-- IRIS - Intelligent recognition and identification system -->
                <br>
                <p class="about-depression para mb-1">
                    Hello! <span style="color:#90aacb; font-weight: bold; font-size: 130%"> <?php echo $username; ?></span> Welcome to CalmAura where we'll help you lift up depression,stress and find your Inner Peace.
                    <br>
                    <br>
                    Calm Aura helps you monitor your depression and  brings together techniques from mindfulness based cognitive therapy, positive psychology, and behavioural activation into a self-help space for mental wellbeing to guide you in managing and improving your mental health.
                    Techniques such as recognising three good things in a gratitude journal and closely analysing your emotional symptoms.  
                    <br>
                    <br>
                    Dissolve Anxiety and depression Forever by knowing yourself better, reducing your shyness, and getting the work, family, and love you deserve.




                   
                    </p>
                    <br>
                    <br>
                    
            </div>
            <div class="col-md-6 top-img">
                <img src="Images/Getting Coffee.gif" alt="">
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid" id="depression-monitor" style="background-color: #FEF1E6;">
        <div class="d-grid gap-2 col-md-5 mx-auto">
            <a class="btn btn-blue btn-lg" type="button" href="class1.php">Depression Monitor <i class="fas fa-search"></i></a><br>
        </div>
        <!-- <div class="d-grid gap-2 col-8 mx-auto"> -->
        <p class="abt-dep-mon">Depression monitor uses AI and Machine Learning techniques to explore a number of behavioral signals , detect daily-life movements and analyse sleep  based on sensor information and classifies you as depressed or non depressed to check the requirement of furthur treatment and guides you accordingly, along with a chatbot which proxies for psychophysiological information.</p>
        <!-- </div> -->
    </div>

    <div class="container-fluid frame">
        <div class="row text-center">
            <div class="col-md-6 frame-left" id="madrs_test">
                <img class="f-img" src="Images/clip-medical-checkup 2.png" alt="">
                <a href="test.php" class="md">
                <p class="h1">MADRS Test</p></a>
            </div>
            <div class="col-md-6 frame-right" id="helpline">
                <img class="f-img" src="Images/undraw_Activity_tracker_re_2lvv-removebg-preview.png" alt="">
                <a href="contact.php" class="md"> <p class="h1">Helpline Numbers</p></a>
            </div>
        </div>
    </div>
    <div class="container-fluid frame" id="frame2">
        <div class="row text-center">
            <div class="col-md-6 frame-right" id="blogs">
                <img class="f-img" src="Images/undraw_Note_list_re_r4u9-removebg-preview.png" alt="">
                <a href="blog.php" class="md"> <p class="h1">Blogs</p></a>
            </div>
            <div class="col-md-6 frame-left" id="videos">
                <img class="f-img" src="Images/undraw_Video_streaming_re_v3qg__1_-removebg-preview.png" alt="">
                <a href="video.php" class="md">  <p class="h1">Videos</p></a>
            </div>
        </div>
    </div>
    <div class="container-fluid frame">
        <div class="row text-center">
            <div class="col-md-6 frame-left" id="challenges">
                <img class="f-img" src="Images/Problem solving-rafiki 1.png" alt="">
                <a href="task.php" class="md">  <p class="h1">Challenges</p></a>
            </div>
            <div class="col-md-6 frame-right" id="diary">
                <img class="f-img" src="Images/undraw_Bibliophile_re_xarc-removebg-preview.png" alt="">
                <a href="diary.php" class="md"> <p class="h1">Diary</p></a>
            </div>
        </div>
    </div>
    
    <div class="d-grid gap-2 col-md-4 mt-0" style="margin-left: 70%;">
        <!-- <button class="btn btn-blue btn-lg" type="button">Contact Doctors <i class="fas fa-phone-alt"></i></button><br> -->
          <?php require_once 'chat.php' ?>
          <br>
          <br>
          <br>
    </div>

</body>

<script>
    document.querySelector("#madrs_test").onclick = () => {
        window.open("test.php", "_self");
        //Put Appropriate filename
    };

    document.querySelector("#helpline").onclick = () => {
        window.open("contacts.php", "_self");
    };

    document.querySelector("#blogs").onclick = () => {
        window.open("blog.php", "_self");
    };

    document.querySelector("#videos").onclick = () => {
        window.open("video.php", "_self");
    };

    document.querySelector("#challenges").onclick = () => {
        window.open("task.php", "_self");
    };

    document.querySelector("#diary").onclick = () => {
        window.open("diary.php", "_self");
    };
</script>

</html>
<?php

} else {
    header("location:login.php ");
}
?>