<?php 
  include_once("register_controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>Boostrap form</title>
</head>
<body>
  <main>
    <form action="register.php" method="post" class="container">
      <div class="row" style="height: 100%;">
        <div class="col-12" style="background-color: rgb(171, 224, 171); padding: 1em;">

          <!-- name -->
          <div class="form-group row">
            <div class="col-sm-12">
              <label for="name" class="col-sm-12 col-form-label">Name</label>
            </div>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="name" name="name" value="<?php if(isset($data['name'])){echo $data['name'];} ?>" required>
            </div>
          </div>

          <!-- email -->
          <div class="form-group row">
            <div class="col-sm-12">
              <label for="email" class="col-sm-12 col-form-label">Email</label>
            </div>
            <div class="col-sm-12">
              <input type="email" class="form-control" id="email" name="email" value="<?php if(isset($data['email'])){echo $data['email'];} ?>" required>
            </div>
          </div>

          <!-- phone -->
          <div class="form-group row">
            <div class="col-sm-12">
              <label for="phone" class="col-sm-12 col-form-label">phone</label>
            </div>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="phone" name="phone"  pattern="[0-9]{7,}" value="<?php if(isset($data['phone'])){echo $data['phone'];} ?>" required>
            </div>
          </div>

          <!-- Message -->
          <?php if(isset($message)){echo nl2br($message);} ?>
        </div>
      </div>
      <div class="row d-flex justify-content-around" style="height: 100%; background-color: blue;">
        <div class="col-6 d-flex justify-content-end" style="background-color: yellow; padding: 1em;">
          <button type="submit" class="btn btn-primary">Cancel</button>
        </div>
        <div class="col-6" style="background-color: orange; padding: 1em;">
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
      </div>
    </form>
  </main>
    <script src="js/jquery-3.5.1.js"></script> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#birthday" ).datepicker();
      } );
    </script>
</body>
</html>