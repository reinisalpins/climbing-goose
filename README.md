# Setup Guide

## Requirements
- Docker
- Git

## Installation

1. Clone the repository:
```bash
git clone https://github.com/reinisalpins/climbing-goose.git
cd climbing-goose
```

2. Make the start script executable:
```bash
chmod +x start.sh
```

3. Run the start script:
```bash
./start.sh
```

The script will:
- Install composer dependencies
- Create .env file
- Create SQLite database
- Start Docker containers
- Generate application key
- Run migrations and seeders
- Install and build frontend assets

Once completed, the application will be available at http://localhost
