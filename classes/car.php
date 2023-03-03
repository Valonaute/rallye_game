<?php
require_once 'database.php';

class car {
    public $_pilot;
    public $_model; 
    public $_color; 
    public $_max_speed;

    public $_speed = 0;
    public $_tyreshealth = 100;
    public $_cap = 0;

    public function __construct($pilot,$model,$color,$max_speed)
    {
        $this->setpilot($pilot);
        $this->setmodel($model);
        $this->setcolor($color);
        $this->setmax_speed($max_speed);
    }
    // --------------------- Setters ---------------------
    public function setpilot($value){
        $this->_pilot = $value;}
    public function setteam($value){
        $this->_team = $value;}
    public function setmodel($value){
        $this->_model = $value;}        
    public function setcolor($value){
        $this->_color = $value;}        
    public function setmax_speed($value){
        $this->_max_speed = $value;}         
    public function setspeed($value){
        $this->_speed = (int)$value;}
    public function settyreshealth($value){
        $this->_tyreshealth = $value;}
    public function setcap($value){
        $this->_cap = (int)$value;}      

    //  Fin des setters   
    // Debut des getters : 

    public function getspeed(){
        return $this->_speed;}
    public function getcap(){
        return $this->_cap;}
    //  Fin des getters 
    



    // Methods de la voiture 
// fonction start augmente la vitesse de +20 et connecte à la base de données 
    public function start(){
        $this->_speed = $this->_speed + 20;
        $pdo = database::Connection();
        $req = $pdo->prepare("INSERT INTO race ('id_car', 'pilot', 'speed', 'cap', 'tyreshealth') VALUES (null, ?, ?, ?, ?)");
        $req->execute([$this->_pilot, $this->_speed, $this->_cap, $this->_tyreshealth]);
        echo "You started and your speed is now ".$this->_speed;
        return $this->_speed;}
    
    public function accelerate($time){
        $new_speed = $this->_speed *(1+(0.10*$time));
        return $new_speed;}
    public function brake($time){
        $this->_speed -= 0.1*$time*$this->_speed;
        return "You have lost 10% of your past speed. Now your speed is".$this->_speed;}
    public function stop(){
        if ($this->_speed < 20){ 
        $this->_speed = 0;
        return "The engine is now off. You're speed is now ".$this->_speed;
        } else {
            return "You're speed is too high to stop now, please break and then try to stop again";
        }}
    public function turnRight(){
        $this->_cap += 10;
        if ($this->_speed > 60){
            $this->_tyreshealth -= 10; 
        }
        if ($this->_speed > 120){
            $this->_tyreshealth -= 20; 
        }
        if ($this->_speed > 180){
            $this->_tyreshealth -= 40; 
        }
        return "You had turn, your cap is now ".$this->_cap." and your tires health is ".$this->_tyreshealth;}
    public function turnLeft(){
        $this->_cap -= 10;
        if ($this->_speed > 60){
            $this->_tyreshealth -= 10; 
        }
        if ($this->_speed > 120){
            $this->_tyreshealth -= 20; 
        }
        if ($this->_speed > 180){
            $this->_tyreshealth -= 40; 
        }
        return "You had turn, your cap is now ".$this->_cap." and your tires health is ".$this->_tyreshealth;}


}

?>