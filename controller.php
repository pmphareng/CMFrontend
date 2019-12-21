<?php 
        
        session_start();

        $link = mysqli_connect("localhost", "root", "", "cape_medics");

            if (mysqli_connect_errno()) {
                print_r(mysqli_connect_error());
                exit();
        
            }
       //Displays a summary of the booking
        function displayBookingSummary(){
            $result = getForms("-1");
            if(mysqli_num_rows($result) == 0){
                echo "<h1>No bookings have been made on the website yet</h1>";
            }else{
                
                while($row = mysqli_fetch_assoc($result)){
                    if($row['flag']==1){
                         $header = "<div><div class='template'><div class='template-header'>";
                    $body = "<div class='template-body'>";
                    $footer = "<hr><br><div class='row'><span></span><span><button id='".$row['id']."' class='template-button'>more</button></span></div></div></div>";
                    $flag = true;
                    $data = json_decode($row['form_info'],true);
                    foreach ($data as $key => $item) {
                        $item = str_replace('_', ' ', $item);
                        $key = str_replace('_', ' ', $key);
                        if($key=='type'){
                            $header.="<span>".$item."</span>";
                        }
                        else if(is_array($item)){
            
                             foreach ($item as $new_key => $value) {
                                 //Not checkbox or radio
                                 if($key == "Booking Details"){
                                        if($flag){
                                            $flag = false;
                                            $body.="<div class='row'><span class='summary-header'>".$key."</span><span></span></div><br><hr>"; 
                                            $body.="<div class='row'><span>".$new_key.":</span><span>".$value."</span></div>";
                                        }else{
                                            $body.="<div class='row'><span>".$new_key.":</span><span>".$value."</span></div>";
                                        }
                                        
                                 }else if($new_key=="Date"){
                                     $header.="<span>".$value."</span></div>";
                                 }
                            }
                        }
                    }
                    $html = "";
                    $html.=$header.$body.$footer."</div>";
                    echo $html;
                    }   
                }
            }
        }

        //function that displays entire form
        function displayForm($id){
            $result = getForms($id);
            
            $row = mysqli_fetch_assoc($result);
            
            $html = "<div class='template-2'><div class='template-header'>";
            $data = json_decode($row['form_info'],true);
                    
            foreach ($data as $key => $item) {
                      
                $item = str_replace('_', ' ', $item);
                $key = str_replace('_', ' ', $key);        
                if($key=='type'){
                            
                    $html.="<span>".$item."</span></div><div class='template-body'>";
                        
                }else if(is_array($item)){
                    $html.="<div class='form-row'><span class='template-heading'>".$key."</span></div><br><hr>";
                            
                     foreach ($item as $new_key => $value) {
                         //Not checkbox or radio
                         if($new_key!=$value){
                             $html.="<div class='row'><span>".$new_key.":</span><span>".$value."</span></div>";
                         }else{
                            $html.="<div class='row'><span><span class='bullet-point'></span>".$new_key."</span></div>";
                         }
                                
                    }
                }else{
                    $html.="<div class='row'><span>".$key."</span><span> ".$item."</span></div>";
                    }
                }
                $html.="</div></div>";
                echo $html;
        }
        
        
        function getForms($id){
            global $link;
            $query = "";
            if($id == "-1"){
              $query = "SELECT * FROM `forms`";  
            }else{
                $id = (int)$id;
              $query = "SELECT * FROM `forms` WHERE `id` =".$id." LIMIT 1";    
            }
            
            $result = mysqli_query($link, $query);
            return $result;
        }

        if(array_key_exists("function", $_GET)){
            if ($_GET['function'] == "logout") {
        
                session_unset();
        
            }
            
            header("LOCATION: http://localhost/CapeMedicsWebApp/MVC-Webapp/?page=home");
        }

      
?>