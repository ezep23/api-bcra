<script setup>
    import { useProductStore } from '@/stores/products';

    const productStore = useProductStore();

    onMounted(() => {
        productStore.fetchProducts();
    })

</script>

<template>
<div></div>
</template>

<style scoped>
</style>