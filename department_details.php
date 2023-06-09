<html>

    <head>
    <title>
        Department Details
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

    #department_information  {
        width: 560px;
        height: 100px;
        margin: auto;
        margin-top: 10px;
        background-color: #EDF7F5;
        border: solid 2px;
        border-radius: 15px
    }

    #curr_list {
        width: 560px;
        height: 250px;
        margin: auto;
        margin-top: 10px;
        background-color: #EDF7F5;
        border: solid 2px;
        border-radius: 15px
    }

    #prj_list {
        width: 560px;
        height: 250px;
        margin: auto;
        margin-top: 10px;
        background-color: #EDF7F5;
        border: solid 2px;
        border-radius: 15px
    }

</style>

<body style= "font-family : sans-serif; background-color: #204E5F">

<div id="main_body"> <!-- Main Body --> 

    <div id = "department_information"> <!-- Department Information -->

        <div style = "margin-left: 10px; margin-top:10px; font-size: 30px; font-weight: bold; text-align: center"> <!-- Big Department Title -->
            <?php
            $departmentName = strtoupper($_GET['dName']);
            echo $departmentName;
            ?>
        </div>

        <div>  <!-- Department Other Infos -->
            <?php
            $departmentName = $_GET['dName'];

            include("DBconnection.php");

            if (isset($_POST)) {

                $query = "select i.iname, d.buildingName
                           from department d
                           join instructor i on d.headSsn = i.ssn
                           where d.dName = '" . $departmentName . "' ";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $insName = $row["iname"];
                    $buildingName = $row["buildingName"];

                    echo "<span style='font-size: 20px; margin-left:8px;'><strong>Head Instructor:</strong> " . $insName . " <br></span>";
                    echo "<span style='font-size: 20px; margin-left:8px;'><strong>Building Name:</strong> " . strtoupper($buildingName) . " <br></span>";
                }
            }
            ?>
        </div>
    </div>


    <div id = "curr_list">
        <div>  <!-- Curricula Courses List -->

            <h4 style="text-align: center; margin-top: 10px; font-size: 30px; font-weight: bold;">CURRICULUM</h4>

            <table style="margin: auto; margin-top: -40px; background-color: white" border="8" cellspacing="1" cellpadding="2">
                <tr>
                    <th><font face="Arial, Helvetica, sans-serif">COURSE CODE</font></th>
                    <th><font face="Arial, Helvetica, sans-serif">COURSE NAME</font></th>
                </tr>

                <?php
                $departmentName = $_GET['dName'];
                include("DBconnection.php");

                if (isset($_POST)) {
                    echo "";

                    $query = "SELECT c.courseCode, c.courseName
                              FROM course c
                              NATURAL JOIN curriculacourses cc
                              WHERE cc.currCode in (
                                            SELECT c.currCode
                                            FROM curricula c
                                            WHERE c.dName = '" . $departmentName . "'
                              );";

                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $courseCode = $row["courseCode"];
                        $courseName = $row["courseName"];

                        echo "<tr>
                                  <td style='text-align: center;'>$courseCode</td>
                                  <td style='text-align: center;'>$courseName</td>
                            </tr>";
                    }
                }
                ?>

            </table>
        </div>
    </div>

    <div id = "prj_list">
        <div>  <!-- Project List -->

            <h4 style="text-align: center; margin-top: 10px; font-size: 30px; font-weight: bold;">PROJECTS</h4>

            <table style="margin: auto; margin-top: -40px; background-color: white" border="8" cellspacing="1" cellpadding="2">
                <tr>
                    <th><font face="Arial, Helvetica, sans-serif">PROJECT NAME</font></th>
                    <th><font face="Arial, Helvetica, sans-serif">SUBJECT</font></th>
                </tr>

                <?php
                $departmentName = $_GET['dName'];
                include("DBconnection.php");

                if (isset($_POST)) {
                    echo "";

                    $query = "SELECT p.pName, p.subject
                              FROM project p
                              WHERE p.controllingDName = '" . $departmentName . "';";

                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $pName = $row["pName"];
                        $subject = $row["subject"];

                        echo "<tr>
                                  <td style='text-align: center;'>$pName</td>
                                  <td style='text-align: center;'>$subject</td>
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