Clear Unset All Domain Cookies
==============================
$cookies=array_keys($_COOKIE);  
$domain=".mydomain.com";  
foreach($cookies as $cookie){  
  $when=time()-3600;  
  setcookie($cookie, "", $when, "/", $domain);  
}
