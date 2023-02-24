
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> calculator </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                 <div class="card mt-10">
                     <h5 class="card-header bg-primary">calculator</h5>
                        <div class="card-body">
                            <form  method="post">
                            <div class="mb-3">
                                  <label class="form-label"> Enter first number</label>
                              <input type="number" class="form-control" name="first_number">
                          </div>
                          <div class="mb-3">
                                  <label class="form-label"> Enter second number</label>
                              <input type="number" class="form-control" name="second_number">
                          </div>
                     <button name="add" type="submit" class="btn btn-success">Add</button>
                     <button name="substact" type="submit" class="btn btn-primary">substract</button>
                     <button name="multi" type="submit" class="btn btn-info">Multiple</button>
                     <button name="divi" type="submit" class="btn btn-danger">Division</button>
                 </form>

                 <?php if (isset($_POST["first_number"])) {
                     if ($_POST["first_number"]) {
                         if ($_POST["second_number"]) { ?>
                              <div class="alert alert-success text-center mt-4">
                                     Result is :
                                     <?php if (isset($_POST["add"])) {
                                         echo $_POST["first_number"] +
                                             $_POST["second_number"];
                                     } elseif (isset($_POST["substact"])) {
                                         echo $_POST["first_number"] -
                                             $_POST["second_number"];
                                     } elseif (isset($_POST["multi"])) {
                                         echo $_POST["first_number"] *
                                             $_POST["second_number"];
                                     } elseif (isset($_POST["divi"])) {
                                         echo $_POST["first_number"] /
                                             $_POST["second_number"];
                                     } ?>
                              </div>
                                <?php } else { ?>
                              <div class="alert alert-danger text-center mt-4">
                                     <?php echo "Second number is missing"; ?>
                               <?php }
                     } else {
                          ?>
                              <div class="alert alert-danger text-center mt-4">
                                    <?php echo "Number One is missing"; ?>
                               <?php
                     }
                 } ?>
                
                   </div>
                </div>
            </div>
        </div>
    </div>
  </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
