<template>
    <div>
        <h1 class="text-4xl">Laracasts Stats</h1>
    
        <ul class=" mt-4 ml-2">
            <li>
                <strong>Total Series:</strong> {{ series }}
            </li>

            <li>
                <strong>Total Lessons:</strong> {{ lessons }}
            </li>
        </ul>

    </div>
</template>

<script>
export default {
    data() {
        return {
            series: 0,
            lessons: 0
        }
    },

    created() {
        axios.get('http://127.0.0.1:8000/api/stats')
            .then(response => response.data)
            .then (data => {
                this.series = data.series;
                this.lessons = data.lessons;
            });
    }
}
</script>
