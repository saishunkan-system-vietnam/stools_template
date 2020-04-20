<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Price - UIkit 3 KickOff</title>
		<link rel="icon" href="img/favicon.ico">
		<!-- CSS FILES -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
		<style>
			.uk-container-small {
				max-width: 1020px;
			}
		</style>
	</head>
	<body>
		<!--HEADER-->
		<header class="uk-box-shadow-small">
			<div class="uk-container uk-container-expand uk-background-primary">
				<nav class="uk-navbar uk-light" data-uk-navbar="mode:click; duration: 250">
					<div class="uk-navbar-left">
						<div class="uk-navbar-item uk-hidden@m">
							<a class="uk-logo" href="#"><img class="custom-logo" src="img/dashboard-logo-white.svg" alt=""></a>
						</div>
						<ul class="uk-navbar-nav uk-visible@m">
							<li class="left-logo uk-flex uk-flex-middle">
								<img class="custom-logo" src="img/dashboard-logo.svg" alt="">
							</li>
							<li><a href="#"><?= __("Accounts"); ?></a></li>
							<li>
								<a href="#">Settings <span data-uk-icon="icon: triangle-down"></span></a>
								<div class="uk-navbar-dropdown">
									<ul class="uk-nav uk-navbar-dropdown-nav">
										<li class="uk-nav-header">YOUR ACCOUNT</li>
										<li><a href="#"><span data-uk-icon="icon: info"></span> Summary</a></li>
										<li><a href="#"><span data-uk-icon="icon: refresh"></span> Edit</a></li>
										<li><a href="#"><span data-uk-icon="icon: settings"></span> Configuration</a></li>
										<li class="uk-nav-divider"></li>
										<li><a href="#"><span data-uk-icon="icon: image"></span> Your Data</a></li>
										<li class="uk-nav-divider"></li>
										<li><a href="#"><span data-uk-icon="icon: sign-out"></span> Logout</a></li>
									</ul>
								</div>
							</li>
						</ul>
						<div class="uk-navbar-item uk-visible@s">
							<form action="dashboard.html" class="uk-search uk-search-default">
								<span data-uk-search-icon></span>
								<input class="uk-search-input search-field" type="search" placeholder="Search">
							</form>
						</div>
					</div>
					<div class="uk-navbar-right">
						<ul class="uk-navbar-nav">
							<li><a href="#" data-uk-icon="icon:user" title="Your profile" data-uk-tooltip></a></li>
							<li><a href="#" data-uk-icon="icon: settings" title="Settings" data-uk-tooltip></a></li>
							<li><a href="#" data-uk-icon="icon:  sign-out" title="Sign Out" data-uk-tooltip></a></li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--/HEADER-->
		
		<!--AUTHOR-->
		<section class="uk-section uk-section-muted uk-padding-remove-bottom">
			<div class="uk-container uk-container-small">
				<header class="uk-text-center">
					<h1 class="uk-heading-primary">Choose Module</h1>
					<p class="uk-width-3-5 uk-margin-auto">
						Our Product is the easiest way for teams to track their works progress. Our advance plans give you more tools to get the job done.
					</p>
				</header>
				<div class="uk-grid uk-grid-small uk-child-width-1-3@m uk-margin-medium-top uk-grid-match" data-uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div > .uk-card; delay: 200" data-uk-grid>
					
					<!-- price -->
					<div>
						<div class="uk-card uk-card-default uk-card-hover uk-flex uk-flex-column" data-uk-scrollspy-class="uk-animation-slide-left-small">
							<div class="uk-card-header uk-text-center">
								<h4 class="uk-text-bold">TIMESHEET</h4>
							</div>
							<div class="uk-card-body uk-flex-1">
								<div class="uk-flex uk-flex-middle uk-flex-center">
									<span style="font-size: 4rem; font-weight: 200; line-height: 1em">
										<span uk-icon="icon: calendar; ratio: 3.5"></span>
									</span>
								</div>
								<div class="uk-text-small uk-text-center uk-text-muted">Per member billed annually</div>
								<ul>
									<li>2 users included</li>
									<li>1 GB of storage</li>
									<li>A beer jar</li>
									
								</ul>
							</div>
							<div class="uk-card-footer">
								<a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'home']) ?>" class="uk-button uk-button-primary uk-width-1-1">GO TO</a>
							</div>
						</div>
					</div>
					<!-- /price -->
					
					<!-- price -->
					<div>
						<div class="uk-card uk-card-default uk-card-hover uk-flex uk-flex-column">
							<div class="uk-card-header uk-text-center">
								<h4 class="uk-text-bold">INVENTORY</h4>
							</div>
							<div class="uk-card-body uk-flex-1">
								<div class="uk-flex uk-flex-middle uk-flex-center">
									<span style="font-size: 4rem; font-weight: 200; line-height: 1em">
										<span uk-icon="icon: desktop; ratio: 3.5"></span>
									</span>
								</div>
								<div class="uk-text-small uk-text-center uk-text-muted">Per member billed annually</div>
								<ul>
									<li>10 users included</li>
									<li>5 GB of storage</li>
									<li>Email support</li>
									<li>A beer jar with beer inside!</li>
								</ul>
							</div>
							<div class="uk-card-footer">
								<a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'home']) ?>" class="uk-button uk-button-primary uk-width-1-1">GO TO</a>
							</div>
						</div>
					</div>
					<!-- /price -->
					<!-- price -->
					<div>
						<div class="uk-card uk-card-default uk-flex uk-card-hover uk-flex-column uk-background-muted" data-uk-scrollspy-class="uk-animation-slide-right-small">
							<div class="uk-card-header uk-text-center">
								<h4 class="uk-text-bold">HUMAN RESOURCE
								<span uk-icon="icon: lock"></span>
								</h4>
							</div>
							<div class="uk-card-body uk-flex-1">
								<div class="uk-flex uk-flex-middle uk-flex-center">
									<span style="font-size: 4rem; font-weight: 200; line-height: 1em">
										<span uk-icon="icon: users; ratio: 3.5"></span>
									</span>
								</div>
								<div class="uk-text-small uk-text-center uk-text-muted">Per member billed annually</div>
								<ul>
									<li>Unlimited users</li>
									<li>Unlimited storage</li>
									<li>Email support</li>
									<li>Help center access</li>
								</ul>
							</div>
							<div class="uk-card-footer">
								<a href="" class="uk-button uk-button-primary uk-width-1-1">BUY NOW</a>
							</div>
						</div>
					</div>
					<!-- /price -->
				</div>
			</div>
		</section>
		<footer class="uk-section uk-section-small uk-text-center">
			<hr>
			<p class="uk-text-small uk-text-center">Copyright 2020 - <a href="https://vn.saishunkansys.com">Created by Saishunkan System Vietnam</a> | Built with <a href="http://getuikit.com" title="Visit UIkit 3 site" target="_blank" data-uk-tooltip><span data-uk-icon="uikit"></span></a> </p>
		</footer>		
		<!-- JS FILES -->
		<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit-icons.min.js"></script>
		
	</body>
</html>
