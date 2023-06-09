@extends('template')

@section('title', 'Cart');

@section('content')
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
	
								

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
								@foreach($products as $prod)
								<img href="single-product.html"  class="rounded mx-auto d-block"><img src="{{ asset('import/assets/user/img/products/pies/'.$prod->image.'') }}" style="width:50%; height: 30vh" alt=""></a>
								@endforeach	
								</tr>
							</thead>
							<tbody>
								<tr class="table-body-row">
								@foreach($products as $prod)
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="{{ asset('import/assets/user/img/products/product-img-1.jpg') }}" alt=""></td>
									<td class="product-name">{{$prod->product_name}}</td>
									<td class="product-price">${{$prod->price}}</td>
									<td class="product-quantity"><input type="number" placeholder="0"></td>
									<td class="product-total">1</td>
									@endforeach
								</tr>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="{{ asset('import/assets/user/img/products/product-img-2.jpg') }}" alt=""></td>
									<td class="product-name">Berry</td>
									<td class="product-price">$70</td>
									<td class="product-quantity"><input type="number" placeholder="0"></td>
									<td class="product-total">1</td>
								</tr>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="{{ asset('import/assets/user/img/products/product-img-3.jpg') }}" alt=""></td>
									<td class="product-name">Lemon</td>
									<td class="product-price">$35</td>
									<td class="product-quantity"><input type="number" placeholder="0"></td>
									<td class="product-total">1</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td>$500</td>
								</tr>
								<tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td>$45</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td>$545</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="cart.html" class="boxed-btn">Update Cart</a>
							<a href="checkout.html" class="boxed-btn black">Check Out</a>
						</div>
					</div>

					<div class="coupon-section">
						<h3>Apply Coupon</h3>
						<div class="coupon-form-wrap">
							<form action="index.html">
								<p><input type="text" placeholder="Coupon"></p>
								<p><input type="submit" value="Apply"></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="{{ asset('import/assets/user/img/company-logos/1.png') }}" alt="">
						</div>
						<div class="single-logo-item">
							<img src="{{ asset('import/assets/user/img/company-logos/2.png') }}" alt="">
						</div>
						<div class="single-logo-item">
							<img src="{{ asset('import/assets/user/img/company-logos/3.png') }}" alt="">
						</div>
						<div class="single-logo-item">
							<img src="{{ asset('import/assets/user/img/company-logos/4.png') }}" alt="">
						</div>
						<div class="single-logo-item">
							<img src="{{ asset('import/assets/user/img/company-logos/5.png') }}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

@endsection