<?php 

function get_access_token() {
        $url = 'https://accounts.zoho.com/oauth/v2/token';
        $post = [
			'refresh_token'	=>'1000.59d119b597f1bd9ccd3ac2b2cd797ef7.5206405ea2a0e271210bddf2fd2e8377',
			'client_id'		=>'1000.YXUPK59Y7FB6IYWT3GH82N3HS45AJC',
			'client_secret' =>'9054bd6cb317a96f905b53d40d482b426e35a3578a', 
			'grant_type'	=>'refresh_token',
		];
       
        $headers = array
        (
          'Content-Type: application/x-www-form-urlencoded'
        );
                   
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);       
        $result = json_encode($result);
        var_dump($result);
       // curl_close($ch);
       // return $result;
    }
    get_access_token();
    
?>