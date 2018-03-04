@extends('layouts.app')

@section('content')
	<main id="barba-wrapper">
      <div class="barba-container" data-prev="/home" data-next="/result">
			<header class="header" uk-sticky="top: 0">
				<nav class="main-navbar uk-navbar-container" uk-navbar>
					<div class="uk-navbar-left">
						<ul class="uk-navbar-nav">
							<li class="uk-active">
								<a href="/home" class="prev">Ажил хайх</a>
							</li>
						</ul>

					</div>
				</nav>
			</header>

			<section class="body">
				<div class="uk-container uk-container-center">
					<div class="uk-grid-small uk-grid-match uk-text-center uk-margin-top" uk-grid>
						<div class="uk-width-1-1">
							<div class="head-section ">
								<img src="images/logo.png" class="uk-responsive-width logo" alt="" uk-responsive>
							</div>

							<div class="search-section uk-margin-top">
								<!-- <form action="/result" id="form"> -->
									<div class="first-search-section">
										<h6 class="uk-margin-small-bottom h6-title uk-margin-left uk-text-left">
											<strong>ЮУ</strong> ажлын нэр, үг, эсвэл компани</h6>
										<div class="uk-margin uk-margin-remove-top">
											<div class="uk-inline search-inline">
												<a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: search"></a>
												<input class="search-input uk-input" type="text" id="first" data-dependency="second">
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

										<a href="/result" class="uk-button uk-button-primary btn next" id="third">Aжил хайх</a>
									</div>
								<!-- </form> -->
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
								<li class="uk-padding uk-padding-small">
									<div class="uk-clearfix">
										<div class="uk-float-left">
											<a href="">
												<h5>
													<span class="uk-margin-small-right" uk-icon="settings"></span>Санал Болгож Буй Ажил</h5>
											</a>
										</div>
										<div class="uk-float-right">
											<span class="uk-margin-small-right" uk-icon="arrow-right"></span>
										</div>

									</div>
								</li>
								<li class="uk-padding uk-padding-small uk-padding-remove-top">
									<div class="uk-clearfix">
										<div class="uk-float-left">
											<a href="/viewjob">
												<h5>
													<span class="uk-margin-small-right" uk-icon="nut"></span>Миний Анкет</h5>
											</a>
										</div>
										<div class="uk-float-right">
											<span class="uk-margin-small-right" uk-icon="arrow-right"></span>
										</div>

									</div>
								</li>
								<li class="uk-padding uk-padding-small uk-padding-remove-top">
									<div class="uk-clearfix">
										<div class="uk-float-left">
											@guest
											<a href="/login">
												<h5>
													<span class="uk-margin-small-right" uk-icon="user"></span>Нэвтрэх
												</h5>
											</a>
											@else
											<a href="/profile">
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
								
								<li class="uk-padding uk-padding-small uk-padding-remove-top">
									<div class="uk-clearfix post-link">
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