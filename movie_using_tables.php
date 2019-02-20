<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    
    <title>CIS 282 | Movie</title>


<?php 
 require('includes/config.php');
 require('models/movies_model.php');
?>


</head>
<body>
   




    
        <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                <?php foreach($movieBio as $row) { ?>
                    <tr class="row">
                        <td class="col-7 offset-md-1">
                           <h2><?php echo $row['title']; ?> (<?php echo $row['year']; ?>)</h2>

                            <div class="row text-center">
                                <div class="col-4">Director: <a href="person.php?person=<?php echo $row['person_id']; ?>"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></a></div> |
                                <div class="col-1"><?php echo $row['rating']; ?></div> |
                                <div class="col-1"><?php echo $row['duration']; ?> mins</div> |
                                <div class="col-2"><?php echo $row['release_date']; ?> (<?php echo $row['langauge']; ?>)</div> 
                                
                            </div>                                                       
                        </td>
                        <td class="col-4"><h3><?php echo $row['rotten_rating']; ?></h3></td>

                    </tr>
                    
                    
                    
                    
                    
                    <tr class="row">
                        <td class="col-7 offset-md-1"><?php echo $row['description']; ?></td>  
                    </tr>
                <?php 
                    }
                ?>

                <?php foreach($movieCast as $row) { ?>
                    <tr class="row">
                        <td class="col-4 offset-md-1"><h4><a href="person.php?person=<?php echo $row['person_id']; ?>"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></a></h4></td>
                        <td class="col-4"><h4><?php echo $row['character_nm']; ?></h4></td>                     
                    </tr>
                    
                <?php 
                    }
                ?>
                            
                </tbody>
            
            </table> 
        </div>














<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
</html> 