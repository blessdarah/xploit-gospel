@extends('layouts.app')

@section('content')

<div class="page-banner">
    <img src="{{ asset('images/sax.jpg') }}" alt="hero image" class="img-fluid page-banner-image">
    <h3 class="page-banner-title text-white">Contact us</h3>
</div>
<div class="container container--floated bg-white p-5 rounded-lg shadow">
    <span class="badge badge-info">contact</span>
    <h3>Reach out to us</h3>
   <form action="{{ route('contact.store') }}" method="POST">
        @csrf
       <div class="form-group">
           <label for="firstname">First name</label>
           <input id="firstname" class="form-control" type="text" name="firstname">
       </div>
       <div class="form-group">
           <label for="lastname">Last name</label>
           <input id="lastname" class="form-control" type="text" name="lastname">
       </div>
       <div class="form-group">
           <label for="email">Email address</label>
           <input id="email" class="form-control" type="email" name="email">
       </div>
       <div class="form-group">
           <label for="message">Enter your message</label>
           <textarea id="message" class="form-control" name="message" rows="4"></textarea>
       </div>
       <button type="submit" class="btn btn-info">Send message <i class="fas fa-paper-plane"></i></button>
   </form>
</div>
 
@endsection