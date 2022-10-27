@extends('isi')

@section('content')
    @for ($i = 1; $i <= 5; $i++)   
        <div class="text-center text-white bg-danger rounded-5" style="margin: 10px 30%">
            <h4>Ini adalah loop ke {{$i}}</h4>
            @if ($i != 5)
                <h4>Yang akan dilanjutkan dengan {{$i+1}}</h4>
            @elseif ($i == 5)
                <h4>Yang Merupakan loop terakhir</h4>
            @endif    
        </div>
    @endfor
@endsection