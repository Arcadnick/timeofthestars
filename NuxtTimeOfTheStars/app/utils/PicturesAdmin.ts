const teamLogos: Record<number, string> = {
    1: '/photo.png',
    2: '/photo.png',
    3: '/photo.png',
    4: '/photo.png',
    5: '/photo.png',
    6: '/photo.png',
    7: '/photo.png',
    8: '/photo.png',
    99: '/photo.png', // запасной логотип
}

export function getTeamLogo(id: number): string {
    return teamLogos[id] ?? '/photo.png'
}
