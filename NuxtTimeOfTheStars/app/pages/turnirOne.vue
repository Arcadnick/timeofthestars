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
                        Товарищеский турнир
                    </h1>
                    <p class="text-xl text-white/90 mb-8">
                        среди любительских спорткоманд
                    </p>
                    <div
                        class="inline-flex items-center gap-2 bg-green-600/20 backdrop-blur-sm px-6 py-3 rounded-full border border-green-500/30"
                    >
                        <span class="text-green-400">✅</span>
                        <span class="text-white font-semibold"
                            >Турнир завершен</span
                        >
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
                        <div class="text-4xl font-bold text-gradient">10</div>
                        <div class="text-gray-300">Матчей</div>
                    </div>
                    <div class="space-y-2 group">
                        <div
                            class="text-5xl group-hover:scale-110 transition-transform"
                        >
                            ⚽
                        </div>
                        <div class="text-4xl font-bold text-gradient">89</div>
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
                        :class="{
                            'bg-primary-blue': activeTab === 'participants',
                            'bg-gray-700 text-gray-300 hover:bg-gray-600 transition-colors':
                                activeTab !== 'participants',
                        }"
                        @click="activeTab = 'participants'"
                    >
                        👥 Участники
                    </button>
                    <button
                        class="px-6 py-3 rounded-xl font-semibold"
                        :class="{
                            'bg-primary-blue text-white':
                                activeTab === 'calendar',
                            'bg-gray-700 text-gray-300 hover:bg-gray-600 transition-colors':
                                activeTab !== 'calendar',
                        }"
                        @click="activeTab = 'calendar'"
                    >
                        📅 Календарь
                    </button>
                    <button
                        class="px-6 py-3 rounded-xl font-semibold"
                        :class="{
                            'bg-primary-blue text-white': activeTab === 'table',
                            'bg-gray-700 text-gray-300 hover:bg-gray-600 transition-colors':
                                activeTab !== 'table',
                        }"
                        @click="activeTab = 'table'"
                    >
                        📊 Таблица
                    </button>
                    <button
                        class="px-6 py-3 rounded-xl font-semibold"
                        :class="{
                            'bg-primary-blue text-white':
                                activeTab === 'results',
                            'bg-gray-700 text-gray-300 hover:bg-gray-600 transition-colors':
                                activeTab !== 'results',
                        }"
                        @click="activeTab = 'results'"
                    >
                        🏆 Результаты
                    </button>
                </div>
            </div>
        </section>

        <!-- Participants -->
        <section v-if="activeTab === 'participants'" class="py-16 px-4">
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

        <!-- Calendar Tab -->
        <section v-if="activeTab === 'calendar'" class="py-16 px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold mb-8 text-center">
                    📅 Календарь турнира
                </h2>
                <div class="bg-gray-800 rounded-xl p-8 text-center">
                    <div class="text-6xl mb-4">📅</div>
                    <p class="text-gray-300">
                        Календарь турнира будет доступен здесь
                    </p>
                </div>
            </div>
        </section>

        <!-- Table Tab -->
        <section v-if="activeTab === 'table'" class="py-16 px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold mb-8 text-center">
                    📊 Турнирная таблица
                </h2>
                <div class="bg-gray-800 rounded-xl overflow-hidden">
                    <table class="w-full">
                        <thead class="bg-gray-700">
                            <tr>
                                <th class="px-6 py-4 text-left">Место</th>
                                <th class="px-6 py-4 text-left">Команда</th>
                                <th class="px-6 py-4 text-center">И</th>
                                <th class="px-6 py-4 text-center">В</th>
                                <th class="px-6 py-4 text-center">П</th>
                                <th class="px-6 py-4 text-center">О</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                v-for="(team, index) in sortedTeams"
                                :key="index"
                                class="border-b border-gray-700 hover:bg-gray-700/50"
                            >
                                <td class="px-6 py-4 font-bold">
                                    {{ index + 1 }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <img
                                            :src="team.logo"
                                            :alt="team.name"
                                            class="w-8 h-8 rounded-full"
                                        />
                                        <span>{{ team.name }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    {{ team.wins + team.losses }}
                                </td>
                                <td
                                    class="px-6 py-4 text-center text-green-400"
                                >
                                    {{ team.wins }}
                                </td>
                                <td class="px-6 py-4 text-center text-red-400">
                                    {{ team.losses }}
                                </td>
                                <td
                                    class="px-6 py-4 text-center font-bold text-accent-blue"
                                >
                                    {{ team.points }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Results Tab -->
        <section v-if="activeTab === 'results'" class="py-16 px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold mb-8 text-center">
                    🏆 Результаты матчей
                </h2>
                <div class="space-y-4 max-w-4xl mx-auto">
                    <div
                        v-for="(match, index) in matches"
                        :key="index"
                        class="bg-gray-800 rounded-xl p-6 card-hover"
                    >
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-400 w-32">
                                <div>{{ match.date }}</div>
                                <div>{{ match.time }}</div>
                            </div>
                            <div
                                class="flex items-center gap-6 flex-1 justify-center"
                            >
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 relative">
                                        <img
                                            :src="match.logo1"
                                            :alt="match.team1"
                                            class="w-full h-full object-contain rounded-full"
                                        />
                                    </div>
                                    <span class="font-medium">{{
                                        match.team1
                                    }}</span>
                                </div>
                                <div
                                    class="bg-primary-blue px-4 py-2 rounded-lg text-white font-bold text-lg"
                                >
                                    {{ match.score }}
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="font-medium">{{
                                        match.team2
                                    }}</span>
                                    <div class="w-10 h-10 relative">
                                        <img
                                            :src="match.logo2"
                                            :alt="match.team2"
                                            class="w-full h-full object-contain rounded-full"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Winner Section -->
        <section class="py-20 px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold mb-12">
                    🏆 Победители товарищеского турнира
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
                                    src="/photo_53844715688281.png.webp"
                                    alt="ХК Переславль"
                                    class="w-full h-full object-contain rounded-full"
                                />
                            </div>
                            <h3 class="text-3xl font-bold mb-2 text-white">
                                ХК "Переславль"
                            </h3>
                            <p class="text-white/80 mb-8 text-lg">
                                г. Переславль
                            </p>

                            <div class="grid grid-cols-2 gap-8">
                                <div class="bg-white/10 rounded-lg p-4">
                                    <div class="text-4xl font-bold text-white">
                                        4
                                    </div>
                                    <div class="text-white/80">Победы</div>
                                </div>
                                <div class="bg-white/10 rounded-lg p-4">
                                    <div class="text-4xl font-bold text-white">
                                        12
                                    </div>
                                    <div class="text-white/80">Очков</div>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="text-white/80 text-lg">
                                    Безупречная игра на протяжении всего
                                    турнира!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tournament Gallery -->
        <section class="py-16 px-4 bg-gray-800">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold mb-8 text-center">
                    📸 Фотогалерея турнира
                </h2>

                <div class="grid md:grid-cols-3 gap-6">
                    <div
                        v-for="index in 6"
                        :key="index"
                        class="bg-gray-700 rounded-xl overflow-hidden card-hover group"
                    >
                        <div
                            class="h-48 bg-gradient-to-br from-primary-blue to-primary-red flex items-center justify-center group-hover:scale-105 transition-transform"
                        >
                            <span class="text-4xl">📸</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold mb-2">
                                Матч #{{ index }}
                            </h3>
                            <p class="text-gray-400 text-sm">
                                Лучшие моменты игры
                            </p>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-8">
                    <button
                        class="bg-gradient-to-r from-primary-blue to-primary-red text-white px-8 py-3 rounded-xl font-semibold hover:opacity-90 transition-opacity"
                    >
                        📸 Посмотреть все фото
                    </button>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import { ref, computed } from 'vue'
// Активная вкладка
const activeTab = ref('participants')

// Данные команд
const teams = ref([
    {
        name: 'ХК "Вымпел-v"',
        city: 'г. Ярославль',
        logo: '/photo_53844715688281.png (2).webp',
        wins: 3,
        losses: 1,
        points: 9,
    },
    {
        name: 'ХК "Зубр"',
        city: 'г. Ярославль',
        logo: '/photo_53844715688281.png (1).webp',
        wins: 2,
        losses: 2,
        points: 6,
    },
    {
        name: 'ХК "Переславль"',
        city: 'г. Переславль',
        logo: '/photo_53844715688281.png.webp',
        wins: 4,
        losses: 0,
        points: 12,
    },
    {
        name: 'ХК "Ярославич"',
        city: 'г. Ярославль',
        logo: '/photo_53844715688281.png (3).webp',
        wins: 1,
        losses: 3,
        points: 3,
    },
    {
        name: 'ХК "Торпедо"',
        city: 'г. Ярославль',
        logo: '/photo_53844715688281.png (4).webp',
        wins: 2,
        losses: 2,
        points: 6,
    },
])

// Данные матчей
const matches = ref([
    {
        date: '15.01.2024',
        time: '18:00',
        team1: 'ХК "Переславль"',
        team2: 'ХК "Зубр"',
        score: '4-2',
        logo1: '/photo_53844715688281.png.webp',
        logo2: '/photo_53844715688281.png (1).webp',
    },
    {
        date: '14.01.2024',
        time: '16:30',
        team1: 'ХК "Вымпел-v"',
        team2: 'ХК "Ярославич"',
        score: '3-1',
        logo1: '/photo_53844715688281.png (2).webp',
        logo2: '/photo_53844715688281.png (3).webp',
    },
    {
        date: '13.01.2024',
        time: '19:00',
        team1: 'ХК "Торпедо"',
        team2: 'ХК "Переславль"',
        score: '1-5',
        logo1: '/photo_53844715688281.png (4).webp',
        logo2: '/photo_53844715688281.png.webp',
    },
])

// Сортированные команды по очкам для таблицы
const sortedTeams = computed(() => {
    return [...teams.value].sort((a, b) => b.points - a.points)
})
</script>
