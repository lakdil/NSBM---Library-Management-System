<?php
session_start();

// Protect page (cannot open without login)
if(!isset($_SESSION['username'])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Library Home</title>
    <link rel="stylesheet" href="style.css?v=2">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="home">
    
        <h2 class="welcome">Welcome <?php echo $_SESSION['username']; ?> 🎉</h2>
        
         <form class="max-w-md px-4 mx-auto mt-12">
    <div class="relative w-full">

        <!-- Search Icon 
        <svg xmlns="http://www.w3.org/2000/svg"
             class="absolute top-0 bottom-0 w-6 h-6 my-auto text-gray-400 right-4"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>

        
        <input
            type="text"
            placeholder="Search here"
            class="w-full py-3 pl-4 pr-12 text-gray-500 border rounded-md outline-none bg-gray-50 focus:bg-white focus:border-indigo-600"
        />-->
    </div>
</form>

<nav class="nav nav-pills flex-column flex-sm-row bg-light p-3">
  <a class="flex-sm-fill text-sm-center nav-link active" id="uu" aria-current="page" href="addbook.php">Add Book</a>&nbsp;&nbsp;
  <a class="flex-sm-fill text-sm-center nav-link active" id="uu" aria-current="page" href="search.php">Search Book</a>&nbsp;&nbsp;
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="addstudent.php">Add member</a>&nbsp;&nbsp;
   <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="calculatefine.php">Calculate the fine</a>&nbsp;&nbsp;
  <a class="flex-sm-fill text-sm-center nav-link" href="logout.php">Logout</a>
  
</nav>

<!-- Your Login Form Below -->
<form action="login.php" method="post" id="oo">

<img src="madolduwa.webp" alt="madolduwa"  class="images"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Madol Duwa<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;martin wickckramsinghe





</body>
</html>
