<?php
require_once("../config/conexion.php");
require_once("../models/RegistroDocumento.php");

$documento = new Document();

switch ($_GET["op"]) {


    case "listar":
        $datos=$documento->get_Documento();
        $data= Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["IdTipDocumentoGestion"];
            $sub_array[] = $row["Fec_Registro"];
            $sub_array[] = $row["IdTipArchivo"];
            $sub_array[] = $row["Des_NombreDocumento"]; 
            $sub_array[] = $row["Flg_Estado"];   
            $sub_array[] = '<button type="button" onClick="vista('.$row["IdTipDocumentoGestion"].');" id="'.$row["IdTipDocumentoGestion"].'"class="btn btn-outline-primary btn-icon"><div><i class="fa fa-eye"></i</div></button>';
            $sub_array[] = '<button type="button" onClick="edit('.$row["IdTipDocumentoGestion"].');" id="'.$row["IdTipDocumentoGestion"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-edit"></i></div></button>';
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
       
        $datos = $documento->get_documento_x_id($_POST["IdGestionDocumento"]);

        
        if (is_array($datos) == true and count($datos) == 0) {
            $documento->insert_documento(
                $_POST["IdTipDocumentoGestion"],
                $_POST["Des_Detalle"],
                $_POST["Fec_Registro"],
                $_FILES['Des_RutaDocumento']['name'],//ruta
                $_POST["Des_NombreDocumento"]);//nombre de documento


            $ruta = "../Docs/".$_POST["IdGestionDocumento"]."/";
            //$files_array = array();
            if(!file_exists($ruta)){
                mkdir($ruta, 0777, true);
            }
            $nombre = $_FILES['Des_RutaDocumento']['tmp_name'];
            $destino = $ruta.$_FILES['Des_RutaDocumento']['name'];
            
            move_uploaded_file($nombre, $destino);

            echo "1";
        } else {
            //$documento->update_documento($_POST["IdGestionDocumento"],$_POST["IdTipDocumentoGestion"],$_POST["Des_Detalle"],$_POST["Fec_Registro"],$_POST["Des_RutaDocumento"],$_POST["Des_NombreDocumento"],$_POST["IdTipArchivo"]);
            echo "0";
        }
        
        break;
    
    case "mostrar":
        $datos = $documento->get_documento_x_id($_POST["IdGestionDocumento"]);
        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["IdGestionDocumento"] = $row["IdGestionDocumento"];
                $output["IdTipDocumentoGestion"] = $row["IdTipDocumentoGestion"];
                $output["Des_Detalle"] = $row["Des_Detalle"];
                $output["Fec_Registro"] = $row["Fec_Registro"];
                $output["Des_RutaDocumento"] = $row["Des_RutaDocumento"];
                $output["Des_NombreDocumento"] = $row["Des_NombreDocumento"];
                $output["IdTipArchivo"] = $row["IdTipArchivo"];
                $output["Flg_Busqueda"] = $row["Flg_Busqueda"];
                $output["Flg_Estado"] = $row["Flg_Estado"];                
            }
            echo json_encode($output);
        } 
        break;
    

    case "eliminar":
        $documento->delete_documento($_POST["IdGestionDocumento"]);
        break;
}
?>
