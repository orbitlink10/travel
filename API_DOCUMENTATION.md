# Tiwi API Documentation

## Base URL
```
http://localhost:8000/api
```

## Authentication
All protected endpoints require a Bearer token in the Authorization header:
```
Authorization: Bearer {token}
```

---

## Authentication Endpoints

### 1. Register
**POST** `/register`

Create a new user account.

**Request Body:**
```json
{
  "name": "John Doe",
  "email": "john@example.com",
  "password": "password123",
  "password_confirmation": "password123",
  "role": "agent"
}
```

**Response (201):**
```json
{
  "success": true,
  "message": "User registered successfully",
  "data": {
    "id": 1,
    "name": "John Doe",
    "email": "john@example.com",
    "role": "agent",
    "created_at": "2024-05-04T10:00:00Z",
    "updated_at": "2024-05-04T10:00:00Z"
  }
}
```

---

### 2. Login
**POST** `/login`

Authenticate user and get API token.

**Request Body:**
```json
{
  "email": "john@example.com",
  "password": "password123"
}
```

**Response (200):**
```json
{
  "success": true,
  "message": "Login successful",
  "data": {
    "user": {
      "id": 1,
      "name": "John Doe",
      "email": "john@example.com",
      "role": "agent",
      "created_at": "2024-05-04T10:00:00Z"
    },
    "token": "abc123def456...xyz"
  }
}
```

---

### 3. Get Current User
**GET** `/me` (requires auth)

Get authenticated user details.

**Response (200):**
```json
{
  "success": true,
  "data": {
    "id": 1,
    "name": "John Doe",
    "email": "john@example.com",
    "role": "agent"
  }
}
```

---

### 4. Logout
**POST** `/logout` (requires auth)

Logout and invalidate API token.

**Response (200):**
```json
{
  "success": true,
  "message": "Logged out successfully"
}
```

---

## Client Endpoints

### 1. List All Clients
**GET** `/clients` (requires auth)

Get all clients for the authenticated user.

**Query Parameters:**
- None

**Response (200):**
```json
[
  {
    "id": 1,
    "name": "Alice Johnson",
    "email": "alice@example.com",
    "phone": "+1-555-0123",
    "preferences": { "notifications": true },
    "created_at": "2024-05-04T10:00:00Z"
  }
]
```

---

### 2. Create Client
**POST** `/clients` (requires auth)

Create a new client.

**Request Body:**
```json
{
  "name": "Alice Johnson",
  "email": "alice@example.com",
  "phone": "+1-555-0123",
  "preferences": {
    "notifications": true,
    "budget": 5000
  }
}
```

**Response (201):**
```json
{
  "success": true,
  "message": "Client created successfully",
  "data": {
    "id": 1,
    "name": "Alice Johnson",
    "email": "alice@example.com",
    "phone": "+1-555-0123",
    "preferences": {
      "notifications": true,
      "budget": 5000
    },
    "created_at": "2024-05-04T10:00:00Z"
  }
}
```

---

### 3. Get Client Details
**GET** `/clients/{id}` (requires auth)

Get specific client details.

**Response (200):**
```json
{
  "success": true,
  "data": {
    "id": 1,
    "name": "Alice Johnson",
    "email": "alice@example.com",
    "phone": "+1-555-0123",
    "preferences": { "notifications": true },
    "created_at": "2024-05-04T10:00:00Z"
  }
}
```

---

### 4. Update Client
**PUT** `/clients/{id}` (requires auth)

Update a client.

**Request Body:**
```json
{
  "name": "Alice Smith",
  "phone": "+1-555-0124"
}
```

**Response (200):**
```json
{
  "success": true,
  "message": "Client updated successfully",
  "data": {
    "id": 1,
    "name": "Alice Smith",
    "email": "alice@example.com",
    "phone": "+1-555-0124",
    "preferences": { "notifications": true }
  }
}
```

---

### 5. Delete Client
**DELETE** `/clients/{id}` (requires auth)

Delete a client.

**Response (200):**
```json
{
  "success": true,
  "message": "Client deleted successfully"
}
```

---

## Itinerary Endpoints

### 1. List All Itineraries
**GET** `/itineraries` (requires auth)

Get all itineraries for the authenticated user.

**Response (200):**
```json
[
  {
    "id": 1,
    "title": "Paris & London Trip",
    "description": "A week in Europe",
    "share_token": "550e8400-e29b-41d4-a716-446655440000",
    "start_date": "2024-06-01",
    "end_date": "2024-06-08",
    "status": "draft",
    "total_price": 5000.00,
    "client_id": 1,
    "days_count": 7,
    "created_at": "2024-05-04T10:00:00Z"
  }
]
```

---

### 2. Create Itinerary
**POST** `/itineraries` (requires auth)

Create a new itinerary.

**Request Body:**
```json
{
  "title": "Paris & London Trip",
  "description": "A week in Europe",
  "start_date": "2024-06-01",
  "end_date": "2024-06-08",
  "client_id": 1,
  "status": "draft",
  "auto_create_days": true,
  "notes": "Client prefers 4-star hotels"
}
```

**Response (201):**
```json
{
  "success": true,
  "message": "Itinerary created successfully",
  "data": {
    "id": 1,
    "title": "Paris & London Trip",
    "description": "A week in Europe",
    "share_token": "550e8400-e29b-41d4-a716-446655440000",
    "start_date": "2024-06-01",
    "end_date": "2024-06-08",
    "status": "draft",
    "total_price": 0.00,
    "client_id": 1,
    "days_count": 7,
    "created_at": "2024-05-04T10:00:00Z"
  }
}
```

---

### 3. Get Itinerary Details
**GET** `/itineraries/{id}` (requires auth)

Get specific itinerary with all days and items.

**Response (200):**
```json
{
  "success": true,
  "data": {
    "id": 1,
    "title": "Paris & London Trip",
    "description": "A week in Europe",
    "share_token": "550e8400-e29b-41d4-a716-446655440000",
    "start_date": "2024-06-01",
    "end_date": "2024-06-08",
    "status": "draft",
    "total_price": 5000.00,
    "client_id": 1,
    "days_count": 7,
    "created_at": "2024-05-04T10:00:00Z"
  },
  "days": [
    {
      "id": 1,
      "day_number": 1,
      "title": "Arrival in Paris",
      "description": "Flight and hotel check-in",
      "date": "2024-06-01",
      "items": [
        {
          "id": 1,
          "type": "hotel",
          "title": "Le Marais Boutique Hotel",
          "location": "Paris",
          "price": 150.00,
          "quantity": 1,
          "total_price": 150.00
        }
      ],
      "items_count": 1
    }
  ]
}
```

---

### 4. Update Itinerary
**PUT** `/itineraries/{id}` (requires auth)

Update an itinerary.

**Request Body:**
```json
{
  "title": "Paris, London & Amsterdam",
  "status": "sent"
}
```

**Response (200):**
```json
{
  "success": true,
  "message": "Itinerary updated successfully",
  "data": { ... }
}
```

---

### 5. Delete Itinerary
**DELETE** `/itineraries/{id}` (requires auth)

Delete an itinerary.

**Response (200):**
```json
{
  "success": true,
  "message": "Itinerary deleted successfully"
}
```

---

### 6. Get Share Link
**GET** `/itineraries/{id}/share-link` (requires auth)

Get the public share link for an itinerary.

**Response (200):**
```json
{
  "success": true,
  "share_link": "http://localhost:8000/api/share/550e8400-e29b-41d4-a716-446655440000",
  "share_token": "550e8400-e29b-41d4-a716-446655440000"
}
```

---

### 7. Regenerate Share Token
**POST** `/itineraries/{id}/regenerate-token` (requires auth)

Generate a new share token (invalidates previous link).

**Response (200):**
```json
{
  "success": true,
  "message": "Share token regenerated",
  "share_token": "new-550e8400-e29b-41d4-a716-446655440000"
}
```

---

## Itinerary Day Endpoints

### 1. Get All Days
**GET** `/itineraries/{itinerary_id}/days` (requires auth)

Get all days for an itinerary.

**Response (200):**
```json
[
  {
    "id": 1,
    "day_number": 1,
    "title": "Arrival in Paris",
    "description": "Flight and hotel check-in",
    "date": "2024-06-01",
    "items_count": 1
  }
]
```

---

### 2. Add Day to Itinerary
**POST** `/itineraries/{itinerary_id}/days` (requires auth)

Add a new day to itinerary.

**Request Body:**
```json
{
  "day_number": 2,
  "title": "Explore Paris",
  "description": "Sightseeing and museums",
  "date": "2024-06-02"
}
```

**Response (201):**
```json
{
  "success": true,
  "message": "Day added successfully",
  "data": {
    "id": 2,
    "day_number": 2,
    "title": "Explore Paris",
    "description": "Sightseeing and museums",
    "date": "2024-06-02",
    "items_count": 0
  }
}
```

---

## Itinerary Item Endpoints

### 1. Add Item to Day
**POST** `/days/{day_id}/items` (requires auth)

Add an item (hotel, activity, transport, etc.) to a day.

**Request Body:**
```json
{
  "type": "hotel",
  "title": "Le Marais Boutique Hotel",
  "description": "4-star luxury hotel",
  "location": "Paris",
  "time_start": "14:00",
  "time_end": "11:00",
  "price": 150.00,
  "quantity": 3,
  "notes": "Early check-in requested",
  "metadata": {
    "booking_ref": "BK123456",
    "website": "www.lemarais.com"
  }
}
```

**Response (201):**
```json
{
  "success": true,
  "message": "Item added successfully",
  "data": {
    "id": 1,
    "day_id": 1,
    "type": "hotel",
    "title": "Le Marais Boutique Hotel",
    "description": "4-star luxury hotel",
    "location": "Paris",
    "time_start": "14:00",
    "time_end": "11:00",
    "price": 150.00,
    "quantity": 3,
    "total_price": 450.00,
    "notes": "Early check-in requested",
    "metadata": { ... }
  }
}
```

---

### 2. Update Item
**PUT** `/items/{item_id}` (requires auth)

Update an item.

**Request Body:**
```json
{
  "price": 160.00,
  "quantity": 2
}
```

**Response (200):**
```json
{
  "success": true,
  "message": "Item updated successfully",
  "data": { ... }
}
```

---

### 3. Delete Item
**DELETE** `/items/{item_id}` (requires auth)

Delete an item.

**Response (200):**
```json
{
  "success": true,
  "message": "Item deleted successfully"
}
```

---

## Product (Content Library) Endpoints

### 1. List Products
**GET** `/products`

Get all active products.

**Query Parameters:**
- `type` - Filter by type (hotel, activity, destination, restaurant)
- `location` - Filter by location
- `search` - Search by name
- `page` - Pagination (default: 1)

**Example:**
```
GET /api/products?type=hotel&location=Paris&page=1
```

**Response (200):**
```json
[
  {
    "id": 1,
    "type": "hotel",
    "name": "Le Marais Boutique Hotel",
    "description": "Luxury boutique hotel in central Paris",
    "location": "Paris",
    "price": 150.00,
    "currency": "USD",
    "image_url": "https://example.com/image.jpg",
    "rating": 4.8,
    "reviews_count": 250,
    "website": "www.lemarais.com",
    "is_active": true
  }
]
```

---

### 2. Get Product Details
**GET** `/products/{id}`

Get specific product details.

**Response (200):**
```json
{
  "success": true,
  "data": {
    "id": 1,
    "type": "hotel",
    "name": "Le Marais Boutique Hotel",
    "description": "Luxury boutique hotel in central Paris",
    ...
  }
}
```

---

### 3. Get Products by Type
**GET** `/products/type/{type}`

Get all products of a specific type.

**Example:**
```
GET /api/products/type/hotel
GET /api/products/type/activity
```

---

### 4. Get Products by Location
**GET** `/products/location/{location}`

Get all products in a specific location.

**Example:**
```
GET /api/products/location/Paris
```

---

## Public Share Endpoints

### 1. View Public Itinerary
**GET** `/share/{share_token}`

View an itinerary via public share link (no authentication required).

**Response (200):**
```json
{
  "success": true,
  "data": {
    "id": 1,
    "title": "Paris & London Trip",
    "description": "A week in Europe",
    "start_date": "2024-06-01",
    "end_date": "2024-06-08",
    "status": "sent",
    "total_price": 5000.00,
    "client": {
      "id": 1,
      "name": "Alice Johnson",
      "email": "alice@example.com"
    },
    "days": [
      {
        "id": 1,
        "day_number": 1,
        "title": "Arrival in Paris",
        "items": [ ... ]
      }
    ]
  }
}
```

---

## Error Responses

### 401 Unauthorized
```json
{
  "success": false,
  "message": "Unauthenticated"
}
```

### 403 Forbidden
```json
{
  "success": false,
  "message": "This action is unauthorized."
}
```

### 404 Not Found
```json
{
  "success": false,
  "message": "Resource not found"
}
```

### 422 Validation Error
```json
{
  "success": false,
  "message": "Validation failed",
  "errors": {
    "title": ["The title field is required."],
    "email": ["The email must be a valid email address."]
  }
}
```

---

## Testing with cURL

### Register
```bash
curl -X POST http://localhost:8000/api/register \
  -H "Content-Type: application/json" \
  -d '{
    "name": "John Doe",
    "email": "john@example.com",
    "password": "password123",
    "password_confirmation": "password123"
  }'
```

### Login
```bash
curl -X POST http://localhost:8000/api/login \
  -H "Content-Type: application/json" \
  -d '{
    "email": "john@example.com",
    "password": "password123"
  }'
```

### Authenticated Request
```bash
curl -X GET http://localhost:8000/api/me \
  -H "Authorization: Bearer YOUR_TOKEN_HERE"
```

---

## Status Codes
- `200` - OK
- `201` - Created
- `400` - Bad Request
- `401` - Unauthorized
- `403` - Forbidden
- `404` - Not Found
- `422` - Unprocessable Entity
- `500` - Server Error

