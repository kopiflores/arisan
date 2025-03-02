<template>
<div class="mt-6">
    <h3 class="text-lg font-semibold mb-4">Upload Bukti Pembayaran</h3>
    <form @submit.prevent="submitPayment">
        <input type="file" @change="onFileChange" class="mb-4" accept=".jpg,.png,.pdf" />
        <button type="submit" class="bg-green-500 text-white p-2 rounded hover:bg-green-600">
            Submit
        </button>
    </form>
</div>
</template>

<script>
    import axios from 'axios'

    export default {
        props: ['arisanId'],
        data() {
            return {
                file: null,
            }
        },
        methods: {
            onFileChange(event) {
                this.file = event.target.files[0]
            },
            async submitPayment() {
                const formData = new FormData()
                formData.append('arisan_id', this.arisanId)
                formData.append('proof_file', this.file)

                try {
                    await axios.post('/api/payments', formData, {
                        headers: {
                            Authorization: `Bearer ${localStorage.getItem('token')}`,
                            'Content-Type': 'multipart/form-data',
                        },
                    })
                    alert('Pembayaran berhasil diupload!')
                } catch (error) {
                    alert('Error: ' + error.response.data.message)
                }
            },
        },
    }
</script>
