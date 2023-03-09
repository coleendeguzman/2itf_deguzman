<?php 
extract($_POST);
if(isset($save))
{
	switch($case)
	{
		case 'Bi-Monthly':
		$annualSalary=$sr*24;
		break;
		
		case 'Monthly':
		$annualSalary=$sr*12;
		break;
	}

    $annualTax=0;
    $annualSalary;

        if ($annualSalary > 8000000) {
          $annualTax = 2410000 + ($annualSalary - 8000000) * 0.35;
        } else if ($annualSalary > 2000000) {
          $annualTax = 490000 + ($annualSalary - 2000000) * 0.32;
        } else if ($annualSalary > 800000) {
          $annualTax = 130000 + ($annualSalary - 800000) * 0.3;
        } else if ($annualSalary > 400000) {
          $annualTax = 30000 + ($annualSalary - 400000) * 0.25;
        } else if ($annualSalary > 250000) {
          $annualTax = ($annualSalary - 250000) * 0.2;
        }

    $monthlyTax = $annualTax / 12;
}

?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="calculatorcss.css">
      <title>The Tax Calculator</title>
    </head>

<body>
    <center>
    <h1 id="title">have you met Taxxy?</h1><br><br><br><br><br><br>
        <form method="post">
          <br>
            <h2>Taxxy: A Tax Calculator</h2>

            <label>Salary:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
              <input type="number" name="sr" value="<?php  echo @$sr;?>" placeholder="Enter Salary"/><br><br>
            
            <label>Type:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
              <input type="radio" id="Bi-monthly" name="case" value="Bi-Monthly"/>
            <label for="bi-monthly">Bi-Monthly</label>
          
            <input type="radio" id="Monthly" name="case" value="Monthly">
            <label for="Monthly">Monthly</label>
        
            <br><br>
            <button class="computebutton" name="save" value="Compute">Compute</button>
            <br><br>

            <label>Annual Salary:&nbsp</label>
                <input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$annualSalary;?>"/><br><br>
            
            <label>Est. Annual Tax:&nbsp</label>
				        <input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$annualTax;?>"/><br><br>

            <label>Est. Monthly Tax:&nbsp</label>
				        <input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$monthlyTax;?>"/><br><br>
   
        </form>
    
</body>
</html>