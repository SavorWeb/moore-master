This boilerplate is the starting point assembled by Ryan Maskell on April 21st 2014.

It uses the following technologies and plugins and bows to their greatness, they were developed by people like me, for people like us. Developers.

#Technologies

+ Framework: [Sassaparilla](http://sass.fffunction.co)
+ Preprocessing: [Mixture.io](http://mixture.io)

##Plugins

+ [Responsive Nav](http://www.responsive-nav.com)
+ [Transformicons](http://sarasoueidan.com/blog/navicon-transformicons/)
+ [Responsive Accordion](http://www.github.com/joemottershaw/responsive-accordion)
+ [Swipe.js](http://www.swipejs.com)

---

##Responsive Accordion Usage

.typeset ul.acc {
	margin-left: 0;
	li {
		color: $pos;
		background-color: lighten($secondary, 15%);
	}
}

.acc li {
	list-style-type: none;
}

.acc li .acc-head {
	cursor: pointer;
	position: relative;
	padding: 20px;
}

.acc li .acc-head i {
	position: absolute;
	top: 22px;
	right: 15px;
}

.acc-panel {
	padding: 0px 20px 10px;
}

<ul class="acc">
	<li>
		<div class="acc-head">Thing 1<i class="fa fa-chevron-down acc-plus fa-fw"></i><i class="fa fa-chevron-up acc-minus fa-fw"></i></div>
		<div class="acc-panel">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, eveniet, eaque, autem beatae amet mollitia saepe minus fugit odit minima maxime harum explicabo ipsa natus est similique ab reprehenderit totam!</p>
		</div>
	</li>
	<li>
		<div class="acc-head">Thing 2<i class="fa fa-chevron-down acc-plus fa-fw"></i><i class="fa fa-chevron-up acc-minus fa-fw"></i></div>
		<div class="acc-panel">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, incidunt, maxime nostrum dolore eum dolores cum sunt ducimus debitis reiciendis praesentium molestias? Soluta, fugit, nisi odit nostrum at tempore architecto.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, repellat adipisci eius magni necessitatibus non soluta amet eligendi. Optio, consequuntur hic cumque dolorum ipsam doloribus repellendus harum unde consequatur odio?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, nobis, tenetur nihil quod itaque molestiae assumenda quam rem dolore quisquam facilis ea necessitatibus officiis praesentium labore doloribus voluptas consequuntur deserunt.</p>
		</div>
	</li>
	<li>
		<div class="acc-head">Thing 3<i class="fa fa-chevron-down acc-plus fa-fw"></i><i class="fa fa-chevron-up acc-minus fa-fw"></i></div>
		<div class="acc-panel">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, alias nemo ab modi porro quam ex temporibus animi ipsam laborum aperiam excepturi doloremque! Quia, fugiat culpa corporis obcaecati laborum atque.</p>
		</div>
	</li>
</ul>

--
##Contact Plugin

<div class="row" id="contact">
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
        
			<button name="submit" type="submit" class="subbutton">Send us Mail!</button>
			<input type="hidden" name="submitted" id="submitted" value="true" />
	</form>			
</div>