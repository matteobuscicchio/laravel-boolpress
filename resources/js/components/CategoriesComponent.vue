<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="category in categories">
                    <div class="card-header">
                        <h2>{{ category.id }}</h2>
                    </div>

                    <div class="card-body">
                        {{ category.category }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                categories: ""
            } 
        },
        mounted() {
            axios.get('api/categories').then(response => {
                // console.log(response.data.response);
                this.categories = response.data.response;
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>
<style lang="scss" scoped>
    .card{
        margin: 10px 0;
    }
</style>