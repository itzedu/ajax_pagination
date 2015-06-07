<?php 
  echo "<ul>";
  for ($i= 1; $i <= ceil($total/10) ; $i++) { 
    echo "<li>" . $i . "</li>";
  }
  echo "</ul>";
?>

  <div id="table">
    <table>
      <thead>
        <tr>
          <td>leads_id</td>
          <td>first name</td>
          <td>last name</td>
          <td>registered datetime</td>
          <td>email</td>
        </tr>
      </thead>
      <tbody>
<?php 
        foreach ($leads as $lead)
        {
?>        
        <tr>
          <td><?= $lead['id']?></td>
          <td><?= $lead['first_name']?></td>
          <td><?= $lead['last_name']?></td>
          <td><?= $lead['created_at']?></td>
          <td><?= $lead['email']?></td>
        </tr>
<?php  
        }
?>        
      </tbody>
    </table>
  </div>