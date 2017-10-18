<?php
$username="projectrssomk@gmail.com"; //username 
$password="safehouse"; //password for that user 
$gacookie=""; 
$postdata="Email=$username&Passwd=$password&service=mail&rm=false&ltmplcache=2&itmpl=default&hl=en&continue= 
https://mail.google.com/mail/?nsr=0&amp;ui=html&amp;zy=l"; 
$ch = curl_init(); 
echo "Hello";
curl_setopt ($ch, CURLOPT_URL," 
https://www.google.com/accounts/ServiceLoginAuth?service=mail"); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
// curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 
// 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 
curl_setopt ($ch, CURLOPT_TIMEOUT, 60); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_COOKIEJAR, $gacookie); 
curl_setopt ($ch, CURLOPT_COOKIEFILE, $gacookie); 
curl_setopt ($ch, CURLOPT_REFERER, "https://accounts.google.com/ServiceLogin?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ltmpl=default&service=mail&sacu=1&scc=1&passive=1209600&acui=1#Email=sabaskathawala%40gmail.com");
// https://mail.google.com/mail/?nsr=1&auth=DQAAAHoAAACy1eD0UAT31WKeVsU-MTE17okXAamkjSuAMA7ChWMkQyzIng3arK9nHhPl-0LjhMx1xKqh8HTMy1L-H5BHsNDxdkWscqpMJHhQjanY5jsJaoIlhMe9yLGhqDeeGHatPoHwLZvNtzUwww_Ivc8xexsN4F2rAOGkI7-Ob8eQdo96Sg&gausr="projectrssomk@gmail.com"' 
); 
curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata); 
curl_setopt ($ch, CURLOPT_POST, 1); 
$AskApache_result = curl_exec ($ch); 
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}
// if(!$AskApache_result)
// {
// 	trigger_error(curl_error($ch));
// }
echo "hfjksdhfjkh".$AskApache_result;
echo "kjg";
curl_close($ch); 
echo $AskApache_result; 
//unlink($gacookie); 
exit; 

?>