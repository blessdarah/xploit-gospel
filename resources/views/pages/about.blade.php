@extends('layouts.app')

@section('content')
<div class="page-banner">
    <img src="{{ asset('images/sax.jpg') }}" alt="hero image" class="img-fluid page-banner-image">
    <h3 class="page-banner-title text-white">About us</h3>
</div>
<div class="container container--floated bg-white p-5 rounded-lg shadow">
    <span class="badge badge-primary">The what</span>
    <h3>What it all about?</h3>
    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit esse repellendus nulla eveniet, quis necessitatibus deleniti sed id laborum ratione quibusdam velit aperiam! Commodi porro excepturi itaque, mollitia repellendus provident.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga, eum aliquam fugit ratione illum voluptate suscipit repudiandae? Aut magni possimus assumenda earum voluptate libero quidem officia numquam, odio dolore natus.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni architecto laudantium aliquid molestiae quos quo, porro doloribus eveniet maiores cumque eligendi deserunt perferendis incidunt soluta fugiat ipsum tenetur dolore eaque?
    </p>
    <hr>

    <span class="badge badge-success">Mission</span>
    <h3>The sole purpose of XG?</h3>
    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit esse repellendus nulla eveniet, quis necessitatibus deleniti sed id laborum ratione quibusdam velit aperiam! Commodi porro excepturi itaque, mollitia repellendus provident.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga, eum aliquam fugit ratione illum voluptate suscipit repudiandae? Aut magni possimus assumenda earum voluptate libero quidem officia numquam, odio dolore natus.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni architecto laudantium aliquid molestiae quos quo, porro doloribus eveniet maiores cumque eligendi deserunt perferendis incidunt soluta fugiat ipsum tenetur dolore eaque?
    </p>
</div>
    
@endsection