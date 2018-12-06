{<?php
	
	interface FacebookLogin{
		public function AppId($appId);
		public function AppSecret($appSecret);
		public function AppPassword($apptoken);
		public function AppToken($apptoken);
		public function RedirectUrl($redirecturl);
		public function Response();
	}
	Class AppInterface implements FacebookLogin{
		public function AppId($appId){
			echo $appId;
		}
		public function AppSecret($appSecret){
			echo $appSecret;
		}
		public function AppPassword($apptoken){
			echo $apptoken;
		}
		public function AppToken($apptoken){
			echo $apptoken;
		}
		
		public function RedirectUrl($redirecturl){
			echo $redirecturl."<br>";
		}
		
		public function Response(){
			$name = "php class";
			$email = "php@php.com";
			$picture = "abc.png";
			$dob = "13/12/2017";
			
			$array = array('name'=>$name,'email'=>$email);
			return json_encode($array);
			
		}


	}	
	
	$appId = "fr4ewt54rtg54eredt5r";
	$appSecret = "MyAppSecret";
	$apptoken = "Applicationtoken";
	$redirecturl = "http://localhost/dasghboard";
	$object = new AppInterface;
	$object->AppId($appId);
	$object->AppSecret($appSecret);
	$object->AppPassword($apptoken);
	$object->AppToken($apptoken);
	$object->RedirectUrl($redirecturl);
	echo $object->Response();
	
?>