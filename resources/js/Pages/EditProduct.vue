<template>  
    <div class="product-form-container">
        <form action="" @submit.prevent="edit">
            <div class="input-container">
                <label for="product_name">
                    Name of Product
                    <input 
                        type="text" 
                        v-model="form.product_name"
                        placeholder="Enter name of product" 
                        name="product_name" 
                        id="product_name"
                    >
                </label>
            </div>
            <div class="input-container">
                <label for="description">
                    Product Description
                    <textarea 
                        v-model="form.product_description" 
                        name="product_description" 
                        id="product_description"
                    ></textarea>
                </label>
            </div>
            <div class="input-container">
                <label for="name">
                    Price of product
                    <input 
                        v-model="form.product_price"
                        type="text" 
                        placeholder="price" 
                        name="product_price"
                    >
                </label>
            </div>
            <div class="input-container" >
                <label>Category</label>
                <div class="category">
                    <div class="category" v-for="variation in variations" :key="variation.id">
                        <label>
                            {{ variation.name}}
                            <input v-model="form.variation" type="radio" name="variation" id="variation" :value="variation.id">
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex between">
                <Link href="/products" class="back-products-button">Back</Link>
                <button type="submit" class="add-product-button edit-btn">Edit</button>
            </div>
        </form>
    </div>
</template>

<script>
    import { Link } from '@inertiajs/vue3';

    export default {
        components: {
            Link
        },
        data() {
            return {
                form: {
                    product_name: this.product.name,
                    product_description: this.product.description,
                    product_price: this.product.price,
                    // variation: this.product.variation
                },
            }
        },

        props: {
            product: {
                type: Object,
            },

            variations: {
                type: Object,
            }
        },

        methods: {
            edit() {
                this.$inertia.put(`/products/edit/${this.product.id}`, this.form);
            }
        }
    }


</script>