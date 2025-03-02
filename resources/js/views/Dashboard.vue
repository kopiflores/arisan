<template>
<div class="min-h-screen bg-gray-100">
    <Navbar />
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Dashboard</h1>
        <ArisanList />
    </div>
</div>
</template>

<script>
    import Navbar from "./components/Navbar.vue";
    import ArisanList from "./components/ArisanList.vue";

    export default {
        components: { Navbar, ArisanList },
    };
</script>
