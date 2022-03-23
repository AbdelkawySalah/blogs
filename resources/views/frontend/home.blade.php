@extends('frontend.layouts.master')
@section('title')
   Blog
@stop

@section('content')
<article class="hentry page">
                            
                                
                            <!-- .entry-content -->
                            <div class="entry-content intro" data-animation="rotate-1">
                                
                                
                                
                                <!-- .profile-image -->
                                <div class="profile-image">
                                	{{-- <img alt="profile" src="{{asset('frontend/images/site/about-me-2.jpg')}}"/> --}}
                                </div>  
                                <!-- .profile-image -->
                                
                                
                                <h2><em>Hi.</em> I am Haley Duster</h2>
                                <h3>I am a <strong>blogger</strong> <strong>traveler</strong> <strong>writer</strong></h3>
                                
                                  <h5>Recent Posts</h5>
                                <!-- .link-boxes -->
                              @foreach($posts as $post)
                                <figure>
                                	<a href="{{ url('showdetails/'.$post->id) }}"><img src="{{asset('assets/uploads/posts/'.$post->image)}}" alt="About Me"></a>
                                    <figcaption class="wp-caption-text">{{ $post->title }}</figcaption>
                                </figure>        
                                  @endforeach
                                 
                                <!-- .link-boxes -->         
                                	
                                    
                             </div> 
                             <!-- .entry-content -->
                                
                                	
                                    
                         </article> 
                         <!-- .page -->
                                 
                                 
                                 
                                 
                       <!-- .home-title -->
                       <h3 class="widget-title home-title">LATEST FROM THE BLOG</h3>  
                         
                        
                       <!-- BLOG SIMPLE -->
                       <div class="blog-simple">
                           @foreach($Toppost as  $pos)
                            <!-- .hentry -->
                            <article class="hentry post has-post-thumbnail">
                                
                                <!-- .hentry-left -->
                                <div class="hentry-left">
                                    <div class="entry-date">
                                        <span class="month"> {{ \Carbon\Carbon::parse($pos->created_at)->format('M') }}</span>
                                       

                                        <span class="year">{{ \Carbon\Carbon::parse($pos->created_at)->format('Y') }}</span>
                                    </div>
                                     <div class="featured-image" style="background-image:url({{asset('assets/uploads/posts/'.$pos->image)}})"></div>
                                </div>
                                <!-- .hentry-left -->
                                
                                <!-- .hentry-middle -->
                                <div class="hentry-middle">
                                        
                                    <!-- .entry-title -->
                                    <h2 class="entry-title"><a href="{{ url('showdetails/'.$pos->id) }}">{{ $pos->title }}</a></h2>
                            
                                </div>
                                <!-- .hentry-middle -->
                                
                                
                            </article>
                            <!-- .hentry -->
                        @endforeach 
                          
                            
                       </div> 
                       <!-- BLOG SIMPLE -->
                      
                      
                      
                      <!-- .home-launch -->
                      <div class="home-launch">
                        <a class="button" href="{{ url('showallpost') }}">See All Posts</a>
                      </div> 
                      <!-- .home-launch -->

@endsection