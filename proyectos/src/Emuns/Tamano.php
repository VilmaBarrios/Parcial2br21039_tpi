<?php

namespace App\Enums;

enum Tamano: string{
    case pequeno ="P";
    case mediano = "M";
    case grande= "G";

    public function recargo(): float{
        return match ($this) {
            self::pequeno => 0.00,
            self::mediano => 0.25,
            self::grande => 0.50,
        };
    }
}


?>