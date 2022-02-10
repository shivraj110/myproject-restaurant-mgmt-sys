<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
        	@include("admin.admincss")

  </head>


        <style>



          
                  form{
                    position: absolute;
                    left: 50%;
                    top: 50%;
            transform: translate(-30%, -70%);
                background-color: black;
                max-width: 800px;
                max-height: 400px;
                margin: 2rem auto;
                border: 2px solid black;
                padding: 2rem;

               }  


               label{

                      font-size: large;
                      font-family: cursive;

                      align-items: center;

                      padding: 5px;
                  display: block;
                } 


                input{ 
                  align-items: center;

                  display: block;

                  width: 100%;
                }



                table{

            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-40%, 50%);
            border-collapse: collapse;
            width: 800px;
            height: 200px;
            border: 1px solid #bdc3c7;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);

                }


                th{

                    color: pink;

                    font-family: cursive;
                    font-size: large;
                    font-weight: bold;
            background-color: black;

          }



                 tr {
            transition: all .2s ease-in;
            cursor: pointer;
          }


          td {

            font-size: large;

            font-weight: bold;

            background-color: lightgoldenrodyellow;

            color: darkolivegreen;
            padding: 5px;
            text-align: center;
            border-bottom: 1px solid black;
          }





               tr:hover
          {
            background-color: lightgoldenrodyellow ;
            transform: scale(1.02);
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);


          }





























        </style>


























    <body>


          

    		@include("admin.navbar")

          <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">

            @csrf
                    <h1 style="color:deeppink">Add Chef Here</h1>
            
                  <div>
                    <label style="color: pink;">Name</label>
                    <input style="color:blueviolet;" type="text" name="name" required="" placeholder="Enter the name" >

                  </div>


                  <div>
                    <label style="color: pink;">Speciality</label>
                    <input style="color:blueviolet;" type="text" name="speciality" required="" placeholder="Enter the speciality" >

                  </div>


                   <div>
                    <label style="color: pink;">Image</label>
                    <input type="file"  name="image" required="">

                  </div>


                   <div>
                    <input class="btn btn-warning" style="color: darkgreen;" type="submit" value="Save">
                  </div>



          </form>
        
            

            <table >
              
              <tr>
                
                <th style="padding:30px;">Chef Name</th>
                <th style="padding:30px;">Speciality</th>
                <th style="padding:30px;">Image</th>
                <th style="padding:30px;">Action</th>
                <th style="padding:30px;">Action2</th>

              </tr>



              @foreach($data as $data)
              <tr align="center">
                
                <td>{{$data->name}}</td>

                <td>{{$data->speciality}}</td>

                <td><img height="100" width="100" src="/chefimage/{{$data->image}}"></td>

                <td><a style="color: green;" href="{{url('/updatechef', $data->id )}}">Update</a></td>


                <td><a style="color: darkred;" href="{{url('/deletechef', $data->id )}}">Delete</a></td>


              </tr>

              @endforeach

            </table>



          </div>

          
    		@include("admin.adminscript")

    
  </body>
</html>