@extends('index')

@section('content')


<!-------------------------------------------------------------------------------->
<div class="main">
    @foreach($producersArray as $value)
        <p>
            {{ $value['name'] }}
        </p>
    @endforeach
</div>
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection