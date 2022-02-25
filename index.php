<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="message-success.php" method="post" class="form">
        <div class="form-group">
            <label for="firstname">Name</label>
            <div class="input-group">
                <input type="text" name="firstname" id="firstname" placeholder="First" autofocus>
                <input type="text" name="lastname" id="lastname" placeholder="Last">
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="whatsapp">WA</label>
            <input type="number" name="whatsapp" id="whatsapp" required>
        </div> 
        <div class="form-group">
            <label for="item1">Item #1 ($10 per item)</label>
            <select class="input-item" name="item1" id="item1" data-price="10">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </div>
        <div class="form-group">
            <label for="item2">Item #2 ($15 per item) </label>
            <select class="input-item" name="item2" id="item2" data-price="15">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="text" name="total" id="total" readonly>
        </div>
        <div class="form-group">
            <label for="reference_number">Reference Number</label>
            <input type="text" name="reference_number" id="reference_number">
        </div>
        <div class="form-group">
            <button type="submit" id="submit">Kirim</button>
        </div>
    </form>

    <script src="js/script.js"></script>
</body>
</html>
