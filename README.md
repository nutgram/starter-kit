# Nutgram Starter Kit

This is a lightweight starter kit for building Telegram bots using the [Nutgram](https://nutgram.dev) PHP framework.

## Features

- **Nutgram Framework**: High-performance Telegram Bot framework.
- **Environment Configuration**: Easy management of environment variables with `phpdotenv`.
- **Caching**: PSR-16 cache support out of the box.
- **Testing**: Ready-to-use testing environment with [Pest](https://pestphp.com/).
- **Structured**: Organized directory structure for Commands and Conversations.

## Requirements

- PHP 8.2 or higher
- Composer

## Usage

1. **Create the project**:
   ```bash
   composer create-project nutgram/starter-kit my-telegram-bot
   cd my-telegram-bot
   ```

2. **Install dependencies**:
   ```bash
   composer install
   ```

3. **Configure the environment**:
   Copy the example environment file and add your Telegram Bot token:
   ```bash
   cp .env.example .env
   ```
   Edit `.env` and set your `TOKEN`:
   ```env
   TOKEN=your_telegram_bot_token_here
   ```

## Usage

### Running the Bot

#### Polling Mode
To run the bot in polling mode (ideal for development), execute:
```bash
php bot.php
```

#### Webhook Mode
To use the webhook mode, point your web server's document root to the `public/` directory. Ensure your server is accessible via HTTPS.

Finally, you need to register your webhook URL with Telegram. You can do this by making an HTTP request (e.g., using `curl`) to the following address:
```bash
curl "https://api.telegram.org/botTOKEN/setWebhook?secret_token=WEBHOOK_TOKEN&url=https://YOUR_DOMAIN"
```
Replace:
- `WEBHOOK_TOKEN` with the same value you used in your `.env` file
- `TOKEN` with the same value you used in your `.env` file
- `https://YOUR_DOMAIN` with your actual webhook URL.

### Project Structure
- `src/routes.php`: Register your commands, conversations, and handlers.
- `src/bootstrap.php`: Bot initialization and configuration.
- `public/index.php`: Entry point for both polling and webhook.
- `tests/`: Feature and unit tests.

### Running Tests

You can run the tests using Pest:
```bash
composer test
```

## License

This project is open-sourced software licensed under the [MIT license](LICENSE.md).
