<?php

namespace Impacta\Curso\Helper;

trait getTrait {
    public function __get(string $name) {
        if (property_exists($this, $name)){
            $get = 'get' . ucfirst($name); //getNome

            if(!method_exists($this, $get)) {
                return false;
            }
            return $this->$get();
        }

        return false;
    }
}