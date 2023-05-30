<?php

namespace Impacta\Curso\Helper;

class Validate {
    public function validar(float $value) {
        if (!is_float($value)) {
            return false;
        }

        return $value;
    }
}