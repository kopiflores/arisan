<template>
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-4">Daftar Arisan</h2>
        <div v-if="arisans.length" class="space-y-4">
            <div
                v-for="arisan in arisans"
                :key="arisan.id"
                class="border p-4 rounded"
            >
                <h3 class="text-lg font-semibold">{{ arisan.name }}</h3>
                <p>Total: Rp {{ arisan.total_amount }}</p>
                <p>
                    Start:
                    {{ new Date(arisan.start_date).toLocaleDateString() }}
                </p>
                <router-link
                    :to="'/arisan/' + arisan.id"
                    class="text-blue-500 hover:underline"
                >
                    Detail
                </router-link>
            </div>
        </div>
        <p v-else>Tidak ada arisan tersedia.</p>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            arisans: [],
        };
    },
    mounted() {
        this.fetchArisans();
    },
    methods: {
        async fetchArisans() {
            try {
                const response = await axios.get("/api/arisans", {
                    headers: {
                        Authorization: `Bearer ${localStorage.getItem(
                            "token"
                        )}`,
                    },
                });
                this.arisans = response.data;
            } catch (error) {
                console.error("Error fetching arisans:", error);
            }
        },
    },
};
</script>
