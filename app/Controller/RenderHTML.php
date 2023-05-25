<?php

namespace Impacta\Curso\Controller;

abstract class RenderHTML {
    public function render(string $file, array $data, string $titulo): void {


        require __DIR__ . "/../view/$file.php";
    }
}