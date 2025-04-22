<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовое задание - Адаптивный лендинг</title>


    <?php wp_head(); ?>



    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
        .swiper-pagination-bullet {
            background: white !important;
            opacity: 0.7 !important;
        }
        .swiper-pagination-bullet-active {
            background: #3b82f6 !important;
            opacity: 1 !important;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-blue-600">Logo</div>
            <nav class="hidden md:block">
                <ul class="flex space-x-6">
                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Главная</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600">О нас</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Услуги</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Контакты</a></li>
                </ul>
            </nav>
            <button class="md:hidden text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </header>