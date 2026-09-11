<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hello Kitty Shop - Products</title>

    <link rel="stylesheet" href="/style.css">

</head>

<body>

<div class="page">

    <div class="main-card">

        <!-- HEADER -->

        <div class="header">

            <div class="header-left">

                <div class="logo-circle">
                    🐱
                </div>

                <div class="header-title">

                    <h1>
                        Hello Kitty Shop 🎀
                    </h1>

                    <p>
                        Cute and simple product management
                    </p>

                </div>

            </div>

            <div class="search-box">

                <span class="search-icon">🔍</span>

                <span>Search products...</span>

            </div>

        </div>


        <!-- PRODUCT HEADER -->

        <div class="product-header">

            <h2>
                🎀 Our Products
            </h2>

            <a href="/products/create" class="btn">
                ＋ Add Product
            </a>

        </div>


        <!-- PRODUCTS -->

        <?php if (!empty($products)): ?>

            <div class="product-list">

                <?php foreach ($products as $product): ?>

                    <div class="product-item">

                        <div class="product-info">

                            <div class="product-name">

                                🎀
                                <?= htmlspecialchars($product['product_name']); ?>

                            </div>

                            <div class="product-description">

                                <?= htmlspecialchars($product['description']); ?>

                            </div>

                            <div class="product-details">

                                ₱<?= htmlspecialchars($product['price']); ?>

                                &nbsp; • &nbsp;

                                Quantity:
                                <?= htmlspecialchars($product['quantity']); ?>

                            </div>

                        </div>


                        <div class="product-actions">

                            <a
                                href="/products/edit/<?= $product['id']; ?>"
                                class="btn btn-edit"
                            >
                                Edit
                            </a>


                            <form
                                method="POST"
                                action="/products/delete/<?= $product['id']; ?>"
                                style="margin: 0;"
                                onsubmit="return confirm('Delete this product?');"
                            >

                                <button
                                    type="submit"
                                    class="btn btn-delete"
                                >
                                    Delete
                                </button>

                            </form>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php else: ?>

            <div class="empty">

                <div class="empty-icon">
                    🐱🎀
                </div>

                <strong>No products found.</strong>

                <p>
                    Add your first cute product!
                </p>

            </div>

        <?php endif; ?>


        <!-- LOGOUT -->

        <div class="logout-area">

            <a href="/logout" class="btn btn-light">
                Logout 🎀
            </a>

        </div>


        <div class="footer">

            🎀 Made with love 💗 🎀

        </div>

    </div>

</div>

</body>
</html>