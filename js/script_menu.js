const popupBtn = document.getElementById('popup-btn');
const popup = document.getElementById('popup');
const tableData = document.getElementById('table-data');

popupBtn.addEventListener('click', () => {
	// Connect to the database
	const db = new SQL.Database('spin_a_meal.db');

	// Define the SQL query to fetch the table data
	const query = 'SELECT * FROM menu';

	// Execute the query and get the result