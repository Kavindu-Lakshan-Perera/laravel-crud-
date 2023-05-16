<!DOCTYPE html>
<html>
<head>
	<title>Student Exam Interface</title>
	<link rel="stylesheet" type="text/css" href="style.css">

    <style>
    body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
}

header {
	background-color: #69dcf6;
	color: #fff;
	display: flex;
	flex-direction: row;
	align-items: center;
	justify-content: space-between;
	padding: 10px 20px;
}

nav ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	display: flex;
	flex-direction: row;
	align-items: center;
	justify-content: space-between;
}

nav ul li {
	margin: 0 10px;
}

nav ul li a {
	color: #fff;
	text-decoration: none;
}

main {
	max-width: 800px;
	margin: 20px auto;
	padding: 20px;
}

.questions {
	margin-bottom: 20px;
}

.questions ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

.questions ul li {
	margin: 10px 0;
}

button[type="submit"] {
	background-color: #333;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}


    </style>
</head>
<body>
	<header>
		<h1>Student Exam Interface</h1>
		<nav>
			<ul>
				<li><a href="#">Dashboard</a></li>
				<li><a href="#">Exams</a></li>
				<li><a href="#">Results</a></li>
				<li><a href="#">Logout</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<h2>Exam Title</h2>


		<div class="questions">

			<h3>Question 1</h3>
			<p>What is the largest planet in our solar system?</p>
			<ul>
				<li><input type="radio" name="q2" value="a">(A). Mars</li>
				<li><input type="radio" name="q2" value="b">(B). Jupiter</li>
				<li><input type="radio" name="q2" value="c">(C). Saturn</li>
                <li><input type="radio" name="q2" value="d">(D). Saturn</li>
			</ul>
		</div>
        <br>

        <button type="submit">Previes</button>
		<button type="submit">Next</button>


	</main>

	<footer>

	</footer>
</body>
</html>
