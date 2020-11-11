<?php

if(isset($_REQUEST['submit'])){
    
    $myfile = fopen('..registration.txt', 'p');
    while ($data = fgets($myfile)) {
        $user_info = explode("|", $data);
        if($_REQUEST['id']==$user_info[2] and $_REQUEST['password']==$user_info[1]){
            
            if($user_info[0]=="user"){
                
                header('location: ../view/user.php');
                setcookie('flag', 'true', time()+120, '/');
                fclose($myfile);
                break;
            }
            
            else if($user_info[0]=="admin"){
                
                header('location: ../view/admin.php');
                setcookie('flag', 'true', time()+120, '/');
                fclose($myfile);
                break;
            }
            
        }
        
        else{
            
            echo "Wrong Info";
            
        }
    }
    fclose($myfile);
    
}

?>