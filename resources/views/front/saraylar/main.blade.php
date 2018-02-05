<?php
/**
 * Created by PhpStorm.
 * User: burakturan
 * Date: 19.01.2018
 * Time: 11:30
 */
?>
@extends('layouts.front')

@section("slider")
    @include("front.saraylar.slider")
@endsection

@section("content")
    @include("front.saraylar.history")
    @include("front.saraylar.news")
    @include("front.saraylar.gallery")



    @include("front.saraylar.hours")


    @include("front.saraylar.maps")
@endsection