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

    public function checkLoginByMailAndPass($mail, $pass){
        $ret = [];
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM hosapo_user_tbl WHERE email_address = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $mail, PDO::PARAM_STR);
        $ps->execute();
        $userList = $ps->fetchAll();
        foreach($userList as $row){
            if(password_verify($pass, $row['password']) == true){
                $ret = $userList;
            }
        }
        return $ret;
    }
}
?>