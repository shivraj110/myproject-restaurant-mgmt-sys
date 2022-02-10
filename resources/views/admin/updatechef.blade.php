<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>

        <base href="/public">

        	@include("admin.admincss")

  </head>

        <style>
          
              form{
                background-color: black;
                max-width: 500px;
                margin: 2rem auto;
                border: 2px solid black;
                padding: 2rem;
               }   


                    label{
                      font-size: medium;
                      font-family: cursive;

                      padding: 5px;
                  display: block;
                }


                input{ align-items: center;

                  display: block;

                  width: 100%;
                }




























        </style>



















    <body>


          <div class="container-scroller">

    		@include("admin.navbar")

            <form action="{{url('/updatefoodchef', $data->id)}}" method="post" enctype="multipart/form-data">

              @csrf
              
              <div>
                
                <label style="color: pink;">Chef Name</label>
                <input style="color:midnightblue;" type="text" name="name" value="{{$data->name}}">
              
              </div>


              <div>
                
                <label style="color: pink;">Speciality</label>
                <input style="color:midnightblue;" type="text" name="speciality" value="{{$data->speciality}}">
              
              </div>


              <div>
                
                <label style="color: pink;">Old Image</label>
                <img height="300" width="300" src="/chefimage/{{$data->image}}">
              
              </div>


              <div>
                
                <label style="color: pink;">New Image</label>
                <input type="file" name="image">
              
              </div>


              <div>
                
                
                <input class="btn btn-warning" style="color:green;" type="submit" value="Update Chef" required="">
              
              </div>






            </form>

        

          </div>

          
    		@include("admin.adminscript")

    
  </body>
</html>