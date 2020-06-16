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
        <div class="col-6" style="background-color: rgb(171, 224, 171); padding: 1em;">

          <!-- First name -->
          <div class="form-group row">
            <div class="col-sm-12">
              <label for="first_name" class="col-sm-12 col-form-label">first name</label>
            </div>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="first_name" name="first_name" value="<?php if(isset($data['first_name'])){echo $data['first_name'];} ?>">
            </div>
          </div>

          <!-- Last name -->
          <div class="form-group row">
            <div class="col-sm-12">
              <label for="last_name" class="col-sm-12 col-form-label">last name</label>
            </div>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="last_name" name="last_name" value="<?php if(isset($data['first_name'])){echo $data['last_name'];} ?>">
            </div>
          </div>

          <!-- user name -->
          <div class="form-group row">
            <div class="col-sm-12">
              <label for="user_name" class="col-sm-12 col-form-label">user name</label>
            </div>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="user_name" name="user_name" value="<?php if(isset($data['first_name'])){echo $data['user_name'];} ?>">
            </div>
          </div>

          <!-- pass word -->
          <div class="form-group row">
            <div class="col-sm-12">
              <label for="pass_word" class="col-sm-12 col-form-label">password</label>
            </div>
            <div class="col-sm-12">
              <input type="password" class="form-control" id="pass_word" name="pass_word" value="<?php if(isset($data['first_name'])){echo $data['pass_word'];} ?>">
            </div>
          </div>

          <!-- birth day -->
          <div class="form-group row">
            <div class="col-sm-12">
              <label for="brithday" class="col-sm-12 col-form-label">Birthday</label>
            </div>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="birthday" name="birthday" value="<?php if(isset($data['first_name'])){echo $data['birthday'];} ?>">
            </div>
          </div>

        </div>
        <div class="col-6" style="background-color: rgb(228, 179, 179); padding: 1em;">
          
          <!-- Gender radio -->
          <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-12 pt-0">Gender</legend>
              <div class="col-sm-6">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="gender1" value="male" <?php if(isset($data['gender']) && $data['gender'] == "male"){echo "checked";} ?>>
                  <label class="form-check-label" for="gender1">
                    Male
                  </label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="gender2" value="female" <?php if(isset($data['gender']) && $data['gender'] == "female"){echo "checked";} ?>>
                  <label class="form-check-label" for="gender2">
                    Female
                  </label>
                </div>
              </div>
            </div>
          </fieldset>

          <!-- Hobby -->
          <div class="form-group row">
            <div class="col-sm-12">Hobby</div>
            <div class="col-sm-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="sport" name="sport" <?php if(isset($data['sport'])){echo "checked";} ?>>
                <label class="form-check-label" for="sport">
                  sport
                </label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="coffee" name="coffee" <?php if(isset($data['coffee'])){echo "checked";} ?>>
                <label class="form-check-label" for="coffee">
                  coffee
                </label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="shopping" name="shopping" <?php if(isset($data['shopping'])){echo "checked";} ?>>
                <label class="form-check-label" for="shopping">
                  shopping
                </label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="research" name="research" <?php if(isset($data['research'])){echo "checked";} ?>>
                <label class="form-check-label" for="research">
                  research
                </label>
              </div>
            </div>
          </div>

          <!-- Address -->
          <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address" rows="5"><?php if(isset($data['address'])){echo $data['address'];} ?></textarea>
          </div>

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