<template>
    <header class="faqs-header">
        <Link href="/menuitem">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
        </Link>

        <h4>Order Summary</h4>

    </header>
    <main>
        <div class="address-container">
            <div class="box customer-info">
                <h5>Chou Tzuyu</h5>
                <p>+63 912 345 6789</p>
                <p>chou.tzu-yu@email.com</p>
            </div>
            
            <label class="box radio-box main-address">
                <div>
                    <h5>My Home Address</h5>
                    <p>No. 12 St. Agustin Street, Brgy. De Jose, Delgado City, 2234, Philippines</p>
                </div>
                <input type="radio" name="address" id="home-address">
            </label>
            
            <label class="box radio-box other-address">
                <div>
                    <h5>Work/Office</h5>
                    <p>3rd flr, Anyeong Bldg. Seareal St. Joaquin City, 3456 Philippines</p>
                </div>
                <input type="radio" name="address" id="home-address">
            </label>
        </div>

        <div class="order-summary-container">
            <h4>Orders</h4>
            <div class="item-container box">
                <div class="flex">
                    <img src="../../img/menu/4.png" alt="">
                    <div>
                        <h5>Steak Fries Veggies</h5>
                        <p>1x Tomato Sauce</p>
                        <p>1x Regular Coke</p>
                        <p>1x Fried Chicken</p>
                    </div>
                </div>
                <div class="flex between">
                    <p class="price">P 185</p>
                    <div class="quantity-container">
                        <button @click="decrement()" class="dec">-</button>
                        <span>{{ count }}</span>
                        <button @click="increment()" class="inc">+</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="payment-container">
            <h4>Payment Option</h4>
            <label class="box radio-box cod-option">
                <div>
                    <h5>Work/Office</h5>
                    <p>Pay when you received the order</p>
                </div>
                <input type="radio" name="payment" id="cod">
            </label>
            <label class="box radio-box loyalty-option">
                <div>
                    <h5>Loyalty Points <span>(0 points)</span></h5>
                    <p>Pay when you received the order</p>
                </div>
                <input type="radio" name="payment" id="loyalty-points">
            </label>
            <label class="box radio-box paypal-option">
                <div>
                    <img alt="File:PayPal.svg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/PayPal.svg/800px-PayPal.svg.png?20230314142951" decoding="async" width="800" height="212" srcset="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/PayPal.svg/1200px-PayPal.svg.png?20230314142951 1.5x, https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/PayPal.svg/1600px-PayPal.svg.png?20230314142951 2x" data-file-width="1280" data-file-height="339">
                    <p>A new tab will open to access your account</p>
                </div>
                <input type="radio" name="payment" id="loyalty-points">
            </label>
            <label class="box radio-box paypal-option">
                <div>
                    <img src="https://www.paynamics.com/logos/paynamics_rgb.png" jsaction="VQAsE" class="r48jcc pT0Scc iPVvYb" alt="Paynamics" jsname="kn3ccd" aria-hidden="false"/>
                    <p>Choose paynamics services available from you</p>
                </div>
                <input type="radio" name="payment" id="loyalty-points">
            </label>
        </div>

        <div class="subtotal-container">
            <div class="flex between">
                <p>Subtotal</p>
                <p>P 185</p>
            </div>
            <div class="flex between">
                <p>Delivery Charge</p>
                <p>P 59</p>
            </div>
            <div class="change-container">
                <label for="change">Change for:</label><br>
                <input type="text" placeholder="e.g. 1,000">
            </div>
        </div>
    </main>

    <footer class="checkout-container">
        <div>
            <p>Grand Total</p>
            <p class="price">P 224</p>
        </div>
        <Link href="/order-received" class="place-order-button">Place Order</Link>
    </footer>
</template>


<script>

    import { Link } from '@inertiajs/vue3'

    export default {
        components: {
            Link
        },

        data() {
            return {
                count: 0,
            }
        },

        methods: {
            increment() {
                this.count++
            },
            decrement() {
                this.count--
            },
        }
    }
</script>