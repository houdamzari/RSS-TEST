@extends('app')

@section('content')
    <div class="header">
       {{-- <h1><a href="{{ $permalink }}">{{ $title }}</a></h1> --}}
    </div>
    {{-- @foreach($items as $item)
         @foreach($dbs as $db)

         <div class="item">
            <h2><a href="{{ $item->get_permalink() }}"></a></h2>
                     {{--{{ $item->get_title() }}</a></h2>
                     <p>{{ $item->get_description() }}</p>
               <h4>{{ $db->title }}</h4>
            <div style="width: 300px;">{!! $db->content !!}</div>
        {{-- <p><small>Posted on {{ $db->date_posted }}</small></p>

        </div>
         @endforeach
 @endforeach
    --}}
@endsection
