<?php

class Vehicule
{
    protected string $marque;
    protected float $vitesse_max;

    /**
     * Get the value of marque
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     */
    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of vitesse_max
     */
    public function getVitesseMax(): float
    {
        return $this->vitesse_max;
    }

    /**
     * Set the value of vitesse_max
     */
    public function setVitesseMax(float $vitesse_max): self
    {
        $this->vitesse_max = $vitesse_max;

        return $this;
    }

}