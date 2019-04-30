<?php

function visualizar (){
    $prod=array ();
    $prod ["name"]= "Iluminador líquido";
    $prod ["desc"]= "Lançamento de iluminador, com mais brilho e duração!Sua forma líquida facilita na aplicação e traz um melhor efeito.";
    $prod ["prec"]= "39,90";
    
    exibir("produto/visualizar", $prod);
            
}

function adicionar (){
   if (ehPost()){
        $nome = $_POST ["usuario"];
        $email = $_POST ["email"];
        $senha = $_POST ["senha"];
        
	 echo "erro";
    } else {
        exibir ("usuario/formulario");
    }
