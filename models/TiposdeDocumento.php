<?php

    class TipoDocumento extends Conectar {
        public function get_tipodocumento(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tbtipodocumentogestion";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    
  
    public function get_tipodocumento_x_id($IdTipDocumentoGestion){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM tbtipodocumentogestion WHERE IdTipDocumentoGestion = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $IdTipDocumentoGestion);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

  
    public function delete_tipodocumento($IdTipDocumentoGestion){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="DELETE FROM tbtipodocumentogestion
      
        WHERE
              IdTipDocumentoGestion  = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $IdTipDocumentoGestion);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function insert_tipodocumento($Nom_TipoDocumentoGestion){
        $conectar= parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO tbtipodocumentogestion 
        (IdTipDocumentoGestion, Nom_TipoDocumentoGestion, Flg_Estado) VALUES (NULL, ?, 1)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $Nom_TipoDocumentoGestion);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function update_tipodocumento($IdTipDocumentoGestion ,$Nom_TipoDocumentoGestion, $estado){
        $conectar= parent::conexion();
        parent::set_names();
        $sql = "UPDATE tbtipodocumentogestion
        SET
              Nom_TipoDocumentoGestion=?,
              Flg_Estado =?
        WHERE
              IdTipDocumentoGestion = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $Nom_TipoDocumentoGestion);
        $sql->bindValue(2, $estado );
        $sql->bindValue(3, $IdTipDocumentoGestion );
        $sql->execute();
        return $resultado = $sql->fetchAll();

    }
    


    }

?>