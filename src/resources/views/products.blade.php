@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css')}}">

@endsection

@section('content')
<div class="container">
    <div class="products__heading">
        <h2 class="products-title">商品一覧</h2>
        <a href="/products/register">+商品の追加</a>
    </div>
    <div class="">
        <form class="form">
        <div class="search-form">
            <div class="search-form__item">
                <input class="search-form__item-input" type="text" name="" > 
            </div>
            <div class="search-form__button">
                <button class="search-form__button-submit" type="submit">検索</button>
            </div>
        </div>
        <div class="sort-form">
            <h3>価格順で表示</h3>
            <input type="text">
        </div>
        </form>
    </div>
    <div class="products">
        <div class="products-inner">
            <div class="products-items">
                <img src="" alt="">
                <div class="products-item">
                    <p class="products-item__name"></p>
                    <p class="products-item__price"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection