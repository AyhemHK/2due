<?php


$username = "";
$dbhost = "";
$dbpass = "";
$dbname = "";


try {
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $username, $dbpass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT name, board_column FROM board_items WHERE board_ID = 1");
  $stmt->execute();

/* Fetch all of the remaining rows in the result set */
print("Fetch all of the remaining rows in the result set:\n");
$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);



echo "connected successfully";
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}




$sql = "SELECT name, board_column FROM board_items WHERE board_ID = 1";
  $conn->exec($sql);




if(isset($_GET['add'])){
$name =  "clean room";

try {
$sql = "INSERT INTO board_items (board_id,name,board_column) VALUES ('1','$name','1') ";
// use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
}

if(isset($_GET['delete'])){
}

if(isset($_GET['delete'])){
	
}




?>

<!doctype html>
<html>
<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
<div class="flex container mx-auto shadow bg-white ">
<!-- to do column -->
	<div class="flex flex-col flex-shrink-0 w-64 bg-gray-200 border border-gray-300">
		<div class="flex items-center justify-between flex-shrink-0 h-10 px-2 border-b border-gray-300 bg-white">
			<span class="block text-sm font-medium">To do</span>
			<a href="?add=lol" class="flex items-center justify-center w-6 h-6">
				<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
				</svg>
			</a>
		</div>
<?php
foreach($result as $content){
	
		echo '<div class="flex items-center justify-between flex-shrink-0 h-10 px-2 border-b border-gray-300 bg-white">
			<span class="block text-sm font-small"> ' . $content[name] . ' </span>
			<div class="flex items-center justify-center">		
			<button>
				<svg class="w-5 h-5" fill="none"  viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
				</svg>				
			</button>
			</div>
		</div>';
}		
		?>
</div>

	<div class="flex flex-col flex-shrink-0 w-64 bg-gray-200 border border-gray-300">
<!-- to do column -->	
		<div class="flex items-center justify-between flex-shrink-0 h-10 px-2 border-b border-gray-300 bg-white">
			<span class="block text-sm font-medium">Doing</span>
			<button class="flex items-center justify-center w-6 h-6">
				<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
				</svg>
			</button>
		</div>
			<div class="flex items-center justify-between flex-shrink-0 h-10 px-2 border-b border-gray-300 bg-white">
			<span class="block text-sm font-small">Clean Face</span>
			<div class="flex items-center justify-center">		
			<button>
				<svg class="w-5 h-5" fill="none"  viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
				</svg>				
			</button>
			</div>
		</div>	
</div>

	<div class="flex flex-col flex-shrink-0 w-64 bg-gray-200 border border-gray-300">
<!-- to do column -->	
		<div class="flex items-center justify-between flex-shrink-0 h-10 px-2 border-b border-gray-300 bg-white">
			<span class="block text-sm font-medium">Done</span>
			<button class="flex items-center justify-center w-6 h-6">
				<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
				</svg>
			</button>
		</div>
			<div class="flex items-center justify-between flex-shrink-0 h-10 px-2 border-b border-gray-300 bg-white">
			<span class="block text-sm font-small">Clean Garage</span>
			<div class="flex items-center justify-center">		
			<button>
				<svg class="w-5 h-5" fill="none"  viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
				</svg>				
			</button>
			</div>
		</div>	
</div>


</div>


</body>
</html>