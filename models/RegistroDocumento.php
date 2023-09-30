<?php

    class Document extends Conectar {
    public function get_documento(){
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM tmgestiondocumentos WHERE Flg_Estado=1";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
  
    public function get_documento_x_id($IdGestionDocumento){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM tmgestiondocumentos WHERE IdGestionDocumento = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $IdGestionDocumento);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
  
    public function delete_documento($IdGestionDocumento){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="UPDATE tmgestiondocumentos
        SET Flg_Estado=0
        WHERE IdGestionDocumento = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $IdGestionDocumento);
        $sql->execute();
        return $sql->rowCount();
    }

    public function insert_documento($IdTipDocumentoGestion,$Des_Detalle,$Fec_Registro,$Des_RutaDocumento,$Des_NombreDocumento,$IdTipArchivo,$Flg_Busqueda,$Flg_Estado){
        $conectar= parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO tmgestiondocumentos 
                (IdTipDocumentoGestion, Des_Detalle, Fec_Registro, Des_RutaDocumento, Des_NombreDocumento, IdTipArchivo, Flg_Busqueda, Flg_Estado) 
                VALUES 
                (Null, ?, ?, ?, ?, ?, 1, 1)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $IdTipDocumentoGestion);
        $sql->bindValue(2, $Des_Detalle);
        $sql->bindValue(3, $Fec_Registro);
        //$sql->bindValue(3, date('Y-m-d'), PDO::PARAM_STR);
        $sql->bindValue(4, $Des_RutaDocumento);
        $sql->bindValue(5, $Des_NombreDocumento);
        $sql->bindValue(6, $IdTipArchivo);
        $sql->bindValue(7, $Flg_Busqueda);
        $sql->bindValue(8, $Flg_Estado);
   
        try {
            $sql->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error al insertar el Documento: " . $e->getMessage();
            throw $e;
        }
    }
    

    public function update_documento($IdGestionDocumento,$IdTipDocumentoGestion,$Des_Detalle,$Fec_Registro,$Des_RutaDocumento,$Des_NombreDocumento,$IdTipArchivo,$Flg_Busqueda,$Flg_Estado ){
        $conectar= parent::conexion();
        parent::set_names();
        $sql = "UPDATE tmgestiondocumentos
        SET
            IdTipDocumentoGestion=?,
            Des_Detalle=?,
            Fec_Registro=?,
            Des_RutaDocumento=?,
            Des_NombreDocumento=?,
            IdTipArchivo=?,
            Flg_Busqueda=?,
            Flg_Estado=?
        WHERE
            IdGestionDocumento = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $IdTipDocumentoGestion);
        $sql->bindValue(2, $Des_Detalle);
        $sql->bindValue(3, $Fec_Registro);
        $sql->bindValue(4, $Des_RutaDocumento);
        $sql->bindValue(5, $Des_NombreDocumento);
        $sql->bindValue(6, $IdTipArchivo);
        $sql->bindValue(7, $Flg_Busqueda);       
        $sql->bindValue(8, $IdGestionDocumento);
        $sql->bindValue(9, $Flg_Estado);
        $sql->execute();
        return $resultado = $sql->fetchAll();

    }

    }

?>