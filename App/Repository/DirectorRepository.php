<?php

namespace App\Repository;
use App\Entity\Director;

class DirectorRepository extends Repository
{
    public function findAllByMovieId(int $movie_id): array
    {
        $query = $this->pdo->prepare("SELECT * FROM director d
                                      LEFT JOIN movie_director md ON md.director_id = d.id
                                      WHERE md.movie_id = :movie_id");
        $query->bindParam(':movie_id', $movie_id, $this->pdo::PARAM_STR);
        $query->execute();
        $directors = $query->fetchAll($this->pdo::FETCH_ASSOC);

        $directorsArray = [];

        if ($directors) {
            foreach ($directors as $director) {
                $directorsArray[] = Director::createAndHydrate($director);
            }
        }

        return $directorsArray;
        

    }
}