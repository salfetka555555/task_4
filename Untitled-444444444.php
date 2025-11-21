<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bank Card Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type=number], input[type=text], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<h2>Форма банковских данных</h2>
<form action="/submit-card-data.php" method="post">
    <label for="card-number">Номер карты:</label>
    <input type="number" name="card_number" placeholder="XXXX XXXX XXXX XXXX" required />

    <label for="expiry-date">Срок действия:</label>
    <select name="month" required>
        <option value="">Выберите месяц...</option>
        <?php for($i=1;$i<=12;$i++): ?>
            <option value="<?=$i?>"><?=$i?></option>
        <?php endfor;?>
    </select>
    /
    <select name="year" required>
        <option value="">Год...</option>
        <?php for($y=date('Y');$y<=date('Y')+10;$y++): ?>
            <option value="<?=$y?>"><?=$y?></option>
        <?php endfor;?>
    </select>

    <label for="cvv-code">CVV-код:</label>
    <input type="number" name="cvv_code" placeholder="XXX" required />

    <label for="holder-name">Имя владельца:</label>
    <input type="text" name="holder_name" placeholder="Ваше полное имя" required />

    <button type="submit">Отправить</button>
</form>
</body>
</html>