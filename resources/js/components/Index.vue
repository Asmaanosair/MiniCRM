<template>
    <main class="container">

        <div class="row">
            <div class="input-group input-group-lg mt-5">

                <input type="text" class="form-control" aria-label="Large" v-model="name" @input="get"  placeholder="search" aria-describedby="inputGroup-sizing-sm">
            </div>
        </div>
        <div class="row mt-5">
        <h1 >Top Company</h1>

        <div class="col mt-2" v-for="company in companies">
            <div class="card" style="width: 18rem;">
                <img :src="imageUrl+company.logo" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{company.name}}</h5>
                    <p class="card-text">{{company.email}}</p>
                 <router-link :to="{name:'show',params:{id:company.id} }" class=" btn btn-sm btn-danger">More</router-link>
                </div>
            </div>
        </div>
        </div>
    </main>
</template>

<script>
    export default {
        data(){
            return {
                companies:{},
                name:'',
                imageUrl:''
            }
        },
        mounted() {
            this.baseUrl()
            this.get()

        },
        methods: {
            baseUrl(){
                this.imageUrl=window.location.href+'storage/company/'
                console.log(window.location)

            },
            get() {
                axios.get('/company',{
                    params:{
                        name:this.name
                    },
                }).then(res => {
                    this.companies=res.data.data
                })
            },
        }
    }
</script>
