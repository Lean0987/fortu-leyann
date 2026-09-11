<h1>Products</h1>

<a href="/products/create">Add Product</a>

<?php if (!empty($products)): ?> 
    <?php foreach ($products as $product): ?> 
        <p> 
            <?= $product['product_name']; ?> 
            - ₱<?= $product['price']; ?>

            <a href="/products/edit/<?= $product['id']; ?>">Edit</a>

            <form method="POST" action="/products/delete/<?= $product['id']; ?>" style="display:inline;">
                <button type="submit">Delete</button>
            </form>
        </p> 
    <?php endforeach; ?> 
<?php else: ?> 
    <p>No products found.</p> 
<?php endif; ?>