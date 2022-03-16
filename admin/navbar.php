
<style>
	.collapse a{
		text-indent:10px;
	}
	
</style>

<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">
				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> HOME</a>
				<a href="index.php?page=manage_carousel" class="nav-item nav-manage_carousel"><span class='icon-field'><i class="fa fa-images"></i></span> MANAGE IMAGE UPLOAD</a>
				<a href="index.php?page=manage_page&edit=about" class="nav-item nav-about"><span class='icon-field'><i class="fa fa-align-justify"></i></span>ABOUT UNZAICTA PAGE</a>
				
				<a href="index.php?page=milestones" class="nav-item nav-milestones"><span class='icon-field'><i class="fa fa-calendar-alt"></i></span> MILESTONES</a>
				
				<?php if($_SESSION['login_type'] == 1): ?>
				
				<a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> System Settings</a>
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
