<?php

global $wpdb;
$tablename = $wpdb->prefix."customplugin";

// Delete record
if(isset($_GET['delid'])){
  $delid = $_GET['delid'];
  $wpdb->query("DELETE FROM ".$tablename." WHERE id=".$delid);
}
?>
<h1>All Entries</h1>

<table width='100%' border='1' style='border-collapse: collapse;'>
  <tr>
   <th>#</th>
   <th>Title</th>
   <th>Subtitle</th>
   <th>Tagline</th>
   <th>Sort Description</th>
   <th>&nbsp;</th>
  </tr>
  <?php
  // Select records
  $entriesList = $wpdb->get_results("SELECT * FROM ".$tablename." order by id desc");
  if(count($entriesList) > 0){
    $count = 1;
    foreach($entriesList as $entry){
      $id = $entry->id;
      $title = isset($entry->title) ? $entry->title : '';
      $subtitle = isset($entry->subtitle) ? $entry->subtitle : '';
      $tagline = isset($entry->tagline) ? $entry->tagline : '';
      $sort_description = isset($entry->sort_description) ? $entry->sort_description : '';

      echo "<tr>
      <td>".$count."</td>
      <td>".$title."</td>
      <td>".$subtitle."</td>
      <td>".$tagline."</td>
      <td>".$sort_description."</td>
      <td><a href='?page=allentries&delid=".$id."'>Delete</a></td>
      </tr>
      ";
      $count++;
   }
 }else{
   echo "<tr><td colspan='6'>No record found</td></tr>";
 }
?>
</table>