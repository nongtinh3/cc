<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Using captcha with Codeigniter part 1</title>
  <base href="<?=base_url();?>">
  </head>
<body>
<h2>Captcha Test</h2>
<form method="post">
<?php echo $cap_img ;?>
<p><?php echo $cap_msg ;?></p>
<input type="text" name="captcha" value="" />
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
