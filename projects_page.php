<html>
    <head>

    <title>
        Departments
    </title>

</head>

<style>

    /* TOP TITLE - BACKGROUND */
    #project_title_background {
        width: 1000px;
        height: 100px;
        margin: auto;
        background-color: #B7D7D8;
        border: solid 2px;
        border-radius: 15px
    }

    /* PROJECT LIST - STRUCTURE,BACKGROUND,TABLE */
    #project_list_zone {
        width: 370px;
        height: 540px;
        background-color: #B7D7D8;
        margin-top: 12px;
        font-size: 18px;
        border: solid 2px;
        border-radius: 15px;
    }

    #project_list_background {
        width: 300px;
        height: 500px;
        background-color: #EDF7F5;
        margin:auto;
        margin-top: 20px;
        border: solid 2px #ccc;
        border-radius: 15px;
    }

    #project_list_table {
        width: 250px;
        height: 460px;
        background-color: white;
        margin:auto;
        margin-top: 20px;
        border: solid 2px #ccc;
        border-radius: 15px;
    }

    /* SHOW DETAILS - STRUCTURE */
    #project_details_zone {
        width: 720px;
        height: 540px;
        background-color: #B7D7D8;
        margin-top: 12px;
        margin-left: 10px;
        font-size: 18px;
        border: solid 2px;
        border-radius: 15px;
    }

    #project_details_background {
        width: 620px;
        height: 500px;
        background-color: #EDF7F5;
        margin:auto;
        margin-top: 20px;
        border: solid 2px #ccc;
        border-radius: 15px;
    }

    /* SHOW DETAILS - MAIN INFORMATION PART */
    #project_main_info {
        width: 570px;
        height: 140px;
        background-color: white;
        margin:auto;
        margin-top: 20px;
        border: solid 2px #ccc;
        border-radius: 15px;
    }

    #prj_name_title {
        width: 550px;
        height: 30px;
        margin:auto;
        margin-top: 5px;
        font-size: 25px;
        font-weight: bold;
        text-decoration: underline;
    }

    #prj_infos {
        width: 550px;
        height: 95px;
        margin:auto;
        margin-top: 5px;
        font-size: 20px;
        background-color: black;
    }

    /* SHOW DETAILS - EXTRA INFORMATION PART */
    #prj_other_infos {
        width: 570px;
        height: 320px ;
        background-color: white;
        margin: auto;
        margin-top:8px;
        display: flex;
        justify-content: space-between;
        border: solid 2px #ccc;
        border-radius: 15px;
    }

    #working_ins_table {
        width: 265px;
        height: 300px ;
        background-color: black;
        margin: auto;
        margin-top:8px;
    }

    #working_gradstd_table {
        width: 265px;
        height: 300px ;
        background-color: black;
        margin: auto;
        margin-top:8px;
    }

</style>

<body style= "font-family : sans-serif; background-color: #204E5F">

<div id="project_title_background">  <!-- TITLE -->
    <div style="text-align: center; font-size: 30px; font-weight: bold; margin-top: 30px">
        PROJECTS INFORMATIONS
    </div>
</div>

<div style="width: 1000px; margin: auto; display: flex; justify-content: space-between"> <!-- Main Body (Buttons+Tables) -->

    <div id = "project_list_zone">  <!-- project list zone--->

        <div id = "project_list_background"> <!-- project list background -->

            <div id = "project_list_table"> <!-- project list table -->
                    
            </div>

        </div>

    </div>


    <div id = "project_details_zone"> <!-- tables zone -->

        <div id="project_details_background"> <!-- tables background -->

            <!-- TOP SIDE: MAIN DETAILS -->

            <div id ="project_main_info"> <!-- Project Main Information -->

                <div id="prj_name_title"> <!-- Project name title -->
                    PROJECT NAME
                </div>

                <div id="prj_infos">
                        
                </div>

            </div>

            <!-- BOTTOM SIDE: OTHER DETAILS -->

            <div id="prj_other_infos"> <!-- project name title -->

                <div id = "working_ins_table"> <!-- instructors that work on selected project  -->

                </div>  

                <div id = "working_gradstd_table"> <!-- gradstudents that work on selected project -->
                    
                </div>

            </div>


        </div>

    </div>

</div>

</body>

</html>
