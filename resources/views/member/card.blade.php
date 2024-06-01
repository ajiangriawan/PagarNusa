<!-- resources/views/member/card.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Member Card') }}</div>

                <div class="card-body text-center">
                    <img src="{{ route('member.card.download') }}" alt="Member Card" class="img-fluid">
                    <br><br>
                    <a href="{{ route('member.card.download') }}" class="btn btn-primary">{{ __('Download Member Card') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection