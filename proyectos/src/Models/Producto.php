<?php

namespace App\Models;

abstract class Producto{

public function __construct(readonly public string $nombre, readonly public float $precioBase){
    
    
}
abstract public function precioBase(int $cantidad): float;
}


?>