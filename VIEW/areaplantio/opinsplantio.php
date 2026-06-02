<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst226/DAL/areaplantio.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst226/MODEL/areaplantio.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst226/DAL/insumo.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst226/MODEL/insumo.php";


    $plantio = new \MODEL\AreaPlantio(); 

    $plantio->setProdutor($_POST['produtor']); 
    $plantio->setInsumo($_POST['insumo']); 
    $plantio->setQuantidade($_POST['quantidade']); 
    $plantio->setValor($_POST['valor']); 

    $dalInsumo = new \DAL\Insumo(); 
    $dalPlantio = new \DAL\Areaplantio(); 

    //recuperar o objeto de insumo, correspondente ao insumo que deverá ser lançado na áreade plantio
    $insumo = $dalInsumo->SelectById($plantio->getInsumo()); 

    if ($insumo->getQuantidade() >= $plantio->getQuantidade()){
        //calcular novo estoque
        $estoque = $insumo->getQuantidade() - $plantio->getQuantidade(); 
        $insumo->setQuantidade($estoque);

        //atualiza a quantidade no produto
        $dalInsumo->Update($insumo); 

        //gravar dados de plantio
        $dalPlantio->Insert($plantio); 

    }


  

    header("location: lstplantio.php");

?> 