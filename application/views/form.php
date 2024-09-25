<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<title></title>
<head>
    <body>
        <div class ="container">
            <div class="row mt-5">
                <div class="col-md-6">
                   
                   <?php echo form_open_multipart('homecontroller/my_func');?>

                    <input type="text" class="form-control" name="uname" value="<?php echo set_value ('username') ?>"placeholder="username">
                     <?php echo form_error('username');?>

                    <input type="password" name="upass" placeholder="passsword" value="<?php echo set_value('password'), 'required'?>" class="form-control"> 
                     <?php echo form_error('password');?>

                     <input type="text" name="uemail" placeholder="email" value="<?php echo set_value('email')?>" class="form-control"> 
                     <?php echo form_error('email');?>

                    <input type="file" name="document" class="form-control">
                      <input tpye="submit" value="submit" class=" form-control btn btn-success w-25 mt-5"> 
                      <?php echo form_close();?>

                     
                
                    
</div>
</div>
</div>
</body>
</html>
<script>
    function myFunc(){
        alert("sdf");
    }
</script>
    