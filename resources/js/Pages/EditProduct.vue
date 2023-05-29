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
                    <p class="error" v-if="errors.product_name" >{{ errors.product_name }}</p>
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
                    <p class="error" v-if="errors.product_description" >{{ errors.product_description }}</p>
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
                    <p class="error" v-if="errors.product_price" >{{ errors.product_price }}</p>
                </label>
            </div>
            <div class="input-container" >
                <label>Category</label>
                <select v-model="form.category" id="category" name="category">
                    <option value="">Select Category</option>
                    <option v-for="category in categories" :key="category.id" :value="category.id" name="category">
                    {{ category.name }}
                    </option>
                </select>
                <p class="error" v-if="errors.category" >{{ errors.category }}</p>
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
                    category: this.product.category
                },
            }
        },

        props: {
            product: {
                type: Object,
            },

            categories: {
                type: Object,
            },

            errors: Object

        },

        methods: {
            async edit() {
                const response = await this.$inertia.put(`/products/edit/${this.product.id}`, this.form);

                if (response.errors) {
                    this.errors = response.errors;
                } else {
                    this.$inertia.visit('/products');
                }
            }

        }
    }


</script>