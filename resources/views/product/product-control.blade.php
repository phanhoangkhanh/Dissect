<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAN PHAM</title>
    <link rel="stylesheet" type="text/css" href="/css/product.css">
</head>
<body>
    <div class="wrapper">
        <form method="POST">
            @csrf
            <label>Tên sản phẩm:</label>
            <input type="text" name="name"/>

            <label>Chi phí:</label>
            <input type="number" name="price"/>

            <button>NHẬP</button>
        </form>
    </div>
</body>
</html>