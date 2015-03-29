# SimpleCaptcha
A simple captcha mechanism, easy to read by user. No frustration. Low usage also means it's relatively safe to use. Further improvements will include random backgrounds and items.  
  
 * SimpleCaptcha
 * PHP
 * Author: Gaetano Bonofiglio - ByteAround.com
 * Requires GD libraries
  
Simply make a text input asking for the number of triangles (or any picture you use to replace clock.png) and then check if the input is the same as ```$_SESSION['clock_num']``` (if you want to use PHP). Just include ```<img src="captcha/captcha.php" alt="Captcha" style="display:inline;" id="captcha-pic" />``` somewhere in the form.
  
Can be integrated with any language and method (on ByteAround.com it's part of a jQuery contact form). 
