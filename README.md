# My Laravel Modular API Template: The "Not-Your-Average" Framework 😎

## ⚠️ Important: This is My Jam, but You Do You!

Welcome to my Laravel Modular API Template, crafted with love, sweat, and a sprinkle of caffeine-fueled madness. This structure is what I consider the comfiest way to build APIs, like slipping into your favorite pair of sweatpants. 😜 Feel free to adopt it, tweak it, or throw it out the window and dance to your own coding rhythm. No judgment here just good vibes and clean code!

## 🎉 Why This Template is Cooler Than a Polar Bear’s Toenails

Here’s what makes this template the bee’s knees for building scalable, maintainable APIs:

- **Layered Architecture:** Separates concerns like a pro chef slicing onions—clean, precise, and no tears! (Controllers, Services, Repositories, DTOs, Requests, Responses... you name it!)

- **Modular Design:** Think LEGO blocks for your code. Add, remove, or rearrange modules without breaking a sweat.

- **Swagger/OpenAPI Swagger:** Auto-generated API docs so you don’t have to explain your endpoints to your team like you’re teaching quantum physics to a goldfish. 🐠

- **Husky Pre-Commit Hooks:** Linting and formatting so your code stays prettier than a sunset selfie.

- **Feature Tests in Modules:** Tests live next to their modules, because nobody likes a long-distance relationship.

## 📂 Directory Structure: Where Everything Has a Home

Here’s the grand tour of the file structure. Imagine it as a tidy house where every module has its own room, and nobody leaves dishes in the sink. 🧼

```
app/
├── Common                  # The communal fridge—shared goodies for all modules
│   ├── Controllers         # Base controller, because even heroes need a foundation
│   │   └── Controller.php
│   ├── DTOs               # Data Transfer Objects, the neat little lunchboxes of data
│   │   └── PaginationDTO.php
│   ├── Docs               # Swagger/OpenAPI docs, because documentation is *sexy*
│   │   ├── Components
│   │   │   ├── BaseErrorResponse.php
│   │   │   ├── BaseSuccessResponse.php
│   │   │   ├── Errors     # Error responses for when things go *whoops*
│   │   │   │   ├── BadRequestResponse.php
│   │   │   │   ├── ForbiddenResponse.php
│   │   │   │   ├── InternalServerErrorResponse.php
│   │   │   │   ├── NotFoundResponse.php
│   │   │   │   ├── UnauthorizedResponse.php
│   │   │   │   └── ValidationFailedResponse.php
│   │   │   ├── Meta.php
│   │   │   └── Params
│   │   │       └── PaginationParams.php
│   │   ├── Schemas        # Your API’s blueprint, like architectural plans for a spaceship
│   │   │   └── Room.php
│   │   └── SwaggerDocs.php
│   ├── Repositories       # Where data fetching lives, like a librarian with superpowers
│   │   ├── Contracts
│   │   │   └── BaseRepositoryInterface.php
│   │   └── Eloquents
│   │       └── BaseRepository.php
│   ├── Requests           # Validate inputs like a bouncer at an exclusive club
│   │   ├── BaseFormRequest.php
│   │   └── PaginationRequest.php
│   ├── Responses          # Pretty JSON responses, served with a side of elegance
│   │   └── ApiResponse.php
│   └── Traits             # Reusable code snippets, because DRY is the way to fly
│       └── ApiResponseTrait.php
├── Modules                # The cool kids’ rooms—each module is its own mini-universe
│   ├── Auth              # Handles login, because nobody gets in without a VIP pass
│   └── Facility          # Example module, like a swanky hotel for your data
│       ├── Controllers
│       │   └── Api
│       │       └── v1
│       │           └── Room
│       │               └── RoomController.php
│       ├── DTOs
│       │   └── Room
│       │       └── CreateRoomDTO.php
│       ├── Models         # Eloquent models, the backbone of your data empire
│       │   └── Room.php
│       ├── Repositories
│       │   └── Eloquents
│       │       └── Room
│       │           └── RoomRepository.php
│       ├── Requests
│       │   └── Room
│       │       └── CreateRoomRequest.php
│       ├── Routes         # API routes, your app’s highway system
│       │   └── api.php
│       ├── Services       # Business logic, where the magic happens ✨
│       │   └── Room
│       │       └── RoomService.php
│       └── Tests          # Feature tests, because we don’t ship buggy code (right?)
│           └── Features
│               └── RoomTest.php
└── Providers             # Laravel’s behind-the-scenes crew
    ├── AppServiceProvider.php
    ├── AuthServiceProvider.php
    └── RepositoryServiceProvider.php
```

## Key Directories: The VIP Sections

- `app/Common`: The shared snack bar—stuff every module can munch on. 

- `app/Modules/{module_name}`: Where each module lives its best life, like a quirky Airbnb rental.

- `app/Providers`: The backstage crew making sure everything runs smoothly.

- `app/Console/Commands`: Custom Artisan commands, because who doesn’t love a good CLI trick?

## 🚀 Getting Started: From Zero to Hero in 5 Steps

Ready to launch this bad boy? Buckle up and follow these steps to get your API up and running faster than you can say “Laravel is awesome!”

1. Clone the Repo

Grab the code like it’s free pizza at a hackathon. 🍕

```bash
git clone https://github.com/vunky-himawan/laravel-modular-api-template.git
```

2. Install Dependencies

Get all the shiny packages with Composer. It’s like grocery shopping for your app.

```bash
cd laravel-modular-api-template
composer install
```

3. Set Up Your .env File

Copy the example, tweak it, and keep it secret like your grandma’s cookie recipe.

```bash
cp .env.example .env
```

4. Run Migrations

Set up your database tables like laying the foundation for a digital castle. 🏰

```bash
php artisan migrate
```

5. Create a New Module

Spin up a new module with a single command. It’s like magic, but with less wand-waving.

```bash
php artisan make:module {nama_module}
```

## 😄 Pro Tip: Have Fun!

This template is built to make your life easier, but don’t be afraid to add your own flair. Think of it as a recipe—you can follow it to the letter or throw in some extra spice to make it yours. Happy coding, and may your bugs be few and your coffee strong! ☕
