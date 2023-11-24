@extends('layoutsuser.template')

@section('user')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shop Page</h1>
                    <nav class="d-flex align-items-center">
                        <a href="{{ route('home') }}">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">Shop</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="sidebar-categories">
                    <div class="head">Browse Categories</div>
                    <ul class="main-categories">
                        <li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false"
                                aria-controls="fruitsVegetable"><span class="lnr lnr-arrow-right"></span>Fruits and
                                Vegetables<span class="number">(53)</span></a>
                            <ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false"
                                aria-controls="fruitsVegetable">
                                <li class="main-nav-list child"><a href="#">Frozen Fish<span
                                            class="number">(13)</span></a></li>
                                <li class="main-nav-list child"><a href="#">Dried Fish<span
                                            class="number">(09)</span></a></li>
                                <li class="main-nav-list child"><a href="#">Fresh Fish<span
                                            class="number">(17)</span></a></li>
                                <li class="main-nav-list child"><a href="#">Meat Alternatives<span
                                            class="number">(01)</span></a></li>
                                <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false"
                                aria-controls="meatFish"><span class="lnr lnr-arrow-right"></span>Meat and Fish<span
                                    class="number">(53)</span></a>
                            <ul class="collapse" id="meatFish" data-toggle="collapse" aria-expanded="false"
                                aria-controls="meatFish">
                                <li class="main-nav-list child"><a href="#">Frozen Fish<span
                                            class="number">(13)</span></a></li>
                                <li class="main-nav-list child"><a href="#">Dried Fish<span
                                            class="number">(09)</span></a></li>
                                <li class="main-nav-list child"><a href="#">Fresh Fish<span
                                            class="number">(17)</span></a></li>
                                <li class="main-nav-list child"><a href="#">Meat Alternatives<span
                                            class="number">(01)</span></a></li>
                                <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="main-nav-list"><a href="#">Pest Control<span class="number">(24)</span></a></li>
                    </ul>
                </div>
                <div class="sidebar-filter mt-50">
                    <div class="top-filter-head">Product Filters</div>
                    <div class="common-filter">
                        <div class="head">Brands</div>
                        <form action="#">
                            <ul>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="apple"
                                        name="brand"><label for="apple">Apple<span>(29)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="asus"
                                        name="brand"><label for="asus">Asus<span>(29)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="gionee"
                                        name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="micromax"
                                        name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="samsung"
                                        name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
                            </ul>
                        </form>
                    </div>
                    <div class="common-filter">
                        <div class="head">Color</div>
                        <form action="#">
                            <ul>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="black"
                                        name="color"><label for="black">Black<span>(29)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather"
                                        name="color"><label for="balckleather">Black
                                        Leather<span>(29)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="blackred"
                                        name="color"><label for="blackred">Black
                                        with red<span>(19)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="gold"
                                        name="color"><label for="gold">Gold<span>(19)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey"
                                        name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
                            </ul>
                        </form>
                    </div>
                    <div class="common-filter">
                        <div class="head">Price</div>
                        <div class="price-range-area">
                            <div id="price-range"></div>
                            <div class="value-wrapper d-flex">
                                <div class="price">Price:</div>
                                <span>$</span>
                                <div id="lower-value"></div>
                                <div class="to">to</div>
                                <span>$</span>
                                <div id="upper-value"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7">
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <form action="{{ route('shop') }}" method="GET"
                        class="d-flex justify-content-between align-items-center">
                        <div class="sorting">
                            <select name="sorting_option">
                                <option value="1" {{ request('sorting_option') == 1 ? 'selected' : '' }}>A - Z
                                </option>
                                <option value="2" {{ request('sorting_option') == 2 ? 'selected' : '' }}>Z - A
                                </option>
                                <option value="3" {{ request('sorting_option') == 3 ? 'selected' : '' }}>Cheap -
                                    Expensive</option>
                                <option value="4" {{ request('sorting_option') == 4 ? 'selected' : '' }}>Expensive -
                                    Cheap</option>
                            </select>
                        </div>
                        <div class="sorting mr-auto">
                            <select name="items_per_page">
                                <option value="10" {{ request('items_per_page') == 10 ? 'selected' : '' }}>Show 10
                                </option>
                                <option value="25" {{ request('items_per_page') == 25 ? 'selected' : '' }}>Show 25
                                </option>
                                <option value="100" {{ request('items_per_page') == 100 ? 'selected' : '' }}>Show 50
                                </option>
                            </select>
                        </div>
                        <button class="btn btn-warning mx-2 mt-2" type="submit">Apply</button>
                    </form>
                </div>
                <!-- End Filter Bar -->
                <!-- Start Best Seller -->
                <section class="lattest-product-area pb-40 category-list">
                    <div class="row">
                        <!-- single product -->
                        @foreach ($items as $item)
                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <a href="{{ route('product.detail', $item->id) }}"><img class="img-fluid"
                                            src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                            style="width: 280px; height: 280px; object-fit: fill;">
                                    </a>
                                    <div class="product-details">
                                        <h6>{{ $item->name }}</h6>
                                        <div class="price">
                                            <h6>$ {{ $item->price }}</h6>
                                            <h6 class="l-through">
                                                @if ($item->discount !== null)
                                                    $ {{ $item->discount }}
                                                @else
                                                    {{ $item->discount }}
                                                @endif
                                            </h6>
                                        </div>
                                        <div class="prd-bottom">
                                            <a href="" class="social-info">
                                                <span class="ti-bag"></span>
                                                <p class="hover-text">Add To Bag</p>
                                            </a>
                                            <a href="{{ route('addWishlist', ['id' => $item->id]) }}"
                                                class="social-info">
                                                <span class="lnr lnr-heart"></span>
                                                <p class="hover-text">Wishlist</p>
                                            </a>
                                            <a href="{{ route('product.detail', $item->id) }}" class="social-info">
                                                <span class="lnr lnr-move"></span>
                                                <p class="hover-text">View More</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
                <!-- End Best Seller -->
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center mb-3">
                    <div class="pagination">
                        @if ($items->lastPage() > 1)
                            @if ($items->currentPage() > 1)
                                <a href="{{ $items->previousPageUrl() }}&{{ http_build_query(request()->except('page')) }}"
                                    class="prev-arrow">
                                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                                </a>
                            @endif

                            @for ($i = max(1, $items->currentPage() - 1); $i <= min($items->lastPage(), $items->currentPage() + 1); $i++)
                                <a href="{{ $items->url($i) }}&{{ http_build_query(request()->except('page')) }}"
                                    class="{{ $items->currentPage() == $i ? 'active' : '' }}">{{ $i }}</a>
                            @endfor

                            @if ($items->currentPage() < $items->lastPage())
                                <a href="{{ $items->nextPageUrl() }}&{{ http_build_query(request()->except('page')) }}"
                                    class="next-arrow">
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </a>
                            @endif
                        @elseif ($items->total() <= $items->perPage() && $items->total() > 0)
                            <!-- Tampilkan hanya satu halaman jika produk sudah tampil semua -->
                            <a href="{{ $items->url(1) }}&{{ http_build_query(request()->except('page')) }}"
                                class="active">1</a>
                        @else
                            <!-- Tampilkan teks jika tidak ada produk -->
                            <h5>Belum Ada Produk Yang Tersedia</h5>
                        @endif
                    </div>
                </div>
                <!-- End Filter Bar -->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
