<?php

namespace App\Controller;

use App\Repository\DirectorRepository;
use App\Repository\GenreRepository;
use App\Repository\MovieRepository;

class MovieController extends Controller
{
    public function route(): void
    {
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'show':
                        $this->show();
                        break;
                    case 'list':
                        $this->list();
                        break;
                    default:
                        throw new \Exception("Cette action n'existe pas : " . $_GET['action']);
                        break;
                }
            } else {
                throw new \Exception("Aucune action détectée");
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
    }

    protected function show()
    {
        try {
            if (isset($_GET['id'])) {
                // Récupérer le film avec le Repository
                $movieRepository = new MovieRepository();
                $id = (int)$_GET['id'];
                $movie = $movieRepository->findOneById($id);

                if ($movie) {
                    $genreRepository = new GenreRepository();
                    $genres = $genreRepository->findAllByMovieId($movie->getId());

                    $directorRepository = new DirectorRepository();
                    $directors = $directorRepository->findAllByMovieId($movie->getId());

                    $this->render('movie/show', [
                        'movie' => $movie,
                        'genres' => $genres,
                        'directors' => $directors,
                    ]);
                } else {
                    throw new \Exception("Ce film n'existe pas");
                }

            } else {
                throw new \Exception("L'id est manquant en paramètre d'url");
                
            }

        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        } 
    }


    protected function list()
    {
        try {
            // Récupérer tous les films
            $movieRepository = new MovieRepository();
            $movies = $movieRepository->findAll();

            $this->render('movie/list', [
                'movies' => $movies,
            ]);



        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        } 
    }
}