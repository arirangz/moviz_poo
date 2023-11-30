<?php

namespace App\Tools;

class StringTools
{
    /*
        Transforme une chaine en camelCase (ou pascalCase si deuxième param à true)
    */
    public static function toCamelCase(string $value, $pascalCase = false): string
    {
        /*  
            On remplace les tiret et underscore par des espaces, 
            puis en met les premières lettres de chaque mot en majuscule avec ucword
        */
        $value = ucwords(str_replace(array('-', '_'), ' ', $value));
        // On retire les espaces
        $value = str_replace(' ', '', $value);
        // Si le param $pasacalCase est à true, on met la première lettre en minuscule
        if ($pascalCase === false) {
            return lcfirst($value);
        } else {
            return $value;
        }
    }

    /*
        Transforme une chaine en pascalCase (lowerCamelCase) en appellant toCamelCase avec le deuxième param à true
    */
    public static function toPascalCase(string $value): string
    {
        return self::toCamelCase($value, true);
    }

    /*
        Transforme une chaine pour la rendre valide pour les urls, nom de fichier
    */
    public static function slugify($text, string $divider = '-')
    {
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, $divider);

        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
}
