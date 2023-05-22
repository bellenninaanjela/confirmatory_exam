<template>
    <header class="menu-header">
        <Link href="/menu">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
        </Link>

        <h4>Meat</h4>
        
        <button>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z" clip-rule="evenodd" />
            </svg>
        </button>
    </header>

    <main class="">
        <div class="menu-image">
            <img src="../../img/menu/4.png" alt="">
        </div>

        <div class="menu-info">
            <h5>Steak Fries Veggies</h5>
            <div class="ratings">
                &#9733;
                &#9733;
                &#9733;
                &#9733;
                &#9733;
            </div>

            <p class="menu-description">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, assumenda? Tempora a rem inventore suscipit debitis? Labore illum ut ea?
            </p>
        </div>
        
        <div class="flex between">
            <p class="menu-price">P 172</p>

            <div class="quantity-container">
                <button @click="decrement()" class="dec">-</button>
                <span>{{ count }}</span>
                <button @click="increment()" class="inc">+</button>
            </div>
        </div>

        <div class="bevarages-container">
            <h5>Beverages</h5>
            <select name="bevarages" id="beverages">
                <option value="Coke">Coke</option>
                <option value="Sprite">Sprite</option>
                <option value="Mountain Dew">Mountain Dew</option>
            </select>
        </div>

        <div class="beverages-tags">
            <button>Regular</button>
            <button>Large</button>
            <button>X-large</button>
        </div>

        <div class="add-ons-container">
            <h5>Add-Ons</h5>
            <div class="add-ons-checkbox">
                <img src="../../img/addOns/sauce.png" alt="">
                <div class="add-ons-info">
                    <h5>Tomato Sauce</h5>
                    <p>Sauce</p>
                    <p class="price">P 49</p>
                </div>
                <div class="right">
                    <input type="checkbox" name="tomato sauce" id=""/>
                    <div class="quantity-container">
                        <button @click="sauceDec()" class="dec">-</button>
                        <span>{{ sauceCount }}</span>
                        <button @click="sauceInc()" class="inc">+</button>
                    </div>
                </div>
            </div>
            <div class="add-ons-checkbox">
                <img src="../../img/addOns/fries.png" alt="">
                <div class="add-ons-info">
                    <h5>Fries</h5>
                    <p>Fries</p>
                    <p class="price">P 70</p>
                </div>
                <div class="right">
                    <input type="checkbox" name="tomato sauce" id=""/>
                    <div class="quantity-container">
                        <button @click="friesDec()" class="dec">-</button>
                        <span>{{ friesCount }}</span>
                        <button @click="friesInc()" class="inc">+</button>
                    </div>
                </div>
            </div>
        </div>

        <footer></footer>
        <button class="add-to-bag">Add to Bag</button>
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
                menu: menu,
                count: 0,
                sauceCount: 0,
                friesCount: 0,
            }
        },
        methods: {
            increment() {
                this.count++
            },
            decrement() {
                this.count--
            },
            sauceInc() {
                this.sauceCount++
            },
            sauceDec() {
                this.sauceCount--
            },
            friesInc() {
                this.friesCount++
            },
            friesDec() {
                this.friesCount--
            },
        }
    }
</script>