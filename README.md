# Example App

This is an example Laravel application that demonstrates CRUD operations for products and pharmacies, as well as a search functionality for products.

## Requirements

- laravel 8.54
- PHP 7.3|^8.0
- Composer
- MySQL
## Installation

Follow these steps to set up the project on your local machine.

### Step 1: Clone the Repository

    git clone https://github.com/m7mda3yad/product_pharmacy_task.git
    cd product_pharmacy_task

Install dependencies:

        composer install

### Set up environment variables:

        cp .env.example .env

### Configure your .env file with the appropriate database and application settings.
Generate application key:

       
        php artisan key:generate
### Run migrations and seed the database:

       
        php artisan migrate --seed
        php artisan serve

###  Visit the application in your browser:

        http://localhost:8000/products


Run the Artisan command to test 

### "CLI command that takes product id and returns cheapest 5 pharmacies"

    php artisan products:search-cheapest productId

Please let me know if there are any issues or additional details required. I am happy to provide further assistance if needed.
Thank you for this opportunity. I look forward to your feedback.

Best regards,

Mohamed Ahmed
