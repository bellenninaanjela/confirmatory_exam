<template>
    <Link href="/menuitem" class="menu">
        <slot name="food-img"></slot>
        
        <slot></slot>

        <div class="menu-footer">
            <slot name="footer"></slot>
            <div class="ratings">
                &#9733;
                &#9733;
                &#9733;
                &#9733;
                &#9733;
            </div>
        </div>
    </Link>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';

</script>