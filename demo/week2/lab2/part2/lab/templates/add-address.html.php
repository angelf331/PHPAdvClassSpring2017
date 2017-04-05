<!--View page for adding address-->
<div class="container  col-md-6">
    <div class="center-block">
        <h1>Add Phone</h1>
        <form action="#" method="post">   
            Fullname: <input name="fullname" class="form-control " value="<?php echo $fullname; ?>" /> <br />
            Email: <input name="email" class="form-control" value="<?php echo $email; ?>" /> <br />
            Addressline: <input name="addressline1" class="form-control" value="<?php echo $addressline1; ?>" /> <br />
            City: <input name="city" class="form-control" value="<?php echo $city; ?>" /> <br />
       
            State:  <select name="state" class="form-control" >
                        <?php foreach ($states as $key => $value): ?> 
                        <option value="<?php echo $key; ?>" <?php if ( $state == $key ): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
                        <?php endforeach; ?>
                    </select>
            <br />
            Zip: <input name="zip" class="form-control" value="<?php echo $zip; ?>" /> <br />
            Birthday: <input type="date"  class="form-control" name="birthday" value="<?php echo $birthday; ?>" /> <br />
            <input type="submit" value="submit" class="btn btn-primary" />
            <a href="index.php">View Addresses</a>
        </form>
    </div>
</div>