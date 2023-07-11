@extends('./layouts/app')

@section('page-content')

    <div class="card">
    <!-- @if ($errors)
     @foreach ($errors->all() as $error)
        <div class="alert alert-info">{{ $error }}</div>
    @endforeach   
@endif -->

    <form action="/enregistrement" method="post" class="forme">
        @method('post')
        @csrf
       
    <p class="heading text-center ins">Inscription</p>
    <div class="inputContainer">
    <input type="text" class="inputField" id="username" name="nom" placeholder="Nom" value="{{old('nom')}}">
    </div>
    
<div class="inputContainer">
    
    <input type="text" class="inputField" id="password" name="prenom" placeholder="prenom" value="{{old('prenom')}}">
</div>
 
<div class="inputContainer">
<input type="email" class="inputField" name="email" placeholder="Email" value="{{old('email')}}">
</div>
<div class="inputContainer">
<input type="number" class="inputField" name="telephone" placeholder="Telephone" value="{{old('telephone')}}">
</div>
           
<button id="button" type="submit">Enregistrer</button>    
<a class="forgotLink" href="#">Mot de passe oublier?</a>
   
        <!-- <input type="text" class="form-control" name="nom" placeholder="Nom" value="{{old('nom')}}"></br>
        <input type="text" class="form-control" name="prenom" placeholder="Prenom" value="{{old('prenom')}}"></br>
        <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}"></br>
        <input type="number" class="form-control" name="telephone" placeholder="Telephone" value="{{old('telephone')}}"></br> -->
          
        @error('nom')
        <div class="text text-danger">
            {{ $message }}
        </div>
        @enderror
        @error('prenom')
        <div class="text text-danger">
            {{ $message }}
        </div>
        @enderror
        @error('email')
        <div class="text text-danger">
            {{ $message }}
        </div>
        @enderror
        @error('telephone')
        <div class="text text-danger">
            {{ $message }}
        </div>
        @enderror
        <!-- <button class="btn btn-success" type="submit">Enregistrer</button> -->
    </form>
    </div>

@endsection