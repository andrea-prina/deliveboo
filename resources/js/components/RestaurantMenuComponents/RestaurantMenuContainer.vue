<template>
    <section>
        <div class="container-lg py-4">
            <div class="row py-4">
                <div class="col-12 col-lg-8">
                    <div class="row g-5 my-4">
                    <div class="col-12 col-lg-6 my-2" v-for="menuitem in menu" :key="menuitem.id">
                        <RestaurantMenuCard :menuitem="menuitem"
                        @addToCart='addItem'/>
                    </div>
                </div>
                </div>
            <!-- catt side  -->
                <div class="col-12 col-lg-4 ">
                    <div class="col-12">
                        <RestaurantMenuCart
                        v-if="cart.length"
                        :cart="cart"
                        :storageKey="storageKey"
                        :total="getTotal()"
                        @faistoreset="resetCart"
                        @remove1food="removeItem"
                        @add1food="addItem"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import RestaurantMenuCard from './RestaurantMenuCard.vue'
import RestaurantMenuCart from './RestaurantMenuCart.vue'

export default {
    name: 'RestaurantMenuContainer',
    components: {
        RestaurantMenuCard,
        RestaurantMenuCart,

    },
    data() {
        return {
            menu: [
                    {
                    id:1,
                    name: 'food1',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                    price: 100,
                    image: 'https://picsum.photos/200/300',
                    },
                    {
                    id:2,
                    name: 'food2',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                    price: 200,
                    image: 'https://picsum.photos/200/300',
                    },
                    {
                        id:3,
                    name: 'food3',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                    price: 300,
                    image: 'https://picsum.photos/200/300',
                    },
                    {
                    id:4,
                    name: 'food4',
                    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                    price: 400,
                    image: 'https://picsum.photos/200/300',
                    },
                ],
            cart:[],
            storageKey:'deliveboo'
        }

    },
    methods: {
        //se l'utente ha un cerrello lo carica
        initCart(){
             const data = this.getCart()
             if(data){
                this.cart = data
             }else{
                this.syncCart()
             }
        },
        syncCart() {
            const localCartStorage = JSON.stringify(this.cart)
            localStorage.setItem(this.storageKey, localCartStorage)
        },
        getCart(){
            const stringResult= localStorage.getItem(this.storageKey)
            if(stringResult){
                return JSON.parse(stringResult)
            }else{
                return null
            }
        },
        testInitCart() {
            this.cart = [{
                    "id": 1,
                    "name": "Pizza Margherita",
                    "price": 499,
                    "quantity": 2,
                    "image": "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                },
                {
                    "id": 2,
                    "name": "Pizza Prosciutto",
                    "price": 599,
                    "quantity": 1,
                    "image": "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                },
                {
                    "id": 3,
                    "name": "Pizza Funghi",
                    "price": 699,
                    "quantity": 1,
                    "image": "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                },
                {
                    "id": 4,
                    "name": "Pizza Quattro Stagioni",
                    "price": 799,
                    "quantity": 1,
                    "image": "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                },
                {
                    "id": 5,
                    "name": "Pizza Quattro Formaggi",
                    "price": 899,
                    "quantity": 1,
                    "image": "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                },
                {
                    "id": 6,
                    "name": "Pizza Marinara",
                    "price": 999,
                    "quantity": 1,
                    "image": "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                },
                {
                    "id": 7,
                    "name": "Pizza Capricciosa",
                    "price": 1099,
                    "quantity": 1,
                    "image": "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                },
                {
                    "id": 8,
                    "name": "Pizza Diavola",
                    "price": 1199,
                    "quantity": 1,
                    "image": "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                },
                {
                    "id": 9,
                    "name": "Pizza Hawaii",
                    "price": 1299,
                    "quantity": 1,
                    "image": "https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                },
                {
                    "id": 10,
                    "name": "Pizza Calzone",
                    "price": 1399,
                }];
            this.syncCart();
        },
        //ritorna l'oggetto se esiste nel carrello
        findById(id){
           return this.cart.findIndex((item) => item.id == id)
        },
        addItem(item){
            console.log({aggiunge:item})
            const itemIndex = this.findById(item.id)
            if(itemIndex >= 0){
                this.cart[itemIndex].quantity++
            }else{
                this.cart.push({ quantity: 1, ...item })
            }
            this.syncCart()
        },
        //diminuisce di uno la quantity del item all'indice fornito o lo rimuove se era l'ultimo elemento
        removeItem(id){
            console.log({rimuove:id})
            const itemIndex = this.findById(id)
            if(itemIndex === -1) return
           this.cart[itemIndex].quantity--
            if(this.cart[itemIndex].quantity<= 0){
                this.cart.splice(itemIndex,1)
            }
            this.syncCart()
        },
        resetCart(){
            console.log(this.cart)
            this.cart = []
            this.syncCart()
        },
        //ritorna il totale del carrello
        getTotal(){
            return this.cart.reduce((acc, item) => acc + item.price * item.quantity, 0)
        },

    },
    mounted() {
        this.initCart();
    }
}
</script>

<style lang="scss">
@import "../../../sass/app.scss";


</style>
