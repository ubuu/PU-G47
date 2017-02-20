<!-- Made by Henrik on 15.02.17 --> 

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <h1>Welcome</h1>
        <div id="divDifficulty" >
            <h1>How difficult do you feel the lecture is right now?</h1>
            <center>
                <form action="pages/submitDifficult.php" method="POST" target="target">
                    <input type="image" src="img/veryEasyRect.png" name="difficultyValue" value="0">
                    <input type="image" src="img/easyRect.png" name="difficultyValue" value="1">
                    <input type="image" src="img/okRect.png" name="difficultyValue" value="2">
                    <input type="image" src="img/hardRect.png" name="difficultyValue" value="3">
                    <input type="image" src="img/veryHardRect.png" name="difficultyValue" value="4">
                </form>
            </center>
        </div>
        <div id="divSpeed">
            <h1>How fast do you feel the lecture is progressing right now?</h1>
            <center>
                <form action="pages/submitSpeed.php" method="POST" target="target">
                    <input type="image" src="img/verySlowRect.png" name="speedValue" value="0">
                    <input type="image" src="img/slowRect.png" name="speedValue" value="1">
                    <input type="image" src="img/okRect.png" name="speedValue" value="2">
                    <input type="image" src="img/fastRect.png" name="speedValue" value="3">
                    <input type="image" src="img/veryFastRect.png" name="speedValue" value="4">
                </form>
            </center>
        </div>
        <div id="divComment">
            <h1>Do you have any comments or questions?</h1>
            <div id="divTextFieldAndButton">
                <form action="pages/submitText.php" method="POST" target="target">
                    <textarea name="textFeedback" rows="3" cols="30">The cat was playing in the garden.</textarea><br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
        <iframe style="display:none;" name="target"></iframe>
    </body>
</html>
