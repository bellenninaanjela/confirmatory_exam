<template>
    <nav v-show="show">
        <div class="sidebar">
            <div class="sidebar-container">
                <div class="sidebar-header">
                    <div class="user-avatar">
                        <img src="./images.jpg" alt="user_avatar">
                    </div>
                    <button class="points-header" @click="show = false" >
                        <h4>{{ account.points }} Points</h4>
                        <svg class="chevron-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
                <h3 class="account-name">Chou Tzuyu</h3>
                <p class="contact-number">+63 912 345 6789</p>

                <div class="links">
                        <Link href="/">Home</Link>
                        <Link href="/menu">Menu</Link>
                        <Link href="/products">Product Management</Link>
                    <!-- <div>
                        <Link href="/">Notification</Link>
                    </div>
                    <div>
                        <Link href="/">Store Locator</Link>
                    </div> -->
                        <Link href="/faqs">FAQ's</Link>
                </div>
            </div>

        </div>
    </nav>

    <header>
       <nav>
            <button class="menu-button" @click="show = true" >
                <svg class="icons" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                </svg>
            </button>
            <button class="points-header">
                <h4>{{ account.points }} Points</h4>
                <svg class="chevron-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
            <div class="user-avatar">
                <img src="./images.jpg" alt="user_avatar">
            </div>
       </nav>
    </header>

    <main>
        <div class="main-header">
            <div class="food-logo">
                <img src="/img/burger.png" alt="">
            </div>
            <div class="greeting">
                <p>Anneoyong, {{ account.firstName }}!</p>
                <h3>What do you want to eat?</h3>
            </div>
        </div>

        <div class="search-container">
            <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>

            <input type="text" placeholder="try our new Steak Fries Veggies" class="search-input">
        </div>



        <div class="special-offer-container">
            <div class="special-title">
                <h4>Special Offers!</h4>
                <button>
                    View All
                    <svg class="chevron-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>

            <div class="special-offer-cards">
                <div class="special-card">
                    <img src="/img/special_offers/vegburger1.png" alt="">
                </div>
                <div class="special-card">
                    <img src="/img/special_offers/vegburger1.png" alt="">
                </div>
                <div class="special-card">
                    <img src="/img/special_offers/vegburger1.png" alt="">
                </div>
                <div class="special-card">
                    <img src="/img/special_offers/vegburger1.png" alt="">
                </div>
            </div>

            
        </div>

        <!-- category -->
        <div class="category-container">
            <div class="category-title">
                <h4>Category</h4>
            </div>

            <div class="category-cards">
                <Link 
                    class="category-card" 
                    v-for="category in categories" 
                    :key="category.id"
                    :href="`/category/${category.id}`" 
                >
                    <img :src="category.image" alt="">
                    <div class="category-info">
                        <h5>{{ category.name }}</h5>
                        <template :v-if="category.id === 1">
                            <p >{{ beef.length }} meals</p>
                        </template>
                        <template :v-else-if="category.id === 2">
                            <p >{{ chicken.length }} meals</p>
                        </template>
                        <template :v-else-if="category.id === 3">
                            <p >{{ veggy.length }} meals</p>
                        </template>
                    </div>
                </Link>
            </div>
        </div>

        <!-- whats new -->
        <div class="whats-new-container">
            <h4>What's New?</h4>
            <img src="/img/special_offers/special_menu.png" alt="">
        </div>

        <!-- most popular -->
        <div class="most-popular-container">
            <h4>Most Popular</h4>
            <div class="menu-cards">
                <MenuCard>
                    <template #food-img>
                        <img src="/img/menu/1.png" alt="">
                    </template>
                    <template #default>
                        <h5>Steak Fries Veggies</h5>
                        <p class="menu-type">Meat</p>
                    </template>
                    <template #footer>
                        <p class="price">P 175</p>
                    </template>
                </MenuCard>
                <MenuCard>
                    <template #food-img>
                        <img src="/img/menu/1.png" alt="">
                    </template>
                    <template #default>
                        <h5>Steak Fries Veggies</h5>
                        <p class="menu-type">Meat</p>
                    </template>
                    <template #footer>
                        <p class="price">P 175</p>
                    </template>
                </MenuCard>
                <MenuCard>
                    <template #food-img>
                        <img src="/img/menu/1.png" alt="">
                    </template>
                    <template #default>
                        <h5>Steak Fries Veggies</h5>
                        <p class="menu-type">Meat</p>
                    </template>
                    <template #footer>
                        <p class="price">P 175</p>
                    </template>
                </MenuCard>
                <MenuCard>
                    <template #food-img>
                        <img src="/img/menu/1.png" alt="">
                    </template>
                    <template #default>
                        <h5>Steak Fries Veggies</h5>
                        <p class="menu-type">Meat</p>
                    </template>
                    <template #footer>
                        <p class="price">P 175</p>
                    </template>
                </MenuCard>

            </div>
        </div>

        

        <Link href="/menu" class="order-now">
            Order Now!
        </Link>
    </main>



</template>

<script>

    import { Link } from '@inertiajs/vue3'
    import account from '../../../account.json'
    import Header from '../Pages/Header.vue'
    import MenuCard from '../Components/MenuCard.vue'

    export default {
        components: {
            Link,
            MenuCard
        },

        data() {
            return {
                show: false,
                account: account,
            }
        },

        props: {
            categories: {
                type: Array,
                required: true
            },

            beef: {type: Array},
            chicken: {type: Array},
            veggy: {type: Array},
        }
    }
</script>