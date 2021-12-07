<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="{{'/' == request()->path() ? 'active' : ''}}"><a href="{{url('/')}}">Home</a></li>
                    <li class="{{'shop' == request()->path() ? 'active' : ''}}"><a href="{{url('/shop')}}">Shop
                            page</a></li>
                    <li class="{{'single-product' == request()->path() ? 'active' : ''}}"><a
                            href="{{url('/single-product')}}">Single product</a></li>
                    <li class="{{'cart' == request()->path() ? 'active' : ''}}"><a href="{{url('/cart')}}">Cart</a></li>
                    <li class="{{'checkout' == request()->path() ? 'active' : ''}}"><a
                            href="{{url('/checkout')}}">Checkout</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Others</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->