<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    
    <title>CIS 282 | Movies List</title>


<?php 
 require('includes/config.php');
 $strSQL = "SELECT
 m.movie_id
 , p.person_id
 , m.title
 , p.first_name as first_name
 , p.last_name as last_name
 , m.year
 , m.release_date
 , m.description
 , m.duration
 , r.ratings_nm as rating
 , m.post_credit
 , m.gross_box_office as gate
 , l.language_nm as langauge
 , m.rt_rating as rotten_rating

 FROM 
 cis282sp19movies.movies m
 , cis282sp19movies.persons p
 , cis282sp19movies.ratings r
 , cis282sp19movies.language l



 WHERE
 m.director_id = p.person_id
 AND m.rating_id = r.ratings_id
 AND m.language_id = l.language_id

 ORDER BY m.movie_id
";


// Get Result
$result = mysqli_query($conn, $strSQL);

// Fetch Data
$movies = mysqli_fetch_all($result, MYSQLI_ASSOC);










// Free Result
mysqli_free_result($result);

// Close Connection
mysqli_close($conn); 
?>


</head>
<body>
   
<div class="container-fluid main-title">
    <div class="row">
        <div class="col">
            <h2>Movie List</h2>
        </div>
    </div>
</div>

<div class="container-fluid main-headers">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-3">Title</div>
        <div class="col-2">Release Date</div>
        <div class="col-2">Director</div>
        <div class="col-2">Ratings</div>
        <div class="col-2">Rotten Tomatoes</div>
    </div>
</div>

<?php foreach($movies as $row) { ?>
<div class="container-fluid list">
    <div class="row">
        <div class="col-1 text-center"><a href="movie.php?movie=<?php echo $row['movie_id']; ?>"><?php echo $row['movie_id']; ?></a></div>
        <div class="col-3"><a href="movie.php?movie=<?php echo $row['movie_id']; ?>"><?php echo $row['title']; ?></a></div>
        <div class="col-2"><?php echo $row['release_date']; ?></div>
        <div class="col-2"><a href="person.php?person=<?php echo $row['person_id']; ?>"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></a></div>
        <div class="col-2"><?php echo $row['rating']; ?></div>
        <div class="col-2"><?php echo $row['rotten_rating']; ?></div>
    </div>
</div>
<?php 
    }
?>
    














<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
</html> 