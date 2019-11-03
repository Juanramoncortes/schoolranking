
@extends('layouts.app')

@section('content')

           
            <div class="flex-container" id="Universidades">
{{ }}
            </div>
            <script type="text/javascript">
                Universidades();
             </script>
             <div class="col-12 text-center"><a type="button" class="btn btn-secondary" href="{{asset('universidad/create')}}">Registrar Nueva Universidad</a></div>


@endsection