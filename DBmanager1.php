<?php
class DBManager{

    private  function  dbConnect(){
        $pdo = new PDO('mysql:host=localhost;dbname=webdb;charset=utf8',
                        'webuser', 'abccsd2');
        return $pdo;
    }


    //取得　ユーザーテーブルのIDとパスワード
    public function getUserTblByIdAndPass($hospital_id){
      $pdo = $this->dbConnect();
      $sql = "SELECT * FROM hosapo_hospital_tbl WHERE hospital_id = ? ";
      $ps = $pdo->prepare($sql);
      $ps->bindValue(1, $hospital_id, PDO::PARAM_INT);
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