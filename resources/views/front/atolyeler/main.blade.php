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
    @include("front.atolyeler.slider")
@endsection

@section("content")
    @include("front.atolyeler.history")
    @include("front.atolyeler.news")
    @include("front.atolyeler.gallery")

@endsection