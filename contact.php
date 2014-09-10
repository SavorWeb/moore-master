<?php include("_/inc/head.php"); ?>

<div class="row">
	<div id="photo-left" class="colspan12-3 colspan6-2 padded colspan2-2 as-grid editable">
		<div class="side-photo repeatable">
			<img alt="photo" id="photo1" src="media/photos/grohe-tub.jpg" alt="">
			<p>caption</p>
		</div>
		<div class="side-photo repeatable">
			<img alt="photo" id="photo2" src="media/photos/moen-shower.jpg" alt="">
			<p>caption</p>
		</div>
		<div class="side-photo repeatable">
			<img alt="photo" id="photo3" src="media/photos/grohe-faucet.jpg" alt="">
			<p>caption</p>
		</div>
	</div>
	<div id="contact" class="colspan12-9 colspan6-4 colspan2-2 as-grid padded typeset grey-bg">
		
		<h1>Contact Us!</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, necessitatibus, minima, possimus, fugiat libero quisquam laborum id culpa assumenda molestiae et perspiciatis eos doloremque ex laudantium delectus porro. Hic, quam?</p>


<?php if(isset($hasError) || isset($captchaError) ) { ?>
        <p class="alert">Error submitting the form</p>
    <?php } ?>

	<form id="contact-us" action="contact-submit.php" method="post">
		<div class="formblock">
			<label class="screen-reader-text">Name</label>
			<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="txt requiredField" placeholder="Name:" />
			<?php if($nameError != '') { ?>
				<br /><span class="error"><?php echo $nameError;?></span> 
			<?php } ?>
		</div>
        
		<div class="formblock">
			<label class="screen-reader-text">Email</label>
			<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="txt requiredField email" placeholder="Email:" />
			<?php if($emailError != '') { ?>
				<br /><span class="error"><?php echo $emailError;?></span>
			<?php } ?>
		</div>
        
		<div class="formblock">
			<label class="screen-reader-text">Message</label>
			 <textarea name="comments" id="commentsText" class="txtarea requiredField" placeholder="Message:"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
			<?php if($commentError != '') { ?>
				<br /><span class="error"><?php echo $commentError;?></span> 
			<?php } ?>
		</div>
        
			<button name="submit" type="submit" class="subbutton">Send email</button>
			<input type="hidden" name="submitted" id="submitted" value="true" />
	</form>			
	</div>
</div>

<?php include("_/inc/foot.php"); ?>