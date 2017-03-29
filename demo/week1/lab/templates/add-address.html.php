<div class="container">
    <h1>Add Phone</h1>
    <form action="#" method="post">   
       fullname: <input name="fullname" value="<?php echo $fullname; ?>" /> <br />
       email: <input name="email" value="<?php echo $email; ?>" /> <br />
       addressline1: <input name="addressline1" value="<?php echo $addressline1; ?>" /> <br />
       city: <input name="city" value="<?php echo $city; ?>" /> <br />
       
       state: <select name="state">
                <?php foreach ($states as $key => $value): ?> 
                <option value="<?php echo $key; ?>" <?php if ( $state == $key ): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
                <?php endforeach; ?>
              </select>
       <br />
       zip: <input name="zip" value="<?php echo $zip; ?>" /> <br />
       birthday: <input type="date" name="birthday" value="<?php echo $birthday; ?>" /> <br />
       <input type="submit" value="submit" class="btn btn-primary" />
    </form>
</div>