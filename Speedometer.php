<?php

    

class Speedometer {

    const convertValor = 1.609;
    const roundValor = 2;

    public static function convertKmToMiles($lenght){
        return round($lenght / self::convertValor, self::roundValor);
    }
    public static function concertMilesToKm($lenght){
        return round($lenght * self::convertValor, self::roundValor);
    }
}