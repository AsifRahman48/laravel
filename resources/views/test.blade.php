<h1>Index</h1>
<a href="about">About</a>
<a href="home">Home</a>
<a href="form">Admin</a>
<a href="header">Header</a>
<br/>

{{--{{$name}}--}}

@foreach($data as $key=>$val)
<br/><br/>{{$key}} <br/>
{{$val}}<br/>
@if($val=='asif')
{{'yes'}}
@else
{{'No'}}
@endif
@endforeach

<?php
//echo $userid
?>
