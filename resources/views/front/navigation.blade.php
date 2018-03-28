<div class="container myNav">
                <nav class="navbar navbar-default navDrop">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{url('/')}}">
                                <img src="{{url('/skins/front/img/logo.png')}}" alt="" class="img-responsive"/>
                             
                                
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav navbar-right  dropShop">
                                <li><a href="{{url('/')}}" class="text-uppercase">Naslovna</a></li>
                                <li><a href="{{url('about-us')}}" class="text-uppercase">O nama</a></li>
                                <li class="dropdown">
                                    <a href="{{url('/products')}}" class="dropdown-toggle text-uppercase" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        Proizvodi<span class="caret" style="color:#6cc513;"></span>
                                    </a>
                                    <ul class="dropdown-menu dropSpa">
                                        <li role="menuitem"><a href="{{url('/products')}}" tabindex="-1">Svi proizvodi</a></li>
                                        <li role="menuitem"><a href="{{url('/products/on-sale')}}" tabindex="-1">Sniženi proizvodi</a></li>

                                        @foreach(\App\Models\ProductCategory::all() as $productCategory)
                                        <li role="menuitem">
                                            <a href="{{url('/products/category/' . $productCategory->id)}}" tabindex="-1">
                                                {{$productCategory->title}}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="{{url('/treatments')}}" class="dropdown-toggle text-uppercase" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        Tretmani<span class="caret" style="color:#6cc513;"></span>
                                    </a>
                                    <ul class="dropdown-menu dropSpa">
                                      
                                        <li role="menuitem">
                                            <a href="" tabindex="-1">
                                                
                                            </a>
                                        </li>
                                     
                                    </ul>
                                </li>
                                
                                <li><a href="#" class="text-uppercase">Kontakt</a></li>
                                <li class="shopingCart"><a href="{{route('shopping-cart')}}"><span class="fa fa-shopping-cart"></span><span class="badge"> {{\App\Webshop\ShoppingCart::getCartFromSession()->itemsCount()}}</span></a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    
                                
                    </div><!-- /.container-fluid -->
                </nav>
            </div> 
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
               