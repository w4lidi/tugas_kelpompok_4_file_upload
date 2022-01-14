<?php 	
include("config.php");


//$tabel = "user_files";
function get_field_name($tabel_name){
    global $cp;
    $i = 0;
    $w =array();
    $sql = "SHOW COLUMNS FROM ".$tabel_name;
    $result = mysqli_query($cp,$sql);
    while($row = mysqli_fetch_array($result)){
        //echo $row['Field']."<br>";
        $w[$i] = "`".$row['Field']."`";
        $i++;
    }
    $field_name = implode(",", $w);
    return $field_name;
}


function join_value($usr_file_data){
    $usr_data = array();
    $i = 0;
    while($i < count($usr_file_data)){
        $usr_data[$i] = "'".$usr_file_data[$i]."'";
        //echo $usr_file_data[$i];
        $i++;
    }
    $joined_data = implode(",",$usr_data);
    //echo $joined_data;
    return $joined_data;
}
   session_start();
   $id_user = $_SESSION['id_usr'];
function add($nama_tabel, $datas){
    global $cp;
    global $id_user;
    $nama_fieldd = get_field_name($nama_tabel);
    $valuesd = join_value($datas);
 
    
    $query = "INSERT INTO ".$nama_tabel." (".$nama_fieldd.") VALUES ('NULL','".$id_user."',".$valuesd.")";
    $in_to = mysqli_query($cp, $query);
    if($in_to){
        //echo $query;
        return true;
    }
    else{
        //echo $query;
        return false;
    }
}

function get_data($tabel,$id_user){
    global $cp;
    $data = mysqli_query($cp, "select * from $tabel where id_user=$id_user");
    return $data;
}

function del_data($data){
    global $id_user;
    global $cp;
    $sql = "delete from user_files where id_user='".$id_user."' and file_name='".$data."'";
    $d = mysqli_query($cp,$sql);
    if($d){
        echo "oc";
        return true;
    }else{
        echo "no";
        return false;
    }
}


 ?>