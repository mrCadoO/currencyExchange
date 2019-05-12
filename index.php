<?php require_once('header.php'); ?>
<?php

use wangcj\helloworld\helloworld as Course;
?>


    <form method="post" action="CurrencyController.php">
        <div class="form-inline mt-5">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Amount" value="<?php $session->output_amount(); ?>" name="amount" style="width: 200px;" >


            <select class="custom-select my-1 mr-sm-2 ml-2" id="inlineFormCustomSelectPref" name="curr_name">
                <?php foreach(Course::$curr_array as $item): ?>
                    <?php if($item == $session->output_course()): ?>
                    <?php echo "<option selected value=\"{$item}\">$item</option>"; ?>
                    <?php else: ?>
                    <?php echo "<option value=\"{$item}\">{$item}</option>"; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>

            <h1 class="mr-2">=</h1><input type="text" class="form-control" id="disabledTextInput" value="<?php $session->output_curr_result(); ?>" name="result" style="width: 200px;" disabled>

        </div>
        <button type="submit" class="btn btn-primary my-1">Submit</button>
    </form>



<?php require_once('footer.php'); ?>