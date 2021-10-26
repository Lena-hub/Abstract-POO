<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
     // Constantes

    protected $nbLane = 1;
    protected $maxSpeed = 10;
    
      // Méthodes
    public function addVehicle(Vehicule $vehicule)
    {
        if ($vehicule instanceof Bike || $vehicule instanceof Skateboard) {
            echo "Véhicule est autorisé"."</br>";
            $this->currentVehicles[] = $vehicule;
        }else{
            echo "Véhicule non autorisé"."</br>";
        }
        
    }
}