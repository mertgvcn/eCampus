<html>

    <head>
    <title>
        Project Details
    </title>        
</head>

<style>

    #main_body {
        width: 600px;
        height: 650px;
        margin: auto;
        background-color: #B7D7D8;
        border: solid 2px;
        border-radius: 15px
    }

    #project_information  {
        width: 560px;
        height: 150px;
        margin: auto;
        margin-top: 10px;
        background-color: #EDF7F5;
        border: solid 2px;
        border-radius: 15px
    }

    #instructors_list {
        width: 560px;
        height: 225px;
        margin: auto;
        margin-top: 10px;
        background-color: #EDF7F5;
        border: solid 2px;
        border-radius: 15px
    }

    #gradstudents_list {
        width: 560px;
        height: 225px;
        margin: auto;
        margin-top: 10px;
        background-color: #EDF7F5;
        border: solid 2px;
        border-radius: 15px
    }

</style>

<body style= "font-family : sans-serif; background-color: #204E5F">

<div id="main_body"> <!-- Main Body --> 

    <div id = "project_information"> <!-- Project Information -->

        <div style = "margin-left: 10px; margin-top:10px; font-size: 30px; font-weight: bold; text-align: center"> <!-- Big Project Title -->
            <?php
            $pName = strtoupper($_GET['pName']);
            echo $pName;
            ?>
        </div>

        <div>  <!-- Project Other Infos -->
            <?php
            $projectName = $_GET['pName'];

            include("DBconnection.php");

            if (isset($_POST)) {

                $query = "select i.iname, p.subject, p.budget, p.startDate, p.enddate, p.controllingDName
                           from project p 
                           join instructor i on p.leadSsn = i.ssn
                           where p.pName = '" . $pName . "' ";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $insName = $row["iname"];
                    $subject = $row["subject"];
                    $budget = $row["budget"];
                    $startDate = $row["startDate"];
                    $enddate = $row["enddate"];
                    $controllingDName = $row["controllingDName"];

                    echo "<span style='font-size: 18px; margin-left:8px;'><strong>Head Instructor:</strong> " . $insName . " <br></span>";
                    echo "<span style='font-size: 18px; margin-left:8px;'><strong>Subject:</strong> " . $subject . " <br></span>";
                    echo "<span style='font-size: 18px; margin-left:8px;'><strong>Budget:</strong> " . $budget . " <br></span>";
                    echo "<span style='font-size: 18px; margin-left:8px;'><strong>Date:</strong> " . $startDate . " - " . $enddate . " <br></span>";
                    echo "<span style='font-size: 18px; margin-left:8px;'><strong>Department :</strong> " . $controllingDName . " <br></span>";
                }
            }
            ?>
        </div>
    </div>


    <div id = "instructors_list">
        <div>  <!-- instructors List -->
            <h4 style="text-align: center; margin-top: 10px; font-size: 30px; font-weight: bold;">WORKING INSTRUCTORS</h4>

            <table style="margin: auto; margin-top: -40px; background-color: white" border="8" cellspacing="1" cellpadding="2">
                <tr>
                    <th><font face="Arial, Helvetica, sans-serif">NAME</font></th>
                    <th><font face="Arial, Helvetica, sans-serif">HOUR</font></th>
                </tr>

                <?php
                $projectName = $_GET['pName'];
                include("DBconnection.php");

                if (isset($_POST)) {
                    echo "";

                    $query = "select i.iname, pi.workinghour
                              from project_has_instructor pi
                              join instructor i on pi.issn = i.ssn
                              where pi.pName = '" . $projectName . "' ";
                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $insName = $row["iname"];
                        $workinghour = $row["workinghour"];

                        echo "<tr>
                                  <td style='text-align: center;'>$insName</td>
                                  <td style='text-align: center;'>$workinghour</td>
                            </tr>";
                    }
                }
                ?>

            </table>
        </div>
    </div>

    <div id = "gradstudents_list">
        <div>  <!-- gradstudents List -->
            <h4 style="text-align: center; margin-top: 10px; font-size: 30px; font-weight: bold;">WORKING GRAD STUDENTS</h4>

            <table style="margin: auto; margin-top: -40px; background-color: white" border="8" cellspacing="1" cellpadding="2">
                <tr>
                    <th><font face="Arial, Helvetica, sans-serif">NAME</font></th>
                    <th><font face="Arial, Helvetica, sans-serif">HOUR</font></th>
                </tr>

                <?php
                $projectName = $_GET['pName'];
                include("DBconnection.php");

                if (isset($_POST)) {
                    echo "";

                    $query = "select s.studentname, pg.workingHour
                              from project_has_gradstudent pg
                              join student s on pg.Gradssn = s.ssn
                              where pg.pName = '" . $projectName . "' ";
                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $gradName = $row["studentname"];
                        $workinghour = $row["workingHour"];

                        echo "<tr>
                                  <td style='text-align: center;'>$gradName</td>
                                  <td style='text-align: center;'>$workinghour</td>
                            </tr>";
                    }
                }
                ?>

            </table>
        </div>
    </div>

</div> 

</body>

</html>