<template>
    <div>
        <p>
            <router-link :to="{ name: 'home' }">Home</router-link>
            <router-link :to="{ name: 'about' }">About</router-link>
            <router-link :to="{ name: 'register' }">Register</router-link>
        </p>

        <div class="container">
            <h1>negers</h1>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style scoped></style>
