<template>
    <div>
        <h1>Registreer een account</h1>
        <form action="">
            <label for="username">Gebruikersnaam:</label>
            <input
                type="text"
                id="username"
                name="username"
                required
                v-model="username"
            />
            <label for="email">Email:</label>
            <input
                type="email"
                id="email"
                name="email"
                v-model="email"
            />
            <label for="password">Wachtwoord:</label>
            <input
                type="password"
                id="password"
                name="password"
                required
                v-model="password"
            />
            <label for="password_confirm">Herhaal wachtwoord</label>
            <input
                type="password"
                id="password_confirm"
                name="password_confirm"
                required
                v-model="password_confirmation"
            />
            <button @click.prevent="register">Maak aan</button>
        </form>
    </div>
</template>
<script>
import axios from "axios";
export default {
    name: "register",
    data() {
        return {
            username: null,
            email: null,
            password: null,
            password_confirmation: null
        };
    },
    methods: {
        register: function() {
            if (this.password !== this.password_confirmation) {
                return;
            }

            let formData = new FormData();
            formData.append('email', this.email);
            formData.append('password', this.password);
            formData.append('password_confirmation', this.password_confirmation);
            formData.append('username', this.username);

            axios.post("/api/register", formData);
        }
    }
};
</script>

<style scoped></style>
