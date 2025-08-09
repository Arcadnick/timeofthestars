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
                    <div class="text-7xl mb-6">🏆</div>
                    <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white">
                        КУБОК ПОБЕДЫ
                    </h1>
                    <p class="text-xl text-white/90 mb-8">Хоккейный турнир</p>
                    <div
                        class="inline-flex items-center gap-2 bg-green-600/20 backdrop-blur-sm px-6 py-3 rounded-full border border-green-500/30"
                    >
                        <span class="text-green-400">✅</span>
                        <span class="text-white font-semibold">
                            Турнир завершен
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tournament Stats -->
        <section class="py-16 px-4 bg-gray-800">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div class="space-y-2 group">
                        <div
                            class="text-5xl group-hover:scale-110 transition-transform"
                        >
                            👥
                        </div>
                        <div class="text-4xl font-bold text-gradient">5</div>
                        <div class="text-gray-300">Команд</div>
                    </div>
                    <div class="space-y-2 group">
                        <div
                            class="text-5xl group-hover:scale-110 transition-transform"
                        >
                            🏒
                        </div>
                        <div class="text-4xl font-bold text-gradient">15</div>
                        <div class="text-gray-300">Матчей</div>
                    </div>
                    <div class="space-y-2 group">
                        <div
                            class="text-5xl group-hover:scale-110 transition-transform"
                        >
                            ⚽
                        </div>
                        <div class="text-4xl font-bold text-gradient">124</div>
                        <div class="text-gray-300">Голов</div>
                    </div>
                    <div class="space-y-2 group">
                        <div
                            class="text-5xl group-hover:scale-110 transition-transform"
                        >
                            🏆
                        </div>
                        <div class="text-4xl font-bold text-gradient">1</div>
                        <div class="text-gray-300">Победитель</div>
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
                        📅 Календарь
                    </button>
                    <button
                        class="bg-gray-700 text-gray-300 px-6 py-3 rounded-xl font-semibold hover:bg-gray-600 transition-colors"
                    >
                        📊 Таблица
                    </button>
                    <button
                        class="bg-gray-700 text-gray-300 px-6 py-3 rounded-xl font-semibold hover:bg-gray-600 transition-colors"
                    >
                        🏆 Результаты
                    </button>
                </div>
            </div>
        </section>

        <!-- Participants -->
        <section class="py-16 px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold mb-8 text-center">
                    👥 Участники турнира
                </h2>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div
                        v-for="team in teams"
                        :key="team.id"
                        class="bg-gray-800 rounded-xl p-6 card-hover border border-gray-700"
                    >
                        <TurnirParticipants :team="team" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Calendar -->
        <section class="py-16 px-4 bg-gray-800">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold mb-8 text-center">
                    📅 Календарь игр
                </h2>

                <div class="space-y-6 md:space-y-8">
                    <!-- Блок 1-2 мая -->
                    <div>
                        <h3
                            class="text-xl md:text-2xl font-semibold mb-4 md:mb-6 text-accent-blue flex items-center gap-2"
                        >
                            <span class="text-2xl md:text-3xl">🗓️</span>
                            1-2 мая
                        </h3>
                        <div class="space-y-3 md:space-y-4">
                            <div
                                v-for="(match, index) in matches.slice(0, 4)"
                                :key="index"
                                class="bg-gray-700 rounded-lg md:rounded-xl p-4 md:p-6 card-hover"
                            >
                                <div
                                    class="flex flex-col md:flex-row md:items-center justify-between gap-3"
                                >
                                    <!-- Дата и время -->
                                    <div
                                        class="text-xs md:text-sm text-gray-400 w-full md:w-20"
                                    >
                                        <div class="font-medium">
                                            {{ match.date }}
                                        </div>
                                        <div>{{ match.time }}</div>
                                    </div>

                                    <!-- Команды и счет -->
                                    <div
                                        class="flex-1 flex flex-col sm:flex-row items-center gap-3 md:gap-6 overflow-hidden"
                                    >
                                        <!-- Команда 1 -->
                                        <div
                                            class="flex items-center gap-2 md:gap-3 flex-1 min-w-0"
                                        >
                                            <div
                                                class="w-6 h-6 md:w-8 md:h-8 relative flex-shrink-0"
                                            >
                                                <img
                                                    :src="match.logo1"
                                                    :alt="match.team1"
                                                    class="object-contain rounded-full w-full h-full"
                                                />
                                            </div>
                                            <span
                                                class="font-medium text-sm truncate"
                                                >{{ match.team1 }}</span
                                            >
                                        </div>

                                        <!-- Счет -->
                                        <div
                                            class="bg-primary-blue px-3 py-1 md:px-4 md:py-2 rounded-lg text-white font-bold text-sm md:text-base whitespace-nowrap mx-auto sm:mx-0"
                                        >
                                            {{ match.score }}
                                        </div>

                                        <!-- Команда 2 -->
                                        <div
                                            class="flex items-center gap-2 md:gap-3 flex-1 min-w-0 justify-end"
                                        >
                                            <span
                                                class="font-medium text-sm truncate"
                                                >{{ match.team2 }}</span
                                            >
                                            <div
                                                class="w-6 h-6 md:w-8 md:h-8 relative flex-shrink-0"
                                            >
                                                <img
                                                    :src="match.logo2"
                                                    :alt="match.team2"
                                                    class="object-contain rounded-full w-full h-full"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Статус -->
                                    <div
                                        class="bg-green-600/20 text-green-400 px-2 py-1 md:px-3 md:py-1 rounded-full text-xs md:text-sm ml-auto md:ml-0"
                                    >
                                        Завершен
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Блок 3-4 мая -->
                    <div>
                        <h3
                            class="text-xl md:text-2xl font-semibold mb-4 md:mb-6 text-accent-red flex items-center gap-2"
                        >
                            <span class="text-2xl md:text-3xl">🗓️</span>
                            3-4 мая
                        </h3>
                        <div class="space-y-3 md:space-y-4">
                            <div
                                v-for="(match, index) in matches.slice(4)"
                                :key="index"
                                class="bg-gray-700 rounded-lg md:rounded-xl p-4 md:p-6 card-hover"
                            >
                                <div
                                    class="flex flex-col md:flex-row md:items-center justify-between gap-3"
                                >
                                    <!-- Дата и время -->
                                    <div
                                        class="text-xs md:text-sm text-gray-400 w-full md:w-20"
                                    >
                                        <div class="font-medium">
                                            {{ match.date }}
                                        </div>
                                        <div>{{ match.time }}</div>
                                    </div>

                                    <!-- Команды и счет -->
                                    <div
                                        class="flex-1 flex flex-col sm:flex-row items-center gap-3 md:gap-6 overflow-hidden"
                                    >
                                        <!-- Команда 1 -->
                                        <div
                                            class="flex items-center gap-2 md:gap-3 flex-1 min-w-0"
                                        >
                                            <div
                                                class="w-6 h-6 md:w-8 md:h-8 relative flex-shrink-0"
                                            >
                                                <img
                                                    :src="match.logo1"
                                                    :alt="match.team1"
                                                    class="object-contain rounded-full w-full h-full"
                                                />
                                            </div>
                                            <span
                                                class="font-medium text-sm truncate"
                                                >{{ match.team1 }}</span
                                            >
                                        </div>

                                        <!-- Счет -->
                                        <div
                                            class="bg-primary-red px-3 py-1 md:px-4 md:py-2 rounded-lg text-white font-bold text-sm md:text-base whitespace-nowrap mx-auto sm:mx-0"
                                        >
                                            {{ match.score }}
                                        </div>

                                        <!-- Команда 2 -->
                                        <div
                                            class="flex items-center gap-2 md:gap-3 flex-1 min-w-0 justify-end"
                                        >
                                            <span
                                                class="font-medium text-sm truncate"
                                                >{{ match.team2 }}</span
                                            >
                                            <div
                                                class="w-6 h-6 md:w-8 md:h-8 relative flex-shrink-0"
                                            >
                                                <img
                                                    :src="match.logo2"
                                                    :alt="match.team2"
                                                    class="object-contain rounded-full w-full h-full"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Статус -->
                                    <div
                                        class="bg-green-600/20 text-green-400 px-2 py-1 md:px-3 md:py-1 rounded-full text-xs md:text-sm ml-auto md:ml-0"
                                    >
                                        Завершен
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
                    📊 Итоговая таблица
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
                                    class="border-t border-gray-700 hover:bg-gray-700/50 transition-colors"
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
                                            <span class="font-medium">
                                                {{ team.team }}
                                            </span>
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
            </div>
        </section>

        <!-- Winner -->
        <section class="py-20 px-4 bg-gray-800">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold mb-12">
                    🏆 Победитель Кубка Победы
                </h2>

                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-primary-blue/20 to-primary-red/20 rounded-2xl"
                    ></div>

                    <div
                        class="bg-gradient-to-br from-primary-blue to-primary-red p-4 sm:p-8 md:p-12 rounded-xl md:rounded-2xl relative w-full max-w-4xl mx-auto"
                    >
                        <div
                            class="bg-white/10 backdrop-blur-sm rounded-lg md:rounded-xl p-4 sm:p-6 md:p-8"
                        >
                            <!-- Логотип -->
                            <div
                                class="w-20 h-20 sm:w-28 sm:h-28 md:w-32 md:h-32 relative mx-auto mb-4 sm:mb-6"
                            >
                                <img
                                    src="/photo_53844715688281.png (1).webp"
                                    alt="ХК Зубр"
                                    class="object-contain rounded-full w-full h-full"
                                />
                            </div>

                            <!-- Название и город -->
                            <div class="text-center">
                                <h3
                                    class="text-2xl sm:text-3xl font-bold mb-1 sm:mb-2 text-white truncate"
                                >
                                    ХК "Зубр"
                                </h3>
                                <p
                                    class="text-white/80 mb-6 sm:mb-8 text-base sm:text-lg"
                                >
                                    г. Ярославль
                                </p>
                            </div>

                            <!-- Статистика -->
                            <div
                                class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 md:gap-8"
                            >
                                <!-- Процент побед -->
                                <div class="bg-white/10 rounded-lg p-3 sm:p-4">
                                    <div
                                        class="text-white/80 mb-1 sm:mb-2 text-sm sm:text-base"
                                    >
                                        4 победы из 6 игр
                                    </div>
                                    <div
                                        class="text-xl sm:text-2xl font-bold text-white"
                                    >
                                        66%
                                    </div>
                                    <div
                                        class="text-white/60 text-xs sm:text-sm"
                                    >
                                        Процент побед
                                    </div>
                                </div>

                                <!-- Очки -->
                                <div class="bg-white/10 rounded-lg p-3 sm:p-4">
                                    <div
                                        class="text-2xl sm:text-3xl md:text-4xl font-bold text-white"
                                    >
                                        7
                                    </div>
                                    <div
                                        class="text-white/80 text-sm sm:text-base"
                                    >
                                        Очков
                                    </div>
                                </div>
                            </div>

                            <!-- Дополнительная информация -->
                            <div class="mt-6 sm:mt-8">
                                <div
                                    class="text-white/80 text-base sm:text-lg text-center sm:text-left"
                                >
                                    Заслуженная победа в напряженной борьбе!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners -->
        <section class="py-16 px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h3 class="text-3xl flex justify-center font-bold mb-8">
                    🤝 Партнёры турнира
                </h3>
                <div class="flex justify-center text-center">
                    <div class="bg-gray-800 rounded-xl p-6 card-hover">
                        <div class="flex items-center gap-4">
                            <span class="text-4xl">🍕</span>
                            <div>
                                <h4 class="text-xl font-semibold">
                                    Pizza Fabrika
                                </h4>
                                <p class="text-gray-400">
                                    Официальный партнер по питанию
                                </p>
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
                    name: 'ХК "Искра"',
                    logo: '/photo.png.webp',
                    wins: 2,
                    losses: 3,
                    points: 4,
                },
                {
                    name: 'ХК "Зубр"',
                    logo: '/photo_53844715688281.png (1).webp',
                    wins: 4,
                    losses: 2,
                    points: 7,
                },
                {
                    name: 'ХК "Ярославич"',
                    logo: '/photo_53844715688281.png (3).webp',
                    wins: 1,
                    losses: 3,
                    points: 2,
                },
                {
                    name: 'ХК "Вымпел-v"',
                    logo: '/photo_53844715688281.png (2).webp',
                    wins: 3,
                    losses: 1,
                    points: 6,
                },
                {
                    name: 'ХК "Вымпел-К"',
                    logo: '/FGFGF (1).png',
                    wins: 0,
                    losses: 3,
                    points: 0,
                },
            ],
            matches: [
                {
                    date: '01.05',
                    time: '11:00',
                    team1: 'ХК "Ярославич"',
                    team2: 'ХК "Зубр"',
                    score: '2-8',
                    logo1: '/photo_53844715688281.png (3).webp',
                    logo2: '/photo_53844715688281.png (1).webp',
                    status: 'finished',
                },
                {
                    date: '02.05',
                    time: '12:30',
                    team1: 'ХК "Вымпел"',
                    team2: 'ХК "Зубр"',
                    score: '4-5',
                    logo1: '/FGFGF (1).png',
                    logo2: '/photo_53844715688281.png (1).webp',
                    status: 'finished',
                },
                {
                    date: '02.05',
                    time: '12:30',
                    team1: 'ХК "Ярославич"',
                    team2: 'ХК "Искра"',
                    score: '1-2',
                    logo1: '/photo_53844715688281.png (3).webp',
                    logo2: '/photo.png.webp',
                    status: 'finished',
                },
                {
                    date: '02.05',
                    time: '14:00',
                    team1: 'ХК "Вымпел-v"',
                    team2: 'ХК "Зубр"',
                    score: '4-3(б)',
                    logo1: '/photo_53844715688281.png (2).webp',
                    logo2: '/photo_53844715688281.png (1).webp',
                    status: 'finished',
                },
                {
                    date: '03.05',
                    time: '15:00',
                    team1: 'ХК "Искра"',
                    team2: 'ХК "Зубр"',
                    score: '5-7',
                    logo1: '/photo.png.webp',
                    logo2: '/photo_53844715688281.png (1).webp',
                    status: 'finished',
                },
                {
                    date: '03.05',
                    time: '16:30',
                    team1: 'ХК "Вымпел-v"',
                    team2: 'ХК "Ярославич"',
                    score: '10-4',
                    logo1: '/photo_53844715688281.png (2).webp',
                    logo2: '/photo_53844715688281.png (3).webp',
                    status: 'finished',
                },
            ],
            standings: [
                {
                    place: '🥇1',
                    team: 'ХК "Зубр"',
                    logo: '/photo_53844715688281.png (1).webp',
                    games: 6,
                    wins: 4,
                    draws: 0,
                    losses: 2,
                    goals: '23-17',
                    points: 7,
                },
                {
                    place: '🥈2',
                    team: 'ХК "Вымпел-v"',
                    logo: '/photo_53844715688281.png (2).webp',
                    games: 4,
                    wins: 3,
                    draws: 0,
                    losses: 1,
                    goals: '18-17',
                    points: 6,
                },
                {
                    place: '🥉3',
                    team: 'ХК "Искра"',
                    logo: '/photo.png.webp',
                    games: 5,
                    wins: 2,
                    draws: 0,
                    losses: 3,
                    goals: '19-19',
                    points: 4,
                },
                {
                    place: '4',
                    team: 'ХК "Ярославич"',
                    logo: '/photo_53844715688281.png (3).webp',
                    games: 4,
                    wins: 1,
                    draws: 0,
                    losses: 3,
                    goals: '10-22',
                    points: 2,
                },
                {
                    place: '5',
                    team: 'ХК "Вымпел"',
                    logo: '/FGFGF (1).png',
                    games: 3,
                    wins: 0,
                    draws: 0,
                    losses: 3,
                    goals: '7-8',
                    points: 0,
                },
            ],
        }
    },
}
</script>
