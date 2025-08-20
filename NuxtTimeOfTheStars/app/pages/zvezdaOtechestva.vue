<template>
    <div class="min-h-screen bg-gray-900 text-white overflow-x-hidden">
        <Header />

        <!-- Tournament Header -->
        <section class="relative overflow-hidden">
            <div
                class="absolute inset-0 bg-gradient-to-br from-primary-blue/20 to-primary-red/20"
            ></div>
            <div class="gradient-bg py-20 px-4 relative">
                <div class="max-w-6xl mx-auto text-center">
                    <div class="flex justify-center mb-6">
                        <img
                            class="w-60 h-70"
                            src="/zvezdalogo.webp"
                            alt="Zvezda Logo"
                        />
                    </div>

                    <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white">
                        Звезда Отечества
                    </h1>
                    <p class="text-xl text-white/90 mb-8">
                        Чемпионат среди любительских спорткоманд
                    </p>
                    <div
                        class="inline-flex items-center gap-2 bg-blue-600/20 backdrop-blur-sm px-6 py-3 rounded-full border border-blue-500/30"
                    >
                        <div
                            class="w-2 h-2 bg-blue-400 rounded-full animate-pulse"
                        ></div>
                        <span class="text-white font-semibold">
                            Плей-офф в процессе
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tournament Stats -->
        <section class="py-8 sm:py-12 md:py-16 px-4 bg-gray-800">
            <div class="max-w-6xl mx-auto">
                <div
                    class="grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-6 md:gap-8 text-center"
                >
                    <!-- Команды -->
                    <div class="space-y-1 sm:space-y-2 group p-3 sm:p-0">
                        <div
                            class="text-3xl sm:text-4xl md:text-5xl group-hover:scale-110 transition-transform duration-300"
                        >
                            👥
                        </div>
                        <div
                            class="text-2xl sm:text-3xl md:text-4xl font-bold text-gradient"
                        >
                            8
                        </div>
                        <div class="text-gray-300 text-sm sm:text-base">
                            Команд
                        </div>
                    </div>

                    <!-- Матчи -->
                    <div class="space-y-1 sm:space-y-2 group p-3 sm:p-0">
                        <div
                            class="text-3xl sm:text-4xl md:text-5xl group-hover:scale-110 transition-transform duration-300"
                        >
                            🏒
                        </div>
                        <div
                            class="text-2xl sm:text-3xl md:text-4xl font-bold text-gradient"
                        >
                            112
                        </div>
                        <div class="text-gray-300 text-sm sm:text-base">
                            Матчей
                        </div>
                    </div>

                    <!-- Голы -->
                    <div class="space-y-1 sm:space-y-2 group p-3 sm:p-0">
                        <div
                            class="text-3xl sm:text-4xl md:text-5xl group-hover:scale-110 transition-transform duration-300"
                        >
                            ⚽
                        </div>
                        <div
                            class="text-2xl sm:text-3xl md:text-4xl font-bold text-gradient"
                        >
                            756
                        </div>
                        <div class="text-gray-300 text-sm sm:text-base">
                            Голов
                        </div>
                    </div>

                    <!-- Плей-офф -->
                    <div class="space-y-1 sm:space-y-2 group p-3 sm:p-0">
                        <div
                            class="text-3xl sm:text-4xl md:text-5xl group-hover:scale-110 transition-transform duration-300"
                        >
                            🏆
                        </div>
                        <div
                            class="text-2xl sm:text-3xl md:text-4xl font-bold text-gradient"
                        >
                            4
                        </div>
                        <div class="text-gray-300 text-sm sm:text-base">
                            В плей-офф
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Live Match Alert -->
        <section
            class="py-6 sm:py-8 px-4 bg-red-900/20 border-y border-red-500/30"
        >
            <div class="max-w-6xl mx-auto">
                <div
                    class="bg-red-900/30 rounded-lg sm:rounded-xl p-4 sm:p-6 border border-red-500/30"
                >
                    <!-- Верхняя строка (статус и дата) -->
                    <div
                        class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 sm:gap-4 mb-4 sm:mb-0"
                    >
                        <div class="flex items-center gap-2 sm:gap-4">
                            <div class="flex items-center gap-2">
                                <div
                                    class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full animate-pulse"
                                ></div>
                                <span
                                    class="text-red-400 font-semibold text-sm sm:text-base"
                                >
                                    ФИНАЛ СЕГОДНЯ
                                </span>
                            </div>
                            <div class="text-white text-sm sm:text-base">
                                18.04.2025 • 20:00
                            </div>
                        </div>
                    </div>

                    <!-- Блок с командами -->
                    <div
                        class="flex flex-col sm:flex-row items-center justify-between gap-4 sm:gap-6"
                    >
                        <!-- Команда 1 -->
                        <div
                            class="flex items-center gap-2 sm:gap-3 w-full sm:w-auto"
                        >
                            <div
                                class="w-8 h-8 sm:w-10 sm:h-10 relative flex-shrink-0"
                            >
                                <img
                                    src="/photo_53844715688281.png (1).webp"
                                    alt="ХК Зубр"
                                    class="object-contain rounded-full w-full h-full"
                                />
                            </div>
                            <span
                                class="font-medium text-sm sm:text-base truncate"
                                >ХК "Зубр"</span
                            >
                        </div>

                        <!-- VS (центрируется на мобильных) -->
                        <div
                            class="text-xl sm:text-2xl font-bold text-white px-2 sm:px-0"
                        >
                            VS
                        </div>

                        <!-- Команда 2 -->
                        <div
                            class="flex items-center gap-2 sm:gap-3 w-full sm:w-auto justify-end"
                        >
                            <span
                                class="font-medium text-sm sm:text-base truncate"
                                >ХК "Локомотив"</span
                            >
                            <div
                                class="w-8 h-8 sm:w-10 sm:h-10 relative flex-shrink-0"
                            >
                                <img
                                    src="/photo.png"
                                    alt="ХК Локомотив"
                                    class="object-contain rounded-full w-full h-full"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Navigation Tabs -->
        <section class="py-8 px-4 bg-gray-800 border-b border-gray-700">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-wrap justify-center gap-4">
                    <button
                        class="bg-primary-blue text-white px-6 py-3 rounded-xl font-semibold shadow-lg"
                    >
                        👥 Участники
                    </button>
                    <button
                        class="bg-gray-700 text-gray-300 px-6 py-3 rounded-xl font-semibold hover:bg-gray-600 transition-colors"
                    >
                        🏆 Плей-офф
                    </button>
                    <button
                        class="bg-gray-700 text-gray-300 px-6 py-3 rounded-xl font-semibold hover:bg-gray-600 transition-colors"
                    >
                        📊 Таблица
                    </button>
                    <button
                        class="bg-gray-700 text-gray-300 px-6 py-3 rounded-xl font-semibold hover:bg-gray-600 transition-colors"
                    >
                        🏒 Матчи
                    </button>
                </div>
            </div>
        </section>

        <!-- Participants -->
        <section class="py-16 px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold mb-8 text-center">
                    👥 Участники чемпионата
                </h2>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div
                        v-for="(team, index) in teams"
                        :key="index"
                        class="bg-gray-800 rounded-xl p-6 card-hover border border-gray-700"
                    >
                        <div class="text-center">
                            <div class="w-16 h-16 relative mx-auto mb-4">
                                <img
                                    :src="team.logo"
                                    :alt="team.name"
                                    class="object-contain rounded-full w-full h-full"
                                />
                            </div>
                            <h3 class="text-lg font-semibold mb-1">
                                {{ team.name }}
                            </h3>
                            <p class="text-gray-400 text-sm mb-4">
                                {{ team.city }}
                            </p>

                            <div class="grid grid-cols-3 gap-2 text-center">
                                <div>
                                    <div
                                        class="text-lg font-bold text-green-400"
                                    >
                                        {{ team.wins }}
                                    </div>
                                    <div class="text-xs text-gray-400">П</div>
                                </div>
                                <div>
                                    <div class="text-lg font-bold text-red-400">
                                        {{ team.losses }}
                                    </div>
                                    <div class="text-xs text-gray-400">Пор</div>
                                </div>
                                <div>
                                    <div
                                        class="text-lg font-bold text-accent-blue"
                                    >
                                        {{ team.points }}
                                    </div>
                                    <div class="text-xs text-gray-400">
                                        Очки
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Playoff Bracket -->
        <section class="py-8 sm:py-12 md:py-16 px-3 sm:px-4 bg-gray-800">
            <div class="max-w-6xl mx-auto">
                <h2
                    class="text-2xl sm:text-3xl font-bold mb-6 sm:mb-8 text-center"
                >
                    🏆 Плей-офф
                </h2>

                <div class="space-y-8 sm:space-y-12">
                    <!-- Final -->
                    <div class="text-center">
                        <h3
                            class="text-xl sm:text-2xl font-semibold mb-4 sm:mb-6 text-gradient"
                        >
                            ФИНАЛ
                        </h3>
                        <div
                            class="bg-gray-700 rounded-lg sm:rounded-xl p-4 sm:p-6 md:p-8 max-w-lg mx-auto border-2 border-yellow-500/30"
                        >
                            <div
                                class="text-xs sm:text-sm text-gray-400 mb-3 sm:mb-4"
                            >
                                18.04.2025 • 20:00
                            </div>

                            <!-- Вертикальное расположение на мобильных -->
                            <div
                                class="flex flex-col items-center gap-3 sm:flex-row sm:justify-between sm:gap-4"
                            >
                                <!-- Команда 1 -->
                                <div
                                    class="flex flex-col items-center sm:items-start sm:flex-row sm:gap-3"
                                >
                                    <div
                                        class="w-12 h-12 sm:w-14 sm:h-14 relative mb-2 sm:mb-0"
                                    >
                                        <img
                                            src="/photo_53844715688281.png (1).webp"
                                            alt="ХК Зубр"
                                            class="object-contain rounded-full w-full h-full"
                                        />
                                    </div>
                                    <div class="text-center sm:text-left">
                                        <div
                                            class="font-semibold text-sm sm:text-base"
                                        >
                                            ХК "Зубр"
                                        </div>
                                        <div
                                            class="text-xs sm:text-sm text-gray-400"
                                        >
                                            Полуфинал: 4-3
                                        </div>
                                    </div>
                                </div>

                                <!-- Счет (центрирован на мобильных) -->
                                <div
                                    class="bg-yellow-600 px-4 py-2 rounded-lg text-white font-bold text-lg sm:text-xl my-2 sm:my-0"
                                >
                                    VS
                                </div>

                                <!-- Команда 2 -->
                                <div
                                    class="flex flex-col items-center sm:items-end sm:flex-row-reverse sm:gap-3"
                                >
                                    <div
                                        class="w-12 h-12 sm:w-14 sm:h-14 relative mb-2 sm:mb-0"
                                    >
                                        <img
                                            src="/photo.png"
                                            alt="ХК Локомотив"
                                            class="object-contain rounded-full w-full h-full"
                                        />
                                    </div>
                                    <div class="text-center sm:text-right">
                                        <div
                                            class="font-semibold text-sm sm:text-base"
                                        >
                                            ХК "Локомотив"
                                        </div>
                                        <div
                                            class="text-xs sm:text-sm text-gray-400"
                                        >
                                            Полуфинал: 3-4
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Third Place -->
                    <div class="text-center">
                        <h3
                            class="text-lg sm:text-xl font-semibold mb-4 sm:mb-6 text-accent-red"
                        >
                            Матч за 3 место
                        </h3>
                        <div
                            class="bg-gray-700 rounded-lg sm:rounded-xl p-4 sm:p-6 max-w-lg mx-auto"
                        >
                            <div
                                class="text-xs sm:text-sm text-gray-400 mb-3 sm:mb-4"
                            >
                                16.04.2025 • 20:30
                            </div>

                            <div
                                class="flex flex-col items-center gap-3 sm:flex-row sm:justify-between"
                            >
                                <!-- Команда 1 -->
                                <div
                                    class="flex flex-col items-center sm:flex-row sm:gap-3"
                                >
                                    <div
                                        class="w-10 h-10 sm:w-12 sm:h-12 relative mb-2 sm:mb-0"
                                    >
                                        <img
                                            src="/photo_53844715688281.png (4).webp"
                                            alt="ХК Торпедо"
                                            class="object-contain rounded-full w-full h-full"
                                        />
                                    </div>
                                    <div class="text-center sm:text-left">
                                        ХК "Торпедо"
                                    </div>
                                </div>

                                <!-- Счет -->
                                <div
                                    class="bg-green-600 px-4 py-2 rounded text-white font-bold text-lg my-2 sm:my-0"
                                >
                                    6-4
                                </div>

                                <!-- Команда 2 -->
                                <div
                                    class="flex flex-col items-center sm:flex-row-reverse sm:gap-3"
                                >
                                    <div
                                        class="w-10 h-10 sm:w-12 sm:h-12 relative mb-2 sm:mb-0"
                                    >
                                        <img
                                            src="/FGFGF (1).png"
                                            alt="ХК Вымпел-k"
                                            class="object-contain rounded-full w-full h-full"
                                        />
                                    </div>
                                    <div class="text-center sm:text-right">
                                        ХК "Вымпел-k"
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Semifinals -->
                    <div class="text-center">
                        <h3
                            class="text-lg sm:text-xl font-semibold mb-4 sm:mb-6"
                        >
                            Полуфинал
                        </h3>
                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 max-w-4xl mx-auto"
                        >
                            <!-- Матч 1 -->
                            <div
                                class="bg-gray-700 rounded-lg sm:rounded-xl p-4 sm:p-6"
                            >
                                <div
                                    class="text-xs sm:text-sm text-gray-400 mb-3 sm:mb-4"
                                >
                                    13.04.2025 • 19:30
                                </div>

                                <div
                                    class="flex flex-col items-center gap-3 sm:flex-row sm:justify-between"
                                >
                                    <!-- Команда 1 -->
                                    <div
                                        class="flex flex-col items-center sm:flex-row sm:gap-2"
                                    >
                                        <div
                                            class="w-8 h-8 sm:w-10 sm:h-10 relative mb-2 sm:mb-0"
                                        >
                                            <img
                                                src="/photo_53844715688281.png (4).webp"
                                                alt="ХК Торпедо"
                                                class="object-contain rounded-full w-full h-full"
                                            />
                                        </div>
                                        <div
                                            class="text-center sm:text-left text-sm"
                                        >
                                            ХК "Торпедо"
                                        </div>
                                    </div>

                                    <!-- Счет -->
                                    <div
                                        class="bg-green-600 px-3 py-1 rounded text-white font-bold text-base my-2 sm:my-0"
                                    >
                                        3-2(б)
                                    </div>

                                    <!-- Команда 2 -->
                                    <div
                                        class="flex flex-col items-center sm:flex-row-reverse sm:gap-2"
                                    >
                                        <div
                                            class="w-8 h-8 sm:w-10 sm:h-10 relative mb-2 sm:mb-0"
                                        >
                                            <img
                                                src="/FGFGF (1).png"
                                                alt="ХК Вымпел-k"
                                                class="object-contain rounded-full w-full h-full"
                                            />
                                        </div>
                                        <div
                                            class="text-center sm:text-right text-sm"
                                        >
                                            ХК "Вымпел-k"
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Матч 2 -->
                            <div
                                class="bg-gray-700 rounded-lg sm:rounded-xl p-4 sm:p-6"
                            >
                                <div
                                    class="text-xs sm:text-sm text-gray-400 mb-3 sm:mb-4"
                                >
                                    15.04.2025 • 20:00
                                </div>

                                <div
                                    class="flex flex-col items-center gap-3 sm:flex-row sm:justify-between"
                                >
                                    <!-- Команда 1 -->
                                    <div
                                        class="flex flex-col items-center sm:flex-row sm:gap-2"
                                    >
                                        <div
                                            class="w-8 h-8 sm:w-10 sm:h-10 relative mb-2 sm:mb-0"
                                        >
                                            <img
                                                src="/photo_53844715688281.png (1).webp"
                                                alt="ХК Зубр"
                                                class="object-contain rounded-full w-full h-full"
                                            />
                                        </div>
                                        <div
                                            class="text-center sm:text-left text-sm"
                                        >
                                            ХК "Зубр"
                                        </div>
                                    </div>

                                    <!-- Счет -->
                                    <div
                                        class="bg-green-600 px-3 py-1 rounded text-white font-bold text-base my-2 sm:my-0"
                                    >
                                        4-3
                                    </div>

                                    <!-- Команда 2 -->
                                    <div
                                        class="flex flex-col items-center sm:flex-row-reverse sm:gap-2"
                                    >
                                        <div
                                            class="w-8 h-8 sm:w-10 sm:h-10 relative mb-2 sm:mb-0"
                                        >
                                            <img
                                                src="/photo.png"
                                                alt="ХК Локомотив"
                                                class="object-contain rounded-full w-full h-full"
                                            />
                                        </div>
                                        <div
                                            class="text-center sm:text-right text-sm"
                                        >
                                            ХК "Локомотив"
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Standings -->
        <section class="py-16 px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold mb-8 text-center">
                    📊 Рейтинг команд
                </h2>

                <div
                    class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700"
                >
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-700">
                                <tr>
                                    <th
                                        class="px-6 py-4 text-left font-semibold"
                                    >
                                        Место
                                    </th>
                                    <th
                                        class="px-6 py-4 text-left font-semibold"
                                    >
                                        Команда
                                    </th>
                                    <th
                                        class="px-6 py-4 text-center font-semibold"
                                    >
                                        И
                                    </th>
                                    <th
                                        class="px-6 py-4 text-center font-semibold"
                                    >
                                        П
                                    </th>
                                    <th
                                        class="px-6 py-4 text-center font-semibold"
                                    >
                                        Н
                                    </th>
                                    <th
                                        class="px-6 py-4 text-center font-semibold"
                                    >
                                        П
                                    </th>
                                    <th
                                        class="px-6 py-4 text-center font-semibold"
                                    >
                                        Голы
                                    </th>
                                    <th
                                        class="px-6 py-4 text-center font-semibold"
                                    >
                                        О
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="(team, index) in standings"
                                    :key="index"
                                    :class="`border-t border-gray-700 hover:bg-gray-700/50 transition-colors ${getStatusColor(
                                        team.status
                                    )} bg-opacity-10`"
                                >
                                    <td class="px-6 py-4 font-semibold text-lg">
                                        {{ team.place }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 relative">
                                                <img
                                                    :src="team.logo"
                                                    :alt="team.team"
                                                    class="object-contain rounded-full w-full h-full"
                                                />
                                            </div>
                                            <span class="font-medium">{{
                                                team.team
                                            }}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        {{ team.games }}
                                    </td>
                                    <td
                                        class="px-6 py-4 text-center text-green-400"
                                    >
                                        {{ team.wins }}
                                    </td>
                                    <td
                                        class="px-6 py-4 text-center text-gray-400"
                                    >
                                        {{ team.draws }}
                                    </td>
                                    <td
                                        class="px-6 py-4 text-center text-red-400"
                                    >
                                        {{ team.losses }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        {{ team.goals }}
                                    </td>
                                    <td
                                        class="px-6 py-4 text-center font-bold text-accent-blue text-lg"
                                    >
                                        {{ team.points }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center gap-6 mt-8">
                    <div class="flex items-center gap-2">
                        <div class="w-4 h-4 bg-green-600 rounded"></div>
                        <span class="text-sm">Плей-офф</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-4 h-4 bg-yellow-600 rounded"></div>
                        <span class="text-sm">Переходные матчи</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-4 h-4 bg-red-600 rounded"></div>
                        <span class="text-sm">Вылет</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recent Matches -->
        <section class="py-16 px-4 bg-gray-800">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold mb-8 text-center">
                    🏒 Последние матчи
                </h2>

                <div
                    class="space-y-3 sm:space-y-4 max-w-4xl mx-auto px-2 sm:px-0"
                >
                    <div
                        v-for="(match, index) in recentMatches"
                        :key="index"
                        class="bg-gray-700 rounded-lg sm:rounded-xl p-4 sm:p-6 card-hover"
                    >
                        <!-- Верхняя строка для мобильных (дата и статус) -->
                        <div
                            class="sm:hidden flex justify-between items-center mb-3"
                        >
                            <div class="text-xs text-gray-400">
                                {{ match.date }}
                            </div>
                            <div
                                class="bg-green-600/20 text-green-400 px-2 py-1 rounded-full text-xs"
                            >
                                Завершен
                            </div>
                        </div>

                        <!-- Основное содержимое -->
                        <div
                            class="flex flex-col sm:flex-row items-center justify-between gap-3"
                        >
                            <!-- Дата (только для десктопа) -->
                            <div
                                class="hidden sm:block text-sm text-gray-400 w-20"
                            >
                                {{ match.date }}
                            </div>

                            <!-- Команды и счет -->
                            <div class="flex-1 w-full">
                                <div
                                    class="flex flex-col xs:flex-row items-center justify-between gap-2"
                                >
                                    <!-- Команда 1 -->
                                    <div
                                        class="flex items-center gap-2 flex-1 min-w-0"
                                    >
                                        <div
                                            class="w-6 h-6 sm:w-8 sm:h-8 relative flex-shrink-0"
                                        >
                                            <img
                                                :src="match.logo1"
                                                :alt="match.team1"
                                                class="object-contain rounded-full w-full h-full"
                                            />
                                        </div>
                                        <span
                                            class="font-medium text-sm sm:text-base truncate"
                                        >
                                            {{ match.team1 }}
                                        </span>
                                    </div>

                                    <!-- Счет -->
                                    <div
                                        class="bg-primary-blue px-3 py-1 sm:px-4 sm:py-2 rounded-lg text-white font-bold text-sm sm:text-base my-2 xs:my-0 mx-auto xs:mx-0"
                                    >
                                        {{ match.score }}
                                    </div>

                                    <!-- Команда 2 -->
                                    <div
                                        class="flex items-center gap-2 flex-1 min-w-0 justify-end"
                                    >
                                        <span
                                            class="font-medium text-sm sm:text-base truncate"
                                        >
                                            {{ match.team2 }}
                                        </span>
                                        <div
                                            class="w-6 h-6 sm:w-8 sm:h-8 relative flex-shrink-0"
                                        >
                                            <img
                                                :src="match.logo2"
                                                :alt="match.team2"
                                                class="object-contain rounded-full w-full h-full"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Статус (только для десктопа) -->
                            <div
                                class="hidden sm:block bg-green-600/20 text-green-400 px-3 py-1 rounded-full text-sm"
                            >
                                Завершен
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Social and Partners -->
        <section class="py-16 px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-12">
                    <div class="text-center">
                        <h3 class="text-3xl font-bold mb-6">
                            📱 Следите за новостями
                        </h3>
                        <p class="text-gray-400 mb-6">
                            Получайте последние новости и результаты матчей
                        </p>
                        <a
                            href="https://vk.com/time_of_stars_cup"
                            class="inline-flex items-center gap-3 bg-primary-blue text-white px-8 py-4 rounded-xl hover:bg-secondary-blue transition-colors font-semibold"
                        >
                            <span class="text-2xl">📱</span>
                            Группа ВКонтакте
                        </a>
                    </div>

                    <div class="text-center">
                        <h3 class="text-3xl font-bold mb-6">
                            🤝 Партнёры турнира
                        </h3>
                        <div class="space-y-4">
                            <div class="bg-gray-800 rounded-xl p-4 card-hover">
                                <div
                                    class="flex items-center justify-center gap-3"
                                >
                                    <span class="text-3xl">🍕</span>
                                    <span class="text-xl font-semibold"
                                        >Pizza Fabrika</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    data() {
        return {
            teams: [
                {
                    name: 'ХК "Вымпел-v"',
                    city: 'г. Ярославль',
                    logo: '/photo_53844715688281.png (2).webp',
                    wins: 9,
                    losses: 8,
                    points: 18,
                },
                {
                    name: 'ХК "Зубр"',
                    city: 'г. Ярославль',
                    logo: '/photo_53844715688281.png (1).webp',
                    wins: 10,
                    losses: 3,
                    points: 22,
                },
                {
                    name: 'ХК "Переславль"',
                    city: 'г. Переславль',
                    logo: '/photo_53844715688281.png.webp',
                    wins: 15,
                    losses: 5,
                    points: 32,
                },
                {
                    name: 'ХК "Ярославич"',
                    city: 'г. Ярославль',
                    logo: '/photo_53844715688281.png (3).webp',
                    wins: 7,
                    losses: 6,
                    points: 17,
                },
                {
                    name: 'ХК "Торпедо"',
                    city: 'г. Ярославль',
                    logo: '/photo_53844715688281.png (4).webp',
                    wins: 15,
                    losses: 1,
                    points: 33,
                },
                {
                    name: 'ХК "Вымпел-к"',
                    city: 'г. Ярославль',
                    logo: '/FGFGF (1).png',
                    wins: 2,
                    losses: 14,
                    points: 5,
                },
                {
                    name: 'ХК "Искра"',
                    city: 'г. Кострома',
                    logo: '/photo.png.webp',
                    wins: 1,
                    losses: 14,
                    points: 2,
                },
                {
                    name: 'ХК "Локомотив СЖД"',
                    city: 'г. Ярославль',
                    logo: '/photo.png',
                    wins: 8,
                    losses: 13,
                    points: 19,
                },
            ],
            standings: [
                {
                    place: '✓1',
                    team: 'ХК "Торпедо"',
                    logo: '/photo_53844715688281.png (4).webp',
                    games: 22,
                    wins: 15,
                    draws: 5,
                    losses: 1,
                    goals: '118-67',
                    points: 33,
                    status: 'playoff',
                },
                {
                    place: '✓2',
                    team: 'ХК "Переславль"',
                    logo: '/photo_53844715688281.png.webp',
                    games: 22,
                    wins: 15,
                    draws: 1,
                    losses: 5,
                    goals: '166-81',
                    points: 32,
                    status: 'playoff',
                },
                {
                    place: '✓3',
                    team: 'ХК "Зубр"',
                    logo: '/photo_53844715688281.png (1).webp',
                    games: 20,
                    wins: 10,
                    draws: 7,
                    losses: 3,
                    goals: '99-66',
                    points: 22,
                    status: 'playoff',
                },
                {
                    place: '✓4',
                    team: 'ХК "Вымпел-v"',
                    logo: '/photo_53844715688281.png (2).webp',
                    games: 22,
                    wins: 9,
                    draws: 1,
                    losses: 8,
                    goals: '109-87',
                    points: 18,
                    status: 'playoff',
                },
                {
                    place: '5',
                    team: 'ХК "Локомотив СЖД"',
                    logo: '/photo.png',
                    games: 22,
                    wins: 8,
                    draws: 1,
                    losses: 13,
                    goals: '85-115',
                    points: 19,
                    status: 'transition',
                },
                {
                    place: '6',
                    team: 'ХК "Ярославич"',
                    logo: '/photo_53844715688281.png (3).webp',
                    games: 16,
                    wins: 7,
                    draws: 3,
                    losses: 6,
                    goals: '65-74',
                    points: 17,
                    status: 'transition',
                },
                {
                    place: '7',
                    team: 'ХК "Вымпел-к"',
                    logo: '/FGFGF (1).png',
                    games: 16,
                    wins: 2,
                    draws: 1,
                    losses: 14,
                    goals: '45-111',
                    points: 5,
                    status: 'relegation',
                },
                {
                    place: '8',
                    team: 'ХК "Искра"',
                    logo: '/photo.png.webp',
                    games: 16,
                    wins: 1,
                    draws: 0,
                    losses: 14,
                    goals: '55-127',
                    points: 2,
                    status: 'relegation',
                },
            ],
            recentMatches: [
                {
                    date: '20.12.2024',
                    team1: 'ХК "Искра"',
                    team2: 'ХК "Ярославич"',
                    score: '0-10',
                    logo1: '/photo.png.webp',
                    logo2: '/photo_53844715688281.png (4).webp',
                },
                {
                    date: '18.12.2024',
                    team1: 'ХК "Зубр"',
                    team2: 'ХК "Локомотив"',
                    score: '6-0',
                    logo1: '/photo_53844715688281.png (2).webp',
                    logo2: '/photo.png',
                },
                {
                    date: '17.12.2024',
                    team1: 'ХК "Торпедо"',
                    team2: 'ХК "Вымпел-v"',
                    score: '7-6',
                    logo1: '/photo_53844715688281.png.webp',
                    logo2: '/photo_53844715688281.png (1).webp',
                },
                {
                    date: '15.12.2024',
                    team1: 'ХК "Переславль"',
                    team2: 'ХК "Локомотив"',
                    score: '9-4',
                    logo1: '/photo_53844715688281.png (3).webp',
                    logo2: '/photo.png',
                },
                {
                    date: '13.12.2024',
                    team1: 'ХК "Искра"',
                    team2: 'ХК "Торпедо"',
                    score: '4-12',
                    logo1: '/photo.png.webp',
                    logo2: '/photo_53844715688281.png.webp',
                },
            ],
        }
    },
    methods: {
        getStatusColor(status) {
            switch (status) {
                case 'playoff':
                    return 'bg-green-600'
                case 'transition':
                    return 'bg-yellow-600'
                case 'relegation':
                    return 'bg-red-600'
                default:
                    return 'bg-gray-600'
            }
        },
        getStatusText(status) {
            switch (status) {
                case 'playoff':
                    return 'Плей-офф'
                case 'transition':
                    return 'Переходные матчи'
                case 'relegation':
                    return 'Вылет'
                default:
                    return ''
            }
        },
    },
}
</script>

<style scoped>
/* Add any component-specific styles here if needed */
.gradient-bg {
    background: linear-gradient(135deg, #1e3a8a 0%, #9f1239 100%);
}
.text-gradient {
    background: linear-gradient(90deg, #3b82f6 0%, #ef4444 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}
.card-hover {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.card-hover:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
        0 4px 6px -2px rgba(0, 0, 0, 0.05);
}
</style>