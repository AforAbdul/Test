@extends('layout')
@section ('content')
<!DOCTYPE html>
<html>

<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 40%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-right: 16px
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}


input[type=reset] {
  width: 40%;
  background-color: #ff0000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=reset]:hover {
  background-color: #f83131;
}
</style>

<body>
<form action="/register" method="get">
<center>
<h1><i>Booking Details</i></h1>

 <label for="name">Name: </label>
  <input type="text" id="name" name="name"><br><br>

 <label for="starting">Starting Place:</label>
  <select name="starting" id="starting">

    
    <option value="karachi">karachi</option>
    <option value="Mandra">Mandra</option>
    <option value="Gwadar">Gwadar</option>
    <option value="Basima">Basima</option>
    <option value="Zhob valley">Zhob valley</option>
    <option value="Islamabad">Islamabad</option>
    <option value="Peshawar">Peshawar</option>
    <option value="Taxila">Taxila</option>
    <option value="kotri">kotri</option>
    <option value="Bhakkar">Bhakkar</option>
    <option value="Rohri">Rohri</option>
    <option value="Sukkur">Sukkur</option>
    <option value="Quetta">Quetta</option>
    <option value="Lahore">Lahore</option>
    <option value="jhelum">jhelum</option>
    <option value="Multan">Multan</option>

  </select><br><br>

 <label for="end">Ending Place:</label>
  <select name="end" id="end">

    <option value="karachi">karachi</option>
    <option value="Mandra">Mandra</option>
     <option value="Gwadar">Gwadar</option>
                        <option value="Basima">Basima</option>
                        <option value="Zhob valley">Zhob valley</option>
                        <option value="Islamabad">Islamabad</option>
                        <option value="Peshawar">Peshawar</option>
                        <option value="Taxila">Taxila</option>
                        <option value="kotri">kotri</option>
                        <option value="Bhakkar">Bhakkar</option>
                        <option value="Rohri">Rohri</option>
                        <option value="Sukkur">Sukkur</option>
                        <option value="Quetta">Quetta</option>
                        <option value="Lahore">Lahore</option>
                        <option value="jhelum">jhelum</option>
                        <option value="Multan">Multan</option>

  </select><br><br>

 <label for="Tr">Train Name: </label>
  <input type="text" id="Tr" name="Tr"><br><br>

 <label for="tkt">Number of Tickets: </label>
  <input type="number" id="tkt" name="tkt"><br><br>

 <label for="date">Date of Journey: </label>
  <input type="date" id="date" name="date"><br><br>

 <label for="price">Train Name: </label>
  <input type="text" id="price" name="price"><br><br>

  <input type="submit" value="Submit"> &nbsp;
  <input type="reset" value="Cancel" >
</center>
</form>
</body>



</html>

@stop