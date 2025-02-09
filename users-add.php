<?php

//start session
session_start();
if (!isset($_SESSION["user"]))
  header("location: login.php");
$_SESSION['table'] = 'users';
$user = $_SESSION['user'];
$users = include ('database/show-users.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard-IMS</title>
  <link rel="stylesheet" href="style.css?v=<?= time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://kit.fontawesome.com/e67b731cc8.js" crossorigin="anonymous"></script>
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.4/css/bootstrap-dialog.min.css"
    integrity="sha512-PvZCtvQ6xGBLWHcXnyHD67NTP+a+bNrToMsIdX/NUqhw+npjLDhlMZ/PhSHZN4s9NdmuumcxKHQqbHlGVqc8ow=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div id="DashboardMainContainer">
    <?php include ('partials/app-sidebar.php') ?>

    <div class="DashboardContentContainer" id="DashboardContentContainer">
      <?php include ('partials/app-topnav.php') ?>
      <div class="DashboardContent">
        <div class="DashboardContentMain">
          <div class="row">

            <div class="column column-5">

              <h1 class="section_header"><i class="fa-solid fa-plus"></i>Register User Account </h1>
              <div class="useraddformcontainer">
                <form action="database/add.php" method="post" class="app-form">
                  <div class="appformInputcontainer">
                    <label for="first_name">First Name</label>
                    <input type="text" class="appforminput" id="first_name" name="first_name"
                      autocomplete="given-name" />
                  </div>


                  <div class="appformInputcontainer">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="appforminput" id="last_name" name="last_name" />
                  </div>
                  <div class="appformInputcontainer">
                    <label for="email">Email</label>
                    <input type="text" class="appforminput" id="email" name="email" autocomplete="email" />
                  </div>
                  <div class="appformInputcontainer">
                    <label for="password">Password</label>
                    <input type="password" class="appforminput" id="password" name="password"
                      autocomplete="current-password" />
                  </div>

                  <button type="submit" class="appbtn"><i class="fa-solid fa-plus"></i>Add User</button>

                </form>


                <?php
                if (isset($_SESSION['response'])) {
                  $respond_message = $_SESSION['response']['message'];
                  $is_success = $_SESSION['response']['success'];
                  ?>
                  <div class="responseMessage">
                    <p class="responseMessage <?= $is_success ?
                      'responseMessage_success' : 'responseMessage_error' ?>">
                      <?= $respond_message ?>

                    </p>

                  </div>
                  <?php unset($_SESSION['response']);
                } ?>





              </div>
            </div>

            <div class="column column-7">
              <h1 class="section_header"><i class="fa-solid fa-list"></i>list Of Users </h1>
              <div class="section_content">
                <table class="users">


                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Created_at</th>
                      <th>Updated_at</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($users as $index => $user) { ?>
                      <tr>
                        <td><?= $index + 1 ?></td>
                        <td class="firstname"><?= $user['first_name'] ?></td>
                        <td class="lastname"><?= $user['last_name'] ?></td>
                        <td class="email"><?= $user['email'] ?></td>
                        <td><?= date('M d, Y @ h:i:s A', strtotime($user['created_at'])) ?></td>
                        <td><?= date('M d, Y @ h:i:s A', strtotime($user['updated_at'])) ?></td>
                        <td>
                          <a href="" class="updateUser" data-userid="<?= $user['id']?>"><i class="fa-solid fa-pencil"></i>Edit</a>
                      
                          <a href="" class="deleteUser" data-userid="<?= $user['id'] ?>" data-fname="<?= $user['first_name'] ?>" data-lname="<?= $user['last_name'] ?>"> <i
                          class="fa-solid fa-trash"></i> Delete</a>

                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <p class="usercount"><?= count($users) ?> Users</p>
              </div>
            </div>




          </div>
        </div>
      </div>

    </div>
    <script src="js/script.js ?v=<?= time(); ?>"></script>
    <script src="js/jquery/jquery.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.4/js/bootstrap-dialog.js"
      integrity="sha512-AZ+KX5NScHcQKWBfRXlCtb+ckjKYLO1i10faHLPXtGacz34rhXU8KM4t77XXG/Oy9961AeLqB/5o0KTJfy2WiA=="
      crossorigin="anonymous"></script>
    <script>
      function script() {

        this.initialize = function () {
          this.registerEvents();
        },

          this.registerEvents = function () {
            document.addEventListener('click', function (e) {
              targetElement = e.target;
              classList = targetElement.classList;


              if (classList.contains('deleteUser')) {
                e.preventDefault();
                userId = targetElement.dataset.userid;
                fname = targetElement.dataset.fname;
                lname = targetElement.dataset.lname;
                fullname = fname + ' ' + lname;

                if (window.confirm('Do You really want to delete ' + fullname + '?')) {
                  $.ajax({
                    method: 'POST',
                    data: {
                      user_id: userId,
                      f_name: fname,
                      l_name: lname
                    },
                    url: 'database/delete-users.php',
                    dataType: 'json',
                    success: function (data) {
                      if (data.success) {
                        if (window.confirm(data.message)) {
                          location.reload();
                        }
                      } else window.alert(data.message);

                    }
                  });
                }
              }

              if (classList.contains('updateUser')) {
                e.preventDefault(); //prevent loading the page

                //get data 
                firstName = targetElement.closest('tr').querySelector('td.firstname').innerHTML;
                lastName = targetElement.closest('tr').querySelector('td.lastname').innerHTML;
                email = targetElement.closest('tr').querySelector('td.email').innerHTML;
                userId = targetElement.dataset.userid;


                BootstrapDialog.confirm({
                  title: 'Update ' + firstName + ' ' + lastName,
                  message: '<form>\
                      <div class="form-group">\
                      <label for="firstName">First Name:</label>\
                      <input type="text" class="form-control" id="firstName" value="'+ firstName + '" >\
                      </div>\
                      <div class="form-group">\
                      <label for="lastName">Last Name:</label>\
                      <input type="text" class="form-control" id="lastName"  value="'+ lastName + '">\
                      </div>\
                      <div class="form-group">\
                      <label for="email">Email:</label>\
                      <input type="email" class="form-control" id="emailupdate"  value="'+ email + '">\
                      </div>\
                      </form>',

                  callback: function (isUpdate) {

                
                    if (isUpdate) {  // if user click ok
                      $.ajax({
                        method: 'POST',
                        data: {
                          userId: userId,
                          f_name: document.getElementById('firstName').value,
                          l_name: document.getElementById('lastName').value, 
                          email: document.getElementById('emailupdate').value
                        },
                        url: 'database/update-user.php',
                        dataType: 'json',
                        success: function (data) {
                          if (data.success) {
                            if (window.confirm(data.message)) {
                              location.reload();
                            }
                          } else window.alert(data.message);

                        }
                      });
                    }
                  }
                });

              }
            });

          }
      }

      var script = new script();
      script.initialize();
    </script>

</body>


</html>