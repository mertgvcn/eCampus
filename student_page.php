
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

    #buttons_zone {
        width: 220px;
        height: 400px;
        background-color: #B7D7D8;
        margin-top: 12px;
        font-size: 18px;
        border: solid 2px;
        border-radius: 15px;
    }

    #buttons_background {
        width: 200px;
        height: 350px;
        background-color: #EDF7F5;
        margin:auto;
        margin-top: 25px;
        border: solid 2px #ccc;
        border-radius: 15px;
    }

    #buttons {
        width: 150px;
        height: 30px;
        background-color: #79A7A8;
        margin-top: 12px;
        margin-left: 23px;
        border: solid 2px;
        border-radius: 5px;
        font-size: 12px;
        font-weight: bold;
        text-align: center;
    }

    #tables_zone {
        width: 760px;
        height: 400px;
        background-color: #B7D7D8;
        margin-top: 12px;
        font-size: 18px;
        border: solid 2px;
        border-radius: 15px;
    }

    #table_background {
        width: 680px;
        height: 350px;
        background-color: #EDF7F5;
        margin:auto;
        margin-top: 25px;
        border: solid 2px #ccc;
        border-radius: 15px;
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

<div style="width: 1000px; margin: auto; display: flex; justify-content: space-between"> <!-- Main Body (Buttons+Tables) -->

    <div id = "buttons_zone">  <!-- buttons zone -->
        <div id = "buttons_background"> <!-- buttons background -->


            <!-- buttons -->
            <div>
                <button id="buttons" onclick="toggleDiv('table_weeklyschedule')">WEEKLY SCHEDULE</button>
            </div>

            <div>
                <button id="buttons" onclick="toggleDiv('table_gradereport')">GRADE REPORT</button>
            </div>

            <div>
                <button id="buttons" onclick="toggleDiv('table_currentcourses')">CURRENT COURSES</button>
            </div>

            <div>
                <button id="buttons" onclick="toggleDiv('table_futurecourses')">COURSES TO BE TAKEN</button>
            </div>

            <div>
                <button id="buttons" onclick="toggleDiv('table_supervisors_projects')">SUPERVISOR'S PROJECTS</button>
            </div>

        </div>
    </div>

    <div id = "tables_zone"> <!-- tables zone -->
        <div id="table_background">

            <div id="table_weeklyschedule" style="width: 660px; height: 350px; margin:auto; margin-top: -25px; display: none">  <!-- weekly schedule table -->        
                <h4 style="text-align: center; margin-top: 50px">WEEKLY SCHEDULE</h4>

                <table style="margin: auto; background-color: white" border="8" cellspacing="2" cellpadding="0.5">
                    <tr>
                        <th><font face="Arial, Helvetica, sans-serif">DAY</font></th>
                        <th><font face="Arial, Helvetica, sans-serif">HOUR</font></th>
                        <th><font face="Arial, Helvetica, sans-serif">COURSE CODE</font></th>
                    </tr>

                    <?php
                    include("DBconnection.php");

                    if (isset($_POST)) {
                        echo "";

                        $query = "SELECT ws.dayy AS 'DAY', ws.hourr AS 'HOUR', ws.courseCode AS 'COURSE CODE'
                                  FROM weeklyschedule ws
                                  join enrollment e on ws.courseCode = e.courseCode and ws.yearr = e.yearr and ws.semester = e.semester and ws.sectionId = e.sectionId 
                                  WHERE e.sssn = '" . $_POST['ssn'] . "'
                                  ORDER BY DAY, HOUR;";

                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $day = $row["DAY"];
                            $hour = $row["HOUR"];
                            $courseCode = $row["COURSE CODE"];

                            echo "<tr>
                                  <td style='text-align: center;'>$day</td>
                                  <td style='text-align: center;'>$hour</td>
                                  <td style='text-align: center;'>$courseCode</td>
                            </tr>";
                        }
                    }
                    ?>

                </table>
            </div>

            <div id="table_gradereport" style="width: 660px; height: 350px; margin:auto; margin-top: -25px; display: none"> <!-- grade report table -->
                <h4 style="text-align: center; margin-top: 50px">GRADE REPORT</h4>

                <table style="margin: auto; background-color: white" border="8" cellspacing="2" cellpadding="3">
                    <tr>
                        <th>COURSE CODE</th>
                        <th>GRADE</th>
                    </tr>

                    <?php
                    include("DBconnection.php");

                    if (isset($_POST)) {

                        $query = "select e.courseCode, e.grade
                                  from enrollment e
                                  where e.sssn = '" . $_POST['ssn'] . "';";
                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $coursecode = $row["courseCode"];
                            $grade = $row["grade"];

                            echo "<tr>";
                            echo "<td style='text-align: center;'>" . $coursecode . "</td>";
                            echo "<td style='text-align: center;'>" . $grade . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>

                </table>
            </div>

            <div id="table_currentcourses" style="width: 660px; height: 350px; margin:auto; margin-top: -25px; display: none"> <!-- current courses table -->
                <h4 style="text-align: center; margin-top: 50px">CURRENTLY TAKING COURSES</h4>

                <table style="margin: auto; background-color: white" border="8" cellspacing="2" cellpadding="3">
                    <tr>
                        <th>COURSE CODE</th>
                        <th>COURSE NAME</th>
                        <th>ECTS</th>
                        <th>NUM HOURS</th>
                    </tr>

                    <?php
                    include("DBconnection.php");

                    $query = "select c.courseCode, c.courseName, c.ects, c.numHours
                              from enrollment e, course c
                              where e.courseCode = c.courseCode and e.sssn = '" . $_POST['ssn'] . "'";
                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $courseCode = $row["courseCode"];
                        $courseName = $row["courseName"];
                        $ects = $row["ects"];
                        $numHours = $row["numHours"];

                        echo "<tr>
                             <td style='text-align: center;'>" . $courseCode . "</td>
                             <td style='text-align: center;'>" . $courseName . "</td>
                             <td style='text-align: center;'>" . $ects . "</td>
                             <td style='text-align: center;'>" . $numHours . "</td>
                             </tr>";
                    }
                    ?>

                </table>
            </div>

            <div id="table_futurecourses" style="width: 660px; height: 350px; margin:auto; margin-top: -25px; display: none"> <!-- future courses table -->
                <h4 style="text-align: center; margin-top: 50px">COURSES TO BE TAKEN</h4>

                <table style="margin: auto; background-color: white" border="8" cellspacing="2" cellpadding="3">
                    <tr>
                        <th>COURSE CODE</th>
                        <th>COURSE NAME</th>
                        <th>ECTS</th>
                    </tr>

                    <?php
                    include("DBconnection.php");

                    $query = "select c.courseCode, c.courseName, c.ects
                              from curriculacourses cc1
                              natural join course c
                              where cc1.courseCode not in (
                                     select e.courseCode
                                     from enrollment e
                                     where e.sssn = '" . $_POST['ssn'] . "'
                              ) and cc1.dName in (
                                     select cc2.dName
                                     from enrollment e
                                     join curriculacourses cc2 on e.courseCode = cc2.courseCode
                                     where e.sssn = '" . $_POST['ssn'] . "'
                              )";
                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $courseCode = $row["courseCode"];
                        $courseName = $row["courseName"];
                        $ects = $row["ects"];

                        echo "<tr>
                            <td style='text-align: center;'>" . $courseCode . "</td>
                            <td style='text-align: center;'>" . $courseName . "</td>
                            <td style='text-align: center;'>" . $ects . "</td>
                            </tr>";
                    }
                    ?>

                </table>
            </div>      

            <div id="table_supervisors_projects" style="width: 660px; height: 350px; margin:auto; margin-top: -25px;display: none"> <!-- supervisor's project table -->

                <?php
                include("DBconnection.php");

                $query = "select distinct phi.pName
                              from project_has_instructor phi
                              join gradstudent g on g.supervisorSsn = phi.issn or g.supervisorSsn = phi.leadSsn
                              where g.ssn = '" . $_POST['ssn'] . "'
                              order by pName";

                $query2 = "select s.gradorUgrad 
                               from student s
                               where s.ssn = '" . $_POST['ssn'] . "'";

                $result = mysqli_query($conn, $query);
                $result2 = mysqli_query($conn, $query2);

                if (mysqli_num_rows($result2) > 0) {
                    $row2 = mysqli_fetch_assoc($result2);
                    $gradorUgrad = $row2["gradorUgrad"];

                    if ($gradorUgrad == 0) {  //give a feedback if the student is not a gradstudent
                        echo "<h4 style='text-align: center; margin-top: 50px; font-size: 25px; font-weight: bold;'>You are not a grad student!</h4>";
                    } else {

                        //creating table
                        echo "  
                                <h4 style='text-align: center; margin-top: 50px'>SUPERVISOR'S PROJECT LIST</h4>
                                    
                                <table style='margin: auto; background-color: white' border='8' cellspacing='2' cellpadding='3'>
                                <tr>
                                     <th>PROJECT NAME</th>
                                </tr>
                            ";

                        //filling the table with project names
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $pname = $row["pName"];

                                echo "<tr>
                                      <td style='text-align: center;'>" . $pname . "</td>
                                      </tr>";
                            }
                        } else {
                            echo "<h4 style=text-align: center;'>Your supervisor is not working on a project!</h4>";
                        }

                        //Writing supervisor name on top side
                        $query3 = "select i.iname
                                       from instructor i
                                       join gradstudent g on i.ssn = g.supervisorSsn
                                       where g.ssn = '" . $_POST['ssn'] . "'";
                        $result3 = mysqli_query($conn, $query3);

                        $row3 = mysqli_fetch_assoc($result3);
                        $supervisorName = $row3['iname'];

                        echo "<h4>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                   Your supervisor is " . $supervisorName . "</h4>";
                    }
                }

                mysqli_close($conn);
                ?>

                </table>
            </div>

        </div>
    </div>   

</div>

</body>

<!-- some basic js codes to make design better -->
<script>
    var visibleDivId = null;

    window.onload = function () {
        hideAllDivs();
    };

    function toggleDiv(divId) {
        if (visibleDivId === divId) {
            hideDiv(divId);
        } else {
            showDiv(divId);
        }
    }

    function showDiv(divId) {
        if (visibleDivId !== null) {
            hideDiv(visibleDivId);
        }
        var div = document.getElementById(divId);
        div.style.display = "block";
        visibleDivId = divId;
    }

    function hideDiv(divId) {
        var div = document.getElementById(divId);
        div.style.display = "none";
        visibleDivId = null;
    }

    function hideAllDivs() {
        var divs = document.getElementsByClassName("box");
        for (var i = 0; i < divs.length; i++) {
            divs[i].style.display = "none";
        }
        visibleDivId = null;
    }
</script>

</html>