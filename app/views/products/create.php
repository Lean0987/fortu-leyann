<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Product - Hello Kitty Shop</title>

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
                🎀 Add New Product
            </h1>

            <form method="POST" action="/products/create">

                <div class="form-group">

                    <label>
                        Product Name
                    </label>

                    <input
                        type="text"
                        name="product_name"
                        placeholder="Enter product name"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Description
                    </label>

                    <textarea
                        name="description"
                        placeholder="Enter product description"
                        required
                    ></textarea>

                </div>


                <div class="form-group">

                    <label>
                        Price
                    </label>

                    <input
                        type="number"
                        name="price"
                        step="0.01"
                        placeholder="0.00"
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
                        placeholder="Enter quantity"
                        required
                    >

                </div>


                <div class="form-buttons">

                    <button
                        type="submit"
                        class="btn"
                    >
                        🎀 Add Product
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