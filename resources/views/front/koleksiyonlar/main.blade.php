<?php
/**
 * Created by PhpStorm.
 * User: burakturan
 * Date: 19.01.2018
 * Time: 11:30
 */
?>
@extends('layouts.front2')

@section("slider")
    @include("front.koleksiyonlar.slider")
@endsection

@section("content")
    @include("front.koleksiyonlar.history")
    @include("front.koleksiyonlar.news")
    @include("front.koleksiyonlar.gallery")
    @include("front.koleksiyonlar.hours")
@endsection