<script>
	function isEmail(email) {  
            var isValid = false;  
            var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;  
            if(regex.test(email)) {  
                isValid = true;  
            }  
            return isValid;  
        }  


	function kt()
	{
		
		var email = document.fr.txtpass.value;
		if(document.fr.txtemail.value =='')
		{
			alert('Please enter your email');
			document.fr.txtemail.focus();
			return false;
		}
		if(!isEmail(document.fr.txtemail.value))
		{
			alert('The Email field must contain a valid email address.');
			document.fr.txtemail.focus();
			return false;
		}
		if(document.fr.txtpass.value =='')
		{
			alert('Please enter your password');
			document.fr.txtpass.focus();
			return false;
		}
		return true;
		
	}
</script>
<div class="loginPic">
	
            <span class="imgBoxLeft">&nbsp;</span><span class="imgBoxRight">&nbsp;</span>           
            <div class="loginBox">
            <span style="margin-left:170px"><a href="<?=site_url('employer/register')?>"><img width="80" height="40" border="0" src="http://images.vietnamworks.com/spacer.gif" alt=""></a></span> <br><br>
            	                <br>
				<p><font color="#990000"><?=@$error;?></font></p>
                <div class="loginCriteria">
                <form action="<?=site_url('employer/login');?>" method="post" name="fr" onsubmit="return kt();">
                   <?=$this->lang->line('Enter Email Login')?>:<br>
                    <input type="text" name="txtemail" style="margin-top:5px; width:180px; height: 21px;" maxlength="80" title="Invalid Email Login." class="required email" value=""><br>
                    <?=$this->lang->line('Enter Password')?>:<br>
                    <input type="password" name="txtpass" style="margin-top:5px;width: 180px;height: 21px;" title="Invalid password." class="required"><br>
                    <a href="<?=site_url('employer/forgot_password');?>" class="float_left"><?=$this->lang->line('Did you forget your password');?>?</a>
                   </div>
                <div class="loginBtn">
                    <input type="image" name="login" value="Login" src="http://images.vietnamworks.com/btne_login.gif" alt="Login">
                    </form>
                </div>
</div>
       
       
                
            </div>
			
        </div>