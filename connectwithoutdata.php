<?php
$user = 'root';//............This you may have to change
$password = 'root';//............This you may have to change
//$host = 'localhost';//............This you may have to change
//$appache_localhost_port='';//............This you may have to change
$urla="Location: http://localhost";
$DB_name = "users";

$users_db='central';
$inst='institution';
$folder="/basic/";


$class_link="/var/www/html/Moodle_Plugin/otp-php-registration/class";
$urlb="load.php";
$font_link="/var/www/html/Moodle_Plugin/otp-php-registration/class/avatar/PTSans.ttf";
$url_load=$urla.$appache_localhost_port.$folder.$urlb;
$homedir="/var/www/html/Moodle_Plugin/";

// $user = 'root';//............This you may have to change
// $password = 'root';//............This you may have to change
 $host = 'localhost:8889';//............This you may have to change
 $appache_localhost_port=':8888';
///$urla="Location: http://localhost:";


 //$class_link="C:\MAMP\htdocs\otp-php-registration\class";
// $urlb="load.php";
 //$font_link="C:\MAMP\htdocs\otp-php-registration\class\avatar\PTSans.ttf";
// $url_load=$urla.$appache_localhost_port.$folder.$urlb;

//arlyn changed \\ to \

// $homedir="C:\MAMP\htdocs"."\\";

$admin_panel=$urla.$appache_localhost_port.$folder."beijing_admin.php";
$users_database='users';
$url_login_check=$urla.$appache_localhost_port.$folder."login_page.php";
$url_teacher_login_check=$urla.$appache_localhost_port.$folder."teacher_login_page.php";
$student_panel=$urla.$appache_localhost_port.$folder."student_panel.php";
$teacher_panel=$urla.$appache_localhost_port.$folder."teacher_panel.php";
$link = new mysqli(
   $host,
   $user,
   $password
);

$link_central = new mysqli(
   $host,
   $user,
   $password,$users_db
);
$link_inst = new mysqli(
   $host,
   $user,
   $password,$inst
);
$link_users=new mysqli(
   $host,
   $user,
   $password,$users_database
);

?>
?>


