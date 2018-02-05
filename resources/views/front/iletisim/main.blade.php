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
    @include("front.hakkimizda.slider")
@endsection

@section("content")
    @include("front.hakkimizda.history")
    @include("front.hakkimizda.form")

    @include("front.hakkimizda.maps")

@endsection