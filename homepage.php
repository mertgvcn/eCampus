<?php
include("DBconnection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Home
    </title>
</head>

<style type="text/css">
    ul {
        list-style: none; /* Listeleme işaretlerini kaldırır */
        padding-left: 0;
    }

    button { /* Page isimlerinin kutusunu özelleştirir */
        margin: 10px;
        padding: 10px 20px;
        width: 150px;
        float: left;
        background-color: whitesmoke;
    }
    h2{
        background-color: whitesmoke;
        width: 90%;
        opacity: 0.7;
        padding: 4px;
        border-radius: 5px;
        text-align: center;
    }

    .animation {
        display: flex;
        justify-content: center;
    }

    .box { /* e campus harflerini şekillendirir */
        width: auto;
        height: 100px;
        background-color: black;
        margin: 0px;
        font-size: 100px;
        padding: 20px;
        color: #fff;
    }
    .page{
        align-items: center;
        vertical-align: middle;
    }
    .boxright {
        display: none;
    }

    input[type="text"] {
        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 90%;
    }
    .list{
        float: left;
        width: 50%;
    }
    .boxright{

        width: 50%;
        margin-left: 50px;
    }

    .form-container {
        width: 734px;
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: center; /* Yatayda ve dikeyde ortalamak için ekledik */
        margin-top: 20px;
        background: url(okul.jpg);
        background-repeat: no-repeat;
        background-size: 100%;
        margin: auto; /* Sayfayı ortalamak için ekledik */
    }


    .form-container input[type="submit"] {
        margin-top: 10px;

    }

    .form-container h2 {
        margin-bottom: 10px;
    }

    /* Step 1: Build the Animation */
    @-webkit-keyframes aniload {
        from {
            -webkit-transform:translate(0px, 1000px)
        }
        to   {
            -webkit-transform:translate(0px, 0px)
        }
    }

    @-moz-keyframes aniload {
        from {
            -moz-transform:translate(0px, 1000px)
        }
        to   {
            -moz-transform:translate(0px, 0px)
        }
    }

    @-ms-keyframes aniload {
        from {
            -ms-transform:translate(0px, 1000px)
        }
        to   {
            -ms-transform:translate(0px, 0px)
        }
    }

    @-o-keyframes aniload {
        from {
            -o-transform:translate(0px, 1000px)
        }
        to   {
            -o-transform:translate(0px, 0px)
        }
    }

    @keyframes aniload {
        from {
            transform:translate(0px, 1000px)
        }
        to   {
            transform:translate(0px, 0px)
        }
    }

    /* Step 2: Call the Animation */
    #box1 {
        -webkit-animation:aniload 2s;
        -moz-animation:aniload 2s;
        -ms-animation:aniload 2s;
        -o-animation:aniload 2s;
        animation:aniload 2s;
    }

    #box2 {
        -webkit-animation:aniload 1.5s;
        -moz-animation:aniload 1.5s;
        -ms-animation:aniload 1.5s;
        -o-animation:aniload 1.5s;
        animation:aniload 1.5s;
    }

    #box3 {
        -webkit-animation:aniload 2s;
        -moz-animation:aniload 2s;
        -ms-animation:aniload 2s;
        -o-animation:aniload 2s;
        animation:aniload 2s;
    }

    #box4 {
        -webkit-animation:aniload 1s;
        -moz-animation:aniload 1s;
        -ms-animation:aniload 1s;
        -o-animation:aniload 1s;
        animation:aniload 1s;
    }

    #box5 {
        -webkit-animation:aniload 1.5s;
        -moz-animation:aniload 1.5s;
        -ms-animation:aniload 1.5s;
        -o-animation:aniload 1.5s;
        animation:aniload 1.5s;
    }
    #box6 {
        -webkit-animation:aniload 1s;
        -moz-animation:aniload 1s;
        -ms-animation:aniload 1s;
        -o-animation:aniload 1s;
        animation:aniload 1s;
    }

    #box7 {
        -webkit-animation:aniload 2s;
        -moz-animation:aniload 2s;
        -ms-animation:aniload 2s;
        -o-animation:aniload 2s;
        animation:aniload 2s;

    </style>


    <body style="background-color: #204E5F;">
        <!-- bu kısım havalı bir ecampus yazısı oluşturmak için -->
    <div class="page">
        <div class="animation">
            <div class="box" id="box1">e</div>
            <div class="box" id="box2">C</div>
            <div class="box" id="box3">A</div>
            <div class="box" id="box4">M</div>
            <div class="box" id="box5">P</div>
            <div class="box" id="box6">U</div>
            <div class="box" id="box7">S</div>
        </div>

        <!-- bu kısımı kullanıcının gitmek istediği sayfada doğru verileri gösterebilmek için, kullanıcıdan gerekli inputu alıyoruz a -->
        <div class="form-container">
            <div id="list">
                <ul>
                    <li>
                        <button onclick="showPage('studentPage')">Student Page</button>
                    </li>
                    <li>
                        <button onclick="showPage('instructorPage')">Instructor Page</button>
                    </li>
                    <li>
                        <form action="departments_page.php" method="post">
                            <input type="submit" style="width: 150px; height: 40px; border: solid 2px; margin-left: 10px" value="Department List">
                            </form>                                          
                        </li>
                        <li>
                            <form action="projects_page.php" method="post">
                                <input type="submit" style="width: 150px; height: 40px; border: solid 2px; margin-left: 10px" value="Project List">
                            </form>     
                        </li>
                    </ul>
                </div>

                <div class="boxright" id="studentPage" style="display: none;">
                <form action="student_page.php" method="post">
                    <h2>Student Page:</h2>
                    <input type="text" required name="ssn" placeholder="Enter student ssn">
                        <input type="submit" name="gonder" value="Login">
                            </form>
                            </div>

                            <div class="boxright" id="instructorPage" style="display: none;">
                                <form action="instructor_page.php" method="post">
                                    <h2>Instructor Page:</h2>
                                    <input type="text" required name="issn" placeholder="Enter instructor ssn">
                                        <input type="submit" name="gonder" value="Login">
                                            </form>
                                            </div>

                                            </div>
                                            </div>

                                            <script>
                                                var currentPage = "";

                                                function showPage(pageId) {
                                                    if (currentPage !== "") {
                                                        document.getElementById(currentPage).style.display = "none";
                                                    }

                                                    document.getElementById(pageId).style.display = "block";
                                                    currentPage = pageId;
                                                }
                                            </script>
                                            </body>
                                            </html>
