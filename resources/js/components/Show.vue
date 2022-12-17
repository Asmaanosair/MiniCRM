<template>
    <main class="container">
        <div class="row">
            <div class="input-group input-group-lg mt-5">
                <router-link :to="{name:'index'}" class="btn btn-success btn-sm ml-2 mr-2">Back</router-link>
                   <h1 class="items-center">Company Details</h1>
            </div>
        </div>
        <div class="row mt-5">
        <h1 >Company Name : {{company.name}} Email:{{ company.email}}</h1>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>

                </tr>
                </thead>
                <tbody>
                <tr v-for="employee in employees">
                    <th scope="row">{{employee.id}}</th>
                    <td>{{employee.first_name}}</td>
                    <td>{{employee.last_name}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </main>
</template>

<script>
    export default {
        data(){
            return {
                employees:{},
                company:{},
                name:''
            }
        },
        mounted() {
            this.get()
        },
        methods: {
            get() {
                axios.get('employee/'+this.$route.params.id).then(res => {
                    this.employees=res.data.employee.data
                    this.company=res.data.company
                    console.log(this.company.name)
                })
            },
        }
    }
</script>
