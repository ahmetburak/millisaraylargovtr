<?php
/**
 * Created by PhpStorm.
 * User: burakturan
 * Date: 19.01.2018
 * Time: 11:30
 */
?>
@extends('layouts.front1')

@section("slider")
    @include("front.ziyaretbilgileri.slider")
@endsection

@section("content")
    @include("front.ziyaretbilgileri.history")

    @include("front.ziyaretbilgileri.fiyatlar")



@endsection