<?php 
	
	function fetchmultiple($flight_no, $flight_model, $price, $duration, $departure, $arrival, $date){
	$element = "
		<table class = 'table table-borderless' width='100%'>
	<thead>
    <tr>
      <!--<th scope='col'>#</th>-->
      <th scope='col'>Flight Number</th>
      <th scope='col'>Departure</th>
      <th scope='col'>Arrival</th>
      <th scope='col'>Duration</th>
      <th scope='col'>Price</th>
    </tr>
  </thead>
  <tbody>
  <tr><td> $flight_no </td><td> $departure </td><td> $arrival </td><td> $duration </td><td> $price ₹ </td>

   <td><form action = 'addpassenger.php' method = 'post'>
  <button class = 'btn btn-primary' type = 'submit'>Book Flight</button>
  <input name = 'flight_no' type ='hidden' value = '$flight_no'>
  <input name = 'date' type ='hidden' value = '$date'>
  </form>
  </td></tr>
  </tbody>

	</table>
	
	";
	return $element;
}
	
?>