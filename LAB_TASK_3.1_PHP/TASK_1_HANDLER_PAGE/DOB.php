<?php
    if(isset($_POST['submit']))
    {
        $day=$_POST['day'];
        $month=$_POST['month'];
        $year=$_POST['year'];
          echo "DOB: ".$day."/".$month."/".$year;
    }
?>