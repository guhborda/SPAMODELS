<?php

namespace model;
use sys\Conexao;
class Movimentacao{
    private $value;
    private $title;
    private $id_ctg;
    private $desc;
    private $user_id;
    private $date;
    private $ac_id;

    function setValue($val){
        $this->value = $val;
    }
    function getValue(){
        return $this->value;
    }

    function setTitle($val){
        $this->title = $val;
    }
    function getTitle(){
        return $this->title;
    }

    function setCategoria($val){
        $this->id_ctg = $val;
    }
    function getCategoria(){
        return $this->id_ctg;
    }

    function setDescricao($val){
        $this->desc = $val;
    }
    function getDescricao(){
        return $this->desc;
    }

    function setUser($val){
        $this->user_id = $val;
    }
    function getUser(){
        return $this->user_id;
    }

    function setDate($val){
        $this->date = $val;
    }
    function getDate(){
        return $this->date;
    }
    
    function setAccount($val){
        $this->ac_id = $val;
    }
    function getAccount(){
        return $this->ac_id;
    }

}
?>