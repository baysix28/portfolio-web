# 👨‍💻 Crystiano Bayu Satya Alves - Personal Portfolio

A modern, responsive, and dynamic personal portfolio website built with the **Laravel** framework. This project showcases my professional experience, tech stack, certifications, and featured projects.

## ✨ Features

- **Modern UI/UX**: Clean and professional design with beautiful typography (*Syne* & *Plus Jakarta Sans*).
- **Dark Mode Support**: Built-in dark mode toggle that automatically adapts styling, text colors, and backgrounds.
- **Dynamic Animations**: 
  - Floating badges in the Hero section.
  - Infinite auto-scrolling marquee for the Tech Stack.
  - Smooth reveal animations using AOS (Animate On Scroll).
- **Vercel Ready**: Pre-configured with `vercel.json` and `api/index.php` for seamless Serverless deployment on Vercel via GitHub Continuous Deployment (CD).

## 🛠️ Tech Stack

- **Framework**: Laravel 11.x (PHP 8.x)
- **Frontend**: HTML5, Vanilla CSS3 (Custom Properties / CSS Variables), Vanilla JavaScript
- **Icons**: FontAwesome 6
- **Animations**: AOS Library
- **Deployment**: Vercel (Serverless PHP)

## 🚀 Getting Started (Local Development)

To run this project locally on your machine, follow these steps:

### Prerequisites
- PHP >= 8.2
- Composer

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/baysix28/portfolio-web.git
   cd portfolio-web
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Set up environment variables:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Run the local development server:**
   ```bash
   php artisan serve
   ```
   Open your browser and navigate to `http://localhost:8000`.

## ☁️ Deployment (Vercel)

This project is specially configured to be deployed easily on [Vercel](https://vercel.com) using the `vercel-php` runtime.

1. Push your code to your GitHub repository.
2. Create a new project in Vercel and import the repository.
3. In the Vercel **Environment Variables** settings, add a new variable:
   - `APP_KEY` (Copy the exact value from your local `.env` file).
4. Click **Deploy**. Vercel will automatically configure the routing using the provided `vercel.json`.

## 📬 Contact

- **GitHub**: [@baysix28](https://github.com/baysix28)
- **LinkedIn**: [Crystiano Bayu Satya Alves](https://www.linkedin.com/in/bayualves/)
- **Email**: [bayualves6126@gmail.com](mailto:bayualves6126@gmail.com)
