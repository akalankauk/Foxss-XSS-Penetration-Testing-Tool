        <button type="button" class="btn btn-default btn-sm" name="perform">Search</button>&nbsp;&nbsp;
        
        <button type="button" id="btn-namefinder" class="btn btn-default btn-sm" name="btn-namefinder" onclick="SeC1()">Injection Points</button>&nbsp;&nbsp;
        
        <button type="button" id="btn-namefinder" class="btn btn-default btn-sm" name="btn-namefinder" onclick="SeC2()">Basic Payload</button>&nbsp;&nbsp;
        
        <button type="button" class="btn btn-default btn-sm" onClick="window.location.reload();">Reconfig</button>&nbsp;&nbsp;
        
        <button type="button" class="btn btn-default btn-sm" onClick="window.location.href=window.location.href">Reload/New</button>&nbsp;&nbsp;
        
        <button type="button" class="btn btn-default btn-sm" onclick="window.open('<?php echo htmlspecialchars($_POST["weburl"]);?>')">Test XSS Attack</button>&nbsp;&nbsp;
        
        <select id="payload" onChange="check();" name="payload"  class="btn btn-default btn-sm">
  <option value="">Select Payload..</option> 
  <option value="<?php echo htmlspecialchars("$hunter1");?>">Basic Filter 1</option>
  <option value="<?php echo htmlspecialchars("$hunter2");?>">Tag Inject</option>
  <option value="<?php echo htmlspecialchars("$hunter3");?>">Context Inject</option>
  <option value="<?php echo htmlspecialchars("$hunter4");?>">Tag Inject JS</option>
  <option value="<?php echo htmlspecialchars("$hunter5");?>">Mappings</option>
  <option value="<?php echo htmlspecialchars("$hunter6");?>">Body Tag</option>
  <option value="<?php echo htmlspecialchars("$hunter7");?>">Mis Audio</option>
  <option value="<?php echo htmlspecialchars("$hunter8");?>">Mis Form</option>
</select>

<button type="button" class="btn btn-default btn-sm" onclick="window.open('https://github.com/akalankauk')">User Guide</button>&nbsp;&nbsp;