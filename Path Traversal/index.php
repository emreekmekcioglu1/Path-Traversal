<?php 
//To prevent possible Path Traversal attack uncomment lines(4-8-10-11) and comment line 19

//$whitelist = ['welcome.html','sheldon.html','missy.html','georgie.html','marry.html','meemaw.html','john.html'];
if (isset ($_GET ['page']))
   {
         $page = $_GET['page'];
        //if(in_array($page, $whitelist)){
          
        //  echo file_get_contents($page);
        //}  
       
   }
   else
        $page = 'welcome.html';
         


echo file_get_contents($page); //Comment this line
?>
