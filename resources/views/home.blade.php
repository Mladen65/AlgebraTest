@extends('layouts.index')

@push('styles')
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
@endpush

@section('title', 'Laravel Blog')

@section('content')
<div class="top-right links">
                                        <!-- {!! '<a href="#">pero></a> !!}  na ovaj nacin isto mozemo ispisati kao i umjesto da pisemo echo i ispisat ce nam samo pero, bitni su usklicnici  -->
    <a href="{{ url('/') }}">Home</a>   <!-- {} zagrade zamjenjuju echo, na ovaj nacin odredujemo sto ce se ispisati bez da napisemo echo  -->
    <a href="{{ route('aboutUs') }}">About us</a>
</div>
 <div class="content">
    <div class="title m-b-md">
        Laravel Blog
    </div>
</div> 
@endsection