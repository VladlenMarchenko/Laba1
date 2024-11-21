@extends('layouts.app')

@section('content')
    <h1>Контакты</h1>
    <p>Вы можете связаться с нами по следующим данным:</p>
    <ul>
        <li>Email: {{ $data['email'] }}</li>
        <li>Телефон: {{ $data['phone'] }}</li>
    </ul>
@endsection