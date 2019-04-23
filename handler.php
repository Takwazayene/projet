<?php  
function send($apikey, $number, $message, $expediteur = false, $msg_id = false) 
{  
   if(!extension_loaded('sockets')) $response = "Function requires sockets."; 
   else 
   {  
      $request  = "&apikey=".urlencode($apikey)."&number=".urlencode($number); 
      $request .= "&message=".urlencode($message)."&msg_id=".(int)$msg_id; 
      $request .= "&expediteur=".urlencode($expediteur); 
       
      $http_header = "POST /v1/?method=send HTTP/1.1\r\n"; 
      $http_header .= "Host: api.envoyersms.org\r\n"; 
      $http_header .= "User-Agent: HTTP/1.1\r\n"; 
      $http_header .= "Content-Type: application/x-www-form-urlencoded\r\n";  
      $http_header .= "Content-Length: ".strlen($request)."\r\n"; 
      $http_header .= "Connection: close\r\n\r\n"; 
      $http_header .= $request."\r\n"; 

      $host = "api.envoyersms.org"; 
      $port = 80; 

      $out = @fsockopen($host, $port, $errno, $errstr); 
      if($out) 
      {  
            fputs($out, $http_header); 
            while(!feof($out)) $result[] = fgets($out); 
            fclose($out);  
      } 
      $response = $result[12]; 
   } 
   return $response; 
} 

$responses = array('OK'     => 'Message envoyé avec succès.', 
                   'ERR_01' => 'APIkey invalide.', 
                   'ERR_02' => 'Erreur au niveau des paramètres.', 
                   'ERR_03' => 'Crédit insuffisant.', 
                   'ERR_04' => 'Le numéro du destinataire est invalide.' 
             ); 
              
if (!empty($_POST['envoyer'])) 
{ 
   $apikey = ""; # votre APIkey    
   $r=send($apikey,$_POST['number'],$_POST['message'],$_POST['expediteur']);    
   echo $responses[$r]; 
} 
?>