<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="article in articles">
                    <div class="card-header">
                        <h2>{{ article.title }}</h2>
                        <h5>{{ article.author }}</h5>
                    </div>

                    <div class="card-body">
                        {{ article.body }}
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
                articles: ""
            } 
        },
        mounted() {
            axios.get('api/articles').then(response => {
                // console.log(response.data.response);
                this.articles = response.data.response;
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