<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Entity\User;


class UserController extends Controller
{
    public function route(): void
    {
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'register':
                        $this->register();
                        break;
                    case 'delete':
                        // Appeler méthode delete()
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
  
    protected function register()
    {
        try {
            $errors = [];
            $user = new User();

            if (isset($_POST['saveUser'])) {
                //@todo gérer l'inscription utilisateur
            }

            $this->render('user/add_edit', [
                'user' => '',
                'pageTitle' => 'Inscription',
                'errors' => ''
            ]);

        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        } 

    }

}
