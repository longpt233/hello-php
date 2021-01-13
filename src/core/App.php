<?php
class App{

    protected $controller="Home";
    protected $action="SayHi";
    protected $params=[];

    function __construct(){
 
        $arr = $this->UrlProcess();
        

        // echo "$arr[0]";
        // print_r($arr);
 
        // Controller
        if( file_exists("./src/mvc/controller/".$arr[0].".php") ){
            $this->controller = $arr[0];
            // unset de xoa di , con bao nhieu thi cho no la param 
            unset($arr[0]);
        }

        require_once "./src/mvc/controller/". $this->controller .".php";
        // dang la ten chuyen sang mot doi tuong 
        $this->controller = new $this->controller;
        // vi arr[0] da bi xoa nen no se in tu 1 
        // print_r($arr);
        // Action
        if(isset($arr[1])){
            // loc xem controll do co chua phuong thuc hay khong 
            if( method_exists( $this->controller , $arr[1]) ){

                // echo "co phuong thuc ";
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        // echo "arr =". $arr[0];
        // Params
        $this->params = $arr?array_values($arr):[];

        // echo "param = "; 
        // print_r( $this->params);

        // truyen ten lop, ten ham, param cho ham do 
        call_user_func_array([$this->controller, $this->action], $this->params );
        // echo  $this->action . $this->params;

    }

    function UrlProcess(){
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }

}
?>