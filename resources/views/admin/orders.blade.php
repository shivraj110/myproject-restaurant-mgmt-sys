<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
        	@include("admin.admincss")

  </head>






  <style>
    
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


        <div class="container">


        <h1 style="color:pink;">Customers Orders</h1>


        <form action="{{url('/search')}}" method="get" >

          @csrf
          

          <input type="text" name="search" style="color:black;">

          <input type="submit" name="Search" class="btn btn-success">




        </form>

        <table>
          

          <tr align="center" >

            
            <th style="padding:30px;">Name</th>
            <th style="padding:30px;">Phone</th>
            <th style="padding:30px;">Address</th>
            <th style="padding:30px;">Foodname</th>
            <th style="padding:30px;">Price(NRs)</th> 
            <th style="padding:30px;">Quantity</th>
            <th style="padding:30px;">Total Price(NRs)</th>
          
          
          </tr>




        @foreach($data as $data)

          <tr align="center" >

            <td>{{$data->name}}</td>

            <td>{{$data->phone}}</td>

            <td>{{$data->address}}</td>

            <td>{{$data->foodname}}</td>

            <td>{{$data->price}}</td>

            <td>{{$data->quantity}}</td>

            <td>{{$data->price * $data->quantity}}</td>

          </tr>

          @endforeach


        </table>

        </div>

          </div>

          
    		@include("admin.adminscript")

    
  </body>
</html>