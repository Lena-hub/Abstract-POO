<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    // protected attributes 
    protected $nbLane = 2;
    protected $maxSpeed = 50;

    // methodes to see  and add another cars and vehicules 

    public function addVehicle(Vehicule $vehicule)
    {
        if ($vehicule instanceof Vehicule) {
            echo "Véhicule est autorisé."."</br>";
            $this->currentVehicles[] = $vehicule;
        } else {
            echo "Véhicule non autorisé"."</br>";
        }
        
    }
    
}

?>