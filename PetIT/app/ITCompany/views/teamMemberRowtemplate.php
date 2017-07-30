<?php 

foreach ($team->getTeamMembers() as $teamMember): ?>
    <tr>
        <td><?php echo $teamMember->getName();?></td>
        <td><?php echo $teamMember->getPosition();?></td>
        <td><?php echo $teamMember->getSalary();?></td>
    </tr>
<?php endforeach; ?>