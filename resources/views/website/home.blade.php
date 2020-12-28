@extends('layouts.test')
@section('content')
    <!-- ----------- Hero Section ------------- -->
    <section id="hero">
        <div class="hero-container">
            <div class="hero-logo">
                <div class="container">
                @if (Session('message'))
                    <div class="alert bg-success" role="alert">
                        <a href="#" class="close" data-dismiss="alert">×</a>
                        {{ Session('message') }}
                    </div>

                @endif</div>
                <h1 class="font-weight-bold">Take Away</h1>
            </div>
            <h2 class="font-weight-bold">Delicious Food for Foodies! </h2>
            <div class="actions">
                <a href="{{ route('all.category') }}" class="btn-get-started bg-warning">View Our Menu</a>
            </div>
        </div>

    </section>
    <!-- ----------- End Hero Section ------------- -->

    <section id="product">
        <div class="container" id="product-container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 heading-section text-center">
                    <h2 class="font-weight-bold text-color glow" style="color: #black; padding-top: 5px;">
                        Categories
                    </h2>
                </div>
            </div>
            <?php $category = DB::table('categories')
            ->where('status', 0)
            ->get(); ?>
            <div class="row">
                @foreach ($category as $item)
                    <div class="col-md-4 col-sm-6" id="boxshadow">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="{{ route('categroy_product', $item->category_id) }}">
                                    <img src="{{ asset('/images/' . $item->cat_image) }}" alt="" style=" background-position: center center;
                                                                background-size: cover;
                                                                background-repeat: no-repeat;
                                                                text-align: center;">
                                </a>

                            </div>
                            <div class="product-content">
                                <div class="">
                                    <a href="#"><i id="design-cart"></i></a>
                                    <a href="#"><i id="design-cart"></i></a>
                                </div>
                                <div style="margin-bottom:5px;">
                                    <a id="about-btn" class="btn btn-warning"
                                        href="{{ route('categroy_product', $item->category_id) }}">{{ $item->category_name }}</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach


            </div>
        </div>

        </div>


    </section>




    <!-- -------------Variety----------------------- -->
    <section id="variety" class="variety pt-4">

        <div class="container">
            <div class="section-title">
                <h2 style="color: #fdc134;" class="text-center font-weight-bold">
                    Recently Added Items
                </h2>



            </div>
            <div class="row">
                @foreach ($getData as $item)
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img style="height: 250px; width:290px;"
                                    src="{{ asset('/images/' . $item->product_image) }}" alt="">
                            </div>
                            <div class="card-body">

                                <div>
                                    <a class="card-design" href="{{ route('view.more', $item->product_id) }}">
                                        {{ $item->product_name }}</a>
                                </div>
                                <a href="{{ route('view.more', $item->product_id) }}"><button
                                        class="card-text btn btn-warning">add-to-cart</button></a>

                            </div>
                        </div>

                    </div>

                    <!--  -->
                @endforeach





            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a href="{{ route('all.product') }}" class="btn btn-prod d-block">
                        View all Products
                        <i class="fas fa-carrot"></i>
                    </a>
                </div>
            </div>
            <div class="contact-us ">
                <p style="font-size:20px; color:white; padding:25px; text-align:center;">If you would like to make an
                    enquiry
                    or have a
                    question, please get in touch with us, we are always happy to hear from you.</p>
                <div class="row justify-content-center pb-5">
                    <div class="col-md-7 heading-section text-center">
                        <a href="{{ route('contact-us') }}"><button class="btn btn-secondary">
                                Contect Us
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -------------End Variety----------------------- -->

    <!-- -----------------product section-------------------- -->

    <!-- -----------------End product section-------------------- -->
@endsection
