<?php include("path.php"); 
include("../database/topics.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    home
  </title>
</head>

<body class="g-sidenav-show  bg-gray-200">
    <a href="create_topics.php"><button> Add topic </button></a>
    <a href="index_topics.php"><button> Manage topic </button></a>


    <form role="form" class="text-start" action="../database/topics.php" method="post">
      <?php if(count($errors) > 0 ):?>
                      <div>
                        <?php foreach($errors as $error): ?>
                          <li><?php echo $error;?></li>
                          <?php endforeach;?>
                      </div>
      <?php endif; ?>
      <div class="input-group input-group-outline my-3">
        <input type="text" name="name" class="form-control" value="<?php echo $name ?>" placeholder="Topic">
      </div>
      <div class="input-group input-group-outline mb-3">
        <textarea rows="2" name="description" class="form-control"  placeholder="write" ><?php echo $description ?></textarea>
      </div>
      <div class="text-center">
        <button type="submit" name="add-topic" class="btn bg-gradient-primary w-100 my-4 mb-2">ADD TOPIC</button>
      </div>
    </form>
</body>
</html>