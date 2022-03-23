@extends('frontend.layouts.master')
@section('title')
   {{ $post->title }}
@stop

@section('content')
          <!-- site-main -->
        <div id="main" class="site-main"> <!-- .featured-top -->
            <div class="featured-top">
                    
               
            	
                <!-- .post-thumbnail -->
                <div class="post-thumbnail" style="background-image:url({{asset('assets/uploads/posts/'.$post->image)}})">
                                          
                    <!-- .entry-header -->
                    <header class="entry-header">
                        
                        <!-- .entry-title -->
                        <h1 class="entry-title">   {{ $post->Category->category }}</h1>
                        
                    </header>
                    <!-- .entry-header -->
                    
                </div>
            	<!-- .post-thumbnail -->
                
            </div>
            <!-- .featured-top -->
            
			
			<div class="layout-fixed"> 
                <div id="primary" class="content-area">
            
                    <!-- site-content -->
                    <div id="content" class="site-content" role="main"> <!-- .hentry -->
                        <article class="hentry page">   
                            
                            <!-- .entry-content -->
                            <div class="entry-content">
                            	
                                <h4>{{ $post->title }}</h4>
                                <p>{{ $post->body }}</p>
                                
                                
                                
                            </div>
                            <!-- .entry-content -->
                            
                            
                        </article>
                        <!-- .hentry -->
                        
                            
                    </div>
                    <!-- site-content -->
            
                </div>
                <!-- primary -->    
            
            
            	
            
            
            </div>
            <!-- layout -->
        
        
        </div>
        <!-- site-main -->
                 
                    
@endsection