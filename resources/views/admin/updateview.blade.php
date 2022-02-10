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


        <div style="position:relative; top: 60px; right: -150px">
              
              <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">


             
                <div>
                  <label style="color: pink;">Title</label>
                  <input style="color: blueviolet;" type="text" name="title" value="{{$data->title}}"  required>
                </div>

                <div>
                  <label style="color: pink;">Price</label>
                  <input style="color: blueviolet;" type="num" name="price" value="{{$data->price}}"  required>
                </div>

                
                <div>
                  <label style="color: pink;">Description</label>
                  <input style="color: blueviolet;" type="text" name="description" value="{{$data->description}}"  required>
                </div>


                <div>
                  <label style="color: pink;">Old Image</label>
                  <img height="200" width="200" src="/foodimage/{{$data->image}}">
                </div>



                <div>
                  <label style="color: pink;"> New Image</label>
                  <input type="file" name="image" required>
                </div>




                <div>
                  
                  <input class="btn btn-warning" style="color:green;" type="Submit" value="Save" >
                </div>





              </form>


              <div>





          </div>

          
    		@include("admin.adminscript")

    
  </body>
</html>