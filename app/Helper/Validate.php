<?php

namespace Impacta\Curso\Helper;

class Validate {
    public function validar($value) {
        if ($value <= 0) {
            return false;
        }

        return $value;
    }
}