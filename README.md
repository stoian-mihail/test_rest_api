Instructions:
1. Download all files to your project folder
2. Run composer install 
3. Run npm install
4. php artisan key:generate
5. Create a database named test_api with user root and no password
6. Change the database name in the .env file to "test_api"
7. Run php artisan migrate:fresh --seed

Yous should now have a database with random products.

Available routes: 
*adding /api/ is required for laravel api routes using default settings
*the base path localhost may differ depending where you run the server

1. http://localhost/api/create-product
2. http://localhost/api/products
3. http://localhost/api/show-product/{Product}  -> where Product is the product id;
4. http://localhost/api/update-product/{Product}  -> where Product is the product id;
5. http://localhost/api/delete-product/{Product}  -> where Product is the product id;



