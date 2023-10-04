<?php
    require_once("../config/conexion.php");
    require_once("../models/TiposdeDocumento.php"); 
    $tipodocumento = new TipoDocumento();

    switch($_GET["op"]) {

        case "combo":
            $datos=$tipodocumento->get_tipoDocumento();
            if (is_array($datos)==true and count ($datos)>0){
                $html = "<option label='Seleccione'></option>";
                foreach($datos as $row){
                    $html.= "<option value='".$row["IdTipDocumentoGestion"]."'>".$row["Nom_TipoDocumentoGestion"]."</option>";
                }
                echo $html;
            }
            break;

        case "listar":
            $datos=$tipodocumento->get_tipoDocumento();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["IdTipDocumentoGestion"];
                $sub_array[] = $row["Nom_TipoDocumentoGestion"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["IdTipDocumentoGestion"].');" id="'.$row["IdTipDocumentoGestion"].'"class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i</div></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["IdTipDocumentoGestion"].');" id="'.$row["IdTipDocumentoGestion"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
                

                $data[] = $sub_array;
            }   
            
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);

            break;

        case "guardaryeditar":
            $datos=$tipodocumento->get_tipoDocumento_x_id($_POST["IdTipDocumentoGestion"]);
            if(empty($_POST["IdTipDocumentoGestion"])){
                if(is_array($datos)==true and count($datos)==0){
                    $tipodocumento->insert_tipoDocumento($_POST["Nom_TipoDocumentoGestion"]);
                }
            }else{
                $tipodocumento->update_tipoDocumento($_POST["IdTipDocumentoGestion"],$_POST["Nom_TipoDocumentoGestion"]);
            }
            break;

        case "mostrar":
            $datos=$tipodocumento->get_tipoDocumento_x_id($_POST["IdTipDocumentoGestion"]);
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row){
                    $output["IdTipDocumentoGestion"] = $row["IdTipDocumentoGestion"];
                    $output["Nom_TipoDocumentoGestion"] = $row["Nom_TipoDocumentoGestion"];
                }
                echo json_encode($output);
            }
            break;
            
        case "eliminar":
            $tipodocumento->delete_tipoDocumento($_POST["IdTipDocumentoGestion"]);
            break;
    
        }
?>