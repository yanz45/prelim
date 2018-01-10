<div id="todo"> 
  
<?php 
require 'db.php'; 
$db = new Db(); 
$query = "SELECT * FROM todo ORDER BY id asc"; 
$results = $db->mysql->query($query); 
  
if($results->num_rows) { 
    while($row = $results->fetch_object()) { 
        $title = $row->title; 
        $description = $row->description; 
        $id = $row->id; 
      
echo '<div class="item">'; 
  
$data = <<<EOD 
<h4> $Title </h4> 
<p> $description </p> 
  
<input type="hidden" name="id" id="id" value="$id" /> 
  
<div class="options"> 
    <a class="deleteEntryAnchor" href="delete.php?id=$id">D</a> 
    <a class="editEntry" href="#">E</a> 
</div> 
EOD; 
          
echo $data; 
echo '</div>'; 
    } // end while 
} else { 
    echo "<p>There are zero items. Add one now!</p>"; 
} 
?> 
</div><!--end todo wrap-->