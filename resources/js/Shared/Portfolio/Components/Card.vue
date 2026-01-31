<script setup>

defineProps({
    id: {
        type: String,
        required: false
    }
})

</script>
<template>
    <section :id="id" class="py-20 odd:bg-card/30">
        <slot></slot>
    </section>
</template>

