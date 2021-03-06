<!-- Made by Henrik on 15.02.17 --> 

<?php
    //this submits the speed of the lecture so that the lecturer can get the feedback on their page
    if (isset($_POST['speedValue'])) {
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        echo("Hi! " . (int)($_POST['speedValue']) . " is the speed you think the lecture is progressing at.");
        $valueToSend = (int)($_POST['speedValue']);
        $lectureIDToSet = ($_POST['lecID']);
        
        //Getting the table from the DB
        global $conn;
        $sql = "INSERT INTO Feedback (speed, difficulty, rating, time, lectureId)
                VALUES ($valueToSend,NULL,NULL,NOW(),$lectureIDToSet)";
        echo($sql);

        if (mysqli_query($conn, $sql)) {
            echo("<br><br>New record created successfully");
        } else {
            echo("Error: " . $sql . "<br>" . mysqli_error($conn));
        }
    }
?>