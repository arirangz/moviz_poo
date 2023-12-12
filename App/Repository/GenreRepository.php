<?php

namespace App\Repository;
use App\Entity\Genre;

class GenreRepository extends Repository
{
    public function findAllByMovieId(int $movie_id): array
    {
        $query = $this->pdo->prepare("SELECT * FROM genre g
                                      LEFT JOIN movie_genre mg ON mg.genre_id = g.id
                                      WHERE mg.movie_id = :movie_id");
        $query->bindParam(':movie_id', $movie_id, $this->pdo::PARAM_STR);
        $query->execute();
        $genres = $query->fetchAll($this->pdo::FETCH_ASSOC);

        $genresArray = [];

        if ($genres) {
            foreach ($genres as $genre) {
                $genresArray[] = Genre::createAndHydrate($genre);
            }
        }
        return $genresArray;
    }
}