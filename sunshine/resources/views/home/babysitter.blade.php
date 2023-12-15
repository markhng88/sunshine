<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Babysitters</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    h2 {
      background-color: #4CAF50;
      color: #fff;
      margin: 0;
      padding: 20px;
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #f5f5f5;
    }

    .booking-btn {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-top: 10px;
      cursor: pointer;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    .booking-btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Our Babysitters</h2>
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Availability</th>
        <th>Action</th>
      </tr>
      <tr>
        <td>Annie Smith</td>
        <td>annie.smith@email.com</td>
        <td>(123) 456-7890</td>
        <td>Available on weekdays</td>
        <td><button class="booking-btn">Book Now</button></td>
      </tr>
      <tr>
        <td>Emily Johnson</td>
        <td>emily.johnson@email.com</td>
        <td>(987) 654-3210</td>
        <td>Available on weekends</td>
        <td><button class="booking-btn">Book Now</button></td>
      </tr>
      <!-- Add more babysitters as needed -->
    </table>
  </div>

</body>
</html>
