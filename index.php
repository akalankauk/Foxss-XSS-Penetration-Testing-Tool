<!-- https://github.com/akalankauk/Foxss-XSS-Penetration-Testing-Tool !-->
<!--//Hi! Help to improve our foxss as contributor //--!>
<?php include("system/header.php"); ?>
<?php include("config/configer.php"); ?>
<body>
    <div class="panel-heading">
  <!-- Code View Start !-->
  <center>
      <per>
  <form name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <label for="keyword">Website URL: </label>
 <input type="text" name="weburl" id="weburl" value="" style=" width:70%;"placeholder="https://example.com/?search="> 
  <input type="submit" value="Analyze">
  </per>
  <br>
  
  <per>
  <label for="URL">Current URL: </label>
<input type="text" id="curl" value="<?php echo htmlspecialchars($_POST["weburl"]);?>"placeholder="Please Enter Your URL & Click Analyze." style=" width:70%;">
<button type="button" onclick="ClearFields();">Clear Url</button>
</per>
</form>
</center>
</div>
<br>
  <!-- Code View END !-->
  
  
  
<!-- -------------------------------------------------------------------- !-->  
  
  
  
<!-- Source CODE Start !-->
  <div class="panel panel-default">
    <div class="panel-heading">
      <form>
        <div class="form-group">
          <label for="keyword">Manual Search:</label>
          <input type="text" id="keyword" name="keyword" class="form-control input-sm" value="">
        </div>
<?php include("system/option.php"); ?>
      </form>
      </div>
      
    <div class="panel-body context">
     
      <p name='code' class='code' style="height:100%;">
      <pre><code>
       <?php
	$all_lines = file($_POST["weburl"] );
foreach ($all_lines as $line_num => $line)
{
	echo "" . htmlspecialchars($line) . "\n";
}
?>
</code></pre>
</p>
</div>
</div>
<!-- Source CODE END !-->
<?php include("system/footer.php"); ?>