<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php'; ?>

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">سجل و اربح</h1>
            <p class="lead fw-normal"> باقي على فتح التسجيل</p>
            <h3 id="countdown"></h3>
            <p class="lead fw-normal">للسحب على نسخة مجانية من برنامج</p>
            <a class="btn btn-outline-secondary" href="#">Coming soon</a>
        </div>
        </div>

        <div class="position-relative text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
        <form class="mt-5" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <div class="mb-">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" class="form-control" name="firstName" value = "<?php echo $firstName ?>" id="firstName" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError']?></div>
    </div>
    <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" class="form-control" name="lastName" value = "<?php echo $lastName ?>" id="lastName">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError']?></div>
    </div>
    <div class="mb-3">
    <label for="email" class="form-label">الايميل</label>
    <input type="text" class="form-control" name="email" value = "<?php echo $email ?>" id="email">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError']?></div>
    </div>
    
    <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
        </form>
        </div>
        </div>
    

    <div class="text-center">
        <button type="button" id="winner" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        اختيار الرابح
        </button>
    </div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h1 class="display-3 text-center"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']);?></h1>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>


    <div id="cards" class="text-center">
    
    <?php foreach($users as $user): ?>
   
        <div class="col-sm-6">
            <div class="card my-2 bg-light">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']);?></h5>
                    <p class="card-text"><?php echo '<br>' . htmlspecialchars($user['email']);?> </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>

    <?php include_once './parts/footer.php'; ?>
