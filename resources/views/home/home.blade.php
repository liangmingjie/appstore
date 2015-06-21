@extends('app')

@section('content')
<head>
<link href="{{ asset('/css/home/home.css') }}" rel="stylesheet">
</head>
<div class="main">
	<div class="container">
		@include('home.home_left')
		<div class="main-con">
			<div class="slide" id="slide">
				<a href="#" class="slide-mod" style="display:block">
					<img alt="" src="http://file.market.xiaomi.com/download/AppStore/03f94b43518e241270f5baa1f7f20be4845345fa6">
				</a>
				<a class="slide-prev" href=""><i class="icon-btn-left"></i></a>
				<a class="slide-next" href=""><i class="icon-btn-right"></i></a>
			</div>
			<div class="applist-wrap">
				<div class="main-h">
					<h3>精品推荐</h3>
					<a class="more" href="#">查看更多</a>
				</div>
				<ul class="applist">
					<li>
						<a href="#">
							<img alt="" src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/f470c690-847d-4c93-ae51-edaee8fbc150">
						</a>
						<h5><a href="">唯品会</a></h5>
						<p class="app-desc">
							<a href="">时尚与购物</a>
						</p>
					</li>
					<li>
						<a href="#">
							<img alt="" src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/f470c690-847d-4c93-ae51-edaee8fbc150">
						</a>
						<h5><a href="">唯品会</a></h5>
						<p class="app-desc">
							<a href="">时尚与购物</a>
						</p>
					</li>
					<li>
						<a href="#">
							<img alt="" src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/f470c690-847d-4c93-ae51-edaee8fbc150">
						</a>
						<h5><a href="">唯品会</a></h5>
						<p class="app-desc">
							<a href="">时尚与购物</a>
						</p>
					</li>
					<li>
						<a href="#">
							<img alt="" src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/f470c690-847d-4c93-ae51-edaee8fbc150">
						</a>
						<h5><a href="">唯品会</a></h5>
						<p class="app-desc">
							<a href="">时尚与购物</a>
						</p>
					</li>
					<li>
						<a href="#">
							<img alt="" src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/f470c690-847d-4c93-ae51-edaee8fbc150">
						</a>
						<h5><a href="">唯品会</a></h5>
						<p class="app-desc">
							<a href="">时尚与购物</a>
						</p>
					</li>
					<li>
						<a href="#">
							<img alt="" src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/f470c690-847d-4c93-ae51-edaee8fbc150">
						</a>
						<h5><a href="">唯品会</a></h5>
						<p class="app-desc">
							<a href="">时尚与购物</a>
						</p>
					</li>
					<li>
						<a href="#">
							<img alt="" src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/f470c690-847d-4c93-ae51-edaee8fbc150">
						</a>
						<h5><a href="">唯品会</a></h5>
						<p class="app-desc">
							<a href="">时尚与购物</a>
						</p>
					</li>
					<li>
						<a href="#">
							<img alt="" src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/f470c690-847d-4c93-ae51-edaee8fbc150">
						</a>
						<h5><a href="">唯品会</a></h5>
						<p class="app-desc">
							<a href="">时尚与购物</a>
						</p>
					</li>
				</ul>
			</div>
			<div class="recomend-cen cf">
				<a href="#">
					<img alt="" src="http://file.market.xiaomi.com/download/AppStore/0553164c14d5f48641a5c6d2c536939c9a280df39">
				</a>
				<a href="#">
					<img alt="" src="http://file.market.xiaomi.com/download/AppStore/0553164c14d5f48641a5c6d2c536939c9a280df39">
				</a>
				<a href="#">
					<img alt="" src="http://file.market.xiaomi.com/download/AppStore/0553164c14d5f48641a5c6d2c536939c9a280df39">
				</a>
				<a href="#">
					<img alt="" src="http://file.market.xiaomi.com/download/AppStore/0553164c14d5f48641a5c6d2c536939c9a280df39">
				</a>
			</div>
			<div class="applist-wrap">
				<div class="main-h">
					<h3>热门应用</h3>
					<a class="more" href="#">查看更多</a>
				</div>
				<ul class="applist">
					<li>
						<a href="#">
							<img alt="" src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/f470c690-847d-4c93-ae51-edaee8fbc150">
						</a>
						<h5><a href="">唯品会</a></h5>
						<p class="app-desc">
							<a href="">时尚与购物</a>
						</p>
					</li>
					<li>
						<a href="#">
							<img alt="" src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/f470c690-847d-4c93-ae51-edaee8fbc150">
						</a>
						<h5><a href="">唯品会</a></h5>
						<p class="app-desc">
							<a href="">时尚与购物</a>
						</p>
					</li>
					<li>
						<a href="#">
							<img alt="" src="http://file.market.xiaomi.com/thumbnail/PNG/l62/AppStore/f470c690-847d-4c93-ae51-edaee8fbc150">
						</a>
						<h5><a href="">唯品会</a></h5>
						<p class="app-desc">
							<a href="">时尚与购物</a>
						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
@stop
