@extends('main')

@section('content')
    @if ($errors->any())
        <div id="errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="GET" action="{{ route('request') }}" id="contactForm">
        @csrf
        <p>
            <label for="nameInput">Enter your name</label>
            <input type="text" id="nameInput" class="inputData" name="name">
        </p>
        <p>
            <label for="surnameInput">Enter your surname</label>
            <input type="text" id="surnameInput" class="inputData" name="surname">
        </p>
        <p>
            <label for="emailInput">Enter your email</label>
            <input type="email" id="emailInput" class="inputData" name="email">
        </p>
        <p>
            <label for="phoneNumInput">Enter your phone number</label>
            <input type="number" id="phoneNumInput" class="inputData" name="phoneNumber">
        </p>
        <p>
            <label for="ratingInput">Rate me</label>
            <input type="number" id="ratingInput" class="inputData" name="rating" min="0" max="10">
        </p>

        <textarea id="commentInput" class="inputData" name="comment" placeholder="Enter your comment"></textarea>

{{--        <p><input type="submit" id="subBut" value="Send"></p>--}}
        <input type="submit" id="subBut" value="Send">
    </form>
@endsection
