<template>
<div class="min-h-screen bg-gray-100">
    <Navbar />
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">{{ arisan.name }}</h1>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <p>Total: Rp {{ arisan.total_amount }}</p>
            <p>Rules: {{ arisan.rules }}</p>
            <PaymentForm :arisan-id="arisan.id" />
        </div>
    </div>
</div>
</template>

<script>
    import Navbar from "./components/Navbar.vue";
    import PaymentForm from "./components/PaymentForm.vue";
    import axios from "axios";

    export default {
        components: { Navbar, PaymentForm },
        data() {
            return {
                arisan: {},
            };
        },
        mounted() {
            this.fetchArisan();
        },
        methods: {
            async fetchArisan() {
                try {
                    const response = await axios.get(
                        `/api/arisans/${this.$route.params.id}`,
                        {
                            headers: {
                                Authorization: `Bearer ${localStorage.getItem(
                                    "token"
                                )}`,
                            },
                        }
                    );
                    this.arisan = response.data;
                } catch (error) {
                    console.error("Error fetching arisan:", error);
                }
            },
        },
    };
</script>
