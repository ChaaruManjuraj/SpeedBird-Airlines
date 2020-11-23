<?php
	

	function displayflights ($flight_no, $price, $nooftickets, $bookingemail, $total) {

		$element = "<table class = 'table table-borderless' width='100%'>
	<thead>
    <tr>
      <!--<th scope='col'>#</th>-->
      <th scope='col'>Flight Number</th>
      <th scope='col'>Price</th>
      <th scope='col'>Number of Passengers</th>
      <th scope='col'>Booking E-mail</th>
      <th scope='col'>Price+GST(5%)</th>
    </tr>
  </thead>
  <tbody>
  <tr><td> $flight_no </td><td> $price </td><td> $nooftickets </td><td> $bookingemail </td><td> $total ₹ </td>

   <td><form action = 'Includes/cancelflight.inc.php' method = 'post'>
  <button class = 'btn btn-primary' type = 'submit'>Cancel This Booking!</button>
  <input name = 'flight_no' type ='hidden' value = '$flight_no'>
  <input name = 'bookingemail' type ='hidden' value = '$bookingemail'>
  </form>
  </td></tr>
  </tbody>

	</table>";


	return $element;

	}
 ?>