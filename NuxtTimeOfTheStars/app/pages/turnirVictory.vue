<template>
    <div class="min-h-screen bg-gray-900 text-white">
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

                <div class="space-y-8">
                    <div>
                        <h3
                            class="text-2xl font-semibold mb-6 text-accent-blue flex items-center gap-2"
                        >
                            <span class="text-3xl">🗓️</span>
                            1-2 мая
                        </h3>
                        <div class="space-y-4">
                            <div
                                v-for="(match, index) in matches.slice(0, 4)"
                                :key="index"
                                class="bg-gray-700 rounded-xl p-6 card-hover"
                            >
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-4">
                                        <div class="text-sm text-gray-400 w-20">
                                            <div class="font-medium">
                                                {{ match.date }}
                                            </div>
                                            <div>{{ match.time }}</div>
                                        </div>
                                        <div class="flex items-center gap-6">
                                            <div
                                                class="flex items-center gap-3"
                                            >
                                                <div class="w-8 h-8 relative">
                                                    <img
                                                        :src="match.logo1"
                                                        :alt="match.team1"
                                                        class="object-contain rounded-full w-full h-full"
                                                    />
                                                </div>
                                                <span class="font-medium">
                                                    {{ match.team1 }}
                                                </span>
                                            </div>
                                            <div
                                                class="bg-primary-blue px-4 py-2 rounded-lg text-white font-bold"
                                            >
                                                {{ match.score }}
                                            </div>
                                            <div
                                                class="flex items-center gap-3"
                                            >
                                                <span class="font-medium">
                                                    {{ match.team2 }}
                                                </span>
                                                <div class="w-8 h-8 relative">
                                                    <img
                                                        :src="match.logo2"
                                                        :alt="match.team2"
                                                        class="object-contain rounded-full w-full h-full"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-green-600/20 text-green-400 px-3 py-1 rounded-full text-sm"
                                    >
                                        Завершен
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3
                            class="text-2xl font-semibold mb-6 text-accent-red flex items-center gap-2"
                        >
                            <span class="text-3xl">🗓️</span>
                            3-4 мая
                        </h3>
                        <div class="space-y-4">
                            <div
                                v-for="(match, index) in matches.slice(4)"
                                :key="index"
                                class="bg-gray-700 rounded-xl p-6 card-hover"
                            >
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-4">
                                        <div class="text-sm text-gray-400 w-20">
                                            <div class="font-medium">
                                                {{ match.date }}
                                            </div>
                                            <div>{{ match.time }}</div>
                                        </div>
                                        <div class="flex items-center gap-6">
                                            <div
                                                class="flex items-center gap-3"
                                            >
                                                <div class="w-8 h-8 relative">
                                                    <img
                                                        :src="match.logo1"
                                                        :alt="match.team1"
                                                        class="object-contain rounded-full w-full h-full"
                                                    />
                                                </div>
                                                <span class="font-medium">
                                                    {{ match.team1 }}
                                                </span>
                                            </div>
                                            <div
                                                class="bg-primary-red px-4 py-2 rounded-lg text-white font-bold"
                                            >
                                                {{ match.score }}
                                            </div>
                                            <div
                                                class="flex items-center gap-3"
                                            >
                                                <span class="font-medium">
                                                    {{ match.team2 }}
                                                </span>
                                                <div class="w-8 h-8 relative">
                                                    <img
                                                        :src="match.logo2"
                                                        :alt="match.team2"
                                                        class="object-contain rounded-full w-full h-full"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-green-600/20 text-green-400 px-3 py-1 rounded-full text-sm"
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
                        class="bg-gradient-to-br from-primary-blue to-primary-red p-12 rounded-2xl relative"
                    >
                        <div
                            class="bg-white/10 backdrop-blur-sm rounded-xl p-8"
                        >
                            <div class="w-32 h-32 relative mx-auto mb-6">
                                <img
                                    src="/photo_53844715688281.png (1).webp"
                                    alt="ХК Зубр"
                                    class="object-contain rounded-full w-full h-full"
                                />
                            </div>
                            <h3 class="text-3xl font-bold mb-2 text-white">
                                ХК "Зубр"
                            </h3>
                            <p class="text-white/80 mb-8 text-lg">
                                г. Ярославль
                            </p>

                            <div class="grid grid-cols-2 gap-8">
                                <div class="bg-white/10 rounded-lg p-4">
                                    <div class="text-white/80 mb-2">
                                        4 победы из 6 игр
                                    </div>
                                    <div class="text-2xl font-bold text-white">
                                        66%
                                    </div>
                                    <div class="text-white/60">
                                        Процент побед
                                    </div>
                                </div>
                                <div class="bg-white/10 rounded-lg p-4">
                                    <div class="text-4xl font-bold text-white">
                                        7
                                    </div>
                                    <div class="text-white/80">Очков</div>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="text-white/80 text-lg">
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
