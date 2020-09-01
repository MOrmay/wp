<?php
  session_start();

$Name=$Email=$Mobile=$Subject=$Message= NULL;
$NameErr=$EmailErr=$MobileErr=$SubjectErr=$MessageErr=$Success= NULL;
$regexMob = "/^(\(04\)|04|\+614)( ?\d){8}$/";// Allows any of the valid mobile prefixes then any 8 numbers to follow
$regexName = "/^[a-zA-Z]+\s[a-zA-Z]+$/";// is would be nice to allow a hyphen but i can't figure it out
$regexEmail = "/^[a-zA-z\-\.\d_]+@[a-zA-z\-\.\d_]+\.[a-zA-z\-\.\d_]+$/";// forces emails to be in the form xxx@xxx.xxx
$a=$b=$c=0;
// Put your PHP functions and modules here

//not 100% sure if this works but it is supposed to get the values from the csv file
  $row = 1;
  if (($handle = fopen("/home/eh1/e54061/public_html/wp/letters-home.txt", "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 0, "\t")) !== FALSE) {
          $num = count($data);
          echo "<p> $num fields in line $row: <br /></p>\n";
          $row++;
          for ($c=0; $c < $num; $c++) {
              echo $data[$c] . "<br />\n";
          }
      }
      fclose($handle);
  }

//when 
if (isset($_POST['submit'])) {
  if(preg_match($regexName,$_POST['Name'])){
     $Name = $_POST['Name'];
     $a = 0;
  } else {
    $NameErr = "Please use your first and last name with no special characters";
    $a = 1;
  }
  if(preg_match($regexEmail,$_POST['Email'])){
    $Email = $_POST['Email'];
    $b = 0;
 } else {
   $EmailErr = "Please enter a valid email";
   $b = 1;
 }
  if(preg_match($regexMob,$_POST['Mobile'])){
    $Mobile = $_POST['Mobile'];
    $c = 0;
 } else {
   $MobileErr = "Please enter a valid Australian Mobile No.";
   $c = 1;
 }
 
 if (($a+$b+$c) == 0){
  $Success = "Email Sent!!";
 } Else {
   $Success = NULL;;
 }


 //Performing preg_replace on the data then trimming away excess whitespace to the right
  $Subject = rtrim(preg_replace('/[^\n[:print:]]/','',$_POST['Subject']));
  $Message = rtrim(preg_replace('/[^\n[:print:]]/','',$_POST['Message']));
}

?>