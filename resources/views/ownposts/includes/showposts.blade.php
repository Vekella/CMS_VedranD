<div class="container">
    <div class="col-md-12 col-lg-12 center">
        <article class="post vt-post">
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                    <div class="post-type post-img">
                        <a><img src='/{{$post->image}}' class="img-responsive" alt="image post" width="200"></a>
                    </div>
                    <div class="author-info author-info-2">
                        <ul class="list-inline">
                            
                            
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                    <div class="caption">
                        <h3 class="md-heading"><a href="own-posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <p>{{$post->description}}</p>
                         </div>
                </div>
            </div>
        </article>