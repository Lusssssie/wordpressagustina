<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">

    {{$introduction}}
  
    {!! wp_get_attachment_image($image->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image" ) ) !!}

    {!! wp_get_attachment_image($image2->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image2" ) ) !!}

    {!! wp_get_attachment_image($image3->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image3" ) ) !!}

    {!! wp_get_attachment_image($image4->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image4" ) ) !!}

    {!! wp_get_attachment_image($image5->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image5" ) ) !!}

    {!! wp_get_attachment_image($image6->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ) !!}

    {!! wp_get_attachment_image($image7->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ) !!}

    {!! wp_get_attachment_image($image8->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ) !!}

    {!! wp_get_attachment_image($image9->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ) !!}

    {!! wp_get_attachment_image($image10->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ) !!}

    {!! wp_get_attachment_image($image11->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ) !!}

    {!! wp_get_attachment_image($image12->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ) !!}

    {!! wp_get_attachment_image($image13->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ) !!}

    {!! wp_get_attachment_image($image14->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ) !!}

    {!! wp_get_attachment_image($image15->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ) !!}

    {!! wp_get_attachment_image($image16->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ) !!}

    {!! wp_get_attachment_image($image17->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ) !!}

    {!! wp_get_attachment_image($image18->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ) !!}

    {!! wp_get_attachment_image($image19->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ) !!}

    {!! wp_get_attachment_image($image20->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ) !!}

    {{$description}}

    {{$description2}}

    {{$description3}}
    
    @php the_content() @endphp
  </div>
</article>
