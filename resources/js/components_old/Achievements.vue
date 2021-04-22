<template>
    <div>
        <h1 class="text-4xl">Your achievements</h1>
    
        <ul class="mt-4 ml-2">
            <!-- <li v-for="achievement in achievements" v-text="achievement.name">
                {{ achievement.name }}
            </li> -->
        </ul>

    </div>
</template>

<script>
export default {
    data() {
        return {
            achievements: 0,
        }
    },

        created() {
        axios.get('http://127.0.0.1:8000/api/achievements').then(response => {
            this.achievements = response.data;
        });
    }
}
</script>
