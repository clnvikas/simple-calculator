

@extends('layouts.app')

@section('content')
<html>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>simple calculator</b></div>

                <div class="card-body">

<?php      
  //print_r($data1);
  //exit;
    
     $a=$data1['first_integer'];
        $b=$data1['second_integer'];
      
 echo "<h2> the sum of $a and  $b is </h2> <h1>$re</h1>";
?>  
<h2>click on ok to return to menu </h2>
<a href="/calculator"><button type="submit" class="ok">ok</button></a>


                </div>
            </div>
        </div>
    </div>
</div>
</html>
@endsection