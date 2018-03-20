@extends('layouts.app')

@section('content')
	<main id="barba-wrapper">
      <div class="barba-container app__layout" data-prev="/" data-next="/result">
			<!-- <header class="header" style="z-index: 980;" uk-sticky="bottom: true">
				<nav class="main-navbar uk-navbar-container" uk-navbar>
					<div class="uk-navbar-left">
						<ul class="uk-navbar-nav">
							<li class="uk-active">
								<a href="/" class="prev">Ажил хайх</a>
							</li>
						</ul>

					</div>
				</nav>
			</header> -->

			<section class="body">
				<div class="uk-container uk-container-center">
					<div class="uk-grid-small uk-grid-match uk-text-center uk-margin-top" uk-grid>
						<div class="uk-width-1-1">
							<div class="head-section uk-margin-large-top uk-margin-large-bottom">
								
								<img src="images/logo.png" class="uk-position-relative uk-responsive-width logo uk-margin-small-top uk-margin-small-bottom" alt="" uk-responsive>
								<!-- <div class="uk-position-center uk-position-absolute spinner"></div>
								<div class="uk-position-center uk-position-absolute spinner2"></div> -->
							</div>
							<div class="search-section uk-margin-top">
								<form action="/result" id="form">
									<div class="first-search-section">
										<h6 class="uk-margin-small-bottom h6-title uk-margin-left uk-text-left">
											<strong>ЮУ</strong> ажлын нэр, үг, эсвэл компани</h6>
										<div class="uk-margin uk-margin-remove-top">
											<div class="uk-inline search-inline">
												<a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: search"></a>
												<input class="search-input uk-input" type="text" id="first" data-dependency="second" name="job_name">
											</div>
										</div>
									</div>

									<div class="second-search-section">
										<h6 class="uk-margin-small-bottom uk-margin-left uk-text-left">
											<strong>ХААНА</strong> хот, дүүрэг, эсвэл зип код</h6>
										<div class="uk-margin uk-margin-remove-top">
											<div class="uk-inline search-inline">
												<a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: location"></a>
												<input class="search-input uk-input" type="text" id="second" data-dependency="third">
											</div>
										</div>
									</div>

									<div class="third-section uk-margin-medium-top">
										<button type="submit" class="uk-button uk-button-primary btn">Aжил хайх</button>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
			</section>

			<footer class="footer-section uk-margin-medium-top">
				<div class="rec-jobs">
					<div class="uk-grid">
						<div class="uk-width-1-1 first-table">
							<ul class="uk-list border-top">
								<li onclick='window.location.href=""' class="nav-list uk-margin-remove-top">
									<div class="uk-padding-small uk-clearfix">
										<div class="uk-float-left">
											<h5><span class="uk-margin-small-right" uk-icon="settings"></span>Санал Болгож Буй Ажил</h5>
										</div>
										<div class="uk-float-right">
											<span class="uk-margin-small-right" uk-icon="arrow-right"></span>
										</div>

									</div>
								</li>
								@auth
								@if(Auth::user()->type == 'student')
								
								<li onclick='window.location.href="/resume"' class="nav-list uk-margin-remove-top">
									<div class="uk-padding uk-padding-small uk-clearfix">
										<div class="uk-float-left">
											<h5><span class="uk-margin-small-right" uk-icon="nut"></span>Миний Анкет</h5>
										</div>
										<div class="uk-float-right">
											<span class="uk-margin-small-right" uk-icon="arrow-right"></span>
										</div>

									</div>
								</li>
								@endif
								@endauth
								<li onclick='window.location.href="/user"' class="nav-list uk-margin-remove-top">
									<div class="uk-padding uk-padding-small uk-clearfix">
										<div class="uk-float-left">
											@guest
											<a href="/login">
												<h5>
													<span class="uk-margin-small-right" uk-icon="user"></span>Нэвтрэх
												</h5>
											</a>
											@else
											<a href="/user">
												<h5>
													<span class="uk-margin-small-right" uk-icon="user"></span>
													{{ Auth::user()->email }}
												</h5>
											</a>
											@endguest
										</div>
										<div class="uk-float-right">
											<span class="uk-margin-small-right" uk-icon="arrow-right"></span>
										</div>
									</div>
								</li>
								
								<li onclick='window.location.href="/job"' class="nav-list uk-margin-remove-top">
									<div class="uk-padding uk-padding-small uk-clearfix post-link">
										<div class="uk-float-left">
											<a href="/job">
												<h5>
													<span class="uk-margin-small-right" uk-icon="bell"></span>Ажил Нийтлэх</h5>
											</a>
										</div>
										<div class="uk-float-right">
											<span class="uk-margin-small-right" uk-icon="arrow-right"></span>
										</div>

									</div>
								</li>
							</ul>

							<div class="footer-section uk-padding uk-padding-small">
								<h6>©2018 Ажилдаа - Бүх эрх хуулиар хамгаалагдсан</h6>
							</div>

						</div>
					</div>
				</div>
			</footer>
		</div>
	</main>
@endsection