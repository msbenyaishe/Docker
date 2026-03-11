<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<style>
    body { 
        font-family: 'Poppins', sans-serif; 
        padding: 50px; 
        background: #fff; 
        color: #121212; 
    }
    h2 { 
        font-size: 3rem; 
        font-weight: 600; 
        letter-spacing: -2px; 
        margin-bottom: 30px; 
    }
    .student-item { 
        padding: 15px 0; 
        border-bottom: 1px solid #eee; 
        font-size: 1.1rem; 
    }
    .email { color: #888; font-weight: 300; margin-left: 10px; }
    a { 
        display: inline-block; 
        margin-top: 30px; 
        color: #121212; 
        text-decoration: none; 
        border-bottom: 2px solid #121212; 
        padding-bottom: 4px; 
    }
    a:hover { color: #888; border-color: #888; }
</style>

<?php
require_once "Dataaccess.php";
$db = new DataAccess();
$students = $db->getStudents();

echo "<h2>Students List</h2>";

foreach($students as $s){
    echo "<div class='student-item'>" . 
            $s['name'] . "<span class='email'> — " . $s['email'] . "</span>" . 
         "</div>";
}

echo "<a href='p2.html'>Go to page 2 →</a>";
?>