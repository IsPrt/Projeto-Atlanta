@extends('layouts.atlanta')
{{-- carrega o tema --}}

@section('title')
<title>Atlanta Souls®
</title>
@endsection

@section('textlogo')
<a href="../../demo13/dist/index.html">
    <img alt="Logo" src={{ asset ("atlanta/atlantatexto.png") }} class="h-25px logo" />
    <img alt="Logo" src={{ asset ("atlanta/atl.ico") }} class="h-50px logo-minimize" />
</a>
@endsection 