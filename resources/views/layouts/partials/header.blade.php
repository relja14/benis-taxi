<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>

            </button> <a class="navbar-brand" href="#">Benis Taxi</a>

        </div>
        <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('price') ? 'active' : ''}}"><a href="/price">Price</a>
                </li>
                <li class="{{ Request::is('order') ? 'active' : ''}}"><a href="/order">Order</a>
                </li>
                <li class="{{ Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact</a>
                </li>
                <li class="{{ Request::is('faq') ? 'active' : ''}}"><a href="/faq">FAQ</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">En</a>
                </li>
                <li><a href="#">De</a>
                </li>
            </ul>
        </div>
    </div>
</nav>