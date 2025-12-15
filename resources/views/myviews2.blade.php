@extends('template.default')
@section('content')
    <h1>this is myviews2</h1>
@endsection
@push('scripts')
    <h1>my views2 scripts</h1>
@endpush 
@push('scripts')
    <script>
        alert("welcome to js");
    </script>
@endpush