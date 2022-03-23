@extends('frontend.layouts.master')
@section('title')
{{ $category_name->category }}
@stop

@section('content')
         
                      <header class="entry-header">
                        <h1 class="entry-title"><i>Posts in</i> <span class="cat-title"> {{ $category_name->category }} </span></h1>
                        <!--<h1 class="entry-title"><i>Posts tagged</i> <span class="cat-title">typography</span></h1>-->
                        <!--<h1 class="entry-title"><i>Posts by</i> <span class="cat-title">Jeff Winger</span></h1>-->
                        <!--<h1 class="entry-title"><i>searched for :</i> <span class="cat-title">summertime</span></h1>-->
                        </header>
                        
                        
                        	<!-- BLOG LIST -->
                            <div class="blog-list blog-stream">
                                
                               @foreach($allpost as  $posts)
                                   
                                <article class="hentry post has-post-thumbnail">
                                
                                    <!-- .featured-image -->
                                    <div class="featured-image">
                                        <a href="blog-single.html"><img src="{{asset('assets/uploads/posts/'.$posts->image)}}" alt="blog-image"></a>
                                    </div>
                                    <!-- .featured-image -->
                                    
                                    
                                    
                                    <!-- .hentry-middle -->
                                    <div class="hentry-middle">
                                    
                                        <!-- .entry-header -->
                                        <header class="entry-header">
                                            
                                            <!-- .entry-meta -->
                                            <div class="entry-meta">
                                                <span class="cat-links">
                                                    <a href="#" title="View all posts in Adventure" rel="category tag">LIFE</a>
                                                </span>	
                                                <span class="entry-date">
                                                    <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">{{ $posts->created_at }}</time>
                                                </span>   
                                            </div>
                                            <!-- .entry-meta -->
                                            
                                            <!-- .entry-title -->
                                            <h2 class="entry-title"><a href="blog-single.html" title="Stop Worrying About How Pretty It is">{{ $posts->title }}</a></h2>
                                            
                                        </header>
                                        <!-- .entry-header -->
                                        
                                        <!-- .entry-content -->
                                        <div class="entry-content">
                                                                            
                                            <p>  {{  Str::limit($posts->body, 30) }}
                                              <br/>
                                                <span class="more">
                                                    <a href="{{ url('showdetails/'.$posts->id) }}" class="more-link">Read More</a>
                                                </span>
                                            </p>
                                           
                                        </div>
                                        <!-- .entry-content -->
                                    
                                    </div>
                                    <!-- .hentry-middle -->
                                    
                                    
                                </article>
                                <!-- .hentry -->
                             @endforeach 
                              
                            </div>
                            <!-- BLOG LIST -->
                        
                        
               
                            
                        
                        
                        
            		</div>
                 
                    
@endsection