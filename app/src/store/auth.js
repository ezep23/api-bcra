import { defineStore } from 'pinia';

export const useUserStore = defineStore('user', {
    state: () => ({
        data: [
            name = undefined,
            email = undefined,
            password = undefined,
            role = undefined,
            isAuthenticated = false,
        ],
    }),
});