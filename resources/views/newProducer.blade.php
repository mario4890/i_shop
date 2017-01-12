@extends('index')

@section('content')


<!-------------------------------------------------------------------------------->
<div class="main">
    <center>
        <form action="" method="GET" id="mail">
            {{ csrf_field() }}
            <div style="padding-top: 20px;">
                <input type="text" name="name" placeholder="NAME" required class="form"> 
            </div>
            <div style="padding-top: 20px;">
                <input type="text" name="site_url" placeholder="SITE URL" required class="form"> 
            </div>
            <div style="padding-top: 20px;">
                <input type="text" name="logo_filename" placeholder="LOGO FILENAME" class="form"> 
            </div>
            <div style="padding-top: 20px;">
                <input type="submit" value="Send" name="send">
            </div>
        </form>
    </center>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection