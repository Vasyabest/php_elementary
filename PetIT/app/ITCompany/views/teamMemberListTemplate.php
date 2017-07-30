<?php 
require_once 'header.php';

foreach ($teams as $team): ?>
    <div class="col-md-10">    
        <table class="table table-hover">
            <caption><?php $team->getTeamName()?></caption>
            <tr>
                <td>Name</td>
                <td>Position</td>
                <td>Salary</td>          
            </tr>
        
            <?php require 'teamMemberRowtemplate.php';?>
        </table>
    </div>  
<?php endforeach; ?>

<?php include_once 'footer.php';?>