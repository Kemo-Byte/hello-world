<!-- Start Navbar -->

		<nav class="navbar navbar-inverse  navbar-fixed-top">

		  <div class="container">

		    <!-- Brand and toggle get grouped for better mobile display -->

				<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournavbar" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>

						  </button>
						  <a class="navbar-brand" href="#">Kemo<span>Byte</span></a> <!-- Brand -->
				</div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="ournavbar">

		      <ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#"><?= lang('Home') ?> <span class="sr-only">(current)</span></a></li>
						<li><a href="#"><?= lang('About') ?></a></li>
						<li><a href="#"><?= lang('Company') ?></a></li>

						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= lang('services') ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#"><?= lang('Programming') ?></a></li>
							<li><a href="#"><?= lang('Web Design') ?></a></li>
							<li><a href="#"><?= lang('Desktop') ?></a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#"><?= lang('Web Hosting') ?></a></li>
		
						</ul>
							</li>
								<li><a href="#"><?= lang('Map') ?></a></li>
						<li><a href="#"><?= lang('Contact') ?></a></li>
		  	 </ul>
		  
		
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
<!-- End Navbar -->
