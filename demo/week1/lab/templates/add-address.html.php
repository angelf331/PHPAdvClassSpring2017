<div class="container">
    <h1>Add Phone</h1>
    <form action="#" method="post">   
       fullname: <input name="fullname" class="form-control" value="<?php echo $fullname; ?>" /> <br />
       email: <input name="email" class="form-control" value="<?php echo $email; ?>" /> <br />
       addressline1: <input name="addressline1" class="form-control" value="<?php echo $addressline1; ?>" /> <br />
       city: <input name="city" class="form-control" value="<?php echo $city; ?>" /> <br />
       
       state: <select name="state" class="form-control" >
                <?php foreach ($states as $key => $value): ?> 
                <option value="<?php echo $key; ?>" <?php if ( $state == $key ): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
                <?php endforeach; ?>
              </select>
       <br />
       zip: <input name="zip" class="form-control" value="<?php echo $zip; ?>" /> <br />
       birthday: <input type="date"  class="form-control" name="birthday" value="<?php echo $birthday; ?>" /> <br />
       <input type="submit" value="submit" class="btn btn-primary" />
    </form>
</div>