@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  @foreach($get_reas as $rea)
      <div class="published">
        <a href="http://wordpressagustina.localhost/portfolio_items/{{$rea->post_title}}/">
        {{$rea->post_title}}
        {!! wp_get_attachment_image($rea->image , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image" ) ) !!}
        </a>
      </div>
    @endforeach

      @foreach($get_jeux as $jeu)
      <a href="http://wordpressagustina.localhost/portfolio_items/{{$jeu->post_title}}/">
        {{$jeu->post_title}}
        {!! wp_get_attachment_image($jeu->image , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image" ) ) !!}
      </a>
    @endforeach

  {!! get_the_posts_navigation() !!}
@endsection