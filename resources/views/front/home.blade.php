@extends('layout.main')

@section('content')
        <section class="hero text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong>
                    Hey! Welcome to Yummi pizza
                </strong>
            </h2>
            <br>
            <a href="{{url('/pizzas')}}">
            
            <button class="button large">Check order</button></a>
        </section>
        <br/>
        <div class="subheader text-center">
             <h2>
            order a pizza
        </h2>
        </div>
       
        <!-- Latest  -->
        <div class="row">
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{ asset('dist')}}/img/pizzas/pizza-1.png"/>
                        </a>
                    </div>
                    <a href="{{route('pizza')}}">
                        <h3>
                            Pizza1
                        </h3>
                    </a>
                    <h5>
                        $4
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                             <img src="{{ asset('dist')}}/img/pizzas/pizza-1.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Pizza2
                        </h3>
                    </a>
                    <h5>
                        $5
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                             <img src="{{ asset('dist')}}/img/pizzas/pizza-1.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Pizza3
                        </h3>
                    </a>
                    <h5>
                        $7
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                             <img src="{{ asset('dist')}}/img/pizzas/pizza-1.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Pizza4
                        </h3>
                    </a>
                    <h5>
                        $7,5
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div> </div>





 <div class="row">
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{ asset('dist')}}/img/pizzas/pizza-1.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Pizza1
                        </h3>
                    </a>
                    <h5>
                        $4
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                             <img src="{{ asset('dist')}}/img/pizzas/pizza-1.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Pizza2
                        </h3>
                    </a>
                    <h5>
                        $5
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                             <img src="{{ asset('dist')}}/img/pizzas/pizza-1.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Pizza3
                        </h3>
                    </a>
                    <h5>
                        $7
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                             <img src="{{ asset('dist')}}/img/pizzas/pizza-1.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Pizza4
                        </h3>
                    </a>
                    <h5>
                        $7,5
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>

            </div>
        </div>


        <!-- Footer -->
        <br>

@endsection