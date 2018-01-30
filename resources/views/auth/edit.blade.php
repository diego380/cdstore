@extends('layout')
@section('pagina_titulo', 'Editar:'.$user->name.' '.$user->last_name)

@section('pagina_conteudo')

<div class="container">
 <div class="row">
     <div class="col l10 offset-l1 s12 m12">
         <h4>Editar: {{ $user->name }} {{ $user->last_name }}</h4><br>
         <form method="POST" action="{{ url('/user/update/'.$user->id) }}">
             {{ csrf_field() }}
             {{ method_field('PUT') }}

             @include('auth._form_dados')
             @include('auth._form_email')

             <div class="row">
                <a href="{{ url('password/reset') }}">
                     Alterar senha?
                 </a>
             </div>
             <div class="row">
                 <button type="submit" class="btn orange waves-effect waves-light col l6 m6 s12">
                     Alterar
                 </button>
             </div>
         </form>
     </div>
 </div>
</div>
@endsection
