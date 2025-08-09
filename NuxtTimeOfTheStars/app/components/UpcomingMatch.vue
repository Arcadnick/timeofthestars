<template>
    <!-- Заголовок с турниром и датой -->
    <div
        class="flex flex-col md:flex-row md:items-center justify-between gap-2 mb-3 md:mb-4"
    >
        <div
            class="bg-primary-blue px-3 py-1 rounded-full text-white text-xs md:text-sm font-medium whitespace-nowrap"
        >
            {{ match.tournament }}
        </div>
        <div class="text-gray-400 text-xs md:text-sm">
            {{ match.date }} • {{ match.time }}
        </div>
    </div>

    <!-- Команды и VS -->
    <div
        class="flex flex-col md:flex-row md:items-center justify-between gap-4"
    >
        <!-- Команда 1 -->
        <div class="flex items-center gap-2 md:gap-3 flex-1">
            <div class="w-10 h-10 md:w-12 md:h-12 relative flex-shrink-0">
                <img
                    :src="match.logo1"
                    :alt="match.team1"
                    class="w-full h-full object-contain rounded-full"
                />
            </div>
            <span class="font-medium text-sm md:text-base truncate">{{
                match.team1
            }}</span>
        </div>

        <!-- VS (только для десктопа) -->
        <div
            class="hidden md:block text-xl md:text-2xl font-bold text-gray-400 px-2"
        >
            VS
        </div>

        <!-- Мобильный разделитель -->
        <div class="md:hidden w-full border-t border-gray-600 my-2"></div>

        <!-- Команда 2 -->
        <div class="flex items-center gap-2 md:gap-3 flex-1 justify-end">
            <span class="font-medium text-sm md:text-base truncate">{{
                match.team2
            }}</span>
            <div class="w-10 h-10 md:w-12 md:h-12 relative flex-shrink-0">
                <img
                    :src="match.logo2"
                    :alt="match.team2"
                    class="w-full h-full object-contain rounded-full"
                />
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({
    match: {
        type: Object,
        required: true,
        validator: value => {
            return value.id
        },
    },
})
</script>
