<?php 

    $palavra   = strtoupper('cobra');
    
    // VALIDAÇÃO PARA CARACTERES ESPECIAIS 
    if(preg_match('/^[A-Z ]+$/', $palavra)){
        //$palavras = explode("\n", file_get_contents('palavras.txt'));
        $totalCaracteresPalavras = (strlen($palavra)-1);

        $i = 0;
        $contAnagramas = 0;
        $anagrama =  [];
        $indexRef =  [];
        $anagramas = [];

        $possibilidades = 0;

        while($possibilidades <= 100){

            while($i<=4){
                $index = mt_rand(0, $totalCaracteresPalavras);
                if(!in_array($index, $indexRef)){
                    $anagrama[$possibilidades][] = $palavra[$index];
                    $indexRef[] = $index;
                    $i++;
                }
            }
            
            $anagramas[] = $anagrama[$possibilidades];
            $indexRef = [];
            $possibilidades++;

            echo 'Possibilidades '.$possibilidades.'\n';
        }

        echo "<pre>";
        print_r($anagramas);

    }else{
        echo "Não é permitido caracteres inválidos (com acentuação, números ou pontuação).";
    }