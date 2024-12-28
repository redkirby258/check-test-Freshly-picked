@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/details.css')}}">

@endsection

@section('content')
<div class="container">
    <div class="details__heading">
        <h2 class="details-title">商品一覧</h2>
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
        <div>
            <img src="" alt="">
            <div>
                <p></p>
                <p></p>
            </div>
        </div>
    </div>
</div>
@endsection