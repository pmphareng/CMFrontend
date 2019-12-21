<?php
    

    //Code block for when register is added
    if($_GET['action']=="register"){
            $query = "SELECT * FROM users WHERE email = '". mysqli_real_escape_string($link,           $_POST['email'])."' LIMIT 1";
            $result = mysqli_query($link, $query);
        
            if (mysqli_num_rows($result) > 0) $error = "That email address is already taken.";
            else {
                
                $query = "INSERT INTO users (`email`, `password`) VALUES ('". mysqli_real_escape_string($link, $_POST['email'])."', '". mysqli_real_escape_string($link, $_POST['password'])."')";
                
                if (mysqli_query($link, $query)) {
                    
                    $_SESSION['id'] = mysqli_insert_id($link);
                    
                    $hash = password_hash(mysqli_real_escape_string($link, $_POST['password']), PASSWORD_DEFAULT);
                    
                    $query = "UPDATE users SET password = '". $hash ."' WHERE id = ".$_SESSION['id']." LIMIT 1";
                    mysqli_query($link, $query);
                    
                    echo "1";
                    
                    
                    
                } else {
                    
                    $error = "Couldn't create user - please try again later";
                    
                }
                
            }
    }
        
        else if($_GET['action'] == "login"){
            
            $query = "SELECT * FROM users WHERE email = '". mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
            
            $result = mysqli_query($link, $query);
           
            $row = mysqli_fetch_assoc($result);
            
            if (password_verify($_POST['password'], $row['password'])) {
                
                $_SESSION['id'] = $row['id'];
                echo "1";
                 
            }else{
                echo $hash." ".$_POST['password'];
            } 
            
            
        }else if($_GET['action'] == "book"){
            
            $info = json_encode($_POST);
            $query = "INSERT INTO forms(`flag`,`form_info`) VALUES('1','".$info."')";
            $result = mysqli_query($link, $query);
            if($result){
                echo "1";
            }else{
                echo "0";
            }
          
        }else if($_GET['action']=='contact'){
               $headers="From:".$_POST['email'];
                $headers  .= 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $subject = "Contact from ".$_POST['name'];
                $body = "Email from ".$_POST['email'].'<br>'.$_POST['message']."";
                if(mail("chriscushway@gmail.com",$subject,$body,$headers)){
                    echo "1";   
                }else{
                    echo "0";
                }   
        }                         
?>