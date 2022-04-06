<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style>
        .title{
            color:white; 
            padding-top:25px; 
            font-size:25px;
        }

        label{
            display: inline-block;
            width: 200px;
        }
    </style>


  </head>
  <body>
      @include('admin.sidebar')  
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">
        <h1 class="title">Add Course</h1>

        @if(session()->has('message'))

        <div class="alert alert-success">
        

            <button type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

        </div>

        @endif

        <form action="{{url('uploadCourse')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div style="padding:15px">
            <label for="">Course Title</label>
            <input style="color:black;" type="text" name="title" placeholder="Give a course title" required="">
        </div>


        <div style="padding:15px">
            <label for="">Price</label>
            <input style="color:black;" type="number" name="price" placeholder="Give a price" required="">
        </div>

        <div style="padding:15px">
            <label for="">Description</label>
            <input style="color:black;" type="text" name="description" placeholder="Give a description" required="">
        </div>

        <!-- <div style="padding:15px">
            <label for="">Course Title</label>
            <input type="text" name="title" placeholder="Give a course title" required="">
        </div> -->

        <div style="padding:15px">
            <input type="file" name="file">
        </div>

        <div style="padding:15px">
            <input class="btn btn-success" type="submit">
        </div>

        </form>


        </div>
       
        </div>
          <!-- partial -->
        
        @include('admin.script')
        
  </body>
</html>