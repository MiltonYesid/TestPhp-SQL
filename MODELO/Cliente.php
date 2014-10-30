<?php

class Cliente
{
    
    public function getNOMBRE() {
        return $this->NOMBRE;
    }

    public function getID() {
        return $this->ID;
    }

    public function getRUT() {
        return $this->RUT;
    }

    public function getDIRECCION() {
        return $this->DIRECCION;
    }

    public function getGIRO() {
        return $this->GIRO;
    }

    public function getCOMENTARIOS() {
        return $this->COMENTARIOS;
    }

    public function setNOMBRE($NOMBRE) {
        $this->NOMBRE = $NOMBRE;
    }

    public function setID($ID) {
        $this->ID = $ID;
    }

    public function setRUT($RUT) {
        $this->RUT = $RUT;
    }

    public function setDIRECCION($DIRECCION) {
        $this->DIRECCION = $DIRECCION;
    }

    public function setGIRO($GIRO) {
        $this->GIRO = $GIRO;
    }

    public function setCOMENTARIOS($COMENTARIOS) {
        $this->COMENTARIOS = $COMENTARIOS;
    }

    private $NOMBRE;
    private $ID; 
    private $RUT;
    private $DIRECCION;
    private $GIRO;
    private $COMENTARIOS;
}