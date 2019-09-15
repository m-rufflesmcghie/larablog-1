<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach ($blogposts as $post)
                <div class="post-preview">
                    <a href="{{ $post->url($tag) }}">
                        <h2 class="post-title">
                            {!! $post->title !!}
                        </h2>
                       
 @if ($post->tags->count())
                        <div class="tags-area">
                            <small class="text-muted">
                                {!! trans('larablog.blogroll.tags') !!}
                            </small>
                            <span class="badge badge-light badge-pill">
                                {!! join('</span> <span class="badge badge-light badge-pill">', $post->tagLinks()) !!}
                            </span>
                        </div>
                    @endif
                        
                        <h3 class="post-subtitle">
                            {!! $post->subtitle !!}
                        </h3>
                    </a>
                    
                    <span class="post-meta">
                        {!! trans('larablog.blogroll.postedBy', ['url' => url('/author/' . $post->author), 'author' => $post->author, 'date' => $post->published_at->format('F j, Y')]) !!}
                    </span>
                    
                    
                    <div>
                            <a href="#" class="badge badge-pill badge-primary">
                            
  
                                {!! trans('larablog.blogroll.comment') !!}
                            <span class="badge badge-light">4</span>
                            </a>
                                  <a href="#" class="badge badge-pill badge-danger">
                            
  
                                {!! trans('larablog.blogroll.likes') !!}
                            <span class="badge badge-light">4</span>
                            </a>
                            
                        </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</div>
