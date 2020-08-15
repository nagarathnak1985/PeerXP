<?php 

function insert_data() {
        $url = 'https://desk.zoho.com/api/v1/tickets';
        $access_token  = "1000.1a02ca22cf3f87e30f1357781b5c7142.ff8511e9181d11fc32038ce29011de63";
        $post_data = array(    
                "departmentId"=> "523116000000006907",  
                "contactId" =>"523116000000147027",    
                "subject" => "Real Time analysis Requirement",
                "dueDate" => "2020-08-14T16:16:16.000Z",
                "channel" => "Email",
                "description" => "Hai This is Description",
                "phone" => "8892433716",
                "category" => "general",
                "email" => "carol@zylker.com",
                "status" => "Open"
              );
               
         $fields = json_encode($post_data);
       //echo "<pre>";print_r($fields);die;
        $headers = array
        (
           'Authorization:Zoho-oauthtoken '.$access_token ,
           'orgId : 721801542',
           'Content-Type: application/json;charset=UTF-8'
        );
                   
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);       
        $result = json_encode($result);
        var_dump($result);
        curl_close($ch);
       // return $result;
    }
    insert_data();
    
?>