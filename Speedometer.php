<?php

    

class Speedometer {

    Const convertValor = 1.609;

    public static function convertKmToMiles($lenght){
        return $lenght / self::convertValor;
    }
    public static function concertMilesToKm($lenght){
        return $lenght * self::convertValor;
    }
}