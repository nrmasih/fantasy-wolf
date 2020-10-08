									
										<div class="widget_shopping_cart_content">
											<div class="mini-cart-header">
												<h5 class="header-mini-cart-title">SHOPPING BAG</h5>
												<i class="mini-cart-close fa fa-times" aria-hidden="true"></i>
											</div>
										 @if(Session::has('cart'))
										 <div class="mini-cart-total total">
											<div class="mini-cart-title">{{ $langg->lang6 }}</div>
											<div class="mini-cart-price">
												<span class="widget_shopping_cart-amount"><span class="widget_shopping_cart-currencySymbol">
												{{ Session::has('cart') ? App\Models\Product::convertPrice(Session::get('cart')->totalPrice) : '0.00' }}
												</div>
										   </div>
										   <p class="shopping_cart-buttons">
												<a href="{{ route('front.checkout') }}" class="btn btn-success">{{ $langg->lang7 }}</a>
												<a class="btn btn-light" href="{{ route('front.cart') }}">
												{{ $langg->lang5 }}
												</a>
											</p>
												<!-- <div class="dropdown-cart-header">
													<span class="item-no">
														<span class="cart-quantity">
									                      {{ Session::has('cart') ? count(Session::get('cart')->items) : '0' }}
														</span> {{ $langg->lang4 }}
													</span>

													<a class="view-cart" href="{{ route('front.cart') }}">
													{{ $langg->lang5 }}
													</a>
												</div> -->
												<!-- End .dropdown-cart-header -->
												<ul class="dropdown-cart-products">
													@foreach(Session::get('cart')->items as $product)
														<li class="product cremove{{ $product['item']['id'].$product['size'].$product['color'].str_replace(str_split(' ,'),'',$product['values']) }}">
														<figure class="product-image-container">
																<a href="{{ route('front.product', $product['item']['slug']) }}" class="product-image">
																	<img src="{{ $product['item']['photo'] ? filter_var($product['item']['photo'], FILTER_VALIDATE_URL) ?$product['item']['photo']:asset('assets/images/products/'.$product['item']['photo']):asset('assets/images/noimage.png') }}" alt="product">
																</a>
															</figure>
															<div class="product-details">
																<div class="content">
																	<a href="{{ route('front.product',$product['item']['slug']) }}"><h4 class="product-title">{{mb_strlen($product['item']['name'],'utf-8') > 45 ? mb_substr($product['item']['name'],0,45,'utf-8').'...' : $product['item']['name']}}</h4></a>

																	<span class="cart-product-info">
																		<span class="cart-product-qty mb-2" id="cqt{{$product['item']['id'].$product['size'].$product['color'].str_replace(str_split(' ,'),'',$product['values'])}}">Qty: {{$product['qty']}}</span>
																		<span>{{ $product['item']['measure'] }}</span>
																		<!-- x  -->
																		<span id="prct{{$product['item']['id'].$product['size'].$product['color'].str_replace(str_split(' ,'),'',$product['values'])}}">{{ App\Models\Product::convertPrice($product['item']['price']) }}</span>
																	</span>
																</div>
																<div class="cart-remove" data-class="cremove{{ $product['item']['id'].$product['size'].$product['color'].str_replace(str_split(' ,'),'',$product['values']) }}" data-href="{{ route('product.cart.remove',$product['item']['id'].$product['size'].$product['color'].str_replace(str_split(' ,'),'',$product['values'])) }}" title="Remove Product">
																	<i class="icofont-close"></i>
																</div>
															</div><!-- End .product-details -->
														</li><!-- End .product -->
													@endforeach
												</ul><!-- End .cart-product -->

												<!-- <div class="dropdown-cart-total">
														<span>{{ $langg->lang6 }}</span>

														<span class="cart-total-price">
															<span class="cart-total">{{ Session::has('cart') ? App\Models\Product::convertPrice(Session::get('cart')->totalPrice) : '0.00' }}
															</span>
														</span>
												</div> -->
												<!-- End .dropdown-cart-total -->

												<!-- <div class="dropdown-cart-action">
														<a href="{{ route('front.checkout') }}" class="mybtn1">{{ $langg->lang7 }}</a>
												</div> -->
												<!-- End .dropdown-cart-total -->
										
									@else 
									<div class="mini-cart-empty-msg empty text-center">
									  <span class="mini-msg">{{ $langg->lang8 }}</span>
									</div>
								
									@endif
									</div>