<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
        	@include("admin.admincss")

  </head>

  			<style>

  				body{
  					padding: 0 ;
  					margin: 0;
  					font-family: Vernada, Geneva, Tahoma, sans-serif;
  				}



  				table{
  					position: absolute;
  					left: 50%;
  					top: 50%;
  					transform: translate(-5%, -150%);
  					border-collapse: collapse;
  					width: 800px;
  					height: 200px;
  					border: 1px solid #bdc3c7;
  					box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);

  							}


  							th{
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


  				#header {
  					background-color: black;
  					;
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

    		<div style="position:relative; top: 60px; right: -150px">




    			<table >


    				<tr align="center"; id = "header", style="color:pink; font-size: 20px; font-family: cursive;">


    					<th >Name</th>
    					<th >Email</th>
    					<th >Action</th>


    				</tr>


    				@foreach($data as $data)
    				<tr align="center">



    					<td>{{$data->name}}</td>

    					<td>{{$data->email}}</td>

    					

    					@if($data->usertype=="0")
    					<td><a href="{{url('/deleteuser' ,$data->id)}}">Delete</a></td>

    					@else

    					<td><a>Not Allowed</a></td>


    					@endif

    				</tr>
    				@endforeach

    			</table>
    		</div>
	</div>
    		@include("admin.adminscript")

    
  </body>
</html>

</body>
</html>