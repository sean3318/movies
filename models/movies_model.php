<?php

$movieId = $_GET["movie"];

//Get Movie Details
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
 AND m.movie_id = $movieId
";


// Get Result
$result = mysqli_query($conn, $strSQL);

// Fetch Data
$movieBio = mysqli_fetch_all($result, MYSQLI_ASSOC);







//Get Cast Details
$strSQL = "SELECT
c.movie_id
, p.person_id
, p.first_name as first_name
, p.last_name as last_name
, c.character_nm
, r.role_nm as role

FROM 
cis282sp19movies.movies m
, cis282sp19movies.persons p
, cis282sp19movies.cast c
, cis282sp19movies.role r

WHERE

 c.role_id = r.role_id
AND c.person_id = p.person_id
AND m.movie_id = c.movie_id
AND m.movie_id =  $movieId

order by c.role_id
";


// Get Result
$result = mysqli_query($conn, $strSQL);

// Fetch Data
$movieCast = mysqli_fetch_all($result, MYSQLI_ASSOC);




















// Free Result
mysqli_free_result($result);

// Close Connection
mysqli_close($conn); 
 		


?>

