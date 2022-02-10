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

                <div style="position:relative; top: 70px; right:-150px;">
                  <table >
                    <tr>

                      <th style="padding:30px;">Name</th>
                      <th style="padding:30px;">email</th>
                      <th style="padding:30px;">phone</th>
                      <th style="padding:30px;">date</th>
                      <th style="padding:30px;">time</th>
                      <th style="padding:30px;">Message</th>

                    </tr>



                    @foreach($data as $data)

                    <tr align="center">
                      <td>{{$data->name}}</td>
                      <td>{{$data->email}}</td>
                      <td>{{$data->phone}}</td>
                      <td>{{$data->date}}</td>
                      <td>{{$data->time}}</td>
                      <td>{{$data->message}}</td>


                    </tr>


                    @endforeach
                    



                  </table>


                </div>



          </div>

          
    		@include("admin.adminscript")

    
  </body>
</html>