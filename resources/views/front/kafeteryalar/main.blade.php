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
    @include("front.kafeteryalar.slider")
@endsection

@section("content")
    @include("front.kafeteryalar.history")




    @include("front.kafeteryalar.maps")
@endsection