<!DOCTYPE html>
<html>
  <head>
    <title>Test</title>
    <style>
      <?php include 'CSS/index.css'; ?>
      <?php include 'CSS/test.css'; ?>
    </style>
  </head>
  <body>
    <div id='container'>
      <div id='header'>
        <div id='name'>
          <h1>Danh sách nhân dziên</h1>
        </div>
        <div>
          <form method="post">
            <button type='submit' name='insert'>+ Thêm nhân viên</button>
          </form>
        </div>
      </div>
      <div style="margin: 16px 0;">
        <hr />
      </div>
      <table id='table'>
        <tr>
          <th>ID</th>
          <th>Staff Number</th>
          <th>Full Name</th>
          <th>Actions</th>
        </tr>
        <tbody>
          <?php
            include("db.php");
            
            $sql = 'SELECT * FROM STAFFS';
            $result = mysqli_query($connect, $sql);
            if (!$result) die ('Câu truy vấn bị sai');
  
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              $staffNumber = $row['staffNumber'];
              $fullName = $row['fullName'];
              echo 
                "<tr><td>"
                .$id.
                "</td><td>"
                .$staffNumber.
                "</td><td>"
                .$fullName.
                "</td><td><a href='delete.php?id=$id'>🗶 Xoá</a></td></tr>";
            }
            
            mysqli_free_result($result);
            mysqli_close($connect);


            if (isset($_POST['insert'])) {
              header("location: insert.php");
            }
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>