<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Page</title>

    <link rel="stylesheet" href="css/test1.css">
    <link rel="stylesheet" href="css/test.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background: rgb(23,13,193);
background: linear-gradient(90deg, rgba(23,13,193,1) 0%, rgba(144,170,203,1) 0%, rgba(213,224,238,1) 41%);">
    <div class=" bg-light container p-5">
        <div id="game" class="justify-center flex-column m-5">
            <div id="hud">
                <div class="hud-item_q">
                    <p id="progressText" class="hud-prefix  font-weight-bold" style="color: #90AACB;">
                        Question
                    </p>
                    <div id="progressBar">
                        <div id="progressBarFull"></div>
                    </div>
                </div>
                <!-- <div class="hud-item_ct">
                    <p class="hud-prefix_ch">Total Time Remaining:</p>
                    <p class="hud-prefix_cd"> </p>
                </div> -->
            </div>
            <br><br>
            <h2 id="question" class="font-weight-bold">What is the answer to this question</h2>
            <h5 id="information" class="my-5 font-italic" style="font-size: large;">SomeThing</h5>
            <div id="choices">
                <div class="choice-container">
                    <p class="choice-prefix"></p>
                    <p class="choice-text" data-number="1">Choice 1</p>
                </div>
                <div class="choice-container">
                    <p class="choice-prefix"></p>
                    <p class="choice-text" data-number="2">Choice 2</p>
                </div>
                <div class="choice-container">
                    <p class="choice-prefix"></p>
                    <p class="choice-text" data-number="3">Choice 3</p>
                </div>
                <div class="choice-container">
                    <p class="choice-prefix"></p>
                    <p class="choice-text" data-number="4">Choice 4</p>
                </div>
                <div class="choice-container">
                    <p class="choice-prefix"></p>
                    <p class="choice-text" data-number="5">Choice 5</p>
                </div>
                <div class="choice-container">
                    <p class="choice-prefix"></p>
                    <p class="choice-text" data-number="6">Choice 6</p>
                </div>
                <div class="choice-container">
                    <p class="choice-prefix"></p>
                    <p class="choice-text" data-number="7">Choice 7</p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/test.js"></script>

</html>