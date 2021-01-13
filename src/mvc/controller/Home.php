<?php
 

class Home extends Controller{

    // Must have SayHi()
    
    function SayHi(){

        // phuong thuc ve phai se tra ve mot doi tuong tuong ung voi string truyen vao 
        $teo = $this->model("SinhVienModel");

        echo $teo->GetSV();

    }
    // truyen bao bang  call_user_func_array() la mot mang param 
    // bao nhie tham so truyen vao thi no cung chi lay du  2 bien dau tien 
    // neu truyen it hon bao loi 
    function Show(){        
        // Call Models
        $teo = $this->model("SinhVienModel");

        // Call Views
        $this->view("HomeView", [
            "Page"=>"news",
            "Mau"=>"red",
            "SoThich"=>["A", "B", "C"],
            "SV" => $teo->GetSV()
        ]);
    }
}
?>