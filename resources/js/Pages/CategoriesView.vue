<template>
    <h1>{{ category.name }} Category</h1>

    <table>
        <thead>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </thead>
        <tbody>
            <tr v-for="product in products" :key="product.id">
                <td>{{ product.name }}</td>
                <td>{{ product.description }}</td>
                <td>{{ product.price }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>

    export default {
        props: {
            products: {type: Object},
            category: {type: Object},
        }
    }

</script>