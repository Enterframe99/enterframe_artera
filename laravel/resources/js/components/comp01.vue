<template>
    <p>{{ lorem }} informazioni</p>
</template>

<script>
    module.exports = {
        data: function() {
            return {
                lorem: "richiedi"
            };
        }
    };
</script>

<style scoped>
    p {
        font-size: 2em;
        text-align: center;
    }
</style>
