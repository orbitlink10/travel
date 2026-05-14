# Tiwi - Setup & Quick Start Guide

## Prerequisites
- PHP 8.2+
- MySQL 5.7+
- Composer
- XAMPP (or similar)

## Installation

### 1. Database Setup
Database is already created: `tiwi`

### 2. Verify Migrations
All migrations should already be run. To verify, check that these tables exist:
- users
- clients
- itineraries
- itinerary_days
- itinerary_items
- products
- personal_access_tokens

### 3. Verify Dependencies
All dependencies are installed via Composer.

## Running the Application

### Start Development Server
```bash
cd c:\xampp\htdocs\wetu
php artisan serve --host=0.0.0.0 --port=8000
```

Or with Apache in XAMPP (default):
```
http://localhost/wetu/public
```

### Test the Application

#### 1. Test Registration
```bash
curl -X POST http://localhost:8000/api/register \
  -H "Content-Type: application/json" \
  -d '{
    "name": "Test User",
    "email": "test@example.com",
    "password": "password123",
    "password_confirmation": "password123"
  }'
```

Response:
```json
{
  "success": true,
  "message": "User registered successfully",
  "data": {
    "id": 1,
    "name": "Test User",
    "email": "test@example.com",
    "role": "agent",
    "created_at": "2024-05-04T10:00:00Z"
  }
}
```

#### 2. Test Login
```bash
curl -X POST http://localhost:8000/api/login \
  -H "Content-Type: application/json" \
  -d '{
    "email": "test@example.com",
    "password": "password123"
  }'
```

Response:
```json
{
  "success": true,
  "message": "Login successful",
  "data": {
    "user": { ... },
    "token": "YOUR_API_TOKEN_HERE"
  }
}
```

#### 3. Test Authenticated Request
```bash
curl -X GET http://localhost:8000/api/me \
  -H "Authorization: Bearer YOUR_API_TOKEN_HERE"
```

#### 4. Create a Client
```bash
curl -X POST http://localhost:8000/api/clients \
  -H "Content-Type: application/json" \
  -H "Authorization: Bearer YOUR_API_TOKEN_HERE" \
  -d '{
    "name": "John Traveler",
    "email": "john@example.com",
    "phone": "+1-555-0123"
  }'
```

#### 5. Create an Itinerary
```bash
curl -X POST http://localhost:8000/api/itineraries \
  -H "Content-Type: application/json" \
  -H "Authorization: Bearer YOUR_API_TOKEN_HERE" \
  -d '{
    "title": "Europe Trip",
    "description": "2 weeks in Europe",
    "start_date": "2024-06-01",
    "end_date": "2024-06-14",
    "client_id": 1,
    "auto_create_days": true
  }'
```

#### 6. Add Item to Itinerary
```bash
curl -X POST http://localhost:8000/api/days/1/items \
  -H "Content-Type: application/json" \
  -H "Authorization: Bearer YOUR_API_TOKEN_HERE" \
  -d '{
    "type": "hotel",
    "title": "Hotel de Paris",
    "location": "Paris",
    "price": 150.00,
    "quantity": 2
  }'
```

## Project Structure

```
wetu/
├── app/
│   ├── Models/
│   │   ├── User.php
│   │   ├── Client.php
│   │   ├── Itinerary.php
│   │   ├── ItineraryDay.php
│   │   ├── ItineraryItem.php
│   │   ├── Product.php
│   │   └── ApiToken.php
│   ├── Services/
│   │   ├── AuthService.php
│   │   ├── ClientService.php
│   │   └── ItineraryService.php
│   ├── Http/
│   │   ├── Controllers/Api/
│   │   │   ├── AuthController.php
│   │   │   ├── ClientController.php
│   │   │   ├── ItineraryController.php
│   │   │   └── ProductController.php
│   │   ├── Requests/
│   │   │   ├── RegisterRequest.php
│   │   │   ├── LoginRequest.php
│   │   │   ├── ClientRequest.php
│   │   │   └── ItineraryRequest.php
│   │   ├── Resources/
│   │   │   ├── UserResource.php
│   │   │   ├── ClientResource.php
│   │   │   ├── ItineraryResource.php
│   │   │   ├── ItineraryDayResource.php
│   │   │   ├── ItineraryItemResource.php
│   │   │   └── ProductResource.php
│   │   └── Middleware/
│   │       └── AuthenticateWithApiToken.php
│   ├── Policies/
│   │   ├── ClientPolicy.php
│   │   └── ItineraryPolicy.php
│   └── Providers/
│       ├── AuthServiceProvider.php
│       └── AppServiceProvider.php
├── database/
│   └── migrations/ (10+ migrations)
├── routes/
│   ├── api.php
│   └── web.php
├── config/
├── storage/
└── public/
```

## Architecture Overview

### Layered Architecture
```
HTTP Request
    ↓
Route (routes/api.php)
    ↓
Controller (thin, delegates to service)
    ↓
Service (business logic)
    ↓
Model (Eloquent ORM, database operations)
    ↓
Database (MySQL)
```

### Key Components

1. **Controllers** - HTTP request handlers, validation delegation
2. **Services** - Business logic, complex operations
3. **Models** - Database entities with relationships
4. **Form Requests** - Input validation
5. **Resources** - JSON response formatting
6. **Policies** - Authorization rules
7. **Middleware** - Token authentication

## Key Features Implemented

✅ User registration and login with token-based auth
✅ Client management (CRUD operations)
✅ Itinerary management with days and items
✅ Automatic day creation from date range
✅ Total price calculation
✅ Shareable public itineraries via UUID token
✅ Product content library with filtering
✅ Authorization policies
✅ Input validation
✅ RESTful API structure

## Next Steps (Future Development)

- [ ] Frontend UI (Vue 3 + Inertia.js)
- [ ] PDF export of itineraries
- [ ] Email notifications to clients
- [ ] Payment integration (Stripe)
- [ ] Team collaboration features
- [ ] Advanced filtering and search
- [ ] Real-time updates (WebSockets)
- [ ] Mobile app
- [ ] Analytics dashboard
- [ ] Multi-language support

## Deployment

### For Production:
1. Update `.env` with production database
2. Set `APP_DEBUG=false`
3. Generate production APP_KEY: `php artisan key:generate`
4. Run migrations: `php artisan migrate --force`
5. Optimize: `php artisan optimize:clear && php artisan config:cache`
6. Use a production web server (Nginx/Apache)

## Support & Issues

For issues or questions, refer to:
- [API Documentation](API_DOCUMENTATION.md)
- [Tiwi Documentation](TIWI_DOCUMENTATION.md)
- Laravel Documentation: https://laravel.com/docs

## License

MIT License - 2024

