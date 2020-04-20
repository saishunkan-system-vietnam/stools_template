<div id="offcanvas-menu" uk-offcanvas="mode: reveal; overlay: true">
			<div class="uk-offcanvas-bar">
				<button class="uk-offcanvas-close" type="button" uk-close></button>
				<aside id="left-col" class="uk-light">
					<div class="left-content-box  content-box-dark">
						<img src="img/avatar.svg" alt="" class="uk-border-circle profile-img">
						<h4 class="uk-text-center uk-margin-remove-vertical text-light">John Doe</h4>
						<div class="uk-position-relative uk-text-center uk-display-block">
							<a href="#" class="uk-text-small uk-text-muted uk-display-block uk-text-center" data-uk-icon="icon: triangle-down; ratio: 0.7">Admin</a>
							<!-- user dropdown -->
							<div class="uk-dropdown user-drop" data-uk-dropdown="mode: click; pos: bottom-center; animation: uk-animation-slide-bottom-small; duration: 150">
								<ul class="uk-nav uk-dropdown-nav uk-text-left">
										<li><a href="#"><span data-uk-icon="icon: info"></span> Summary</a></li>
										<li><a href="#"><span data-uk-icon="icon: refresh"></span> Edit</a></li>
										<li><a href="#"><span data-uk-icon="icon: settings"></span> Configuration</a></li>
										<li class="uk-nav-divider"></li>
										<li><a href="#"><span data-uk-icon="icon: image"></span> Your Data</a></li>
										<li class="uk-nav-divider"></li>
										<li><a href="#"><span data-uk-icon="icon: sign-out"></span> Sign Out</a></li>
								</ul>
							</div>
							<!-- /user dropdown -->
						</div>
					</div>
					
					<div class="left-nav-wrap">
						<ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav>
							<li class="uk-nav-header">ACTIONS</li>
							<li><a href="#"><span data-uk-icon="icon: comments" class="uk-margin-small-right"></span>自分の貸出設備</a></li>
							<li><a href="#"><span data-uk-icon="icon: users" class="uk-margin-small-right"></span>設備種類一覧</a></li>
							<li class="uk-parent"><a href="#"><span data-uk-icon="icon: thumbnails" class="uk-margin-small-right"></span>設備一覧</a>
								<ul class="uk-nav-sub">
									<li><a href="#">設備情報一覧</a></li>
									<li><a href="#">設備詳細情報</a></li>
								</ul>
							</li>
							<li><a href="#"><span data-uk-icon="icon: album" class="uk-margin-small-right"></span>引渡・返却一覧</a></li>
							<li class="uk-parent">
								<a href="#"><span data-uk-icon="icon: comments" class="uk-margin-small-right"></span>設備引渡書</a>
								<ul class="uk-nav-sub">
									<li><a href="#">設備引渡書</a></li>
                                    <li><a href="#">部署の貸出設備</a></li>
                                    <li><a href="#">設備引渡書</a></li>
								</ul>
							</li>
						</ul>
						<div class="left-content-box uk-margin-top">
							
								<h5>Daily Reports</h5>
								<div>
									<span class="uk-text-small">Traffic <small>(+50)</small></span>
									<progress class="uk-progress" value="50" max="100"></progress>
								</div>
								<div>
									<span class="uk-text-small">Income <small>(+78)</small></span>
									<progress class="uk-progress success" value="78" max="100"></progress>
								</div>
								<div>
									<span class="uk-text-small">Feedback <small>(-12)</small></span>
									<progress class="uk-progress warning" value="12" max="100"></progress>
								</div>
							
						</div>
						
					</div>
					<div class="bar-bottom">
						<ul class="uk-subnav uk-flex uk-flex-center uk-child-width-1-5" data-uk-grid>
							<li>
								<a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'itemschoose']); ?>" class="uk-icon-link" data-uk-icon="icon: home" title="Home" data-uk-tooltip></a>
							</li>
							<li>
								<a href="#" class="uk-icon-link" data-uk-icon="icon: settings" title="Settings" data-uk-tooltip></a>
							</li>
							<li>
								<a href="#" class="uk-icon-link" data-uk-icon="icon: social"  title="Social" data-uk-tooltip></a>
							</li>
							
							<li>
								<a href="#" class="uk-icon-link" data-uk-tooltip="Sign out" data-uk-icon="icon: sign-out"></a>
							</li>
						</ul>
					</div>
				</aside>
			</div>
		</div>