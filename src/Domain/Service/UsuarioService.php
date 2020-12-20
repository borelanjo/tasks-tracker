<?php

namespace App\Domain\Service;

use App\Domain\Model\Usuario;

/**
 * class UsuarioService
 * @package App\Domain\Service
 */
interface UsuarioService
{
    public function listar(): array;

    public function atribuicoes(int $id): array;
}