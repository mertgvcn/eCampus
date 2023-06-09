<html>
    <head>

    <title>
        Projects
    </title>

</head>

<style>

    /* TOP TITLE - BACKGROUND */
    #project_title_background {
        width: 600px;
        height: 100px;
        margin: auto;
        background-color: #B7D7D8;
        border: solid 2px;
        border-radius: 15px
    }

    /* DEPARTMENT LIST */
    #project_list_zone {
        width: 600px;
        height: 500px;
        margin: auto;
        margin-top: 20px;
        background-color: #B7D7D8;
        border: solid 2px;
        border-radius: 15px
    }

    #project_list_background {
        width: 300px;
        height: 455px;
        background-color: #EDF7F5;
        margin:auto;
        margin-top: 20px;
        border: solid 2px #ccc;
        border-radius: 15px;
    }

</style>

<body style= "font-family : sans-serif; background-color: #204E5F">

<div id="project_title_background">  <!-- TITLE -->
    <div style="text-align: center; font-size: 30px; font-weight: bold; margin-top: 30px">
        PROJECT LIST
    </div>
</div>

<div id="project_list_zone"> <!-- Project List Zone -->
    <div id = "project_list_background">  <!-- Project list background--->

        <table style="margin: auto; margin-top:10px; background-color: white" border="8" cellspacing="2" cellpadding="3">
            <tr>
                <th>PROJECT NAME</th>
            </tr>


            <?php
            include("DBconnection.php");

            if (isset($_POST)) {
                echo "";

                $query = "select pName
                          from project p
                          order by pName";
                $result = mysqli_query($conn, $query);
                
                while ($row = mysqli_fetch_assoc($result)) {
                    $projectName = $row["pName"];

                    echo "<tr>
                          <td style='text-align: center;'>$projectName</td>
                          <td style='text-align: center;'><a href='project_details.php?pName=$projectName'>View Details</a></td>
                          </tr>";
                }
            }
            ?>
        </table>
        
    </div>

</div>

</body>

</html>
