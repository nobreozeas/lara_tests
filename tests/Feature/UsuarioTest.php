<?php


use App\Models\Usuario;

it('cpf deve ser valido', function(){

    $usuario = new Usuario();

    $doc = $usuario->cpf = '03357858240';

    $cpf = preg_replace('/[^0-9]/', "", $doc);

    if (strlen($cpf) !== 11 || preg_match('/(\d)\1{10}/', $cpf)) {
        $this->assertTrue(false);
    }

    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }

        $d = ((10 * $d) % 11) % 10;

        if ($cpf[$c] != $d) {
            $this->assertTrue(false);

        }
    }
    $this->assertTrue(true);




   
});

it('nome precisa ter mais que 2 caracteres e nao pode conter numeros', function(){

    $usuario = new Usuario();

    $nome = $usuario->nome = 'ozeas';

    if(strlen($nome) >= 2){
        return preg_match('/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',$nome) ? $this->assertTrue(true) : $this->assertTrue(false);
        
    }else{
        $this->assertTrue(false);
    }
});

// function validaSobrenome($sobrenome){
//     if(strlen($sobrenome) >= 3 and !empty($sobrenome)){
//         return preg_match('/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/', $sobrenome) ? true : false;
//     }else{
//         return false;
//     }
// }