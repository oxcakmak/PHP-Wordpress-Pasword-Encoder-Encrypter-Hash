<?php
/*
Author: Osman Çakmak
Skype: oxcakmak
Email: oxcakmak@hotmail.com
Website: http://oxcakmak.com/
Country: Turkey [TR]
*/
require_once('classWPHash.php');
/*
-----[Generate-Wordpress-Hash]-----
*/
function generateWordpressHash($wordpressPassword){
    $wpHashPassword = new PasswordHash(8, true);
    return $wpHashPassword->HashPassword(trim($wordpressPassword));
}
echo generateWordpressHash("123456");
?>
