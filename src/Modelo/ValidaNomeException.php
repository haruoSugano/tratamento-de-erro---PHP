<?php

namespace Alura\Banco\Modelo;

class ValidaNomeException extends \LogicException
{
    public function __construct($nomeTitular)
    {
        $mensagem = "Este $nomeTitular, precisa ter mais de 5 caracteres";
        parent::__construct($mensagem);
    }
}

?>
