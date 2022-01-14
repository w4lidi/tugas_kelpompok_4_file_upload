<?php 	
//include("../config/config.php");
include("../config/query_mysql.php");
// $loged_user  = $_SESSION['username'];
//     $usr_file_path = "../".$loged_user."/";
//     $file_nm = $_FILES['myfile']['name'];
//     $file_new_nm = $file_nm;
//     $num = 0;
//     echo $usr_file_path.$file_new_nm;
$loged_user  = $_SESSION['username'];
        $usr_file_path = "../users/".$loged_user."/";

if(!isset($_FILES['myfile'])){
    echo "file kosong";
}
else{
    echo "post file";

    function add_num_file(){
        global $loged_user;
        global $usr_file_path;
        
        

        

        $file_nm = $_FILES['myfile']['name'];
        $expd_file_nm = explode(".",$file_nm);
        
        $file_new_nm = $expd_file_nm[0].".".$expd_file_nm[1];

        $path_filename = array();
        $path_filename[0] = $usr_file_path;
        $path_filename[1] = $file_new_nm;


        $num = 0;
        print(file_exists($usr_file_path.$file_new_nm));
        while(file_exists($usr_file_path.$file_new_nm)){
            $file_new_nm = $expd_file_nm[0]."(".($num + 1).").".$expd_file_nm[1];
            $path_filename[1] = $file_new_nm;
            //echo $file_new_nm."<br>";
            $num++;
        }
        return $path_filename;
    }

        

        

    $az = add_num_file();



        function file_data(){
        global $az;
        $usr_file = array();
        
        $usr_file[0] = $az[1];
        $usr_file[1] = $_FILES['myfile']['size'];
        $usr_file[2] = $_POST['privasi'];
        $usr_file[3] = $_FILES['myfile']['type'];
        //echo $usr_file[0]." ini adalah nama file<br>";
        return $usr_file;
    }




    function pindah(){
        global $az;
        $pindahin = move_uploaded_file($_FILES['myfile'] ['tmp_name'],$az[0].$az[1]);
        if ($pindahin) {
            // code...\
            //echo "berhasil pindah <br>";
            return true;
        }else{
            echo "gagal <br>";
            echo $az[0].$az[1]."<br>";
            return false;
        }

         //echo $az[0].$az[1]."<br>";

    }

    if(isset($_SESSION['id_usr'])){
        $in = add("user_files",file_data());
            if ($in) {
                echo "data file berhsil msuk - model file on if(in)<br>";
                $pindah_f = pindah();
                if($pindah_f){
                    session_start();
                    $_SESSION['msg'] = "<p class='success'>file berhasil di uppload</p>";
                    echo "berhasil pindah - model filw on pindah_f(21)<br>";
                    $_FILES[] = [];
                    header("Location: ../dasboard.php");  
                }
                else{
                     echo "gagal pindah - model file on pindah_f(24)<br> ";
                }
            }
            else{
                echo "gagal masuk - model file on if(in)<br>";
            }
    }else{
        header("Location: ../login-page.php");
    }
}

if(isset($_GET['file_name'])){

    function hapus_file($fl_nm){
    global $usr_file_path;
    $ds = unlink($usr_file_path.$fl_nm);
    $zz = del_data($fl_nm);
    if($ds && $zz){
        session_start();
        $_SESSION['msg'] = "<p class='success'>data dan file berhsil di hapus</p>";
        header("Location: ../dasboard.php");
        echo "file berhasil di hapus";
    }else if($ds){
        $_SESSION['msg'] = "<p class='success'>file berhsil di hapus</p>";
        echo "file berhasil di hapus";
        echo "<a href='../dasboard.php'>goto dasboard";
    }else if($zz){
        $_SESSION['msg'] = "<p class='success'>data berhsil di hapus</p>";
        echo "data berhasil di hapus";
        echo "<a href='../dasboard.php'>goto dasboard";
    }else{
        $_SESSION['msg'] = "<p class='errmsg'>data dan file berhsil  gagal di hapus</p>";
        echo "gagal hapus data dan file";
        echo "<a href='../dasboard.php'>goto dasboard";
    }
}




}


//var_dump(file_data());

 ?>