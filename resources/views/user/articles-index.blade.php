@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-10 col-xs-10">
            <div class="card">
                <div class="card-header">{{__('Dashboard')}}
                <div class="pull-right"><a href="{{route('user.tutorial')}}">{{__('Lihat Tutorial')}}</a></div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <router-view name="articlesAll"></router-view>
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection