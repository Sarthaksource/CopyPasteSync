<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  include "connect.php";

  $userInput = $_POST['user-input'];
  $sql = "INSERT INTO storage (userInput) VALUES ('$userInput')";
  $result = mysqli_query($con, $sql);

  if($result) {
    $id = mysqli_insert_id($con);
    $time = date('Y-m-d H:i:s');
    echo json_encode(['id' => $id, 'userInput' => $userInput, 'time' => $time]);
  }
  else {
    echo json_encode(['error' => 'Failed to insert data']);
  }
  exit;
}

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Copy Paste</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
  	body {
	  background: black;
	}

	.bg-custom, .bg-custom:focus {
	  background-color: black;
	  border-color: gray;
	  color: lightgray;
	}

	.bg-custom::placeholder {
	  color: lightgray;
	}

    .table-wrapper {
      max-height: 400px;
      overflow-y: auto;
    }
  </style>
</head>
<body>
  <h2 class="text-center text-light" id="topic">COPY PASTE</h2>
  <div class="container my-4">
    <form id="user-form">
      <div class="mb-3">
        <input type="text" class="form-control bg-custom" placeholder="Enter Text" name="user-input" required>
      </div>
      <div class="table-wrapper">
        <table class="table table-dark table-hover">
          <thead>
            <tr>
              <th scope="col">Text</th>
              <th scope="col">Time</th>
            </tr>
          </thead>
          <tbody id="tbody">
          </tbody>
        </table>
      </div>
      <button type="submit" class="btn btn-primary w-100">Store</button>
    </form>
  </div>

  <script>
    window.addEventListener("load", showTable);
    
    function showTable() {
      fetch('fetch_data.php')
        .then(response => response.json())
        .then(data => {
          let tableBody = document.getElementById('tbody');
          tableBody.innerHTML = ''; // Clear the table before adding new rows
          
          data.forEach(row => {
            const newRow = document.createElement('tr');
            const userInput = document.createElement('td');
            const inputDate = document.createElement('td');

            userInput.textContent = row['userInput'];
            inputDate.textContent = row['inputDate'];

            newRow.appendChild(userInput);
            newRow.appendChild(inputDate);

            tableBody.appendChild(newRow);
          });
        })
        .catch(error => console.error('Error fetching data:', error));
    }

    document.getElementById('user-form').addEventListener('submit', function(e) {
      e.preventDefault();
      
      let formData = new FormData(this);

      fetch('index.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.error) {
          console.error(data.error);
        } else {
          updateTable(data.userInput, data.time);
        }
      })
      .catch(error => console.error('Error:', error));
    });

    function updateTable(userInput, time) {
      let tableBody = document.getElementById('tbody');

      const newRow = document.createElement('tr');
      const userInputTd = document.createElement('td');
      const timeTd = document.createElement('td');

      userInputTd.textContent = userInput;
      timeTd.textContent = time;

      newRow.appendChild(userInputTd);
      newRow.appendChild(timeTd);

      tableBody.appendChild(newRow);
    }

    document.getElementById('tbody').addEventListener('click', function(e) {
      if (e.target && e.target.nodeName === "TD") {
        let textToCopy = e.target.textContent;
        navigator.clipboard.writeText(textToCopy).then(() => {
          console.log('Text copied to clipboard');
        }).catch(err => {
          console.error('Failed to copy text:', err);
        });
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
