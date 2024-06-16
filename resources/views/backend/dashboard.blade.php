@extends('backend/b-base')

@section('content')
    @include('backend/parts/b-salescard-part')

    @include('backend/parts/b-revenuecard-part')

    @include('backend/parts/b-customercard-part')

    @include('backend/parts/b-reports-part')
    @include('backend/parts/b-recentsales-part')

    @include('backend/parts/b-topselling-part')
@endsection
