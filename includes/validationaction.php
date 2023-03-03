<?php 
    
    if (!empty($_GET)){
        echo "<p> You selected ".$_GET['action']."</p>";
        if ($_GET["action"] == 'start'){
            $Rallye_Car_Valentin->start();
            echo "Your car just started, your speed is ".$Rallye_Car_Valentin->_speed." MPH";
        }
        if ($_GET["action"] == 'accelerate'){
            $Rallye_Car_Valentin->accelerate(1);
            echo "You just increased your speed, now you're driving at ".$Rallye_Car_Valentin->_speed." MPH";
        }
        if ($_GET["action"] == 'brake'){
            $Rallye_Car_Valentin->brake(1);
            echo "You just decreased your speed, now you're driving at ".$Rallye_Car_Valentin->_speed." MPH";
        }
        if ($_GET["action"] == 'right'){
            $Rallye_Car_Valentin->turnRight();
            echo "You just turned right, you're now driving to cap n° ".$Rallye_Car_Valentin->_cap;
        }
        if ($_GET["action"] == 'left'){
            $Rallye_Car_Valentin->turnLeft();
            echo "You just turned Left, you're now driving to cap n° ".$Rallye_Car_Valentin->_cap;
        }
        if ($_GET["action"] == 'stop'){
            $Rallye_Car_Valentin->stop();
            echo "You just stopped you're car ";
        }
        if ($_GET["action"] == 'print'){
            echo "<pre";
            print_r($Rallye_Car_Valentin);
            echo "<pre>";
            echo "By checking your car, You lost 30 sec in the race";
        }
    }
?>