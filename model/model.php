
<?php
/**
 * author TrangThan
 */
class BaseModel{
    private $str_connect;
    function __construct()
    {
        $this->connectDB();
    }
    public function connectDB(){
        $this->str_connect = new mysqli('localhost','root','','dbcustomer');
        mysqli_set_charset($this->str_connect,'utf8');
    }
    public function Select(){
        $str = 'SELECT *FROM `information`';
        $result = $this->str_connect->query($str);
        if($result->num_rows == 0){
            $data = 0;
        }
        else{
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }
    
    public function SelectID($id){
        $str = "SELECT * FROM `information` WHERE id = $id";
        $result=$this->str_connect->query($str);
        if($result -> num_rows == 0){
            $data=0;
        }
        else{
            while ($row = $result->fetch_assoc()){
                $data[]=$row;
            }
        
        }
        return $data;
    }
    public function SelectLogin($account,$password){
        $str = "SELECT * FROM `information` WHERE `fullname` = '". $account ."' AND `password` = '". $password ."' ";
        $result=$this->str_connect->query($str);
        if (!empty($result) && $result->num_rows > 0) {
            while($row=($result)->fetch_assoc()){
                $data[]=$row;
            }
        }
        else{
            $data=0;
        }
        
        return $data;
    }
    public function SelectLoginID($id){
        $str= "SELECT  `fullname`, `password` FROM `information` WHERE `id`=$id";
        $result=$this->str_connect->query($str);
        if (!empty($result) && $result->num_rows > 0) {
            while($row=($result)->fetch_assoc()){
                $data[]=$row;
            }
        }
        else{
            $data=0;
        }
        
        return $data;
    }
   
    public function checkID($id){
        $checkid = "SELECT * FROM `information` WHERE `Id` = '".$id."'";
        $result = $this->str_connect->query($checkid);
        if(!empty($result)&& ($result -> num_rows > 0)){
            $data = 1;
        }
        else{
            $data = 0;
        }
        return $data;
    }
    public function SelectFullname($insertFullname){
        $checkFullName = "SELECT * FROM `information` WHERE `fullname` = '".$insertFullname."'";
        $result = $this->str_connect->query($checkFullName);
        if(!empty($result)&& ($result -> num_rows > 0)){
            $data = 1;
        }
        else{
            $data = 0;
        }
        return $data;
    }
    public function Insert($insertFullname,$insertPassword,$insertAddress,$insertphone){
        $insert = "INSERT INTO `information`(`fullname`, `address`, `password`, `phonenumber`,`level`) 
            VALUES ('$insertFullname','$insertAddress','$insertPassword','$insertphone',0)";

        $this->str_connect->query($insert);
        return $this->str_connect->insert_id;
    }
    public function InsertAdmin($insertFullname,$insertPassword,$insertAddress,$insertphone,$level){
        $insert = "INSERT INTO `information`(`fullname`, `address`, `password`, `phonenumber`,`level`) 
            VALUES ('$insertFullname','$insertAddress','$insertPassword','$insertphone',$level)";
        $this->str_connect->query($insert);
    }
    public function Delete($Id){
        $delete = "DELETE FROM `information` WHERE id =$Id" ;
        $this->str_connect->query($delete);
    }
    public function Update($Fullname,$Address,$Phonenumber,$Password,$id){
        $update ="UPDATE `information` SET `fullname`= '$Fullname',`address`='$Address',`phonenumber`='$Phonenumber',`password`='$Password' WHERE id=$id";
        $this->str_connect->query($update);
    }
}

