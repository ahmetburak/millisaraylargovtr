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
    @include("front.tarihisahsiyetler.slider")
@endsection

@section("content")
    @include("front.tarihisahsiyetler.history")
    @include("front.tarihisahsiyetler.news")
@endsection