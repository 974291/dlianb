<?php if (!defined('THINK_PATH')) exit();?><frameset rows="150px,1200px,130px" frameborder="0">
	<frame src="<?php echo U('Pubtask/account_top');?>" name="top"  scrolling="no" noresize="noresize"/>
	<frameset cols="260px,*">
		<frame src="<?php echo U('Pubtask/user_left');?>" name="leftframe" scrolling="no" noresize="noresize">  
		<frame src="<?php echo U('Pubtask/user_right');?>" name="rightframe" noresize="noresize">
	</frameset >
	<frame src="<?php echo U('Pubtask/user_footer');?>" name="footer"  scrolling="no" noresize="noresize"/>
</frameset >