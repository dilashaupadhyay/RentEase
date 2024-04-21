@props(['property_detail'])
<div class="img-box-a">
  @php
  $counter=0;
  $image = explode('|',$property_detail->property_photo);
  foreach ($image as $item) {
     $counter+=1; 
  }
 @endphp
  @if ($counter==1)
 
      <img class="img-a img-fluid" src="{{ asset($property_detail->property_photo)}}" alt=""  style="max-height: 100%; width:100%"/>
  @endif
  @if ($counter!=1)

      <img class="img-a img-fluid" src="{{URL::to($image[0])}}" alt=""  style="max-height: 100%; width:100%"/>
 @endif
             
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="/admin/property/show/{{$property_detail->id}}">{{$property_detail->title}}
                   
                      <br /> {{ $property_detail->city}}</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | Rs {{$property_detail->price}}</span>
                  </div>
                  <a href="/admin/property/show/{{$property_detail->id}}" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a" >
                  <ul class="card-info d-flex justify-content-around" style="background-color: #2eca6a">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>{{$property_detail->total_area}}
                        {{-- <sup>2</sup> --}}
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                   
                  </ul>
                </div>
              </div>
            </div>

  <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
