




@extends('layouts.app')

@section('content')

    <br>
    <div class="row">

        <div class="col-md-12 text-center">
            <a href="{{url('news')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">NEWS</a>
            <br>
            <br>
            <a href="{{url('contact')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">CONTACT</a>
        </div>
    </div>

@endsection