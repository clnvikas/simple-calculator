@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>simple calculator</b></div>

                <div class="card-body">

            
 

<form method="post" action="{{url('/operation')}}">
  {{csrf_field()}}
  <div class="container">
    <h1>calculator </h1>

    <p><h2>Please enter the following fields and proceed...</h2></p>
    <br>
    <table>
        <tr>
        <td>
     <label for="enter your first integer"><b>first_integer</b></label>
  
     <input type="number" name="first_integer"  placeholder="enter your first integer  "required>
    </td>
      
  </tr>

  <tr>
        <td>
     <label for="enter your second integer"><b>second_integer</b></label>

       
     <input type="number" name="second_integer"  placeholder="enter second integer  " required>
    </td>
      
  </tr>
</div>
      
               <div>

  
  <tr><td>
    <br>
        <div class="container">
      <h4>please click on the operation to be performed..</h4>
      </div>
  <br>
<a href="/add"><button name="cal" value="add" type="submit" >add</button></a>
</td>  </tr>
  <tr>
<td>
<a href="/subtract"><button type="submit" name="cal" value="sub" >subtract</button></a>
</td>
  </tr>
  <tr><td>
<a href="/multiply"><button type="submit" name="cal" value="multiply" >multiply</button></a>
</td>  </tr>
  <tr>
<td>
<a href="/divide"><button type="submit" name="cal" value="divide" >divide</button></a>
</td></tr>


      </div>

   
   

</form>
  {{csrf_field()}}

</table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection