<?php

use App\Enums;

enum TypeBeerEnum: int 
{
  case ALTBIER = 1;
  case AMBER_ALE = 2;
  case BARLEY_WINE = 3;
  case BERLINER_WEISSE = 4;


  public function getName()
  {
    return match ($this) {
       self::ALTBIER => 'Altbier',
       self::AMBER_ALE => 'Amber ale',
       self::BARLEY_WINE => 'Barley wine',
       self::BERLINER_WEISSE => 'Berliner Weisse'
    };
  }

}