<h1>Add Product</h1>

<form method="POST" action="/products/create">

    <label>Product Name:</label><br>
    <input type="text" name="product_name" required><br><br>

    <label>Description:</label><br>
    <textarea name="description" required></textarea><br><br>

    <label>Price:</label><br>
    <input type="number" name="price" step="0.01" required><br><br>

    <label>Quantity:</label><br>
    <input type="number" name="quantity" required><br><br>

    <button type="submit">Add Product</button>

</form>

<br>

<a href="/products">Back to Products</a>