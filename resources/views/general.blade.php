@extends('index')

@section('content')


<!-------------------------------------------------------------------------------->
<div class="main">

    @foreach($categoriesArray as $value)
        <p>
            {{ $value['name'] }} || {{ $value['site_url'] }}
        </p>
    @endforeach

</div>
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection