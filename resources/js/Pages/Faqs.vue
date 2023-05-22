<template>
    <header class="faqs-header">
        <Link href="/">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
        </Link>

        <h4>FAQs</h4>

    </header>

    <main>
        <div class="faqs-container">
            <div class="faq" v-for="faq in faqs" :key="faq.id">
                <h5>{{ faq.question }}</h5>
                <p>{{ faq.answer }}</p>
            </div>
        </div>
    </main>
</template>


<script>

    import { Link } from '@inertiajs/vue3'
    import faqs from '../../../data.json'

    export default {
        components: {
            Link
        },
        data() {
            return {
                faqs: faqs
            }
        }
    }
</script>