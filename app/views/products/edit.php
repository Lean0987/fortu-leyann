<h1>Edit Product</h1>

<form method="POST" action="/products/edit/<?= $product['id']; ?>">

    <label>Product Name:</label><br>
    <input 
        type="text" 
        name="product_name" 
        value="<?= htmlspecialchars($product['product_name']); ?>" 
        required
    ><br><br>

    <label>Description:</label><br>
    <textarea 
        name="description" 
        required
    ><?= htmlspecialchars($product['description']); ?></textarea><br><br>

    <label>Price:</label><br>
    <input 
        type="number" 
        name="price" 
        step="0.01" 
        value="<?= $product['price']; ?>" 
        required
    ><br><br>

    <label>Quantity:</label><br>
    <input 
        type="number" 
        name="quantity" 
        value="<?= $product['quantity']; ?>" 
        required
    ><br><br>

    <button type="submit">Update Product</button>

</form>

<br>

<a href="/products">Back to Products</a>