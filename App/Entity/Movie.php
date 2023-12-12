<?php

namespace App\Entity;

use DateTime;

class Movie extends Entity
{

    protected ?int $id = null;
    protected ?string $title = '';
    protected ?string $synopsis = '';
    protected DateTime $release_date;
    protected DateTime $duration;
    protected ?string $image_name = '';

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
     * Get the value of title
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of synopsis
     */
    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    /**
     * Set the value of synopsis
     */
    public function setSynopsis(?string $synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get the value of release_date
     */
    public function getReleaseDate(): DateTime
    {
        return $this->release_date;
    }

    /**
     * Set the value of release_date
     */
    public function setReleaseDate(DateTime $release_date): self
    {
        $this->release_date = $release_date;

        return $this;
    }

    /**
     * Get the value of duration
     */
    public function getDuration(): DateTime
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     */
    public function setDuration(DateTime $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get the value of image_name
     */
    public function getImageName(): ?string
    {
        return $this->image_name;
    }

    /**
     * Set the value of image_name
     */
    public function setImageName(?string $image_name): self
    {
        $this->image_name = $image_name;

        return $this;
    }

    public function getImagePath():string
    {
        if ($this->getImageName()) {
            return MOVIES_IMAGES_FOLDER.$this->getImageName();
        } else {
            return ASSETS_IMAGES_FOLDER."default-movie.png";
        }
    }


}