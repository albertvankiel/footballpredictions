<template>
    <div>
        <p>
            <router-link :to="{ name: 'home' }">Home</router-link>
            <router-link :to="{ name: 'about'}">About</router-link>
        </p>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>

</style>
