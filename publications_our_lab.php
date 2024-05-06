<!DOCTYPE html>
<html lang="en" dir="ltr">

<head><?php include "./head.php" ?></head>

<body>

<div class="container-header">
    <img src="img/publications2.jpg" id="header-img" alt="Publications Photo" />
    <h1>our lab publications</h1>
    <?php include "./nvbar.php" ?>
</div>

<!-- main section open -->
<div class='container-body'>
    <div class='cotainer-content'>

<script async src="https://badge.dimensions.ai/badge.js" charset="utf-8"></script>
<script type='text/javascript' src='https://d1bxh8uas1mnw7.cloudfront.net/assets/embed.js'></script>

<?php include "./publications_by_our_lab.php" ?>


<br/><br/><br/>
<br/><br/><br/>

<script>

$(document).ready(function(){
	$(".read").click(function(){
		$(this).prev().toggle();
		$(this).siblings('.dots').toggle();
		if($(this).text()=='read more'){
			$(this).text('read less');
		}
		else{
			$(this).text('read more');
		}
	});
});
</script>

</div>
</div>
<!-- main section close -->
<!-- footer open -->
<!-- <P style="padding-top: 15px;" ></P> -->
<?php include "./footer.php" ?>
<!-- footer close -->
</body>  
</html>