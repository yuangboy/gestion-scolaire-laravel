<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

    <style>

        
        body{
            background-color:'red' !important;
            height: 100%;
            width: 100%;
            padding: 0;
            margin: 0;           
        }

        .container{
            position: relative;
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .form{
            padding: 20px;
            background-color:#EEE;
            opacity: 0.8;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap:10px;
            border-radius: 10px;
            max-width: 350px;
            width: 100%;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
        }
        .btn-button{
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;

            width: 80%;
            border-radius: 5px;
            font-size: 16px;
        }

        .contain-input{
            
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap:10px;
             width: 100%;
           

        }

        .form-input{
            padding: 10px 20px;
            border-radius: 5px;
            border-color: #000;
            border: 1px solid #000;
            font-size: 16px;
            width: 80%;
        }

    </style>

<body>



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
        </form>   

        
    </div>


</body>
</html>