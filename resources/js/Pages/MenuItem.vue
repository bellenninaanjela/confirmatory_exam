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

        <button class="add-to-bag" @click="showModal = true">Add to Bag</button>

        <Modal :show="!showModal" @close="showModal = false">
            <template #svg-icon>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path d="M7.493 18.75c-.425 0-.82-.236-.975-.632A7.48 7.48 0 016 15.375c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23h-.777zM2.331 10.977a11.969 11.969 0 00-.831 4.398 12 12 0 00.52 3.507c.26.85 1.084 1.368 1.973 1.368H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 01-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227z" />
                </svg>
            </template>

            <template #modal-status>
                <h4>Successfully Added!</h4>
                <p>What do you want to do now?</p>
            </template>

            <template #modal-buttons>
                <Link href="/checkout" class="proceed-checkout-button modal-button">Proceed to Checkout</Link>

                <Link href="/menu" class="add-more-button modal-button">Add more</Link>
            </template>
            
        </Modal>
    </main>

</template>

<script>
    import { Link } from '@inertiajs/vue3'
    import menu from '../../../menu.json'
    import Modal from './Modal.vue'

    export default {
        components: {
            Link,
            Modal
        },
        data() {
            return {
                menu: menu,
                count: 0,
                sauceCount: 0,
                friesCount: 0,
                showModal: false,
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