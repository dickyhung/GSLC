@extends('template')

@section('content')
    <div class= "bg-black" style="height: 500px">
        <div class="d-flex">
            @for ($i = 1; $i <= 5; $i++)   
            <div class="text-center text-white bg-primary rounded-5 m-2 pt-3" style="">
                <img src="{{$img}}" alt="" class="w-75 rounded-5">
                <h4>Ini adalah loop ke {{$i}}</h4>
                @if ($i != 5)
                    <h4>Yang akan dilanjutkan dengan {{$i+1}}</h4>
                @elseif ($i == 5)
                    <h4>Yang Merupakan loop terakhir</h4>
                @endif    
            </div>
        @endfor
        </div>
    </div>
    
@endsection