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
    @include("front.index.slider")
@endsection

@section("content")
    @include("front.index.actual")

    @include("front.index.announcement")

    @include("front.index.member")

    @include("front.index.store")
@endsection


