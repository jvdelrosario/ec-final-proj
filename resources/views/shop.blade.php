@extends('template')

@section('title', 'Shop');

@section('content')
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <!-- strawberry -->
							<li data-filter="#Pies">Pies</li>
                            <li data-filter="#Tarts">Tarts</li>
                            <li data-filter="#Donuts">Donuts</li>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
				@foreach($categories as $cat)
				@if($cat->name == 'Pies')
				@foreach($products as $prod)
				@if($prod->category_id == 1)
				
					<div class="col-lg-4 col-md-6 text-center" id={{$cat["name"]}} >
				
					<div class="single-product-item">
						
						<div class="product-image">
							<a href="single-product.html"><img src="{{ asset('import/assets/user/img/products/pies/'.$prod["image"].'') }}" style="width:80%; height: 30vh" alt=""></a>
						</div>
						<h3>{{$prod["product_name"]}}</h3>
						<p class="product-price"><span>Per Kg</span> ${{$prod["price"]}} </p>
					
					<a href="{{ url('cart/'.$prod["id"].'') }}"  class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
					
				</div>
				
				@endif
				@endforeach
				@endif
				@if($cat->name == 'Tarts')
				@foreach($products as $prod)
				@if($prod->category_id == 2)
				<div class="col-lg-4 col-md-6 text-center" id={{$cat["name"]}} >
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{ asset('import/assets/user/img/products/tarts/'.$prod["image"].'')  }}" style="width:80%; height: 30vh " alt=""></a>
						</div>
						<h3>{{$prod["product_name"]}}</h3>
						<p class="product-price"><span>Per Kg</span> ${{$prod["price"]}} </p>
						<a href="{{ url('/cart') }}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				@endif
				@endforeach
				@endif
				@if($cat->name == 'Donuts')
				@foreach($products as $prod)
				@if($prod->category_id == 3)
				<div class="col-lg-4 col-md-6 text-center" id={{$cat["name"]}} >
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{ asset('import/assets/user/img/products/donuts/'.$prod["image"].'')  }}" style="width:80%; height: 30vh" alt=""></a>
						</div>
						<h5>{{$prod["product_name"]}}</h5>
						<p class="product-price"><span>Per Kg</span> ${{$prod["price"]}} </p>
						<a href="{{ url('/cart') }}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				@endif
				@endforeach
				@endif
				@endforeach
			<!-- <div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<!-- end products -->

@endsection