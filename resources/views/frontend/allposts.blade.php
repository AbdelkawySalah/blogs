@extends('frontend.layouts.master')
@section('title')
    allposts
@stop

@section('content')
         
          <div id="main" class="site-main">
<div class="layout-medium"> 
            <div id="primary" class="content-area">
             
            
            
            
             
        
        	

            
                    <!-- site-content -->
                    <div id="content" class="site-content" role="main">
                    
                                    
                        
                        
                        
                        
                        
                        <!-- entry-header -->
                        <!--<header class="entry-header">
                        	<h1 class="entry-title">Latest Stories</h1>
                        </header>-->
                        <!-- entry-header -->
                        
                        
                		
                        <!-- .media-grid-wrap -->
                        <div class="media-grid-wrap">
                        
                            <!-- BLOG MASONRY -->
                            <div class="masonry blog-masonry blog-stream blog-irregular " data-layout="masonry" data-mobile-item-width="220" data-item-width="420">       
                              @foreach($allposts as $post)
                                <!-- .hentry -->
                                <article class="hentry post has-post-thumbnail">
                                
                                    <!-- .featured-image -->
                                    <div class="featured-image">
                                        <a href="{{ url('showdetails/'.$post->id) }}"><img width="1440" height="960" src="{{asset('assets/uploads/posts/'.$post->image)}}" alt="blog-image"></a>
                                    </div>
                                    <!-- .featured-image -->
                                    
                                    
                                    <!-- .entry-header -->
                                    <header class="entry-header">
                                        
                                        <!-- .entry-title -->
                                        <h2 class="entry-title"><a href="{{ url('showdetails/'.$post->id) }}">{{ $post->title }}</a></h2>
                                        
                                        
                                        <!-- .entry-meta -->
                                        <div class="entry-meta">
                                            <span class="entry-date">
                                                <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">{{ $post->created_at }}</time>
                                            </span>    
                                        </div>
                                        <!-- .entry-meta -->
                                        
                                        
                                    </header>
                                    <!-- .entry-header -->
                                    
                                    <!-- .entry-content -->
                                    <div class="entry-content">
                                                                        
                                        <p>All I've got to do is pass as an ordinary human being. Simple. What could possibly go wrong? Stop talking, brain thinking. Hush. I hate yogurt. It's just stuff with bits in. I'm nobody's taxi..
                                            <span class="more">
                                                <a href="blog-single.html" class="more-link">Read More</a>
                                            </span>
                                        </p>
                                       
                                    </div>
                                    <!-- .entry-content -->
                                    
                                    
                                </article>
                                <!-- .hentry -->
                                  @endforeach
                           </div>
                           <!-- BLOG MASONRY -->
                        
                        
                        </div>    
						<!-- .media-grid-wrap -->
                        
                        
               
                    	
                            
                            
                            
                       
                        <!-- post pagination -->
                        
                        
                        
                        
                        
                            
                        
                        
                        
                        
                    </div>
                    <!-- site-content -->
            
            </div>
                <!-- primary -->    
            
            
            	
            
            
            </div>
            <!-- layout -->
        
        
        </div>
@endsection