<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
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




                table{
           
            border-collapse: collapse;
            width: 800px;
            
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
    		 <div class="container-scroller">

    		@include("admin.navbar")
    				<div align="center" style="position:relative; top: 60px; right: -150px">
    					
    					<form  action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">


    						@csrf
                        <h1 style="color:deeppink;">Add Food Here</h1>

    						<div>
    							<label  style="color: pink;">Title</label>
    							<input  style="color: blueviolet;" type="text" name="title" placeholder="Write the title" required >
    						</div>

    						<div >
    							<label  style="color: pink;">Price</label>
    							<input style="color: blueviolet;" type="num" name="price" placeholder="price" required>
    						</div>

    						
    						<div >
    							<label  style="color: pink;">Description</label>
    							<input style="color: blueviolet;" type="text" name="description" placeholder="Description" required>
    						</div>


    						<div>
    							<label  style="color: pink;">Image</label>
    							<input type="file" name="image" required>
    						</div>



    						<div>
    							
    							<input class="btn btn-warning"; style="color:green;" type="Submit" value="Save" >
    						</div>





    					</form>


    					<div>
    						<table style="position:relative; top: 60px;">
    							<tr >
    								<th style="padding: 30px">Food Name</th>

    								<th style="padding: 30px">Price</th>

    								<th style="padding: 30px">Description</th>

    								<th style="padding: 30px">Image</th>

    								<th style="padding: 30px">Action</th>

    								<th style="padding: 30px">Action2</th>


    							</tr>

    							@foreach($data as $data)

    							<tr align="center">
    								
    								<td>{{$data->title}}</td>

    								<td>{{$data->price}}</td>

    								<td>{{$data->description}}</td>

    								<td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>

    								<td><a style="color : red;" href="{{url('/deletemenu', $data->id)}}">Delete</a></td>

    								<td><a style="color : purple;" href="{{url('/updateview', $data->id)}}">Update</a></td>
    							</tr>

    							@endforeach


    						</table>



    					</div>




    				</div>
    		 </div>
    		@include("admin.adminscript")

    
  </body>
</html>