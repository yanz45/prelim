<div id="addNewEntry"> 
  
<hr /> 
<h2>Add New Entry</h2> 
<form action="addItem.php" method="post"> 
    <p> 
        <label for="title"> Title</label> 
        <input type="text" name="title" id="title" class="input"/> 
    </p> 
  
    <p> 
        <label for="description"> Description</label> 
        <textarea name="description" id="description" rows="10" cols="35"></textarea> 
    </p>   
      
    <p> 
        <input type="submit" name="addEntry" id="addEntry" value="Add New Entry" /> 
    </p> 
</form> 
  
</div>