@extends('layout')

@section('title','register')  


@section('content')
<div class="container">

        @if (Session::has('success'))

        <div class="alert alert-success">
           <h1> {{ Session::get('success') }}</h1>
        </div>   
    @endif
    @if (Session::has('error'))

        <div class="alert alert-error">
         <h1>  {{ Session::get('error') }}</h1>
        </div>   
    @endif
   

        <form action={{ route('register') }} method="POST" class="form">
            @method('POST')
            @csrf()

            {{-- <h6 style="text-align: center font-size: 20px">Login</h6> --}}
           <div class="contain-input">    
           <input class="form-input" type="text" placeholder="saisir votre nom" name="name" value={{old('name')}}>
           @error("name")
             <li>{{$message}}</li>
           @enderror
           
           <input class="form-input" type="text" placeholder="saisir email" name="email" value={{old('email')}}>
            @error("email")
             <li>{{$message}}</li>
           @enderror

           <input class="form-input" type="password" placeholder="saisir votre mot de passe" name="password" value={{old('password')}}>
           @error("password")
             <li>{{$message}}</li>
           @enderror

           <input class="form-input" type="password" placeholder="confirmer votre mot de passe" name="password_confirmation" value={{old('password_confirmation')}}>
           @error("confirm-password")
             <li>{{$message}}</li>
           @enderror
          </div>  
          
          <button type="submit" class="btn-button">S'enregistrer</button>
          <a href={{route("login.view")}}>Vous avez déja un compte? Connectez-vous</a>
        </form> 
        

        
    </div>
@endsection