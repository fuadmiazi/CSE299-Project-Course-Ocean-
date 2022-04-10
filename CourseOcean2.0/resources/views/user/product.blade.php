
<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Courses</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>

              <form class="form-inline" style="float: right; padding:10px;" action="{{url('search')}}" method="get">

              @csrf

                <input class="form-control" type="search" name="search" placeholder="search">

                <input type="submit" value="Search" class="btn btn-warning">
              </form>


            </div>
          </div>

          @foreach($data as $course)

          
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="/productimage/{{$course->image}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{$course->title}}</h4></a>
                <h6>৳{{$course->price}}</h6>
                <p>{{$course->description}}</p>


                <form action="{{url('addToCart',$course->id)}}" method="POST">

                @csrf

                
                
                  <input class="btn btn-primary" type="submit" value="Add To Cart">
                </form>

                <!-- <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (32)</span> -->
              </div>
            </div>
          </div>

          @endforeach

          @if(method_exists($data,'links'))


          <div class="d-flex justify-content-center">

          {!! $data->links() !!}

          </div>

          @endif

        </div>
      </div>
    </div>