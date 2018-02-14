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
    @include("front.kitap.slider")
@endsection

@section("content")
    @include("front.kitap.history")


@endsection