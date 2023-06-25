@extends("sns.layouts.base")

@section("css")
<link rel="stylesheet" href="login.css">
@endsection

@section("title","login")

@section("content")

<div class="container">
    @csrf
    <form action="/sns/" id="loginform" method="POST">
    <label for="username">username</label>
    <input type="text" name="username" id="username"> 

    <label for="password">password</label>  
    <input type="text" name="password" id="password">
    <button type="submit">送信</button>
    </form>
</div>

@endsection