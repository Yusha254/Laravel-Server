# Laravel API Backend
This project was built with Laravel version 4.5.1.

## Development Server

Run `php artisan serve` to start the development server.
Visit `http://127.0.0.1:8000/` to interact with the API.

## API Endpoints

`/api/login` - User login (JWT-based authentication).

`/api/customers` - Access customer data (protected endpoint).

`/api/products` - Access Product data.

## Database Setup

Run `php artisan migrate` to set up the database tables.
Use .env to configure database credentials.

## Running Tests

Run `php artisan test` to execute unit tests.

## Authentication
The API uses JWT for authentication. Make sure to include the token in the Authorization header when accessing protected routes.
