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
            $sub_array[] = $row["IdGestionDocumento"];
            $sub_array[] = $row["Fec_Registro"];
            $sub_array[] = $row["nombretipo"];
            $sub_array[] = $row["Des_NombreDocumento"]; 
            //$sub_array[] = $row["Flg_Estado"];
            if($row["Flg_Estado"] == 1){
                $sub_array[] = "Activo"; 
            }else {
                $sub_array[] = "Inactivo"; 
            }
            $sub_array[] = '<button type="button" onClick="vista('.$row["IdGestionDocumento"].');" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-eye" style="margin:0"></i</div></button>';
            $sub_array[] = '<button type="button" onClick="edit('.$row["IdGestionDocumento"].');"  class="btn btn-outline-danger btn-icon"><div><i class="fa fa-edit" style="margin:0"></i></div></button>';
            $sub_array[] = '<button type="button" onClick="eliminar('.$row["IdGestionDocumento"].');"  class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash" style="margin:0"></i></div></button>';

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
       
        $datos = $documento->get_documento_x_id($_POST["id_doc_gestion"]);

        if(empty($_POST["id_doc_gestion"])){
            if (is_array($datos) == true and count($datos) == 0) {
                $documento->insert_documento(
                    $_POST["IdGestionDocumento"],
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
            }
        }
        else {
            if($_FILES['Des_RutaDocumento']['name'] != ""){
                $documento->update_documento_file($_POST["id_doc_gestion"],$_POST["IdTipDocumentoGestion"],$_POST["Des_Detalle"],$_POST["Des_NombreDocumento"], $_FILES['Des_RutaDocumento']['name']);
                
                $ruta = "../Docs/".$_POST["IdGestionDocumento"]."/";
                //$files_array = array();
                if(!file_exists($ruta)){
                    mkdir($ruta, 0777, true);
                }
                $nombre = $_FILES['Des_RutaDocumento']['tmp_name'];
                $destino = $ruta.$_FILES['Des_RutaDocumento']['name'];
                
                move_uploaded_file($nombre, $destino);
            }else {
                $documento->update_documento($_POST["id_doc_gestion"],$_POST["IdTipDocumentoGestion"],$_POST["Des_Detalle"],$_POST["Des_NombreDocumento"]);
            }
            echo "1";
        }
        
        break;
    
    case "mostrar":
        $datos = $documento->get_documento_x_id($_POST["IdGestionDocumento"]);
        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["IdGestionDocumento"] = $row["IdGestionDocumento"];
                $output["id_generator"] = $row["id_generator"];
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
    
    case "mostrar_ultimo":
        $datos = $documento->get_generator();
        echo json_encode($datos);
        break;
}
?>
