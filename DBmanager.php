<?php
class DBManager{
    //接続のメソッド
    private function dbConnect(){
        $pdo = new PDO('mysql:host=localhost;dbname=webdb;charset=utf8','webuser','abccsd2');
        return $pdo;     
    }
    /*hosapo_hospital_tblを名前で取得するメソッド
    public function getUserTblByid(){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM hosapo_hospital_tbl ";
        $ps = $pdo->prepare($sql);
        $ps->execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
    }*/

    //新規追加(ユーザー)
    public function insertUserTbl($pass,$name,$namek,$address,$telephone_number,$birthday,$gender,$email_address){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO hosapo_user_tbl(password,full_name,japan_name,address,telephone_number,birthday,gender,email_address)VALUES(?,?,?,?,?,?,?,?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$pass,PDO::PARAM_STR);
        $ps->bindValue(2,$name,PDO::PARAM_STR);
        $ps->bindValue(3,$namek,PDO::PARAM_STR);
        $ps->bindValue(4,$address,PDO::PARAM_STR);
        $ps->bindValue(5,$telephone_number,PDO::PARAM_STR);
        $ps->bindValue(6,$birthday,PDO::PARAM_STR);
        $ps->bindValue(7,$gender,PDO::PARAM_STR);  
        $ps->bindValue(8,$email_address,PDO::PARAM_STR);    
        $ps->execute();
    }

        //新規追加(予約)
    /*public function insertappintmentTbl($id,$pass,$username,$usermail,$address){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO hosapo_user_tbl(user_id,hospital_id,japan_name,medical_specialty,appointment_data,appointment_time)VALUES(?,?,?,?,?,?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$pass,PDO::PARAM_STR);
        $ps->bindValue(2,$name,PDO::PARAM_STR);
        $ps->bindValue(3,$namek,PDO::PARAM_STR);
        $ps->bindValue(4,$address,PDO::PARAM_STR);
        $ps->bindValue(5,$telephone_number,PDO::PARAM_STR);
        $ps->bindValue(6,$birthday,PDO::PARAM_STR);
        $ps->bindValue(7,$gender,PDO::PARAM_STR);
        $ps->bindValue(8,$email_address,PDO::PARAM_STR);       
        
        $ps->execute();
        
    }*/

    //hosapo_hospital_tblを名前で取得するメソッド
    public function getUserTblByword($kensaku_word){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM hosapo_hospital_tbl WHERE hospital_name LIKE ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,"%".$kensaku_word."%",PDO::PARAM_STR);
        $ps->execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
    }
    /*新規追加(予約状況)
    public function insertapp($){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO hosapo_appointment_tbl(appointment_id,user_id,hospial_id,medical_sprciality,appointment_data,appointment_time)VALUES(?,?,?,?,?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$,PDO::PARAM_INT);
        $ps->bindValue(2,$,PDO::PARAM_STR);
        $ps->bindValue(3,$,PDO::PARAM_STR);
        $ps->bindValue(4,$,PDO::PARAM_STR);
        $ps->bindValue(5,$,PDO::PARAM_STR);

        $ps->execute();
        
    }*/
}
?>