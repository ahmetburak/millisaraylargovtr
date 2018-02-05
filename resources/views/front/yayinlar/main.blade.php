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
    @include("front.yayinlar.slider")
@endsection

@section("content")

    @include("front.yayinlar.news")

@endsection