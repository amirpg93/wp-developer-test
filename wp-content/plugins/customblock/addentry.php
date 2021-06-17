<?php

global $wpdb;

// Add record
if(isset($_POST['but_submit'])){

  $title = $_POST['title'];
  $subtitle = $_POST['subtitle'];
  $tagline = $_POST['tagline'];
  $sort_description = $_POST['sort_description'];
  $description = $_POST['description'];
  $tablename = $wpdb->prefix."customplugin";

  if($title != '' && $subtitle != '' && $tagline != '' && $sort_description != '' && $description != ''){
     $check_data = $wpdb->get_results("SELECT * FROM ".$tablename." WHERE title='".$title."' ");

     if(count($check_data) == 0){
       $insert_sql = "INSERT INTO ".$tablename."(title,subtitle,tagline,sort_description,long_description) values('".$title."','".$subtitle."','".$tagline."','".$sort_description."','".$description."') ";
       //print_r($insert_sql); die;
       $wpdb->query($insert_sql);

       if($wpdb){
        echo "Save sucessfully.";
       }else{
        echo "Something went wrong please try again.";
       }
       
     }
   }else{
    echo "All fields are mandatory";

   }
}

?>
<h1>Add New Entry</h1>
<form method='post' action=''>
  <table>
  <tbody>
    <tr>
      <td>Title *</td>
      <td><input type='text' name='title' class="form-control" required=""></td>
    </tr>
    <tr>
     <td>Sub Title *</td>
     <td><input type='text' name='subtitle' required=""></td>
    </tr>
    <tr>
     <td>Tagline *</td>
     <td><input type='text' name='tagline' required=""></td>
    </tr>
    <tr>
     <td>Sort Description *</td>
     <td><textarea name='sort_description' required=""> </textarea></td>
    </tr>
    <tr>
     <td>Description *</td>
     <td><textarea name='description' required=""></textarea> </td>
    </tr>
    <tr>
     <td>&nbsp;</td>
     <td><input type='submit' name='but_submit' value='Submit'></td>
    </tr>
    </tbody>
 </table>
</form>