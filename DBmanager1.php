<?php
class DBManager{

    private  function  dbConnect(){
        $pdo = new PDO('mysql:host=localhost;dbname=webdb;charset=utf8',
                        'webuser', 'abccsd2');
        return $pdo;
    }


    //取得　病院ID
    public function get_hospital_id($kensaku_word){
      $pdo = $this->dbConnect();
      $sql = "SELECT * FROM hosapo_hospital_tbl WHERE hospital_name LIKE ?";
      $ps = $pdo->prepare($sql);
      $ps->bindValue(1, "%" . $kensaku_word . "%", PDO::PARAM_STR);
      $ps->execute();
      $searchArray = $ps->fetchAll();
      return $searchArray;
      }

    //取得　診療科
    public function get_medical_specialty($medical_specialty){
      $pdo = $this->dbConnect();
      $sql = "SELECT * FROM hosapo_hospital_tbl WHERE medical_specialty LIKE ?";
      $ps = $pdo->prepare($sql);
      $ps->bindValue(1, "%" . $medical_specialty . "%", PDO::PARAM_STR);
      $ps->execute();
      $searchArray = $ps->fetchAll();
      return $searchArray;
      }


    //取得　エリア
    public function get_hospital_area($hospital_area){
      $pdo = $this->dbConnect();
      $sql = "SELECT * FROM hosapo_hospital_tbl WHERE hospital_area LIKE ?";
      $ps = $pdo->prepare($sql);
      $ps->bindValue(1, "%" . $hospital_area . "%", PDO::PARAM_STR);
      $ps->execute();
      $searchArray = $ps->fetchAll();
      return $searchArray;
    }


    //取得　病院名
    public function get_hospital_name($hospital_name){
      $pdo = $this->dbConnect();
      $sql = "SELECT * FROM hosapo_hospital_tbl WHERE hospital_name LIKE ?";
      $ps = $pdo->prepare($sql);
      $ps->bindValue(1, "%" . $hospital_name . "%", PDO::PARAM_STR);
      $ps->execute();
      $searchArray = $ps->fetchAll();
      return $searchArray;
    }


    //取得　電話番号
    public function get_hospital_phone_number($hospital_phone_number){
      $pdo = $this->dbConnect();
      $sql = "SELECT * FROM hosapo_hospital_tbl WHERE hospital_phone_number LIKE ?";
      $ps = $pdo->prepare($sql);
      $ps->bindValue(1, "%" . $hospital_phone_number . "%", PDO::PARAM_STR);
      $ps->execute();
      $searchArray = $ps->fetchAll();
      return $searchArray;
    }


    //取得　住所
    public function get_hospital_address($hospital_address){
      $pdo = $this->dbConnect();
      $sql = "SELECT * FROM hosapo_hospital_tbl WHERE hospital_address LIKE ?";
      $ps = $pdo->prepare($sql);
      $ps->bindValue(1, "%" . $hospital_address . "%", PDO::PARAM_STR);
      $ps->execute();
      $searchArray = $ps->fetchAll();
      return $searchArray;
    }


    //取得　交通アクセス
    public function get_traffic_access($traffic_access){
      $pdo = $this->dbConnect();
      $sql = "SELECT * FROM hosapo_hospital_tbl WHERE traffic_access LIKE ?";
      $ps = $pdo->prepare($sql);
      $ps->bindValue(1, "%" . $traffic_access . "%", PDO::PARAM_STR);
      $ps->execute();
      $searchArray = $ps->fetchAll();
      return $searchArray;
    }

    //取得　写真
    public function get_hospital_picture($hospital_picture){
      $pdo = $this->dbConnect();
      $sql = "SELECT * FROM hosapo_hospital_tbl WHERE hospital_picture LIKE ?";
      $ps = $pdo->prepare($sql);
      $ps->bindValue(1, "%" . $hospital_picture . "%", PDO::PARAM_STR);
      $ps->execute();
      $searchArray = $ps->fetchAll();
      return $searchArray;
    }

                      //取得　コメント
    public function getcomment($hospital_introduction){
      $pdo = $this->dbConnect();
      $sql = "SELECT * FROM hosapo_hospital_tbl WHERE hospital_introduction LIKE ?";
      $ps = $pdo->prepare($sql);
      $ps->bindValue(1, "%" . $hospital_introduction . "%", PDO::PARAM_STR);
      $ps->execute();
      $searchArray = $ps->fetchAll();
      return $searchArray;
      }
}
?>