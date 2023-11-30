<?php
require "Vehicule.php";

class Voiture extends Vehicule
{
    protected int $nombre_roues;
    /**
     * Get the value of nombre_roues
     */
    public function getNombreRoues(): int
    {
        return $this->nombre_roues;
    }

    /**
     * Set the value of nombre_roues
     */
    public function setNombreRoues(int $nombre_roues): self
    {
        $this->nombre_roues = $nombre_roues;

        return $this;
    }
}