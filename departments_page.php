<html>
    <head>

    <title>
        Departments
    </title>

</head>

<style>

    /* TOP TITLE - BACKGROUND */
    #department_title_background {
        width: 1000px;
        height: 100px;
        margin: auto;
        background-color: #B7D7D8;
        border: solid 2px;
        border-radius: 15px
    }

    /* DEPARTMENT LIST - STRUCTURE,BACKGROUND,TABLE */
    #department_list_zone {
        width: 370px;
        height: 540px;
        background-color: #B7D7D8;
        margin-top: 12px;
        font-size: 18px;
        border: solid 2px;
        border-radius: 15px;
    }

    #department_list_background {
        width: 300px;
        height: 500px;
        background-color: #EDF7F5;
        margin:auto;
        margin-top: 20px;
        border: solid 2px #ccc;
        border-radius: 15px;
    }

    #department_list_table {
        width: 250px;
        height: 460px;
        background-color: white;
        margin:auto;
        margin-top: 20px;
        border: solid 2px #ccc;
        border-radius: 15px;
    }

    /* SHOW DETAILS - STRUCTURE */
    #department_details_zone {
        width: 720px;
        height: 540px;
        background-color: #B7D7D8;
        margin-top: 12px;
        margin-left: 10px;
        font-size: 18px;
        border: solid 2px;
        border-radius: 15px;
    }

    #department_details_background {
        width: 620px;
        height: 500px;
        background-color: #EDF7F5;
        margin:auto;
        margin-top: 20px;
        border: solid 2px #ccc;
        border-radius: 15px;
    }

    /* SHOW DETAILS - MAIN INFORMATION PART */
    #department_main_info {
        width: 570px;
        height: 140px;
        background-color: white;
        margin:auto;
        margin-top: 20px;
        border: solid 2px #ccc;
        border-radius: 15px;
    }

    #dep_name_title {
        width: 550px;
        height: 30px;
        margin:auto;
        margin-top: 5px;
        font-size: 25px;
        font-weight: bold;
        text-decoration: underline;
    }

    #dep_infos {
        width: 550px;
        height: 95px;
        margin:auto;
        margin-top: 5px;
        font-size: 20px;
        background-color: black;
    }

    /* SHOW DETAILS - EXTRA INFORMATION PART */
    #dep_other_infos {
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

    #cirricula_table {
        width: 265px;
        height: 300px ;
        background-color: black;
        margin: auto;
        margin-top:8px;
    }

    #projects_table {
        width: 265px;
        height: 300px ;
        background-color: black;
        margin: auto;
        margin-top:8px;
    }

</style>

<body style= "font-family : sans-serif; background-color: #204E5F">

<div id="department_title_background">  <!-- TITLE -->
    <div style="text-align: center; font-size: 30px; font-weight: bold; margin-top: 30px">
        DEPARTMENT INFORMATIONS
    </div>
</div>

<div style="width: 1000px; margin: auto; display: flex; justify-content: space-between"> <!-- Main Body (Buttons+Tables) -->

    <div id = "department_list_zone">  <!-- department list zone--->

        <div id = "department_list_background"> <!-- department list background -->

            <div id = "department_list_table"> <!-- department list table -->
                    
            </div>

        </div>

    </div>


    <div id = "department_details_zone"> <!-- tables zone -->

        <div id="department_details_background"> <!-- tables background -->

            <!-- TOP SIDE: MAIN DETAILS -->

            <div id ="department_main_info"> <!-- Department Main Information -->

                <div id="dep_name_title"> <!-- department name title -->
                    DEPARTMENT NAME
                </div>

                <div id="dep_infos">
                        
                </div>

            </div>

            <!-- BOTTOM SIDE: OTHER DETAILS -->

            <div id="dep_other_infos"> <!-- department name title -->

                <div id = "cirricula_table"> <!-- cirricula -->

                </div>  

                <div id = "projects_table"> <!-- projects -->
                    
                </div>

            </div>


        </div>

    </div>

</div>

</body>

</html>
