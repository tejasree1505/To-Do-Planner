<!DOCTYPE html>
<html>
    <head>
        <title>To-Do Planner</title>
        <script src="https://kit.fontawesome.com/ef4e8ae36f.js" crossorigin="anonymous"></script>
        <style>
            body{font-family: Arial;
            background: #f1f1f1;}

            * {
            box-sizing: border-box;
            }

            .heading{
            color:rgb(123, 9, 123);
            }

            .row:after {
            content: "";
            display: table;
            clear: both;
            }
           
            .left{ float: left;
            background-color: rgb(221, 195, 239);
            padding-left: 30px;
            width: 30%;}

            .middle{ float: left;background-color: rgb(201, 155, 233);
            width: 45%;}

            .right{ float: left;
            background-color: rgb(221, 195, 239);
            width: 25%;
            padding-right: 25px;}

            .heading{font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 25px;font-weight:bold;}

            .leftcard{
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            margin-left: 20px;
            margin-bottom: 20px;
            }

            .middlecard{
            background-color: rgb(228, 207, 243);
            padding: 20px;
            margin-top: 20px;}

            .rightcard{
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            margin-right: 10px;
            margin-bottom: 20px;
            text-align:right;
            }

            .rightcard img{
            width:65px; float:left; display: inline; padding:0px; float:right;
            }

            .leftcard1{
            background-color: rgb(240, 167, 204);
            padding: 15px;
            margin-top: 20px;
            border-radius: 7px;
            margin-left: 20px;
            margin-bottom: 20px;
            width:40%;
            box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
            }

            .leftcard2{
            background-color: rgb(216, 153, 244);
            padding: 15px;
            margin-top: 20px;
            border-radius: 7px;
            margin-left: 20px;
            margin-bottom: 20px;
            width:40%;box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
            }

            .lcout{
            display:flex;}

            .mcout{
            background-color:white;
            padding:20px;
            border-radius: 7px;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            }

            input,textarea,select{
            background-color: rgb(233, 217, 244);
            border-style: none;
            border-radius: 3px;
            height: 28px;
            width:100%;
            padding:9px;
            }

            button{
            width:30%; height:35px; background-color:rgb(210, 162, 243); font-weight:bold; font-size: 15px;  border-style: none; border-radius:7px;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;                }
            .insidephp{
            height:15px;
            width:15px;
            float:left;
            display: inline;
            }

            table {
            justify-content: center;
            background-color: rgb(196, 99, 196); 
            color: black; 
            border-radius: 7px; 
            border-spacing: 0;
            }

            th{border-radius:7px;
            color: black; 
            }

            th,td {
            font-weight: bold; 
            }

            td{
            background-color:rgb(239, 225, 249);}

            tr:last-child > td {
            border-bottom: none;
            }

        </style>
    </head>
    <body>
        <div class="row">
           <div class="left">
                <div class="leftcard">
                    <div class="heading">
                        <i class="fa-solid fa-list"></i>&nbsp;&nbsp;Taskify<br>
                    </div>
                    <div class="lcout">

                        <div class="leftcard1">
                            <center style="font-weight:bold; font-size:18px;"><h2>
                            <?php 
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $db="myDB";
                            $conn = mysqli_connect($servername, $username, $password,$db);
                            $q1="SELECT count(*) as tot1 from todo where typex='personal'";
                            $result1=mysqli_query($conn,$q1);
                            $data1=mysqli_fetch_assoc($result1);
                            echo $data1['tot1'];
                            $q2="SELECT count(*) as tot2 from todo where typex='official'";
                            $result2=mysqli_query($conn,$q2);
                            $data2=mysqli_fetch_assoc($result2);
                            mysqli_close($conn);
                            ?>
                            </h2>
                            Personal<center>
                        </div>

                        <div class="leftcard2">
                            <center style="font-weight:bold; font-size:18px;"><h2>
                            <?php
                            echo $data2['tot2'];
                            ?>
                            </h2>
                            Official</center>
                        </div>
                    </div>

                    <div class="mcout">
                        <div class="heading" style="font-size:18px">
                        Add New Task</div><br>
                        <form method="post">
                            <input type="text" name="title" placeholder="Title"><br><br>
                            <input type="date" name="datex" style="width:46%;">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="time" name="timex" style="width:46%;"><br><br>
                            <select name="repeatx" style="height:35px">
                                <option name="repeatx">Do not Repeat</option>
                                <option name="repeatx">Every Weekday</option>
                                <option name="repeatx">Daily</option>
                                <option name="repeatx">Weekly</option>
                                <option name="repeatx">Monthly</option>
                                <option name="repeatx">Yearly</option>
                            </select><br><br>
                            <input type="radio" id="r1" name="typex" value="personal" style="height:14px; width:13px;">
                            <label for="r1">Personal</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" id="r2" name="typex" value="official" style="height:14px; width:13px;">
                            <label for="r2">Official</label><br><br>
                            <textarea placeholder="Add Notes" name="notes" style="height:35px"></textarea><br><br>
                            <center>
                            <button type="submit"  name="add" value="Add">Add</button>
                            <button type="reset" name="cancel" value="Cancel">Cancel</button>
                            </center>
                        </form> 
                    </div>
                    <?php 
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $db="myDB";
                    $conn = mysqli_connect($servername, $username, $password,$db);
                    if (empty($_POST["title"])==0){
                    $a=$_POST["title"];
                    $b=$_POST["datex"];
                    $c=$_POST["timex"];
                    $d=$_POST["repeatx"];
                    $e=$_POST["typex"];
                    $f=$_POST["notes"];
                    $sql = "INSERT INTO todo(title, datex, timex, repeatx, typex, notes) VALUES ('$a','$b','$c','$d','$e','$f')";
                    mysqli_query($conn,$sql);
                    mysqli_close($conn);
                    };
                    ?>

                </div> 
            </div> 


            <div class="middle">
                <div class="middlecard">
                    <div class="heading">
                        Today's Schedule
                        <div id="current_date" style="float:right; display: inline; font-size:20px;"></div>
                    </div>
                    <script>
                        date = new Date();
                        year = date.getFullYear();
                        month = date.getMonth() + 1;
                        day = date.getDate();
                        document.getElementById("current_date").innerHTML =  day  + "/" +month+ "/" + year;
                    </script><br><br>
                    <div class="mcout">
                        <div class="heading">Task</div><br>
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $db="myDB";
                            $conn = mysqli_connect($servername, $username, $password,$db);
                            $ddd=date("Y-m-d");
                            $s='SELECT * FROM todo where datex="2022-07-19"';
                            if($result=mysqli_query($conn,$s)){
                                if(mysqli_num_rows($result)>0){
                                    while($row=mysqli_fetch_array($result))
                                    {
                                        if ($row['typex']=='personal')
                                        {
                                            echo "<div class='lcout' ><input type='checkbox' style=' height:15px;
                                            width:15px; '>";
                                            echo "<h3 style='background-color:rgb(241, 184, 213) ; border-left:7px solid rgb(138, 39, 90);
                                            padding: 15px;
                                            box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
                                            border-bottom-right-radius: 25px;
                                            border-top-right-radius: 25px;
                                            width:90%; '>";
                                            echo "<i class='fa-solid fa-bars'></i>&nbsp;".$row['title']."<br>";
                                            echo "<p style='font-size:15px;font-weight: lighter; '><i class='fa-solid fa-note-sticky'></i>&nbsp;".$row['notes']."<br><br>";
                                            echo "<i class='fa-solid fa-hourglass-start'></i>&nbsp;".$row['timex']."</p>";
                                            echo '</h3><br></div>';
                                        }
                                        else{
                                            echo "<div class='lcout' ><input type='checkbox' style=' height:15px;
                                            width:15px; '>";
                                            echo "<h3 style='background-color:rgb(228, 186, 247) ; border-left:7px solid rgb(134, 23, 134);
                                            padding: 15px;
                                            box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
                                            border-bottom-right-radius: 25px;
                                            border-top-right-radius: 25px;
                                            width:90%; '>";
                                            echo "<i class='fa-solid fa-bars'></i>&nbsp;".$row['title']."<br>";
                                            echo "<p style='font-size:15px;font-weight: lighter; '><i class='fa-solid fa-note-sticky'></i>&nbsp;".$row['notes']."<br><br>";
                                            echo "<i class='fa-solid fa-hourglass-start'></i>&nbsp;".$row['timex']."</p>";
                                            echo '</h3><br></div>';
                                        }

                                    }
                                }
                            }
                            mysqli_close($conn);
                        ?>
                    </div>
                 </div>
            </div>

            <div class="right">
                <div class="rightcard">
                    <img src="https://djtonyllc.com/wp-content/uploads/2020/12/ABC_alphabet_letter_font_graphic_language_text_T-512.png">
                    <h3>Tejasree</h3>
                    <hr style="color:black; background:black; height:2px;">
                    <br><br>
                    <h2 style="color: black; text-align:center;">
                    July 2022
                    </h2>
                    <table  align="center" 
                    cellspacing="10" cellpadding="7">
                        <caption align="top">
                        </caption>
                        <thead>
                            <tr>
                                <th>Sun</th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>1</td>
                                <td>2</td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>