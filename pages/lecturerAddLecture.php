<!-- Made by Navjot 23.03.2017 -->

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <?php
            global $conn;
            //getting currently logged in lecturerID
            $lecID = $_POST["lectureToFeedback"];
            $lecName = null;
            $sql = "SELECT lecturerName FROM lecturer WHERE lecturerId='$lecID'";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $lecName = $row["lecturerName"];
            }
        ?>
    </head>
    <body>
        <div align="left" id="menuButton">
            <form id="log_out" action="index.php?page=mainPage" method="POST">
                <button class="bButton" type="submit">LOG OUT</button>
            </form>
            <form id="menu" action="index.php?page=lecturerMain" method="POST">
                <button class="bButton" name="lectureToFeedback" value="<?php echo($lecName) ?>" type="submit">MENU</button>
            </form>
        </div>
        <div class="logo">
            <img src="img/ActiFeedBack.svg">
        </div> 
        <h1>Add a new lecture</h1>
        <h2>Lecturer: <?php echo ($lecName) ?> </h2>
        <center>
            <div id="newLecture">
                <form id="lectureForm" action="index.php?page=lecturerFeedback" method="POST">
                    <input class="lectureField" type="text" name="lectureName" placeholder="Course name"><br>
                    <input type=hidden name="lectureToFeedback" value="<?php echo($lecName) ?>">
                    <input type=hidden name="lecturerID" value="<?php echo($lecID) ?>">
                    <input type=hidden name="lectureDate" value="<?php echo(date("Y-m-d")) ?>">
                    <button class="aButton" type="submit" value="<?php echo($lecName) ?>">ADD LECTURE</button>
                </form>
            </div>
        </center>
    </body>
</html>