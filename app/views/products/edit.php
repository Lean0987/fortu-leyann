<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Edit Product - Hello Kitty Shop</title>

    <link rel="stylesheet" href="/style.css">

</head>

<body>

<div class="page">

    <div class="main-card">

        <div class="form-card">

            <div class="logo-circle" style="margin: 0 auto 20px;">
                🐱🎀
            </div>

            <h1>
                🎀 Edit Product
            </h1>


            <form
                method="POST"
                action="/products/edit/<?= $product['id']; ?>"
            >

                <div class="form-group">

                    <label>
                        Product Name
                    </label>

                    <input
                        type="text"
                        name="product_name"
                        value="<?= htmlspecialchars($product['product_name']); ?>"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Description
                    </label>

                    <textarea
                        name="description"
                        required
                    ><?= htmlspecialchars($product['description']); ?></textarea>

                </div>


                <div class="form-group">

                    <label>
                        Price
                    </label>

                    <input
                        type="number"
                        name="price"
                        step="0.01"
                        value="<?= htmlspecialchars($product['price']); ?>"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Quantity
                    </label>

                    <input
                        type="number"
                        name="quantity"
                        value="<?= htmlspecialchars($product['quantity']); ?>"
                        required
                    >

                </div>


                <div class="form-buttons">

                    <button
                        type="submit"
                        class="btn"
                    >
                        💗 Update Product
                    </button>

                    <a
                        href="/products"
                        class="btn btn-light"
                    >
                        Back to Products
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>