<?php
	session_start();
	include_once 'model/model.php';
	include_once 'core/session.php';
	class Controller{
		private $model = null;
		public function __construct(){	
		
			$this->model = new BaseModel();
		}

		public function View(){
			
			if(isset($_GET['action'])){
				switch($_GET['action']){
					case 'register':{
						if(isset($_POST['register'])){
							$insertFullname = $_POST['fullname'];
							$insertPassword = $_POST['password'];
							$insertAddress = $_POST['address'];
							$insertphone = $_POST['numberPhone'];
						
							$data = $this->model->SelectFullname($insertFullname);
							 
							if($data==0){
								$new_id =$this->model->Insert($insertFullname,$insertPassword,$insertAddress,$insertphone);
								if(isset($new_id)){
									$rl= $this->model->checkID($new_id);
									if($rl==1){
										Session::session_set("SelectLoginID",$new_id);	
										header('location: ?action=tableCustomer');
									}
								}
								
							}
							else{
								$message = "user nay da ton tai, vui long nhap mot user khac";
								echo "<script type='text/javascript'>alert('$message')</script>";
							
							}
							
						}
						include_once 'view/Register.php';
						break;
					}
					case 'tableCustomer':{
						$data = $this->model->Select();
						include_once 'view/tableCustomer.php';
						break;
					}
					case 'add':{
						if(isset($_POST['add'])){
							$level = $_POST['choose_level'];
							$insertFullname = $_POST['fullname'];
							$insertPassword = $_POST['password'];
							$insertAddress = $_POST['address'];
							$insertphone = $_POST['numberPhone'];
							
							$data = $this->model->SelectFullname($insertFullname);
						
							if($data==0){
								if($level == 1){
									$this->model->InsertAdmin($insertFullname,$insertPassword,$insertAddress,$insertphone,$level);
									header("location: ?action=homeAdmin");
								}
								else{
									$this->model->InsertAdmin($insertFullname,$insertPassword,$insertAddress,$insertphone,$level);
									header('location: ?action=home');
								}
								
							}
							else{
								$message = "user nay da ton tai, vui long nhap mot user khac";
								echo "<script type='text/javascript'>alert('$message')</script>";
							
							}
							
						}
						include_once 'view/add.php';
						break;
					}
					case 'login':{
						
							if(isset($_POST['login']))
							{
								$account = $_POST['login-fullName'];
								$password = $_POST['login-password'];
								if($data = $this->model->SelectLogin($account,$password)){

									Session::session_set("SelectLogin",$data);	
									if($data[0]['level']==0){
										header('location: ?action=tableCustomer');
										break;
									}if($data[0]['level']==1){
										header('location: ?action=tableAdmin');
										break;
									}
							}
							else{
								$message = "Dang nhap that bai";
								echo "<script type='text/javascript'>alert('$message');</script>";
								
								}
						}
						include_once 'view/login.php';
						break;
					}
					case'homeAdmin':{
						include_once 'view/homeAdmin.php';
						break;
				}
					case'tableAdmin':{
							$data = $this->model->Select();
							include_once 'view/tableAdmin.php';
							break;
					}
					case 'delete':{
						if(isset($_GET['id'])){
							$Id=$_GET['id'];
							$this->model->Delete($Id);
							header("location: http://localhost/test1/?action=tableAdmin");
						}
					}
					case 'home':{
						include_once 'view/HomePage.php';
						break;
					}
					case'logout':
						session_destroy();
						header('location: ?action=home');
						break;
					case 'update':{
						if(isset($_POST['submit_update'])){
							$id=$_GET['id'];
							$Fullname = $_POST['update_fullname'];
							$Address = $_POST['update_address'];
							$Phonenumber = $_POST['update_numberPhone'];
							$Password = $_POST['update_password'];
							$this->model->Update($Fullname,$Address,$Phonenumber,$Password,$id);
							header("location: http://localhost/test1/?action=tableAdmin");
						}
						$id=$_GET['id'];
						$data = $this->model->SelectID($id);
						include_once 'view/uppdate.php';

						break;
					}

				}
			}
			else{
				include_once 'view/Register.php';
			}
		}
	}
?>