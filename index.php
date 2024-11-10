<?php

require 'database.php';

$statement = $pdo->prepare('SELECT * FROM employees');

$statement->execute();

$employees = $statement->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Intro to SQL</title>
	<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
	<style>
	#customers {
		font-family: Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	 #customers td, #customers th {
		border: 1px solid #ccc;
		padding: 8px;
	}

	#customers th {
		background-color: #c3c3c3;
	}
	/*
	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;} */

	#customers th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		/* background-color: #16423C; */
		color: black;
	}
	</style>

</head>
<body>

<div class="px-6">
	<a href="create.php"><button type="button" class="py-2.5 mt-6 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Add New Record</button></a>
	
	<table id="customers" class="mt-6">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Age</th>
			<th>Address</th>
			<th>Action</th>
		</tr>
		<?php 
			foreach ($employees as $employee) {
				echo "<tr>";
				echo "<td> {$employee['id']} </td>";
				echo "<td> {$employee['name']} </td>";
				echo "<td> {$employee['age']} </td>";
				echo "<td> {$employee['address']} </td>";
				echo "<td>
					<a href='edit.php?id={$employee['id']}'><button type='button' class='focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900'>Edit</button></a>
					<button data-employee-id={$employee['id']} type='button' data-modal-target='popup-modal' data-modal-toggle='popup-modal' class='delete-record-btn focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900'>Delete</button>
					</td>";
				echo "</tr>";
			}
		?>
	</table>
	
	<div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
			<div class="relative p-4 w-full max-w-md max-h-full">
					<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
							<button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
									<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
											<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
									</svg>
									<span class="sr-only">Close modal</span>
							</button>
							<form method="POST" action="delete.php">
								<input type="hidden" id="delete-record-id" name="delete-record-id">
								<div class="p-4 md:p-5 text-center">
										<svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
												<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
										</svg>
										<h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this record?</h3>
										<button type="submit" data-modal-hide="popup-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
												Yes, I'm sure
										</button>
										<button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
								</div>
							</form>
					</div>
			</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

<script>

const deleteBtns = document.querySelectorAll('.delete-record-btn');

deleteBtns.forEach(element => {
	element.addEventListener('click', () => {
		document.getElementById('delete-record-id').value = element.dataset.employeeId;
	})
});


</script>

</body>
</html>
