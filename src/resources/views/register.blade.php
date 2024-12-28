@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('content')
    <div class="register-form">
        <h2 class="register-form__heading content__heading">商品登録</h2>
            <form action="" method="post">
            @csrf
                <div class="register-form__group">
                    <label class="register-form__label" for="name">
                        <span class="register-form__name">商品名
                        <span class="register-form__required">必須</span>
                    </label>
                    <input class="register-form__input" type="text" name="name" id="name" placeholder="商品名を入力">
                </div>

                <div class="register-form__group">
                    <label class="register-form__label" for="price">
                        <span class="register-form__price">値段
                        <span class="register-form__required">必須</span>
                    </label>
                    <input class="register-form__input" type="text" name="price" id="price" placeholder="値段を入力">
                </div>

                <div class="register-form__group">
                    <label class="register-form__label" for="price">
                        <span class="register-form__img">商品画像
                        <span class="register-form__required">必須</span>
                    </label>
                    <input class="register-form__img-input" type="file" name="img" id="img" >
                </div>

                <div class="register-form__group">
                    <label class="register-form__label" for="season">
                        <span class="register-form__season">季節
                        <span class="register-form__required">必須</span>
                    </label>
                    <div class="register-form__season-inputs">
                        <div class="register-form__season-option">
                            <label class="register-form__season-label">
                                <input class="register-form__season-input" name="season" type="radio" id="spring">
                                    <span class="register-form__season-text">春</span>
                             </label>
                        </div>
                        <div class="register-form__season-option">
                            <label class="register-form__season-label">
                                <input class="register-form__season-input" name="season" type="radio" id="summer">
                                    <span class="register-form__season-text">夏</span>
                             </label>
                        </div>
                        <div class="register-form__season-option">
                            <label class="register-form__season-label">
                                <input class="register-form__season-input" name="season" type="radio" id="auttmn">
                                    <span class="register-form__season-text">秋</span>
                             </label>
                        </div>
                        <div class="register-form__season-option">
                            <label class="register-form__season-label">
                                <input class="register-form__season-input" name="season" type="radio" id="winter">
                                    <span class="register-form__season-text">冬</span>
                             </label>
                        </div>
                    </div>
                </div>

                <div class="register-form__group">
                    <label class="register-form__label" for="content">
                        <span class="register-form__description">商品説明
                        <span class="register-form__required">必須</span>
                    </label>
                    <textarea class="register-form__textarea" name="description" id=""></textarea>
                </div>
                <input class="contact-form__btn btn" type="submit" value="登録">
            </form>
    </div>
@endsection