<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Belajar PHP</title>
</head>
<body>

<h1>Logika di PHP</h1>

 <?php
 //---------- tipe data boolean ----------
 // $hasil = true;
  //$hasil2 = false;
  
  //---------- if dan else ----------
  // operator logika == === > >= < <= !=
  
  //$uang_programer = 4000;
  //$keyboard       = 2000;
 // $uang_designer  = 4000;
  
     //&& atau ||
	 
	 //if( $uang_programer > $keyboard
	    // && $uang_designer > $keyboard){
		 
		 //echo 'boleh beli keyboard';
	//}else{	 
	   //echo 'ngga bisa beli';
//}  
  
     //if( $uang_programer > $keyboard){
     //echo ' dibeli';
  //}else if( $uang_designer > $keyboard){
	 //echo ' dibeli oleh designer!';
	  
	  //--if bercabang
	 // if( $uang_designer >= $keyboard * 2){
	 // echo ' dibeli duakali oleh designer!';
	 // }
 // }
 // else{
	 // echo 'ngga cukup';
  //}
  
  
   //switch case 
   
  $nama = "jaemin";
  
  switch ($nama) {
	 case 'jaehyun':
	  echo 'namanya jaehyun';
      break;
     case 'jeno':
	   echo 'namanya jeno';
	    break;
	 case 'jaemin':
	   echo 'namanya jaemin';
	    break;	 
		//default:
		//echo 'tidak ada yang benar';
  }
	 
 ?>
 
 
 </body>
 </html>
 