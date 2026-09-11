<?php    
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');    
    
class ProductController extends Controller     
{     
    public function __construct()     
    {     
        parent::__construct();     

        $this->call->database();     
        $this->call->model('Product');     
        $this->call->library('session');

        // Check if user is logged in
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
    }     
     
    public function index()     
    {     
        $data['products'] = $this->Product->all();     
        $this->call->view('products/index', $data);     
    }    
    
    public function create()    
    {    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {    
            $data = [    
                'product_name' => $_POST['product_name'],    
                'description' => $_POST['description'],    
                'price' => $_POST['price'],    
                'quantity' => $_POST['quantity']    
            ];    
    
            $this->Product->insert($data);    
    
            header('Location: /products');   
            exit;   
        }    
    
        $this->call->view('products/create');    
    }  
  
    public function edit($id)  
    {  
        $product = $this->Product->find($id);  
  
        if (!$product) {  
            echo 'Product not found.';  
            return;  
        }  
  
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
            $data = [  
                'product_name' => $_POST['product_name'],  
                'description' => $_POST['description'],  
                'price' => $_POST['price'],  
                'quantity' => $_POST['quantity']  
            ];  
  
            $this->Product->update($id, $data);  
  
            header('Location: /products');  
            exit;  
        }  
  
        $this->call->view('products/edit', ['product' => $product]);  
    } 
 
    public function delete($id) 
    { 
        $this->Product->delete($id); 
 
        header('Location: /products'); 
        exit; 
    } 
}