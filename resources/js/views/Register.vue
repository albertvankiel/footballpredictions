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
            <input type="email" id="email" name="email" v-model="mail" />
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
                v-model="password_confirm"
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
            mail: null,
            password: null,
            password_confirm: null
        };
    },
    methods: {
        register: function() {
            let formData = new FormData();
            formData.append("email", this.mail);
            if (this.password !== this.password_confirm) {
                console.log("Staat niet gelijk");
            }
            console.log(password);
            axios.post("/api/register", formData);
        }
    }
};
</script>

<style scoped></style>
