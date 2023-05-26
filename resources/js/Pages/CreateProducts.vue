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
                </label>
            </div>
            <div class="input-container">
                <label for="description">
                    Product Description
                    <textarea v-model="form.product_description" name="product_description" id="product_description"></textarea>
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
                <div class="category" v-for="variation in variations" :key="variation.id">
                    <label>
                        {{ variation.name }}
                        <input v-model="form.variation" type="radio" name="variation" id="variation" :value="variation.id">
                    </label>
                </div>
            </div>

            <button type="submit" class="add-product-button">Add Product</button>
        </form>
    </div>
</template>

<script>
    import useValidate from '@vuelidate/core'
    import { required } from '@vuelidate/validators'

    export default {
        data() {
            return {
                form: {
                    product_name: '',
                    product_description: '',
                    product_price: '',
                    variation: ''
                },
            }
        },

        props: {
            variations: {
                type: Object,
            }
        },

        methods: {
            create() {
                this.$inertia.post('/add-products', this.form);
            }
        }
    }


</script>

<!-- 
100%    1. Dynamic Categories 
            - components: 
100%            home    - DONE
100%            create, - DONE
100%            edit    - DONE

tr      2. Fetching records - if no data, display no data

100%    3. Home: Dynamic Categories - DONE
100%        - clickable categories  - DONE

80%     4. Product count on categories (Home)   - 80%

-       5. Form validations (required)

tr      6. Success message modal

-       7. Create/edit form components into one

a       8. Proper data types and input types

tr      9. Categories cms + image if no image: logo img

100%    10. View Categories - DONE

-       11. Use vue3
        
        laravel:
-       1. migrations: softDelete() 

a       2. Name 'variation' convert to 'category'

100%    3. Category migration: add images   - DONE

a       4. Controller: refactor storing syntax

50%     5. Price data type: decimal

 -->