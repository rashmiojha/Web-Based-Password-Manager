<?php
// php_info();
$login_email = 'email';
$login_pass = 'password';

$ch = curl_init();
echo getcwd();
curl_setopt($ch, CURLOPT_URL, 'https://www.facebook.com/login.php');
curl_setopt($ch, CURLOPT_POSTFIELDS,'email='.urlencode($login_email).'&pass='.urlencode($login_pass).'&login=Login');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookies.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookies.txt");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);  
curl_setopt($ch, CURLOPT_CAINFO, "http://localhost/curl/tests/certs/ca-bundle.crt");
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3) Gecko/20140309 Firefox/2.0.0.3");
curl_setopt($ch, CURLOPT_REFERER, "http://www.facebook.com");
$page = curl_exec($ch) or die(curl_error($ch));
echo $page;

?>