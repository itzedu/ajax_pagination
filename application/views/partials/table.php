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