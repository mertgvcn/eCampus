
<html>

    <head>
    <title>
        Student Page
    </title>
</head>

<style>

    #std_information_background {
        width : 1000px;
        height: 200px;
        background-color: #B7D7D8;
        margin : auto;
        font-size: 30px;
        border: solid 2px;
        border-radius: 15px
    }

    #std_information {
        width: 800px;
        height: 140px ;
        margin: auto;
        background-color: #EDF7F5;
        margin-top: 8px;
        font-size: 18px;
        border-radius: 15px;
        border: solid 1px #ccc
    }

</style>


<body style= "font-family : sans-serif; background-color: #204E5F">

<div id="std_information_background"> <!-- student information background-->

    <div style="text-align: center; font-weight: bold; margin-top: 5px">
        STUDENT INFORMATION PAGE
    </div>


    <div id="std_information"> <!-- student informations-->
        <div style="padding-top: 18px; margin-left: 8px">
            <?php
            include("DBconnection.php");

            if (isset($_POST)) {
                echo "";

                $query = "select s.studentname, s.studentid, s.gradorUgrad, s.dName, i.iname
		      from student s
                      join instructor i on s.advisorSsn = i.ssn
		      where s.ssn = '" . $_POST['ssn'] . "' ";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $studentName = $row["studentname"];
                    $studentid = $row["studentid"];
                    $gradorUgrad = $row["gradorUgrad"];
                    $dName = $row["dName"];
                    $iname = $row["iname"];

                    echo "<span><strong>Student Name:</strong> " . $studentName . " <br></span>";
                    echo "<span><strong>Student ID:</strong> " . $studentid . " <br></span>";
                    echo "<span><strong>Grad Situation:</strong> " . $gradorUgrad . " <br></span>";
                    echo "<span><strong>Department Name:</strong> " . $dName . " <br></span>";
                    echo "<span><strong>Advisor Name:</strong> " . $iname . " <br></span>";
                } else {
                    echo "<p>No student information available.</p>";
                }
            }
            ?>
        </div>
    </div>

</div>   


</body>

</html>