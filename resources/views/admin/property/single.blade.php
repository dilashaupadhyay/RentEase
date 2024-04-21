<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Broker Free</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="images/logo.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/css/main.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/css/comment.css">
    {{-- flashmessage --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


</head>

<body>

  <div class="click-closed"></div>
  @include('components.admin_nav')

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">{{$property_detail->title}}</h1>
            <span class="color-text-a">{{$property_detail->city}}</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="/allproperty">Properties</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                {{$property_detail->title}}
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">

              @php
              $counter=0;
              $image = explode('|',$property_detail->property_photo);
              foreach ($image as $item) {
                 $counter+=1;
              }
             @endphp
              @if ($counter==1)
              <div class="carousel-item-b">
                  <img class="img-a img-fluid"  style="max-height: 600px;width:100%" src="{{ asset($property_detail->property_photo)}}" alt=""/>
              </div>
             @endif
              @if ($counter!=1)
              @foreach ($image as $item)
              <div class="carousel-item-b">

               <img class="img-a img-fluid" style="max-height: 600px;width:100%" src="{{ asset($item)}}" alt=""/>


            </div>
            @endforeach
            @endif

          </div>
          <div class="row justify-content-between" >
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="ion-money">Rs</span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c">{{ $property_detail->price}}</h5>
                  </div>
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Quick Summary</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>Property ID:</strong>
                      <span>{{ $property_detail->id}}</span>
                    </li>
                    <div class="d-flex justify-content-between">

                      <strong>Province:</strong><span>{{$property_detail->province }}</span>


                  </div>
                  <li class="d-flex justify-content-between">
                    <strong>Location:</strong>
                    <span>{{$property_detail->city }},{{$property_detail->area }}</span>
                    {{-- <span>Rent</span> --}}
                  </li>
                    <li class="d-flex justify-content-between">
                      <strong>Property Type:</strong>
                      <span>{{ $property_detail->type_of_property}}</span>
                      {{-- <span>Rent</span> --}}
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Category Of Property:</strong>
                      <span>{{ $property_detail->category_of_property}}</span>
                      {{-- <span>Rent</span> --}}
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Sale Type:</strong>
                      <span>{{ $property_detail->sale_type}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Area:</strong>
                      <span>{{ $property_detail->total_area}}
                        {{-- <sup>2</sup> --}}
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Kitchen:</strong>
                      <span>{{ $property_detail->kitchen ? $property_detail->kitchen : 0 }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Bath Room:</strong>
                      <span>{{ $property_detail->bath_room ? $property_detail->bath_room : 0 }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Living Room:</strong>
                      <span>{{ $property_detail->living_room ? $property_detail->living_room : 0 }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Bed Room:</strong>
                      <span>{{ $property_detail->bed_room  ? $property_detail->bed_room : 0 }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Parking</strong>
                      <span>{{ $property_detail->parking ? $property_detail->parking : 0 }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Floor:</strong>
                      <span>{{ $property_detail->total_floor ? $property_detail->total_floor : 0 }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Likes:</strong>
                      <span>
                        {{ $property_detail->likes}}
                    </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Comments:</strong>
                      <span>
                        {{ $property_detail->comments}}
                    </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>View:</strong>
                      <span>
                        {{ $property_detail->count}}
                    </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Property Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                  {{ $property_detail->description}}
                </p>

              </div>
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Amenities</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="list-a no-margin">
                  @php
                  $a=str_replace (array('[', ']','"'), '' ,$property_detail->amenities);
                  $amenities = explode(',',$a );
                  @endphp

                  @foreach($amenities as $ameniti)
                  <li style="white-space: nowrap;">{{$ameniti}}</li>
                @endforeach
                  {{-- <li>Outdoor Kitchen</li>
                  <li>Cable Tv</li>
                  <li>Deck</li>
                  <li>Tennis Courts</li>
                  <li>Internet</li>
                  <li>Parking</li>
                  <li>Sun Room</li>
                  <li>Concrete Flooring</li> --}}
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10 offset-md-1">
          <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">

            <li class="nav-item">
              <a class="nav-link active" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map"
                aria-selected="false">Location</a>
            </li>
          </ul>


              {{-- <button id='more' onclick="$('.details').slideToggle(function(){$('#more').html($('.details').is(':visible')?'Hide Map':'Show Map');});">Show Map</button> --}}
              <iframe width="100%" height="500" class="details" src="https://maps.google.com/maps?q={{$property_detail->latitude}},{{$property_detail->longitude}}&output=embed"{{-- style="display:none"--}}></iframe>

          </div>
        </div>
        @auth
        @if ($property_detail->user_id!=Auth::user()->id)
        <div class="col-md-12">
          <div class="row section-t3">
            <div class="col-sm-12">
              <div class="title-box-d">
                <h3 class="title-d">Contact Owner</h3>
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-md-6 col-lg-4">
              <div class="property-agent">
                @php
                $ownername=App\Models\User::where('id',$property_detail->user_id)->first();
                @endphp
                <h4 class="title-agent">{{$ownername->first_name}} {{$ownername->middle_name}} {{$ownername->last_name}}</h4>
                <a href="/chat/{{$property_detail->id}}">
                <button type="submit" class="btn btn-a" style="border-radius:5px;">Send Message Request</button>
              </a>
              </div>
            </div>
          </div>
        </div>
        @endif
        @endauth

      </div>
    </div>
  </section>
  <!--/ Property Single End /-->
  <div class="container-comment mb-5 mt-5">

    <div class="card">
       <div class="row">
           <div class="col-md-12">

            <h1>All Comments</h1>
            @foreach ($comments as $comment)
               <div class="row">
                   <div class="col-md-12">

                    @if ($comment->property_detail_id==$property_detail->id)
                       <div class="media">
                        @php
                        $user=App\Models\User::find($comment->user_id)->first();
                    @endphp
                        {{-- <img id="avatar" src="{{asset($user->avatar)}}" alt="Avatar" class="avatar"> --}}
                           <img class="mr-3 rounded-circle" alt="Bootstrap Media Preview" src="{{asset($user->avatar)}}" />
                           <div class="media-body">
                               <div class="row">
                                <div class="col-8 d-flex">
                                   <h5>{{$comment->name}}</h5>

                                   @php
                                      // Assuming $record is your database record
                                      $createdAt = \Carbon\Carbon::parse($comment->created_at);
                                      $timeElapsed = $createdAt->diffForHumans();
                                   @endphp
                                   <span>- {{$timeElapsed}}</span>
                                </div>

                                <div class="col-4">


                                  <div >
                                 <form method="POST" action="/comment/{{$comment->id}}">
                                     @csrf
                                     @method('DELETE')

                                     <button class="delete_cmt" >DELETE</button>
                                 </form>
                                </div>



                                </div>
                               </div>

                               {{$comment->comment}}<br>





                                <a class="reply_btn" href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}"><span><i class="fa fa-reply"></i> Reply</span></a>





                               @foreach ($replies as $reply)
                               @if ($reply->property_detail_id==$property_detail->id)

                                   @if ($reply->comment_id==$comment->id)
                               <div class="media mt-4">
                                @php
                                $user_r=App\Models\User::find($reply->user_id)->first();
                            @endphp
                                   <img class="rounded-circle" alt="Bootstrap Media Another Preview" src="{{asset($user_r->avatar)}}" />
                               <div class="media-body">

                                 <div class="row">
                              <div class="col-12 d-flex">
                                 <h5>{{$reply->name}}</h5>

                                 @php


                                 // Assuming $record is your database record
                                 $createdAt_r = \Carbon\Carbon::parse($reply->created_at);
                                 $timeElapsed_r = $createdAt_r->diffForHumans();
                              @endphp
                                 <span>- {{ $timeElapsed_r}}</span>
                                 <div class="col-4">

                                  <div >
                                 <form method="POST" action="/reply/{{$reply->id}}">
                                     @csrf
                                     @method('DELETE')

                                     <button class="delete_cmt" >DELETE</button>
                                 </form>
                                </div>


                                </div>
                              </div>


                             </div>

                             {{$reply->reply}}<br>
                             <a class="reply_btn" href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}"><span><i class="fa fa-reply"></i> Reply</span></a>

                               </div>

                             </div>

                       @endif
                       @endif

                       @endforeach

                       @endif

                      </div>
                   </div>
               </div>
           </div>
           @endforeach
       </div>
       </div>
   </div>
  </div>
  <style>
    /* Set box sizing to border-box for all elements */
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    /* Use a CSS reset to remove default margin and padding */
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    ol,
    ul {
      margin: 0;
      padding: 0;
    }

    /* Use a flexbox to center the comments and form vertically */
    .container-comment {
      display: flex;
      flex-direction: column;
      align-items: center;
      font-family: 'Source Sans Pro', sans-serif;
    }

    /* Use a CSS grid for the card layout */
    .card {
      width: 800px;
      display: grid;
      grid-template-columns: 1fr;
      grid-template-rows: auto auto 1fr;
      gap: 1rem;
      padding: 1rem;
      border: 1px solid #d2d2dc;
      border-radius: 11px;
      box-shadow: 0 0 5px #a0f4c0;
      background-color: #fff;
    }

    /* Add some margin to the comments */
    .card > .row {
      margin-top: 1rem;
    }

    /* Style the form and comment text area */
    form {
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 1rem;
      margin-bottom: 1rem;
    }

    .main-comment-text {
      width: 100%;
      min-height: 5rem;
      border-radius: 5px;
      padding: 0.5rem;
      font-size: 1rem;
      border: 1px solid #dfffeb;
      resize: vertical;
    }

    .cmt-btn {
      background-color: #2eca6a;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 0.5rem 1rem;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.2s;
    }

    .cmt-btn:hover {
      background-color: #2eca6a;
    }


    /* Style the comment and reply sections */
  .media {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
  }

  .media img {
    width: 4rem;
    height: 4rem;
    object-fit: cover;
    border-radius: 50%;
  }

  .media-body {
    width: 100%;
  }

  .media-body h5 {
    margin-bottom: 0.25rem;
    font-size: 1rem;
    font-weight: 600;
  }

  .media-body span {
    color: #999;
    font-size: 0.875rem;
  }

 .delete_cmt {
    background-color: transparent;
    color: #d22d2d;
    border: none;
    font-size: 0.875rem;
    font-weight: 600;
    cursor: pointer;
    transition: color 0.2s;
   border-radius: 10px;

    border: 1px solid #d22d2d;
  }

  .delete_cmt:hover {
    background-color: #d22d2d;
    color: #fff;
  }
  .reply_btns{
    border: 1px solid #2eca6a;
    color: #2eca6a;
   width: 55px;
   height: 40px;
   border-radius: 10px;
   font-weight: bold;
   background-color: transparent;
}
.reply_btns:hover{
  color: #fff;
  background-color: #2eca6a;
}
</style>




<div style="display: none;" class="replyDiv">
  <form action="{{url('add_reply')}}" method="POST">
      @csrf
      <input type="text" id="property_id" name="property_id" value="{{$property_detail->id}}" hidden>
  <input type="text" id="commentId" name="commentId" hidden>
  <textarea  name="reply" placeholder="write something here" required></textarea>
  <br>


  <input type="submit" class="reply_btns" value="Reply" class="btn btn-warning">
  <a href="javascript::void(0);" class="btn " onclick="reply_close(this)">Close</a>
  </form>
</div>
<script type="text/javascript">

    function reply(caller) {
        document.getElementById('commentId').value=$(caller).attr('data-Commentid')
        $('.replyDiv').insertAfter($(caller));
        $('.replyDiv').show();
    }
    function reply_close(caller) {

        $('.replyDiv').hide();
    }
    </script>

  <!--/ footer Star /-->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Broker Free</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Broker Free is a property rental web app that revolutionizes the rental experience by eliminating the need
                for brokers. With a user-friendly interface, it connects landlords directly with tenants, offering a hassle-free platform for renting properties without any middlemen, saving time and money.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Email .</span> contact@example.com</li>
                <li class="color-a">
                  <span class="color-text-a"> Phone.</span> +977 9864404745</li>
              </ul>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>

  @include('components.footer')

  <!--/ Footer End /-->

  <script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
</script>
  <!-- JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/popper/popper.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/scrollreveal/scrollreveal.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>
</html>
