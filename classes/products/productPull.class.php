<?php 
namespace ProductManager;
require_once (dirname(__DIR__).'../config/config.class.php');
use init\dbs;
$initDatabase = new dbs();
$db = $initDatabase->mambilimaDBConnection();
class ProductPull{
    public function getGender(){
        $o = [];
        $sql ="SELECT * FROM `gender` ORDER BY `gender`.`g_id`;";
        $stmt = $GLOBALS['db']->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($o,$row);
            }
            return $o;
        }
        else 
            return false;
        $stmt->close();
    }
    public function getWards(){
        $o = [];
        $sql ="SELECT * FROM `ward` ORDER BY `ward`.`w_id`;";
        $stmt = $GLOBALS['db']->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($o,$row);
            }
            return $o;
        }
        else 
            return false;
        $stmt->close();
    }
    public function getApps(){
        $o = [];
        $sql ="SELECT * FROM `grant` ORDER BY `grant`.`gt_id`;";
        $stmt = $GLOBALS['db']->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($o,$row);
            }
            return $o;
        }
        else 
            return false;
        $stmt->close();
    }
    public function getYears(){
        $o = [];
        $sql ="SELECT DISTINCT YEAR(`cdate`) AS `year` 
        FROM `cdf` ORDER BY `cdf`.`cdate` ASC;";
        $stmt = $GLOBALS['db']->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($o,$row);
            }
            return $o;
        }
        else return false;
        $stmt->close();
    }
    public function Assistants(){
        $o = [];
        $o["genders"] = $this->getGender();
        $o["wards"] = $this->getWards();
        $o["apps"] = $this->getApps();
        $o["years"] = $this->getYears();
        $o["cdf"] = $this->getCDF();
        return $o;
    }
    public function setCdf($o){
        $sql ="INSERT INTO `cdf`(`fname`,`sname`,`email`,`g_id`,`gt_id`,`w_id`,`address`,`amount`,`project`)VALUE(?,?,?,?,?,?,?,?,?);";
        $stmt = $GLOBALS['db']->prepare($sql);
        $stmt->bind_param("sssiissss",$o["fname"],$o["sname"],$o["email"],$o["gender"],$o["application"],$o["ward"],$o["address"],$o["amount"],$o["project"]);
        if($stmt->execute())
            return $stmt->insert_id;
        else return false;
        $stmt->close();
    }
    public function setCdfFiles($id,$fl_name){
        $sql ="INSERT INTO `files`(`id`,`fl_name`)VALUE(?,?);";
        $stmt = $GLOBALS['db']->prepare($sql);
        $stmt->bind_param("is",$id,$fl_name);
        if($stmt->execute())
            return true;
        else return false;
        $stmt->close();
    }
    public function getCrawler($year,$app,$gender){
        $o = [];
        $sql ="SELECT * FROM `cdf` 
               WHERE `cdf`.`cdate` = ? OR `cdf`.`gt_id` = ? OR `cdf`.`g_id` = ? 
               ORDER BY `cdf`.`id`;";
                $stmt = $GLOBALS['db']->prepare($sql);
                $stmt->bind_param("iii",$year,$app,$gender);
                $stmt->execute();
                $result = $stmt->get_result();
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        array_push($o,$row);
                    }
                    return $o;
                }else return false;
                $stmt->close();
    }
    public function getCDF(){
        $o = [];
        $sql ="SELECT * FROM `cdf` ORDER BY `cdf`.`id` ASC;";
                $stmt = $GLOBALS['db']->prepare($sql);
                $stmt->execute();
                $result = $stmt->get_result();
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        array_push($o,$row);
                    }
                    return $o;
                }else return false;
                $stmt->close();
    }
}
?>