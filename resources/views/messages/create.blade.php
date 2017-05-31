@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
 <h1>メッセージ新規作成ページ</h1>
   
    @include('commons.error_messages')

    
    {!! Form::model($message, ['route' => 'messages.store']) !!}
        
        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}
       
        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection