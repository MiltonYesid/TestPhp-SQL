<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DAOCliente {
    
  

    public function insertarCliente($cliente) {
        
        include_once 'Connections/Connection.php';
        /* @var $cliente Cliente */
        include_once'../MODELO/Cliente.php';
        /*
         * Se obtiene los datos del POJO
         */
        $NOMBRE = $cliente->getNOMBRE();
        $RUT = $cliente->getRUT();
        $DIRECCION = $cliente->getDIRECCION();
        $GIRO = $cliente->getGIRO();
        $COMENTARIOS = $cliente->getCOMENTARIOS();
        /*
         * Conexion con la base de datos
         */
        $connection = getConnection();
         $SQL_INSERT = "INSERT INTO `cliente`(`nombre`, `rut`, `direccion`, `giro`, `Comentarios`) "
                 . "VALUES "
                 . "('.$NOMBRE.','.$RUT.','.$DIRECCION.','.$GIRO.','.$COMENTARIOS.')";
        mysql_query($SQL_INSERT, $connection) or die("Problemas el insert" . mysql_error());

    }

}
