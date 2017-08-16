@extends('layouts.master')


@section('style')
    <style>
        body {background:green; color:white;}
    </style>
@endsection


@section('content')
    <h1><?= isset($greeting) ? " {$greeting} " : ' Hello ';?> <?=$name;?></h1>

    {{--블레드 주석 안에서 {{ $name }}을(를) 출력합니다.--}}
    <h1>{{ $greeting or 'Hello'}} {{ $name or '' }}</h1>


    @if($itemCount = count($items))
        <p>{{ $itemCount }} 종류의 과일이 있습니다.</p>
    @else
        <p>엥~ 아무것도 없는데요!</p>
    @endif


    <ul>
        @forelse($items as $item)
            <li>{{ $item }}</li>
        @empty
            <li>엥~ 아무것도 없는데요!</li>
        @endforelse
    </ul>

    @include('partials.footer')
@endsection


@section('script')
    <script>
       alert("저는 자식 뷰의 'script' 세션입니다.");
    </script>
@endsection
