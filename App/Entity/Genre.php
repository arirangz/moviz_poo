<?php

namespace App\Entity;

use DateTime;

class Genre extends Entity
{

    protected ?int $id = null;
    protected ?string $name = '';
    
    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}