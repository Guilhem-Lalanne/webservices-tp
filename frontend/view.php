<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Frontend</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="initialCurrencyCode">Currency to convert :</label><br>
    <select id="initialCurrencyCode" name="initialCurrencyCode">
        <?php foreach ($currencies as $currency) { ?>
            <option value="<?php echo $currency['iso_code']; ?>">
                <?php $display = "[" . $currency['iso_code'] . "] "
                    . $currency['name']
                    . " (" . $currency['country'] . ")";
                echo $display; ?>
            </option>
        <?php } ?>
    </select><br>
    <label for="targetCurrencyCode">Currency target :</label><br>
    <select id="targetCurrencyCode" name="targetCurrencyCode">
        <?php foreach ($currencies as $currency) { ?>
            <option value="<?php echo $currency['iso_code']; ?>">
                <?php $display = "[" . $currency['iso_code'] . "] "
                    . $currency['name']
                    . " (" . $currency['country'] . ")";
                echo $display; ?>
            </option>
        <?php } ?>
    </select><br>
    <label for="amount">Amount :</label><br>
    <input id="amount" type="text" name="amount">
    <input type="submit" value="Submit">
</form>
</body>
</html>