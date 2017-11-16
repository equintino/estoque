<?php
    if(!isset($quant)){
        $quant=0;
    }
    if(@$_GET['gravado']){
        Flash::addFlash('Registro salvo com sucesso.');
    }
?>