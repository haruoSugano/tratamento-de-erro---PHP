<?php

class MinhaExcecao extends DomainException
{

    public function exibe()
    {
        echo "Helio";
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $erro) {
    $erro->exibe();
}

?>
