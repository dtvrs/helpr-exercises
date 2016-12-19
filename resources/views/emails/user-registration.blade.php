@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Welcome',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')

        <dl>
            <dt>Company:</dt>
            <dd>{{ $company }}</dd>
            <dt>E-mail/Username:</dt>
            <dd>{{ $username }}</dd>
            <dt>Password</dt>
            <dd>{{ $realPassword }}</dd>
        </dl>

    @include('beautymail::templates.sunny.contentEnd')

    @include('beautymail::templates.sunny.button', [
            'title' => 'Login Page',
            'link'  => route('login'),
    ])

@stop
