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
    @include("front.etkinlik.slider")
@endsection

@section("content")
    @include("front.etkinlik.history")

@endsection