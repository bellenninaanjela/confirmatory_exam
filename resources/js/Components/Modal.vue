<template>
    <div v-if="!show" class="modal-bg">
        <div class="modal-container">

            <slot name="svg-icon"></slot>

            <slot name="modal-status"></slot>

            <slot name="modal-buttons"></slot>

        </div>
    </div>
</template>


<script setup>
    defineProps({
        show: Boolean
    })
</script>