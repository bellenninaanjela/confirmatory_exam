<template>  

    <div class="product-form-container">
        <form action="" @submit.prevent="create">
            <div class="input-container">
                <label for="product_name">
                    Name of Product
                <!-- validations -->
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
                    <textarea v-model="form.product_description" name="product_description" id="product_description"></textarea>
                    <p class="error" v-if="errors.product_description" >{{ errors.product_description }}</p>
                </label>
            </div>
            <div class="input-container">
                <label for="name">
                    Price of product
                    <input 
                        v-model="form.product_price"
                        type="number" 
                        placeholder="price" 
                        name="product_price"
                    >
                    <p class="error" v-if="errors.product_price" >{{ errors.product_price }}</p>

                </label>
            </div>
            <div class="input-container" >
                <label for="category">Category:</label>
                <select v-model="form.category" id="category" name="category">
                    <option value="">Select Category</option>
                    <option v-for="category in categories" :key="category.id" :value="category.id" name="category">
                    {{ category.name }}
                    </option>
                </select>
                <p class="error" v-if="errors.category" >{{ errors.category }}</p>
            </div>

            <button type="submit" class="add-product-button">Add Product</button>
        </form>
    </div>
</template>

<script>
    import { useForm } from '@inertiajs/vue3'
    import useValidate from '@vuelidate/core'
    import { required } from '@vuelidate/validators'

    export default {
        setup() {
            const form = useForm({
                product_name: '',
                product_description: '',
                product_price: '',
                category: ''
            })

            return { form }
        },

        props: {
            categories: {
                type: Object,
            },

            errors: Object
        },

        methods: {
            async create() {
                const response = await this.$inertia.post('/add-products', this.form);

                if (response.errors) {
                    this.errors = response.errors;
                } else {
                    this.$inertia.visit('/products');
                }
            }

        }
    }


</script>

<!-- 
100%    1. Dynamic Categories 
            - components: 
100%            home   
100%            create,
100%            edit   

100%    2. Fetching records - if no data, display no data

100%    3. Home: Dynamic Categories
           - clickable categories 

100%    4. Product count on categories (Home)  

100%    5. Form validations (required)

-       6. Success message modal

-       7. Create/edit form components into one

100%    8. Proper data types and input types

-       9. Categories cms + image if no image: logo img

100%    10. View Categories

10%     11. Confirmation
            (only delete)

-       12. Use vue3
        
        laravel:
20%     1. migrations: softDelete() 

100%     2. Name 'variation' convert to 'category'
            -migrations:
100%            -products
100%            -variation
            -model:
100%            -product
100%            -variation
100%        -controller:
                -ProductionController 
100%                -method
100%                -declaration
                -VariationController
100%                -method
100%                -function

100%    3. Category migration: add images  

60%     4. Controller: refactor storing syntax

100%    5. Price data type: decimal

 -->