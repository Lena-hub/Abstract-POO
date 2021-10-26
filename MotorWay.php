<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{ 
      //   // Attributs
    protected $nbLane = 4;
    protected $maxSpeed = 130;

      // Méthodes
    public function addVehicle(Vehicule $vehicule)
    {
        if ($vehicule instanceof Car) {
            echo "Véhicule est autorisé"."</br>";
            $this->currentVehicles[] = $vehicule;
        }else{
            echo "Véhicule non autorisé"."</br>";
        }
        
    }
    
}

?>