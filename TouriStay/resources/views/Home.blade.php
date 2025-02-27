<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hébergements - Trouvez votre prochain séjour</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'airbnb': '#FF385C',
                        'airbnb-dark': '#E00B41',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-white text-gray-900 font-sans">
    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white border-b border-gray-200">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <svg class="h-8 w-8 text-airbnb" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 2C14.5 2 16.5 4 16.5 6.5C16.5 9 15 11 13 13C12.5 13.5 12 13.5 11.5 13C9.5 11 8 9 8 6.5C8 4 10 2 12 2M12 0C9 0 6 2.5 6 6.5C6 10 8 12.5 10.5 15C11 15.5 12 16 12.5 15.5C15 13 17 10.5 17 6.5C17 2.5 15 0 12 0Z" />
                    </svg>
                    <span class="ml-2 text-airbnb font-bold text-xl">airbnb</span>
                </div>

                <!-- User Menu -->
                <div class="flex items-center space-x-4">
                    <div class="hidden md:block">
                        <button class="py-2 px-4 text-sm font-medium rounded-full hover:bg-gray-100">
                            Mettre mon logement sur Airbnb
                        </button>
                    </div>
                    <button class="p-2 rounded-full hover:bg-gray-100">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 10a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z"></path>
                        </svg>
                    </button>
                    <div
                        class="flex items-center border border-gray-300 rounded-full p-2 space-x-2 hover:shadow-md transition-shadow">
                        <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg class="h-6 w-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 max-w-7xl py-6">
        <!-- Search Bar -->
        <div class="relative mb-8">
            <div
                class="flex items-center justify-between bg-white rounded-full border border-gray-300 shadow-lg hover:shadow-xl transition-shadow">
                <div class="flex-grow flex items-center">
                    <div class="py-3  px-8 ">
                        <div class="text-sm font-medium">Destination</div>
                        <input type="text" placeholder="Où souhaitez-vous aller ?"
                            class="w-full outline-none text-gray-600">
                    </div>
                </div>
                <button
                    class="bg-airbnb hover:bg-airbnb-dark text-white p-4 m-2 rounded-full flex items-center justify-center transition-colors">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <span class="ml-2 font-medium">Rechercher</span>
                </button>
            </div>
        </div>

        <!-- Filters -->
        <div class="overflow-x-auto pb-4 mb-8">
            <div class="flex space-x-4">
                <button
                    class="px-4 py-2 text-sm rounded-full border border-gray-300 hover:bg-gray-100 flex items-center transition-colors">
                    <span>Prix</span>
                    <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <button
                    class="px-4 py-2 text-sm rounded-full border border-gray-300 hover:bg-gray-100 flex items-center transition-colors">
                    <span>Type de logement</span>
                    <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <button
                    class="px-4 py-2 text-sm rounded-full border border-gray-300 hover:bg-gray-100 transition-colors">
                    Vue sur la mer
                </button>
                <button
                    class="px-4 py-2 text-sm rounded-full border border-gray-300 hover:bg-gray-100 transition-colors">
                    Piscine
                </button>
                <button
                    class="px-4 py-2 text-sm rounded-full border border-gray-300 hover:bg-gray-100 transition-colors">
                    Climatisation
                </button>
                <button
                    class="px-4 py-2 text-sm rounded-full border border-gray-300 hover:bg-gray-100 transition-colors">
                    WiFi
                </button>
                <button
                    class="px-4 py-2 text-sm rounded-full border border-gray-300 hover:bg-gray-100 transition-colors">
                    Cuisine
                </button>
                <button
                    class="px-4 py-2 text-sm rounded-full border border-gray-300 hover:bg-gray-100 transition-colors">
                    Parking gratuit
                </button>
                <button
                    class="px-4 py-2 text-sm rounded-full border border-gray-300 hover:bg-gray-100 transition-colors">
                    Animaux acceptés
                </button>
                <button
                    class="px-4 py-2 text-sm rounded-full border border-gray-300 bg-gray-100 flex items-center transition-colors">
                    <span>Tous les filtres</span>
                    <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Properties Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-6">
            <!-- Property Card 1 -->
            <!-- Carte de prévisualisation-->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <img src="/api/placeholder/800/400" alt="Aperçu de la propriété" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-semibold">Villa avec vue sur mer</h3>
                            <p class="text-gray-500">Paris, France</p>
                        </div>
                        <div class="text-2xl font-bold text-red-600">150 €<span class="text-sm text-gray-500">/nuit</span></div>
                    </div>

                    <div class="mt-4">
                        <p class="text-gray-600">Description détaillée de la propriété...</p>
                    </div>

                    <div class="mt-4 flex space-x-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span>2 chambres</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>1 salle de bain</span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4 class="font-medium mb-2">Équipements</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">WiFi</span>
                            <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">Climatisation</span>
                            <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">Piscine</span>
                            <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">Parking</span>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <button class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                            Voir les détails
                        </button>
                    </div>
                </div>
            </div> 

            <!-- Property Card 2 -->
            <!-- Carte de prévisualisation-->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <img src="/api/placeholder/800/400" alt="Aperçu de la propriété" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-semibold">Villa avec vue sur mer</h3>
                            <p class="text-gray-500">Paris, France</p>
                        </div>
                        <div class="text-2xl font-bold text-red-600">150 €<span class="text-sm text-gray-500">/nuit</span></div>
                    </div>

                    <div class="mt-4">
                        <p class="text-gray-600">Description détaillée de la propriété...</p>
                    </div>

                    <div class="mt-4 flex space-x-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span>2 chambres</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>1 salle de bain</span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4 class="font-medium mb-2">Équipements</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">WiFi</span>
                            <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">Climatisation</span>
                            <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">Piscine</span>
                            <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">Parking</span>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <button class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                            Voir les détails
                        </button>
                    </div>
                </div>
            </div> 

            <!-- Property Card 3 -->
            <!-- Carte de prévisualisation -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <img src="/api/placeholder/800/400" alt="Aperçu de la propriété" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-semibold">Villa avec vue sur mer</h3>
                            <p class="text-gray-500">Paris, France</p>
                        </div>
                        <div class="text-2xl font-bold text-red-600">150 €<span class="text-sm text-gray-500">/nuit</span></div>
                    </div>

                    <div class="mt-4">
                        <p class="text-gray-600">Description détaillée de la propriété...</p>
                    </div>

                    <div class="mt-4 flex space-x-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span>2 chambres</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>1 salle de bain</span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4 class="font-medium mb-2">Équipements</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">WiFi</span>
                            <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">Climatisation</span>
                            <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">Piscine</span>
                            <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">Parking</span>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <button class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                            Voir les détails
                        </button>
                    </div>
                </div>
            </div> 

            <!-- Property Card 4 -->
            
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <img src="/api/placeholder/800/400" alt="Aperçu de la propriété" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-semibold">Villa avec vue sur mer</h3>
                            <p class="text-gray-500">Paris, France</p>
                        </div>
                        <div class="text-2xl font-bold text-red-600">150 €<span
                                class="text-sm text-gray-500">/nuit</span></div>
                    </div>

                    <div class="mt-4">
                        <p class="text-gray-600">Description détaillée de la propriété...</p>
                    </div>

                    <div class="mt-4 flex space-x-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span>2 chambres</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-500 mr-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span>1 salle de bain</span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4 class="font-medium mb-2">Équipements</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">WiFi</span>
                            <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">Climatisation</span>
                            <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">Piscine</span>
                            <span class="px-2 py-1 bg-gray-100 rounded-full text-sm">Parking</span>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <button class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                            Voir les détails
                        </button>
                    </div>
                </div>
            </div> -->
        </div>
    </main>
</body>

</html>