<?php
$set_jam=$bot[jam]; 
$tang =date('d F Y',time()+($set_jam*3600));
$jame =date('H:i',time()+($set_jam*3600));
$tme=date('Y',time()+($set_jam*3600));
$hrs=date('z',time()+($set_jam*3600));
$jum=(($tme-1)*365)
+(int)(($tme-1)/4)+$hrs;
$di=7*(int)($jum/7);
$dino=$jum-$di;
$pas=5*(int)($jum/5);
$pasar=$jum-$pas;
$dino=str_replace('6','Sabtu',$dino);
$dino=str_replace('0','Minggu',$dino);
$dino=str_replace('1','Senin',$dino);
$dino=str_replace('2','Selasa',$dino);
$dino=str_replace('3','Rabu',$dino);
$dino=str_replace('4','Kamis',$dino);
$dino=str_replace('5','Jum`at',$dino);
$pasar=str_replace('4','Legi',$pasar);
$pasar=str_replace('0','Pahing',$pasar);
$pasar=str_replace('1','Pon',$pasar);
$pasar=str_replace('2','Wage',$pasar);
$pasar=str_replace('3','Kliwon',$pasar);


    if($bot[bn] == 'default'){
        $banner = '

===================@@===================
'.$dino.' '.$pasar.' || Tanggal: '.$tang.' || Jam: '.$jame.' Wib 
'.$bot[bn_v];
    }
if($bot[bn] =='custom'){
    $banner = $bot[bn_v];
     }


?>
