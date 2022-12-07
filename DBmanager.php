<?php
class DBManager{
    //接続のメソッド
    private function dbConnect(){
        $pdo = new PDO('mysql:host=localhost;dbname=webdb;charset=utf8','webuser','abccsd2');
        return $pdo;     
    }
    //hosapo_hospital_tblを名前指定で取得するメソッド
    public function getUserTblByid($kensaku_word){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM hosapo_hospital_tbl WHERE hospital_name LIKE ? ";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,"%".$kensaku_word."%",PDO::PARAM_STR);
        $ps->execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
    }

    //新規追加(ユーザー)
    public function insertUserTbl($id,$pass,$username,$usermail,$address){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO hosapo_user_tbl(full_name,password,japan_name,usernme,address,telephone_number,birthday,gender,email_address)VALUES(?,?,?,?,?,?,?,?,?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$,PDO::PARAM_INT);
        $ps->bindValue(2,$,PDO::PARAM_STR);
        $ps->bindValue(3,$,PDO::PARAM_STR);
        $ps->bindValue(4,$,PDO::PARAM_STR);
        $ps->bindValue(5,$,PDO::PARAM_STR);
        $ps->bindValue(6,$,PDO::PARAM_STR);
        $ps->bindValue(7,$,PDO::PARAM_STR);
        $ps->bindValue(8,$,PDO::PARAM_STR);
        $ps->bindValue(9,$,PDO::PARAM_STR);
        $ps->execute();
        
    }

    /*public function getUserTblByplace($place){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM user_tbl1 WHERE address LIKE ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,"%".$place."%",PDO::PARAM_STR);
        $ps->execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
    }
    /*新規追加
    public function insertUserTbl($id,$pass,$username,$usermail,$address){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO user_tbl(id,pass,usernme,usermail,address)VALUES(?,?,?,?,?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$id,PDO::PARAM_INT);
        $ps->bindValue(2,$pass,PDO::PARAM_STR);
        $ps->bindValue(3,$username,PDO::PARAM_STR);
        $ps->bindValue(4,$usermail,PDO::PARAM_STR);
        $ps->bindValue(5,$address,PDO::PARAM_STR);
        $ps->execute();
        
    }*/
}
?>