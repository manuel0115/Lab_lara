<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Eventos_model
 *
 * @author manuel
 */
class Referencias_model extends CI_Model
{


    public $user_id=1;

    public function cargarDatosTablaAreaAnalitica()
    {
        $query = "SELECT * FROM AREA_ANALITICA;";

        $resultado = $this->db->query($query);

        $resultado = $resultado->result_array();

        log_message('ERROR','cargarDatosTablaAreaAnalitica \n'. $query . '\n<pre> ' . print_r($resultado, true) . '</pre>');

        return $resultado;
    }

    public function getDatosReferencias()
    {
        $query = "SELECT NOMBRE,ID FROM REFERENCIA";

        $resultado = $this->db->query($query);

        $resultado = $resultado->result_array();

        log_message('ERROR','getAreaAnalitica \n'. $query . '\n<pre> ' . print_r($resultado, true) . '</pre>');

        return $resultado;
    }

    public function insertar_area($obj)
    {
        $query = "INSERT INTO AREA_ANALITICA (NOMBRE,CREADO_POR,CREADO_EN,MODIFICADO_POR,MODIFICADO_EN,ESTADO)VALUES('$obj->area','$this->user_id',NOW(),'$this->user_id',NOW(),TRUE);";

        $resultado = $this->db->query($query);

        

        log_message('ERROR','insertar_area \n'. $query . '\n<pre> ' . print_r($resultado, true) . '</pre>');

        return $resultado;
    }

    public function modificar_area($obj)
    {
        $query = "UPDATE `AREA_ANALITICA`
        SET
        `NOMBRE` = '$obj->area',
        `MODIFICADO_POR` = '$this->user_id',
        `MODIFICADO_EN` = NOW(),
        `ESTADO` = TRUE
        WHERE `ID` = '$obj->id_area';";

        $resultado = $this->db->query($query);

        

        log_message('ERROR','modificar_area \n'. $query . '\n<pre> ' . print_r($resultado, true) . '</pre>');

        return $resultado;
    }

    public function areasAnaliticas()
    {
        $query = "SELECT ID,NOMBRE FROM AREA_ANALITICA";

        $resultado = $this->db->query($query);

        $resultado = $resultado->result_array();

        log_message('ERROR','cargar_menus \n'. $query . '\n<pre> ' . print_r($resultado, true) . '</pre>');

        return $resultado;
    }

 
}
