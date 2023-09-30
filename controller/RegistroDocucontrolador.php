<?php
require_once("../config/conexion.php");
require_once("../models/RegistroDocumento.php");

$documento = new Document();

switch ($_GET["op"]) {


    case "guardaryeditar":
        $datos = $documento->get_documento_x_id($_POST["IdGestionDocumento"]);

        if (empty($_POST["IdGestionDocumento"])) {
            if (is_array($datos) == true and count($datos) == 0) {
                $documento->insert_documento(
                    $_POST["IdTipDocumentoGestion"],
                    $_POST["Des_Detalle"],
                    $_POST["Fec_Registro"],
                    $_POST["Des_RutaDocumento"],
                    $_POST["Des_NombreDocumento"],
                    $_POST["IdTipArchivo"],
                    $_POST["Flg_Busqueda"],
                    $_POST["Flg_Estado"]
                );
            }
        } else {
            $documento->update_documento($_POST["IdGestionDocumento"],$_POST["IdTipDocumentoGestion"],$_POST["Des_Detalle"],$_POST["Fec_Registro"],$_POST["Des_RutaDocumento"],$_POST["Des_NombreDocumento"],$_POST["IdTipArchivo"],$_POST["Flg_Busqueda"],$_POST["Flg_Estado"]);
        }
        //echo "1";
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
