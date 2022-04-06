<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
      @include('admin.sidebar')  
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
          <!-- partial -->

    <div style="padding-bottom:60px;" class="container-fluid page-body-wrapper">

        <div class="container" align="center">

        @if(session()->has('message'))

        <div class="alert alert-success">


        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('message')}}

        </div>

@endif

        <table>

        <tr style="background-color:grey;">
            <td style="padding:20px;">Title</td>
            <td style="padding:20px;">Description</td>
            <td style="padding:20px;">Price</td>
            <td style="padding:20px;">Image</td>
            <td style="padding:20px;">Update</td>
            <td style="padding:20px;">Delete</td>
        </tr>

        @foreach($data as $course)

        <tr align="center" style="background-color: black;">
            <td>{{$course->title}}</td>
            <td>{{$course->description}}</td>
            <td>{{$course->price}}</td>
            <td><img height="300" width="600" src="/productimage/{{$course->image}}" alt=""></td>

            <td>
                <a class="btn btn-primary" href="{{url('updateview',$course->id)}}">Update</a>
            </td>

            <td>
                <a class="btn btn-danger" href="{{url('deletecourse',$course->id)}}">Delete</a>
            </td>
        </tr>

        @endforeach




        </table>

        </div>
    </div>
        
        @include('admin.script')
        
  </body>
</html>