# Tiwi - Travel Itinerary SaaS Platform

## Project Overview
Tiwi is a Laravel-based SaaS application for travel agencies to create, manage, and share travel itineraries. Similar to Wetu, Tourwriter, and Travefy.

## Tech Stack
- **Backend**: Laravel 12 (PHP)
- **Frontend**: Vue 3 (to be integrated with Inertia.js)
- **Database**: MySQL 5.7+
- **Authentication**: Laravel Sanctum
- **Queue**: Redis (optional)
- **Storage**: Local/S3 compatible

## Project Structure

```
wetu/
├── app/
│   ├── Models/
│   │   ├── User.php (with role: admin/agent)
│   │   ├── Client.php (traveler management)
│   │   ├── Itinerary.php (main itinerary)
│   │   ├── ItineraryDay.php (daily breakdown)
│   │   ├── ItineraryItem.php (line items: hotels, activities, etc)
│   │   └── Product.php (content library)
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Api/
│   │   │   │   ├── AuthController.php
│   │   │   │   ├── ClientController.php
│   │   │   │   ├── ItineraryController.php
│   │   │   │   └── ProductController.php
│   │   ├── Requests/
│   │   └── Resources/
│   └── Services/
├── database/
│   ├── migrations/ (6 core tables)
│   └── seeders/
├── routes/
│   └── api.php
└── README.md

```

## Database Schema

### Users
- id (PK)
- name
- email (unique)
- password (hashed)
- role (enum: admin, agent)
- email_verified_at (nullable)
- timestamps

### Clients
- id (PK)
- user_id (FK → users)
- name
- email (unique)
- phone (nullable)
- preferences (JSON)
- timestamps

### Itineraries
- id (PK)
- user_id (FK → users)
- client_id (FK → clients, nullable)
- share_token (UUID, unique)
- title
- description (text)
- start_date
- end_date
- status (enum: draft, sent, archived)
- total_price (decimal)
- notes (text)
- timestamps

### ItineraryDays
- id (PK)
- itinerary_id (FK → itineraries)
- day_number (int, unique with itinerary_id)
- title (nullable)
- description (nullable)
- date (nullable)
- timestamps

### ItineraryItems
- id (PK)
- itinerary_day_id (FK → itinerary_days)
- type (string: hotel, activity, transport, meal)
- title
- description (nullable)
- location (nullable)
- time_start (time)
- time_end (time)
- price (decimal, nullable)
- quantity (int)
- notes (text)
- metadata (JSON)
- timestamps

### Products (Content Library)
- id (PK)
- type (string: hotel, activity, destination, restaurant)
- name
- description (text)
- location
- price (decimal)
- currency (default: USD)
- image_url
- media_urls (JSON array)
- amenities (text)
- website (URL)
- email
- phone
- rating (decimal 3,2)
- reviews_count (int)
- metadata (JSON)
- is_active (boolean)
- timestamps

## Eloquent Model Relationships

```
User
  ├── hasMany(Client)
  ├── hasMany(Itinerary)

Client
  ├── belongsTo(User)
  ├── hasMany(Itinerary)

Itinerary
  ├── belongsTo(User)
  ├── belongsTo(Client)
  ├── hasMany(ItineraryDay)
  ├── hasManyThrough(ItineraryItem, ItineraryDay)

ItineraryDay
  ├── belongsTo(Itinerary)
  ├── hasMany(ItineraryItem)

ItineraryItem
  ├── belongsTo(ItineraryDay)

Product (standalone)
  ├── scopes: active(), byType(), byLocation()
```

## Planned API Endpoints

### Authentication
- POST `/api/register` - Register new agent
- POST `/api/login` - Login
- POST `/api/logout` - Logout

### Clients
- GET `/api/clients` - List all clients for user
- POST `/api/clients` - Create new client
- GET `/api/clients/{id}` - Get client details
- PUT `/api/clients/{id}` - Update client
- DELETE `/api/clients/{id}` - Delete client

### Itineraries
- GET `/api/itineraries` - List all itineraries
- POST `/api/itineraries` - Create new itinerary
- GET `/api/itineraries/{id}` - Get itinerary details
- PUT `/api/itineraries/{id}` - Update itinerary
- DELETE `/api/itineraries/{id}` - Delete itinerary
- GET `/api/itineraries/{id}/days` - Get all days for itinerary
- GET `/share/{share_token}` - Public itinerary view (no auth required)

### Itinerary Days
- POST `/api/itineraries/{id}/days` - Add day to itinerary
- PUT `/api/days/{id}` - Update day
- DELETE `/api/days/{id}` - Delete day

### Itinerary Items
- POST `/api/days/{id}/items` - Add item to day
- PUT `/api/items/{id}` - Update item
- DELETE `/api/items/{id}` - Delete item

### Products (Content Library)
- GET `/api/products` - List products (with filters: type, location)
- GET `/api/products/{id}` - Get product details

## Setup Instructions

1. **Database Setup**
   ```bash
   # Create database (manually or via phpMyAdmin)
   mysql -u root -p -e "CREATE DATABASE tiwi;"
   ```

2. **Run Migrations**
   ```bash
   cd c:\xampp\htdocs\wetu
   php artisan migrate
   ```

3. **Create Admin User (later)**
   ```bash
   php artisan tinker
   # Create user...
   ```

4. **Run Development Server**
   ```bash
   php artisan serve --host=0.0.0.0 --port=8000
   ```

## Architecture Principles

- **Clean Architecture**: Controllers (thin) → Services → Models
- **RESTful API**: Standard HTTP methods and status codes
- **Validation**: Form Requests for all inputs
- **Resources**: API Resources for consistent JSON responses
- **Policies**: Authorization with Laravel Policies
- **Eloquent ORM**: Direct ORM usage (no separate repository layer for MVP)

## Status
- ✅ Project initialized
- ✅ Migrations created
- ✅ Models with relationships created
- ⏳ Next: Authentication setup and API controllers

