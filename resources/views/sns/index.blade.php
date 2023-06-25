
@extends('sns.layouts.base')

@section('css')
    @parent
    <link rel="stylesheet" href="/public/index.css">
@endsection
@section('title','index')

@section('content')

<div>
    <a href="/sns/login">login</a>
    <a href="/sns/signup">新規登録</a>
</div>
@endsection