@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('storage/img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>wishlist</h2>
                        <div class="breadcrumb__option">
                            <a href="./home">Halaman Awal</a>
                            <span>wishlist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="form-check">
                                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    </label></td>
                                    <td class="shoping__cart__item">
                                        <img src="{{asset('storage/img/cart/router.jpg')}}" alt="">
                                        <h5>Barang 1</h5>
                                    </td>
                                    
                                    <td class="shoping__cart__price">
                                        Rp.100.000
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_trash"></span>
                                    </td>
                                </tr>
                                <tr>
                                <td><div class="form-check">
                                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    </label></td>
                                    <td class="shoping__cart__item">
                                        <img src="{{asset('storage/img/cart/router.jpg')}}" alt="">
                                        <h5>Barang 2</h5>
                                        <td class="shoping__cart__price">
                                        Rp.100.000
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_trash"></span>
                                    </td>
                                </tr>
                                <tr>
                                <td><div class="form-check">
                                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    </label></td>
                                    <td class="shoping__cart__item">
                                        <img src="{{asset('storage/img/cart/router.jpg')}}" alt="">
                                        <h5>Barang 3</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        Rp.100.000
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_trash"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="./checkout" class="primary-btn cart-btn">Lanjutkan Belanja</a>
                        <a href="./shoping-cart" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Perbarui keranjang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

@endsection 