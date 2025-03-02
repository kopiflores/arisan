<template>
    <nav class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto flex justify-between">
            <span class="text-xl font-bold">Arisan App</span>
            <button
                @click="logout"
                class="bg-red-500 px-4 py-2 rounded hover:bg-red-600"
            >
                Logout
            </button>
        </div>
    </nav>
</template>

<script>
export default {
    methods: {
        logout() {
            localStorage.removeItem("token");
            this.$router.push("/");
        },
    },
};
</script>
