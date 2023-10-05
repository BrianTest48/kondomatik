<?php

    class Document extends Conectar {
    public function get_documento(){
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT tgd.*, tdoc.Nom_TipoDocumentoGestion as nombretipo FROM tmgestiondocumentos tgd
                INNER JOIN tbtipodocumentogestion tdoc
                ON tdoc.IdTipDocumentoGestion = tgd.IdTipDocumentoGestion
                WHERE tgd.Flg_Estado=1;";
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

    public function insert_documento($IdGenerator, $TipoDocGes, $Des_Detalle, $Fec_Registro, $Des_RutaDocumento, $Des_NombreDocumento){
        $conectar= parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO tmgestiondocumentos 
                (IdGestionDocumento,id_generator , IdTipDocumentoGestion, Des_Detalle, Fec_Registro, Des_RutaDocumento, Des_NombreDocumento, IdTipArchivo, Flg_Busqueda, Flg_Estado) 
                VALUES 
                (NULL,?, ?, ?, ?, ?, ?, 1, 1, 1)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $IdGenerator);
        $sql->bindValue(2, $TipoDocGes);
        $sql->bindValue(3, $Des_Detalle);
        $sql->bindValue(4, $Fec_Registro);
        //$sql->bindValue(3, date('Y-m-d'), PDO::PARAM_STR);
        $sql->bindValue(5, $Des_RutaDocumento);
        $sql->bindValue(6, $Des_NombreDocumento);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    

    public function update_documento($IdGestionDocumento,$IdTipDocumentoGestion,$Des_Detalle,$Des_NombreDocumento){
        $conectar= parent::conexion();
        parent::set_names();
        $sql = "UPDATE tmgestiondocumentos
        SET
            IdTipDocumentoGestion=?,
            Des_Detalle=?,
            Des_NombreDocumento=?
        WHERE
            IdGestionDocumento = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $IdTipDocumentoGestion);
        $sql->bindValue(2, $Des_Detalle);
        $sql->bindValue(3, $Des_NombreDocumento);
        $sql->bindValue(4, $IdGestionDocumento);
        $sql->execute();
        return $resultado = $sql->fetchAll();

    }

    public function update_documento_file($IdGestionDocumento,$IdTipDocumentoGestion,$Des_Detalle,$Des_NombreDocumento, $Des_ruta){
        $conectar= parent::conexion();
        parent::set_names();
        $sql = "UPDATE tmgestiondocumentos
        SET
            IdTipDocumentoGestion=?,
            Des_Detalle=?,
            Des_NombreDocumento=?,
            Des_RutaDocumento=?
        WHERE
            IdGestionDocumento = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $IdTipDocumentoGestion);
        $sql->bindValue(2, $Des_Detalle);
        $sql->bindValue(3, $Des_NombreDocumento);
        $sql->bindValue(4, $Des_ruta);
        $sql->bindValue(5, $IdGestionDocumento);
        $sql->execute();
        return $resultado = $sql->fetchAll();

    }

    public function get_generator(){
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT id_generator FROM tmgestiondocumentos ORDER BY IdGestionDocumento  DESC LIMIT 1 ;";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetch();
    }

    }

?>