<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine Table</title>
    
</head>
<style>
  
table {
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 20px;
  }
  
  th, td {
    text-align: left;
    padding: 8px;
    border: 1px solid #ddd;
    font-family: sans-serif;
    font-weight: 700;
    color: rgb(83, 79, 79);
  }
  
  th {
    background-color: #f2f2f2;
    font-family: sans-serif;
    font-weight: 700;
    color: rgb(35, 33, 33);
  }
  
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  
  input[type="radio"] {
    margin-right: 10px;
  }
  /* heading */
  .heading {
    display: flex;
    justify-content: center;
    text-align: center;
    align-items: center;
}
.heading h1{
    color: #9b59b6;
    font-family: sans-serif;
    border-bottom: 2px solid black;
}
/* check box */
/* Style the checkbox */
input[type="checkbox"] {
  width: 20px;
  height: 20px;
  margin-right: 10px;
  border: 2px solid #999;
  border-radius: 4px;
}
/* Style the checkbox when it's checked */
input[type="checkbox"]:checked {
  background-color: #007bff;
}
/* button */
button {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  font-weight: 700;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
}
button:hover {
  background-color: #0062cc;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}
/* p tag */
p{
  font-family: sans-serif;
  font-weight: 600; 
  font-size: 16px;
  line-height: 1.5;
  color: #333;
  margin-bottom: 20px;
}
</style>

<body>
    <div class="heading">
        <h1> IMMUNISATION RECORD</h1>
        
    </div>
    <p>Child Name : <?php echo $child[0]->child_name?></p>
    <p>Father Name : <?php echo $child[0]->father_name?></p>
    <p>Mother Name : <?php echo $child[0]->mother_name?></p>
        <table>
            <tr>
              <th></th>
              <th>Birth</th>
              <th style="text-align: center;">1<br> MONTH</th>
              <th style="text-align: center;">2<br> MONTHS</th>
              <th style="text-align: center;">4<br> MONTHS</th>
              <th style="text-align: center;">6<br> MONTHS</th>
            </tr>
            <tr>
              <td>HepatitisB</td>
              <?php if($child[0]->HepB):?>
              <td><input type="checkbox" checked name="HepB" value="Yes">HepB</td>
              <?php else:?>
                <td><input type="checkbox" name="HepB" value="Yes">HepB</td>
              <?php endif;?>
              <?php if($child[0]->HepB1):?>
              <td><input type="checkbox" checked name="HepB1" value="Yes">HepB<sup>1</sup</td>
              <?php else:?>
                <td><input type="checkbox" name="HepB1" value="Yes">HepB<sup>1</sup</td>
              <?php endif;?>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
                <td>Rotavirus</td>
              
              <td></td>
              <td></td>


              <?php if($child[0]->RV):?>
              <td><input type="checkbox" checked name="RV" value="Yes">RV</td>
              <?php else:?>
                <td><input type="checkbox" name="RV" value="Yes">RV</td>
              <?php endif;?>


              <?php if($child[0]->RV2):?>
              <td><input type="checkbox" checked name="RV2" value="Yes">RV2</td>
              <?php else:?>
              <td><input type="checkbox" name="RV2" value="Yes">RV2</td>
              <?php endif;?>

              <?php if($child[0]->RV3):?>
              <td><input type="checkbox" checked name="RV3" value="Yes">RV3</td>
              <?php else:?>
                <td><input type="checkbox" name="RV3" value="Yes">RV3</td>
              <?php endif;?>
            </tr>
            <tr>
                <td> Diphtherla,Tetanus,Pertussis</td>
    
              <td></td>
              <td></td>
              <?php if($child[0]->DTap1):?>
              <td><input type="checkbox" checked name="DTap1" value="Yes">DTaP1</td>
              <?php else:?>
                <td><input type="checkbox" name="DTap1" value="Yes">DTaP1</td>
              <?php endif;?>

              <?php if($child[0]->DTap2):?>
              <td><input type="checkbox" checked name="DTap2" value="Yes">DTaP2</td>
              <?php else:?>
                <td><input type="checkbox" name="DTap2" value="Yes">DTaP2</td>
              <?php endif;?>

              <?php if($child[0]->DTap3):?>
              <td><input type="checkbox" checked name="DTap3" value="Yes">DTaP3</td>
              <?php else:?>
                <td><input type="checkbox" name="DTap3" value="Yes">DTaP3</td>
              <?php endif;?>


            </tr>
            <tr>
                <td>Haemophilus Influenza Typeb</td>
    
              <td></td>
              <td></td>
              <?php if($child[0]->Hib1):?>
              <td><input type="checkbox" checked name="Hib1" value="Yes">Hib1</td>
              <?php else:?>
              <td><input type="checkbox" name="Hib1" value="Yes">Hib1</td>
              <?php endif;?>

              <?php if($child[0]->Hib2):?>
              <td><input type="checkbox" checked name="Hib2" value="Yes">Hib2</td>
              <?php else:?>
              <td><input type="checkbox" name="Hib2" value="Yes">Hib1</td>
              <?php endif;?>

              <?php if($child[0]->Hib3):?>
              <td><input type="checkbox" checked name="Hib3" value="Yes">Hib3</td>
              <?php else:?>
              <td><input type="checkbox" name="Hib3" value="Yes">Hib3</td>
              <?php endif;?>

            </tr>
            <tr>
                <td>Pneumococal</td>
              <td></td>
              <td></td>

              <?php if($child[0]->PCV1):?>
              <td><input type="checkbox" checked name="PCV1" value="Yes">PCV1</td>
              <?php else:?>
              <td><input type="checkbox" name="PCV1" value="Yes">PCV1</td>
              <?php endif;?>

              <?php if($child[0]->PCV2):?>
              <td><input type="checkbox" checked name="PCV2" value="Yes">PCV2</td>
              <?php else:?>
              <td><input type="checkbox" name="PCV2" value="Yes">PCV2</td>
              <?php endif;?>

              <?php if($child[0]->PCV3):?>
              <td><input type="checkbox" checked name="PCV3" value="Yes">PCV3</td>
              <?php else:?>
              <td><input type="checkbox" name="PCV3" value="Yes">PCV3</td>
              <?php endif;?>
            </tr>
            <tr>
                <td>Inactivated Poliovirus</td>
    
              <td></td>
              <td></td>
              
              <?php if($child[0]->IPV1):?>
              <td><input type="checkbox" checked name="IPV1" value="Yes">IPV1</td>
              <?php else:?>
              <td><input type="checkbox" name="IPV1" value="Yes">IPV1</td>
              <?php endif;?>

              <?php if($child[0]->IPV2):?>
              <td><input type="checkbox" checked name="IPV2" value="Yes">IPV2</td>
              <?php else:?>
              <td><input type="checkbox" name="IPV2" value="Yes">IPV2</td>
              <?php endif;?>
              
              <?php if($child[0]->IPV3):?>
              <td><input type="checkbox" checked name="IPV3" value="Yes">IPV3</td>
              <?php else:?>
              <td><input type="checkbox" name="IPV3" value="Yes">IPV3</td>
              <?php endif;?>
            </tr>
            <tr>
                <td> Influenza(Flu)</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>

              <?php if($child[0]->Influenza):?>
              <td><input type="checkbox" checked name="Influenza" value="Yes">Influenza</td>
              <?php else:?>
              <td><input type="checkbox" name="Influenza" value="Yes">Influenza</td>
              <?php endif;?>
            
            </tr>
          </table>
</body>
</html>