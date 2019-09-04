<div class="row container-fluid">
        
        
            <!-- Fluid width widget -->        
          <div style="width: 100%;" class="card">
                <div class="card-title">
                  <h5>
                    <i class="fas fa-comment-dots"></i>  
                    Recent Comments
                  </h5>
                </div>
                <div class="card-body">
                    <ul>
                      @foreach($comments as $comment)
                        <li class="media">
                            <div class="mr-3">
                                <img src="http://placehold.it/60x60" class="img-circle">
                            </div>
                            <div class="media-body">
                                <div class="mt-0">
                                    <small>
                                      <a href="#">{{ $comment->user->email }}</a>
                                    
                                        commented on {{ $comment->created_at }}</a>
                                    </small>
                                </div>

                                <p>
                                   Comment: {{ $comment->body }}
                                   <br>
                                   Proof: {{ $comment->url }}
                                </p>
                                
                               <hr/> 
                            </div>
                        </li> 
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- End fluid width widget -->  
        </div>