<?php


namespace App\Utils;


class FakeData
{
    public static function randomOrCreate($modelClass)
    {
        return $modelClass::inRandomOrder()->first() ?: factory($modelClass)->create();
    }
}
