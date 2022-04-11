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

        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center">

                <table>
                    <tr style="background-color:grey">
                        <td style="padding:20px;">Customer Name</td>
                        <td style="padding:20px;">Email</td>
                        <td style="padding:20px;">Course Name</td>
                        <td style="padding:20px;">Price</td>
                        <td style="padding:20px;">Status</td>
                        <td style="padding:20px;">Action</td>
                    </tr>

                    @foreach($order as $orders)
                    <tr style="background-color:black;" align="center">

                        <td style="padding:20px;">{{$orders->name}}</td>
                        <td style="padding:20px;">{{$orders->email}}</td>
                        <td style="padding:20px;">{{$orders->course_name}}</td>
                        <td style="padding:20px;">{{$orders->price}}</td>
                        <td style="padding:20px;">{{$orders->status}}</td>
                        <td style="padding:20px;"><a class="btn btn-success" href="{{url('updateStatus',$orders->id)}}">Confirm Order</a></td>
                        

                    </tr>

                    @endforeach


                </table>

            </div>
        </div>
       
          <!-- partial -->
        
        @include('admin.script')
        
  </body>
</html>