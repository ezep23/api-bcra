import { defineStore } from 'pinia';
import products from '../db/products.json';

export const useProductStore = defineStore('products', {
    state: () => ({
        items: [
            ...products,
            items: [...products],
        ],
    }),
});