<!DOCTYPE html>
<html>
<head>
    <title>Ứng dụng đặt đồ uống</title>
</head>
<body>
    <h1>Chọn đồ uống</h1>
    <form action="/2-formHoadonTinhtien.php" method="post">
        <label for="drink">Chọn đồ uống:</label>
        <select name="drink" id="drink">
            <option value="cafe">Cafe - 20,000 VND</option>
            <option value="tra">Trà - 15,000 VND</option>
            <option value="nuoc">Nước - 10,000 VND</option>
        </select><br>
        <label for="quantity">Số lượng:</label>
        <input type="number" name="quantity" id="quantity" min="1" required><br>
        <input type="submit" name="submit" value="Order">
    </form>