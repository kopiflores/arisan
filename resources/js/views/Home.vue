<template>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
            <form @submit.prevent="login">
                <div class="mb-4">
                    <label class="block text-gray-700">Email</label>
                    <input
                        v-model="form.email"
                        type="email"
                        class="w-full p-2 border rounded"
                        required
                    />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Password</label>
                    <input
                        v-model="form.password"
                        type="password"
                        class="w-full p-2 border rounded"
                        required
                    />
                </div>
                <button
                    type="submit"
                    class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600"
                >
                    Login
                </button>
            </form>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            form: {
                email: "",
                password: "",
            },
        };
    },
    methods: {
        async login() {
            try {
                const response = await axios.post("/api/login", this.form);
                localStorage.setItem("token", response.data.token);
                this.$router.push("/dashboard");
            } catch (error) {
                alert("Login failed: " + error.response.data.message);
            }
        },
    },
};
</script>
