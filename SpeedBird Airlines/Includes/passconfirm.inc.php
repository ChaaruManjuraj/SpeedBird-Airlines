<?php 


	function onepass($passname, $passdob, $passgen, $passadd, $passproof, $passmobile, $passemail) {

		$element = "<table class='table table-borderless'>
  <thead>
    <tr>
    	
      <th scope='col'>Name</th>
      <th scope='col'>Date of Birth</th>
      <th scope='col'>Gender</th>
      <th scope='col'>Address</th>
      <th scope='col'>Address Proof</th>
      <th scope='col'>Mobile Number</th>
      <th scope='col'>e-mail</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td>$passname</td>
      <td>$passdob</td>
      <td>$passgen</td>
      <td>$passadd</td>
      <td>$passproof</td>
      <td>$passmobile</td>
      <td>$passemail</td>
    </tr>
  </tbody>
</table>";

return $element;
	
	}

	function twopass($passname21, $passdob21, $passgen21, $passadd21, $passproof21, $passmobile21, $passemail21, $passname22, $passdob22, $passgen22, $passadd22, $passproof22, $passmobile22, $passemail22) {

		$element = "<table class='table table-borderless'>
  <thead>
    <tr>
      <th scope='col'>Name</th>
      <th scope='col'>Date of Birth</th>
      <th scope='col'>Gender</th>
      <th scope='col'>Address</th>
      <th scope='col'>Address Proof</th>
      <th scope='col'>Mobile Number</th>
      <th scope='col'>e-mail</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>$passname21</td>
      <td>$passdob21</td>
      <td>$passgen21</td>
      <td>$passadd21</td>
      <td>$passproof21</td>
      <td>$passmobile21</td>
      <td>$passemail21</td>
    </tr>
    <tr>
      
     <td>$passname22</td>
      <td>$passdob22</td>
      <td>$passgen22</td>
      <td>$passadd22</td>
      <td>$passproof22</td>
      <td>$passmobile22</td>
      <td>$passemail22</td>
    </tr>
  </tbody>
</table>" ;

return $element;
	}

function threepass($passname31, $passdob31, $passgen31, $passadd31, $passproof31, $passmobile31, $passemail31, $passname32, $passdob32, $passgen32, $passadd32, $passproof32, $passmobile32, $passemail32, $passname33, $passdob33, $passgen33, $passadd33, $passproof33, $passmobile33, $passemail33) {

		$element = "<table class='table table-borderless'>
  <thead>
    <tr>
     <th scope='col'>Name</th>
      <th scope='col'>Date of Birth</th>
      <th scope='col'>Gender</th>
      <th scope='col'>Address</th>
      <th scope='col'>Address Proof</th>
      <th scope='col'>Mobile Number</th>
      <th scope='col'>e-mail</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>$passname31</td>
      <td>$passdob31</td>
      <td>$passgen31</td>
      <td>$passadd31</td>
      <td>$passproof31</td>
      <td>$passmobile31</td>
      <td>$passemail31</td>
    </tr>
    <tr>
      <td>$passname32</td>
      <td>$passdob32</td>
      <td>$passgen32</td>
      <td>$passadd32</td>
      <td>$passproof32</td>
      <td>$passmobile32</td>
      <td>$passemail32</td>
    </tr>
    <tr>
      <td>$passname33</td>
      <td>$passdob33</td>
      <td>$passgen33</td>
      <td>$passadd33</td>
      <td>$passproof33</td>
      <td>$passmobile33</td>
      <td>$passemail33</td>
    </tr>
  </tbody>
</table>";

return $element;
	}

?>