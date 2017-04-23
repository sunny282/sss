 <script>

var bits=50; // how many bits
var speed=20; // how fast - smaller is faster
var bangs=9; // how many can be launched simultaneously (note that using too many can slow the script down)
var colours=new Array("#03f", "#f03", "#0e0", "#93f", "#0cf", "#f93", "#f0c");

var bangheight=new Array();
var intensity=new Array();
var colour=new Array();
var Xpos=new Array();
var Ypos=new Array();
var dX=new Array();
var dY=new Array();
var stars=new Array();
var decay=new Array();
var swide=800;
var shigh=600;
var boddie;
window.onload=function() { if (document.getElementById) {
  var i;
  boddie=document.createElement("div");
  boddie.style.position="fixed";
  boddie.style.top="0px";
  boddie.style.left="0px";
  boddie.style.overflow="visible";
  boddie.style.width="1px";
  boddie.style.height="1px";
  boddie.style.backgroundColor="transparent";
  document.body.appendChild(boddie);
  set_width();
  for (i=0; i<bangs; i++) {
    write_fire(i);
    launch(i);
    setInterval('stepthrough('+i+')', speed);
  }
}}
function write_fire(N) {
  var i, rlef, rdow;
  stars[N+'r']=createDiv('|', 12);
  boddie.appendChild(stars[N+'r']);
  for (i=bits*N; i<bits+bits*N; i++) {
    stars[i]=createDiv('*', 13);
    boddie.appendChild(stars[i]);
  }
}
function createDiv(char, size) {
  var div=document.createElement("div");
  div.style.font=size+"px monospace";
  div.style.position="absolute";
  div.style.backgroundColor="transparent";
  div.appendChild(document.createTextNode(char));
  return (div);
}
function launch(N) {
  colour[N]=Math.floor(Math.random()*colours.length);
  Xpos[N+"r"]=swide*0.5;
  Ypos[N+"r"]=shigh-5;
  bangheight[N]=Math.round((0.5+Math.random())*shigh*0.4);
  dX[N+"r"]=(Math.random()-0.5)*swide/bangheight[N];
  if (dX[N+"r"]>1.25) stars[N+"r"].firstChild.nodeValue="/";
  else if (dX[N+"r"]<-1.25) stars[N+"r"].firstChild.nodeValue="\\";
  else stars[N+"r"].firstChild.nodeValue="|";
  stars[N+"r"].style.color=colours[colour[N]];
}
function bang(N) {
  var i, Z, A=0;
  for (i=bits*N; i<bits+bits*N; i++) {
    Z=stars[i].style;
    Z.left=Xpos[i]+"px";
    Z.top=Ypos[i]+"px";
    if (decay[i]) decay[i]--;
    else A++;
    if (decay[i]==15) Z.fontSize="7px";
    else if (decay[i]==7) Z.fontSize="2px";
    else if (decay[i]==1) Z.visibility="hidden";
    Xpos[i]+=dX[i];
    Ypos[i]+=(dY[i]+=1.25/intensity[N]);
  }
  if (A!=bits) setTimeout("bang("+N+")", speed);
}
function stepthrough(N) {
  var i, M, Z;
  var oldx=Xpos[N+"r"];
  var oldy=Ypos[N+"r"];
  Xpos[N+"r"]+=dX[N+"r"];
  Ypos[N+"r"]-=4;
  if (Ypos[N+"r"]<bangheight[N]) {
    M=Math.floor(Math.random()*3*colours.length);
    intensity[N]=5+Math.random()*4;
    for (i=N*bits; i<bits+bits*N; i++) {
      Xpos[i]=Xpos[N+"r"];
      Ypos[i]=Ypos[N+"r"];
      dY[i]=(Math.random()-0.5)*intensity[N];
      dX[i]=(Math.random()-0.5)*(intensity[N]-Math.abs(dY[i]))*1.25;
      decay[i]=16+Math.floor(Math.random()*16);
      Z=stars[i];
      if (M<colours.length) Z.style.color=colours[i%2?colour[N]:M];
      else if (M<2*colours.length) Z.style.color=colours[colour[N]];
      else Z.style.color=colours[i%colours.length];
      Z.style.fontSize="13px";
      Z.style.visibility="visible";
    }
    bang(N);
    launch(N);
  }
  stars[N+"r"].style.left=oldx+"px";
  stars[N+"r"].style.top=oldy+"px";
}
window.onresize=set_width;
function set_width() {
  var sw_min=999999;
  var sh_min=999999;
  if (document.documentElement && document.documentElement.clientWidth) {
    if (document.documentElement.clientWidth>0) sw_min=document.documentElement.clientWidth;
    if (document.documentElement.clientHeight>0) sh_min=document.documentElement.clientHeight;
  }
  if (typeof(self.innerWidth)!="undefined" && self.innerWidth) {
    if (self.innerWidth>0 && self.innerWidth<sw_min) sw_min=self.innerWidth;
    if (self.innerHeight>0 && self.innerHeight<sh_min) sh_min=self.innerHeight;
  }
  if (document.body.clientWidth) {
    if (document.body.clientWidth>0 && document.body.clientWidth<sw_min) sw_min=document.body.clientWidth;
    if (document.body.clientHeight>0 && document.body.clientHeight<sh_min) sh_min=document.body.clientHeight;
  }
  if (sw_min==999999 || sh_min==999999) {
    sw_min=800;
    sh_min=600;
  }
  swide=sw_min;
  shigh=sh_min;
}

</script>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
Saqlain Abbas
</title>

<style>
html {
  background: url(http://i.hizliresim.com/OVDXNP.jpg) no-repeat center center fixed ;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: monospace;
}
body, input, button {
  font-family: 'Source Sans Pro', sans-serif;
}


.CSS img{
-webkit-transition-duration: 0.5s;
-moz-transition-duration: 0.5s;
-o-transition-duration: 0.5s;
margin: 0 10px 5px 0;
}

.CSS img:hover{
-webkit-transform:scale(1.1);
-moz-transform:scale(1.1);
-o-transform:scale(1.1);
box-shadow:0px 0px 30px gray;
-webkit-box-shadow:0px 0px 30px gray;
-moz-box-shadow:0px 0px 30px gray;
opacity: 1;
}

a:hover {
color:#819bb6;
}

.copy-right {
	margin-top: 0;
    margin-left: 40px;
}
.copy-right p {
	color: #343434;
	font-size: 1em;
	font-family: 'Open Sans', sans-serif;	
	font-weight: 600;
    
    width: 300px;
    
     
}
.copy-right p a {
	font-family: 'Open Sans', sans-serif;	
	font-size: 1em;
	color:white;
	-webkit-transition: all 0.3s ease-out;
	-moz-transition: all 0.3s ease-out;
	-ms-transition: all 0.3s ease-out;
	-o-transition: all 0.3s ease-out;
	transition: all 0.3s ease-out;
}
.copy-right p a:hover {
	color:#1DB198;
}


#search-form [type=text] { width:18%; -moz-border-radius: 5px; -webkit-border-radius: 5px; border: 1px solid;4px; background:#040404;color:#001DDA}
#search-form [type=submit] {;width: 10%; -webkit-border-radius: 5px; margin:1px;padding:4px;background: rgba(0, 0, 0, 0.5); color:#6cd900;border: 1px solid #001DDA;}
body{
	color: #8585EE;
	text-align: center;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 14pt;
	background-color: none ;
	font-weight: bold;
	padding: 0px;
}
a,.post-meta .title {color:#FFFF17;text-shadow:#111}
.heading a,h3 a,h4 a {color:#ddd;}
h3 {color:#ddd;text-shadow:#111 1px 1px 1px}
#navigation a {color:#fff}
a {
color:#67FC4A;
}
a:hover {
color:#F2EC30;
}

#search-form [type=text] { width:18%; -moz-border-radius: 5px; -webkit-border-radius: 5px; border: 1px solid;4px; background:#040404;color:#001DDA}
#search-form [type=submit] {;width: 10%; -webkit-border-radius: 5px; margin:1px;padding:4px;background: rgba(0, 0, 0, 0.5); color:#6cd900;border: 1px solid #001DDA;}

a,.post-meta .title {color:#FFFF17;text-shadow:#111}
.heading a,h3 a,h4 a {color:#ddd;}
h3 {color:#ddd;text-shadow:#111 1px 1px 1px}
#navigation a {color:#fff}
a {
color:#67FC4A;
}
a:hover {
color:#F2EC30;
}
td, th, p, li,table{
}
/*Designed by zaki djellouli*/
/*date: 02 02 2017*/
/*http://fb.com/za1tk*/

body {background:;margin:0;padding:0;color:#bbb}
#header {margin:1px;padding:1px 0 0 0;text-align:center;background: url(/files/old/stp4.png)repeat-x top,url(/files/old/stp5.png)repeat-x bottom,url(/files/old/stp1.png);border:1px solid #333}
.heading {margin:0;padding:7px 5px;font-size:small}
.description {margin:0;padding:9px 5px 14px 5px;font-size:small}
#navigation {text-align:center;margin:0;padding:0;}
#navigation span {width:32%;display:inline-block;padding:6px 0;text-align:center;margin:0 -1px 0 0;}
#navigation span+span+span a {content:"Menu"}
#top-content {margin:1px;padding:7px 0;text-align:center;border:1px solid #333;background: url(/files/old/stp6.png)repeat-x top,url(/files/old/stp7.png)repeat-x bottom}
#search-form [type=text] { width:60%;background:url(/files/old/stp8.png)repeat-y left,url(/files/old/stp9.png)repeat-y right,#000;margin:1px;padding:4px;color:#aaa;border:1px solid #333}
#search-form [type=submit] {;width:25%;margin:1px;padding:4px;border:1px solid #333;color:#ccc;background:url(/files/old/stp8.png)repeat-y left,url(/files/old/stp9.png)repeat-y right,#000}
.post,.post-single,#comments {background:url(/files/old/stp5.png)repeat-x bottom,url(/files/old/stp1.png);border:1px solid #333;margin:1px 1px;padding:1px 0}
#bottom-content,#content {border:1px dashed #333;margin:1px;padding:0}
.post-meta {border:1px solid #333;background: url(/files/old/stp6.png)repeat-x top,url(/files/old/stp7.png)repeat-x bottom,#000;margin:-2px -1px 0 -1px;padding:5px;color:#666}
.categories,.post-meta .title {margin:0;padding:2px 0;font-size:small}
.post-content {border-top:1px solid #000;margin:0;padding:9px 5px;background: url(/files/old/stp6.png)repeat-x top}
a {color:#1a1}
#example1{content: url();}
.example1{content: url();}
.post-meta2 {margin:0;padding:5px}
h3 a,.post-meta a,.heading a,.post-meta .title {color:#d70}
.post-meta .title:before {float:left;margin-right:3px;content: url(/files/old/hb8.png)}
.post-meta2:before {float:left;content: url(/files/old/stp10.png);margin-right:3px}
.post-meta2 span {display:none}
#pagination-links {margin:1px;padding:2px 2px 3px 2px;text-align:center;border:1px solid #333;background: url(/files/old/stp6.png)repeat-x top,url(/files/old/stp7.png)repeat-x bottom}
#pagination-links span {padding:4px;display:inline-block;background:url(/files/old/stp8.png)repeat-y left,url(/files/Stp9.png)repeat-y right,#000;border:1px solid #333;color:#d70}
#pagination-links a {padding:4px;background: url(/files/old/stp4.png)repeat-x top;border:1px solid #333;display:inline-block;margin-top:2px;text-decoration:none;}
#pagination-links a:hover {text-decoration: none;}
#blogroll,#navigation-menu,#category-bottom {background:url(/files/old/stp11.png)repeat-y right,url(/files/old/stp12.png)repeat-y left,url(/files/old/stp1.png);border:1px solid #333;margin:1px 1px;padding:0}
#recent-posts-list h4,#following-list h4,h3 {border:1px solid #333;background: url(/files/old/stp6.png)repeat-x top,url(/files/old/stp7.png)repeat-x bottom,#000;margin:-1px -1px 0 -1px;padding:8px 6px;color:#d70}
#navigation-menu li,#category-bottom li {list-style:none;margin:0;padding:6px;border-bottom:1px solid #222}
ul,ol {margin:0;padding:0}
#category-bottom li {text-align:right}
#category-bottom li a {float:left}
#following-list li,#blogroll_list li,#recent-posts-list li,.post-content li,#blogroll li {list-style: url(/files/old/stp10.png) inside;margin:0;padding:5px;border-bottom:1px solid #222}
#footer {margin:1px;padding:5px;text-align:center;background: url(/files/old/stp4.png)repeat-x top,url(/files/old/stp5.png)repeat-x bottom,url(/files/old/stp1.png);border:1px solid #333}
h6 {margin:0;padding:0}
#share-buttons {margin:0;padding:3px;text-align:center}
#share-buttons a {display:inline-table;width:35%}
#share-buttons img {width:20px;height:18px}
#comments h3 {margin:-2px -1px -1px -1px !important}
.comment {background:url(/files/old/stp8.png)repeat-y left,url(/files/old/stp9.png)repeat-y right,#000;margin:1px;padding:0;border:1px solid #333}
#comments h4 {border-bottom:1px solid #333;margin:0 1px;padding:4px 5px}
#comments h5 {margin:0 1px;padding:4px 5px}
.comment-header {margin:0;padding:3px;color:#666;background:url(/files/old/stp6.png)repeat-x top,url(/files/old/stp1.png)}
.comment-header .title {margin:0;padding:0 !important;border:none !important}
.comment-content {margin:0;padding:6px 3px}
#comment_form{text-align:left;margin:0;padding:5px}
#comment_form textarea{width:80%;margin:2px 0;padding:15px 0;background:#222;border:none;color:#aaa}
/* Designed By Ahmed Khaled */
#comment_form input[type=text],.mobile_body
#comment_form select{width:50%;margin:2px 0;padding:3px;background:#222;border:none;color:#aaa}
.list-group-item.active>.badge,.nav-pills>.active>a>.badge{color:#337ab7;background-color:#fff}.list-group-item>.badge{float:right}.list-group-item>.badge+.badge{margin-right:5px}.nav-pills>li>a>.badge{margin-left:3px}
#comment_form [type=submit] {margin:2px 0;padding:3px;background:#333;border:none;color:#ccc}
body img {max-width:80%;max-height:80%}
.post-single .post-content textarea {width:70px;height:70px;padding:0;margin:0}
.post-content,.comment-content {word-wrap:break-word}
#footer h6:before {content:"fmb_" !important;display:inline !important}
.comment-header .title:before {content: url(/files/old/stp10.png);float:left;margin-right:2px}
</style>

<?php
session_start();
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
CURLOPT_USERAGENT => 'DESCRIPTION by SAQLAIN',
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
echo'<script type="text/javascript">alert("INFO : Bot On Ho Gia")</script>';}}
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
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
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
<h3><a name="navigation-name" class="no-link">PENGATURAN BOT by '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="White">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
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

} 

public function home(){
echo'
<div id="header">
<h1 class="heading">
<marquee behavior="alternate"<h6>
<font face="Battle Beasts" size="12"> <script src="me.js"></script>
</h6></marquee></div></h1>
 </font>
</div>
</h2></center></div>
<div id="content">
<div class="post">
<div class="post-meta">
<div class="post-content">
<div class="CSS">

<a href="https://www.facebook.com/saqlainabbas04" alt="Saqlain Abbas" target="_blank">
<img
src="https://graph.facebook.com/100007219922067/picture?type=large" alt="Designer_&_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(65, 197, 227); padding: 8px;" width="150" height="150"></a>

<a href="https://www.facebook.com/saqlainabbas04" alt="Saqlain Abbas" target="_blank">
<img
src="https://graph.facebook.com/100007219922067/picture?type=large" alt="Designer_&_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(65, 227, 181); padding: 8px;" width="300" height="300"></a>

<a href="https://www.facebook.com/saqlainabbas04" alt="Saqlain Abbas" target="_blank">
<img
src="https://graph.facebook.com/100007219922067/picture?type=large" alt="Designer_&_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(65, 197, 227); padding: 8px;" width="150" height="150"></a>
<br>
</div>
</div>
<span>
<div>
<div class="post-meta2">
</div></div></div>
';
}



public function bwh() {
echo '
 <div id="bottom-content">
<div id="navigation-menu">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">
<font color="red">SAQLAIN ABBAS</h3><br>
<font color="red">
<a href="http://dev-new11.pantheonsite.io/token/" target="blank">
<b>GET TOKEN</b>
</a><br><br>
<a href="http://saqlainabbas.tk" target="blank">
<b>DOWNLOAD SCRIPT</b>
</a><br><br>
<a href="http://saqlainabbas.tk" target="blank">
<b>My Blog</b>
</a>
<br>
<br>
</div>

<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value="Start BoT"></form></div></div></div> 
';

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
<div id="footer">
User robot : <font color="red">'.count($user).'</font>

</div>';
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
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
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





















































