@extends('layout')
@section ('content')
<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>
<center>
<h2>Ticket Reservation</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Starting Place</th>
    <th>Ending Place</th>
    <th>Date of Jounrney</th>
  </tr>
  <tr>
    <td>Moon</td>
    <td>gawadari</td>
    <td>quetta</td>
    <td>23-04-2021</td>
  </tr>
  <tr>
    <td>omer</td>
    <td>lahore</td>
    <td>multan</td>
    <td>20-08-2021</td>
  </tr>
  <tr>
    <td>Abdullah</td>
    <td>hyderabad</td>
    <td>jhelum</td>
    <td>10-10-2021</td>
  </tr>
  <tr>
    <td>areesha</td>
    <td>Bhakkar</td>
    <td>lahore</td>
    <td>03-01-2022</td>
  </tr>
  
</table>

</center>
</body>
</html>

@stop