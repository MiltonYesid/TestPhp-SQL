<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ControllerCliente {

    public function add($NOMBRE, $RUT, $DIRECCION, $GIRO, $COMENTARIOS) {
        /* @var $cliente Cliente */
        /* @var $DAOCliente DAOCliente */
        include_once '../DAO/DAOCliente.php';
        /*
         * Se instancia la clase cliente
         */
        $DAOCliente = new DAOCliente();
        /*
         * Se llena el POJO
         */
        $cliente = new Cliente();
        /*
         * Se realiza las validaciones respectivas
         */
        if ($NOMBRE != NULL && $NOMBRE != "") {
            if ($RUT != NULL && $RUT != "") {
                if ($DIRECCION != NULL && $DIRECCION != "") {
                    if ($GIRO != NULL && $GIRO != "") {
                        if ($COMENTARIOS != NULL && $COMENTARIOS != "") {
                            $cliente->setCOMENTARIOS($COMENTARIOS);
                            $cliente->setGIRO($GIRO);
                            $cliente->setDIRECCION($DIRECCION);
                            $cliente->setNOMBRE($NOMBRE);
                            $cliente->setRUT($RUT);
                            /*
                             * DELEGAR AL DAO EN LA BASE DE DATOS
                             */
                            $DAOCliente->insertarCliente($cliente);
                            return true;
                        }
                    }
                }
            }
        }
        return false;
    }

}
