<?php

namespace App\Tools;

class FileTools
{

    public static function uploadImage($destinationPath, $file, $oldFileName = null)
    {
        $errors = [];
        $fileName = null;

        if (isset($file["tmp_name"]) && $file["tmp_name"] != '') {
            $checkImage = getimagesize($file["tmp_name"]);
            if ($checkImage !== false) {
                $fileName = StringTools::slugify(basename($file["name"]));
                $fileName = uniqid() . '-' . $fileName;

                if (move_uploaded_file($file["tmp_name"], _ROOTPATH_.$destinationPath . $fileName)) {
                    if ($oldFileName) {
                        unlink($destinationPath . $oldFileName);
                    }
                } else {
                    $errors['file'] = 'Le fichier n\'a pas été uploadé';
                }
            } else {
                $errors['file'] = 'Le fichier doit être une image';
            }
        }
        return ['fileName' => $fileName ?? null, 'errors' => $errors];
    }

}