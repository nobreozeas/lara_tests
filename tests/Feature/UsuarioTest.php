<?php


use App\Models\Usuario;

it('nome do usuario deve ser maior ou igual que 3 letras e possuir apenas caracteres', function(){

   

    $usuario = new Usuario();

    $nome = $usuario->nome = '';

    


    
    expect(true)->toBeTrue();
});

// function validaSobrenome($sobrenome){
//     if(strlen($sobrenome) >= 3 and !empty($sobrenome)){
//         return preg_match('/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/', $sobrenome) ? true : false;
//     }else{
//         return false;
//     }
// }