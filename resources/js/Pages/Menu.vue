<template>
    <header class="menu-header">
        <Link href="/">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
        </Link>

        <h4>Our Foods</h4>
        
        <button>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z" clip-rule="evenodd" />
            </svg>
        </button>
    </header>

    <main>
        <div class="search-container">
            <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>

            <input type="text" placeholder="try our new Steak Fries Veggies" class="search-input">
        </div>

        <div class="tags-container">
            <button>All</button>
            <button>Breakfast</button>
            <button>Chicken</button>
            <button>Seafood</button>
            <button>Beef</button>
            <button>Salad</button>
        </div>

        <div class="menu-cards">
            <Link href="/menuitem" class="menu" v-for="menu in menu" :key="menu.id">
                <img :src="menu.image" alt="">
                <div>
                    <h5>{{ menu.foodName }}</h5>
                    <p class="menu-type">{{ menu.type }}</p>
                </div>

                <div class="menu-footer">
                    <p class="price">P {{ menu.price }}</p>
                    <div class="ratings">
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                    </div>
                </div>
            </Link>
        </div>
    </main>

</template>

<script>
    import { Link } from '@inertiajs/vue3'
    import menu from '../../../menu.json'

    export default {
        components: {
            Link
        },
        data() {
            return {
                menu: menu
            }
        }
    }
</script>